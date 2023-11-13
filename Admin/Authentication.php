<?php 
    if (!isset($_SESSION['auth'])) {
        $_SESSION['auth_status'] = "Login First to access Dashboard";
        header('location: Login.php');
        exit(0);
    } else {
        if ($_SESSION['auth'] == "1") {
            
        } else {
            $_SESSION['status'] = "You are not able to access ADMIN PANEL";
            header('location: ../index.php');
            exit(0);           
        }
    }
?>
