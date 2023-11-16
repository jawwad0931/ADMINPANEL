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
                <h4>Update User</h4>
            </div>
            <div class="col-6  d-flex justify-content-end">
                <a href="Register.php" type="" class="btn btn-warning btn-sm">Back</a>
            </div>
        </div>
    </div>
    <!-- View Data in input field-->
    <?php
    include('Config/db.php');
    if (isset($_GET['updId'])) {
        $id = $_GET['updId'];
        $slt = "SELECT * FROM `user-table` WHERE Id = $id";
        $query = mysqli_query($conn, $slt);
        if ($query) {
            $row = mysqli_fetch_assoc($query);
            $name = $row['Name'];
            $email = $row['Email'];
            $phone = $row['Phone'];
        }
    }
    ?>

    <!-- Update data in input field -->
    <?php
    if(isset($_GET['Idupd'])){
    error_reporting(0);
    $id = $_GET['Idupd'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $upd = "UPDATE `user-table` SET `Name`='$name', `Email`='$email', `Phone`='$phone' WHERE Id = $id";
    $sql = mysqli_query($conn, $upd);
    if ($sql) {
        echo "<script>
        alert('Data successfully updated');
        window.location.href = 'Register.php';
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
                        <form action="update.php?Idupd=<?php echo $id ?>" method='POST'>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="Name"
                                    placeholder="Enter your name" value="<?php echo $name; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="Email"
                                    placeholder="Enter your email" value="<?php echo $email; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="Phone"
                                    placeholder="Enter your phone number" value="<?php echo $phone; ?>" required>
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