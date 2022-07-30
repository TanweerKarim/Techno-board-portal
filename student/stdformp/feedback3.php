<?php
session_start();
?>
<?php
$con=mysqli_connect("localhost","root","","try");
$sql123="select * from examdt";
$sem = implode($_POST['semem']);
$reg=$_POST['t1'];
$stdtl="select * from regno_dcl where reg_no = '{$reg}'";
$query=mysqli_query($con,$stdtl);
$fetch=mysqli_fetch_array($query);
$_SESSION['reg']=$fetch[0];
$_SESSION['name']=$fetch[1];
$_SESSION['sem']=$sem;
$_SESSION['email']=$fetch[7];
$_SESSION['num']=$fetch[6];
$queryyy=mysqli_query($con,$sql123);
$fetchhh=mysqli_fetch_array($queryyy);
$fromdt=date("Y-m-d");
$stdtl="select * from admit_form_data where reg_no = '{$reg}'";
$query=mysqli_query($con,$stdtl);
$fetch33=mysqli_fetch_array($query);
if(strtotime($fromdt)>strtotime($fetchhh[1])&&strtotime($fromdt)<strtotime($fetchhh[2]))
{
  if($sem==$fetch[2])
  {
    echo "<script>window.location.href='formfill2.php';
    </script>";

  }
  else {
    echo"<script>window.alert('Enter correct Semester');
    window.location.href='../formprint.php';
    </script>";
  }
}
else {
echo "<script>window.alert('Form fillup date is over');
window.location.href='../formprint.php';
</script>";
}
?>
