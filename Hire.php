<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
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
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>