<?php

include('../../config/conf.php');

$id             =   $_GET['id'];
$id_student     =   $_GET['id_student'];
$name           =   $_GET['name'];
$major          =   $_GET['major'];
$semester       =   $_GET['semester'];

$query          =   mysqli_query($conn, "UPDATE datastudent SET id_student='$id_student',name='$name',major='$major',semester='$semester' WHERE id='$id'");
header("Location:../index.php?page=data");

?>