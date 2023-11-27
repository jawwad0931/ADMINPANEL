<?php
session_start();
include('Frontenddb/db.php');
include("FrontendInclude/frontHeader.php");
?>
<!--HEADER STARTS-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand text-dark" href="#">
      <img src="./img/justiceLogo.png" alt="" class="rounded-circle" style="height:50px; width:50px;">
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03" style="margin-right:45px;">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link text-dark active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark active" aria-current="page" href="About.php">About</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-dark active" aria-current="page" href="#">Team</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-dark active" aria-current="page" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark active" aria-current="page" href="Contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark active" aria-current="page" href="Hire.php">Appointment</a>
        </li>
        <li>
          <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <?php
                if (isset($_SESSION['auth'])) {
                  echo $_SESSION['auth_user']['name'];
                  // var_dump($_SESSION);
                } else {
                  echo 'Not Login';
                }
                ?>
            </button>
            <ul class="dropdown-menu">
              <form action="RegisterCode.php" method="post">
              <button type='submit' name='logoutbtn' class='dropdown-item'>Logout</button>
              </form>
              <li><a class="dropdown-item" href="#">Back Home</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--HEADER ENDS-->