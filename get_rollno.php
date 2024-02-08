<?php
// Assuming you have a database connection established
include('db.php');

if (isset($_POST['year_id'])) {
    $yearId = $_POST['year_id'];
    
    // Retrieve the Roll_No values for the selected year_id
    $stmt = $con->prepare("SELECT `Roll_No` FROM `students` WHERE year_id = $yearId");
    //$stmt->bind_param("i", $yearId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Fetch the Roll_No values and store them in an array
    $rollNos = array();
    while ($row = $result->fetch_assoc()) {
        $rollNos[] = $row['Roll_No'];
    }
    
    // Return the Roll_No values as JSON response
    echo json_encode($rollNos);
}
?>