<?php
session_start();
$con=mysqli_connect("localhost","root","","try");
 ?>
<?php
if(isset($_POST['s1']))
{
  $c=0;
  $adno = $_POST['adno'];
  $sname = $_POST['sname'];
  $dob = $_POST['dob'];
  $gender = implode($_POST['gen']);
  $category= implode($_POST['catg']);
  $fname= $_POST['fname'];
  $mname=$_POST['mname'];
  $mno=$_POST['mno'];
  $email=$_POST['email'];
  $prsntadrs=$_POST['add1'];
  $prmentadrs=$_POST['add2'];
  $prsntadrspc=$_POST['pin1'];
  $prmentadrspc=$_POST['pin2'];
  $instnm=implode($_POST['inst']);
  $branch=implode($_POST['branch']);
  $clstype=implode($_POST['cncl']);
  $admsntype=implode($_POST['atype']);
  $nos=implode($_POST['nos']);
  $doa=$_POST['doa'];
  $matric=$_POST['matric'];
  $percentage=$_POST['prct'];
  $sem='';
  $_SESSION['uid']=$adno;
  echo $adno."  ".$sname;
  if($admsntype == 'Regular')
  {
    $sem='First';
    $query="insert into student_reg_dtl (adhar_no,student_name,dob,gender,category,father_name,mname,mobile_no,email,present_address,permanent_address,pa_pin,pr_pin,institute_name,branch,sem,con_type,adm_type,nature_of_seat,doa,matric_pass_year,percentage) values('$adno','$sname','$dob','$gender','$category','$fname','$mname','$mno','$email','$prsntadrs','$prmentadrs','$prsntadrspc','$prmentadrspc','$instnm','$branch','$sem','$clstype','$admsntype','$nos','$doa','$matric','$percentage')";
  }
  elseif ($admsntype == 'Lateral Entry') {
    $sem='Second';
    $query="insert into student_reg_dtl (adhar_no,student_name,dob,gender,category,father_name,mname,mobile_no,email,present_address,permanent_address,pa_pin,pr_pin,institute_name,branch,sem,con_type,adm_type,nature_of_seat,doa,matric_pass_year,percentage) values('$adno','$sname','$dob','$gender','$category','$fname','$mname','$mno','$email','$prsntadrs','$prmentadrs','$prsntadrspc','$prmentadrspc','$instnm','$branch','$sem','$clstype','$admsntype','$nos','$doa','$matric','$percentage')";
  }
  if(mysqli_query($con,$query))
  {
    echo "<script>alert('inserted')</script>";
  }
  else {
    echo "<script>alert('Not inserted')</script>";
}
$target_dir = "../../upload/";
$filename= basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir .$filename;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
// Check if file already exists
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats

// Check if $uploadOk is set to 0 by an error
 else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $inst="UPDATE student_reg_dtl SET student_photo = '".$filename."'  WHERE   adhar_no = $adno";
        $qurk= mysqli_query($con,$inst);
  }
}
echo "<script>window.location.href='otpsys.php'</script>";
}
 ?>
