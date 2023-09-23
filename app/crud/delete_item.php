<?php

include('../../config/conf.php');

$id     = $_GET['id'];
$query  = mysqli_query($conn, "DELETE FROM datastudent WHERE id='$id'");
header("Location:../index.php?page=data");

?>