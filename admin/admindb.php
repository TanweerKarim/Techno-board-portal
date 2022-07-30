<?php
  session_start();
  $con=mysqli_connect("localhost","root","","try");
  $usr=$_SESSION["id"];
  $tme=$_SESSION["t"];
  $tim=time();
  if(!$usr)
  {
    header("Refresh:0;url=../resources/admin.php");
  }
  if($tim>$tme)
  {
    session_unset($usr);
    session_destroy();
    echo "<script>
  window.reload();</script>";
}
if(isset($_POST["st11"]))
{
$semid=implode($_POST["dt"]);
$sub1=$_POST["dt11"];
$sub2=$_POST["dt12"];
$sub3=$_POST["dt13"];
$sub4=$_POST["dt14"];
$sub5=$_POST["dt15"];
$id='1';
if($semid=='examination_dt1')
{
$qur="INSERT INTO examination_dt1 (`dt_id`,`sub1t`,`sub2t`,`sub3t`,`sub4t`,`sub5t`) VALUES ('{$id}','{$sub1}','{$sub2}','{$sub3}','{$sub4}','{$sub5}')";
if(mysqli_query($con,$qur))
{
echo "<script>alert('inserted');</script>";
}
else {
  echo "<script>alert('not inserted');</script>";
}
}
}
if (isset($_POST["he1"])) {
  $reg = $_POST["mkreg"];
  $sem = implode($_POST["sam"]);
  $sub1t = $_POST["mksub1t"];
  $sub2t = $_POST["mksub2t"];
  $sub3t = $_POST["mksub3t"];
  $sub4t = $_POST["mksub4t"];
  $sub5t = $_POST["mksub5t"];
  $sub6t = $_POST["mksub6t"];
  $sub1p = $_POST["mksub1p"];
  $sub2p = $_POST["mksub2p"];
  $sub3p = $_POST["mksub3p"];
  $sub4p = $_POST["mksub4p"];
  $sub5p = $_POST["mksub5p"];
  $sub6p = $_POST["mksub6p"];
  $sub1s = $_POST["mksub1s"];
  $sub2s = $_POST["mksub2s"];
  $sub3s = $_POST["mksub3s"];
  $sub4s = $_POST["mksub4s"];
  $sub5s = $_POST["mksub5s"];
  $sub6s = $_POST["mksub6s"];
  if($sem=='First')
  {
    $sql="INSERT INTO `std_marks_sem1`(`reg_no`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub6t`, `sub1p`, `sub2p`, `sub1s`, `sub2s`, `sub3s`, `sub4s`)
    VALUES ('{$reg}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub6t}','{$sub1p}','{$sub2p}','{$sub1s}','{$sub2s}','{$sub3s}','{$sub4s}')";
     if(mysqli_query($con,$sql))
     {
       echo "<script>alert('Inserted');</script>";
     }

  }
}

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
  <script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
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
    <form method="post" action="admindb.php">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Dashboard</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><button type="submit" name="ss15" style="background:none;border:none;color:white;margin:12px 0;"><span class="glyphicon glyphicon-log-out"></span> Logout</button></li>
      </ul>
    </div>
  </form>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-4 btn-group-vertical" style="background-color:#5bc0de;">
          <button type="button" onclick="updatesd()" class="btn btn-info btn-lg" style="background:none;border:none;">Update Student Detail</button>
          <button type="button" onclick="instmarks()" class="btn btn-info btn-lg" style="background:none;border:none;">Insert Marks</button>
          <button type="button" onclick="updatemarks()" class="btn btn-info btn-lg" style="background:none;border:none;">Update Marks</button>
          <button type="button" class="btn btn-info btn-lg" style="background:none;border:none;">Update Subject</button>
          <button type="button" onclick="dates()" class="btn btn-info btn-lg" style="background:none;border:none;">Declare Dates</button>
          <button type="button" onclick="regen()"class="btn btn-info btn-lg" style="background:none;border:none;">Reg.No. Generator</button>
          <button type="button" onclick="msg()"class="btn btn-info btn-lg" style="background:none;border:none;">Messages</button>
          <button type="button" onclick="idt()"class="btn btn-info btn-lg" style="background:none;border:none;">Declare papers dates</button>
          <button type="button" onclick="pt()"class="btn btn-info btn-lg" style="background:none;border:none;">Declare Paper Time</button>
          <button type="button" class="btn btn-info btn-lg" style="background:none;border:none;"></button>
          <button type="button" class="btn btn-info btn-lg" style="background:none;border:none;"></button>
          <button type="button" class="btn btn-info btn-lg" style="background:none;border:none;"></button>
          <button type="button" class="btn btn-info btn-lg" style="background:none;border:none;"></button>
      </div>
      <div class="col-sm-9 col-xs-8" style="height:315px;" id="b0">
        <div style="margin:120px;" align="center"><h1>Welcome Admin</h1></div>
      </div>
      <div class="col-sm-9 col-xs-8" style="height:315px;display:none;" id="b1">
        <table align="center" cellpadding="5px" class="table" style="margin-top:20px;">
          <tr>
          </tr>
          <th colpan="2">Update Student Detail</td>
          <tr>

            <td><label>Select Feild to Update</label></td><td><select name="sem[]" id="sem1" style="width:170px" onchange="slname()"><option>--Select--</option>
              <option value="reg_no">reg_no</option>
              <option value="name">name</option>
              <option value="branch">branch</option>
              <option value="sem">semester</option>
              <option value="college">college</option>
            </option>
            </td>
          </tr>
          <tr>
            <td id="leb">Reg.No.</td><td><input type="text" placeholder="XXXXXXXXXXX" id="regno1" name="ttt1" style="width:170px"></td>
          </tr>
          <tr>
            <td><label>Update Value</label></td><td><input type="text" id="upval" placeholder="XXXXXXXXXXX" name="ttt2" style="width:170px"></td>
          </tr>
          <tr>
            <td colspan="2">*If you want to upadate Reg.No.<br> Then kindly write students name in place of Reg.No.</td>
          </tr>
          <tr>
            <td colspan="2"><input type="button" onclick="upd()" name="s3" value="Update" style="border-radius:5px;height:30px;width:80%;margin:7px 30px 0px 0px;background-color:white;color:black;border:none;"></td>
          </tr>
        </table>
      </div>
      <div class="col-sm-9 col-xs-8" style="display:none;" id="b2">
        <form id="instmrks"action="admindb.php" method="post">
          <table align="center" class="table" style="width:50%;">
          <tr>
            <td colspan="2"><h1>Insert Marks</h1></td>
          </tr>
          <tr>
            <th colspan="2">Insert Marks</th>
          </tr>
          <tr>
            <td><label>Reg.No.</label></td>
            <td><input type="text" name="mkreg" placeholder="XXXXXXXXXXX" style="width:100%;"></td>
          </tr>
          <tr>
            <td><label>Semester</label></td>
            <td>
              <select name="sam[]" name="mksem1" style="width:100%;">
                <option>--Select--</option>
                <option value="First">First</option>
                <option value="Second">Second</option>
                <option value="Third">Third</option>
                <option value="Fouth">Fouth</option>
                <option value="Fifth">Fifth</option>
                <option value="Sixth">Sixth</option></select>
            </td>
          </tr>
          <tr>
            <td><label>Subject 1</label></td>
            <td><input type="text" style="width:100%;" name="mksub1t" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Subject 2</label></td>
            <td><input type="text" style="width:100%;" name="mksub2t" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Subject 3</label></td>
            <td><input type="text" style="width:100%;" name="mksub3t" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Subject 4</label></td>
            <td><input type="text" style="width:100%;" name="mksub4t" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Subject 5</label></td>
            <td><input type="text" style="width:100%;" name="mksub5t" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Subject 6</label></td>
            <td><input type="text" style="width:100%;" name="mksub6t" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Practical Paper 1</label></td>
            <td><input type="text" style="width:100%;" name="mksub1p" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Practical Paper 2</label></td>
            <td><input type="text" style="width:100%;" name="mksub2p" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Practical Paper 3</label></td>
            <td><input type="text" style="width:100%;" name="mksub3p" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Practical Paper 4</label></td>
            <td><input type="text" style="width:100%;" name="mksub4p" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Practical Paper 5</label></td>
            <td><input type="text" style="width:100%;" name="mksub5p" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Practical Paper 6</label></td>
            <td><input type="text" style="width:100%;" name="mksub6p" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Sessional Paper 1</label></td>
            <td><input type="text" style="width:100%;" name="mksub1s" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Sessional Paper 2</label></td>
            <td><input type="text" style="width:100%;" name="mksub2s" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Sessional Paper 3</label></td>
            <td><input type="text" style="width:100%;" name="mksub3s" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Sessional Paper 4</label></td>
            <td><input type="text" style="width:100%;" name="mksub4s" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Sessional Paper 5</label></td>
            <td><input type="text" style="width:100%;" name="mksub5s" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td><label>Sessional Paper 6</label></td>
            <td><input type="text" style="width:100%;" name="mksub6s" placeholder="XXXXXXXXXXX"> </td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" name="he1" value="Insert" style="width:100%;border-radius:4px;background-color:aqua;"></td>
          </tr>
        </table>
      </form>
      </div>
      <div class="col-sm-9 col-xs-8" style="display:none;" id="b3">
        <form id="upmarks">
        <table class="table" style="width:50%;" align="center">
          <tr>
            <td colspan="2"><h1>Update Marks</h1></td>
          </tr>
          <tr>
            <td><label>Registration Number</label></td>
            <td><input type="text" name="reg" id="mkupdtreg" placeholder="XXXXXXXXXXX" style="width:100%;"></td>
          </tr>
          <tr>
            <td><label>Semester</label></td>
            <td><select name="sem[]" id="mkupdtsem" style="width:100%;">
              <option>--Select--</option>
              <option value="First">First</option>
              <option value="Second">Second</option>
              <option value="Third">Third</option>
              <option value="Fourth">Fourth</option>
              <option value="Fifth">Fifth</option>
              <option value="Sixth">Sixth</option>
            </select></td>
          </tr>
          <tr>
            <td><label>Select Subject</label></td>
            <td>
              <select name="subject[]" id="mkupdtsub"  style="width:100%">
                <option>--select--</option>
                <option value="sub1t">Subject 1</option>
                <option value="sub2t">Subject 2</option>
                <option value="sub3t">Subject 3</option>
                <option value="sub4t">Subject 4</option>
                <option value="sub5t">Subject 5</option>
                <option value="sub6t">Subject 6</option>
                <option value="sub1p">Practical Paper 1</option>
                <option value="sub2p">Practical Paper 2</option>
                <option value="sub3p">Practical Paper 3</option>
                <option value="sub4p">Practical Paper 4</option>
                <option value="sub5p">Practical Paper 5</option>
                <option value="sub6p">Practical Paper 6</option>
                <option value="sub1s">Sessional Paper 1</option>
                <option value="sub2s">Sessional Paper 2</option>
                <option value="sub3s">Sessional Paper 3</option>
                <option value="sub4s">Sessional Paper 4</option>
                <option value="sub5s">Sessional Paper 5</option>
                <option value="sub6s">Sessional Paper 6</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label>Update Marks</label></td>
            <td><input type="text" name="newmarks" id="mkupdtval"  placeholder="00" style="width:100%;"></td>
          </tr>
          <tr>
            <td colspan="2"><input type="button" name="upmks" onclick="updtmarks()" value="Update" style="width:100%;"></td>
          </tr>
        </form>
        </table>
      </div>
      <div class="col-sm-9 col-xs-8" style="display:none;" id="b4">
        <table class="table" style="width:50%;" align="center">
          <tr>
            <td colspan="2"><h1>Declare Dates</h1></td>
          </tr>
          <tr>
            <td><label>Declare Date For</label></td>
            <td>
              <select name="zzt[]" id="dst" style="width:100%;">
                <option>--Select--</option>
                <option value="2">Registration</option>
                <option value="1">Examination</option>
                <option value="3">Admit Card</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label>From</label></td>
            <td><input type="text" id="fromdt" style="width:100%;" placeholder="dd-mm-YY Format"></td>
          </tr>
          <tr>
            <td><label>To</label></td>
            <td><input type="text" id="todt" style="width:100%;" placeholder="dd-mm-YY Format"></td>
          </tr>
          <tr>
            <td colspan="2"><input type="button" onclick="dstcl()" style="width:100%;" value="declare "></td>
          </tr>
        </table>
      </div>
      <div class="col-sm-9 col-xs-8" style="display:none;" id="b5">
        <table align="center" classs="table" style="width:50%;">
          <tr>
            <td><label><h4>Generate Registration</h4></label></td>
            <td><input type="button" onclick="regis()" value="Click Here To Generate" style="width:100%;height:100%;background-color:aqua;border-radius:8px;border-color:aqua;"></td>
          </tr>
        </table>
      </div>
      <div class="col-sm-9 col-xs-8" style="display:none;" id="b6">
        <table id="record_cont" align="center" >
        </table>
      </div>
      <div class="col-sm-9 col-xs-8" style="display:none;" id="b7">
        <form  action="admindb.php" method="post">
        <table class="table" style="width:50%;" align="center">
          <tr>
            <td colspan="2"><h1>Declare Dates</h1></td>
          </tr>
          <tr>
            <td><label>Declare Date For Semester</label></td>
            <td>
              <select name="dt[]" id="dt1" style="width:100%;">
                <option>--Select--</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
                <option value="4">Fourth</option>
                <option value="5">Fifth</option>
                <option value="6">Sixth</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label>Subject 1</label></td>
            <td><input type="date" name="dt11" id="sub1" style="width:100%;"></td>
          </tr>
          <tr>
            <td><label>Subject 2</label></td>
            <td><input type="date" name="dt12" id="sub2" style="width:100%;"></td>
          </tr>
          <tr>
            <td><label>Subject 3</label></td>
            <td><input type="date" name="dt13" id="sub3" style="width:100%;"></td>
          </tr>
          <tr>
            <td><label>Subject 4</label></td>
            <td><input type="date" name="dt14" id="sub4" style="width:100%;"></td>
          </tr>
          <tr>
            <td><label>Subject 5</label></td>
            <td><input type="date" name="dt15" id="sub5" style="width:100%;"></td>
          </tr>
          <tr>
            <td colspan="2"><input type="button" name="st11" onclick="xamsdt()"style="width:100%;" value="declare "></td>
          </tr>
        </table>
        </form>
      </div>
      <div class="col-sm-9 col-xs-8" style="display:none;" id="b8">
        <form  action="admindb.php" method="post">
        <table class="table" style="width:50%;" align="center">
          <tr>
            <td colspan="2"><h1>Declare Dates</h1></td>
          </tr>
          <tr>
            <td><label>Declare Date For Semester</label></td>
            <td>
              <select name="dt[]" id="pt1" style="width:100%;">
                <option>--Select--</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
                <option value="4">Fourth</option>
                <option value="5">Fifth</option>
                <option value="6">Sixth</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label>Subject 1</label></td>
            <td><input type="text" name="dt11" id="sub1pt" style="width:100%;" placeholder="HH.mm am/pm To HH.mm am/pm"></td>
          </tr>
          <tr>
            <td><label>Subject 2</label></td>
            <td><input type="text" name="dt12" id="sub2pt" style="width:100%;" placeholder="HH.mm am/pm To HH.mm am/pm"></td>
          </tr>
          <tr>
            <td><label>Subject 3</label></td>
            <td><input type="text" name="dt13" id="sub3pt" style="width:100%;" placeholder="HH.mm am/pm To HH.mm am/pm"></td>
          </tr>
          <tr>
            <td><label>Subject 4</label></td>
            <td><input type="text" name="dt14" id="sub4pt" style="width:100%;" placeholder="HH.mm am/pm To HH.mm am/pm"></td>
          </tr>
          <tr>
            <td><label>Subject 5</label></td>
            <td><input type="text" name="dt15" id="sub5pt" style="width:100%;" placeholder="HH.mm am/pm To HH.mm am/pm"></td>
          </tr>
          <tr>
            <td colspan="2"><input type="button" name="pt11" onclick="paprtm()"style="width:100%;" value="declare "></td>
          </tr>
        </table>
        </form>
      </div>
    </div>
  </div><br>
  <footer class="container" style="height:40px;background-color:black;border-radius:4px;">

    <p style="color:white;text-align:center;">© 2019 <a href="tanweer.php" style="text-decoration:none;color:white;">Tanweer</a>. All Rights Reserved.</p>
  </footer><br>
  </body>
  <script type="text/javascript">
    function updatesd()
    {
      document.getElementById('b0').style.display="none";
      document.getElementById('b1').style.display="block";
      document.getElementById('b2').style.display="none";
      document.getElementById('b3').style.display="none";
      document.getElementById('b4').style.display="none";
      document.getElementById('b5').style.display="none";
      document.getElementById('b6').style.display="none";
      document.getElementById('b8').style.display="none";
      document.getElementById('b7').style.display="none";
    }
    function instmarks() {
      document.getElementById('b0').style.display="none";
      document.getElementById('b1').style.display="none";
      document.getElementById('b2').style.display="block";
      document.getElementById('b3').style.display="none";
      document.getElementById('b4').style.display="none";
      document.getElementById('b5').style.display="none";
      document.getElementById('b6').style.display="none";
      document.getElementById('b8').style.display="none";
      document.getElementById('b7').style.display="none";
    }
    function updatemarks(){
      document.getElementById('b0').style.display="none";
      document.getElementById('b1').style.display="none";
      document.getElementById('b2').style.display="none";
      document.getElementById('b3').style.display="block";
      document.getElementById('b4').style.display="none";
      document.getElementById('b5').style.display="none";
      document.getElementById('b6').style.display="none";
      document.getElementById('b8').style.display="none";
      document.getElementById('b7').style.display="none";
    }
    function dates() {
      document.getElementById('b0').style.display="none";
      document.getElementById('b1').style.display="none";
      document.getElementById('b2').style.display="none";
      document.getElementById('b3').style.display="none";
      document.getElementById('b4').style.display="block";
      document.getElementById('b5').style.display="none";
      document.getElementById('b6').style.display="none";
      document.getElementById('b8').style.display="none";
      document.getElementById('b7').style.display="none";
    }
    function regen() {
      document.getElementById('b0').style.display="none";
      document.getElementById('b1').style.display="none";
      document.getElementById('b2').style.display="none";
      document.getElementById('b3').style.display="none";
      document.getElementById('b4').style.display="none";
      document.getElementById('b5').style.display="block";
      document.getElementById('b6').style.display="none";
      document.getElementById('b8').style.display="none";
      document.getElementById('b7').style.display="none";
    }
    function msg() {
      document.getElementById('b0').style.display="none";
      document.getElementById('b1').style.display="none";
      document.getElementById('b2').style.display="none";
      document.getElementById('b3').style.display="none";
      document.getElementById('b4').style.display="none";
      document.getElementById('b5').style.display="none";
      document.getElementById('b6').style.display="block";
      document.getElementById('b8').style.display="none";
      document.getElementById('b7').style.display="none";
    }
    function idt() {
      document.getElementById('b0').style.display="none";
      document.getElementById('b1').style.display="none";
      document.getElementById('b2').style.display="none";
      document.getElementById('b3').style.display="none";
      document.getElementById('b4').style.display="none";
      document.getElementById('b5').style.display="none";
      document.getElementById('b6').style.display="none";
      document.getElementById('b7').style.display="block";
      document.getElementById('b8').style.display="none";
    }
    function pt() {
      document.getElementById('b0').style.display="none";
      document.getElementById('b1').style.display="none";
      document.getElementById('b2').style.display="none";
      document.getElementById('b3').style.display="none";
      document.getElementById('b4').style.display="none";
      document.getElementById('b5').style.display="none";
      document.getElementById('b6').style.display="none";
      document.getElementById('b7').style.display="none";
      document.getElementById('b8').style.display="block";
    }
    function upd()
    {
      var regno = document.getElementById('regno1').value;
      var sem = document.getElementById('sem1').value;
      var upval = document.getElementById('upval').value;
      $.ajax({
        url:"updatedtl.php",
        type:"post",
        data:{regno: regno, sem: sem, upval: upval},
        success:function(data,status){
        window.alert("Updated");
      }
      });
    }
    function updtmarks()
    {
      var reg = document.getElementById('mkupdtreg').value;
      var sem = document.getElementById('mkupdtsem').value;
      var subject = document.getElementById('mkupdtsub').value;
      var val = document.getElementById('mkupdtval').value;
      $.ajax({
        url:"updtmarks.php",
        type:"post",
        data:{reg: reg,sem: sem,subject: subject,val: val},
        success:function(data,status){
        window.alert(data);
      }
      });
  }
    function dstcl()
    {
      var seid = document.getElementById('dst').value;
      var dts1 = document.getElementById('fromdt').value;
      var dts2 = document.getElementById('todt').value;
      $.ajax({
        url:"exam.php",
        type:"post",
        data:{seid :seid,dts1 :dts1,dts2 :dts2},
        success:function(data,status){
        window.alert("Updated");
      }
      });
    }
    function xamsdt()
    {
      var semid = document.getElementById('dt1').value;
      var subdt1 = document.getElementById('sub1').value;
      var subdt2 = document.getElementById('sub2').value;
      var subdt3 = document.getElementById('sub3').value;
      var subdt4 = document.getElementById('sub4').value;
      var subdt5 = document.getElementById('sub5').value;
      $.ajax({
        url:"papersdt.php",
        type:"post",
        data:{semid :semid,subdt1 :subdt1,subdt2 :subdt2,subdt3 :subdt3,subdt4 :subdt4,subdt5 :subdt5},
        success:function(data,status){
        window.alert("Updated");
      }
      });
    }
    function mkinstt()
    {
      alert('hello there');
      $.ajax({
        url:"marksinput.php",
        type:"post",
        data:$('instmrks').serialize(),
        success:function(){
        window.alert("Inserted");
      }
      });
    }
    function paprtm()
    {
      var semid = document.getElementById('pt1').value;
      var subdt1 = document.getElementById('sub1pt').value;
      var subdt2 = document.getElementById('sub2pt').value;
      var subdt3 = document.getElementById('sub3pt').value;
      var subdt4 = document.getElementById('sub4pt').value;
      var subdt5 = document.getElementById('sub5pt').value;
      $.ajax({
        url:"papertm.php",
        type:"post",
        data:{semid :semid,subdt1 :subdt1,subdt2 :subdt2,subdt3 :subdt3,subdt4 :subdt4,subdt5 :subdt5},
        success:function(data,status){
        window.alert("Updated");
      }
      });
    }
    function regis()
    {
      var regno = 1;
      $.ajax({
        url:"regen.php",
        type:"post",
        data:{regno: regno},
        success:function(data,status){
        window.alert("Registration Numbers generated");
      }
      });
    }
    function del(dl)
    {
      $.ajax({
        url:"dele.php",
        type:"post",
        data:{dl:dl},
        success:function(data,status){
        readmsg();
      }
      });
    }
    $(document).ready(function(){
    readmsg();
    });
    function readmsg() {
      var readrecord = "readrecord";
      $.ajax({
        url:"messagesss.php",
        type:"post",
        data:{readrecord:readrecord},
        success:function(data,status){
          $('#record_cont').html(data);
        }
      });
    }

  </script>
  </html>
  <?php

   ?>
  <?php
    if(isset($_POST["ss15"]))
    {
      unset($usr);
      session_destroy();
      header("Refresh:0;url=../resources/admin.php");
    }
   ?>
