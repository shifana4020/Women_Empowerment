<?php
session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin panel</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
    <script type="text/javascript">
function valid()
{
if(document.form8.name.value=="")
{
alert("enter lawyer name");
document.form8.name.focus();
return false;
}
if(!isNaN(document.form8.name.value))
{
alert("enter alphabets only");
document.form8.name.focus();
return false;
}
if(document.form8.age.value=="")
{
alert("enter your age");
document.form8.age.focus();
return false;
}
if(isNaN(document.form8.age.value))
{
alert("enter integers only");
document.form8.age.focus();
return false;
}
if((document.form8.gender[0].checked==false)&&(document.form8.gender[1].checked==false))
{
alert("select your gender");
return false;
}
	var phone=document.form8.phonenumber.value;
	var regx=/^(\+91)([6789]\d{9})$/;
	if(regx.test(phone)==false)
	{
		alert("enter country code +91,then 10 digit no starting with 6|7|8|9");
		document.form8.phonenumber.focus();
		return false;
	}
var emailid=document.form3.email.value;
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   
 

if(document.form8.email.value=="")
{
alert("enter your emailid");
document.form8.email.focus();
return false;
}

 if(reg.test(emailid) == false)
 {
        alert("Please enter a valid emailid");
        document.form8.email.focus();
       return false;
    }	
	if(document.form8.place.value=="")
{
alert("enter your address");
document.form8.address.focus();
return false;
}
if(document.form8.name.value=="")
{
alert("enter court name");
document.form8.court.focus();
return false;
}
if(document.form8.district.value=="0")
{
alert("select district");
document.form8.district.focus();
return false;
}
if(document.form8.file.value=="")
{
alert("upload your id proof");
document.form8.file.focus();
return false;
}
if(document.form8.file1.value=="")
{
alert("upload your photo");
document.form8.file1.focus();
return false;
}
if(document.form8.experiencedyears.value=="")
{
alert("enter your experienced years");
document.form8.experiencedyears.focus();
return false;
}
if(isNaN(document.form8.experiencedyears.value))
{
alert("enter integers only");
document.form8.experiencedyears.focus();
return false;
}
if(document.form3.username.value=="")
{
alert("enter your username");
document.form3.username.focus();
return false;
}
if(document.form3.password.value=="")
{
alert("Enter Your Password");
document.form3.password.focus();
return false;
    }
	var val = document.form3.password.value;
        var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{7,}$/;
  
 if (!regex.test(val)) 
{
   alert("Must contain at least one number and one uppercase and lowercase letter,1 special character and at least 7 or more characters");
   document.form3.password.focus();
return false;
}
}
</script>
}
</script>
</head>

<body>
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Add lawyers</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form  method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Enter Lawyer name</label>
                        <input type="text" class="form-control" placeholder="enter lawyer name" name="name" required>
                    </div>
                    
                   <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control" placeholder="enter your age" name="age" required>
                    </div>
					
		 <div class="form-group">
                        <label>select gender</label>
                     <input  name="gender" type="radio" value="male" >Male
					<input  name="gender" type="radio" value="female" >Female
                    </div>
                      <div class="form-group">
                        <label>Enter phonenumber</label>
                        <input type="text" class="form-control" placeholder="enter your phonenumber" name="phonenumber" required>
                    </div>
					 <div class="form-group">
                        <label>Enter email id</label>
                        <input type="text" class="form-control" placeholder="enter your mail id" name="email" required>
                    </div>
					  <div class="form-group">
                        <label>Enter address</label>
                        <textarea type="text" class="form-control" placeholder="enter your address" name="address"></textarea>
                    </div>
					 <div class="form-group">
                        <label>Enter Court name</label>
                        <input type="text" class="form-control" placeholder="enter the court name" name="court" required>
                    </div>
					 <div class="form-group">
                        <label>Enter district</label>
                    <select name="district" class="form-control">
      <option value="0">select</option>
      <option value="thiruvananthapuram">thiruvananthapuram</option>
      <option value="kollam">kollam</option>
      <option value="pathanamthitta">pathanamthitta</option>
      <option value="alappuzha">alappuzha</option>
      <option value="kottayam">kottayam </option>
      <option value="idukki">idukki</option>
      <option value="ernakulam">ernakulam</option>
      <option value="thissur">thissur</option>
      <option value="palakkad">palakkad</option>
      <option value="malappuram">malappuram</option>
      <option value="kozhikode">kozhikkode</option>
      <option value="wayanad">wayanad</option>
      <option value="kannur">kannur</option>
      <option value="kasargod">kasargod</option>
    </select>
	</div>
	<div class="form-group">
                        <label>Upload id proof</label>
                        <input type="file" class="form-control" placeholder="upload your id proof" name="file" required>
                    </div>
					<div class="form-group">
                        <label>Upload photo</label>
                        <input type="file" class="form-control" placeholder="upload your phpto" name="file1" required>
                    </div>
					<!--<div class="form-group">
                        <label>Enter section</label>
                        <input type="text" class="form-control" placeholder="enter the section" name="section" required>
                    </div>-->
					<div class="form-group">
                        <label>Enter experienced year</label>
                        <input type="text" class="form-control" placeholder="enter the experienced year" name="experiencedyears" required>
                    </div>

					<div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="enter username" name="username" required>
                    </div>
					<div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="enter password" name="password" required>
                    </div>
                    <input type="submit" name="b"  value="Add lawyer" onClick="return valid()"class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">
                </form>
               
                <h1 class="paragraph-agileits-w3layouts mt-2">
                    <a href="adminindex.php">Back to Home</a>
                </h1>
            </div>
   
								<?php
								include '../connect.php';
if(isset($_POST['b']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$address=$_POST['address'];
$court=$_POST['court'];
$district=$_POST['district'];
$file=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"../uploads/".$file);
$file1=$_FILES['file1']['name'];
move_uploaded_file($_FILES['file1']['tmp_name'],"../uploads/".$file1);
$experiencedyears=$_POST['experiencedyears'];
$username=$_POST['username'];
$password=$_POST['password'];
 $s1 = "SELECT * FROM tbl_login WHERE username = '$username'";
    $result1 = mysqli_query($con, $s1);
    $row1=mysqli_fetch_assoc($result1);
    $uname= isset($row1['username']) ? $row1['username'] : '';
	if ($uname!="") 
            {
            echo "<script>alert('please enter another username'); window.location.href='addlawyer.php';</script>";
            }
            else
			{

            $sq = "INSERT INTO tbl_login (username,password,type1,status) VALUES ('$username','$password','lawyer','1')";
            mysqli_query($con, $sq);
            $sqll = "SELECT * FROM tbl_login WHERE username = '$username' and password = '$password' and type1 = 'lawyer'";
            $result = mysqli_query($con, $sqll);
            $no=mysqli_num_rows($result);
            if($no > 0)
            {
             $row=mysqli_fetch_assoc($result);
             $loid=$row['loginid'];
             $sql = "INSERT INTO lawyers (name,age,gender,phonenumber,email,address,court,district,idproof,experiencedyears,loginid,status,file)values('$name',$age,'$gender','$phonenumber','$email','$address','$court','$district','$file',$experiencedyears,$loid,1,'$file1')";
            mysqli_query($con, $sql);
            echo "<script> alert('lawyer Added'); window.location.href='addlawyers.php';</script>";
            }
        }
       
}
?>
	
  <!--  if($uname=="")
    {
            $sq = "INSERT INTO tbl_login (username,password,type1,status) VALUES ('$username','$password','lawyer','1')";
            
             mysqli_query($con, $sq);

              $sql2 = "SELECT * FROM tbl_login WHERE username = '$username' and password = '$password' and type1 = 'lawyer'";
             $result2 = mysqli_query($con, $sql2);
            $no=mysqli_num_rows($result2);
        
            if($no > 0)
            {
             $row=mysqli_fetch_assoc($result);
               
<section class="grids-section bd-content">

                <!-- Grids Info -->
                <div class="outer-w3-agile mt-2">
                    <h4 class="tittle-w3-agileits mb-4">lawyers</h4>
                    <table class="table table-bordered table-striped" width="700">
                        <thead>
                            <tr>
                                <th> name</th>
                                <th>age</th>
								 <th>gender</th>
								 <th>Contact</th>
								 <th>email</th>
								  <th>address</th>
								   <th>court</th>
								    <th>district</th>
									 <th>Id</th>
									   <th>Exp.</th>
                                 <th class="text-center"align="center">
                                    Action
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
						
include '../connect.php';
$sql3="select * from lawyers";
$res = mysqli_query($con,$sql3);
//$r = mysqli_fetch_assoc($res);
while($r=mysqli_fetch_array($res))
{?>
		<tr><td><?php echo $r['name'];?></td>
        <td><?php echo $r['age'];?></td>
     <td><?php echo $r['gender'];?></td>
	 <td><?php echo $r['phonenumber'];?></td>
	 <td><?php echo $r['email'];?></td>
	 <td><?php echo $r['address'];?></td>
	 <td><?php echo $r['court'];?></td>
	 <td><?php echo $r['district'];?></td>
	 <td><img src="../uploads/<?php echo $r['idproof'];?>" width="100" height="100"></td>
	 <td><?php echo $r['experiencedyears'];?></td>
                <td><a style="background-color:#F63" href="deletelawyers.php?id=<?php echo $r['loginid'];?>"><b>Delete</a></td></tr>
                      <?php
}
?></tbody>
                    </table>
                </div>
                <!--// Grids I
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2022 Admin panel . All Rights Reserved 
                    <a href="http://w3layouts.com/">  </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>