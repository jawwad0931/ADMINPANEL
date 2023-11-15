<?php
session_start();
include ('Config/db.php');
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
        $_SESSION['status'] = 'Login Successful';
        header("Location: index.php");
    } 
    else {
        $_SESSION['status'] = 'Access Denied Something went wrong';
        header("Location: UserLogin.php");
    }
}
?>
