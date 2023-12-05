<!-- index page hai yahan user login aur register karega website ka page yahan se register kiya jaa raha hai-->
<?php
include("Frontenddb/db.php");
include("FrontendInclude/frontHeader.php");
?>
<!DOCTYPE html>
<html lang="en">
<body class=''>
  <!-- index Page code start -->
  <section id="Reg_Section"
    style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('img/register.jpg'); background-size: cover;height:auto">
    <div class="container">
      <div class="row d-flex justify-content-center" style="height:595px;">
        <div class="col-12 d-flex align-items-center justify-content-center">
          <div class="col-lg-6 col-md-12 col-sm-12">
          <h1 class="text-center text-light">Welcome to <br> Justice Law Firm Website</h1>
          <hr class="text-light">
          <div id="Pcontent" class="">
            <p class="text-center text-light" id="banner_Content_p">At Justice Law Firm, we stand at the intersection of justice and advocacy. Our dedicated team of legal professionals is committed to delivering exceptional results tailored to your unique needs. Trust us to be your champions in the pursuit of fairness and resolution. Welcome to a place where your legal concerns find expert solutions.</p>
          </div>
          <!-- yahan modal define hai register ke liya -->
          <div class="banner_btn">
            <!--Register Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Registered Here
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form Action='RegisterCode.php' method='POST'>
                    <span class="">
                      <h3 class="text-dark mt-2 fw-light">User Registration</h3>
                    </span>
                    <hr class="text-dark">
                    <div class="modal-body">
                      <div class="form-group mt-3">
                        <input type="text" class="form-control" id="name" name="Name" placeholder="Enter your name"
                          required>
                      </div>
                      <div class="form-group mt-3">
                        <input type="email" class="form-control" id="email" name="Email" placeholder="Enter your email"
                          required>
                      </div>
                      <div class="form-group mt-3">
                        <input type="tel" class="form-control" id="phone" name="Phone"
                          placeholder="Enter your phone number" required>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group mt-3">
                            <input type="password" class="form-control" name="Password" id="password"
                              placeholder="Enter your password" required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group mt-3">
                            <input type="password" class="form-control" name="Confirm-Password" id="password"
                              placeholder="Enter your password" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" onclick="register()" name='AddUser'>Register</button>
                      <script>
                        function register(){
                          alert('User Registered Successfully\nLogin To Access Dashboard');
                        }
                      </script>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- yahan modal define hai login ke liya -->
          <div class="banner_btn">
            <!--Login Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#login-modal">
              Login Here
            </button>
            <!-- Modal -->
            <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form class="m-5" action='ModalLoginCode.php' method='POST'>
                    <span class="">
                      <h3 class="text-dark mt-2 fw-light">User Login</h3>
                    </span>
                    <hr class="text-dark">
                    <div class="modal-body">
                      <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"
                          required>
                      </div>
                      <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password" id="password"
                          placeholder="Enter your password" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" name='Login'>Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- register page code end here -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>