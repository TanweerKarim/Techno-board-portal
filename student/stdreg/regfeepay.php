<?php
session_start();
$con=mysqli_connect("localhost","root","","try");
 ?>
<?php
$adno=$_SESSION['uid'];
$query="select * from student_reg_dtl where adhar_no = '$adno'";
$sql=mysqli_query($con,$query);
$fetch=mysqli_fetch_array($sql);
$payments='Registration fee';
$amt=350;
$email=$fetch[8];
$name=$fetch[1];
$phone=$fetch[7];
echo $phone;
echo $adno;
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
        "redirect_url" => "http://localhost/tbp/student/stdreg/regsucced.php"
        ));
    $pay_url=$response['longurl'];
    header("location:$pay_url");
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
 ?>
