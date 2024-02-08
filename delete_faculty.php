<?php

include('db.php');

$id2 = $_GET['id2'];

$deletequery = "DELETE FROM `faculty` WHERE Fac_no = $id2";

$query = mysqli_query($con, $deletequery);

header('location:all_faculty.php');

?>