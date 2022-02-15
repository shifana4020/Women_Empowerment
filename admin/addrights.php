r<?php
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
if(document.form5.name.value=="")
{
alert("enter the right name");
document.form5.name.focus();
return false;
}
if(!isNaN(document.form5.name.value))
{
alert("enter alphabets only");
document.form5.name.focus();
return false;
}
if(document.form5.discription.value=="")
{
alert("Enter your discription");
document.form5.discription.focus();
return false;
}
if(document.form5.file.value=="")
{
alert("Enter the file");
document.form5.file.focus();
return false;>
<form action="" method="post" name="form5" enctype="multipart/form-data">
    <div class="bg-page py-5">

}
}
</script>
</head>
<body        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Add rights for women</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form  method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Add rights</label>
                        <input type="text" class="form-control" placeholder="enter right name" name="name">
                    </div>
                    
                   <div class="form-group">
                        <label>Add discription</label>
                        <textarea type="text" class="form-control" placeholder="discription" name="discription"></textarea>
                    </div>
                      <div class="form-group">
                        <label>upload photo</label>
                        <input type="file" class="form-control"  name="file">
       </div>
                    <input type="submit" name="b"  value="Add right" onClick="return valid()" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">
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
$discription=$_POST['discription'];
$file=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"../uploads/".$file);
$sql1="insert into rights(name,discription,file) values('$name','$discription','$file')";

$result = mysqli_query($con, $sql1);
echo "<script> alert('Successfully added rights for women'); window.location.href='addrights.php';</script>";

							}
								
							?>


<section class="grids-section bd-content">

                <!-- Grids Info -->
                <div class="outer-w3-agile mt-2">
                    <h4 class="tittle-w3-agileits mb-4">rights</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> name</th>
                                <th>discription</th>
								  <th>photo</th>
                                 <th class="text-center"align="center">
                                    Action
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
						 include '../connect.php'; 
$sql1="select * from rights";
$result = mysqli_query($con, $sql1);

while($r=mysqli_fetch_array($result))
{?>
		<tr><td><?php echo $r['name'];?></td>
        <td><?php echo $r['discription'];?></td>
        <td><img src="../uploads/<?php echo $r['file'];?>" width="100" height="100"></td>
                <td><a style="background-color:#F63" href="deleterights.php?id=<?php echo $r['rightid'];?>"><b>Delete</a></td></tr>
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