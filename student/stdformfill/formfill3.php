<?php
session_start();
?>
<?php
$con=mysqli_connect("localhost","root","","try");
$sem = $_SESSION['sem'];
$reg=$_SESSION['reg'];
$otp=$_SESSION['otp'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body style="background-image:url(../../srcimgs/mobile.jpg);background-repeat:no-repeat;background-size:2000px 3000px;">
    <div class="container" >
      <div class="row">
        <div class="col-sm-1">

        </div>
        <div class="col-xs-12 col-sm-10">
      <br>
      <img class="img-responsive " src="../../srcimgs/banner.png" style="height:120px;width:900px;">
    </div>
    <div class="col-sm-1 col-xs-12">
    </div>
    </div>
    </div>
    <br>
    <nav class="navbar navbar-inverse container">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Examination Form Fill-Up</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <?php
          echo $otp;
     $stdtl="select * from regno_dcl where reg_no = '{$reg}'";
     $query=mysqli_query($con,$stdtl);
     $fetch=mysqli_fetch_array($query);
     $encrypted=substr($fetch[7],0,4);
     $emshow=$encrypted."*****@gmail.com";
     $number=$fetch[6];
     $encrypted2=substr((string)$fetch[6],0,4);
     $encrypted3=substr((string)$fetch[6],7,10);
     $numshow=$encrypted2."****".$encrypted3;
     echo "<div>
     <h3 align='center'>$fetch[1] an OTP is send to your registerd Mobile Number and Registered Email<br>
     Email : $emshow<br>
     Number :$numshow</h3>
     <form align='center'>
     <table style='height:50%;width:60%;' align='center'>

     <tr>
     <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </td>
     <td>
     <label style='font-size:20px;'><b>Enter your OTP here</b></label>&nbsp;
     <input type='text' id='otpval' name='t1' placeholder='  Enter OTP' style='border:none;width:150px;height:30px;border-radius:8px;' required>
     <input type='button' value='Verify' onclick='check()' style='border:none;width:100px;height:30px;border-radius:8px;'>
     </td>
     <td>
     </td>
     </tr>
     </table>
     </form>
     </div>
     <script>
     function check()
     {
       var otp=$otp;
       var otps=parseInt(document.getElementById('otpval').value);
       if(otp==otps)
       {
         window.location.href='formfill1.php';
       }
       else {
         window.alert('wrong otp');
       }
     }</script>";
     ?>
        </div>
      </div>
    </div>
  </body>
  </html>
