<?php
session_start();
?>
<?php
$con=mysqli_connect("localhost","root","","try");
$sql123="select * from examdt where id=2";
$query=mysqli_query($con,$sql123);
$fetchhh=mysqli_fetch_array($query);
$fromdt=date("d-m-yy");
echo $fromdt;
print_r($fetchhh);
if ($fromdt >= $fetchhh[1] && $fromdt <= $fetchhh[2]) {
  echo "<script>window.location.href='registration.php';
  </script>";
}
else {
echo "<script>window.alert('Form fillup date is over');
window.location.href='../index.html';
</script>";
}
?>
