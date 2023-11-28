<?php 
    include("FrontendInclude/frontHeader.php");
    include("FrontendInclude/frontTopbar.php");
?>

<!-- Header  -->
  <div id="appointment" class="container-flex">
    <div class=" container-fluid text-center  header-book">
      <h1>Book Your Appointment Today</h1>
      <p class="lead"></p>
    </div>
</div>
<!-- Price Start -->
    <section class="price text-center">
      <div class="container">
        <h2 class="payment-title">Payment</h2>
        <div class="card card-pay">
          <h3>Pay for your Consultation</h3>
          <div class="card-body-pay">
            <i class="bi-payment bi-cash"></i><br>
            <button name="pay" class="pay" id="pay" onclick="click">Pay</button>
              <form action="" name="payment" class="payment form-group" id="payment">
                <label for="name" class="paymentname" id="paymentName">Full Name</label><br>
                <input type="text" class="pname form-control" id="pname"><br>
                <label for="email" class="email" id="email">Email</label><br>
                <input type="text" class="emailaddress form-control" id="emailaddress"><br>
                <label for="mode">Mode of Payment</label><br>
                <select name="modeofpayment" id="modeOfPayment" class="modepayment form-control">
                  <option value=""></option>
                  <option value="Cash">Cash</option>
                  <option value="Cash">Card</option>
                  <option value="Cash">M-Pesa</option>
                </select><br>
                <button class="paymentconfirm" id="paymentconfirm" onclick="click">Confirm Payment</button>
              </form>
          </div>
        </div> 
      </div>
    </section>
<!-- Price End -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>

  <?php include("FrontendInclude/frontFooter.php") ?>