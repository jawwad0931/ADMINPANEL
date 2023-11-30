<?php
session_start();
include('Authentication.php');
include('Config/db.php');
include('includes/header.php');
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
  <!-- Table -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card bg-light  pt-3 pb-3">
          <h4 class="fs-1 pl-3">User Query</h4>
        </div>
        <div class="table-responsive">
          <table class="table table-dark table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>User Query</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- Fetch all the data from database -->
              <?php
              include("Config/db.php");
              if ($conn) {
                $questslt = "SELECT * FROM `user-table2`";
                ;
                $Run_quest = mysqli_query($conn, $questslt);

                // Check if any rows were returned
                if (mysqli_num_rows($Run_quest) > 0) {
                  // Fetch data and output rows in the table
                  while ($row = mysqli_fetch_assoc($Run_quest)) {
                    // echo "<tr>
                    //     <td scope='row'> ' . $row['Id'] . '</td>
                    //     <td scope='row'> ' . $row['Name'] . '</td>
                    //     <td scope='row'> ' . $row['Email'] . '</td> 
                    //     <td scope='row'> ' . $row['Phone'] . '</td>
                    //     <td scope='row'> ' . $row['Question'] . '</td> 
                    //     <td scope='row'>
                    //     <a href='questDelete.php?questdltId=$Id' class='btn btn-outline-danger'>Delete</a>
                    //     </td> 
                    //     </tr>";
                    echo "<tr>
                      <td scope='row'> " . $row['Id'] . "</td>
                      <td scope='row'> " . $row['Name'] . "</td>
                      <td scope='row'> " . $row['Email'] . "</td> 
                      <td scope='row'> " . $row['Phone'] . "</td>
                      <td scope='row'> " . $row['Question'] . "</td> 
                      <td scope='row'>
                          <a href='questDelete.php?questdltId=" . $row['Id'] . "' class='btn btn-outline-danger'>Delete</a>
                      </td> 
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
