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
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body style="background-image:url(../srcimgs/mobile.jpg);background-repeat:no-repeat;background-size:2000px 3000px;">
    <div class="container" >
      <div class="row">
        <div class="col-sm-1 col-xs-12">

        </div>
        <div class="col-xs-12 col-sm-10">
      <br>
      <img class="img-responsive " src="../srcimgs/banner.png" style="height:120px;width:900px;">
    </div>
    <div class="col-sm-1 col-xs-12">
    </div>
    </div>
    </div>
    <br>
    <nav class="navbar navbar-inverse container">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">New Registration</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12" id="inst" style="height:40px;background-color:black;border-radius:5px;">
          <p align="center" style="margin:8px 0;color:white;" >Registration form fill-up instructions!<button id="btn1" onclick="hide1()" style="float:right;background:none;outline:none;border:none;"> <i class="fa fa-caret-square-o-down" ></i></button>
            <button id="btn2" onclick="show()"style="float:right;background:none;outline:none;border:none;display:none;"><i class="fa fa-caret-square-o-up" ></i></button>

          </p>
          <div id="div2" style="background-color:white;width:100%;display:none;">
          <p>
            <ul>
             <li>The Registration form filling is preferably done in Google Chrome.</li>
<li>Scanned photograph in jpg / jpeg format: The size of the scanned photograph must not be more than 500KB.</li>
<li>Only use your Gmail email address</li>
<li>Initials: Do not add any initials(i.e. Mr / Miss / Mrs / Late etc.) before your name/ Father's name/ Mother's name.</li>
<li>Mobile no. and e-Mail ID: Mobile no. and e-Mail ID should be verified for further process.</li>
           </ul>
         </p></div>
         <br>
         <div style="width:100%;" align="center">
         <form action="../student/stdreg/reginst.php" method="post" enctype="multipart/form-data">
           <table align="center" class="table" style="width:90%;" id="t3">
             <tr>
               <td rowspan="3"><br><img id="blah" src="../srcimgs/imglog.png" height="200px" width="180px"/><br><div style="background-color:black;border-radius:5px;width:50%;height:100%;">
                 <input type="file" name="fileToUpload" id="fileToUpload" style="margin:7.5px 0px 0px 7px;color:white;" required></div>
               </td>
               <td><lable>Aadhaar Number</lable><br><input type="text" placeholder="    Enter Aadhaar Number" name="adno" style="border:none;width:100%;border-radius:5px;height:30px;" required></td>
             </tr>
             <tr>
               <td><lable>Student Name</lable><br><input type="text" placeholder="    Enter Student Name" name="sname" style="border:none;width:100%;border-radius:5px;height:30px;" required></td>
             </tr>
             <tr>
               <td><lable>Date Of Birth</lable><br><input type="date"  name="dob" style="border:none;width:100%;border-radius:5px;height:30px;" required></td>
             </tr>
             <tr>
               <td><br><lable>Gender</lable><br>
                 <select name="gen[]" style="border:none;width:100%;border-radius:5px;height:30px;" required>
                   <option>---Select---</option>
                   <option value="Male">Male</option>
                   <option value="Female">Female</option>
                 </select>
               </td>
               <td><br><lable>Category</lable><br>
                 <select name="catg[]" style="border:none;width:100%;border-radius:5px;height:30px;" required>
                   <option>---Select---</option>
                   <option value="General">General</option>
                   <option value="BC-I">BC-I</option>
                   <option value="BC-II">BC-II</option>
                   <option value="SC">SC</option>
                   <option value="ST-Primitive Tribal Group">ST-Primitive Tribal Group</option>
                   <option value="ST-None Primitive Tribal Group">ST-None Primitive Tribal Group</option>
                 </select>
               </td>
             </tr>
             <tr>
               <td><br><lable>Fathers Name</lable><br><input type="text" placeholder="    Enter Fathers Name" style="border:none;width:100%;border-radius:5px;height:30px;" name="fname" required></td>
               <td><br><lable>Mothers Name</lable><br><input type="text" placeholder="    Enter Mothers Name" style="border:none;width:100%;border-radius:5px;height:30px;" name="mname" required></td>
             </tr>
             <tr>
                 <td><br><lable>Mobile Number</lable><br><input type="text" placeholder="    Enter Mobile Number" style="border:none;width:100%;border-radius:5px;height:30px;" name="mno" required></td>
                 <td><br><lable>Email ID</lable><br><input type="email" placeholder="    Enter Email ID" name="email" style="border:none;width:100%;border-radius:5px;height:30px;" required></td>
             </tr>
             <tr>
               <td><br><lable>Present Address</lable><br><textarea placeholder="  Current Address" name="add1" style="border:none;width:100%;border-radius:5px;height:100px;" required></textarea></td>
               <td><br><lable>Permanent Address</lable><br><textarea placeholder="  Permanent Address" name="add2" style="border:none;width:100%;border-radius:5px;height:100px;" required></textarea></td>
             </tr>
             <tr>
                 <td><br><lable>Present Address Pin Code</lable><br><input type="text" name="pin1" placeholder="    Enter Present Address Pin Code" style="border:none;width:100%;border-radius:5px;height:30px;" name="sname" required></td>
                 <td><br><lable>Permanent Address Pin Code</lable><br><input type="text" name="pin2" placeholder="    Enter Permanent Address Pin Code" name="sname" style="border:none;width:100%;border-radius:5px;height:30px;" required></td>
             </tr>
             <tr>
               <td><br><lable>Institute Name</lable><br><select name="inst[]" style="border:none;width:100%;border-radius:5px;height:30px;" required>
                 <option>---Select---</option>
                 <option value="Al-kabir Polytechnic">Al-Kabir Polytechnic</option>
               </select></td>
               <td><br><lable>Branch Name</lable><br><select name="branch[]" style="border:none;width:100%;border-radius:5px;height:30px;" required>
                 <option>---Select---</option>
                 <option value="Automobile Engineering">Automobile Engineering</option>
                 <option value="Civil Engineering">Civil Engineering</option>
                 <option value="Computer Science Engineering">Computer Science Engineering</option>
                 <option value="Electrical Engineering">Electrical Engineering</option>
                 <option value="Electronics And Communication Engineering">Electronics And Communication Engineering</option>
                 <option value="Mechanical Engineering">Mechanical Engineering</option>
               </select></td>
             </tr>
             <tr>
               <td><br><lable>Counselling Type</lable><br><select name="cncl[]" style="border:none;width:100%;border-radius:5px;height:30px;" required>
                 <option>---Select---</option>
                 <option value="JCECE Board,Ranchi">JCECE Board,Ranchi</option>
                 <option value="Open Counselling">Open Counselling At Institute Level</option>
                 <option value="Institute Quota">Institute Quota</option>
               </select></td>
               <td><br><lable>Admission Type</lable><br><select name="atype[]" style="border:none;width:100%;border-radius:5px;height:30px;" required>
                 <option>---Select---</option>
                 <option value="Regular">Regular</option>
                 <option value="Lateral Entry">Lateral Entry</option>
                 </select></td>
             </tr>
             <tr>
               <td><br><lable>Nature Of Seat</lable><br><select name="nos[]" style="border:none;width:100%;border-radius:5px;height:30px;" required>
                 <option>---Select---</option>
                 <option value="Regular">Regular</option>
                 </select></td>
               <td><br><lable>Date Of Admission</lable><br><input type="date" name="doa" placeholder="    Enter Permanent Address Pin Code" name="sname" style="border:none;width:100%;border-radius:5px;height:30px;" required></td>
             </tr>
             <tr>
                 <td><br><lable>10Th/Matriculation/Equivalent Exam Passing Year</lable><br><input type="text" name="matric" placeholder="    Enter Passing Year" style="border:none;width:100%;border-radius:5px;height:30px;" name="sname" required></td>
                 <td><br><lable>Obtained Percentage (Physics,Chemistry & Maths)</lable><br><input type="text" name="prct" placeholder="    Enter Percentage Obtained by student" name="sname" style="border:none;width:100%;border-radius:5px;height:30px;" required></td>
             </tr>
             <tr>
               <td><br></td>
               <td><br><button type="submit" name="s1" style="border:none;background-color: black;color:white;width:100%;border-radius:5px;height:50px;">Submit and Verify&nbsp;&nbsp;<i class="fa fa-arrow-right" style="font-size:20px"></i></button><br></td>
             </tr>
           </table>
         </form>
         <br>
       </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
         function readURL(input) {
     if (input.files && input.files[0]) {
       var reader = new FileReader();

       reader.onload = function(e) {
         $('#blah').attr('src', e.target.result);
       }

       reader.readAsDataURL(input.files[0]);
     }
     }

     $("#fileToUpload").change(function() {
     readURL(this);
     });
     </script>
  <script type="text/javascript">
  function hide1() {
      document.getElementById('btn1').style.display="none";
      document.getElementById('div2').style.display="block";
      document.getElementById('btn2').style.display="block";
    }
    function show() {
        document.getElementById('btn1').style.display="block";
        document.getElementById('div2').style.display="none";
        document.getElementById('btn2').style.display="none";
      }
  </script>
  </html>
