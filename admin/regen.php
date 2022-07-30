<?php

  if(isset($_POST["regno"]))
  {
    $con=mysqli_connect("localhost","root","","try");
    $qur11="SELECT * from regcode where 1";
    $sql11=mysqli_query($con,$qur11);
    $fetch11=mysqli_fetch_array($sql11);
    $sasa=$fetch11[0]+1000000000;
    $qur2="ALTER TABLE `regno_dcl` AUTO_INCREMENT =$sasa";
    if(mysqli_query($con,$qur2))
    {
      echo "<script>alert('Done')</script>";
    }
    $qur3="UPDATE `regcode` SET `regid`=$sasa WHERE id=1";
    $qur="INSERT into regno_dcl (name,sem,branch,college,adno,phone_no,email,dob,gender,father_name,mname,student_photo) SELECT student_name,sem,branch,institute_name,adhar_no,mobile_no,email,dob,gender,father_name,mname,student_photo FROM student_reg_dtl ORDER BY branch,student_name";
    if(mysqli_query($con,$qur))
    {
      if(mysqli_query($con,$qur3))
      {
        echo "hay";
      }
      echo "<script>window.alert('Inserted');</script>";
    }
    else {
      echo "<script>window.alert('Not Inserted');</script>";
    }
  }
   ?>
