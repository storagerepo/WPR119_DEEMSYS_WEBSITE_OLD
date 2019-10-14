<?php
// echo "<pre>";
// print_r($_POST); exit;

session_start();


//require("db_config.php");
require("class.phpmailer.php");

$username = $_POST['username'];


if($username)
{
$mail = new PHPMailer();
$mail->SMTPDebug=1;
$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "ssl://smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "deemgps@gmail.com";  // SMTP username
$mail->Password = "deemsys@123"; // SMTP password
$mail->Port=465;
$mail->From = "deemgps@gmail.com";
$mail->FromName="DeemGPS";
$mail->AddAddress($username,"Hi");


$mail->WordWrap = 50;        // add attachments
$mail->IsHTML(true);                                  // set email format to HTML
$mail->Subject = "Welcome to DeemGPS!";
$mail->Body    = '<body>
<table width="650" border="0" cellspacing="0" cellpadding="0" align="center" style="padding:10px; border: rgb(241, 250, 252) 1px solid;">
  <tr>
    <td align="left" valign="top" style="background-color: rgb(241, 250, 252); padding:10px; border-bottom: rgb(153, 153, 153) 5px solid; "><img width="200px" height:"100px" src="http://i1153.photobucket.com/albums/p512/lms_images/vtr_zps74dbd300.png"  alt="Medication Monitor" /></td>
  </tr>
  <tr valign="top"><td align="left" style="background-color: rgb(241, 250, 252); padding:20px;"><h1 style="color: rgb(68, 68, 68); font-size:20px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:normal;">Hey what’s up!<br/> We thank you for subscribing to DeemGPS.</h1>
  <p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">Sit Tighter! We will let you know the tracking time soon.</p>
  <p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;">The launch date will be announced to you shortly....</p>
  </td></tr>

  <tr><td align="left" valign="top" style="background-color: rgb(241, 250, 252); padding:5px 20px 15px 20px;">
  <p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">Follow us on Our Facebook Page <a href="https://www.facebook.com/DeemGPS">https://www.facebook.com/DeemGPS</a>

</p>
</td></tr>
<tr><td style="background-color: rgb(241, 250, 252); padding:5px 20px;"><p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0; font-style:italic;">Thanks & Regards,</p>
<p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(49, 148, 204); font-size:12px; margin:5px 0 10px 0; padding:0; font-style:italic; font-weight:bold;">DeemGPS Team</p>
</td></tr>
<tr><td align="center" valign="top" style="background-color: rgb(241, 250, 252); padding:5px 20px;border-top: rgb(153, 153, 153) 5px solid;"><p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(255, 255, 255); font-size:11px; margin:5px 0; padding:0;">If you have any queries, please feel free to contact us at deemgps@gmail.com or </p>
<p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(255, 255, 255); font-size:11px; margin:5px 0; padding:0;">by phone at +91 9841122989</p>
<p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(255, 255, 255); font-size:11px; margin:0 0 5px 0; padding:0; text-align:center;">Â© 2014. All rights reserved.</p>
</td></tr>
</table>
</body>';
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";


$mail1 = new PHPMailer();
$mail1->SMTPDebug=1;
$mail1->IsSMTP();                                      // set mailer to use SMTP
$mail1->Host = "ssl://smtp.gmail.com";  // specify main and backup server
$mail1->SMTPAuth = true;     // turn on SMTP authentication
$mail1->Username = "deemgps@gmail.com";  // SMTP username
$mail1->Password = "deemsys@123"; // SMTP password
$mail1->Port=465;
$mail1->From = "deemgps@gmail.com";
$mail1->FromName="DeemGPS";
$mail1->AddAddress("deemsys.bd@gmail.com","Hi");


$mail1->WordWrap = 50;        // add attachments
$mail1->IsHTML(true);                                  // set email format to HTML
$mail1->Subject = "Welcome to DeemGPS!";
$mail1->Body    = '<body><p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(255, 255, 255); font-size:11px; margin:5px 0; padding:0;">Subcribed Person Mail ID:<p>'.$username.'<//body>';
$mail1->Send();

if($mail1->Send())
       {
             $_SESSION['success']="Thanks for your subscription!";
             header("Location:../index.php");
       }
       else
       {
        die ('Unable to Send  Mail');
       }


if(!$mail->Send())
{
#$mail1->Send();
    echo "Message could not be sent. <p>";
    echo "Mailer Error: " . $mail->ErrorInfo;
echo "Mailer error2".$mail1->ErrorInfo;
    exit;
}
echo "Message has been sent";
}
else
{
    echo 'update not success';
}


?>
