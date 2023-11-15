<?php 
session_start();
include('Config/db.php'); 
include('Authentication.php'); 
if(isset($_POST['AddUser'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Password = $_POST['Password'];
    $ConfirmPassword = $_POST['Confirm-Password'];

    if($Password ==  $ConfirmPassword){
        $existEmail = "SELECT `Email` FROM `user-table` WHERE `Email` = '$Email'";
        $SqlRun = mysqli_query($conn, $existEmail);
        if(mysqli_num_rows($SqlRun) > 0){
            // Here found Which Email that is exist
            $_SESSION['status']='Email Already Exist in database';
            header('loction: Register.php');
            exit();
        }else{
        // when email doesnot match this insert query run
        $Sql_query = "INSERT INTO `user-table` (`Name`, `Email`, `Phone`, `Password`)
        VALUES ('$Name','$Email','$Phone','$Password')";
        $Run_Sql_query = mysqli_query($conn,$Sql_query);
        if( $Run_Sql_query)
        {
            header('location: Register.php');
            $_SESSION['status']='Registered Successfully';
        }else{
            $_SESSION['status']='Failed to Registered';
        }
        }
    }else{
        header('location: Register.php');
        $_SESSION['status']='Password and confirmed password not match';
    }

   

}
?>


<?php 
    if(isset($_POST['logoutbtn'])){
        session_destroy();
        unset($_SESSION['auth']);
        unset($_SESSION['auth_user']);
        header('location: UserLogin.php');
        exit(0);
    }   
?>


<!-- update commands -->

