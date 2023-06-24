<?php include("header.php"); ?>
<section class="page-title" style="background-image:url(images/background/5.jpg);">
    <div class="auto-container">
        <h1>Contact Us</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index.php">Home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</section>
<!-- body -->
<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="contact-column col-lg-4 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>Contact Info</h2>
                    </div>
                    <ul class="contact-info">
                        <li>
                            <span class="icon fa fa-map-marker-alt"></span>
                            <p><strong>Biz Events Management</strong></p>
                            <p>Tower 400, 20th Floor Sharjah, UAE P O Box : 24496</p>
                        </li>

                        <li>
                            <span class="icon fa fa-phone-volume"></span>
                            <p><strong>Call Us</strong></p>
                            <p>+971 6 5503300</p>
                        </li>

                        <li>
                            <span class="icon fa fa-envelope"></span>
                            <p><strong>Mail Us</strong></p>
                            <p><a href="mailto:eventmanager@ariesgroupglobal.com">eventmanager@ariesgroupglobal.com</a></p>
                        </li>

                        <!-- <li>
                            <span class="icon fa fa-clock"></span>
                            <p><strong>Opening Time</strong></p>
                            <p>Mon - Sat: 09.00am to 18.00pm</p>
                        </li> -->
                    </ul>

                    <!-- <ul class="social-icon-two social-icon-colored">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    </ul> -->
                </div>
            </div>

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="contact-form">
                        <div class="sec-title">
                            <h2>Get in Touch</h2>
                        </div>
                        <form method="post" action="sendemail.php" id="contact-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Submit Now</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end body -->
<?php include("footer.php"); ?>