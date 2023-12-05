<!-- user payment ka data yahan se retrieve ho raha hai -->
<?php
session_start();
include('Authentication.php');
include('Config/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>

<!-- user payment ka detail yahan se dekhan ja raha hai -->
<div class="content-wrapper" style="height:;">
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
                    <h4 class="fs-1 pl-3">Users Payments</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>FullName</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Mode Of Payment</th>
                                <th>status</th>
                                <th>toggle</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Fetch all the data from the database -->
                            <?php
                            include("Config/db.php");
                            if ($conn) {
                                $questslt = "SELECT * FROM `payment`";
                                $Run_quest = mysqli_query($conn, $questslt);

                                // Check if any rows were returned
                                if (mysqli_num_rows($Run_quest) > 0) {
                                    // Fetch data and output rows in the table
                                    while ($row = mysqli_fetch_assoc($Run_quest)) {
                                        echo "<tr>
                                            <td scope='row'>" . $row['Id'] . "</td>
                                            <td scope='row'>" . $row['Full_Name'] . "</td>
                                            <td scope='row'>" . $row['Email'] . "</td> 
                                            <td scope='row'>" . $row['City'] . "</td>
                                            <td scope='row'>" . $row['PaymentMode'] . "</td>
                                            <td>";
                                        if ($row['Payment_status'] == "1") {
                                            echo 'pending';
                                        } else {
                                            echo 'complete';
                                        }
                                        echo "</td>
                                            <td>";
                                        // Generate a link based on the value of $row['Payment_status']
                                        if ($row['Payment_status'] == "1") {
                                            echo "<a href='paymentdeactivate.php?PaydeactivateId=" . $row['Id'] . "' class='btn btn-sm w-100 d-flex align-items-center justify-content-center glow-btn-2'>Unpaid</a>";
                                        } else {
                                            echo "<a href='paymentactivate.php?PayactivateId=" . $row['Id'] . "' class='btn btn-sm w-100 d-flex align-items-center justify-content-center glow-btn'>Paid</a>";
                                        }
                                        echo "</td> 
                                        <td scope='row'>
                                            <a href='paymentDelete.php?paydltId=" . $row['Id'] . "'><i class='ion-trash-a text-danger ml-3' style='font-size:25px'></i></a>

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

<!-- footer ki file ye hai -->
<?php include('includes/footer.php');
?>