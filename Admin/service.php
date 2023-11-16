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
                    <h4>Services</h4>
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
                                <form Action='servicecode.php' method='POST' enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="Image">Image</label>
                                            <input type="file" class="form-control" id="Image" name="Image"
                                                placeholder="Enter your email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="service" class="services" id="services">Serivce Type</label>
                                            <select name="servicetype" id="service" class="form-control" required>
                                                <option value=""></option>
                                                <option value="Divorce">Divorce</option>
                                                <option value="Family">Family</option>
                                                <option value="Personal Injury">Personal Injury</option>
                                                <option value="Labor Law">Labor Law</option>
                                                <option value="Commercial Law">Commercial Law</option>
                                                <option value="Criminal Law">Criminal Law</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input type="text" class="form-control" id="description" name="desc"
                                                placeholder="Enter your email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="fees">Fees</label>
                                            <input type="number" class="form-control" id="fees" name="fees"
                                                placeholder="Enter your phone number" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-secondary"
                                            name='AddService'>Submit</button>
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
                                <th>Image</th>
                                <th>Service Type</th>
                                <th>Description</th>
                                <th>Fees</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Fetch all the data from database -->
                            <?php
                            if ($conn) {
                                $slt = "SELECT * FROM `services`";
                                $queries = mysqli_query($conn, $slt);
                                if ($queries) {
                                    while ($rows = mysqli_fetch_assoc($queries)) {
                                        $Id = $rows['Id'];
                                        $Image = $rows['Image'];
                                        $Servicetype = $rows['Servicetype'];
                                        $desc = $rows['description'];
                                        $fees = $rows['fees'];
                                        echo "<tr>
                                            <td>$Image</td>
                                            <td>$Servicetype</td>
                                            <td>$desc</td>
                                            <td>$fees</td>
                                            <td>
                                                <a href='serviceupdate.php?serviceupdId=$Id' class='btn btn-success'>Edit</a>
                                                <a href='servicedelete.php?servicedltid=$Id' class='btn btn-danger'>Delete</a>
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
<?php include('includes/footer.php'); ?>