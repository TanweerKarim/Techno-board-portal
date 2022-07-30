<?php
  $con=mysqli_connect("localhost","root","","try");
  if(isset($_POST["semid"]))
  {
  $semid=$_POST["semid"];
  $sub1=$_POST["subdt1"];
  $sub2=$_POST["subdt2"];
  $sub3=$_POST["subdt3"];
  $sub4=$_POST["subdt4"];
  $sub5=$_POST["subdt5"];
  $qur="UPDATE `examination_dt` SET `sub1t`='{$sub1}',`sub2t`='{$sub2}',`sub3t`='{$sub3}',`sub4t`='{$sub4}',`sub5t`='{$sub5}' WHERE dt_id={$semid}";
  if(mysqli_query($con,$qur))
  {
    echo "<script>alert('inserted');</script>";
  }
}
 ?>
