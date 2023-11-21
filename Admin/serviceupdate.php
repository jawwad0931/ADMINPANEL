<?php
include('Config/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');

// View Data in input field
include('Config/db.php');
if (isset($_GET['ServiceupdId'])) {
    $id = $_GET['ServiceupdId'];
    $slt = "SELECT * FROM `services` WHERE Id = '$id'";
    $query = mysqli_query($conn, $slt);
    if ($query) {
        $row = mysqli_fetch_assoc($query);
        $Image = $row['Image'];
        $Servicetype = $row['Servicetype'];
        $LawyerDesc = $row['LawyerDesc'];
        $fees = $row['fees'];
    } else {
        echo "Error executing the query: " . mysqli_error($conn);
    }
}

// Update data in input field
if (isset($_GET['ServiceIdupd'])) {
    error_reporting(0);
    $id = $_GET['ServiceIdupd'];
    $Image = $_POST['Image']; // Initialize $Image variable

    if ($_FILES['Image']['name']) {
        $target_dir = "../img/"; // Change this to your desired directory
        $target_file = $target_dir . basename($_FILES["Image"]["name"]);

        if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
            $Image = $target_file;

            $Servicetype = $_POST['Servicetype'];
            $LawyerDesc = $_POST['LawyerDesc'];
            $fees = $_POST['fees'];

            $serviceupd = "UPDATE `services` SET `Image`='$Image', `Servicetype`='$Servicetype', `LawyerDesc`='$LawyerDesc', `fees`='$fees' WHERE Id = '$id'";
            $sql = mysqli_query($conn, $serviceupd);

            if ($sql) {
                echo "<script>
                    alert('Data successfully updated');
                    window.location.href = 'service.php';
                </script>";
            } else {
                echo "<script>alert('Error updating data: " . mysqli_error($conn) . "')</script>";
            }
        } else {
            echo "<script>alert('Error uploading file')</script>";
        }
    } else {
        // If no new file is uploaded, update other fields in the database
        $Servicetype = $_POST['Servicetype'];
        $LawyerDesc = $_POST['LawyerDesc'];
        $fees = $_POST['fees'];

        $serviceupd = "UPDATE `services` SET `Servicetype`='$Servicetype', `LawyerDesc`='$LawyerDesc', `fees`='$fees' WHERE Id = '$id'";
        $sql = mysqli_query($conn, $serviceupd);

        if ($sql) {
            echo "<script>
                alert('Data successfully updated');
                window.location.href = 'service.php';
            </script>";
        } else {
            echo "<script>alert('Error updating data: " . mysqli_error($conn) . "')</script>";
        }
    }
}


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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update table</h3>
                </div>
                <div class="card-body">
                    <form action="serviceupdate.php?ServiceIdupd=<?php echo $id ?>" method='POST'
                        enctype="multipart/form-data">
                        <div class="modal-body">
                            <!-- Existing image display -->
                            <!-- <div class="form-group">
                                <label for="existingImage">Existing Image</label>
                                <img src="<?php echo $Image; ?>" alt="Existing Image" style="width: 100px;">
                            </div> -->

                            <!-- New image input -->
                            <div class="form-group">
                                <label for="newImage">New Image</label>
                                <input type="file" class="form-control" id="newImage" name="Image"
                                    placeholder="Choose a new image">
                            </div>

                            <!-- Hidden input to store the existing image path -->
                            <input type="hidden" name="existingImage" value="<?php echo $Image; ?>">
                            <div class="form-group">
                                <label for="service" class="services" id="services">Service Type</label>
                                <select name="Servicetype" id="service" class="form-control" required>
                                    <option value=""></option>
                                    <option value="Divorce" <?php echo ($Servicetype === 'Divorce') ? 'selected' : ''; ?>>
                                        Divorce</option>
                                    <option value="Family" <?php echo ($Servicetype === 'Family') ? 'selected' : ''; ?>>
                                        Family</option>
                                    <option value="Personal Injury" <?php echo ($Servicetype === 'Personal Injury') ? 'selected' : ''; ?>>Personal Injury</option>
                                    <option value="Labor Law" <?php echo ($Servicetype === 'Labor Law') ? 'selected' : ''; ?>>Labor Law</option>
                                    <option value="Commercial Law" <?php echo ($Servicetype === 'Commercial Law') ? 'selected' : ''; ?>>Commercial Law</option>
                                    <option value="Criminal Law" <?php echo ($Servicetype === 'Criminal Law') ? 'selected' : ''; ?>>Criminal Law</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="LawyerDesc"
                                    placeholder="Enter your Description" value="<?php echo $LawyerDesc ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="fees">Fees</label>
                                <input type="number" class="form-control" id="fees" name="fees"
                                    placeholder="Enter your phone number" value="<?php echo $fees ?>" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-secondary" name='AddService'>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php include('includes/footer.php'); ?>