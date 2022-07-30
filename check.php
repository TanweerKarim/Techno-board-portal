<?php
$con=mysqli_connect("localhost","root","","try");
$subdtl="select * from sem_subject where subjects_id = 'all-1'";
$query1=mysqli_query($con,$subdtl);
$fetch1=mysqli_fetch_assoc($query1);
print_r($fetch1);
?>
