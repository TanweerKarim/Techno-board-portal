<?php
  $con=mysqli_connect("localhost","root","","try");
  if(isset($_POST['dl']))
  {
  $id=$_POST['dl'];
  $qur="DELETE from feedback where id = '$id'";
  $qurr=mysqli_query($con,$qur);
 }
 ?>
