<?php
session_start();
$con=mysqli_connect("localhost","root","","try");
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
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <?php
$reg=$_SESSION['reg'];
$sem=$_SESSION['sem'];
$amt=$_SESSION['amt'];
include 'instamojo/instamojo.php';
$api = new Instamojo\Instamojo('test_8bffa01d4746d1af721c7e1c974', 'test_999901739feffa9fe2a2c5b736c'
, 'https://test.instamojo.com/api/1.1/');
$payid=$_GET['payment_request_id'];
try {
  $response = $api->paymentRequestStatus($payid);

} catch (Exception $e) {
print("Error: ".$e->getMessage());
}
$tid1=$response['payments'][0]['payment_id'];
$tdata="UPDATE  admit_form_data SET tid = '$tid1'  WHERE   reg_no = $reg";
$sql1=mysqli_query($con,$tdata);
$tdata1="UPDATE  admit_form_data SET amount = '$amt'   WHERE   reg_no = $reg";
$sql1=mysqli_query($con,$tdata1);
 $sqll="select * from admit_form_data where reg_no = {$reg}";
 $query=mysqli_query($con,$sqll);
 $fetch=mysqli_fetch_array($query);
 $sqlll="SELECT student_photo from regno_dcl where reg_no=$reg";
 $queryyy=mysqli_query($con,$sqlll);
 $fetch2=mysqli_fetch_array($queryyy);
 if($fetch[2]=='First')
 {
echo "
<div align='center'>
<form >
<table style='width:90%;text-align:left;' class='table' cellspacing='4px'>
<tr>
<td colspan='2'><div align='center'><img src='../../srcimgs/banner.png' style='height:80%;width:90%;'></div></td>
</tr>
<tr>
<td><lable>REGISTRATION NO<lable></td>
<td><lable>SEMESTER</lable></td>
</tr>
<tr>
<td style='height:30px;width:300px;border-radius:5px;border:1px solid black;'>$fetch[0]</td>
<td style='height:30px;width:300px;border-radius:5px;border:1px solid black;'>$fetch[2]</td>
</tr>
<tr>
<td><lable>STUDENT NAME</lable></td>
<td rowspan='4'><img src='../../upload/$fetch2[0]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[1]</td>
</tr>
<tr>
<td><lable>FATHERS NAME</lable></td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[4]</td>
</tr>
<tr>
<td><lable>COLLEGE NAME<lable></td>
<td><lable>BRANCH NAME</lable></td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[5]</td>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[3]</td>
</tr>
<tr>
<td><lable>Payments ID<lable></td>
<td><lable>AMOUNT</lable></td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[24]</td>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[25]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1' checked>$fetch[6]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1' checked>$fetch[7]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1' checked>$fetch[8]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1' checked>$fetch[9]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1' checked>$fetch[10]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1' checked>$fetch[11]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1' checked>$fetch[12]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1' checked>$fetch[13]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1' checked>$fetch[18]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1' checked>$fetch[19]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1' checked>$fetch[20]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1' checked>$fetch[21]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='width:100%;height:30px;;border-radius:5px;border:none;'> SEMESTER FORM SUBMITTED SUCCESSFULLY</h3></td>
</tr>
<tr>
<td><lable>STUDENT SIGNATURE<lable></td>
</tr>
<tr>
<td colspan='2' style='height:30px;border-radius:5px;border:1px solid black;'></td>
</tr>
<tr>
<td><input type='button' value='Print' id='hel' onclick='printt()'></td>
<td><input type='button' value='home' id='hel1' onclick='ret()'></td>
</tr>
</table>
</div>
<script>function printt(){
  document.getElementById('hel').style.display='none';
  document.getElementById('hel1').style.display='none';
  window.print();
  document.getElementById('hel').style.display='block';
  document.getElementById('hel1').style.display='block';
}
function ret(){
  window.location.href='../../index.html';
}
</script>
";
}
 ?>
        </div>
      </div>
    </div>
  </body>
  </html>
