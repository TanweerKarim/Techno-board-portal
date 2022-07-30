<?php
$con=mysqli_connect("localhost","root","","try");
if(isset($_POST["seid"]))
{
  $foorr=$_POST["seid"];
  $dt1=$_POST["dts1"];
  $dt2=$_POST["dts2"];
  $sql="UPDATE `examdt` SET `fromdt`={$dt1},`todt`={$dt2} WHERE `id`='1'";
  if(mysqli_query($con,$sql))
  {
    echo "<script>window.alert('Inserted');</script>";
  }
}
 ?>
