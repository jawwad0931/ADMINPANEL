<?php
include("Frontenddb/db.php");
include("FrontendInclude/frontHeader.php");
include("FrontendInclude/frontTopbar.php");
?>


        <!-- Header Start -->
        <div class="container-fluid py-5  mb-5" style="background-image:url('img/cont.jpg');background-size:cover;height:500px;">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
            </div>
        </div>
        <!-- Header End -->
 
 <!-- Contact Start -->
 <div class="container-fluid py-5">
            <div class="container-fluid">
                <h1  class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Contact For Any Query</h1>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-map-marker-alt text-primary"></i>
                                    </div>
                                    <span>Clifton,Karachi,Pakistan</span>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-envelope-open text-primary"></i>
                                    </div>
                                    <span>Jawwadk638@gamil.com</span>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-phone-alt text-primary"></i>
                                    </div>
                                    <span>+9278965214</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.842895042729!2d67.03111787495672!3d24.8350457462749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33dc59d94aae5%3A0xd52c8da8236bbcf3!2sGlass%20Tower!5e0!3m2!1sen!2s!4v1692656072364!5m2!1sen!2s" width="570" height="470" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp">
                            <h3 class="pb-2">Fill Your Message</h3>
                            <p class="mb-4">Contact Us for any query and then we are able to help you about Lawyer.
                                  </a></p>
                                  <form action="contactcode.php" method="POST" class="row g-3 needs-validation" style="width: 100%;" novalidate>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="validationCustomName" placeholder="Your Name" name="Name" required>
                                                <label for="validationCustomName" class="form-label">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="validationCustomEmail" placeholder="Your Email" name="Email" required>
                                                <label for="validationCustomEmail" class="form-label">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="validationCustomPhone" placeholder="Phone" name="Phone" required>
                                                <label for="validationCustomPhone" class="form-label">Phone No</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a message here" id="validationCustomMessage" style="height: 150px" name="Question"  required></textarea>
                                                <label for="validationCustomMessage" class="form-label">Question</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" name="Submit_Message">Send Message</button>
                                            <div class="feedback-message"></div>
                                        </div>
                                    </div>
                                  </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

<?php 
    include("FrontendInclude/backbutton.php");
    include("FrontendInclude/frontFooter.php");
?>
        