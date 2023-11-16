<?php
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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Back button use to go back -->
    <div class="container">
        <div class="row m-3">
            <div class="col-6">
                <h4>Update Services</h4>
            </div>
            <div class="col-6  d-flex justify-content-end">
                <a href="Register.php" type="" class="btn btn-warning btn-sm">Back</a>
            </div>
        </div>
    </div>
    <!-- View Data in input field-->
    <?php
    include('Config/db.php');
    if (isset($_GET['serviceupdId'])) {
        $id = $_GET['serviceupdId'];
        $slt = "SELECT * FROM `user-table` WHERE Id = $id";
        $query_run = mysqli_query($conn, $slt);
        if (mysqli_num_rows($query_run) > 0) {
            $row = mysqli_fetch_assoc($query_run);
            $Image = $row['Image'];
            $servicetype = $row['Servicetype'];
            $desc = $row['description'];
            $fees = $row['fees'];
        }
    }
    ?>

    <!-- Update data in input field -->
    <?php
    if (isset($_GET['serviceIdupd'])) {
        error_reporting(0);
        $id = $_GET['serviceIdupd'];
        $Image = $_POST['Image'];
        $servicetype = $_POST['servicetype'];
        $desc = $_POST['desc'];
        $fees = $_POST['fees'];
        $upd = "UPDATE `services` SET `Image`='$Image', `servicetype`='$servicetype', `description`='$desc', `fees`='$fees' WHERE Id = $id";
        $sql = mysqli_query($conn, $upd);
        if ($sql) {
            echo "<script>
        alert('Data successfully updated');
        window.location.href = 'service.php';
        </script>";
        } else {
            echo "<script>alert('Error Found!!!')</script>";
        }
    }
    ?>
    <!-- Update form -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update table</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="serviceupdate.php?serviceIdupd=<?php echo $id ?>" method='POST'>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="file" class="form-control" id="Image" name="Image"
                                    placeholder="Enter your Image" value="<?php echo $Image; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="service" class="services" id="services">Serivce Type</label>
                                <select name="servicetype" id="service" value="<?php echo $servicetype; ?>"
                                    class="form-control" required>
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
                                 placeholder="Enter your description number" value="<?php echo $desc; ?>" required>

                            </div>
                            <div class="form-group">
                                <label for="fees">Fees</label>
                                <input type="number" class="form-control" id="fees" name="fees"
                                    placeholder="Enter your fees number" value="<?php echo $fees; ?>" required>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary" name='AddUser'>Update</button>
                            </div>
                        </form>
                        <?php include('includes/footer.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>