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
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body style="background-image:url(../srcimgs/mobile.jpg);background-repeat:no-repeat;background-size:2000px 3000px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
    <?php
session_start();
$con=mysqli_connect("localhost","root","","try");
$adno=$_SESSION['uid'];
$ddate = date("Y-m-d");
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
$tdata="UPDATE student_reg_dtl SET tdate = '$ddate'  WHERE   adhar_no = $adno";
$sql1=mysqli_query($con,$tdata);
$tdata1="UPDATE student_reg_dtl SET tid = '$tid1'   WHERE   adhar_no = $adno";
$sql1=mysqli_query($con,$tdata1);
$query="select * from student_reg_dtl where adhar_no = '$adno'";
$sql=mysqli_query($con,$query);
$fetch=mysqli_fetch_array($sql);
$msg='Thank you'.$fetch[1].' You are Successfully Registered your Aadhar Number is '.$fetch[0];
$code = '<img style="height:140px;width:140px;" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.$msg.'" title="Link to Google.com">';
echo "
<table align='center' cellspacing='4'>
<tr>
<th colspan='2'><img src='../../srcimgs/banner.png' style='width:100%;height:100%;'><br><br></th>
</tr>
<tr>
<td rowspan='6'><img src='../../upload/$fetch[22]' style='height:120px;width:100px;'>$code<br></td>
<td>Aadhar Number</td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[0]</td>
</tr>
<tr>
<td><br>Student Name</td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[1]</td>
</tr>
<tr>
<td>
<br>Date Of Birth
</td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[2]</td>
</tr>
<tr>
<td><br>Gender</td>
<td><br>Category</td>
</tr>
<tr>
<td style='height:30px;width:450px;border-radius:5px;border:1px solid black;'>$fetch[3]</td>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[4]</td>
</tr>
<td><br>Father's Name</td>
<td><br>Mothers Name</td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[5]</td>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[6]</td>
</tr>
<td><br>Mobile Number</td>
<td><br>Email ID</td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[7]</td>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[8]</td>
</tr>
<td><br>Permanent Address & Pin Code</td>
<td><br>Present Address & Pin Code</td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[9]-$fetch[11]</td>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[10]-$fetch[12]</td>
</tr>
<td><br>Institution Name</td>
<td><br>Branch Name</td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[13]</td>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[14]</td>
</tr>
<td><br>Counselling Type</td>
<td><br>Admission Type</td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[16]</td>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[17]</td>
</tr>
<td><br>Nature Of Seat</td>
<td><br>Admission Date</td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[18]</td>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[19]</td>
</tr>
<td><br>Matric Passing Year</td>
<td><br>Percentage</td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[20]</td>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[21]</td>
</tr>
<tr>
<td><br>Payment Date</td>
<td><br>Transection Id</td>
</tr>
<tr>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[23]</td>
<td style='height:30px;border-radius:5px;border:1px solid black;'>$fetch[24]</td>
</tr>
<tr>
<th colspan='2'><br>Registration Form Submitted Successfully</th>
</tr>
<tr>
<td colspan='2'>Student Signature</td>
</tr>
<tr>
<td colspan='2' style='height:30px;border-radius:5px;border:1px solid black;'></td>
</tr>
<tr>
<td><input type='button' value='Print' id='hel' onclick='printt()'></td>
<td><input type='button' value='home' id='hel1' onclick='ret()'></td>
</tr>
</table>
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
</script>";

 ?>
</div>
</div>
</div>
  </body>
  </html>
