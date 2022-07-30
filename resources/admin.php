<?php
session_start();
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style media="screen">
    .login-box h1{
      float:left;
      font-size: 40px;
      border-bottom: 6px solid black;
      margin-bottom: 50px;
      padding:10px 0;
      color: black;
    }
    .text-box{
      width:100%;
      overflow: hidden;
      font-size: 20px;
      padding: 8px 0;
      margin: 8px 0;
      border-bottom: 1px solid black;
    }
    .text-box i{
      width:26px;
      float: left;
      text-align: center;
    }
    .text-box input{
      border: none;
      outline:none;
      background:none;
      color: black;
      font-size: 18px;
      width:200px;
      float: left;
      margin:0 10px;
    }
    .btn{
      width:100%;
      background: none;
      border: 2px solid black;
      padding: 5px;
      font-size: 18px;
      cursor: pointer;
      margin: 30px 0;
    }
  </style>
  </head>
  <body style="background-image:url(../srcimgs/mobile.jpg);background-repeat:no-repeat;background-size:2000px 3000px;">
    <div class="container" >
      <div class="row">
        <div class="col-sm-1 col-xs-12">

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
          <a class="navbar-brand" href="#">Techno Board</a>
        </div>
        <ul class="nav navbar-nav">
          <li ><a href="../index.html">Home</a></li>
          <li><a href="resources/aboutus.php">About Us</a></li>
          <li><a href="syllabus.php">Syllabus</a></li>
          <li><a href="incap.php">Intake Capacity</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-xs-12">

        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="login-box">
          <h1>Login</h1>
          <form action="admin.php" method="post">
          <div class="text-box">
            <i class="fa fa-user"></i><input type="text" placeholder="Username" name="t2" value="" style="background:none;">
          </div>
          <div class="text-box">
            <i class="fa fa-key"></i><input type="password" placeholder="Password" name="t3" value="">
          </div>
          <input type="submit" class="btn" name="s2" value="Login">
          </form>
        </div>
        </div>
      </div>
    </div>
    <br>
        <br><br>
            <br><br>
        <footer class="container" style="height:40px;background-color:black;border-radius:4px;">

          <p style="color:white;text-align:center;">© 2019 <a href="tanweer.php" style="text-decoration:none;color:white;">Tanweer</a>. All Rights Reserved.</p>
    </footer><br>
    </body>
    </html>
    <?php
      $con=mysqli_connect("localhost","root","","try");
      if(isset($_POST["s2"]))
      {
        $user_name=$_POST["t2"];
        $pass=$_POST["t3"];
        $sql="SELECT * FROM admins WHERE user_name='{$user_name}' and password='{$pass}'";
        $fth=mysqli_query($con,$sql);
        $res=mysqli_fetch_array($fth);
        print_r($res);
        if($res[0]==$user_name&&$res[1]==$pass)
        {
          echo "hello";
          $_SESSION["id"]=$user_name;
          $_SESSION["t"]=time()+1800;
          echo "<script>window.location.href='../admin/admindb.php'</script>";
        }
        else {
          echo "<script>window.alert('Wrong User Name and Password')</script>";
        }
      }
     ?>
