<?php
session_start();
?>
 <?php
 $otpnum=$_SESSION['otp'];
 $reg=$_SESSION['reg'];
 $name=$_SESSION['name'];
 $sem=$_SESSION['sem'];
 $email=$_SESSION['email'];
 $num=$_SESSION['num'];
 ?>
 <?php
// Authorisation details.
$username = "tanweer6917@gmail.com";
$hash = "e9bb02db7da4adfbc1c9d7433126d12c48a76e0c36d8a7b1e3d2b7dc165cf83d";

// Config variables. Consult http://api.textlocal.in/docs for more info.
$test = "0";

// Data for text message. This is the text message data.
$sender = "TXTLCL"; // This is who the message appears to be from.
$numbers = $num; // A single number or a comma-seperated list of numbers
$message = "Dear $name,
Your OTP For form Registration is $otpnum Regardes, Techno Board Portal";
// 612 chars or less
// A single number or a comma-seperated list of numbers
$message = urlencode($message);
$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
$ch = curl_init('http://api.textlocal.in/send/?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // This is the result from the API
curl_close($ch);
?>
   <?php
   use PHPMailer\PHPMailer\PHPMailer;
     require_once "PHPMailer/PHPMailer.php";
     require_once "PHPMailer/SMTP.php";
     require_once "PHPMailer/Exception.php";
     $mail =new PHPMailer();
     $mail->isSMTP();
     $mail->Host = "smtp.gmail.com";
     $mail->SMTPAuth = true;
     $mail->Username ="noreplytechnoportal@gmail.com";
     $mail->Password ="**********";
     $mail->Port =465;
     $mail->SMTPSecure ="ssl";
     $mail->isHTML();
     $mail->setFrom('noreplytechoportal@gmail.org','Techno Board Portal');
     $mail->addAddress("$email");
     $mail->Subject ="Form Fill Up OTP";
     $mail->Body ="Dear $name,<br>
     Your OTP For form fillup is $otpnum <br> Regardes,<br> Techno Board Portal";
     if($mail->send())
     {
    echo "<script>window.alert('OTP send');window.location.href='formfill3.php';</script>";
     }
    ?>
