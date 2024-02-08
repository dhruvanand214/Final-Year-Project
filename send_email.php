<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


include('db.php');

// Get the current date and time
$currentDateTime = date('Y-m-d H:i:s');

// Get the date and time 24 hours before the current date and time
$reminderDateTime = date('Y-m-d H:i:s', strtotime('-24 hours', strtotime($currentDateTime)));

// Get the forms with upcoming deadlines within the 24-hour time frame
$query = "SELECT * FROM forms WHERE `Last Date` > '$reminderDateTime' AND `Last Date` <= '$currentDateTime'";
$result = mysqli_query($con, $query);

// Iterate through the forms
while ($form = mysqli_fetch_assoc($result)) {
    $formId = $form['S.no'];
    $formName = $form['Name'];
    $formLastDate = $form['Last Date'];



    // Fetch the year_name value from the database for a specific row
    $yearName = $form['year_name'];

    // Convert the value into an array
    $yearArray = explode(',', $yearName);

    // Loop through the array and perform operations
    foreach ($yearArray as $year) {
        // Access each individual value and perform necessary operations
        //$sql = "SELECT `year_id` FROM years WHERE `year_name` = '$year'";
        $stmt = $con->prepare("SELECT year_id FROM years WHERE year_name = '$year'");

        $stmt->execute();
        $stmt->bind_result($yearId);
        $stmt->fetch();
        $stmt->close();
        echo $year;


        // Get the students who need to fill the form

        $studentsQuery = "SELECT * FROM students WHERE `year_id` = '$yearId'"; // Adjust the condition as per your requirements
        $studentsResult = mysqli_query($con, $studentsQuery);


        // Iterate through the students
        while ($student = mysqli_fetch_assoc($studentsResult)) {
            $studentEmail = $student['Email'];

            $mail = new PHPMailer(true);

            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'mynameisda123@gmail.com';                     //SMTP username
            $mail->Password   = 'dijgzqrafhbsiinc';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            // Set the "From" address
            $mail->setFrom('mynameisda123@gmail.com', 'HOD(CS)');
            // Set the recipient email address
            $mail->addAddress($studentEmail);

            // Set the email subject and body
            $mail->Subject = 'Form Reminder';
            $mail->Body = "Dear Student,\n\nThis is a reminder to fill the form '{$formName}' before the deadline on {$formLastDate}.\n\nRegards,\nHOD(CS)";

            // Send the email
            if (!$mail->send()) {
                echo 'Error sending email to: ' . $studentEmail . '<br>';
                echo 'Error details: ' . $mail->ErrorInfo . '<br>';
            } else {
                echo 'Email sent successfully to: ' . $studentEmail . '<br>';
            }
        }
    }
}

// mysqli_close($con);
