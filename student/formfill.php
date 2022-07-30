<?php
session_start(); ?>
<?php
$otp=rand(1000,9999);
  $_SESSION['otp']=$otp;
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
  <body style="background-image:url(../srcimgs/mobile.jpg);background-repeat:no-repeat;background-size:2000px 3000px;">
    <div class="container" >
      <div class="row">
        <div class="col-sm-1">

        </div>
        <div class="col-xs-12 col-sm-10">
      <br>
      <img class="img-responsive " src="../srcimgs/banner.png" style="height:120px;width:900px;">
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
          <form id="t4" action="stdformfill/feedback3.php" method="post" ALIGN="CENTER"><br><br><br><br><br>
            <table align="center" class="table"  id="tta" style="width: 100%;text-align:left; border:5px solid black;border-radius:4px;">
              <tr>
                <th>
            SEMESTER
          </th>
          <th>
            REG.NO.
          </th>
        </tr>
        <tr>
          <td>
            <select name="semem[]" style="width:100%;height:40px;border-radius:8px">
              <option>--SELECT--</option>
              <option value="First">1st SEMESTER</option>
              <option value="Second">2nd SEMESTER</option>
              <option value="Third">3rd SEMESTER</option>
              <option value="Fourth">4th SEMESTER</option>
              <option value="Fifth">5th SEMESTER</option>
              <option value="Sixth">6th SEMESTER</option>
            </select>
          </td>
          <td>
            <input type="text" name="t1" placeholder="Reg.no." style="width:100%;height:35px;border-radius:8px;border:none;" required>
          </td>
        </tr>
        <tr>
          <td colspan="2"><input id="t7" type="submit" name="s1" value="CLICK HERE TO CONTINUE" style="width:100%;height:35px;border-radius:8px;border:none;
          background-color:lightgreen;color:white;font-weight:bold;">
        </form>
        </td>
        </tr>
      </table>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br>
    <br>
    <footer class="container" style="height:40px;background-color:black;border-radius:4px;">

      <p style="color:white;text-align:center;">© 2019 <a href="tanweer.php" style="text-decoration:none;color:white;">Tanweer</a>. All Rights Reserved.</p>
</footer><br>
</body>
</html>
