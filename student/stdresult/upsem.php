<?php
  $con=mysqli_connect("localhost","root","","try");
  if(isset($_POST['dl']))
  {
  $id=$_POST['dl'];
  $cnt=$_POST['cnt'];
  $sem=$_POST['sem'];
  if($sem=='First')
  {
  if($cnt>=0&&$cnt<=3)
  {
  $qur="UPDATE `regno_dcl` SET `sem`='Second' where reg_no = '{$id}'";
  $qurr=mysqli_query($con,$qur);
  }
  $qur1="UPDATE `fail_sub_count` SET `sem1`={$cnt} where reg_no = '{$id}'";
  $qurr1=mysqli_query($con,$qur1);
  }
  if($sem=='Second')
  {
  if($cnt>=0&&$cnt<=3)
  {
  $qur="UPDATE `regno_dcl` SET `sem`='Third' where reg_no = '{$id}'";
  $qurr=mysqli_query($con,$qur);
  }
  $qur1="UPDATE `fail_sub_count` SET `sem2`={$cnt} where reg_no = '{$id}'";
  $qurr1=mysqli_query($con,$qur1);
  }
  if($sem=='Third')
  {
  if($cnt>=0&&$cnt<=3)
  {
  $qur="UPDATE `regno_dcl` SET `sem`='Fourth' where reg_no = '{$id}'";
  $qurr=mysqli_query($con,$qur);
  }
  $qur1="UPDATE `fail_sub_count` SET `sem3`={$cnt} where reg_no = '{$id}'";
  $qurr1=mysqli_query($con,$qur1);
  }
  if($sem=='Fourth')
  {
  if($cnt>=0&&$cnt<=3)
  {
  $qur="UPDATE `regno_dcl` SET `sem`='Fifth' where reg_no = '{$id}'";
  $qurr=mysqli_query($con,$qur);
  }
  $qur1="UPDATE `fail_sub_count` SET `sem4`={$cnt} where reg_no = '{$id}'";
  $qurr1=mysqli_query($con,$qur1);
  }
  if($sem=='Fifth')
  {
  if($cnt>=0&&$cnt<=3)
  {
  $qur="UPDATE `regno_dcl` SET `sem`='Sixth' where reg_no = '{$id}'";
  $qurr=mysqli_query($con,$qur);
  }
  $qur1="UPDATE `fail_sub_count` SET `sem5`={$cnt} where reg_no = '{$id}'";
  $qurr1=mysqli_query($con,$qur1);
  }
  else if($sem=='Sixth')
  {
  $qur1="UPDATE `fail_sub_count` SET `sem6`={$cnt} where reg_no = '{$id}'";
  $qurr1=mysqli_query($con,$qur1);
  }
}
 ?>
