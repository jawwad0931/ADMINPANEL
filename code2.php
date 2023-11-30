<?php
include("db.php");

if (isset($_POST['send'])) {
    $Email = $_POST['email'];
    $Message = $_POST['message'];
    $msgInsert = "INSERT INTO `user-table2` (`Email`, `Message`) VALUES ('$Email','$Message')";
    $Run_Sql = mysqli_query($conn, $msgInsert);
    if ($Run_Sql) {
        echo "<script>alert('Successful');</script>";
        header("location: index.php");
    } else {
        echo "<script>alert('UnSuccessful');</script>";
    }
}
?>

<table class="table">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>