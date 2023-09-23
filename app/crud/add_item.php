<?php

include('../../config/conf.php');

$id_student     =   $_GET['id_student'];
$name           =   $_GET['name'];
$major          =   $_GET['major'];
$semester       =   $_GET['semester'];

$query          =   mysqli_query($conn, "INSERT INTO datastudent(id,id_student,name,major,semester) VALUES('','$id_student','$name','$major','$semester')");
header("Location:../index.php?page=data");

?>