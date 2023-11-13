<?php
session_start();
    include('Config/db.php');
    include('includes/header.php');
    if(isset($_SESSION['auth'])){
        $_SESSION['status']='your already Login';
        header('location: index.php');
        exit();
    }
?>
    <div class="container login-container">
        <div class="row mb-5">
            <div class="col-md-6 offset-md-3" style='margin-top:200px;'>
                <div class="card">
                    <div class="card-header">
                        <h3>Login Admin Panel</h3>
                    </div>
                    <div class="card-body">
                        <?php  include('message.php'); ?>
                        <form action='LoginCode.php' method='POST'>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email"  id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                            </div>
                            <button type="submit" name='Login' class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('includes/footer.php');
    ?>