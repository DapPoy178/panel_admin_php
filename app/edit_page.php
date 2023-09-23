<?php 

$id     = $_GET['id'];
$query  = mysqli_query($conn, "SELECT * FROM datastudent WHERE id='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Form</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="get" action="crud/edit_item.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Id Student</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="id_student" value="<?php echo $view['id_student']; ?>">
                                <input type="text" class="form-control" placeholder="Enter ..." name="id" value="<?php echo $view['id']; ?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="name" value="<?php echo $view['name'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Major</label>
                                <select class="form-control" name="major" required>
                                    <option selected><?php echo $view['major']; ?></option>
                                    <option value="Programmer">Programmer</option>
                                    <option value="Designer">Designer</option>
                                    <option value="Engineer">Engineer</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Semester</label>
                                <select class="form-control" name="semester" required>
                                    <option selected><?php echo $view['semester']; ?></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>