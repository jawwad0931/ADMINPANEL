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
                    <th>FullName</th>
                    <th>Services</th>
                    <th>AppointDate</th>
                </tr>
              </thead>
              <tbody>
                <!-- Fetch all the data from database -->
                <?php 
                include("Config/db.php");
                if($conn){
                $Lawyerslt = "SELECT * FROM `appointlawyer`";;
                $Run_detailsql = mysqli_query($conn, $Lawyerslt);

                // Check if any rows were returned
                if (mysqli_num_rows($Run_detailsql) > 0) {
                    echo '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>FullName</th>
                            <th>Services</th>
                            <th>AppointDate</th>
                        </tr>
                    </thead>
                    <tbody>';

                    // Fetch data and output rows in the table
                    while ($row = mysqli_fetch_assoc($Run_detailsql)) {
                        echo '<tr>
                        <td scope="row"> '. $row['Id'] .'</td>
                        <td scope="row"> '. $row['FullName'] .'</td>
                        <td scope="row"> '. $row['Serivce'] .'</td> 
                        <td scope="row"> '. $row['AppointDate'] .'</td> 
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