<?php
$con=mysqli_connect("localhost","root","","try");

  $reg=$_POST["reg"];
  $sem=$_POST["sem"];
  $subject=$_POST["subject"];
  $val=$_POST["val"];

    $ret="UPDATE `std_marks_sem1` SET `$subject` = '{$val}' WHERE `reg_no` = '{$reg}'";
    if(mysqli_query($con,$ret))
    {
      echo $subject." is Updated with ".$val." marks.";
    }
    else {
      echo "<script>window.alert('Not Updated')</script>";
    }

?>
