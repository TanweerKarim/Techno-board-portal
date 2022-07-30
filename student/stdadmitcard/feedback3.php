<?php
session_start();
?>
<?php
$con=mysqli_connect("localhost","root","","try");
$sql123="select * from examdt where id=3";
$sem = implode($_POST['sem']);
$reg=$_POST['t1'];
$stdtl="select * from regno_dcl where reg_no = '{$reg}'";
$query=mysqli_query($con,$stdtl);
$fetch=mysqli_fetch_array($query);
$_SESSION['reg']=$fetch[0];
$_SESSION['name']=$fetch[1];
$_SESSION['sem']=$fetch[2];
$_SESSION['email']=$fetch[7];
$_SESSION['num']=$fetch[6];
$queryyy=mysqli_query($con,$sql123);
$fetchhh=mysqli_fetch_array($queryyy);
$fromdt=date("d-m-yy");
$stdtl="select * from admit_form_data where reg_no = '{$reg}'";
$query=mysqli_query($con,$stdtl);
$fetch33=mysqli_fetch_array($query);
if($fromdt >= $fetchhh[1] && $fromdt <= $fetchhh[2])
{
  if($sem==$fetch[2])
  {
    echo "<script>window.location.href='admitcard.php';
    </script>";

  }
  else {
    echo"<script>window.alert('Enter correct Semester');
    window.location.href='../admit.php';
    </script>";
  }
}
else {
echo "<script>window.alert('Admit Card date is over');
window.location.href='../admit.php';
</script>";
}
?>
