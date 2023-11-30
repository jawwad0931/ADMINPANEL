<!-- contact ka data insert karwa raha hai yahan se -->
<?php
include("Frontenddb/db.php");
if (isset($_POST['Submit_Message'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Question = $_POST['Question'];
    $Contactslt = "INSERT INTO `user-table2`( `Name`, `Email`, `Phone`, `Question`) VALUES ('$Name','$Email','$Phone','$Question')";
    $CheckQuery = mysqli_query($conn, $Contactslt);
    if (!$CheckQuery) {
        echo "Data Not inserted" . mysqli_error($conn);
    } else {
        echo "<script>alert('Data Inserted Succcessfully')</script>";
        header("Location: Contact.php");
    }

}
?>