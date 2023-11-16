<?php
session_start();
?>
<?php
include("Frontenddb/db.php");
include("FrontendInclude/frontHeader.php");
include("FrontendInclude/frontTopbar.php");
?>
  <!-- FORM:client information  -->
  <div class="container-fluid">
    <section class="book text-center">
      <?php
      if(isset($_SESSION['status'])){
        echo "<h4>".$_SESSION['status']."</h4>";
        unset($_SESSION['status']);
      }
      ?>
      <h2 class="book-title">Book your appointment</h2>
      <div class="container">
        <form action="HireCode.php" method="POST" class="info form-group" id="form-info">
          <div class="card">
            <div class="card-body flex-info-body">
              <label for="names" class="names" id="names">Full Name</label>
              <input type="text" value="" name="full_name" class="name form-control" id="fullname"><br>
              <label for="service" class="services" id="services">Serivce</label>
              <select name="service" id="service" class="form-control">
                <option value=""></option>
                <option value="Divorce">Divorce</option>
                <option value="Family">Family</option>
                <option value="Personal Injury">Personal Injury</option>
                <option value="Labor Law">Labor Law</option>
                <option value="Commercial Law">Commercial Law</option>
                <option value="Criminal Law">Criminal Law</option>
              </select>
              <label for="day">Appointment</label>
              <input id="get-date" type="date" name="AppointDate" class="form-control" placeholder="Enter Date"
                required>
              <input type="submit" class="btn btn-primary" value="Submit" name="Appoint_Save">
            </div>
          </div>
      </div>
      </form>
  </div>
  <!-- Appointment date display  -->
  <div class="container">
    <div class="card ">
      <div class="card-body message">
        <div class="app-message">
          <div id="show-app">
            <p class="message-text">Appointment: <span id="displayAppointment"></span></p>
            <p class="message-text">Mode of Communication: <span id="modeOfComm"></span></p>
            <p class="message-text">Service type: <span id="serviceType"></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
    </div>
<?php include("FrontendInclude/frontFooter.php") ?>