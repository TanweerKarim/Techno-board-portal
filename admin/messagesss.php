<?php
  session_start();
  $usr=$_SESSION["id"];
  $tme=$_SESSION["t"];
  $tim=time();
  if(!$usr)
  {
    echo "<script>window.location.href='login.php'</script>";
  }
  if($tim>$tme)
  {
    session_unset($usr);
    session_destroy();
    echo "<script>setTimeout(function() {
  location.reload();
}, 10);</script>";
}?>
<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","try");
if(isset($_POST['readrecord']))
{
  $sql='SELECT * FROM feedback order by id desc';
  $query=mysqli_query($con,$sql);
  $cont=1;
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>";
  echo "<table border='1' style='table-layout:fixed'>";
  $a=1;
  while($row=mysqli_fetch_array($query))
  {
      $fword=strtoupper(substr($row[1],0,1));
      $mail=str_split($row[2]);
      if($a%2==0){
  echo "<tr><td rowspan='2' style='border:none;'><p style='background-color:orange;border-radius:70px;width:80px;height:80px;text-align:center;font-size:30px;'>$fword</p></td><td>Name - $row[1]<br>Sender Email - $row[2]<br>Subject - $row[3] <br>Time - $row[5]</td><td rowspan='2'>
  <input type='button' onclick='del($row[0])' value='Delete'>
  <input type='button' onclick='repl($mail)' value='Reply'></td></tr>
  <tr><td style='word-wrap: break-word;max-width: 100px;'> $row[4]<br>Date - $row[6]</td></tr>";
}
else {
  echo "<tr><td rowspan='2' style='border:none;'><p style='background-color:aqua;border-radius:70px;width:80px;height:80px;text-align:center;font-size:30px;'>$fword</p></td><td>Name - $row[1]<br>Sender Email - $row[2]<br>Subject - $row[3] <br>Time - $row[5]</td><td rowspan='2'>
  <input type='button' onclick='del($row[0])' value='Delete'>
  <input type='button' onclick='repl($row[0])' value='Reply'></td></tr>
  <tr><td style='word-wrap: break-word;max-width: 100px;'>
  $row[4]<br>Date - $row[6]</td></tr>";
}
$a++;
 }

  echo "</table>" ;
}
 ?>
 <?php
   if(isset($_POST["ss15"]))
   {
     session_unset($usr);
     session_destroy();
     echo "<script>setTimeout(function() {
   location.reload();
 }, 10);</script>";
   }
  ?>
