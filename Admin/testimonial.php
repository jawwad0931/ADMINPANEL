<!-- ye page testimonial ko fetch kar raha hai -->
<?php
// Include code is here
session_start();
include('Config/db.php');
include('Authentication.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<!-- Services Update code -->
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
                    <h4>Services</h4>
                </div>
                <div class="col-6  d-flex justify-content-end">
                    <!-- Modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
                        Update Testimonial
                    </button>
                    <!-- Modal Form Content Here -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form Action='testimonialcode.php' method='POST' enctype="multipart/form-data">
                                    <div class="modal-body"> 
                                        <div class="form-group">
                                            <label for="LawyerName">LawyerName</label>
                                            <input type="text" class="form-control" id="LawyerName" name="LawyerName"
                                                placeholder="Lawyer Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Experience">Experience</label>
                                            <input type="text" class="form-control" id="Experience" name="Experience"
                                                placeholder="Lawyer Experience" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-secondary"
                                            name='AddTesti'>Submit</button>
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
                                <th>Lawyer Name</th>
                                <th>Lawyer Experience</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Fetch all the data from database -->
                            <?php
                            if ($conn) {
                                $slt = "SELECT * FROM `testimonial`";
                                $queries = mysqli_query($conn, $slt);
                                if ($queries) {
                                    while ($rows = mysqli_fetch_assoc($queries)) {
                                        $Id = $rows['Id'];
                                        $LawyerName = $rows['LawyerName'];
                                        $Experience = $rows['Experience'];
                                        echo "<tr>
                                            <td>$LawyerName</td>
                                            <td>$Experience</td>
                                            <td class='d-flex'>
                                                <a href='testimonialupdate.php?testimonialupdId=$Id' class='fs-1'><i class='ion-edit text-success' style='font-size:25px'></i></a>
                                                <a href='testimonialdelete.php?testimonialdltid=$Id' class=''><i class='ion-trash-a text-danger ml-3' style='font-size:25px'></i></a>
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
<!-- footer code is here -->
<?php include('includes/footer.php'); ?>