<?php
session_start();
include ('Frontenddb/db.php');
if(isset($_POST['Login'])) {
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $savesql = "SELECT * FROM `user-table` WHERE Email='$Email' AND Password='$Password' LIMIT 1";
    $sqlRun = mysqli_query($conn, $savesql);
    if(mysqli_num_rows($sqlRun) > 0) {
        foreach($sqlRun as $row){
            $id = $row['Id'];
            $name = $row['Name'];
            $email = $row['Email'];
            $phone = $row['Phone'];
            $role_as = $row['role_as'];
        }
        $_SESSION['auth'] = "$role_as";
        $_SESSION['auth_user'] = [
            'id'=>$id,
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone
        ];
        header("Location: home.php");
    } 
    else {
        header("Location: index.php");
        echo "<script>alert('Access Denied Something went wrong');</script>";
    }
}
?>
