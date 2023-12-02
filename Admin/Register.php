<!-- user registration record fetch here -->
<?php
// icludes files here
session_start();
include('Config/db.php');
include('includes/header.php');
include('Authentication.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<!-- Content Wrapper -->
<div class="content-wrapper" style="height: auto;">
  <!-- Content Header -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php" class="text-dark">Back Home</a></li>
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
          <h4>Registered Users</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- Table -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- /Table -->
        <div class="table-responsive">
          <table class="table table-dark table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- Fetch all the data from database -->
              <?php
              if ($conn) {
                $slt = "SELECT * FROM `user-table`";
                $query = mysqli_query($conn, $slt);
                if ($query) {
                  while ($row = mysqli_fetch_assoc($query)) {
                    $id = $row['Id'];
                    $name = $row['Name'];
                    $email = $row['Email'];
                    $phone = $row['Phone'];
                    echo "<tr>
                            <td>$name</td>
                            <td>$email</td>
                            <td>$phone </td>
                            <td>
                            <a href='update.php?updId=$id' class='btn btn-outline-success m-1'>Edit</a>
                            <a href='delete.php?deleteid=$id' class='btn btn-outline-danger m-1'>Delete</a>
                            </td>
                            </tr>";
                  }
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
</div>
<!-- Footer include file -->
<?php include('includes/footer.php'); ?>