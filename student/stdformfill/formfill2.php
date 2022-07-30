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
  <body>
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
$sqlll="SELECT student_photo,sem,branch,name from regno_dcl where reg_no=$reg";
$queryyy=mysqli_query($con,$sqlll);
$fetch2=mysqli_fetch_array($queryyy);
$msg="Thank you'.$fetch2[3].' Your form is Successfully filled. and your transection id is ".$tid1;
$code = '<img style="height:140px;width:140px;" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.$msg.'" title="Link to Google.com">';
 if($fetch2[1]=='First')
 {
   $tdata="UPDATE  admit_data_sem1 SET tid = '$tid1'  WHERE   reg_no = $reg";
   $sql1=mysqli_query($con,$tdata);
   $tdata1="UPDATE  admit_data_sem1 SET amount = '$amt'   WHERE   reg_no = $reg";
   $sql1=mysqli_query($con,$tdata1);
    $sqll="select * from admit_data_sem1 where reg_no = {$reg}";
    $query=mysqli_query($con,$sqll);
    $fetch=mysqli_fetch_array($query);

echo "
<div align='center'>
<form >
<table style='width:90%;text-align:left;' class='table' cellspacing='4px'>
<tr>
<td colspan='2'><div align='center'><img src='../../srcimgs/banner.png' style='height:80%;width:90%;'>$code</div></td>
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
else if($fetch2[1]=='Second')
{
  $tdata="UPDATE  admit_data_sem2 SET tid = '$tid1'  WHERE   reg_no = $reg";
  $sql1=mysqli_query($con,$tdata);
  $tdata1="UPDATE  admit_data_sem2 SET amount = '$amt'   WHERE   reg_no = $reg";
  $sql1=mysqli_query($con,$tdata1);
   $sqll="select * from admit_data_sem2 where reg_no = {$reg}";
   $query=mysqli_query($con,$sqll);
   $fetch=mysqli_fetch_array($query);
   echo "
       <div align='center'>
       <form >
       <table style='width:90%;text-align:left;' class='table' cellspacing='4px'>
       <tr>
       <td colspan='2'><div align='center'><img src='../../srcimgs/banner.png' style='height:80%;width:90%;'>$code</div></td>
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
else if($fetch2[1]=='Third')
{
  if($fetch2[2]=='Automobile Engineering')
  {
  $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
  $sql1=mysqli_query($con,$tdata);
  $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
  $sql1=mysqli_query($con,$tdata1);
   $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
   $query=mysqli_query($con,$sqll);
   $fetch=mysqli_fetch_array($query);
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
            <td rowspan='4'><img src='../../upload/$fetch2[0]' style='height:130px;width:120px;PADDING-LEFT:10PX;'>&nbsp;&nbsp;$code</td>
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
            <td colspan='2'><input type='checkbox' name='sub1t' value='[301]ENGG MATH-III' checked> $fetch[6]</td>
            </tr>
            <tr>
            <td colspan='2'><input type='checkbox' name='sub2t' value='[AUT303]Automobile Engines' checked> $fetch[7]</td>
            </tr>
            <tr>
            <td colspan='2'><input type='checkbox' name='sub3t' value='[MEC304]Engineering Material' checked> $fetch[8]</td>
            </tr>
            <tr>
            <td colspan='2'><input type='checkbox' name='sub4t' value='[MEC305]Engineering Mechanics' checked> $fetch[9]</td>
            </tr>
            <tr>
            <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC306]Strength of Materials' checked> $fetch[10]</td>
            </tr>
            </tr>
            <tr>
            <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
            </tr>
            <tr>
            <td colspan='2'><input type='checkbox' name='sub1p' value='[AUT304]Automobile Engines Lab ' checked> $fetch[12]</td>
            </tr>
            <tr>
            <td colspan='2'><input type='checkbox' name='sub2p' value='[MEC308]Engineering Mechanics Lab' checked> $fetch[13]</td>
            </tr>
            <tr>
            <td colspan='2'><input type='checkbox' name='sub3p' value='[MEC309]Strength of Meterials Lab' checked> $fetch[14]</td>
            </tr>
            <tr>
            <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
            </tr>
            <tr>
            <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
            </tr>
            <tr>
            <td colspan='2'><input type='checkbox' name='sub1s' value='[309]ENGINEERING GRAPHICS-II'  checked> $fetch[18]</td>
            </tr>
            <tr>
            <td colspan='2'><input type='checkbox' name='sub2s' value='[302]DEVELOPMENT OF LIFE SKILLS-I'  checked> $fetch[19]</td>
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
    else if($fetch2[2]=='Civil Engineering')
    {
      $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
      $sql1=mysqli_query($con,$tdata);
      $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
      $sql1=mysqli_query($con,$tdata1);
       $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
       $query=mysqli_query($con,$sqll);
       $fetch=mysqli_fetch_array($query);
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
                <td colspan='2'><input type='checkbox' name='sub1t' value='[301]ENGG MATH-III'  checked>$fetch[6]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2t' value='[CIV306]BUILDING DRAWING (AUTOCAD)'  checked>$fetch[7]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub3t' value='[CIV304]BUILDING MATERIALS'  checked>$fetch[8]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub4t' value='[MEC306]Strength of Materials'  checked>$fetch[9]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC303]SURVEYING'  checked> $fetch[10]</td>
                </tr>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub1p' value='[CIV308]Strength of Meterials Lab '  checked> $fetch[12]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2p' value='[CIV307]Surveying Lab'  checked> $fetch[13]</td>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub1s' value='[309]ENGINEERING GRAPHICS-II'  checked>$fetch[18]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2s' value='[302]DEVELOPMENT OF LIFE SKILLS-I'  checked>$fetch[19]</td>
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
    else if($fetch2[2]=='Computer Science Engineering')
    {
      $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
      $sql1=mysqli_query($con,$tdata);
      $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
      $sql1=mysqli_query($con,$tdata1);
       $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
       $query=mysqli_query($con,$sqll);
       $fetch=mysqli_fetch_array($query);
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
                <td colspan='2'><input type='checkbox' name='sub1t' value='[301]ENGG MATH-III'  checked>$fetch[6]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2t' value='[ECE303]ELECTRONICS DEVICES AND CIRCUITS' checked>$fetch[7]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub3t' value='[ECE304]ELECTRICAL TECHNOLOGY' checked>$fetch[8]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub4t' value='[CSE303]OBJECT ORIENTED PROGRAMMING' checked>$fetch[9]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub5t' value='[CSE304]WEB TECHNOLOGY' checked>$fetch[10]</td>
                </tr>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub1p' value='[ECE307]ELECTRONICS DEVICES AND CIRCUITS LAB ' checked>$fetch[12]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2p' value='[ECE308]ELECTRICAL TECHNOLOGY LAB' checked>$fetch[13]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub3p' value='[CSE305]OBJECT ORIENTED PROGRAMMING' checked>$fetch[14]</td>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub1s' value='[CSE306]WEB TECHNOLOGY' checked>$fetch[18]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2s' value='[302]DEVELOPMENT OF LIFE SKILLS-I' checked>$fetch[19]</td>
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
    else if($fetch2[2]=='Electrical Engineering')
    {
      $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
      $sql1=mysqli_query($con,$tdata);
      $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
      $sql1=mysqli_query($con,$tdata1);
       $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
       $query=mysqli_query($con,$sqll);
       $fetch=mysqli_fetch_array($query);
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
                <td colspan='2'><input type='checkbox' name='sub1t' value='[301]ENGG MATH-III' checked>$fetch[6]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2t' value='[ELE305]Basic Engineering (Civil & Mechanical)' checked>$fetch[7]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub3t' value='[ELE303]Electrical Engineering' checked>$fetch[8]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub4t' value='[ELE306]Electronics Engineering' checked>$fetch[9]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub5t' value='[ELE304]Measurement' checked>$fetch[10]</td>
                </tr>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub1p' value='[ELE310]Basic Engineering Lab (Civil & Mechanical)'  checked>$fetch[12]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2p' value='[ELE310]Electrical Engineering Lab'  checked>$fetch[13]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub3p' value='[ELE309]Electronics Lab'  checked>$fetch[14]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub3p' value='[ELE308]Measurement Lab'  checked>$fetch[15]</td>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub1s' value='[309]ENGINEERING GRAPHICS-II'  checked>$fetch[18]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2s' value='[302]DEVELOPMENT OF LIFE SKILLS-I' checked>$fetch1[19]</td>
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
    else if($fetch2[2]=='Electronics And Communication Engineering')
    {
      $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
      $sql1=mysqli_query($con,$tdata);
      $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
      $sql1=mysqli_query($con,$tdata1);
       $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
       $query=mysqli_query($con,$sqll);
       $fetch=mysqli_fetch_array($query);
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
                <td colspan='2'><input type='checkbox' name='sub1t' value='[301]ENGG MATH-III'  checked> $fetch[6]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2t' value='[ECE305]Elect & Electronic Measurement'  checked> $fetch[7]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub3t' value='[ECE304]ELECTRICAL TECHNOLOGY' checked> $fetch[8]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub4t' value='[ECE306]Electromagnetic Field Theory' checked> $fetch[9]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE303]ELECTRONICS DEVICES AND CIRCUITS' checked> $fetch[10]</td>
                </tr>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub1p' value='[ECE309]Elect & Electronic Measurement Lab' checked> $fetch[12]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2p' value='ECE308]Electrical Technology Laboratory' checked> $fetch[13]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub3p' value='[ECE310]Electromagnetic Field Theory Lab' checked> $fetch[14]</td>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub1s' value='[ECE307]Electronic Devices and Circuts' checked> $fetch[18]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2s' value='[302]DEVELOPMENT OF LIFE SKILLS-I' checked> $fetch[19]</td>
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
    else if($fetch2[2]=='Mechanical Engineering')
    {
      $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
      $sql1=mysqli_query($con,$tdata);
      $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
      $sql1=mysqli_query($con,$tdata1);
       $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
       $query=mysqli_query($con,$sqll);
       $fetch=mysqli_fetch_array($query);
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
                <td colspan='2'><input type='checkbox' name='sub1t' value='[301]ENGG MATH-III' checked>$fetch1[3]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2t' value='[MEC304]Engineering Material' checked>$fetch1[4]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub3t' value='[MEC305]Engineering Mechanics' checked>$fetch1[5]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub4t' value='[MEC306]Strength of Materials' checked>$fetch1[6]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC303]Machine Drawing' checked>$fetch1[7]</td>
                </tr>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub1p' value='[MEC308]Engineering Mechanics Lab' checked>$fetch1[13]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2p' value='[MEC309]Strength of Meterials Lab' checked>$fetch1[14]</td>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub1s' value='[MEC307]Machine Drawing Lab' checked>$fetch1[20]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2s' value='302]DEVELOPMENT OF LIFE SKILLS-I' checked>$fetch1[21]</td>
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
  }
  else if($fetch2[1]=='Fourth')
  {
    if($fetch2[2]=='Automobile Engineering')
    {
    $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
    $sql1=mysqli_query($con,$tdata);
    $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
    $sql1=mysqli_query($con,$tdata1);
     $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
     $query=mysqli_query($con,$sqll);
     $fetch=mysqli_fetch_array($query);
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
              <td colspan='2'><input type='checkbox' name='sub1t' value='[AUT402]Automotive Manufacturing Process' checked>$fetch1[3]</td>
              </tr>
              <tr>
              <td colspan='2'><input type='checkbox' name='sub2t' value='[AUT403]Auto Engineering Drawing' checked>$fetch1[4]</td>
              </tr>
              <tr>
              <td colspan='2'><input type='checkbox' name='sub3t' value='[MEC404]Thermal Engineering' checked>$fetch1[5]</td>
              </tr>
              <tr>
              <td colspan='2'><input type='checkbox' name='sub4t' value='[MEC405]Theory of Machine' checked>$fetch1[6]</td>
              </tr>
              <tr>
              <td colspan='2'><input type='checkbox' name='sub5t' value='[AUT404]Automobile Transmission System' checked>$fetch1[7]</td>
              </tr>
              </tr>
              <tr>
              <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
              </tr>
              <tr>
              <td colspan='2'><input type='checkbox' name='sub1p' value='[AUT405]Automotive Manufacturing Process Lab' checked>$fetch1[13]</td>
              </tr>
              <tr>
              <td colspan='2'><input type='checkbox' name='sub2p' value='[MEC409]Theory of Machine Lab' checked>$fetch1[14]</td>
              </tr>
              <tr>
              <td colspan='2'><input type='checkbox' name='sub3p' value='[MEC410]Thermal Engineering Lab' checked>$fetch1[15]</td>
              </tr>
              <tr>
              <td colspan='2'><input type='checkbox' name='sub4p' value='[AUT407]Auto transmission System Lab' checked>$fetch1[16]</td>
              </tr>
              <tr>
              <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
              </tr>
              <tr>
              <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
              </tr>
              <tr>
              <td colspan='2'><input type='checkbox' name='sub1s' value='[AUT406]Auto Engineering Drawing lab' checked>$fetch1[20]</td>
              </tr>
              <tr>
              <td colspan='2'><input type='checkbox' name='sub2s' value='[401]Professional Practice II' checked>$fetch1[21]</td>
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
      else if($fetch2[2]=='Civil Engineering')
      {
        $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
        $sql1=mysqli_query($con,$tdata);
        $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
        $sql1=mysqli_query($con,$tdata1);
         $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
         $query=mysqli_query($con,$sqll);
         $fetch=mysqli_fetch_array($query);
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
                  <td colspan='2'><input type='checkbox' name='sub1t' value='[CIV 402]Construction Technology' checked>$fetch1[3]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2t' value='[CIV 403]Geo Technical Engineering' checked>$fetch1[4]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub3t' value='[CIV 404]Hydraulics' checked>$fetch1[5]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub4t' value='[CIV405]Theory of Structure' checked>$fetch1[6]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub5t' value='[CIV406]Transportation Engineering' checked>$fetch1[7]</td>
                  </tr>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub1p' value='[CIV 408]Geo Technical Engineering Lab ' checked>$fetch1[13]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2p' value='[CIV 409]Hydraulics Lab' checked>$fetch1[14]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub3p' value='[CIV410]Transportation Lab' checked>$fetch1[15]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub1s' value='[CIV 407]Construction Technology Lab' checked>$fetch1[20]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2s' value='[410]PROFESSIONAL PRACTICES-2' checked>$fetch1[21]</td>
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
      else if($fetch2[2]=='Computer Science Engineering')
      {
        $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
        $sql1=mysqli_query($con,$tdata);
        $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
        $sql1=mysqli_query($con,$tdata1);
         $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
         $query=mysqli_query($con,$sqll);
         $fetch=mysqli_fetch_array($query);
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
                  <td colspan='2'><input type='checkbox' name='sub1t' value='[CSE402]DATA STRUCTURE AND ALGORITHM' checked>$fetch1[3]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2t' value='[ECE]COMPUTER HARDWARE & PERIPHERAL' checked>$fetch1[4]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub3t' value='[CSE403]OPERATING SYSTEM' checked>$fetch1[5]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub4t' value='[ECE405]DATA COMMUNICATION & COMPUTER NETWORKING' checked>$fetch1[6]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub5t' value='[CSE404]DATABASE MANAGEMENT SYSTEM' checked>$fetch1[7]</td>
                  </tr>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub1p' value='[CSE407]DATABASE MANAGEMENT SYSTEM LAB' checked>$fetch1[13]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2p' value='[CSE407]DATA STRUCTURE AND ALGORITHM' checked>$fetch1[14]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub1s' value='[CSE409]COMPUTER WORKSHOP' checked>$fetch1[20]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2s' value='[ECE409]DATA COMMUNICATION & COMPUTER NETWORKING' checked>$fetch1[21]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub3s' value='[CSE410]OPERATING SYSTEM' checked>$fetch1[22]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub4s' value='[410]PROFESSIONAL PRACTICES-2' checked>$fetch1[23]</td>
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
      else if($fetch2[2]=='Electrical Engineering')
      {
        $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
        $sql1=mysqli_query($con,$tdata);
        $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
        $sql1=mysqli_query($con,$tdata1);
         $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
         $query=mysqli_query($con,$sqll);
         $fetch=mysqli_fetch_array($query);
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
                  <td colspan='2'><input type='checkbox' name='sub1t' value='[ELE402]Network Theory' checked>$fetch1[3]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2t' value='[ELE403]Electrical Machine I' checked>$fetch1[4]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub3t' value='[ELE404]Digital Circuits & Microprocessor' checked>$fetch1[5]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub4t' value='[ELE405]Elect Estimation & Costing' checked>$fetch1[6]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub5t' value='[ELE406]Power System I' checked>$fetch1[7]</td>
                  </tr>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub1p' value='[ELE407]Network Theory Lab' checked>$fetch1[13]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2p' value='[ELE408]Electrical Machine I Lab' checked>$fetch1[14]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub3p' value='[ELE408]Electrical Machine I Lab' checked>$fetch1[15]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub1s' value='[ELE410]Electrical Workshop' checked>$fetch1[20]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2s' value='[410]PROFESSIONAL PRACTICES-2' checked>$fetch1[21]</td>
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
      else if($fetch2[2]=='Electronics And Communication Engineering')
      {
        $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
        $sql1=mysqli_query($con,$tdata);
        $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
        $sql1=mysqli_query($con,$tdata1);
         $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
         $query=mysqli_query($con,$sqll);
         $fetch=mysqli_fetch_array($query);
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
                  <td colspan='2'><input type='checkbox' name='sub1t' value='[ECE 402]Digital Technology & Microprocessor' checked>$fetch1[3]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2t' value='[ECE]COMPUTER HARDWARE & PERIPHERAL' checked>$fetch1[4]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub3t' value='[ECE404]Communication System' checked>$fetch1[5]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub4t' value='[ECE405]DATA COMMUNICATION & COMPUTER NETWORKING'  checked>$fetch1[6]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE406]Control System' checked>$fetch1[7]</td>
                  </tr>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub1p' value='[ECE407]Digital & Microprocessor Lab' checked>$fetch1[13]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2p' value='[ECE408]Communication System Lab' checked>$fetch1[14]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub3p' value='[ECE409]Control System Lab' checked>$fetch1[15]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub1s' value='[ECE410]Computer Networking Lab' checked>$fetch1[20]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2s' value='[ECE411]Electronic Workshop' checked>$fetch1[21]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub3s' value='[410]PROFESSIONAL PRACTICES-2' checked>$fetch1[22]</td>
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
      else if($fetch2[2]=='Mechanical Engineering')
      {
        $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
        $sql1=mysqli_query($con,$tdata);
        $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
        $sql1=mysqli_query($con,$tdata1);
         $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
         $query=mysqli_query($con,$sqll);
         $fetch=mysqli_fetch_array($query);
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
                  <td colspan='2'><input type='checkbox' name='sub1t' value='[MEC402]Manufacturing Technology' checked>$fetch1[3]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2t' value='[MEC403]Fluid Mechanics & Machine' checked>$fetch1[4]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub3t' value='[MEC404]Thermal Engineering' checked>$fetch1[5]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub4t' value='[MEC405]Theory of Machine' checked>$fetch1[6]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC406]Electrical Engineering' checked>$fetch1[7]</td>
                  </tr>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub1p' value='[MEC407]Manufacturing Technology' checked>$fetch1[13]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2p' value='[MEC408]Fluid Mechanics & Machine' checked>$fetch1[14]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub3p' value='[MEC409]Thermal Engineering' checked>$fetch1[15]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub4p' value='[MEC410]Theory of Machine' checked>$fetch1[16]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub5p' value='[MEC411]Electrical Engineering' checked>$fetch1[17]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub1s' value='[410]PROFESSIONAL PRACTICES-2' checked>$fetch1[20]</td>
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
    }
    else if($fetch2[1]=='Fifth')
    {
      if($fetch2[2]=='Automobile Engineering')
      {
      $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
      $sql1=mysqli_query($con,$tdata);
      $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
      $sql1=mysqli_query($con,$tdata1);
       $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
       $query=mysqli_query($con,$sqll);
       $fetch=mysqli_fetch_array($query);
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
                <td colspan='2'><input type='checkbox' name='sub1t' value='[AUT 503]Transport Rules, Legislation & Act' checked>$fetch1[3]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2t' value='[AUT 504]Advance Automobile Engineering' checked>$fetch1[4]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub3t' value='[AUT 505]Electrical & Electronics Engineering' checked>$fetch1[5]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub4t' value='[AUT 506]Hydraulics & Pneumatics' checked>$fetch1[6]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub5t' value='[AUT 507]Environment Pollution Control' checked>$fetch1[7]</td>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub1p' value='[AUT 508]Adv. Automobile Engineering Lab' checked>$fetch1[9]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2p' value='[AUT 509]Electrical & Electronics Engineering Lab' checked>$fetch1[10]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub3p' value='[AUT 510]Hydraulics & Pneumatics Lab' checked>$fetch1[11]</td>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub1s' value='[AUT 511/MEC517/MEC518]Elective-I Lab' checked>$fetch1[15]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub2s' value='[502]In Plant Training' checked>$fetch1[16]</td>
                </tr>
                <tr>
                <td colspan='2'><input type='checkbox' name='sub3s' value='[501]DLS' checked>$fetch1[17]</td>
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
        else if($fetch2[2]=='Civil Engineering')
        {
          $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
          $sql1=mysqli_query($con,$tdata);
          $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
          $sql1=mysqli_query($con,$tdata1);
           $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
           $query=mysqli_query($con,$sqll);
           $fetch=mysqli_fetch_array($query);
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
                    <td colspan='2'><input type='checkbox' name='sub1t' value='[CIV 503]Irrigation Engineering' checked>$fetch1[3]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2t' value='[CIV 504]RCC Design' checked>$fetch1[4]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub3t' value='[CIV 505]Adv Surveying' checked>$fetch1[5]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub4t' value='[CIV506]Environmental Engineering' checked>$fetch1[6]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub5t' value='[CIV507]Traffic Management' checked>$fetch1[7]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub1p' value='[CIV509]Environmental Engg Lab' checked>$fetch1[9]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2p' value='[CIV 510]Adv. Surveying Lab' checked>$fetch1[10]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub1s' value='[CIV 511]RCC Design Lab' checked>$fetch1[15]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2s' value='[CIV 512/513/AAA514]Elective-I Lab' checked>$fetch1[16]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub3s' value='[502]IN PLANT TRAINING' checked>$fetch1[17]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub4s' value='[501]DLS' checked>$fetch1[18]</td>
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
        else if($fetch2[2]=='Computer Science Engineering')
        {
          $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
          $sql1=mysqli_query($con,$tdata);
          $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
          $sql1=mysqli_query($con,$tdata1);
           $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
           $query=mysqli_query($con,$sqll);
           $fetch=mysqli_fetch_array($query);
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
                    <td colspan='2'><input type='checkbox' name='sub1t' value='[CSE508]MICROPROCESSOR AND MICROCONTROLLER' checked>$fetch1[3]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2t' value='[CSE504]JAVA PROGRAMMING' checked>$fetch1[4]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub3t' value='[CSE505]COMPUTER GRAPHICS' checked>$fetch1[5]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub4t' value='[CSE506]Mobile Computing' checked>$fetch1[6]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub5t' value='[CSE509]Artificial Intelligence' checked>$fetch1[7]</td>
                    </tr>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub1p' value='[CSE512]JAVA PROGRAMMING' checked>$fetch1[9]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2p' value='[CSE513]COMPUTER GRAPHICS' checked>$fetch1[10]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub1s' value='[CSE514/515/16]ELECTIVE I LAB' checked>$fetch1[15]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2s' value='[CSE517/518/519]ELECTIVE II LAB' checked>$fetch1[16]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub3s' value='[502]IN PLANT TRAINING'  checked>$fetch1[17]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub4s' value='[501]DLS' checked>$fetch1[18]</td>
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
        else if($fetch2[2]=='Electrical Engineering')
        {
          $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
          $sql1=mysqli_query($con,$tdata);
          $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
          $sql1=mysqli_query($con,$tdata1);
           $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
           $query=mysqli_query($con,$sqll);
           $fetch=mysqli_fetch_array($query);
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
                    <td colspan='2'><input type='checkbox' name='sub1t' value='[ELE 503]Power System II' checked>$fetch1[3]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2t' value='[ELE 504]Electrical Machines II' checked>$fetch1[4]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub3t' value='[ELE 505]Traction' checked>$fetch1[5]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub4t' value='[ELE 506]Illumination Engineering' checked>$fetch1[6]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub5t' value='[ELE507]Maintenance of Electrical Machines' checked>$fetch1[7]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub1p' value='[ELE 509]Electrical Machines II Lab' checked>$fetch1[9]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2p' value='[ELE 510]Power System Lab' checked>$fetch1[10]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub1s' value='[ELE 511/ELE 512/ELE 513]Elective I lab' checked>$fetch1[15]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2s' value='[ELE 514/ECE409/ECE512/ELE515]Elective II Lab' checked>$fetch1[16]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub3s' value='[502]IN PLANT TRAINING' checked>$fetch1[17]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub4s' value='[501]DLS' checked>$fetch1[18]</td>
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
        else if($fetch2[2]=='Electronics And Communication Engineering')
        {
          $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
          $sql1=mysqli_query($con,$tdata);
          $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
          $sql1=mysqli_query($con,$tdata1);
           $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
           $query=mysqli_query($con,$sqll);
           $fetch=mysqli_fetch_array($query);
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
                    <td colspan='2'><input type='checkbox' name='sub1t' value='[ECE 503]Instrumentation System' checked>$fetch1[3]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2t' value='[ECE 504]Power Electronics' checked>$fetch1[4]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub3t' value='[ECE 505]Programmable Logic Controller' checked>$fetch1[5]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub4t' value='[ECE 506]Embedded System' checked>$fetch1[6]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE509]Linear Integrated Circuits' checked>$fetch1[7]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub1p' value='[ECE 512]Instrumentation System Lab' checked>$fetch1[9]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2p' value='[ECE 513]Power Electronics Lab' checked>$fetch1[10]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub1s' value='[ECE 514/515/516]Elective I Lab' checked>$fetch1[15]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2s' value='[ECE 517/518/519]Elective II Lab' checked>$fetch1[16]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub3s' value='[502]IN PLANT TRAINING' checked>$fetch1[17]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub4s' value='[501]DLS' checked>$fetch1[18]</td>
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
        else if($fetch2[2]=='Mechanical Engineering')
        {
          $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
          $sql1=mysqli_query($con,$tdata);
          $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
          $sql1=mysqli_query($con,$tdata1);
           $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
           $query=mysqli_query($con,$sqll);
           $fetch=mysqli_fetch_array($query);
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
                    <td colspan='2'><input type='checkbox' name='sub1t' value='[MEC 503]Power Engineering' checked>$fetch1[3]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2t' value='[MEC 504]Adv. Manufacturing Technology' checked>$fetch1[4]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub3t' value='[MEC 505]Metrology & Quality Control' checked>$fetch1[5]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub4t' value='[MEC 506]Electronics Engineering' checked>$fetch1[6]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC 507]Power Plant Engineering' checked>$fetch1[7]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub1p' value='[MEC 511]Power Engineering Lab' checked>$fetch1[9]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2p' value='[MEC512]Adv.Manufacturing Tech. Lab' checked>$fetch1[10]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub1s' value='[MEC 513]Metrology & Quality Control Lab' checked>$fetch1[15]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub2s' value='[MEC 514]Electronics Engineering Lab' checked>$fetch1[16]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub3s' value='[MEC515/516/517/518]Elective-I Lab' checked>$fetch1[17]</td>
                    </tr>
                    <tr>
                    <td colspan='2'><input type='checkbox' name='sub4s' value='[502]IN PLANT TRAINING' checked>$fetch1[18]</td>
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
      }
      else if($fetch2[1]=='Sixth')
      {
        if($fetch2[2]=='Automobile Engineering')
        {
        $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
        $sql1=mysqli_query($con,$tdata);
        $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
        $sql1=mysqli_query($con,$tdata1);
         $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
         $query=mysqli_query($con,$sqll);
         $fetch=mysqli_fetch_array($query);
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
                  <td colspan='2'><input type='checkbox' name='sub1t' value='[601] Industrial Engineering & Management' checked>$fetch1[3]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2t' value='[AUT 604]Heavy Automotive Machineries' checked>$fetch1[4]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub3t' value='[AUT 605]Automotive Elect. & Electronics' checked>$fetch1[5]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub4t' value='[AUT 606]Aerodynamics & Design' checked>$fetch1[6]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC 607]Mechatronics' checked>$fetch1[7]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub1p' value='[AUT 609]Automotive Electrical & Electronics Lab' checked>$fetch1[9]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub4s' value='[603] Project Work' checked>$fetch1[18]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub1s' value='[AUT 610]Aerodynamics & Design Lab' checked>$fetch1[15]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub2s' value='[AUT 611]Heavy Automotive Machineries Lab' checked>$fetch1[16]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub3s' value='[MEC614/AUT612/ AUT613/MEC617]Elective II Lab' checked>$fetch1[17]</td>
                  </tr>
                  <tr>
                  <td colspan='2'><input type='checkbox' name='sub5s' value='[602] Professional Practices' checked>$fetch1[19]</td>
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
          else if($fetch2[2]=='Civil Engineering')
          {
            $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
            $sql1=mysqli_query($con,$tdata);
            $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
            $sql1=mysqli_query($con,$tdata1);
             $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
             $query=mysqli_query($con,$sqll);
             $fetch=mysqli_fetch_array($query);
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
                      <td colspan='2'><input type='checkbox' name='sub1t' value='[601] Industrial Engineering & Management' checked>$fetch1[3]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub2t' value='[CIV 604]Design of Steel Structure' checked>$fetch1[4]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub3t' value='[CIV 605]Estimating & Costing' checked>$fetch1[5]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub4t' value='[CIV 606]Contract & Account' checked>$fetch1[6]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub5t' value='[CIV607]Adv Structure' checked>$fetch1[7]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                      </tr>

                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub5s' value='[603] Project Work' checked>$fetch1[19]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub1s' value='[CIV 610]Design of Steel Structure Lab' checked>$fetch1[15]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub2s' value='[CIV611]Estimating & Costing Lab' checked>$fetch1[16]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub3s' value='[CIV612]Contract & Account Lab' checked>$fetch1[17]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub4s' value='[CIV 613/614/615]Elective II Lab' checked>$fetch1[18]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub6s' value='[602] Professional Practices' checked>$fetch1[20]</td>
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
          else if($fetch2[2]=='Computer Science Engineering')
          {
            $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
            $sql1=mysqli_query($con,$tdata);
            $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
            $sql1=mysqli_query($con,$tdata1);
             $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
             $query=mysqli_query($con,$sqll);
             $fetch=mysqli_fetch_array($query);
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
                      <td colspan='2'><input type='checkbox' name='sub1t' value='[601] Industrial Engineering & Management' checked>$fetch1[3]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub2t' value='[CIV 604]Design of Steel Structure' checked>$fetch1[4]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub3t' value='[CIV 605]Estimating & Costing' checked>$fetch1[5]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub4t' value='[CIV 606]Contract & Account' checked>$fetch1[6]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub5t' value='[CIV607]Adv Structure' checked>$fetch1[7]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                      </tr>

                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub5s' value='[603] Project Work' checked>$fetch1[19]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub1s' value='[CIV 610]Design of Steel Structure Lab' checked>$fetch1[15]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub2s' value='[CIV611]Estimating & Costing Lab' checked>$fetch1[16]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub3s' value='[CIV612]Contract & Account Lab' checked>$fetch1[17]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub4s' value='[CIV 613/614/615]Elective II Lab' checked>$fetch1[18]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub6s' value='[602] Professional Practices' checked>$fetch1[20]</td>
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
          else if($fetch2[2]=='Electrical Engineering')
          {
            $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
            $sql1=mysqli_query($con,$tdata);
            $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
            $sql1=mysqli_query($con,$tdata1);
             $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
             $query=mysqli_query($con,$sqll);
             $fetch=mysqli_fetch_array($query);
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
                      <td colspan='2'><input type='checkbox' name='sub1t' value='[601] Industrial Engineering & Management' checked>$fetch1[3]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub2t' value='[CIV 604]Design of Steel Structure' checked>$fetch1[4]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub3t' value='[CIV 605]Estimating & Costing' checked>$fetch1[5]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub4t' value='[CIV 606]Contract & Account' checked>$fetch1[6]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub5t' value='[CIV607]Adv Structure' checked>$fetch1[7]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                      </tr>

                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub5s' value='[603] Project Work' checked>$fetch1[19]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub1s' value='[CIV 610]Design of Steel Structure Lab' checked>$fetch1[15]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub2s' value='[CIV611]Estimating & Costing Lab' checked>$fetch1[16]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub3s' value='[CIV612]Contract & Account Lab' checked>$fetch1[17]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub4s' value='[CIV 613/614/615]Elective II Lab' checked>$fetch1[18]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub6s' value='[602] Professional Practices' checked>$fetch1[20]</td>
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
          else if($fetch2[2]=='Electronics And Communication Engineering')
          {
            $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
            $sql1=mysqli_query($con,$tdata);
            $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
            $sql1=mysqli_query($con,$tdata1);
             $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
             $query=mysqli_query($con,$sqll);
             $fetch=mysqli_fetch_array($query);
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
                      <td colspan='2'><input type='checkbox' name='sub1t' value='[601] Industrial Engineering & Management' checked>$fetch1[3]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub2t' value='[CIV 604]Design of Steel Structure' checked>$fetch1[4]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub3t' value='[CIV 605]Estimating & Costing' checked>$fetch1[5]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub4t' value='[CIV 606]Contract & Account' checked>$fetch1[6]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub5t' value='[CIV607]Adv Structure' checked>$fetch1[7]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                      </tr>

                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub5s' value='[603] Project Work' checked>$fetch1[19]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub1s' value='[CIV 610]Design of Steel Structure Lab' checked>$fetch1[15]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub2s' value='[CIV611]Estimating & Costing Lab' checked>$fetch1[16]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub3s' value='[CIV612]Contract & Account Lab' checked>$fetch1[17]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub4s' value='[CIV 613/614/615]Elective II Lab' checked>$fetch1[18]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub6s' value='[602] Professional Practices' checked>$fetch1[20]</td>
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
          else if($fetch2[2]=='Mechanical Engineering')
          {
            $tdata="UPDATE  admit_data_sem3 SET tid = '$tid1'  WHERE   reg_no = $reg";
            $sql1=mysqli_query($con,$tdata);
            $tdata1="UPDATE  admit_data_sem3 SET amount = '$amt'   WHERE   reg_no = $reg";
            $sql1=mysqli_query($con,$tdata1);
             $sqll="select * from admit_data_sem3 where reg_no = {$reg}";
             $query=mysqli_query($con,$sqll);
             $fetch=mysqli_fetch_array($query);
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
                      <td colspan='2'><input type='checkbox' name='sub1t' value='[601] Industrial Engineering & Management' checked>$fetch1[3]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub2t' value='[CIV 604]Design of Steel Structure' checked>$fetch1[4]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub3t' value='[CIV 605]Estimating & Costing' checked>$fetch1[5]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub4t' value='[CIV 606]Contract & Account' checked>$fetch1[6]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub5t' value='[CIV607]Adv Structure' checked>$fetch1[7]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub1s' value='[CIV 610]Design of Steel Structure Lab' checked>$fetch1[9]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub2s' value='[CIV611]Estimating & Costing Lab' checked>$fetch1[10]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub5s' value='[603] Project Work' checked>$fetch1[17]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub3s' value='[CIV612]Contract & Account Lab' checked>$fetch1[15]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub4s' value='[CIV 613/614/615]Elective II Lab' checked>$fetch1[16]</td>
                      </tr>
                      <tr>
                      <td colspan='2'><input type='checkbox' name='sub6s' value='[602] Professional Practices' checked>$fetch1[18]</td>
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
        }
 ?>
        </div>
      </div>
    </div>
  </body>
  </html>
