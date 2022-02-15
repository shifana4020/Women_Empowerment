<?php
session_start();
?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Register :: w3layouts</title>
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

if(document.form.npw.value=="")//textbox name=name
{
alert("enter new password");
document.form.npw.focus();
return false;
    }
	
if(document.form.cpw.value=="")//textbox name=name
{
alert("enter confirm password");
document.form.cpw.focus();
return false;
    }
if((document.form.npw.value)!=(document.form.cpw.value))
{
alert("enter same password");
document.form.cpw.focus();
return false;
    }
}
</script>
</head>

<body>
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Change password</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form  method="post">
                    <div class="form-group">
                        <label>New password</label>
                        <input type="password" class="form-control" placeholder="Enter new password" name="npw" >
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Enter same password" name="cpw" >
                    </div>
                   
                    <input type="submit" name="b" value="change password" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4" onClick="return valid()">
                </form>
               
                <h1 class="paragraph-agileits-w3layouts mt-2">
                    <a href="adminindex.php">Back to Home</a>
                </h1>
            </div>
   
								<?php
if(isset($_POST['b']))
{

extract($_POST);
$cpw=$_POST["cpw"];
$npw=$_POST["npw"];
include '../connect.php';
$rs = mysqli_query($con,"SELECT * FROM tbl_login WHERE status='1' and type1='admin' " );
			$row1=mysqli_fetch_assoc($rs);
        	$logid=$row1['loginid'];
	$sql="update tbl_login set password='$npw' where loginid=$logid";
	$res3=mysqli_query($con,$sql);
	if($res3>0)
{
echo "<script>
window.onload=function()
{
alert('successfully  updated your password.....!');
window.location='adminindex.php';
}
</script>";
}
}
	
?>
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