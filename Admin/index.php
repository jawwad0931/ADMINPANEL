<!-- this is index.php page for admin here define some div boxes-->
<?php
// includes files here
session_start();
include('Config/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('Authentication.php');
include('includes/topbar.php');
?>
<div class="content-wrapper" style="height: auto;">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php" class="text-dark">Back Home</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
          <!-- here you can see your successful login message -->
          <?php include('message.php'); ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 p-3">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner p-4">
              <h4>Registration</h4>
              <p>User Registration Details</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="Register.php" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-md-6 col-sm-12 p-3">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner p-4">
              <h4>User Queries</h4>
              <p>User Problems Details</p>
            </div>
            <div class="icon">
              <i class="ion-ios-people"></i>
            </div>
            <a href="userquest.php" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-md-6 col-sm-12 p-3">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner p-4">
              <h4>Users Payments</h4>
              <p>Users Payment Details</p>
            </div>
            <div class="icon">
              <i class="ion-cash"></i>
            </div>
            <a href="usersPayment.php" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-md-6 col-sm-12 p-3">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner p-4">
              <h4>Appointment</h4>
              <p>Lawyer Appointment Details</p>
            </div>
            <div class="icon">
              <i class="ion-clock"></i>
            </div>
            <a href="AppointLawyer.php" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
</div>
<?php include('includes/footer.php'); ?>
</div>
<!-- Boostrap version 5 code use for main purposes -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>