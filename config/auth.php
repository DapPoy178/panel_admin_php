<?php
session_start();
include("conf.php");

$username   = $_POST['username'];
$password   = $_POST['password'];

$query      = mysqli_query($conn, "SELECT * from users WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($query)==1){
    header("Location: ../app");
    $user = mysqli_fetch_array($query);
    $_SESSION['name']   = $user['name'];
    $_SESSION['level']  =$user['level'];

}else if($username == '' && $password == ''){
    header("Location: ../index.php?error=2");

}else{
    header("Location: ../index.php?error=1");
}

?>