<?php

include('db.php');

$id1 = $_GET['id1'];

$deletequery = "DELETE FROM `forms` WHERE `S.no` = $id1";

$query = mysqli_query($con, $deletequery);

header('location:all_Forms.php');

?>