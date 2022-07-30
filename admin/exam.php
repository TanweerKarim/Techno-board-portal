<?php
$con=mysqli_connect("localhost","root","","try");
if(isset($_POST["seid"]))
{
  $foorr=$_POST["seid"];
  $dt1=$_POST["dts1"];
  $dt2=$_POST["dts2"];
  $sql="UPDATE `examdt` SET `fromdt`='{$dt1}' WHERE `id`='{$foorr}'";
  $sql1="UPDATE `examdt` SET `todt`='{$dt2}' WHERE `id`='{$foorr}'";
  if(mysqli_query($con,$sql)&&mysqli_query($con,$sql1))
  {
    echo "<script>window.alert('Inserted');</script>";
  }
}
 ?>
