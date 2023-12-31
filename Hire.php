<!-- Appoint lawyer wala code yahan Appointment hai aur payment method use kya jaa raha hai-->
<?php
include("Frontenddb/db.php");
include("FrontendInclude/frontHeader.php");
include("FrontendInclude/frontTopbar.php");
?>
<!-- Header Start -->
<div class="container-fluid py-5  mb-5"
  style="background-image:url('img/appoint.jpg');background-size:cover;height:600px;">
  <div class="container my-5 pt-5 pb-4">
    <h1 class="display-3 text-white mb-3 animated slideInDown">Appointment</h1>
  </div>
</div>
<!-- Header End -->
<!-- appoint lawyer code start  -->
<div class="container-fluid hiringpg">
  <section class="book text-center">
    <?php
    if (isset($_SESSION['status'])) {
      echo "<h4>" . $_SESSION['status'] . "</h4>";
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
                  <option value="Environmental Law">Environmental Law</option>
                  <option value="Cyber Criminal">Cyber Criminal</option>
                  <option value="Bankrupty">Bankrupty</option>
                  <option value="Bussiness Law">Bussiness Law</option>
                  <option value="Imigration">Imigration</option>
                  <option value="Litigation">Litigation</option>

                </select>
                <label for="day" class="w-100 text-left mt-4">Appointment</label>
                <input id="AppointDate" type="date" name="AppointDate" class="form-control" placeholder="Enter Date"
                  required>
                <div class="w-100">
                  <input type="submit" class="btn btn-primary mt-3 float-start" onclick="hire()" value="Submit"
                    onclick="hiring()" name="Appoint_Save">
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
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="card p-3">
            <form action="paymentCode.php" method="POST" class="form-group">
              <h3 class="payment">------------Payments------------</h3>
              <div class="paymentsImg p-4">
                <img src="img/easy.png" height="30px" width="30px">
                <img src="img/jazz.png" height="30px" width="30px">
                <img src="img/mastercard.png" height="30px" width="30px">
                <img src="img/cash.png" height="30px" width="30px">
                <img src="img/visa.png" height="30px" width="30px">
              </div>
              <hr>
              <label for="name" class="float-end">Full Name</label><br>
              <input type="text" name="Full_Name" class="form-control" id="full_name" required><br>
              <label for="email" class="float-end">Email</label><br>
              <input type="text" name="Email" id="email" class="form-control" required><br>
              <label for="cardNumber" class="float-end">Card Number</label><br>
              <input type="number" name="cardNumber" id="cardNumber" class="form-control" required><br>
              <label for="LawyerName" class="float-end">Lawyer Name</label><br>
              <input type="text" name="Lawyer_Name" id="lawyer_name" class="form-control" required><br>
              <div class="row">
                <div class="col-6">
                  <label for="city" class="float-end">City</label><br>
                  <select name="City" id="city" class="form-control" required>
                    <option value=""></option>
                    <option value="Karachi">Karachi</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="Faisalabad">Faisalabad</option>
                    <option value="Multan">Multan</option>
                    <option value="Quetta">Quetta</option>
                    <option value="Peshawar">Peshawar</option>
                    <option value="Sahiwal">Sahiwal</option>
                    <option value="Murree">Murree</option>
                  </select><br>
                </div>
                <div class="col-6">
                  <label for="ZipCode" class="float-end">Zip Code</label><br>
                  <input type="number" name="ZipCode" id="ZipCode" class="form-control" required><br>
                  <br>
                </div>
              </div>
              <label for="mode" class="float-end">Mode of Payment</label>
              <div class="float-start mx-3 mb-1">
                <img src="img/easy.png" height="25px" width="25px">
                <img src="img/jazz.png" height="25px" width="25px">
                <img src="img/mastercard.png" height="25px" width="25px">
                <img src="img/cash.png" height="25px" width="25px">
              </div><br>
              <select name="PaymentMode" id="paymentMode" class="form-control" required>
                <option value=""></option>
                <option value="Cash">Cash</option>
                <option value="Master Card">Master Card</option>
                <option value="Easy paisa">Easy Paisa</option>
                <option value="Jazz Cash">Jazz Cash</option>
              </select><br>
              <button type="submit" class="btn btn-danger float-start glowbtn" onclick="Confirm()"
                name="PaymentSubmit">Confirm Payment</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end appoint lawyer code start  -->
<?php
include("FrontendInclude/backbutton.php");
include("FrontendInclude/frontFooter.php");
?>
<style>
  @keyframes glowing {
    0% {
      box-shadow: 0 0 5px #ff0000;
    }

    50% {
      box-shadow: 0 0 10px #ff0000;
    }

    100% {
      box-shadow: 0 0 5px #ff0000;
    }
  }

  .glowbtn {
    animation: glowing 2s infinite;
  }
</style>