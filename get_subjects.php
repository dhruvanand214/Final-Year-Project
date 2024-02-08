<!-- get_subjects.php -->

<?php

include('db.php');
// Check if the year parameter is present
if (isset($_POST['year'])) {
  $selectedYear = $_POST['year'];

  // Retrieve the subjects for the selected year
  $stmt = $con->prepare("SELECT s.subject_id, s.subject_name FROM subjects s INNER JOIN year_subjects ys ON s.subject_id = ys.subject_id INNER JOIN years y ON ys.year_id = y.year_id WHERE y.year_name = '$selectedYear'");
  //$stmt->bind_param("s", $selectedYear);
  $stmt->execute();
  $result = $stmt->get_result();

  // Generate the dropdown menu options
  $options = '<option value="">Select Subject</option>';
  while ($row = $result->fetch_assoc()) {
    $subjectId = $row['subject_id'];
    $subjectName = $row['subject_name'];
    $options .= '<option value="' . $subjectId . '">' . $subjectName . '</option>';
    }

  // // Return the generated options
  echo $options;
    
}


