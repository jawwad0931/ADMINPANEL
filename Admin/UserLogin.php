<?php
session_start();
include('Config/db.php');
include('includes/header.php');
if (isset($_SESSION['auth'])) {
  $_SESSION['status'] = 'your already Login';
  header('location: index.php');
  exit();
}
?>
<div class="container-fluid" style="background-image:url('Asset/dist/img/blackbg2.jpg');">
<section class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto rounded shadow bg-white">
        <div class="row">
          <div class="col-md-6">
            <div class="m-5 text-center">
              <h1>Login Admin Panel</h1>
            </div>
            <form class="m-5" action='LoginCode.php' method='POST'>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"
                  required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password"
                  placeholder="Enter your password" required>
              </div>
              <button type="submit" name='Login' class="btn btn-primary btn-block">Login</button>
            </form>
          </div>
          <div class="col-md-6">
            <div class="m-4">
              <?php include('message.php'); ?>
            </div>
            <div>
              <img src="Asset/dist/img/login-img.svg" alt="Login Logo" class="img-fluid p-5" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<?php
// include('includes/footer.php');
?>