<?php
    session_start();
    include('Authentication.php');
    include('Config/db.php');
    include('includes/header.php');
    include('includes/sidebar.php');
    include('includes/topbar.php');
?>

<!-- Content Wrapper -->
<div class="content-wrapper">
 <!-- Table -->
 <div class="container mt-5">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Registration table</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- Fetch all the data from database -->
                <?php 
                include("Config/db.php");
                if($conn){
                $user2 = "SELECT * FROM `user-table2`";;
                $Run_sql = mysqli_query($conn, $user2);

                // Check if any rows were returned
                if (mysqli_num_rows($Run_sql) > 0) {
                    echo '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>';

                    // Fetch data and output rows in the table
                    while ($row = mysqli_fetch_assoc($Run_sql)) {
                        echo '<tr>
                        <td scope="row"> '. $row['Id'] .'</td>
                        <td scope="row"> '. $row['Email'] .'</td>
                        <td scope="row"> '. $row['Message'] .'</td> 
                        </tr>';
                    }

                    echo '</tbody>
                    </table>';
                } else {
                    echo "No records found";
                }

                // Close the connection
                $conn->close();
            }
            ?>
              <tbody>
            </table>
          </div>
          <?php include('includes/footer.php'); ?>
        </div>
      </div>
    </div>
  </div>
</div>