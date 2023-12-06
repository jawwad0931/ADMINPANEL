<!-- Authentication Code here here all the authentication use -->
<?php
if (!isset($_SESSION['auth'])) {
    $_SESSION['auth_status'] = "Login First to access Dashboard";
    header('location: UserLogin.php');
    exit(0);
}
?> 