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
      <title>Techno Board</title>
      <link rel = "icon" href ="srcimgs/tit.png" type = "image/x-icon">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container" >
        <div class="row">
          <div class="col-sm-1 col-xs-12">

          </div>
          <div class="col-xs-12 col-sm-10">
        <br>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-2">

          </div>
          <div class="col-sm-8 col-xs-12" style="border:2px solid green;">
        <?php
        $reg=$_SESSION['reg'];
        $sem=$_SESSION['sem'];
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
        $dt="SELECT * FROM `examination_dt` where dt_id=1";
        $dtqur=mysqli_query($con,$dt);
        $dtfetch=mysqli_fetch_array($dtqur);
        $dtdate=date("F-Y", strtotime($dtfetch[2]));
        $yr=date("Y", strtotime($dtfetch[2]));
          $sum=$marksftc[1]+$marksftc[2]+$marksftc[3]+$marksftc[4]+$marksftc[5]+$marksftc[6];
          $sum1=$marksftc[7]+$marksftc[8];
          $sum2=$marksftc[9]+$marksftc[10]+$marksftc[11]+$marksftc[12];
          $sumt=$sum+$sum1+$sum2;
          $per=($sumt/800)*100;
      echo"  <table align='center'>
      <tr>
        <td><br></td>
      </tr>
          <tr>
            <td colspan='2'><div align='center'><img class='img-responsive ' src='../../srcimgs/banner.png' style='width:80%;height:50%;'></div></td>
          </tr>

          <tr>
            <th colspan='2'><big><b><p align='center'>Marks Statement</p></b></big></th>
          </tr>
          <tr>
            <th colspan='2'><div align='center'><img src='upload/$stdpic[0]' style='height:60px;width:40px;'></div></th>
          </tr>
          <tr>
            <th colspan='2'><big><p align='center'>$subj[1]</p></big></th>
          </tr>
          <tr>
          <td colspan='2'><big>Reg. NO.: $subj[0] of <b>$subj[5]</b> has obtained the following marks in the <b>$subj[2] SEM - DIPLOMA IN $subj[3] <b>EXAMINATION-$yr,</b> held in the month of <b>$dtdate:-</b></big></td>
          </tr>
          <tr>
          <td colspan='2'></td>
          </tr>
          <tr>
          <td colspan='2'>
          <table border='1px' style='border-collapse:collapse;width:100%;' cellpadding='4'>
          <tr>
            <th>NAME OF THE SUBJECT</th>
            <th>FULL MARKS</th>
            <th>PASS MARKS</th>
            <th>MARKS OBTAINED</th>
          </tr>
          <tr>
            <td colspan='4' style='color:blue;'><b>THEORY PAPERS</b></td>
          </tr>
          <tr>
            <td>$subj[6]</td>
            <td>100</td>
            <td>40</td>
            <td>$marksftc[1]</td>
          </tr>
          <tr>
            <td>$subj[7]</td>
            <td>100</td>
            <td>40</td>
            <td>$marksftc[2]</td>
          </tr>
          <tr>
            <td>$subj[8]</td>
            <td>100</td>
            <td>40</td>
            <td>$marksftc[3]</td>
          </tr>
          <tr>
            <td>$subj[10]</td>
            <td>100</td>
            <td>40</td>
            <td>$marksftc[4]</td>
          </tr>
          <tr>
            <td>$subj[10]</td>
            <td>100</td>
            <td>40</td>
            <td>$marksftc[5]</td>
          </tr>
          <tr>
            <td>$subj[11]</td>
            <td>100</td>
            <td>40</td>
            <td>$marksftc[6]</td>
          </tr>
          <tr>
            <td style='color:purple;'><b>THEORY TOTAL</b></td>
            <td>500</td>
            <td></td>
            <td>$sum</td>
          </tr>
          <tr>
            <td colspan='4' style='color:blue;'><b>PRACTICAL PAPERS</b></td>
          </tr>
          <tr>
            <td>$subj[12]</td>
            <td>50</td>
            <td>25</td>
            <td>$marksftc[7]</td>
          </tr>
          <tr>
            <td>$subj[13]</td>
            <td>50</td>
            <td>25</td>
            <td>$marksftc[8]</td>
          </tr>
          <tr>
            <td style='color:purple;'><b>PRACTICAL TOTAL</b></td>
            <td>100</td>
            <td></td>
            <td>$sum1</td>
          </tr>
          <tr>
            <td colspan='4' style='color:blue;'><b>SESSIONAL PAPERS</b></td>
          </tr>
          <tr>
            <td>$subj[18]</td>
            <td>50</td>
            <td>25</td>
            <td>$marksftc[9]</td>
          </tr>
          <tr>
            <td>$subj[19]</td>
            <td>50</td>
            <td>25</td>
            <td>$marksftc[10]</td>
          </tr>
          <tr>
            <td>$subj[20]</td>
            <td>50</td>
            <td>25</td>
            <td>$marksftc[11]</td>
          </tr>
          <tr>
            <td>$subj[21]</td>
            <td>50</td>
            <td>25</td>
            <td>$marksftc[12]</td>
          </tr>
          <tr>
            <td style='color:purple;'><b>SESSIONAL TOTAL</b></td>
            <td>200</td>
            <td></td>
            <td>$sum2</td>
          </tr>
          <tr>
            <td style='color:purple;'><b>GRAND TOTAL TOTAL</b></td>
            <td>800</td>
            <td></td>
            <td>$sumt</td>
          </tr>
          </table>
          </td>
          </tr>";
          if($per>=75)
        echo "
        <tr>
          <td>
          <p style='float:left'>Classification/Grading<p>
          </td>
          <td>
            <p style='float:right'>Grade: I(D)[$per]<p>
          </td>
        </tr>
        <tr>
          <td colspan='2'>
          FIRST CLASS DISTENTION : 75% & ABOVE
          </td>
        </tr>
        <tr>
          <td colspan='2'>
          FIRST CLASS : 60% & ABOVE
          </td>
        </tr>
        <tr>
          <td colspan='2'>
          SECOND CLASS : 45% & ABOVE<br><br>
          </td>
        </tr>
        <tr>
          <td>
          This is a electronic marksheet Does'nt Require any Signature
          </td>
        </tr>
      </table>";
      else if($per>=60&&$per<75)
    echo "
    <tr>
      <td>
      <p style='float:left'>Classification/Grading<p>
      </td>
      <td>
        <p style='float:right'>Grade: I[$per]<p>
      </td>
    </tr>
    <tr>
      <td colspan='2'>
      FIRST CLASS DISTENTION : 75% & ABOVE
      </td>
    </tr>
    <tr>
      <td colspan='2'>
      FIRST CLASS : 60% & ABOVE
      </td>
    </tr>
    <tr>
      <td colspan='2'>
      SECOND CLASS : 45% & ABOVE<br><br><br><br><br><br><br><br><br>
      </td>
    </tr>
    <tr>
      <td>
      This is a electronic marksheet Does'nt Require any Signature
      </td>
    </tr>
  </table>";
  else if($per>45&&$per<60)
echo "
<tr>
  <td>
  <p style='float:left'>Classification/Grading<p>
  </td>
  <td>
    <p style='float:right'>Grade: II[$per]<p>
  </td>
</tr>
<tr>
  <td colspan='2'>
  FIRST CLASS DISTENTION : 75% & ABOVE
  </td>
</tr>
<tr>
  <td colspan='2'>
  FIRST CLASS : 60% & ABOVE
  </td>
</tr>
<tr>
  <td colspan='2'>
  SECOND CLASS : 45% & ABOVE<br><br><br><br><br><br><br><br><br>
  </td>
</tr>
<tr>
  <td>
  This is a electronic marksheet Does'nt Require any Signature
  </td>
</tr>
</table>";
else
echo "
<tr>
<td>
<p style='float:left'>Classification/Grading<p>
</td>
<td>
  <p style='float:right'>Grade: &nbsp&nbsp<p>
</td>
</tr>
<tr>
<td colspan='2'>
FIRST CLASS DISTENTION : 75% & ABOVE
</td>
</tr>
<tr>
<td colspan='2'>
FIRST CLASS : 60% & ABOVE
</td>
</tr>
<tr>
<td colspan='2'>
SECOND CLASS : 45% & ABOVE<br><br><br><br><br><br><br><br><br>
</td>
</tr>
<tr>
<td>
This is a electronic Does'nt Require any Signature
</td>
</tr>
</table>";
      }
      elseif($sem=='Second')
      {
      $marks="select * from std_marks_sem2 where reg_no = '{$reg}'";
      $mrksqur=mysqli_query($con,$marks);
      $marksftc=mysqli_fetch_array($mrksqur);
      $stdsubdtl="SELECT * from admit_data_sem2 WHERE reg_no= '$reg'";
      $qurr=mysqli_query($con,$stdsubdtl);
      $subj=mysqli_fetch_array($qurr);
      $stdpic="SELECT student_photo from regno_dcl WHERE reg_no= '$reg'";
      $qurr1=mysqli_query($con,$stdpic);
      $stdpic=mysqli_fetch_array($qurr1);
      $dt="SELECT * FROM `examination_dt` where dt_id=1";
      $dtqur=mysqli_query($con,$dt);
      $dtfetch=mysqli_fetch_array($dtqur);
      $dtdate=date("F-Y", strtotime($dtfetch[2]));
      $yr=date("Y", strtotime($dtfetch[2]));
        $sum=$marksftc[1]+$marksftc[2]+$marksftc[3]+$marksftc[4]+$marksftc[5];
        $sum1=$marksftc[7]+$marksftc[8];
        $sum2=$marksftc[13]+$marksftc[14]+$marksftc[15];
        $sumt=$sum+$sum1+$sum2;
        $per=($sumt/800)*100;
    echo"  <table align='center'>
    <tr>
      <td><br></td>
    </tr>
        <tr>
          <td colspan='2'><div align='center'><img class='img-responsive ' src='../../srcimgs/banner.png' style='width:80%;height:50%;'></div></td>
        </tr>

        <tr>
          <th colspan='2'><big><b><p align='center'>Marks Statement</p></b></big></th>
        </tr>
        <tr>
          <th colspan='2'><div align='center'><img src='../../upload/$stdpic[0]' style='height:60px;width:40px;'></div></th>
        </tr>
        <tr>
          <th colspan='2'><big><p align='center'>$subj[1]</p></big></th>
        </tr>
        <tr>
        <td colspan='2'><big>Reg. NO.: $subj[0] of <b>$subj[5]</b> has obtained the following marks in the <b>$subj[2] SEM - DIPLOMA IN $subj[3] <b>EXAMINATION-$yr,</b> held in the month of <b>$dtdate:-</b></big></td>
        </tr>
        <tr>
        <td colspan='2'></td>
        </tr>
        <tr>
        <td colspan='2'>
        <table border='1px' style='border-collapse:collapse;width:100%;' cellpadding='4'>
        <tr>
          <th>NAME OF THE SUBJECT</th>
          <th>FULL MARKS</th>
          <th>PASS MARKS</th>
          <th>MARKS OBTAINED</th>
        </tr>
        <tr>
          <td colspan='4' style='color:blue;'><b>THEORY PAPERS</b></td>
        </tr>
        <tr>
          <td>$subj[6]</td>
          <td>100</td>
          <td>40</td>
          <td>$marksftc[1]</td>
        </tr>
        <tr>
          <td>$subj[7]</td>
          <td>100</td>
          <td>40</td>
          <td>$marksftc[2]</td>
        </tr>
        <tr>
          <td>$subj[8]</td>
          <td>100</td>
          <td>40</td>
          <td>$marksftc[3]</td>
        </tr>
        <tr>
          <td>$subj[9]</td>
          <td>100</td>
          <td>40</td>
          <td>$marksftc[4]</td>
        </tr>
        <tr>
          <td>$subj[10]</td>
          <td>100</td>
          <td>40</td>
          <td>$marksftc[5]</td>
        </tr>
        <tr>
          <td>$subj[12]</td>
          <td>100</td>
          <td>40</td>
          <td>$marksftc[6]</td>
        </tr>
        <tr>
          <td style='color:purple;'><b>THEORY TOTAL</b></td>
          <td>500</td>
          <td></td>
          <td>$sum</td>
        </tr>
        <tr>
          <td colspan='4' style='color:blue;'><b>PRACTICAL PAPERS</b></td>
        </tr>
        <tr>
          <td>$subj[12]</td>
          <td>50</td>
          <td>25</td>
          <td>$marksftc[7]</td>
        </tr>
        <tr>
          <td>$subj[13]</td>
          <td>50</td>
          <td>25</td>
          <td>$marksftc[8]</td>
        </tr>
        <tr>
          <td style='color:purple;'><b>PRACTICAL TOTAL</b></td>
          <td>100</td>
          <td></td>
          <td>$sum1</td>
        </tr>
        <tr>
          <td colspan='4' style='color:blue;'><b>SESSIONAL PAPERS</b></td>
        </tr>
        <tr>
          <td>$subj[18]</td>
          <td>50</td>
          <td>25</td>
          <td>$marksftc[13]</td>
        </tr>
        <tr>
          <td>$subj[19]</td>
          <td>100</td>
          <td>40</td>
          <td>$marksftc[14]</td>
        </tr>
        <tr>
          <td>$subj[20]</td>
          <td>50</td>
          <td>25</td>
          <td>$marksftc[15]</td>
        </tr>
        <tr>
          <td style='color:purple;'><b>SESSIONAL TOTAL</b></td>
          <td>200</td>
          <td></td>
          <td>$sum2</td>
        </tr>
        <tr>
          <td style='color:purple;'><b>GRAND TOTAL TOTAL</b></td>
          <td>800</td>
          <td></td>
          <td>$sumt</td>
        </tr>
        </table>
        </td>
        </tr>";
        if($per>=75)
      echo "
      <tr>
        <td>
        <p style='float:left'>Classification/Grading<p>
        </td>
        <td>
          <p style='float:right'>Grade: I(D)[$per]<p>
        </td>
      </tr>
      <tr>
        <td colspan='2'>
        FIRST CLASS DISTENTION : 75% & ABOVE
        </td>
      </tr>
      <tr>
        <td colspan='2'>
        FIRST CLASS : 60% & ABOVE
        </td>
      </tr>
      <tr>
        <td colspan='2'>
        SECOND CLASS : 45% & ABOVE<br><br>
        </td>
      </tr>
      <tr>
        <td>
        This is a electronic marksheet Does'nt Require any Signature
        </td>
      </tr>
    </table>";
    else if($per>=60&&$per<75)
  echo "
  <tr>
    <td>
    <p style='float:left'>Classification/Grading<p>
    </td>
    <td>
      <p style='float:right'>Grade: I[$per]<p>
    </td>
  </tr>
  <tr>
    <td colspan='2'>
    FIRST CLASS DISTENTION : 75% & ABOVE
    </td>
  </tr>
  <tr>
    <td colspan='2'>
    FIRST CLASS : 60% & ABOVE
    </td>
  </tr>
  <tr>
    <td colspan='2'>
    SECOND CLASS : 45% & ABOVE<br><br><br><br><br><br><br><br><br>
    </td>
  </tr>
  <tr>
    <td>
    This is a electronic marksheet Does'nt Require any Signature
    </td>
  </tr>
</table>";
else if($per>45&&$per<60)
echo "
<tr>
<td>
<p style='float:left'>Classification/Grading<p>
</td>
<td>
  <p style='float:right'>Grade: II[$per]<p>
</td>
</tr>
<tr>
<td colspan='2'>
FIRST CLASS DISTENTION : 75% & ABOVE
</td>
</tr>
<tr>
<td colspan='2'>
FIRST CLASS : 60% & ABOVE
</td>
</tr>
<tr>
<td colspan='2'>
SECOND CLASS : 45% & ABOVE<br><br><br><br><br><br><br><br><br>
</td>
</tr>
<tr>
<td>
This is a electronic marksheet Does'nt Require any Signature
</td>
</tr>
</table>";
else
echo "
<tr>
<td>
<p style='float:left'>Classification/Grading<p>
</td>
<td>
<p style='float:right'>Grade: &nbsp&nbsp<p>
</td>
</tr>
<tr>
<td colspan='2'>
FIRST CLASS DISTENTION : 75% & ABOVE
</td>
</tr>
<tr>
<td colspan='2'>
FIRST CLASS : 60% & ABOVE
</td>
</tr>
<tr>
<td colspan='2'>
SECOND CLASS : 45% & ABOVE<br><br><br><br><br><br><br><br><br>
</td>
</tr>
<tr>
<td>
This is a electronic Does'nt Require any Signature
</td>
</tr>
</table>";
    }
         ?>

  </div>
    </div>
    </div>
    <div align="center">
    <button id="pt" onclick="printttt()" style="height:80px;width:300px;background-color:red;color:white;border-radius:25px 25px 25px 25px;">Print</button>
    <button id="ptt" onclick="printtttt()" style="height:80px;width:300px;background-color:red;color:white;border-radius:25px 25px 25px 25px;">Back</button>
  </div>
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
          window.location.href='../result.php';
        }
      </script>
    </body>
  </html>
