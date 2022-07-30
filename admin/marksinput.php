<?php
$con=mysqli_connect("localhost","root","","try");
if (isset($_POST["he1"])) {
  $reg = $_POST["mkreg"];
  $sem = implode($_POST["sam"]);
  $branch = "SELECT branch from regno_dcl";
  $run = mysqli_query($con,$branch);
  $brn = mysqli_fetch_array($run);
  echo "<script>alert('in here');</script>";
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
  elseif ($sem='Second') {
    $sql="INSERT INTO `std_marks_sem2`(`reg_no`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub6t`, `sub1p`, `sub2p`, `sub1s`, `sub2s`, `sub3s`, `sub4s`)
    VALUES ('{$reg}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub6t}','{$sub1p}','{$sub2p}','{$sub1s}','{$sub2s}','{$sub3s}','{$sub4s}')";
     if(mysqli_query($con,$sql))
     {
       echo "<script>alert('Inserted');</script>";
     }
  }
  elseif ($sem='Third') {
    if($brn[0]=='Automobile Engineering'){
    $sql="INSERT INTO `std_marks_sem`(`reg_no`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub3p`, `sub1s`, `sub2s`)
    VALUES ('{$reg}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}','{$sub3p}','{$sub1s}','{$sub2s}')";
     if(mysqli_query($con,$sql))
     {
       echo "<script>alert('Inserted');</script>";
     }
   }
  }
}
 ?>
