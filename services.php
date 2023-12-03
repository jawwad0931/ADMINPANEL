<!-- services wala page hai -->
<?php
include("Frontenddb/db.php");
include("FrontendInclude/frontHeader.php");
include("FrontendInclude/frontTopbar.php");
?>
<!-- Header banner Start -->
<div class="container-fluid py-5  mb-5"
  style="background-image:url('img/service.png');background-size:cover;height:600px;">
  <div class="container my-5 pt-5 pb-4">
    <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
  </div>
</div>
<!-- Header banner End -->
<!-- Services With Images -->
<div class="container">
  <div class="row m-2">
    <div class="col-12">
    <div>
        <hr>
      </div>
      <h2 class="text-center">Services</h2>
    </div>
  </div>
  <!-- Here Service Content -->
  <div class="row">
  <div class="col-12">
    <div class="text-center service_Content">
    <h6 class="fw-light">We are a renowned law firm and hold expertise in providing</h6>
    <h6 class="fw-light"> highly credible Litigation Services to our clients.</h6>
    </div>
  </div>
  </div>
  <!-- First Row of services -->
  <div class="row m-5">
      <div class="col-lg-2 col-sm-12">
        <div class="text-center">
          <img src="img/litigation.webp" height="80px" width="80px" alt="">
          <h6 class="text-center p-3">Litigation</h6>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12">
        <div class="text-center">
          <img src="img/Criminal.webp" height="80px" width="80px" alt="">
          <h6 class="text-center p-3">Criminal Trials & Appeals</h6>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12">
        <div class="text-center">
          <img src="img/bankruptcy.webp" height="80px" width="80px" alt="">
          <h6 class="text-center p-3">bankruptcy</h6>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12">
        <div class="text-center">
          <img src="img/busniess-law.webp" height="80px" width="80px" alt="">
          <h6 class="text-center p-3">Bussiness Law</h6>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12">
        <div class="text-center">
          <img src="img/employment-act.webp" height="80px" width="80px" alt="">
          <h6 class="text-center p-3">Employement & Services</h6>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12">
        <div class="text-center">
          <img src="img/intellectualproperty.webp" height="80px" width="80px" alt="">
          <h6 class="text-center p-3">Intellectual Property Right</h6>
        </div>
      </div>
  </div>
  <!-- Second Row of services -->
  <div class="row m-5">
      <div class="col-lg-2 col-sm-12">
        <div class="text-center">
          <img src="img/custom-excise.webp" height="80px" width="80px" alt="">
          <h6 class="text-center p-3">Custom & Excise</h6>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12">
        <div class="text-center">
          <img src="img/environment.webp" height="80px" width="80px" alt="">
          <h6 class="text-center p-3">Environmental Law</h6>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12">
        <div class="text-center">
          <img src="img/cyberlaw.webp" height="80px" width="80px" alt="">
          <h6 class="text-center p-3">Cyber Criminal</h6>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12">
        <div class="text-center">
          <img src="img/immigration.webp" height="80px" width="80px" alt="">
          <h6 class="text-center p-3">Imigration</h6>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12">
        <div class="text-center">
          <img src="img/consumer-law.webp" height="80px" width="80px" alt="">
          <h6 class="text-center p-3">Consumer Protection</h6>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12">
        <div class="text-center">
          <img src="img/enforcement-law.webp" height="80px" width="80px" alt="">
          <h6 class="text-center p-3">Enforcement and fundamental rights</h6>
        </div>
      </div>
      <hr>
  </div>
</div>
<!-- End Services With Images -->
<!-- Services page start -->
<div class="container-flex">
  <!-- CONTAINER CLASS WITH SERVICE CARDS -->
  <?php
  $servicequery = "SELECT * FROM `services`";
  $Run_Service = mysqli_query($conn, $servicequery);

  if (!$Run_Service) {
    die(mysqli_error($conn));
  } else {
    echo '<div class="container">';
    echo '<div class="row">';

    while ($ServiceRow = mysqli_fetch_assoc($Run_Service)) {
      echo '
      <div class="col-sm-6 col-md-4 col-lg-4 d-flex">
        <div class="card mb-3">
          <img src="img/' . $ServiceRow["Image"] . '" class="card-img-top" alt="Placeholder Image" height="300px">
          <div class="card-body">
            <h6 class="card-title">' . $ServiceRow["Servicetype"] . '</h6>
            <p class="card-text">' . $ServiceRow["LawyerDesc"] . '</p>
            <p>Consultation fee: <strong>' . $ServiceRow["fees"] . '</strong></p>
            <a href="Hire.php" class="btn btn-dark mb-3">Book Appointment</a>
          </div>
        </div>
      </div>';
    }

    echo '</div>';
    echo '</div>';
  }
  ?>
  <!-- END OF SERVICE CARDS CONTAINER -->
</div>
<!-- Services page end -->
<!-- END OF SERVICE PAGE BODY -->

<!-- footer ka code -->
<?php 
    include("FrontendInclude/backbutton.php");
    include("FrontendInclude/frontFooter.php");
?>