<?php
session_start();
include('Config/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<!-- Content Wrapper -->
<div class="content-wrapper">
  <!-- Content Header -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index.php" class="text-dark">Back Home</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Popup Modal use for Crud -->
  <div class="container">
    <!-- check Session -->
    <div class="row">
      <?php
      if (isset($_SESSION['status'])) {
        echo "<h4>" . $_SESSION['status'] . "</h4>";
        unset($_SESSION['status']);
      }
      ?>
    </div>
    <div class="card bg-light">
      <div class="row m-3">
        <div class="col-6">
          <h4>Register User</h4>
        </div>
        <div class="col-6  d-flex justify-content-end">
          <!-- Modal -->
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
            Add User
          </button>
          <!-- Modal Form Content Here -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <form Action='imagecode.php' method='POST' enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="image">Image</label>
                      <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-secondary" name='AddImage'>Upload</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Table -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- /Table -->
        <div class="table-responsive">
          <table class="table table-dark table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>Id</th>
                <th>Image</th>
              </tr>
            </thead>
            <tbody>
              <!-- Fetch all the data from database -->
              <?php
              if ($conn) {
                $slt = "SELECT * FROM `updateimage`";
                $query = mysqli_query($conn, $slt);
                if ($query) {
                  while ($row = mysqli_fetch_assoc($query)) {
                    $id = $row['Id'];
                    $image = $row['image'];
                    echo "<tr>
                            <td>$id</td>
                            <td>$image</td>
                            <td>
                            <a href='updateImage.php?updImgId=$id' class='btn btn-success'>Edit</a>
                            <a href='deleteImage.php?deleteImgid=$id' class='btn btn-danger'>Delete</a>
                            </td>
                            </tr>";
                  }
                }else{
                    echo "Query Doesnot run";
                }
              }
              ?>
            <tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>