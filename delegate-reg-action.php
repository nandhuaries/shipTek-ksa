<?php
include '../dbcon.php';
include("../PHPMailer/class.phpmailer.php");
include("../PHPMailer/class.smtp.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$error="";
if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
{
$secret = '6Ldxe20UAAAAAFMORF6WO4ehTYDklXgm9mqZulDW';
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);
if ($responseData->success) {

if (isset($_POST['submit'])){
$firstname = str_replace("'", '',$_POST['firstname']);
$lastname = str_replace("'", '',$_POST['lastname']);
$company = str_replace("'", '',$_POST['company']);
$country =  str_replace("'", '',$_POST['country']);
$companynumber =  str_replace("'", '',$_POST['companynumber']);
$sector = str_replace("'", '',$_POST['sector']);
$nationality =  str_replace("'", '',$_POST['nationality']);
$designation =  str_replace("'", '',$_POST['designation']);
$office_mail =  str_replace("'", '',$_POST['official_email']);
$personal_mail =  str_replace("'", '',$_POST['email']);
$mobilenumber =  str_replace("'", '',$_POST['mobilenumber']);
$department =  str_replace("'", '',$_POST['department']);
$regdate = date('y-m-d');


 $sql = "INSERT INTO `ksa_delegate_reg_2024`
(`firstname`, `lastname`,`company`,`country`,`company_number`,`sector`,`nationality`,`designation`,`office_mail`,`personal_mail`,`mobile`,`department`,
`status`,`reg_date`,`admin_status`) VALUES ('$firstname','$lastname','$company','$country','$companynumber','$sector','$nationality','$designation','$office_mail',
'$personal_mail','$mobilenumber','$department','1','$regdate','0');";

  //print_r($sql);
   //exit();


$query = mysqli_query($con, $sql) or die(mysqli_error($con)); 


if ($query) {
 $id = mysqli_insert_id($con);

 $sendmail = sendmail($firstname,$lastname,$company,$country,$companynumber,$sector,$nationality,$designation,$office_mail,$personal_mail,$mobilenumber,$department);   
echo"<script>window.location='delegate-registration.php?status=1'</script>";
}
}}

 else {
         $error .= "Robot verification failed, please try again. <br />";
        echo "<script>window.location='delegate-registration.php'</script>";
     }
}

    else {

    $error .= "Please click on the reCAPTCHA box. <br />";
    echo "<script>window.location='delegate-registration.php?status=0'</script>";
}


function sendmail($firstname,$lastname,$company,$country,$companynumber,$sector,$nationality,$designation,$official_email,$email,$mobilenumber,$department) {

$subject = "ShipTek KSA 2024 - Delegate Registration";

     $body='<!DOCTYPE html>

  <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ShipTek KSA 2024 - Delegate Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    

<body style="background-color: #F2F3F5;">
<div style="background-color: #F2F3F5;">
<div style="font-family: Arial, Helvetica, sans-serif;max-width: 650px;display: block;margin: 0 auto;margin-bottom: 50px;border-top: 2px dashed #ccc;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
<div style="background-color: #FFF; padding: 30px;">
<img src="http://shiptekmaritimeevents.com/shiptek-2024/pics/logos/logo.png"  alt="image" style="height: 85px;margin: 0 auto;display: block;padding: 6px 0px;" align="center";>

</div>
<div style="background-color: white;padding: 5px 30px 30px 30px;">
                    
                <p style="margin-bottom: 20px;">
                        Hi Admin,
                    </p>
                    <p style="line-height: 25px;text-align: justify;">

            A Delegate Registration has been submitted via website under ShipTek 2024 KSA. Please find the details:
                    </p>

                                                                                                                            
                    <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">First Name : 
                    '.$firstname.'</h3>
					<h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Last Name : 
                    '.$lastname.'</h3>
					<h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Company : 
                    '.$company.'</h3>
					<h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Country : 
                    '.$country.'</h3>
					<h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Company Number : 
                    '.$companynumber.'</h3>
					<h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Sector : 
                    '.$sector.'</h3>
					<h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Nationality : 
                    '.$nationality.'</h3>
					<h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Designation : 
                    '.$designation.'</h3>
                    <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Official Email : 
					<a href="mailto:'.$official_email.'">'.$official_email.'</a></h3>
					<h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Email : 
					<a href="mailto:'.$email.'">'.$email.'</a></h3>
                     <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 24px;">Mobile Number : 
                     '.$mobilenumber.'</h3>
                     <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 24px;">Department : 
					 '.$department.'</h3>
                    
                      
                                                   
                      
</p>

                    
                </div>
                <div style="background-color:#00BFFF;padding: 15px;">
                    <p style="margin: 0px;font-size: 14px;color: white;opacity: 1;text-align: center;">Thank you...!</p>
                </div>
            </div>
        </div>
    </body>

</html>';

$mail = new PHPMailer(true);


    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;
    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
    //Set the hostname of the mail server
    $mail->Host = "mail.shiptek20.com";
    //Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 25;
    //Whether to use SMTP authentication
    //$mail->SMTPSecure = 'ssl';

    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication
    $mail->Username = "esol@shiptek20.com";
    //Password to use for SMTP authentication
    // $mail->Password = "1R~(81BbE^9@";
    $mail->Password = "kZL00yzzCH?e";
    //Set who the message is to be sent from
    $from = "esol@shiptek20.com";

    //$address = "support@insuretek.org";

 $mail->addAddress("anagha.p@ariesesolutions.com"); 
 $mail->addAddress("krishnendu@ariesesolutions.com");
//$mail->addAddress("leeba.ej@ariesesolutions.com");

//$mail->addAddress("eventmanager@ariesgroupglobal.com");
//$mail->addAddress("Saran.ks@arieslocal.com");
    //$mail->addCC("support@ariesesolutions.com");

    $mail->setFrom($from, 'ShipTek KSA 2024');

    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->IsHTML(true);

   if ($mail->Send()) {
        $maill = new PHPMailer(true);


        //Tell PHPMailer to use SMTP
        $maill->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $maill->SMTPDebug = 0;
        //Ask for HTML-friendly debug output
        $maill->Debugoutput = 'html';
        //Set the hostname of the mail server
        $maill->Host = "mail.shiptek20.com";
        //Set the SMTP port number - likely to be 25, 465 or 587
        $maill->Port = 25;
        //Whether to use SMTP authentication
        //$mail->SMTPSecure = 'ssl';

        $maill->SMTPAuth = true;
        //Username to use for SMTP authentication
        $maill->Username = "esol@shiptek20.com";
        //Password to use for SMTP authentication
        $maill->Password = "kZL00yzzCH?e";

        //$maill->addAttachment("assets/files/ShipTek- Brochure-2022.pdf");
        //Set who the message is to be sent from
        $from = "esol@shiptek20.com";
 

        $message = '<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ShipTek KSA 2024 - Delegate Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    

    <body style="background-color: #F2F3F5;">

        <div style="background-color: #F2F3F5;">
            <div style="font-family: Arial, Helvetica, sans-serif;max-width: 650px;display: block;margin: 0 auto;margin-bottom: 50px;border-top: 2px dashed #ccc;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                <div style="background: #7ea8d8; padding: 30px;">
                    <img src="http://shiptekmaritimeevents.com/shiptek-2024/pics/logos/logo.png"  alt="" style="margin: 0 auto;display: block;padding: 6px 0px;">
                </div>
                <div style="background-color: white;padding: 5px 30px 30px 30px;">
                    
                    <p style="margin-bottom: 20px;">
                        Dear ' . $firstname . ' ' . $lastname . ',
                    </p>
                    <p style="line-height: 25px;text-align: justify;">
                   
Thank you for registering your interest in the ShipTek International Conference & Awards 2024 KSA. Our team shall get in touch with you with more details Shortly.

				   
                    </p>

                  
                          
                      
</p>

                    
                </div>

                <div style="background-color: #7ea8d8;padding: 15px;">
                    <p style="margin: 0px;font-size: 14px;color: white;opacity: 1;text-align: center;">Thank you...!</p>
                </div>
            </div>
        </div>
    </body>

</html>';


        $maill->addAddress($official_email);
		$maill->addBCC($email);
        $maill->setFrom($from, 'ShipTek 2024 KSA');

        $maill->Subject = "ShipTek 2024 KSA - Delegate Registration Confirmation";
        $maill->Body = $message;
        $maill->IsHTML(true);
        $maill->Send();
    }
}
