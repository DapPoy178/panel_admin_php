<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!$_SESSION['name']){
  header("Location:../index.php?session=expired");
}
include("header.php"); 
?>
<?php include ('../config/conf.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php'); ?>

  <!-- Navbar -->
  <?php include('navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('content_header.php'); ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
    if(isset($_GET['page'])){
      if($_GET['page']=='dashboard'){
        include('dashboard.php'); 
      }
      else if($_GET['page']=='data'){
        include('data.php');
      }
      else if($_GET['page']=='edit-page'){
        include('edit_page.php');
      }
      else{
        echo "not found";
      }
    }else{
      include('dashboard.php');
    }
    ?> 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  <?php include('control_sidebar.php'); ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
