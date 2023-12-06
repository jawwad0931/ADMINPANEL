<!-- contact us wala page -->
<?php
include("Frontenddb/db.php");
include("FrontendInclude/frontHeader.php");
include("FrontendInclude/frontTopbar.php");
?>
<!-- Header Start -->
<div class="container-fluid py-5  mb-5"
    style="background-image:url('img/Contact.jfif');background-size:cover;height:600px;background-position:center">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
    </div>
</div>
<!-- Header End -->
<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container-fluid">
        <h1 class="text-center mb-5 text-secondary">Contact For Any Query</h1>
        <div class="row g-4">
            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center bg-light rounded p-3">
                            <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3"
                                style="width: 45px; height: 45px;">
                                <i class="fa fa-map-marker-alt text-secondary"></i>
                            </div>
                            <span class=""><a class="text-decoration-none text-secondary fs-6 fw-bold" href="https://www.google.com/maps/place/Clifton,+Karachi,+Karachi+City,+Sindh,+Pakistan/@24.818303,66.999063,14z/data=!3m1!4b1!4m6!3m5!1s0x3eb33dbbdc1875bf:0x6a6572ab3a66fed8!8m2!3d24.8269877!4d67.025096!16zL20vMGMwdmti?entry=ttu">Clifton,Karachi,Pakistan</a></span>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center bg-light rounded p-3">
                            <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3"
                                style="width: 45px; height: 45px;">
                                <i class="fa fa-envelope-open text-secondary"></i>
                            </div>
                            <span class=""><a class="text-decoration-none text-secondary fs-6 fw-bold" href="mailto:info@jobprep.com">Jawwadk638@gamil.com</a></span>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center bg-light rounded p-3">
                            <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3"
                                style="width: 45px; height: 45px;">
                                <i class="fa fa-phone-alt text-secondary"></i>
                            </div>
                            <span class=""><a class="text-decoration-none text-secondary fs-6 fw-bold" href="tel:+923085499310">+923400028803</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.842895042729!2d67.03111787495672!3d24.8350457462749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33dc59d94aae5%3A0xd52c8da8236bbcf3!2sGlass%20Tower!5e0!3m2!1sen!2s!4v1692656072364!5m2!1sen!2s"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="pb-2 text-secondary">Fill Your Message</h3>
                <p class="mb-4 text-secondary">Contact Us for any query and then we are able to help you about
                    Lawyer.
                </p>
                <!-- Contact Form ka data yahan se database mai ja raha hai-->
                <form action="contactcode.php" method="POST" class="row g-3 needs-validation" style="width: 100%;">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="validationCustomName"
                                    placeholder="Your Name" name="Name" required>
                                <label for="validationCustomName" class="form-label w-100">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="validationCustomEmail"
                                    placeholder="Your Email" name="Email" required>
                                <label for="validationCustomEmail" class="form-label">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="validationCustomPhone" placeholder="Phone"
                                    name="Phone" required>
                                <label for="validationCustomPhone" class="form-label">Phone No</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here"
                                    id="validationCustomMessage" style="height: 150px" name="Question"
                                    required></textarea>
                                <label for="validationCustomMessage" class="form-label">Question</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-outline-primary btn-md w-100 py-2" onclick="contact()"
                                name="Submit_Message">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<?php
include("FrontendInclude/backbutton.php");
include("FrontendInclude/frontFooter.php");
?>