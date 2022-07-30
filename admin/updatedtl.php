<?php
$con=mysqli_connect("localhost","root","","try");
if (isset($_POST["regno"])) {
  $reg=$_POST["regno"];
  $val=$_POST["upval"];
  $offf=$_POST["upval"];
  $semem=$_POST["sem"];
  if($semem=='reg_no')
  {
    $ret="UPDATE `student_detail` SET `{$semem}` = '{$offf}' WHERE `name` = '{$reg}'";
    if(mysqli_query($con,$ret))
    {
      echo "<script>window.alert('Updated')</script>";
    }
    else {
      echo "<script>window.alert('Not Updated')</script>";
    }
  }
  else {
  $ret="UPDATE `student_detail` SET `{$semem}` = '{$offf}' WHERE `reg_no` = '{$reg}'";
  if(mysqli_query($con,$ret))
  {
    echo "<script>window.alert('Updated')</script>";
  }
  else {
    echo "<script>window.alert('Not Updated')</script>";
  }
}
}
?>
