<?php 
    include("Frontenddb/db.php");
    include("FrontendInclude/frontHeader.php");
    include("FrontendInclude/frontTopbar.php");
?>
<!-- BEGINNING OF SERVICE PAGE BODY -->
  <div class="container-flex">
    <div class="background-img">
      <div class="background-img-text">
        <h1>PRACTICE AREAS</h1>
      </div>
    </div>
    <!-- CONTAINER CLASS WITH SERVICE CARDS -->
    <?php 
  $servicequery = "SELECT * FROM `services`";
  $Run_Service = mysqli_query($conn, $servicequery);

  if(!$Run_Service){
    die(mysqli_error($conn));
  } else {
    echo '<div class="container">';
    echo '<div class="row">';
    
    while($ServiceRow = mysqli_fetch_assoc($Run_Service)){
      echo '
      <div class="col-sm-6 col-md-4 col-lg-4 d-flex">
        <div class="card mb-3">
          <img src="img/' . $ServiceRow["Image"] . '" class="card-img-top" alt="Placeholder Image">
          <div class="card-body">
            <h5 class="card-title">'. $ServiceRow["Servicetype"] .'</h5>
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
<!-- END OF SERVICE PAGE BODY -->
<?php include("FrontendInclude/frontFooter.php") ?>