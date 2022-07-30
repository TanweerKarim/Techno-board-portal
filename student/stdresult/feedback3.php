<?php
session_start();
?>
<?php
$con=mysqli_connect("localhost","root","","try");
$sql123="select * from examdt";
$sem = implode($_POST['semem']);
$reg=$_POST['t1'];
$stdtl="select * from student_detail where reg_no = '{$reg}'";
$query=mysqli_query($con,$stdtl);
$fetch=mysqli_fetch_array($query);
$_SESSION['reg']=$fetch[0];
$_SESSION['name']=$fetch[1];
$_SESSION['sem']=$sem;
$_SESSION['email']=$fetch[7];
$_SESSION['num']=$fetch[8];
$queryyy=mysqli_query($con,$sql123);
$fetchhh=mysqli_fetch_array($queryyy);
$fromdt=date("Y-m-d");
if(strtotime($fromdt)>strtotime($fetchhh[1])&&strtotime($fromdt)<strtotime($fetchhh[2]))
{
  if($sem==$fetch[2])
  {
    echo "<script>window.location.href='feedback2.php';
    </script>";
  }
  else {
    echo"<script>window.alert('Enter correct Semester');
    window.location.href='formfill.php';
    </script>";
  }
}
else {
echo "<script>window.alert('Form fillup date is over');
window.location.href='formfill.php';
</script>";
}
?>
