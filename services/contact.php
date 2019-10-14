<?php
// echo "<pre>";
// print_r($_POST); exit;

session_start();


//require("db_config.php");
require("class.phpmailer.php");
echo "Thank You for Subscribing Us";
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$message = $_POST['message'];
$address = $_POST['address'];

if($username && $lastname && $firstname && $message && $address)
{
$mail = new PHPMailer();
$mail->SMTPDebug=1;
$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "server.deemsysinc.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "info@deemsysinc.com";  // SMTP username
$mail->Password = "deemsys@123"; // SMTP password
$mail->Port=587;
$mail->From = "info@deemsysinc.com";
$mail->FromName="Deemsys Inc";
$mail->AddAddress($username,"Hi");
echo "address:".$username;


$mail->WordWrap = 50;        // add attachments
$mail->IsHTML(true);                                  // set email format to HTML
$mail->Subject = "Welcome to Deemsys Inc";
$mail->Body    = '<body>
<table width="650" border="0" cellspacing="0" cellpadding="0" align="center" style="padding:10px; border: rgb(241, 250, 252) 3px solid;">
  <tr>
    <td align="left" valign="top" style="padding:10px; border-bottom: rgb(153, 153, 153) 5px solid; ">
<img width="200px" height:"100px" src="http://i1153.photobucket.com/albums/p512/lms_images/deemsyslogo_zps0b0dd665.png"  alt="Deemsys" /></td>
  </tr>
  <tr valign="top"><td align="left" style="background-color: rgb(241, 250, 252); padding:20px;">
  <p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">
Dear '.$firstname.'  '.$lastname.',</p>
<h3 style="color: rgb(68, 68, 68); font-size:20px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:normal;">
Thanks for your enquiry.<br/></h3>
<p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">
We have received your details.<br>  </p>
<p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">
Your query is important to our Deemsysinc Team. Our support team will contact you in a short while. <br>  </p>
<p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">
We appreciate your patience, & please keep this email for future reference.<br>  </p>
<p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">
Meanwhile, you may check our products and support us:<br></p>
<p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">
<b>1.DeemGPS:</b> <a href="http://www.deemgpstracker.com" target="_blank">http://www.deemgpstracker.com</a><br><b>2.Learnguild:</b> <a href="http://www.learnguild.com" target="_blank">http://www.learnguild.com</a></p>
  <p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">Follow us on Our Facebook Page <a href="https://www.facebook.com/pages/Deemsys-Software-Solution-Provider/222802487893459" target="new">https://www.facebook.com/Deemsys Inc</a>
</p><p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">
Best Regards<br>Support Team,<br>Deemsys Inc<br>  </p>

</td></tr>

</table>
</body>';
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";


//Second mail
$mail1 = new PHPMailer();
$mail1->SMTPDebug=1;
$mail1->IsSMTP();                                      // set mailer to use SMTP
$mail1->Host = "server.deemsysinc.com";  // specify main and backup server
$mail1->SMTPAuth = true;     // turn on SMTP authentication
$mail1->Username = "info@deemsysinc.com";  // SMTP username
$mail1->Password = "deemsys@123"; // SMTP password
$mail1->Port=587;
$mail1->From = "info@deemsysinc.com";
$mail1->FromName="Deemsys Inc";
$mail1->AddAddress("info@deemsysinc.com","Deemsys");


$mail1->WordWrap = 50;        // add attachments
$mail1->IsHTML(true);                                  // set email format to HTML
$mail1->Subject = "Welcome to DeemSys!";
$mail1->Body    = '<body>
<table width="650" border="0" cellspacing="0" cellpadding="0" align="center" style="padding:10px; border: rgb(241, 250, 252) 1px solid;">
  <tr>
    <td align="left" valign="top" style="padding:10px; border-bottom: rgb(153, 153, 153) 5px solid; ">
<img width="200px" height:"100px" src="http://i1153.photobucket.com/albums/p512/lms_images/deemsyslogo_zps0b0dd665.png"  alt="Deemsys" /></td>
  </tr>
  <tr valign="top"><td align="left" style="background-color: rgb(241, 250, 252); padding:20px;">
<p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">
First Name  : '.$firstname.' </p>
<p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">
Last Name  : '.$lastname.' </p>
 <p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">
Email  : '.$username.' </p>
<p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">
Message: '.$message.' </p>
<p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">
Address: '.$address.' </p>
  </td></tr>

  <tr><td align="left" valign="top" style="background-color: rgb(241, 250, 252); padding:5px 20px 15px 20px;">
 
</td></tr>

</table>
</body>';
$mail1->AltBody = "This is the body in plain text for non-HTML mail clients";


if(!$mail->Send())
{
    echo "Message could not be sent. <p>";
    echo "Mailer Error: " . $mail->ErrorInfo;
 
    exit;
}
if(!$mail1->Send())
{
    echo "Message could not be sent. <p>";
    echo "Mailer Error: " . $mail->ErrorInfo;
 
    exit;
}



}
else
{
    echo 'update not success';
}
$_SESSION['thanks']="Thanks for contacting us!";
header("Location:../index.php#contact");

?>
