<?php
include("Frontenddb/db.php");
include("FrontendInclude/frontHeader.php");
include("FrontendInclude/frontTopbar.php");
?>
    <!-- Header Start -->
    <div class="container-fluid py-5  mb-5" style="background-image:url('img/appoint.jpg');background-size:cover;height:500px;">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Appointment</h1>
            </div>
        </div>
        <!-- Header End -->
 
  <!-- FORM:client information  -->
  <div class="container-fluid">
    <section class="book text-center">
      <?php
      if(isset($_SESSION['status'])){
        echo "<h4>".$_SESSION['status']."</h4>";
        unset($_SESSION['status']);
      }
      ?>
      <h2 class="book-title">Book Lawyer Appointment</h2>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
    <form action="HireCode.php" method="POST" class="info form-group" id="form-info">
          <div class="card">
            <div class="card-body">
              <label for="names" class="names w-100 text-left" id="">Full Name</label>
              <input type="text" value="" name="full_name" class="name form-control" id="fullname" required><br>
              <label for="service" class="services w-100 text-left" id="services">Serivce</label>
              <select name="service" id="service" class="form-control w-100 text-left" required>
                <option value=""></option>
                <option value="Divorce">Divorce</option>
                <option value="Family">Family</option>
                <option value="Personal Injury">Personal Injury</option>
                <option value="Labor Law">Labor Law</option>
                <option value="Commercial Law">Commercial Law</option>
                <option value="Criminal Law">Criminal Law</option>
              </select>
              <label for="day" class="w-100 text-left mt-4">Appointment</label>
              <input id="get-date" type="date" name="AppointDate" class="form-control" placeholder="Enter Date"
                required>
            <div class="w-100">
              <input type="submit" class="btn btn-primary mt-3 float-start" value="Submit" name="Appoint_Save">
            </div>
            </div>
          </div>
      </form>
  <!-- Appointment date display  -->
    </div>
    <div class="col-lg-6">
      <!-- Set Height of the card -->
    <div class="card" style="height:88%;">
      <div class="card-body">
        <div class="app-message">
          <div id="show-app">
            <p class="message-text">Appointment: <span id="displayAppointment"></span></p><br>
            <p class="message-text">Mode of Communication: <span id="modeOfComm"></span></p><br>
            <p class="message-text">Service type: <span id="serviceType"></span></p><br>  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<hr>
<div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-8">
          <div class="card p-3">
          <form action="paymentCode.php" method="POST" class="form-group">
          <h2 class="payment-title">Payment</h2>
          <div class="icon">
              <i class="ion-cash fs-2"></i>
            </div>
          <hr>
                <label for="name" class="float-end">Full Name</label><br>
                <input type="text" name="Full_Name" class="form-control" required><br>
                <label for="email" class="float-end">Email</label><br>
                <input type="text" name="Email" class="form-control" required><br>
                <label for="LawyerName" class="float-end">Lawyer Name</label><br>
                <input type="text" name="Lawyer_Name" class="form-control" required><br>
                <label for="city" class="float-end">City</label><br>
                <select  name="City" class="form-control" required>
                  <option value=""></option>
                  <option value="city">Karachi</option>
                  <option value="city">Lahore</option>
                  <option value="city">Islamabad</option>
                  <option value="city">Faisalabad</option>
                  <option value="city">Multan</option>
                  <option value="city">Quetta</option>
                  <option value="city">Peshawar</option>
                  <option value="city">Sahiwal</option>
                  <option value="city">Murree</option>
                </select><br>
                <label for="mode" class="float-end">Mode of Payment</label><br>
                <select  name="PaymentMode" class="form-control" required>
                  <option value=""></option>
                  <option value="Cash">Cash</option>
                  <option value="Cash">Card</option>
                  <option value="Cash">Easy Paisa</option>
                  <option value="Cash">Jazz Cash</option>
                </select><br>
                <button type="submit" class="btn btn-danger float-start"  name="PaymentSubmit">Confirm Payment</button>
              </form>
          </div>
        </div>
        </div>
      </div>
  </section>
    </div>
<?php 
    include("FrontendInclude/frontFooter.php");
    include("FrontendInclude/backbutton.php");
?>