<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/landingpage.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="../img/favicon.jpg">
  <title>Book Your Appointment</title>
</head>
<body>
<!-- Navigation  -->
  <header>
    <nav class="navbar">
        <div class="container">
                <img src="../img/logoheader.png"  width="80" height="80" alt="logo">
            <div class="nav-bar">
                <ul>
                    <li><a href="../index.php" class="active">Home</a></li>
                    <li><a href="../index.php">About</a></li>
                    <li><a href="../index.php">Team</a></li>
                    <li><a href="./services.php">Services</a></li>
                    <li><a href="Hire.php">Appointment</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
  </header>
<!-- Header  -->
  <div id="appointment" class="container-flex">
    <div class=" container-fluid text-center  header-book">
      <h1>Book Your Appointment Today</h1>
      <p class="lead"></p>
    </div>
  </div
<!-- Price  -->
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
<!-- Footer  -->
<footer> 
  <div class="footer sticky-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-2">
                <div class="footer-contact">
                    <h5>Get in Touch</h5>
                    <i class="bi-footer bi-telephone-fill"></i>
                    <span>+254712345678<span>
                    <br>
                    <i class="bi-footer bi-envelope-fill"></i>
                    <span>haki@info.co.ke</span>
                    <br>
                    <i class="bi-footer bi-geo-alt"></i>
                    <span>Ngong Lane, Nairobi.</span>
                </div>
            </div>
            <div class="col-md-6 form-message">
                <div class="mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <button type="button" class="btn btn-footer-message">Send</button>
                </div>
            </div>
        </div>
        <div class="copy">
          &copy; Haki 2021. All Rights Reserved.
        </div>
      </div>
    </div>
  </div>
</footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>
</body>
</html>