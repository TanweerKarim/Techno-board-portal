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
$fromdt=date("d-m-yy");

if($fromdt >= $fetchhh[1] && $fromdt <= $fetchhh[2])
{
  if($sem==$fetch[2])
  {
    if($fetch[2]=='First')
    {
    $stdtl="select * from admit_data_sem1 where reg_no = '{$reg}'";
    $query=mysqli_query($con,$stdtl);
    $fetch33=mysqli_fetch_array($query);
    if($fetch33[24]=='')
    {
    echo "<script>window.location.href='feedback2.php';
    </script>";
    }
    else {
      echo "<script>window.alert('You have already filled the form');
      window.location.href='../formfill.php';
      </script>";
    }
    }
    else if($fetch[2]=='Second')
    {
    $stdtl="select * from admit_data_sem2 where reg_no = '{$reg}'";
    $query=mysqli_query($con,$stdtl);
    $fetch33=mysqli_fetch_array($query);
    if($fetch33[24]=='')
    {
    echo "<script>window.location.href='feedback2.php';
    </script>";
    }
    else {
      echo "<script>window.alert('You have already filled the form');
      window.location.href='../formfill.php';
      </script>";
    }
    }
    else if($fetch[2]=='Third')
    {
    $stdtl="select * from admit_data_sem3 where reg_no = '{$reg}'";
    $query=mysqli_query($con,$stdtl);
    $fetch33=mysqli_fetch_array($query);
    if($fetch33[24]=='')
    {
    echo "<script>window.location.href='feedback2.php';
    </script>";
    }
    else {
      echo "<script>window.alert('You have already filled the form');
      window.location.href='../formfill.php';
      </script>";
    }
    }
    else if($fetch[2]=='Fourth')
    {
    $stdtl="select * from admit_data_sem4 where reg_no = '{$reg}'";
    $query=mysqli_query($con,$stdtl);
    $fetch33=mysqli_fetch_array($query);
    if($fetch33[24]=='')
    {
    echo "<script>window.location.href='feedback2.php';
    </script>";
    }
    else {
      echo "<script>window.alert('You have already filled the form');
      window.location.href='../formfill.php';
      </script>";
    }
    }
    else if($fetch[2]=='Fifth')
    {
    $stdtl="select * from admit_data_sem5 where reg_no = '{$reg}'";
    $query=mysqli_query($con,$stdtl);
    $fetch33=mysqli_fetch_array($query);
    if($fetch33[24]=='')
    {
    echo "<script>window.location.href='feedback2.php';
    </script>";
    }
    else {
      echo "<script>window.alert('You have already filled the form');
      window.location.href='../formfill.php';
      </script>";
    }
    }
    else
    {
    $stdtl="select * from admit_data_sem6 where reg_no = '{$reg}'";
    $query=mysqli_query($con,$stdtl);
    $fetch33=mysqli_fetch_array($query);
    if($fetch33[24]=='')
    {
    echo "<script>window.location.href='feedback2.php';
    </script>";
    }
    else {
      echo "<script>window.alert('You have already filled the form');
      window.location.href='../formfill.php';
      </script>";
    }
    }

  }
  else {
    echo"<script>window.alert('Enter correct Semester');
    window.location.href='../formfill.php';
    </script>";
  }
}
else {
echo "<script>window.alert('Form fillup date is over');
window.location.href='../formfill.php';
</script>";
}
?>
