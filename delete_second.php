<?php

include('db.php');

$id = $_GET['id'];

$deletequery = "DELETE FROM `students_second` WHERE Roll_No = $id";

$query = mysqli_query($con, $deletequery);

header('location:second_year.php');

?>