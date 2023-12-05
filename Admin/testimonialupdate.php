<!-- yahan testimonial ka code update hoga -->
<?php
// include file is here
include('Config/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>

<!-- Registered code update here -->
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
    <!-- Back button use to go back -->
    <div class="container">
        <div class="row m-3">
            <div class="col-6">
                <h4>Update Testimonial</h4>
            </div>
            <div class="col-6  d-flex justify-content-end">
                <a href="testimonial.php" type="" class="btn btn-info btn-sm">Back</a>
            </div>
        </div>
    </div>
    <!-- View Data in input field-->
    <?php
    include('Config/db.php');
    if (isset($_GET['testimonialupdId'])) {
        $id = $_GET['testimonialupdId'];
        $slt = "SELECT * FROM `testimonial` WHERE Id = $id";
        $query = mysqli_query($conn, $slt);
        if ($query) {
            $row = mysqli_fetch_assoc($query);
            $LawyerName = $row['LawyerName'];
            $Experience = $row['Experience'];
        }
    }
    ?>

    <!-- Update data in input field -->
    <?php
    if (isset($_GET['testiIdupd'])) {
        error_reporting(0);
        $id = $_GET['testiIdupd'];
        $LawyerName = $_POST['LawyerName'];
        $Experience = $_POST['Experience'];
        $upd = "UPDATE `testimonial` SET `LawyerName`='$LawyerName', `Experience`='$Experience' WHERE Id = $id";
        $sql = mysqli_query($conn, $upd);
        if ($sql) {
            echo "<script>
        alert('Data successfully updated');
        window.location.href = 'testimonial.php';
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
                        <h3 class="card-title">Update Testimonial</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="testimonialupdate.php?testiIdupd=<?php echo $id ?>" method='POST'>
                            <div class="form-group">
                                <label for="LawyerName">LawyerName</label>
                                <input type="text" class="form-control" id="LawyerName" name="LawyerName"
                                    placeholder="Enter your LawyerName" value="<?php echo $LawyerName; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Experience">Email</label>
                                <input type="Experience" class="form-control" id="Experience" name="Experience"
                                    placeholder="Enter your Experience" value="<?php echo $Experience; ?>" required>
                            </div> 
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary" name='AddUser'>Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer file -->
<?php include('includes/footer.php'); ?>