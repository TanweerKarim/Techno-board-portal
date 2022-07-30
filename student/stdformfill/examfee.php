<?php
session_start();
$con=mysqli_connect("localhost","root","","try");
 ?>
<?php
$reg=$_SESSION["reg"];
$sem=$_POST["sem"];
$name=$_POST["name"];
$fname=$_POST["fname"];
$clgname=$_POST["clgname"];
$branch=$_POST["branch"];
if($sem=='First')
{
  $sub1t=$_POST['sub1t'];
  $sub2t=$_POST['sub2t'];
  $sub3t=$_POST['sub3t'];
  $sub4t=$_POST['sub4t'];
  $sub5t=$_POST['sub5t'];
  $sub6t=$_POST['sub6t'];
  $sub1p=$_POST['sub1p'];
  $sub2p=$_POST['sub2p'];
  $sub1s=$_POST['sub1s'];
  $sub2s=$_POST['sub2s'];
  $sub3s=$_POST['sub3s'];
  $sub4s=$_POST['sub4s'];
  $_SESSION['reg']=$reg;
  $_SESSION['sem']=$sem;
$sql="INSERT INTO `admit_form_data`
(`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`,`sub6t`, `sub1p`, `sub2p`, `sub1s`, `sub2s`, `sub3s`, `sub4s`)
VALUES
('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub6t}','{$sub1p}','{$sub2p}',
'{$sub1s}','{$sub2s}','{$sub3s}','{$sub4s}')";
if(mysqli_query($con,$sql))
{
  echo "<script>alert('data inserted')</script>";
}
if(mysqli_query($con,$sql))
{
  echo "<script>alert('data not inserted')</script>";
}
}
if($sem=='Second')
{
  $sub1t=$_POST['sub1t'];
  $sub2t=$_POST['sub2t'];
  $sub3t=$_POST['sub3t'];
  $sub4t=$_POST['sub4t'];
  $sub5t=$_POST['sub5t'];
  $sub1p=$_POST['sub1p'];
  $sub2p=$_POST['sub2p'];
  $sub1s=$_POST['sub1s'];
  $sub2s=$_POST['sub2s'];
  $sub3s=$_POST['sub3s'];
  $_SESSION['reg']=$reg;
  $_SESSION['sem']=$sem;
$sql="INSERT INTO `admit_data_sem2`
(`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`, `sub1s`, `sub2s`, `sub3s`)
VALUES
('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}',
'{$sub1s}','{$sub2s}','{$sub3s}')";
if(mysqli_query($con,$sql))
{
  echo "<script>alert('data inserted')</script>";
}
if(mysqli_query($con,$sql))
{
  echo "<script>alert('data not inserted')</script>";
}
}
if($sem=='Third')
{
  if($branch=='Automobile Engineering')
  {
  $sub1t=$_POST['sub1t'];
  $sub2t=$_POST['sub2t'];
  $sub3t=$_POST['sub3t'];
  $sub4t=$_POST['sub4t'];
  $sub5t=$_POST['sub5t'];
  $sub1p=$_POST['sub1p'];
  $sub2p=$_POST['sub2p'];
  $sub3p=$_POST['sub3p'];
  $sub1s=$_POST['sub1s'];
  $sub2s=$_POST['sub2s'];
  $_SESSION['reg']=$reg;
  $_SESSION['sem']=$sem;
  $sql="INSERT INTO `admit_data_sem3`
  (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub3p`, `sub1s`, `sub2s`)
  VALUES
  ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}','{$sub3p}',
    '{$sub1s}','{$sub2s}')";
    if(mysqli_query($con,$sql))
    {
      echo "<script>alert('data inserted');</script>";
    }
    else
    {
      echo "<script>alert('data not inserted');</script>";
    }
  }
  if($branch=='Civil Engineering')
  {
  $sub1t=$_POST['sub1t'];
  $sub2t=$_POST['sub2t'];
  $sub3t=$_POST['sub3t'];
  $sub4t=$_POST['sub4t'];
  $sub5t=$_POST['sub5t'];
  $sub1p=$_POST['sub1p'];
  $sub2p=$_POST['sub2p'];
  $sub1s=$_POST['sub1s'];
  $sub2s=$_POST['sub2s'];
  $_SESSION['reg']=$reg;
  $_SESSION['sem']=$sem;
  $sql="INSERT INTO `admit_data_sem3`
  (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`, `sub1s`, `sub2s`)
  VALUES
  ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}',
    '{$sub1s}','{$sub2s}')";
    if(mysqli_query($con,$sql))
    {
      echo "<script>alert('data inserted')</script>";
    }
    else
    {
      echo "<script>alert('data not inserted')</script>";
    }
  }
  if($branch=='Computer Science Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1p=$_POST['sub1p'];
    $sub2p=$_POST['sub2p'];
    $sub3p=$_POST['sub3p'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem3`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub3p`, `sub1s`, `sub2s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}','{$sub3p}',
      '{$sub1s}','{$sub2s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
  if($branch=='Electrical Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1p=$_POST['sub1p'];
    $sub2p=$_POST['sub2p'];
    $sub3p=$_POST['sub3p'];
    $sub4p=$_POST['sub4p'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem3`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub3p`,`sub4p`, `sub1s`, `sub2s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}','{$sub3p}','{$sub4p}',
      '{$sub1s}','{$sub2s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
  if($branch=='Electronics And Communication Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1p=$_POST['sub1p'];
    $sub2p=$_POST['sub2p'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem3`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`, `sub1s`, `sub2s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}',
      '{$sub1s}','{$sub2s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
  if($branch=='Mechanical Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1p=$_POST['sub1p'];
    $sub2p=$_POST['sub2p'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem3`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`, `sub1s`, `sub2s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}',
      '{$sub1s}','{$sub2s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
}
if($sem=='Fourth')
{
  if($branch=='Automobile Engineering')
  {
  $sub1t=$_POST['sub1t'];
  $sub2t=$_POST['sub2t'];
  $sub3t=$_POST['sub3t'];
  $sub4t=$_POST['sub4t'];
  $sub5t=$_POST['sub5t'];
  $sub1p=$_POST['sub1p'];
  $sub2p=$_POST['sub2p'];
  $sub3p=$_POST['sub3p'];
  $sub4p=$_POST['sub4p'];
  $sub1s=$_POST['sub1s'];
  $sub2s=$_POST['sub2s'];
  $_SESSION['reg']=$reg;
  $_SESSION['sem']=$sem;
  $sql="INSERT INTO `admit_data_sem4`
  (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub3p`, `sub4p`, `sub1s`, `sub2s`)
  VALUES
  ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}','{$sub3p}',
  '{$sub4p}','{$sub1s}','{$sub2s}')";
    if(mysqli_query($con,$sql))
    {
      echo "<script>alert('data inserted');</script>";
    }
    else
    {
      echo "<script>alert('data not inserted');</script>";
    }
  }
  if($branch=='Civil Engineering')
  {
  $sub1t=$_POST['sub1t'];
  $sub2t=$_POST['sub2t'];
  $sub3t=$_POST['sub3t'];
  $sub4t=$_POST['sub4t'];
  $sub5t=$_POST['sub5t'];
  $sub1p=$_POST['sub1p'];
  $sub2p=$_POST['sub2p'];
  $sub3p=$_POST['sub3p'];
  $sub1s=$_POST['sub1s'];
  $sub2s=$_POST['sub2s'];
  $_SESSION['reg']=$reg;
  $_SESSION['sem']=$sem;
  $sql="INSERT INTO `admit_data_sem4`
  (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`, `sub3p`, `sub1s`, `sub2s`)
  VALUES
  ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}',
    '{$sub3p}','{$sub1s}','{$sub2s}')";
    if(mysqli_query($con,$sql))
    {
      echo "<script>alert('data inserted')</script>";
    }
    else
    {
      echo "<script>alert('data not inserted')</script>";
    }
  }
  if($branch=='Computer Science Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1p=$_POST['sub1p'];
    $sub2p=$_POST['sub2p'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $sub3s=$_POST['sub3s'];
    $sub4s=$_POST['sub4s'];
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem4`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub3p`, `sub1s`, `sub2s`, `sub3s`, `sub4s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}','{$sub3p}',
      '{$sub1s}','{$sub2s}','{$sub3s}','{$sub4s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
  if($branch=='Electrical Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1p=$_POST['sub1p'];
    $sub2p=$_POST['sub2p'];
    $sub3p=$_POST['sub3p'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem4`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub3p`, `sub1s`, `sub2s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}','{$sub3p}',
      '{$sub1s}','{$sub2s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
  if($branch=='Electronics And Communication Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1p=$_POST['sub1p'];
    $sub2p=$_POST['sub2p'];
    $sub3p=$_POST['sub3p'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $sub3s=$_POST['sub3s'];
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem3`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`, `sub3p`, `sub1s`, `sub2s`, `sub3s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}',
      '{$sub3p}','{$sub1s}','{$sub2s}','{$sub3s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
  if($branch=='Mechanical Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1p=$_POST['sub1p'];
    $sub2p=$_POST['sub2p'];
    $sub3p=$_POST['sub3p'];
    $sub4p=$_POST['sub4p'];
    $sub5p=$_POST['sub5p'];
    $sub1s=$_POST['sub1s'];
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem3`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`, `sub3p`,`sub4p`, `sub5p`, `sub1s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}',
      '{$sub3p}','{$sub4p}','{$sub5p}','{$sub1s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
}
if($sem=='Fifth')
{
  if($branch=='Automobile Engineering')
  {
  $sub1t=$_POST['sub1t'];
  $sub2t=$_POST['sub2t'];
  $sub3t=$_POST['sub3t'];
  $sub4t=$_POST['sub4t'];
  $sub5t=$_POST['sub5t'];
  $sub1p=$_POST['sub1p'];
  $sub2p=$_POST['sub2p'];
  $sub3p=$_POST['sub3p'];
  $sub1s=$_POST['sub1s'];
  $sub2s=$_POST['sub2s'];
  $sub3s=$_POST['sub3s'];
  $_SESSION['reg']=$reg;
  $_SESSION['sem']=$sem;
  $sql="INSERT INTO `admit_data_sem5`
  (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub3p`,`sub4p`, `sub1s`, `sub2s`)
  VALUES
  ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}','{$sub3p}',
  '{$sub1s}','{$sub2s}','{$sub3s}')";
    if(mysqli_query($con,$sql))
    {
      echo "<script>alert('data inserted');</script>";
    }
    else
    {
      echo "<script>alert('data not inserted');</script>";
    }
  }
  if($branch=='Civil Engineering')
  {
  $sub1t=$_POST['sub1t'];
  $sub2t=$_POST['sub2t'];
  $sub3t=$_POST['sub3t'];
  $sub4t=$_POST['sub4t'];
  $sub5t=$_POST['sub5t'];
  $sub1p=$_POST['sub1p'];
  $sub2p=$_POST['sub2p'];
  $sub1s=$_POST['sub1s'];
  $sub2s=$_POST['sub2s'];
  $sub3s=$_POST['sub3s'];
  $_SESSION['reg']=$reg;
  $_SESSION['sem']=$sem;
  $sql="INSERT INTO `admit_data_sem5`
  (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub1s`, `sub2s`, `sub3s`)
  VALUES
  ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}',
    '{$sub1s}','{$sub2s}','{$sub3s}')";
    if(mysqli_query($con,$sql))
    {
      echo "<script>alert('data inserted')</script>";
    }
    else
    {
      echo "<script>alert('data not inserted')</script>";
    }
  }
  if($branch=='Computer Science Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1p=$_POST['sub1p'];
    $sub2p=$_POST['sub2p'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $sub3s=$_POST['sub3s'];
    $sub4s=$_POST['sub4s'];
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem5`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub3p`, `sub1s`, `sub2s`, `sub3s`, `sub4s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}','{$sub3p}',
      '{$sub1s}','{$sub2s}','{$sub3s}','{$sub4s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
  if($branch=='Electrical Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1p=$_POST['sub1p'];
    $sub2p=$_POST['sub2p'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $sub3s=$_POST['sub3s'];
    $sub4s=$_POST['sub4s'];
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem5`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub3p`, `sub1s`, `sub2s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}',
      '{$sub1s}','{$sub2s}''{$sub3s}','{$sub4s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
  if($branch=='Electronics And Communication Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1p=$_POST['sub1p'];
    $sub2p=$_POST['sub2p'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $sub3s=$_POST['sub3s'];
    $sub4s=$_POST['sub4s'];
    $_SESSION['reg']=$reg;
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem5`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub3p`, `sub1s`, `sub2s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}',
      '{$sub1s}','{$sub2s}''{$sub3s}','{$sub4s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
  if($branch=='Mechanical Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1p=$_POST['sub1p'];
    $sub2p=$_POST['sub2p'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $sub3s=$_POST['sub3s'];
    $sub4s=$_POST['sub4s'];
    $_SESSION['reg']=$reg;
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem5`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub3p`, `sub1s`, `sub2s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}',
      '{$sub1s}','{$sub2s}''{$sub3s}','{$sub4s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
}
if($sem=='Sixth')
{
  if($branch=='Automobile Engineering')
  {
  $sub1t=$_POST['sub1t'];
  $sub2t=$_POST['sub2t'];
  $sub3t=$_POST['sub3t'];
  $sub4t=$_POST['sub4t'];
  $sub5t=$_POST['sub5t'];
  $sub1p=$_POST['sub1p'];
  $sub1s=$_POST['sub1s'];
  $sub2s=$_POST['sub2s'];
  $sub3s=$_POST['sub3s'];
  $sub4s=$_POST['sub4s'];
  $sub5s=$_POST['sub5s'];
  $_SESSION['reg']=$reg;
  $_SESSION['sem']=$sem;
  $sql="INSERT INTO `admit_data_sem6`
  (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub1s`, `sub2s` `sub3s`,`sub4s`,`sub5s`,)
  VALUES
  ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}'
  '{$sub1s}','{$sub2s}','{$sub3s}','{$sub4s}','{$sub5s}')";
    if(mysqli_query($con,$sql))
    {
      echo "<script>alert('data inserted');</script>";
    }
    else
    {
      echo "<script>alert('data not inserted');</script>";
    }
  }
  if($branch=='Civil Engineering')
  {
  $sub1t=$_POST['sub1t'];
  $sub2t=$_POST['sub2t'];
  $sub3t=$_POST['sub3t'];
  $sub4t=$_POST['sub4t'];
  $sub5t=$_POST['sub5t'];
  $sub1s=$_POST['sub1s'];
  $sub2s=$_POST['sub2s'];
  $sub3s=$_POST['sub3s'];
  $sub4s=$_POST['sub4s'];
  $sub5s=$_POST['sub5s'];
  $sub6s=$_POST['sub6s'];
  $_SESSION['reg']=$reg;
  $_SESSION['sem']=$sem;
  $sql="INSERT INTO `admit_data_sem6`
  (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`,`sub1s`, `sub2s`, `sub3s`,`sub4s`, `sub5s`, `sub6s`)
  VALUES
  ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}',
    '{$sub1s}','{$sub2s}','{$sub3s}','{$sub4s}','{$sub5s}','{$sub6s}')";
    if(mysqli_query($con,$sql))
    {
      echo "<script>alert('data inserted')</script>";
    }
    else
    {
      echo "<script>alert('data not inserted')</script>";
    }
  }
  if($branch=='Computer Science Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $sub3s=$_POST['sub3s'];
    $sub4s=$_POST['sub4s'];
    $sub5s=$_POST['sub5s'];
    $sub6s=$_POST['sub6s'];
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem6`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`,`sub1s`, `sub2s`, `sub3s`,`sub4s`, `sub5s`, `sub6s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}',
      '{$sub1s}','{$sub2s}','{$sub3s}','{$sub4s}','{$sub5s}','{$sub6s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
  if($branch=='Electrical Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $sub3s=$_POST['sub3s'];
    $sub4s=$_POST['sub4s'];
    $sub5s=$_POST['sub5s'];
    $sub6s=$_POST['sub6s'];
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem6`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`,`sub1s`, `sub2s`, `sub3s`,`sub4s`, `sub5s`, `sub6s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}',
      '{$sub1s}','{$sub2s}','{$sub3s}','{$sub4s}','{$sub5s}','{$sub6s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
  if($branch=='Electronics And Communication Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $sub3s=$_POST['sub3s'];
    $sub4s=$_POST['sub4s'];
    $sub5s=$_POST['sub5s'];
    $sub6s=$_POST['sub6s'];
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem6`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`,`sub1s`, `sub2s`, `sub3s`,`sub4s`, `sub5s`, `sub6s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}',
      '{$sub1s}','{$sub2s}','{$sub3s}','{$sub4s}','{$sub5s}','{$sub6s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
  if($branch=='Mechanical Engineering')
  {
    $sub1t=$_POST['sub1t'];
    $sub2t=$_POST['sub2t'];
    $sub3t=$_POST['sub3t'];
    $sub4t=$_POST['sub4t'];
    $sub5t=$_POST['sub5t'];
    $sub1p=$_POST['sub1p'];
    $sub2p=$_POST['sub2p'];
    $sub1s=$_POST['sub1s'];
    $sub2s=$_POST['sub2s'];
    $sub3s=$_POST['sub3s'];
    $sub4s=$_POST['sub4s'];
    $_SESSION['reg']=$reg;
    $_SESSION['reg']=$reg;
    $_SESSION['sem']=$sem;
    $sql="INSERT INTO `admit_data_sem6`
    (`reg_no`, `name`, `sem`, `branch`, `f_name`, `college`, `sub1t`, `sub2t`, `sub3t`, `sub4t`, `sub5t`, `sub1p`, `sub2p`,`sub3p`, `sub1s`, `sub2s`)
    VALUES
    ('{$reg}','{$name}','{$sem}','{$branch}','{$fname}','{$clgname}','{$sub1t}','{$sub2t}','{$sub3t}','{$sub4t}','{$sub5t}','{$sub1p}','{$sub2p}',
      '{$sub1s}','{$sub2s}''{$sub3s}','{$sub4s}')";
      if(mysqli_query($con,$sql))
      {
        echo "<script>alert('data inserted')</script>";
      }
      else
      {
        echo "<script>alert('data not inserted')</script>";
      }
  }
}

?>
<?php
$cmd="SELECT * FROM regno_dcl where reg_no=$reg";
$qur=mysqli_query($con,$cmd);
$fetch=mysqli_fetch_array($qur);
$payments='Examination fee for '.$sem.' Semester';
$email=$fetch[7];
$name=$fetch[1];
$phone=$fetch[6];
echo $payments.' '.$email.' '.$name.' '.$phone;
if($sem=='First'||$sem=='Second'||$sem=='Third'||$sem=='Fourth'||$sem=='Fifth')
{
  $amt=1000;
}
else {
  $amt=1500;
}
$_SESSION['amt']=$amt;
include 'instamojo/instamojo.php';
$api = new Instamojo\Instamojo('test_8bffa01d4746d1af721c7e1c974', 'test_999901739feffa9fe2a2c5b736c'
, 'https://test.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $payments,
        "amount" => $amt,
        "send_email" => true,
        "email" => $email,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_sms" => true,
        "allow_repeated_payments" => false,
        "redirect_url" => "http://localhost/tbp/student/stdformfill/formfill2.php"
        ));
    $pay_url=$response['longurl'];
    header("location:$pay_url");
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
 ?>
