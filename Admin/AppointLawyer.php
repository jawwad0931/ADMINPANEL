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
  <!-- Table -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card bg-light  pt-3 pb-3">
          <h4 class="fs-1 pl-3">User Appointment table</h4>
        </div>
        <div class="table-responsive">
          <table class="table table-dark table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>Id</th>
                <th>FullName</th>
                <th>Services</th>
                <th>AppointDate</th>
                <th>status</th>
                <th>toggle</th>
              </tr>
            </thead>
            <tbody>
              <!-- Fetch all the data from database -->
              <?php
              include("Config/db.php");
              if ($conn) {
                $Lawyerslt = "SELECT * FROM `appointlawyer`";
                ;
                $Run_detailsql = mysqli_query($conn, $Lawyerslt);

                // Check if any rows were returned
                if (mysqli_num_rows($Run_detailsql) > 0) {
                  // Fetch data and output rows in the table
                  while ($row = mysqli_fetch_assoc($Run_detailsql)) {
                    echo "<tr>
                      <td scope='row'> " . $row['Id'] . "</td>
                      <td scope='row'> " . $row['FullName'] . "</td>
                      <td scope='row'> " . $row['Serivce'] . "</td> 
                      <td scope='row'> " . $row['AppointDate'] . "</td> 
                      <td>";
                      if ($row['status'] == "1") {
                          echo 'pending';
                      } else {
                          echo 'complete';
                      }
                      echo "</td>
                      <td>";                     
                      // Generate link based on the value of $course['status']
                      if ($row['status'] == "1") {
                          echo "<a href='deactivate.php?deactivateId=" . $row['Id'] . "' class='btn btn-danger btn-sm'>Unpaid</a>";
                         
                      } else {
                          echo "<a href='activate.php?activateId=" . $row['Id'] . "' class='btn btn-success btn-sm'>Paid</a>";
                      }
                      echo "</td>                     
                    </tr>";
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
      </div>
    </div>
  </div>
</div>
</div>
<?php include('includes/footer.php'); ?>