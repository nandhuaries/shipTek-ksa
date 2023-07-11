<?php include("header.php"); ?>
<section class="page-title shado" style="background-image:url(our-images/banners/contact-banner.avif);">
    <div class="auto-container">
        <h1 style="font-size:35px">ShipTek International Conference & Awards KSA 2024</h1>
        <h1 style="font-size:30px">Delegate Registration</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index">Home</a></li>
            <li>Delegate Registration</li>
        </ul>
    </div>
</section>
<div class="container p-5">
    <!-- <div class="sec-title">
        <span class="title">ShipTek</span>
        <h2 style="color: green;">Delegate Registration</h2>
    </div> -->
    <?php

    if (isset($_GET['status']) && $_GET['status'] == 0) {
        echo " <font color=red><center><b class=successtext>Please click on the reCAPTCHA box</b></center></font>.";
    }
    if (isset($_GET['status']) && $_GET['status'] == 1) {
        echo " <font color=green><center><b class=successtext>Your delegate registration has been submitted successfully</b></center></font>.";
    } ?>
    <form action="delegate-reg-action.php" id="delegate" method="POST">
        <div class="row shadow-lg d-flex justify-content-center align-items-center" style="padding: 40px 10px; background-color: #B1D7B4;">
            <div class="col-12 col-lg-3 col-md-4 mb-4">
                <!-- <label class="form-label" for="firstName">First Name</label> -->
                <input class="form-control" type="text" name="firstname" placeholder="First Name" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" required>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mb-4">
                <input class="form-control" name="lastname" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Last Name" required>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mb-4">
                <input class="form-control" name="company" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Company" required>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mb-4">
                <input class="form-control" name="country" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Country" required>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mb-4">
                <input class="form-control" name="companynumber" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Company Telephone" required>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mb-4">
                <input class="form-control" name="sector" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Sector" required>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mb-4">
                <input class="form-control" name="nationality" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Nationality" required>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mb-4">
                <input class="form-control" name="designation" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Designation" required>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mb-4">
                <input class="form-control" name="official_email" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Official Mail" required>
            </div>
            <!-- <div class="col-12 col-lg-3 col-md-4 mb-4">
                <input class="form-control" name="email" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Personal E-Mail" required>
            </div> -->
            <div class="col-12 col-lg-3 col-md-4 mb-4">
                <input class="form-control" name="mobilenumber" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Mobile Number" required>
            </div>
            <!-- <div class="col-12 col-lg-3 col-md-4 mb-4">
                <input class="form-control" name="department" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Department" required>
            </div> -->
            <!-- <div class="col-12 col-lg-3 col-md-4 mb-4">
                <div class="g-recaptcha" data-sitekey="6Ldxe20UAAAAAD_17wcLirt0F7WmMb_Ixgoi3AYt"></div>
            </div> -->
            
            <div class="">
                <div class="col-md-12 col-sm-12">
                    <div class="g-recaptcha" data-sitekey="6Ldxe20UAAAAAD_17wcLirt0F7WmMb_Ixgoi3AYt"></div>
                </div>
            </div>
            <div>
                <div class="btn-box mt-3 mt-lg-0 mt-md-0">
                    <button class="btn" type="submit" name="submit" id="submit" style="background-color:green;color:#f1f1f1">Submit</button>
                    <button class="btn" type="button" name="waitmsg" id="waitmsg" style="display: none" disabled="disabled" style="background-color:green;color:#f1f1f1">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php include("footer.php"); ?>

<script type="text/javascript">
    var validate = $("#delegate").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            company: "required",
            country: "required",
            companynumber: "required",
            sector: "required",
            nationality: "required",
            designation: "required",
            official_email: "required",
            email: "required",
            mobilenumber: "required",
            department: "required",


        },
        messages: {
            firstname: "Please enter your firstname.",
            lastname: "Please enter your lastname.",
            company: "Please enter your company name.",
            country: "Please enter your country of residence.",
            companynumber: "Please enter your company number.",
            sector: "Please enter your sector.",
            nationality: "Please enter your nationality.",
            designation: "Please enter your designation.",
            official_email: "Please enter your official email.",
            email: "Please enter your email.",
            mobilenumber: "Please enter your mobile number.",
            department: "Please enter your department.",

        },
        errorPlacement: function(error, element) {
            if (element.attr("type") == "checkbox") {
                error.insertAfter("#caterr");
            } else {
                error.insertAfter(element);
            }

        },


        submitHandler: function() {
            if (grecaptcha.getResponse() == "") {
                alert("Are you a robot? Don't be shy, complete the reCaptcha! ?");
                return false;
            }
            // call your function
            $('#submit').hide();
            $('#waitmsg').show();
            return true;
        }


    });
</script>
<style type="text/css">
    .error {
        color: red;
    }
</style>