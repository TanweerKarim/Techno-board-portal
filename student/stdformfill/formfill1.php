<?php
session_start();
 ?>
<?php
$con=mysqli_connect("localhost","root","","try");
$sem = $_SESSION['sem'];
$reg=$_SESSION['reg'];
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
          <li><a href="../../index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <?php
  $stdtl="select * from regno_dcl where reg_no = '{$reg}'";
  $query=mysqli_query($con,$stdtl);
  $fetch=mysqli_fetch_array($query);
  $fetch[2]='Third';
  if($sem=='First')
  {
  $subdtl="select * from sem_subject where subjects_id = 'all-1'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
 <table style='width:90%;text-align:left;' class='table'>
 <tr>
 <td><lable>REGISTRATION NO<lable></td>
 <td><lable>SEMESTER</lable></td>
 </tr>
 <tr>
 <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
 <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
 </tr>
 <tr>
 <td><lable>STUDENT NAME</lable></td>
 <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
 </tr>
 <tr>
 <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
 </tr>
 <tr>
 <td><lable>FATHERS NAME</lable></td>
 </tr>
 <tr>
 <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
 </tr>
 <tr>
 <td><lable>COLLEGE NAME<lable></td>
 <td><lable>BRANCH NAME</lable></td>
 </tr>
 <tr>
 <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
 <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
 </tr>
 <tr>
 <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
 </tr>
 <tr>
 <td colspan='2'><input type='checkbox' name='sub1t' value='[101]COMMUNICATION SKILL-I'>$fetch1[3]</td>
 </tr>
 <tr>
 <td colspan='2'><input type='checkbox' name='sub2t' value='[102]ENGINEERING MATH-I'>$fetch1[4]</td>
 </tr>
 <tr>
 <td colspan='2'><input type='checkbox' name='sub3t' value='[103]ENGINEERING PHYSICS-I '>$fetch1[5]</td>
 </tr>
 <tr>
 <td colspan='2'><input type='checkbox' name='sub4t' value='[104]ENGINEERING CHEMISTRY-I'>$fetch1[6]</td>
 </tr>
 <tr>
 <td colspan='2'><input type='checkbox' name='sub5t' value='[105]ENGINEERING GRAPHICS-I'>$fetch1[7]</td>
 </tr>
 </tr>
 <tr>
 <td colspan='2'><input type='checkbox' name='sub6t' value='[106]FUNDAMENTAL OF COMPUTER '>$fetch1[8]</td>
 </tr>
 <tr>
 <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
 </tr>
 <tr>
 <td colspan='2'><input type='checkbox' name='sub1p' value='[107]ENGINEERING PHYSICS LAB-I '>$fetch1[13]</td>
 </tr>
 <tr>
 <td colspan='2'><input type='checkbox' name='sub2p' value='[108]ENGINEERING CHEMISTRY LAB-I'>$fetch1[14]</td>
 </tr>
 <tr>
 <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
 </tr>
 <tr>
 <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
 </tr>
 <tr>
 <td colspan='2'><input type='checkbox' name='sub1s' value='[109]ENGINEERING GRAPHICS-I'>$fetch1[20]</td>
 </tr>
 <tr>
 <td colspan='2'><input type='checkbox' name='sub2s' value='[110]COMMUNICATION SKILL-I'>$fetch1[21]</td>
 </tr>
 <tr>
 <td colspan='2'><input type='checkbox' name='sub3s' value='[111]FUNDAMENTAL OF COMPUTER-I'>$fetch1[22]</td>
 </tr>
 <tr>
 <td colspan='2'><input type='checkbox' name='sub4s' value='[112]WORKSHOP-I'>$fetch1[23]</td>
 </tr>
 <tr>
 <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
 </tr>
 <tr>
 <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
 </tr>
 </table>
 </div>
  ";
}
else if($sem=='Second')
{
$subdtl="select * from sem_subject where subjects_id = 'all-2'";
$query1=mysqli_query($con,$subdtl);
$fetch1=mysqli_fetch_array($query1);
echo "
<div align='center'>
<form action='examfee.php' method='post'>
<table style='width:90%;text-align:left;' class='table'>
<tr>
<td><lable>REGISTRATION NO<lable></td>
<td><lable>SEMESTER</lable></td>
</tr>
<tr>
<td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
<td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>STUDENT NAME</lable></td>
<td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
</tr>
<tr>
<td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>FATHERS NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>COLLEGE NAME<lable></td>
<td><lable>BRANCH NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
<td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1t' value='[201]COMMUNICATION SKILL-II'>$fetch1[3]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2t' value='[202]ENGINEERING MATH-II'>$fetch1[4]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub3t' value='[203]ENGINEERING PHYSICS-II'>$fetch1[5]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub4t' value='[204]ENGINEERING CHEMISTRY-II'>$fetch1[6]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub5t' value='[205]PROGRAMMING IN C'>$fetch1[7]</td>
</tr>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1p' value='[207]ENGINEERING PHYSICS LAB-II '>$fetch1[13]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2p' value='[208]ENGINEERING CHEMISTRY LAB-II'>$fetch1[14]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1s' value='[208]PROGRAMMING IN C'>$fetch1[20]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2s' value='[209]WORKSHOP PRACTICES'>$fetch1[21]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub3s' value='[210]PROFESSIONAL PRRACTICE-I'>$fetch1[22]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
</tr>
</table>
</div>
";
}
else if($sem=='Third')
{
if($fetch[3]=='Automobile Engineering')
{
$subdtl="select * from sem_subject where subjects_id = 'am-3'";
$query1=mysqli_query($con,$subdtl);
$fetch1=mysqli_fetch_array($query1);
echo "
<div align='center'>
<form action='examfee.php' method='post'>
<table style='width:90%;text-align:left;' class='table'>
<tr>
<td><lable>REGISTRATION NO<lable></td>
<td><lable>SEMESTER</lable></td>
</tr>
<tr>
<td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
<td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>STUDENT NAME</lable></td>
<td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
</tr>
<tr>
<td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>FATHERS NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>COLLEGE NAME<lable></td>
<td><lable>BRANCH NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
<td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1t' value='[301]ENGG MATH-III'>$fetch1[3]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2t' value='[AUT303]Automobile Engines'>$fetch1[4]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub3t' value='[MEC304]Engineering Material'>$fetch1[5]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub4t' value='[MEC305]Engineering Mechanics'>$fetch1[6]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub5t' value='[MEC306]Strength of Materials'>$fetch1[7]</td>
</tr>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1p' value='[AUT304]Automobile Engines Lab '>$fetch1[13]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2p' value='[MEC308]Engineering Mechanics Lab'>$fetch1[14]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub3p' value='[MEC309]Strength of Meterials Lab'>$fetch1[15]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1s' value='[309]ENGINEERING GRAPHICS-II'>$fetch1[20]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2s' value='[302]DEVELOPMENT OF LIFE SKILLS-I'>$fetch1[21]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
</tr>
</table>
</div>
";
}
else if($fetch[3]=='Civil Engineering')
{
$subdtl="select * from sem_subject where subjects_id = 'cv-3'";
$query1=mysqli_query($con,$subdtl);
$fetch1=mysqli_fetch_array($query1);
echo "
<div align='center'>
<form action='examfee.php' method='post'>
<table style='width:90%;text-align:left;' class='table'>
<tr>
<td><lable>REGISTRATION NO<lable></td>
<td><lable>SEMESTER</lable></td>
</tr>
<tr>
<td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
<td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>STUDENT NAME</lable></td>
<td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
</tr>
<tr>
<td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>FATHERS NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>COLLEGE NAME<lable></td>
<td><lable>BRANCH NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
<td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1t' value='[301]ENGG MATH-III'>$fetch1[3]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2t' value='[CIV306]BUILDING DRAWING (AUTOCAD)'>$fetch1[4]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub3t' value='[CIV304]BUILDING MATERIALS'>$fetch1[5]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub4t' value='[MEC306]Strength of Materials'>$fetch1[6]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub5t' value='[MEC303]SURVEYING'>$fetch1[7]</td>
</tr>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1p' value='[CIV308]Strength of Meterials Lab '>$fetch1[13]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2p' value='[CIV307]Surveying Lab'>$fetch1[14]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1s' value='[309]ENGINEERING GRAPHICS-II'>$fetch1[20]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2s' value='[302]DEVELOPMENT OF LIFE SKILLS-I'>$fetch1[21]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
</tr>
</table>
</div>
";
}
else if($fetch[3]=='Computer Science Engineering')
{
$subdtl="select * from sem_subject where subjects_id = 'cse-3'";
$query1=mysqli_query($con,$subdtl);
$fetch1=mysqli_fetch_array($query1);
echo "
<div align='center'>
<form action='examfee.php' method='post'>
<table style='width:90%;text-align:left;' class='table'>
<tr>
<td><lable>REGISTRATION NO<lable></td>
<td><lable>SEMESTER</lable></td>
</tr>
<tr>
<td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
<td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>STUDENT NAME</lable></td>
<td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
</tr>
<tr>
<td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>FATHERS NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>COLLEGE NAME<lable></td>
<td><lable>BRANCH NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
<td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1t' value='[301]ENGG MATH-III'>$fetch1[3]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2t' value='[ECE303]ELECTRONICS DEVICES AND CIRCUITS'>$fetch1[4]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub3t' value='[ECE304]ELECTRICAL TECHNOLOGY'>$fetch1[5]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub4t' value='[CSE303]OBJECT ORIENTED PROGRAMMING'>$fetch1[6]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub5t' value='[CSE304]WEB TECHNOLOGY'>$fetch1[7]</td>
</tr>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1p' value='[ECE307]ELECTRONICS DEVICES AND CIRCUITS LAB '>$fetch1[13]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2p' value='[ECE308]ELECTRICAL TECHNOLOGY LAB'>$fetch1[14]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub3p' value='[CSE305]OBJECT ORIENTED PROGRAMMING'>$fetch1[15]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1s' value='[CSE306]WEB TECHNOLOGY'>$fetch1[20]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2s' value='[302]DEVELOPMENT OF LIFE SKILLS-I'>$fetch1[21]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
</tr>
</table>
</div>
";
}
else if($fetch[3]=='Electrical Engineering')
{
$subdtl="select * from sem_subject where subjects_id = 'ee-3'";
$query1=mysqli_query($con,$subdtl);
$fetch1=mysqli_fetch_array($query1);
echo "
<div align='center'>
<form action='examfee.php' method='post'>
<table style='width:90%;text-align:left;' class='table'>
<tr>
<td><lable>REGISTRATION NO<lable></td>
<td><lable>SEMESTER</lable></td>
</tr>
<tr>
<td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
<td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>STUDENT NAME</lable></td>
<td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
</tr>
<tr>
<td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>FATHERS NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>COLLEGE NAME<lable></td>
<td><lable>BRANCH NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
<td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1t' value='[301]ENGG MATH-III'>$fetch1[3]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2t' value='[ELE305]Basic Engineering (Civil & Mechanical)'>$fetch1[4]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub3t' value='[ELE303]Electrical Engineering'>$fetch1[5]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub4t' value='[ELE306]Electronics Engineering'>$fetch1[6]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub5t' value='[ELE304]Measurement'>$fetch1[7]</td>
</tr>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1p' value='[ELE310]Basic Engineering Lab (Civil & Mechanical)'>$fetch1[13]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2p' value='[ELE310]Electrical Engineering Lab'>$fetch1[14]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub3p' value='[ELE309]Electronics Lab'>$fetch1[15]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub3p' value='[ELE308]Measurement Lab'>$fetch1[16]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1s' value='[309]ENGINEERING GRAPHICS-II'>$fetch1[20]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2s' value='[302]DEVELOPMENT OF LIFE SKILLS-I'>$fetch1[21]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
</tr>
</table>
</div>
";
}
else if($fetch[3]=='Electronics And Communication Engineering')
{
$subdtl="select * from sem_subject where subjects_id = 'ece-3'";
$query1=mysqli_query($con,$subdtl);
$fetch1=mysqli_fetch_array($query1);
echo "
<div align='center'>
<form action='examfee.php' method='post'>
<table style='width:90%;text-align:left;' class='table'>
<tr>
<td><lable>REGISTRATION NO<lable></td>
<td><lable>SEMESTER</lable></td>
</tr>
<tr>
<td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
<td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>STUDENT NAME</lable></td>
<td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
</tr>
<tr>
<td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>FATHERS NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>COLLEGE NAME<lable></td>
<td><lable>BRANCH NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
<td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1t' value='[301]ENGG MATH-III'>$fetch1[3]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2t' value='[ECE305]Elect & Electronic Measurement'>$fetch1[4]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub3t' value='[ECE304]ELECTRICAL TECHNOLOGY'>$fetch1[5]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub4t' value='[ECE306]Electromagnetic Field Theory'>$fetch1[6]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub5t' value='[ECE303]ELECTRONICS DEVICES AND CIRCUITS'>$fetch1[7]</td>
</tr>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1p' value='[ECE309]Elect & Electronic Measurement Lab'>$fetch1[13]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2p' value='ECE308]Electrical Technology Laboratory'>$fetch1[14]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub3p' value='[ECE310]Electromagnetic Field Theory Lab'>$fetch1[15]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1s' value='[ECE307]Electronic Devices and Circuts'>$fetch1[20]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2s' value='[302]DEVELOPMENT OF LIFE SKILLS-I'>$fetch1[21]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
</tr>
</table>
</div>
";
}
else if($fetch[3]=='Mechanical Engineering')
{
$subdtl="select * from sem_subject where subjects_id = 'me-3'";
$query1=mysqli_query($con,$subdtl);
$fetch1=mysqli_fetch_array($query1);
echo "
<div align='center'>
<form action='examfee.php' method='post'>
<table style='width:90%;text-align:left;' class='table'>
<tr>
<td><lable>REGISTRATION NO<lable></td>
<td><lable>SEMESTER</lable></td>
</tr>
<tr>
<td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
<td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>STUDENT NAME</lable></td>
<td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
</tr>
<tr>
<td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>FATHERS NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td><lable>COLLEGE NAME<lable></td>
<td><lable>BRANCH NAME</lable></td>
</tr>
<tr>
<td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
<td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1t' value='[301]ENGG MATH-III'>$fetch1[3]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2t' value='[MEC304]Engineering Material'>$fetch1[4]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub3t' value='[MEC305]Engineering Mechanics'>$fetch1[5]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub4t' value='[MEC306]Strength of Materials'>$fetch1[6]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub5t' value='[MEC303]Machine Drawing'>$fetch1[7]</td>
</tr>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1p' value='[MEC308]Engineering Mechanics Lab'>$fetch1[13]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2p' value='[MEC309]Strength of Meterials Lab'>$fetch1[14]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub1s' value='[MEC307]Machine Drawing Lab'>$fetch1[20]</td>
</tr>
<tr>
<td colspan='2'><input type='checkbox' name='sub2s' value='302]DEVELOPMENT OF LIFE SKILLS-I'>$fetch1[21]</td>
</tr>
<tr>
<td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
</tr>
<tr>
<td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
</tr>
</table>
</div>
";
}
}
else if($sem=='Fourth')
{
  if($fetch[3]=='Automobile Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'am-4'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[AUT402]Automotive Manufacturing Process'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[AUT403]Auto Engineering Drawing'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[MEC404]Thermal Engineering'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[MEC405]Theory of Machine'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[AUT404]Automobile Transmission System'>$fetch1[7]</td>
  </tr>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[AUT405]Automotive Manufacturing Process Lab'>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2p' value='[MEC409]Theory of Machine Lab'>$fetch1[14]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3p' value='[MEC410]Thermal Engineering Lab'>$fetch1[15]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4p' value='[AUT407]Auto transmission System Lab'>$fetch1[16]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[AUT406]Auto Engineering Drawing lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[401]Professional Practice II'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Civil Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'cv-4'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[CIV 402]Construction Technology'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[CIV 403]Geo Technical Engineering'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[CIV 404]Hydraulics'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[CIV405]Theory of Structure'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CIV406]Transportation Engineering'>$fetch1[7]</td>
  </tr>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[CIV 408]Geo Technical Engineering Lab '>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2p' value='[CIV 409]Hydraulics Lab'>$fetch1[14]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3p' value='[CIV410]Transportation Lab'>$fetch1[15]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[CIV 407]Construction Technology Lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[410]PROFESSIONAL PRACTICES-2'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Computer Science Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'cse-4'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[CSE402]DATA STRUCTURE AND ALGORITHM'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[ECE]COMPUTER HARDWARE & PERIPHERAL'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[CSE403]OPERATING SYSTEM'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[ECE405]DATA COMMUNICATION & COMPUTER NETWORKING'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CSE404]DATABASE MANAGEMENT SYSTEM'>$fetch1[7]</td>
  </tr>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[CSE407]DATABASE MANAGEMENT SYSTEM LAB'>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2p' value='[CSE407]DATA STRUCTURE AND ALGORITHM'>$fetch1[14]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[CSE409]COMPUTER WORKSHOP'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[ECE409]DATA COMMUNICATION & COMPUTER NETWORKING'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[CSE410]OPERATING SYSTEM'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4s' value='[410]PROFESSIONAL PRACTICES-2'>$fetch1[23]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Electrical Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'ee-4'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[ELE402]Network Theory'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[ELE403]Electrical Machine I'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[ELE404]Digital Circuits & Microprocessor'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[ELE405]Elect Estimation & Costing'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ELE406]Power System I'>$fetch1[7]</td>
  </tr>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[ELE407]Network Theory Lab'>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2p' value='[ELE408]Electrical Machine I Lab'>$fetch1[14]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3p' value='[ELE408]Electrical Machine I Lab'>$fetch1[15]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[ELE410]Electrical Workshop'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[410]PROFESSIONAL PRACTICES-2'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Electronics And Communication Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'ece-4'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[ECE 402]Digital Technology & Microprocessor'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[ECE]COMPUTER HARDWARE & PERIPHERAL'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[ECE404]Communication System'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[ECE405]DATA COMMUNICATION & COMPUTER NETWORKING'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE406]Control System'>$fetch1[7]</td>
  </tr>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[ECE407]Digital & Microprocessor Lab'>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2p' value='[ECE408]Communication System Lab'>$fetch1[14]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3p' value='[ECE409]Control System Lab'>$fetch1[15]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[ECE410]Computer Networking Lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[ECE411]Electronic Workshop'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[410]PROFESSIONAL PRACTICES-2'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Mechanical Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'me-4'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[MEC402]Manufacturing Technology'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[MEC403]Fluid Mechanics & Machine'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[MEC404]Thermal Engineering'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[MEC405]Theory of Machine'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC406]Electrical Engineering'>$fetch1[7]</td>
  </tr>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[MEC407]Manufacturing Technology'>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2p' value='[MEC408]Fluid Mechanics & Machine'>$fetch1[14]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3p' value='[MEC409]Thermal Engineering'>$fetch1[15]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4p' value='[MEC410]Theory of Machine'>$fetch1[16]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5p' value='[MEC411]Electrical Engineering'>$fetch1[17]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[410]PROFESSIONAL PRACTICES-2'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
}
else if($sem=='Fifth')
{
  if($fetch[3]=='Automobile Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'am-5'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[AUT 503]Transport Rules, Legislation & Act'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[AUT 504]Advance Automobile Engineering'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[AUT 505]Electrical & Electronics Engineering'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[AUT 506]Hydraulics & Pneumatics'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[AUT 507]Environment Pollution Control'>$fetch1[7]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC 509]CAD/CAM & Robotics'>$fetch1[8]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC 510]Installation & Maintenance'>$fetch1[9]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[AUT 508]Adv. Automobile Engineering Lab'>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2p' value='[AUT 509]Electrical & Electronics Engineering Lab'>$fetch1[14]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3p' value='[AUT 510]Hydraulics & Pneumatics Lab'>$fetch1[15]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[AUT 511/MEC517/MEC518]Elective-I Lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[502]In Plant Training'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[501]DLS'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Civil Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'cv-5'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[CIV 503]Irrigation Engineering'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[CIV 504]RCC Design'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[CIV 505]Adv Surveying'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[CIV506]Environmental Engineering'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CIV507]Traffic Management'>$fetch1[7]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CIV508]Adv Construction Methodology & Equipments'>$fetch1[8]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[AAA507]Disaster Mangt'>$fetch1[9]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[CIV509]Environmental Engg Lab'>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2p' value='[CIV 510]Adv. Surveying Lab'>$fetch1[14]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[CIV 511]RCC Design Lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[CIV 512/513/AAA514]Elective-I Lab'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[502]IN PLANT TRAINING'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4s' value='[501]DLS'>$fetch1[23]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Computer Science Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'cse-5'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[CSE508]MICROPROCESSOR AND MICROCONTROLLER'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[CSE504]JAVA PROGRAMMING'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[CSE505]COMPUTER GRAPHICS'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[CSE506]Mobile Computing'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[CSE507]SYSTEM SOFTWARE AND ADMINISTRATION'>$fetch1[7]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[CSE508]Advance Web Technology'>$fetch1[8]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CSE509]Artificial Intelligence'>$fetch1[9]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CSE510]Data Mining'>$fetch1[10]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CSE511]e- Commerce'>$fetch1[11]</td>
  </tr>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[CSE512]JAVA PROGRAMMING'>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2p' value='[CSE513]COMPUTER GRAPHICS'>$fetch1[14]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[CSE514/515/16]ELECTIVE I LAB'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[CSE517/518/519]ELECTIVE II LAB'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[502]IN PLANT TRAINING'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4s' value='[501]DLS'>$fetch1[23]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Electrical Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'ee-5'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[ELE 503]Power System II'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[ELE 504]Electrical Machines II'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[ELE 505]Traction'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[ELE 506]Illumination Engineering'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[CSE503]Micro. Processor & Micro. Controller'>$fetch1[7]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[ECE505]Programmable Logic Controller'>$fetch1[8]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ELE507]Maintenance of Electrical Machines'>$fetch1[9]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE406]Control System'>$fetch1[10]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE503]Instrumentation'>$fetch1[11]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ELE508]Robotics & Smart System'>$fetch1[12]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[ELE 509]Electrical Machines II Lab'>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2p' value='[ELE 510]Power System Lab'>$fetch1[14]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[ELE 511/ELE 512/ELE 513]Elective I lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[ELE 514/ECE409/ECE512/ELE515]Elective II Lab'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[502]IN PLANT TRAINING'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4s' value='[501]DLS'>$fetch1[23]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Electronics And Communication Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'ece-5'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[ECE 503]Instrumentation System'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[ECE 504]Power Electronics'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[ECE 505]Programmable Logic Controller'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[ECE 506]Embedded System'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[ECE 507]VLSI System'>$fetch1[7]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[ECE 508]Electronic Waste'>$fetch1[8]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE509]Linear Integrated Circuits'>$fetch1[9]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE510]Digital Communication System'>$fetch1[10]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE 511]Digital Signal Processing'>$fetch1[11]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[ECE 512]Instrumentation System Lab'>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2p' value='[ECE 513]Power Electronics Lab'>$fetch1[14]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[ECE 514/515/516]Elective I Lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[ECE 517/518/519]Elective II Lab'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[502]IN PLANT TRAINING'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4s' value='[501]DLS'>$fetch1[23]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Mechanical Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'me-5'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[MEC 503]Power Engineering'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[MEC 504]Adv. Manufacturing Technology'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[MEC 505]Metrology & Quality Control'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[MEC 506]Electronics Engineering'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC 507]Power Plant Engineering'>$fetch1[7]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC 508]Automobile Engineering'>$fetch1[8]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC 509]CAD/CAM & Robotics'>$fetch1[9]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC510]Installation & Maintenance'>$fetch1[10]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[MEC 511]Power Engineering Lab'>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2p' value='[MEC512]Adv.Manufacturing Tech. Lab'>$fetch1[14]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[MEC 513]Metrology & Quality Control Lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[MEC 514]Electronics Engineering Lab'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[MEC515/516/517/518]Elective-I Lab'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4s' value='[502]IN PLANT TRAINING'>$fetch1[23]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
}
else if($sem=='Sixth')
{
  if($fetch[3]=='Automobile Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'am-6'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[601] Industrial Engineering & Management'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[AUT 604]Heavy Automotive Machineries'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[AUT 605]Automotive Elect. & Electronics'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[AUT 606]Aerodynamics & Design'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC 607]Mechatronics'>$fetch1[7]</td>
  </tr>
  <tr>
    <td colspan='2'><input type='checkbox' name='sub5t' value='[AUT 607]Automobile Air Conditioning'>$fetch1[8]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[AUT 608]Vehicle Maintenance'>$fetch1[9]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC 610]Alt. Source of Energy'>$fetch1[10]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[AUT 609]Automotive Electrical & Electronics Lab'>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4s' value='[603] Project Work'>$fetch1[23]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[AUT 610]Aerodynamics & Design Lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[AUT 611]Heavy Automotive Machineries Lab'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[MEC614/AUT612/ AUT613/MEC617]Elective II Lab'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5s' value='[602] Professional Practices'>$fetch1[24]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Civil Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'cv-6'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[601] Industrial Engineering & Management'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[CIV 604]Design of Steel Structure'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[CIV 605]Estimating & Costing'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[CIV 606]Contract & Account'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CIV607]Adv Structure'>$fetch1[7]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CIV 608]Water Resources Planning & Management'>$fetch1[8]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CIV609]Earth quake Resistant Structure'>$fetch1[9]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>

  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5s' value='[603] Project Work'>$fetch1[24]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[CIV 610]Design of Steel Structure Lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[CIV611]Estimating & Costing Lab'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[CIV612]Contract & Account Lab'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4s' value='[CIV 613/614/615]Elective II Lab'>$fetch1[23]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub6s' value='[602] Professional Practices'>$fetch1[25]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Computer Science Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'cse-6'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[601] Industrial Engineering & Management'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[CSE 604]Network Security'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[CSE 605] Software Engineering & Tools'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[CSE606]Image Processing'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[CSE607]Cloud Computing'>$fetch1[7]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[CSE608]UML'>$fetch1[8]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CSE609]Animation & Multimedia'>$fetch1[9]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CSE610]Adv. Microprocessor'>$fetch1[10]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CSE611]IoT'>$fetch1[11]</td>
  </tr>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5s' value='[603] Project Work'>$fetch1[24]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[CSE 612] Network Security Lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[CSE613] Software Engineering & Tools Lab'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[CSE 614/615/616]Elective III Lab'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4s' value='[CSE 617/618/619] Elective IV Lab'>$fetch1[23]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub6s' value='[602] Professional Practices'>$fetch1[25]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Electrical Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'ee-6'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[601] Industrial Engineering & Management'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[ELE 604]Utilization of Electrical Energy'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[ECE 504]Power Electronics'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[ELE605]Energy Conservation & Audit'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[ELE606]Renewable Energy Sources'>$fetch1[7]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[ELE607]Bye laws for Electrical Enginers'>$fetch1[8]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ELE608]Smart Grid'>$fetch1[9]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE507]VLSI'>$fetch1[10]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE511]DSP'>$fetch1[11]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ELE609]Communication System'>$fetch1[12]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5s' value='[603] Project Work'>$fetch1[24]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[ECE513]Power Electronics Lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[ELE 610]Utilization of Electrical Energy Lab'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[ELE611/612/613]Elective III lab'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4s' value='[ELE614/ECE515/ ECE519/ELE615]Elective IV Lab'>$fetch1[23]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub6s' value='[602] Professional Practices'>$fetch1[25]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Electronics And Communication Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'ece-6'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[601] Industrial Engineering & Management'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[ECE 604]Optical Fiber Communication'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[ECE605]Wireless/Mobile Communication'>$fetch1[5]</td>
  </tr>
  <tr>
    <td colspan='2'><input type='checkbox' name='sub4t' value='[ECE606]Sensors & Actuators'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[ECE607]Biomedical Instrumentation'>$fetch1[7]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[CSE611]IoT'>$fetch1[8]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE608]Microwave'>$fetch1[9]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE609]Satellite Communication'>$fetch1[10]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[ECE610]Fire & Safety'>$fetch1[11]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[CSE606]Image Processing'>$fetch1[12]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>

  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5s' value='[603] Project Work'>$fetch1[24]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[ECE 611]Optical Fiber Communication Lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[ECE 612]Wireless/Mobile Communication Lab'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[ECE613/614/CSE614]Elective III Lab'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4s' value='[ECE615/616/617/CSE619]Elective IV Lab'>$fetch1[23]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub6s' value='[602] Professional Practices'>$fetch1[25]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
  else if($fetch[3]=='Mechanical Engineering')
  {
  $subdtl="select * from sem_subject where subjects_id = 'me-6'";
  $query1=mysqli_query($con,$subdtl);
  $fetch1=mysqli_fetch_array($query1);
  echo "
  <div align='center'>
  <form action='examfee.php' method='post'>
  <table style='width:90%;text-align:left;' class='table'>
  <tr>
  <td><lable>REGISTRATION NO<lable></td>
  <td><lable>SEMESTER</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='reg' value='$fetch[0]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  <td><input type='text' name='sem' value='$fetch[2]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>STUDENT NAME</lable></td>
  <td rowspan='4'><img src='../../upload/$fetch[12]' style='height:130px;width:120px;PADDING-LEFT:10PX;'></td>
  </tr>
  <tr>
  <td><input type='text' name='name' value='$fetch[1]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>FATHERS NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='fname' value='$fetch[10]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td><lable>COLLEGE NAME<lable></td>
  <td><lable>BRANCH NAME</lable></td>
  </tr>
  <tr>
  <td><input type='text' name='clgname' value='$fetch[4]' style='width:100%;height:30px;;border-radius:5px;border:none;'td>
  <td><input type='text' name='branch' value='$fetch[3]' style='width:100%;height:30px;;border-radius:5px;border:none;'></td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>THEORY PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1t' value='[601] Industrial Engineering & Management'>$fetch1[3]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2t' value='[MEC 604]Design of Machine Elements'>$fetch1[4]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3t' value='[MEC 605]Industrial Fluid Power'>$fetch1[5]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4t' value='[MEC 606]Measurements & Automation'>$fetch1[6]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC 607]Mechatronics'>$fetch1[7]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC 608]Ref. & Air Conditioning'>$fetch1[8]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC 609]Machine Tool Design'>$fetch1[9]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub5t' value='[MEC 610]Alt. Source of Energy'>$fetch1[10]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>PRACTICAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1p' value='[MEC 611]Industrial Fluid Power Lab'>$fetch1[13]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2p' value='[MEC 612]Measurements & Automation Lab'>$fetch1[14]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>TEAMWORK PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub3s' value='[603] Project Work'>$fetch1[22]</td>
  </tr>
  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>SESSIONAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub1s' value='[MEC 613]Design of Machine Elements Lab'>$fetch1[20]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub2s' value='[MEC 614/615/616/617]Elective II Lab'>$fetch1[21]</td>
  </tr>
  <tr>
  <td colspan='2'><input type='checkbox' name='sub4s' value='[602] Professional Practices'>$fetch1[23]</td>
  </tr>

  <tr>
  <td colspan='2'><h3 align='CENTER' style='background-color:lightgreen;width:100%;height:30px;;border-radius:5px;border:none;'>ORAL PAPERS</h3></td>
  </tr>
  <tr>
  <td colspan='2'><input type='submit' name='s1' value='Proceed To Pay' style='border:none;background-color: black;color:white;width:400px;border-radius:5px;height:30px;'></td>
  </tr>
  </table>
  </div>
  ";
  }
}
   ?>
        </div>
      </div>
    </div>
  </body>
  </html>
