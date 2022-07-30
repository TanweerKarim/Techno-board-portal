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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
  </head>
  <body style="background-image:url(../../srcimgs/mobile.jpg);background-repeat:no-repeat;background-size:2000px 3000px;">
    <div class="container" >
      <div class="row">
        <div class="col-sm-1 col-xs-12">

        </div>
        <div class="col-xs-12 col-sm-10">
      <br>
      <img class="img-responsive " src="../../srcimgs/banner.png" style="height:120px;width:900px;">
    </div>
    <div class="col-sm-1 col-xs-12">
    </div>
    </div>
    </div>
    <br>
    <nav class="navbar navbar-inverse container">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Result</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../../index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <?php
            if (isset($_POST["s1"])) {
              $reg=$_POST['t1'];
              $sem=implode($_POST["sem"]);
              if($sem=='First')
              {
              $marks="select * from std_marks_sem1 where reg_no = '{$reg}'";
              $mrksqur=mysqli_query($con,$marks);
              $marksftc=mysqli_fetch_array($mrksqur);
              $stdsubdtl="SELECT * from admit_form_data WHERE reg_no= '$reg'";
              $qurr=mysqli_query($con,$stdsubdtl);
              $subj=mysqli_fetch_array($qurr);
              $stdpic="SELECT student_photo from regno_dcl WHERE reg_no= '$reg'";
              $qurr1=mysqli_query($con,$stdpic);
              $stdpic=mysqli_fetch_array($qurr1);
              $_SESSION['reg']=$reg;
              $_SESSION['sem']=$sem;
              echo "<br>
              <table align='center'><tr><td>Reg.No.</td>
              <td>:</td>
              <td>$subj[0]</td>
              <td rowspan='4'>
              <img style='width:120px;height:130px;' src='../../upload/$stdpic[0]'>
              </td></tr>
                <tr><td>Name</td><td>:</td><td>$subj[1]</td></tr>";
                echo "<tr><td>Semester</td><td>:</td><td>$subj[2] Semester</td></tr>";
                echo "<tr><td>College Name</td><td>:</td><td>$subj[5]</td><tr></table>";
                echo "<br><table border='1px' align='center' cellpadding='15px' style='border-collapse:collapse;'>
                <tr><th>Reg.No</th><th>$subj[0]</th></tr>
                <tr><th>Name</th><th>$subj[1]</th></tr>
                <tr><th>Branch</th><th>$subj[3]</th></tr>
                <tr><th>Semester</th><th>$subj[2] Semester</th></tr>
                <tr><th>$subj[6]</th><th id='tan1'>$marksftc[1]</th></tr>
                <tr><th>$subj[7]</th><th id='tan2'>$marksftc[2]</th></tr>
                <tr><th>$subj[8]</th><th id='tan3'>$marksftc[3]</th></tr>
                <tr><th>$subj[9]</th><th id='tan4'>$marksftc[4]</th></tr>
                <tr><th>$subj[10]</th><th id='tan5'>$marksftc[5]</th></tr>
                <tr><th>$subj[11]</th><th id='tan6'>$marksftc[6]</th></tr>
                <tr><th>$subj[12]</th><th id='tan7'>$marksftc[7]</th></tr>
                <tr><th>$subj[13]</th><th id='tan8'>$marksftc[8]</th></tr>
                <tr><th>$subj[18]</th><th id='tan9'>$marksftc[9]</th></tr>
                <tr><th>$subj[19]</th><th id='tan10'>$marksftc[10]</th></tr>
                <tr><th>$subj[20]</th><th id='tan11'>$marksftc[11]</th></tr>
                <tr><th>$subj[21]</th><th id='tan12'>$marksftc[12]</th></tr>
                ";
                $total=$marksftc[1]+$marksftc[2]+$marksftc[3]+$marksftc[4]+$marksftc[5]+$marksftc[6]+$marksftc[7]+$marksftc[8]+$marksftc[9]+$marksftc[10]+$marksftc[11]+$marksftc[12];
                $per=$total/8;

                echo "
                <tr><th>Total</th><th id='tan13'>$total</th></tr>";
                if($per>=75)
                {
                echo"
                <tr><th>Percentage</th><th id='tan14'>$per% [First Class Distinction]</th></tr>
                <tr><th>Pass/Fail</th><th id='tan15'></th></tr>
                ";
                }
                else if($per>59||$per<75)
                {
                echo"
                <tr><th>Percentage</th><th id='tan14'>$per% [First Class]</th></tr>
                <tr><th>Pass/Fail</th><th id='tan15'></th></tr>
                ";
                }
                else if($per>=40||$per<60)
                {
                echo"
                <tr><th>Percentage</th><th id='tan14'>$per% [Second Class]</th></tr>
                <tr><th>Pass/Fail</th><th id='tan15'></th></tr>
                ";
                }

              }
              else if($sem=='Second')
              {
              $marks="select * from std_marks_sem2 where reg_no = '{$reg}'";
              $mrksqur=mysqli_query($con,$marks);
              $marksftc=mysqli_fetch_array($mrksqur);
              $stdsubdtl="SELECT * from sem_subject WHERE subjects_id= 'all-2'";
              $qurr=mysqli_query($con,$stdsubdtl);
              $subj=mysqli_fetch_array($qurr);
              $stdpic="SELECT reg_no,name,branch,college,student_photo from regno_dcl WHERE reg_no= '$reg'";
              $qurr1=mysqli_query($con,$stdpic);
              $stdpic=mysqli_fetch_array($qurr1);
              $_SESSION['reg']=$reg;
              $_SESSION['sem']=$sem;
              echo "<br>
              <table align='center'><tr><td>Reg.No.</td>
              <td>:</td>
              <td>$stdpic[0]</td>
              <td rowspan='4'>
              <img style='width:120px;height:130px;' src='../../upload/$stdpic[4]'>
              </td></tr>
                <tr><td>Name</td><td> : </td><td> $stdpic[1]</td></tr>";
                echo "<tr><td>Semester</td><td> : </td><td> $sem Semester</td></tr>";
                echo "<tr><td>Branch</td><td> : </td><td> $stdpic[2] </td></tr>";
                echo "<tr><td>College Name</td><td> : </td><td> $stdpic[3]</td><tr></table>";
                echo "<br><table border='1px' align='center' cellpadding='15px' style='border-collapse:collapse;'>
                <tr><th>Reg.No</th><th>$subj[0]</th></tr>
                <tr><th>Name</th><th>$subj[1]</th></tr>
                <tr><th>Branch</th><th>$subj[3]</th></tr>
                <tr><th>Semester</th><th>$subj[2] Semester</th></tr>
                <tr><th>$subj[3]</th><th id='tan1'>$marksftc[1]</th></tr>
                <tr><th>$subj[4]</th><th id='tan2'>$marksftc[2]</th></tr>
                <tr><th>$subj[5]</th><th id='tan3'>$marksftc[3]</th></tr>
                <tr><th>$subj[6]</th><th id='tan4'>$marksftc[4]</th></tr>
                <tr><th>$subj[7]</th><th id='tan5'>$marksftc[5]</th></tr>
                <tr><th>$subj[13]</th><th id='tan6'>$marksftc[7]</th></tr>
                <tr><th>$subj[14]</th><th id='tan7'>$marksftc[8]</th></tr>
                <tr><th>$subj[20]</th><th id='tan8'>$marksftc[13]</th></tr>
                <tr><th>$subj[21]</th><th id='tan9'>$marksftc[14]</th></tr>
                <tr><th>$subj[22]</th><th id='tan10'>$marksftc[15]</th></tr>
                ";
                $total=$marksftc[1]+$marksftc[2]+$marksftc[3]+$marksftc[4]+$marksftc[5]+$marksftc[7]+$marksftc[8]+$marksftc[13]+$marksftc[14]+$marksftc[15];
                $per=$total/8;

                echo "
                <tr><th>Total</th><th id='tan13'>$total</th></tr>";
                if($per>=75)
                {
                echo"
                <tr><th>Percentage</th><th id='tan14'>$per% [First Class Distinction]</th></tr>
                <tr><th>Pass/Fail</th><th id='tan15'></th></tr>
                ";
                }
                else if($per>59||$per<75)
                {
                echo"
                <tr><th>Percentage</th><th id='tan14'>$per% [First Class]</th></tr>
                <tr><th>Pass/Fail</th><th id='tan15'></th></tr>
                ";
                }
                else if($per>=40||$per<60)
                {
                echo"
                <tr><th>Percentage</th><th id='tan14'>$per% [Second Class]</th></tr>
                <tr><th>Pass/Fail</th><th id='tan15'></th></tr>
                ";
                }

              }
            }
           ?>

         <table align="center">
           <form action="marksheet.php" method="post">
          <tr>
            <td><input type="text" value="<?php echo $res[0]?>" name="reg" style="display:none;"></td>
            <td colspan="2"><br>
              <button type="submit" name="dodo" onclick="trans()" style="width:360px;height:35px;border-radius:8px;border:none;background-color:lightgreen;color:white;font-weight:bold;">Get Marksheet</button>
            </form></td>
          </tr>
        </table>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br>
    <br>
    <footer class="container" style="height:40px;background-color:black;border-radius:4px;">

      <p style="color:white;text-align:center;">© 2019 <a href="tanweer.php" style="text-decoration:none;color:white;">Tanweer</a>. All Rights Reserved.</p>
</footer><br>
</body>
<script type="text/javascript">
  var sem = <?php echo json_encode($sem); ?>;

  if(sem=='First')
  {
    var sub1t=parseInt(<?php echo json_encode($marksftc[1]); ?>);
    var sub2t=parseInt(<?php echo json_encode($marksftc[2]); ?>);
    var sub3t=parseInt(<?php echo json_encode($marksftc[3]); ?>);
    var sub4t=parseInt(<?php echo json_encode($marksftc[4]); ?>);
    var sub5t=parseInt(<?php echo json_encode($marksftc[5]); ?>);
    var sub1p=parseInt(<?php echo json_encode($marksftc[7]); ?>);
    var sub2p=parseInt(<?php echo json_encode($marksftc[8]); ?>);
    var sub1s=parseInt(<?php echo json_encode($marksftc[9]); ?>);
    var sub2s=parseInt(<?php echo json_encode($marksftc[10]); ?>);
    var sub3s=parseInt(<?php echo json_encode($marksftc[11]); ?>);
    var count=0;
    if(sub1t<40)
    {
    document.getElementById('tan1').innerHTML=sub1t+'*';
    count++;
    }
    if(sub2t<40)
    {
    document.getElementById('tan2').innerHTML=sub2t+'*';
    count++;
    }
    if(sub3t<40)
    {
    document.getElementById('tan3').innerHTML=sub3t+'*';
    count++;
    }
    if(sub4t<40)
    {
    document.getElementById('tan4').innerHTML=sub4t+'*';
    count++;
    }
    if(sub5t<25)
    {
    document.getElementById('tan5').innerHTML=sub5t+'*';
    count++;
    }
    if(sub1p<25)
    {
    document.getElementById('tan7').innerHTML=sub1p+'*';
    count++;
    }
    if(sub2p<25)
    {
    document.getElementById('tan8').innerHTML=sub2p+'*';
    count++;
    }
    if(sub1s<25)
    {
    document.getElementById('tan9').innerHTML=sub1s+'*';
    count++;
    }
    if(sub2s<25)
    {
    document.getElementById('tan10').innerHTML=sub2s+'*';
    count++;
    }
    if(sub3s<25)
    {
    document.getElementById('tan11').innerHTML=sub3s+'*';
    count++;
    }
    if(count==0)
    {
      document.getElementById('tan15').innerHTML='Pass';
      document.getElementById('tan15').style.backgroundColor='green';
      pass();
    }
    else if(count==1||count==2||count==3)
    {
      document.getElementById('tan14').innerHTML='---';
      document.getElementById('tan15').innerHTML='Promoted';
      document.getElementById('tan15').style.backgroundColor='Gray';
      pass();
    }
    else {
      document.getElementById('tan14').innerHTML='---';
      document.getElementById('tan15').innerHTML='Fail';
      document.getElementById('tan15').style.backgroundColor='red';
      pass();
    }
  }
  else if(sem=='Second')
  {
    var sub1t=parseInt(<?php echo json_encode($marksftc[1]); ?>);
    var sub2t=parseInt(<?php echo json_encode($marksftc[2]); ?>);
    var sub3t=parseInt(<?php echo json_encode($marksftc[3]); ?>);
    var sub4t=parseInt(<?php echo json_encode($marksftc[4]); ?>);
    var sub5t=parseInt(<?php echo json_encode($marksftc[5]); ?>);
    var sub6t=parseInt(<?php echo json_encode($marksftc[6]); ?>);
    var sub1p=parseInt(<?php echo json_encode($marksftc[7]); ?>);
    var sub2p=parseInt(<?php echo json_encode($marksftc[8]); ?>);
    var sub1s=parseInt(<?php echo json_encode($marksftc[9]); ?>);
    var sub2s=parseInt(<?php echo json_encode($marksftc[10]); ?>);
    var sub3s=parseInt(<?php echo json_encode($marksftc[11]); ?>);
    var sub4s=parseInt(<?php echo json_encode($marksftc[12]); ?>);
    var count=0;
    if(sub1t<40)
    {
    document.getElementById('tan1').innerHTML=sub1t+'*';
    count++;
    }
    if(sub2t<40)
    {
    document.getElementById('tan2').innerHTML=sub2t+'*';
    count++;
    }
    if(sub3t<40)
    {
    document.getElementById('tan3').innerHTML=sub3t+'*';
    count++;
    }
    if(sub4t<40)
    {
    document.getElementById('tan4').innerHTML=sub4t+'*';
    count++;
    }
    if(sub5t<25)
    {
    document.getElementById('tan5').innerHTML=sub5t+'*';
    count++;
    }
    if(sub6t<25)
    {
    document.getElementById('tan6').innerHTML=sub6t+'*';
    count++;
    }
    if(sub1p<25)
    {
    document.getElementById('tan7').innerHTML=sub1p+'*';
    count++;
    }
    if(sub2p<25)
    {
    document.getElementById('tan8').innerHTML=sub2p+'*';
    count++;
    }
    if(sub1s<25)
    {
    document.getElementById('tan9').innerHTML=sub1s+'*';
    count++;
    }
    if(sub2s<25)
    {
    document.getElementById('tan10').innerHTML=sub2s+'*';
    count++;
    }
    if(sub3s<25)
    {
    document.getElementById('tan11').innerHTML=sub3s+'*';
    count++;
    }
    if(sub4s<25)
    {
    document.getElementById('tan12').innerHTML=sub4s+'*';
    count++;
    }
    if(count==0)
    {
      document.getElementById('tan15').innerHTML='Pass';
      document.getElementById('tan15').style.backgroundColor='green';
      pass();
    }
    else if(count==1||count==2||count==3)
    {
      document.getElementById('tan14').innerHTML='---';
      document.getElementById('tan15').innerHTML='Promoted';
      document.getElementById('tan15').style.backgroundColor='Gray';
      pass();
    }
    else {
      document.getElementById('tan14').innerHTML='---';
      document.getElementById('tan15').innerHTML='Fail';
      document.getElementById('tan15').style.backgroundColor='red';
      pass();
    }
  }
  function pass()
  {
    var dl=parseInt(<?php echo json_encode($stdpic[0]); ?>);
    var cnt=count;
    var sem=<?php echo json_encode($sem); ?>;
    $.ajax({
      url:"upsem.php",
      type:"post",
      data:{dl:dl,cnt:cnt,sem:sem},
      success:function(data,status){
      console.log('pass');
    }
    });
  }
</script>

</html>
