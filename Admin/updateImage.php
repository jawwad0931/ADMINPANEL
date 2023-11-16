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
                <h4>Update Image</h4>
            </div>
            <div class="col-6  d-flex justify-content-end">
                <a href="Register.php" type="" class="btn btn-warning btn-sm">Back</a>
            </div>
        </div>
    </div>
    <!-- View Data in input field-->
    <?php
    include('Config/db.php');
    if (isset($_GET['updImgId'])) {
        $id = $_GET['updImgId'];
        $slt = "SELECT * FROM `updateimage` WHERE Id = $id";
        $query = mysqli_query($conn, $slt);
        if ($query) {
            $row = mysqli_fetch_assoc($query); 
            $image = $row['image'];
        }
    }
    ?>

    <!-- Update data in input field -->
    <?php
    if(isset($_GET['ImgIdupd'])){
    error_reporting(0);
    $id = $_GET['ImgIdupd'];
    $Name = $_POST['Name']; 
    $Desc = $_POST['Desc']; 
    $image = $_POST['image']; 
    $upd = "UPDATE `updateimage` SET `Name`='$Name' ,`Desc`='$Desc' , `image`='$image' WHERE Id = $id";
    $sql = mysqli_query($conn, $upd);
    if ($sql) {
        echo "<script>
        alert('Data successfully updated');
        window.location.href = 'UpdateLawyer.php';
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
                        <form action="updateImage.php?ImgIdupd=<?php echo $id ?>" method='POST'>
                            <div class="form-group">
                                <label for="Lawyer Name">Lawyer Name</label>
                                <input type="text" class="form-control" id="Lawyer Name" name="Name"
                                    placeholder="" value="<?php echo $Name; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Desc">Lawyer Description</label>
                                <input type="text" class="form-control" id="Desc" name="Desc"
                                    placeholder="" value="<?php echo $Desc; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Update Image</label>
                                <input type="file" class="form-control" id="image" name="image"
                                    placeholder="" value="<?php echo $image; ?>" required>
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