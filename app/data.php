<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <h3 class="card-title">DataTable with default features</h3>
            <button type="button" class="btn btn-primary ml-auto justify-content-end" data-toggle="modal" data-target="#modal-lg">Add Item</button>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Id Student</th>
                  <th>Name</th>
                  <th>Major</th>
                  <th>Semester</th>
                  <th width="5%">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $order  = 1;
                $query  = mysqli_query($conn, "select * from datastudent");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <td><?php echo $order++ ?></td>
                    <td><?php echo $data['id_student'] ?></td>
                    <td><?php echo $data['name'] ?></td>
                    <td><?php echo $data['major'] ?></td>
                    <td><?php echo $data['semester'] ?></td>
                    <td class="d-flex justify-content-between">
                      <a onclick="delete_item(<?php echo $data['id']; ?>)" class="text-red" style="cursor: pointer;"><i class="bi bi-x-square-fill" style="font-size: 20px;"></i></a>
                      <a href="index.php?page=edit-page&&id=<?php echo $data['id'];?>" class="text-yellow"><i class="bi bi-pencil-square" style="font-size: 20px;"></i></a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Large Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get" action="crud/add_item.php">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name" name="id_student">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="First name" name="name">
            </div>
            <div class="col">
              <select class="form-control" name="major" required>
                <option value="">Select Major</option>
                <option value="Programmer">Programmer</option>
                <option value="Designer">Designer</option>
                <option value="Engineer">Engineer</option>
              </select>
            </div>
            <div class="col">
              <select class="form-control" name="semester" required>
                <option value="">Select Semester</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Go</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
  function delete_item(data_id) {
    Swal.fire({
      title: 'Do you want to delete the data?',
      showCancelButton: true,
      confirmButtonText: 'Delete',
      confirmButtonColor: 'red',
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        window.location=("crud/delete_item.php?id="+data_id);
        Swal.fire('Saved!', '', 'success')
      } else if (result.isDenied) {
        Swal.fire('Changes are not saved', '', 'info')
      }
    })
  }
</script>
</body>
</html>