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
          <li class="active"><a href="contactus.php">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-xs-12">

        </div>
        <div class="col-sm-4 col-xs-12" style="border:2px solid black;">
          <h2 align="center" style="margin-left:20px;">Contact Us</h2>
        <form class="form-group" action="feedback1.php" method="post">

            <label>Name</lable>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" placeholder="Enter Your Name" required><br>
            <br><lable>Email Address</lable>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" placeholder="Enter Your Email Address" required>
            <br><br><lable>Subject</lable>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sub" placeholder="Enter Your Subject" required>
            <br><br><textarea name="msg" placeholder="Your Message" cols="37" rows="10"></textarea>
            <br><br><input type="submit" name="send" value="send">
        </form>
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
