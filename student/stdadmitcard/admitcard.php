<?php
session_start();
$con=mysqli_connect("localhost","root","","try");
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body style="background-image:url(../../srcimgs/mobile.jpg);background-repeat:no-repeat;background-size:2000px 3000px;">
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12" style="border:3px solid lightgreen;">
          <?php
  $reg=$_SESSION["reg"];
  $ret1="select * from regno_dcl where reg_no = '{$reg}'";
  $result1=mysqli_query($con,$ret1);
  $res1=mysqli_fetch_array($result1);
  echo "<br><table align='center' style='width:100%;' cellspacing='4px'>
  <tr>
  <th colspan='4'><div align='center'><img src='../../srcimgs/banner.png' style='height:80%;width:90%'></div></th>
  </tr>
  <tr>
  <th colspan='4'><big><p align='center'>ADMIT CARD</p></big></th>
  </tr>
  <tr>
  <td></td>
  </tr>
  <tr>
  <td></td>
  </tr>";
    echo "<tr>
    <td>Exam</td>
    <td>:</td>
    <td>$res1[2] SEMESTER DIPLOMA EXAM</td>
    <td rowspan='7'><img src='../../upload/$res1[12]' style='height:150px;width:120px;float:right;'><td>
    </tr>";
echo "
<tr>
<td>INSTITUTE</td>
<td>:</td>
<td>$res1[4]</td>
</tr>
<tr>
<td>BRANCH</td>
<td>:</td>
<td>$res1[3]</td>
</tr>
<tr>
<td>REGISTRATION NO</td>
<td>:</td>
<td>$res1[0]</td>
</tr>
<tr>
<td>STUDENT NAME</td>
<td>:</td>
<td>$res1[1]</td>
</tr>
<tr>
<td>FATHER'S NAME</td>
<td>:</td>
<td>$res1[10]</td>
</tr>
<tr>
<td>EXAMINATION CENTER</td>
<td>:</td>
<td>R.V.S.C.E.T, JAMSHEDPUR</td>
</tr>
<tr>";
if($res1[2]=='First')
{
  $ret="select * from admit_data_sem1 where reg_no = '{$reg}'";
  $result=mysqli_query($con,$ret);
  $res=mysqli_fetch_array($result);
  $dt="SELECT * FROM examination_dt WHERE dt_id=1";
  $qure=mysqli_query($con,$dt);
  $dts=mysqli_fetch_array($qure);
  $dts[1]=date("d-m-Y", strtotime($dts[1]));
  $dts[2]=date("d-m-Y", strtotime($dts[2]));
  $dts[3]=date("d-m-Y", strtotime($dts[3]));
  $dts[4]=date("d-m-Y", strtotime($dts[4]));
  $dts[5]=date("d-m-Y", strtotime($dts[5]));
  $tm1="SELECT * FROM papertime WHERE time_id=1";
  $qure1=mysqli_query($con,$tm1);
  $pts=mysqli_fetch_array($qure1);
  $pts[1]=strtoupper($pts[1]);
  $pts[2]=strtoupper($pts[2]);
  $pts[3]=strtoupper($pts[3]);
  $pts[4]=strtoupper($pts[4]);
  $pts[5]=strtoupper($pts[5]);
echo "
<td colspan='4'><br>
  <table class='table table-bordered' style='width:100%;height:50%;' cellpadding='5px'>
    <tr>
      <th>SL.NO.</th>
      <th>NAME OF SUBJECT & CODE</th>
      <th>DATE</th>
      <th>TIME</th>
    </tr>
    <tr>
      <td>1</td>
      <td>$res[6]</td>
      <td>$dts[1]</td>
      <td>$pts[1]</td>
    </tr>
    <tr>
      <td>2</td>
      <td>$res[7]</td>
      <td>$dts[2]</td>
      <td>$pts[2]</td>
    </tr>
    <tr>
      <td>3</td>
      <td>$res[8]</td>
      <td>$dts[3]</td>
      <td>$pts[3]</td>
    </tr>
    <tr>
      <td>4</td>
      <td>$res[9]</td>
      <td>$dts[4]</td>
      <td>$pts[4]</td>
    </tr>
    <tr>
      <td>5</td>
      <td>$res[10]</td>
      <td>$dts[5]</td>
      <td>$pts[5]</td>
    </tr>
    <tr>
      <td>6</td>
      <td>$res[11]</td>
      <td>$dts[5]</td>
      <td>$pts[5]</td>
    </tr>
  </table>
</td>
</tr>
</table>";
}
else if($res1[2]=='Second')
{
  $ret="select * from admit_data_sem2 where reg_no = '{$reg}'";
  $result=mysqli_query($con,$ret);
  $res=mysqli_fetch_array($result);
  $dt="SELECT * FROM examination_dt WHERE dt_id=2";
  $qure=mysqli_query($con,$dt);
  $dts=mysqli_fetch_array($qure);
  $dts[1]=date("d-m-Y", strtotime($dts[1]));
  $dts[2]=date("d-m-Y", strtotime($dts[2]));
  $dts[3]=date("d-m-Y", strtotime($dts[3]));
  $dts[4]=date("d-m-Y", strtotime($dts[4]));
  $dts[5]=date("d-m-Y", strtotime($dts[5]));
  $tm1="SELECT * FROM papertime WHERE time_id=2";
  $qure1=mysqli_query($con,$tm1);
  $pts=mysqli_fetch_array($qure1);
  $pts[1]=strtoupper($pts[1]);
  $pts[2]=strtoupper($pts[2]);
  $pts[3]=strtoupper($pts[3]);
  $pts[4]=strtoupper($pts[4]);
  $pts[5]=strtoupper($pts[5]);
  echo "
  <td colspan='4'><br>
  <table class='table table-bordered' style='width:100%;height:50%;' cellpadding='5px'>
    <tr>
      <th>SL.NO.</th>
      <th>NAME OF SUBJECT & CODE</th>
      <th>DATE</th>
      <th>TIME</th>
    </tr>
    <tr>
      <td>1</td>
      <td>$res[6]</td>
      <td>$dts[1]</td>
      <td>$pts[1]</td>
    </tr>
    <tr>
      <td>2</td>
      <td>$res[7]</td>
      <td>$dts[2]</td>
      <td>$pts[2]</td>
    </tr>
    <tr>
      <td>3</td>
      <td>$res[8]</td>
      <td>$dts[3]</td>
      <td>$pts[3]</td>
    </tr>
    <tr>
      <td>4</td>
      <td>$res[9]</td>
      <td>$dts[4]</td>
      <td>$pts[4]</td>
    </tr>
    <tr>
      <td>5</td>
      <td>$res[10]</td>
      <td>$dts[5]</td>
      <td>$pts[5]</td>
    </tr>
  </table>
  </td>
  </tr>
  </table>";
}
else if($res1[2]=='Third')
{
  $ret="select * from admit_data_sem3 where reg_no = '{$reg}'";
  $result=mysqli_query($con,$ret);
  $res=mysqli_fetch_array($result);
  $dt="SELECT * FROM examination_dt WHERE dt_id=3";
  $qure=mysqli_query($con,$dt);
  $dts=mysqli_fetch_array($qure);
  $dts[1]=date("d-m-Y", strtotime($dts[1]));
  $dts[2]=date("d-m-Y", strtotime($dts[2]));
  $dts[3]=date("d-m-Y", strtotime($dts[3]));
  $dts[4]=date("d-m-Y", strtotime($dts[4]));
  $dts[5]=date("d-m-Y", strtotime($dts[5]));
  $tm1="SELECT * FROM papertime WHERE time_id=3";
  $qure1=mysqli_query($con,$tm1);
  $pts=mysqli_fetch_array($qure1);
  $pts[1]=strtoupper($pts[1]);
  $pts[2]=strtoupper($pts[2]);
  $pts[3]=strtoupper($pts[3]);
  $pts[4]=strtoupper($pts[4]);
  $pts[5]=strtoupper($pts[5]);
  echo "
  <td colspan='4'><br>
  <table class='table table-bordered' style='width:100%;height:50%;' cellpadding='5px'>
    <tr>
      <th>SL.NO.</th>
      <th>NAME OF SUBJECT & CODE</th>
      <th>DATE</th>
      <th>TIME</th>
    </tr>
    <tr>
      <td>1</td>
      <td>$res[6]</td>
      <td>$dts[1]</td>
      <td>$pts[1]</td>
    </tr>
    <tr>
      <td>2</td>
      <td>$res[7]</td>
      <td>$dts[2]</td>
      <td>$pts[2]</td>
    </tr>
    <tr>
      <td>3</td>
      <td>$res[8]</td>
      <td>$dts[3]</td>
      <td>$pts[3]</td>
    </tr>
    <tr>
      <td>4</td>
      <td>$res[9]</td>
      <td>$dts[4]</td>
      <td>$pts[4]</td>
    </tr>
    <tr>
      <td>5</td>
      <td>$res[10]</td>
      <td>$dts[5]</td>
      <td>$pts[5]</td>
    </tr>
  </table>
  </td>
  </tr>
  </table>";
}
else if($res1[2]=='Fourth')
{
  $ret="select * from admit_data_sem4 where reg_no = '{$reg}'";
  $result=mysqli_query($con,$ret);
  $res=mysqli_fetch_array($result);
  $dt="SELECT * FROM examination_dt WHERE dt_id=4";
  $qure=mysqli_query($con,$dt);
  $dts=mysqli_fetch_array($qure);
  $dts[1]=date("d-m-Y", strtotime($dts[1]));
  $dts[2]=date("d-m-Y", strtotime($dts[2]));
  $dts[3]=date("d-m-Y", strtotime($dts[3]));
  $dts[4]=date("d-m-Y", strtotime($dts[4]));
  $dts[5]=date("d-m-Y", strtotime($dts[5]));
  $tm1="SELECT * FROM papertime WHERE time_id=4";
  $qure1=mysqli_query($con,$tm1);
  $pts=mysqli_fetch_array($qure1);
  $pts[1]=strtoupper($pts[1]);
  $pts[2]=strtoupper($pts[2]);
  $pts[3]=strtoupper($pts[3]);
  $pts[4]=strtoupper($pts[4]);
  $pts[5]=strtoupper($pts[5]);
  echo "
  <td colspan='4'><br>
  <table class='table table-bordered' style='width:100%;height:50%;' cellpadding='5px'>
    <tr>
      <th>SL.NO.</th>
      <th>NAME OF SUBJECT & CODE</th>
      <th>DATE</th>
      <th>TIME</th>
    </tr>
    <tr>
      <td>1</td>
      <td>$res[6]</td>
      <td>$dts[1]</td>
      <td>$pts[1]</td>
    </tr>
    <tr>
      <td>2</td>
      <td>$res[7]</td>
      <td>$dts[2]</td>
      <td>$pts[2]</td>
    </tr>
    <tr>
      <td>3</td>
      <td>$res[8]</td>
      <td>$dts[3]</td>
      <td>$pts[3]</td>
    </tr>
    <tr>
      <td>4</td>
      <td>$res[9]</td>
      <td>$dts[4]</td>
      <td>$pts[4]</td>
    </tr>
    <tr>
      <td>5</td>
      <td>$res[10]</td>
      <td>$dts[5]</td>
      <td>$pts[5]</td>
    </tr>
  </table>
  </td>
  </tr>
  </table>";
}
else if($res1[2]=='Fifth')
{
  $ret="select * from admit_data_sem5 where reg_no = '{$reg}'";
  $result=mysqli_query($con,$ret);
  $res=mysqli_fetch_array($result);
  $dt="SELECT * FROM examination_dt WHERE dt_id=5";
  $qure=mysqli_query($con,$dt);
  $dts=mysqli_fetch_array($qure);
  $dts[1]=date("d-m-Y", strtotime($dts[1]));
  $dts[2]=date("d-m-Y", strtotime($dts[2]));
  $dts[3]=date("d-m-Y", strtotime($dts[3]));
  $dts[4]=date("d-m-Y", strtotime($dts[4]));
  $dts[5]=date("d-m-Y", strtotime($dts[5]));
  $tm1="SELECT * FROM papertime WHERE time_id=5";
  $qure1=mysqli_query($con,$tm1);
  $pts=mysqli_fetch_array($qure1);
  $pts[1]=strtoupper($pts[1]);
  $pts[2]=strtoupper($pts[2]);
  $pts[3]=strtoupper($pts[3]);
  $pts[4]=strtoupper($pts[4]);
  $pts[5]=strtoupper($pts[5]);
  echo "
  <td colspan='4'><br>
  <table class='table table-bordered' style='width:100%;height:50%;' cellpadding='5px'>
    <tr>
      <th>SL.NO.</th>
      <th>NAME OF SUBJECT & CODE</th>
      <th>DATE</th>
      <th>TIME</th>
    </tr>
    <tr>
      <td>1</td>
      <td>$res[6]</td>
      <td>$dts[1]</td>
      <td>$pts[1]</td>
    </tr>
    <tr>
      <td>2</td>
      <td>$res[7]</td>
      <td>$dts[2]</td>
      <td>$pts[2]</td>
    </tr>
    <tr>
      <td>3</td>
      <td>$res[8]</td>
      <td>$dts[3]</td>
      <td>$pts[3]</td>
    </tr>
    <tr>
      <td>4</td>
      <td>$res[9]</td>
      <td>$dts[4]</td>
      <td>$pts[4]</td>
    </tr>
    <tr>
      <td>5</td>
      <td>$res[10]</td>
      <td>$dts[5]</td>
      <td>$pts[5]</td>
    </tr>
  </table>
  </td>
  </tr>
  </table>";
}
else if($res1[2]=='Sixth')
{
  $ret="select * from admit_data_sem6 where reg_no = '{$reg}'";
  $result=mysqli_query($con,$ret);
  $res=mysqli_fetch_array($result);
  $dt="SELECT * FROM examination_dt WHERE dt_id=6";
  $qure=mysqli_query($con,$dt);
  $dts=mysqli_fetch_array($qure);
  $dts[1]=date("d-m-Y", strtotime($dts[1]));
  $dts[2]=date("d-m-Y", strtotime($dts[2]));
  $dts[3]=date("d-m-Y", strtotime($dts[3]));
  $dts[4]=date("d-m-Y", strtotime($dts[4]));
  $dts[5]=date("d-m-Y", strtotime($dts[5]));
  $tm1="SELECT * FROM papertime WHERE time_id=6";
  $qure1=mysqli_query($con,$tm1);
  $pts=mysqli_fetch_array($qure1);
  $pts[1]=strtoupper($pts[1]);
  $pts[2]=strtoupper($pts[2]);
  $pts[3]=strtoupper($pts[3]);
  $pts[4]=strtoupper($pts[4]);
  $pts[5]=strtoupper($pts[5]);
  echo "
  <td colspan='4'><br>
  <table class='table table-bordered' style='width:100%;height:50%;' cellpadding='5px'>
    <tr>
      <th>SL.NO.</th>
      <th>NAME OF SUBJECT & CODE</th>
      <th>DATE</th>
      <th>TIME</th>
    </tr>
    <tr>
      <td>1</td>
      <td>$res[6]</td>
      <td>$dts[1]</td>
      <td>$pts[1]</td>
    </tr>
    <tr>
      <td>2</td>
      <td>$res[7]</td>
      <td>$dts[2]</td>
      <td>$pts[2]</td>
    </tr>
    <tr>
      <td>3</td>
      <td>$res[8]</td>
      <td>$dts[3]</td>
      <td>$pts[3]</td>
    </tr>
    <tr>
      <td>4</td>
      <td>$res[9]</td>
      <td>$dts[4]</td>
      <td>$pts[4]</td>
    </tr>
    <tr>
      <td>5</td>
      <td>$res[10]</td>
      <td>$dts[5]</td>
      <td>$pts[5]</td>
    </tr>
  </table>
  </td>
  </tr>
  </table>";
}
else {
  echo "<script>alert('admit card not available');</script>";
  echo "<script>window.location.href='../admit.php</script>'";
}
 ?>
 <hr style="border:1px dotted black">
 <table style="width:100%;font-size:20px;" cellpadding="5px">
   <tr>
     <th>General Instructions</th>
   </tr>
<tr>
  <td>
 i. The examinee is expected to be present at the examination centre 10 minutes before the commencement of
   examination.</td>
</tr>
<tr>
  <td>
 ii. No examinee shall be admitted to the examination hall after 30 minutes of commencement of the examination.
</td>
</tr>
<tr>
  <td>
 iii. The examinee shall have the proper Roll No. ticket and the valid institutional identity card for producing
     when demande,without which he/she shall not be eligible to appear for the examination.
   </td>
 </tr>
 <tr>
   <td>
 iv. Examinees are not permitted to leave examination hall during the initial 30 minutes and last 10 minutes of
    the paper.
</td>
</tr>
<tr>
  <td>
 v. A bell will be sounded 10 minutes before the commencement of the examination after which the examinees are
   allowed to enter the examination halls.
 </td>
</tr>
<tr>
  <td>
 vi. Next ringing of the bell shall announce the commencement of the examination.
</td>
</tr>
 <tr>
   <td>
 vii. Exchange of answer books, supplements and drawing instruments etc. among the examinees is strictly
     prohibited.
   </td>
   </tr>
     <tr>
       <td>
 viii. Student shall write their Roll No. on the question paper.
</td>
</tr>
 <tr>
   <td>
 ix. Possession of any arms, weapons, mobile phone etc. in the examination hall or at the examination centre
    by the examinee is strictly prohibited.</td>
  </tr>
</table>
</div>
<button id="pt" onclick="printttt()" style="margin-left:250px;height:80px;width:300px;background-color:red;color:white;border-radius:25px 25px 25px 25px;">Print</button>
<button id="ptt" onclick="printtttt()" style="margin-left:250px;height:80px;width:300px;background-color:red;color:white;border-radius:25px 25px 25px 25px;">Back</button>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    function printttt()
    {
      document.getElementById('pt').style.display='none';
      document.getElementById('ptt').style.display='none';
      window.print();
      document.getElementById('pt').style.display='inline';
      document.getElementById('ptt').style.display='inline';
    }
    function printtttt()
    {
      window.location.href='../admit.php';
    }
  </script>
  </html>
