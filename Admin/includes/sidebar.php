<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <span class="brand-text font-weight-light">Admin Panel</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="Asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <?php
          if (isset($_SESSION['auth'])) {
            echo $_SESSION['auth_user']['name'];
            // var_dump($_SESSION);
          } else {
            echo 'Not Login';
          }
          ?>
        </a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item" style="font-size:25px;">
          <a href="index.php" class="nav-link">
            <p class="">Dashboard</p>
          </a>
        </li>
        <li class="nav-header">Setting</li>
        <li class="nav-item">
          <a href="index.php" class="nav-link">
            <p class="text">Admin Panel</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="Register.php" class="nav-link">
            <p>Registered User</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="AppointLawyer.php" class="nav-link">
            <p>User Booking Appointment</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="UpdateLawyer.php" class="nav-link">
            <p>Update Lawyer</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="Service.php" class="nav-link">
            <p>Services Update</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="userquest.php" class="nav-link">
            <p>User Question</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>