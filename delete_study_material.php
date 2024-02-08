<?php

include('db.php');

$id4 = $_GET['id4'];

$deletequery = "DELETE FROM `study_material` WHERE S.no = $id4";

$query = mysqli_query($con, $deletequery);

header('location:all_study_material.php');

?>