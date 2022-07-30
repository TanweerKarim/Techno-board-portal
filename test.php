Live Demo
<?php
   if(isset($_FILES['zip'])){
     echo "<script>window.alert('In block')</script>";
      $errors= array();
      $file_name = $_FILES['zip']['name'];
      $file_size =$_FILES['zip']['size'];
      $file_tmp =$_FILES['zip']['tmp_name'];
      $file_type=$_FILES['zip']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['zip']['name'])));

      $extensions= array("zip");

      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 20971520){
         $errors[]='File size must be excately 20 MB';
      }

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"zips/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>

      <form action="test.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="zip" />
         <input type="submit"/>
      </form>

   </body>
</html>
