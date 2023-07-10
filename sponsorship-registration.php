<?php include("header.php"); ?>
<section class="page-title shado" style="background-image:url(our-images/banners/contact-banner.avif);">
    <div class="auto-container">
		<h1 style="font-size:35px">ShipTek International Conference & Awards KSA 2024</h1>
        <h1 style="font-size:30px">Sponsorship Registration</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index">Home</a></li>
            <li>Sponsorship Registration</li>
        </ul>
    </div>
</section>
<div class="container p-5">
    <!-- <div class="sec-title">
        <span class="title">ShipTek</span>
        <h2 style="color: green;">Sponsorship Registration</h2>
    </div> -->
    <form action="sponsorship-action" id="registration" method="post">
	<?php
if(isset($_GET['status'])&&$_GET['status']==0){
 echo " <font color=red><b><center>Please click on the reCAPTCHA box</center></b></font>.";
 }
if(isset($_GET['status'])&&$_GET['status']==1){
 echo " <font color=green><b><center>Your Sponsorship Enquiry has been Submitted Successfully</center></b></font>.";
}
?>
        <div class="row shadow-lg d-flex justify-content-center align-items-center" style="padding: 40px 10px;">
            <div class="col-12 col-lg-4 col-md-4 mb-4">
                <!-- <label class="form-label" for="firstName">First Name</label> -->
                <input class="form-control" name="fname" type="text" placeholder="First Name" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" required>
            </div>
            <div class="col-12 col-lg-4 col-md-4 mb-4">
                <input class="form-control" name="lname" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Last Name" required>
            </div>
            <div class="col-12 col-lg-4 col-md-4 mb-4">
                <input class="form-control" name="phone_number" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Phone Number" required>
            </div>
            <div class="col-12 col-lg-4 col-md-4 mb-4">
                <input class="form-control" name="email" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Email" required>
            </div>
            <div class="col-12 col-lg-4 col-md-4 mb-4">
                <input class="form-control" name="job" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Job Title" required>
            </div>
            <div class="col-12 col-lg-4 col-md-4 mb-4">
                <input class="form-control" name="company" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Company Name" required>
            </div>
            <div class="col-12 col-lg-4 col-md-4 mb-4">
                <input class="form-control" name="location" style="background-color: #f1f1f1; padding:15px 30px; width:100%; color:#555555 ; border: 1px solid #f1f1f1;" type="text" placeholder="Where Are You Located ?" required>
            </div>
            <div class="col-12 col-lg-4 col-md-4 mb-4">
                <select style="background-color: #f1f1f1; padding:15px 0px; width:100%; color:#555555 ; border: 1px solid #f1f1f1; height:55px" name="categories" id="" class="form-control">
                    <option value="" disabled selected>
                        Select Sponsor Ship Category
                    </option>
                    <option value="Title Sponsor">Title Sponsor</option>
                    <option value="Platinum Sponsor">
                        Platinum Sponsor
                    </option>
                    <option value="Gold Sponsors">Gold Sponsors</option>
                    <option value="Cocktail Sponsor">
                        Cocktail Sponsor
                    </option>
                    <option value="Silver Sponsors">
                        Silver Sponsors
                    </option>
                    <option value="Notepad & Pen Sponsor">
                        Notepad & Pen Sponsor
                    </option>
                    <option value="Badge & Lanyard">
                        Badge & Lanyard
                    </option>
                    <option value="Registration Area Sponsor">
                        Registration Area Sponsor
                    </option>
                    <option value="Bronze Sponsors">
                        Bronze Sponsors
                    </option>
                    <option value="Award Sponsor">Award Sponsor</option>
                    <option value="Lunch & Coffee Sponsor">
                        Lunch & Coffee Sponsor
                    </option>
                    <option value="Table Top Sponsors">
                        Table Top Sponsors
                    </option>
                    <option value="Conference Session Sponsor">
                        Conference Session Sponsor
                    </option>
                    <option value="Welcome Drinks Sponsor">
                        Welcome Drinks Sponsor
                    </option>
                    <option value="Associate Sponsors">
                        Associate Sponsors
                    </option>
                </select>
            </div>
            <div class="">
                <div class="col-md-12 col-sm-12">
                    <div class="g-recaptcha" data-sitekey="6Ldxe20UAAAAAD_17wcLirt0F7WmMb_Ixgoi3AYt"></div>
                </div>
            </div>
            <div>
                <div class="btn-box">
                    <button type="submit" name="submit" id="submit" class="btn" style="background-color:green;color:#f1f1f1">Submit</button>
					<button type="button" class="btn" style="display: none"  id="waitmsg" value="Please Wait..." disabled="disabled" style="background-color:green;color:#f1f1f1">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php include("footer.php"); ?>

<script type="text/javascript">
var validate =  $("#registration").validate({
    rules: {
                fname:"required",
                lname:"required",
                phone_number:"required",
                email:"required",
                job:"required",
                company:"required",
                location:"required",
                categories:"required",

  },
            messages: {
                fname:"Please enter your name.",
                lname:"Please enter your last name.",
                 mobile:"Please enter your mobile number.",
                phone_number:"Please enter your phone number.",
                 email:"Please enter a valid email address.",
                job:"Please enter your designation.",
                company:"Please enter your company name.",
                location:"Please enter your location.",
                categories:"Please select one category.",
                 },
                 errorPlacement: function(error, element) {
                        if (element.attr("type") == "checkbox") {
                        error.insertAfter("#caterr");
                    }
                        else {
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

<style>
.error{
color:red;	
	
}
</style>