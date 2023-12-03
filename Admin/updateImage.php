<!-- Frontend our lawyer wala code yahan se change kiya ja raha hai -->
<?php
include('Config/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<!-- Our lawyer ko update kiya ja raha hai -->
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
                <h4>Update Image</h4>
            </div>
            <div class="col-6  d-flex justify-content-end">
                <a href="updateLawyer.php" type="" class="btn btn-info btn-sm">Back</a>
            </div>
        </div>
    </div>


    <!----------------------------- View Data in input field---------------------------------------->
    <?php
    if (isset($_GET['updImgId'])) {
        $id = $_GET['updImgId'];
        $slt = "SELECT * FROM `updateimage` WHERE Id = '$id'";
        $query = mysqli_query($conn, $slt);
        if ($query) {
            $row = mysqli_fetch_assoc($query);
            $Image = $row['image'];
            $Name = $row['Name'];
            $Desc = $row['Desc'];
        } else {
            echo "Error executing the query: " . mysqli_error($conn);
        }
    }



    //------------------------------- Update data in input field--------------------------------------
    if (isset($_GET['ImgIdupd'])) {
        error_reporting(0);
        $id = $_GET['ImgIdupd'];
        $Image = $_POST['Image']; // Initialize $Image variable
    
        if ($_FILES['Image']['name']) {
            $target_dir = "../img/"; // Change this to your desired directory
            $target_file = $target_dir . basename($_FILES["Image"]["name"]);

            if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
                $Image = $target_file;
                $Name = $_POST['Name'];
                $Desc = $_POST['Desc'];
                $Imageupdate_run = "UPDATE `updateimage` SET `image`='$Image', `Name`='$Name', `Desc`='$Desc'  WHERE Id = '$id'";
                $sql = mysqli_query($conn, $Imageupdate_run);

                if ($sql) {
                    echo "<script>
                    alert('Data successfully updated');
                    window.location.href = 'updatelawyer.php';
                </script>";
                } else {
                    echo "<script>alert('Error updating data: " . mysqli_error($conn) . "')</script>";
                }
            } else {
                echo "<script>alert('Error uploading file')</script>";
            }
        } else {
            // If no new file is uploaded, update other fields in the database
            $Name = $_POST['Name'];
            $Desc = $_POST['Desc'];
            $Imageupdate_run = "UPDATE `updateimage` SET  `Name`='$Name', `Desc`='$Desc'   WHERE Id = '$id'";
            $sql = mysqli_query($conn, $Imageupdate_run);

            if ($sql) {
                echo "<script>
                alert('Data successfully updated');
                window.location.href = 'updatelawyer.php';
            </script>";
            } else {
                echo "<script>alert('Error updating data: " . mysqli_error($conn) . "')</script>";
            }
        }
    }
    ?>
    <!-- -----------------------------------our lawyer ko yahan update kiya ja raha hai---------------------- -->
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
                        <form action="updateImage.php?ImgIdupd=<?php echo $id ?>" method='POST'
                            enctype='multipart/form-data'>
                            <div class="form-group">
                                <label for="Lawyer Name">Lawyer Name</label>
                                <input type="text" class="form-control" id="Lawyer Name" name="Name" placeholder=""
                                    value="<?php echo $Name; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Desc">Lawyer Description</label>
                                <input type="text" class="form-control" id="Desc" name="Desc" placeholder=""
                                    value="<?php echo $Desc; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="newImage">New Image</label>
                                <input type="file" class="form-control" id="Image" name="Image"
                                    placeholder="Choose a new image">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary" name='AddImage'>Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- yeh footer ki file hai -->
<?php include('includes/footer.php'); ?>