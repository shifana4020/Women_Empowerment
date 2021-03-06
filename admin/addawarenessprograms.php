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
if(document.form7.programname.value=="")
{
alert("enter the program name");
document.form7.programname.focus();
return false;
}
if(!isNaN(document.form7.programname.value))
{
alert("enter alphabets only");
document.form7.programname.focus();
return false;
}
if(document.form7.date.value=="")
{
alert("Enter the date");
document.form7.date.focus();
return false;
}
if(document.form7.discription.value=="")
{
alert("Enter your discription");
document.form7.discription.focus();
return false;
}
if(document.form7.file.value=="")
{
alert("Enter the file");
document.form7.file.focus();
return false;
}
}
</script>
</head>

<body>
<form action="" method="post" name="form7" enctype="multipart/form-data">
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Add awareness programs</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form  method="post" enctype="multipart/form-data">
                    <div class="form-group">
					<span class="lnr lnr-user"></span>
                        <label>Program name</label>
                        <input type="text" class="form-control" placeholder="enter program name" name="programname" id="programname" required onChange="Valprg();">
                    </div>
					<span id="msglii1" style="color:red;"></span>
<script>		
function Valprg() 
{
    var val = document.getElementById('programname').value;
	 if(val=="")
	 {
	    document.getElementById('msglii1').innerHTML="** please fill program name";
		return false;
		}
    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msglii1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('programname').value = "";
        return false;
    }
document.getElementById('msglii1').innerHTML=" ";
    return true;
}
</script>

                    <div class="form-group">
					<span class="lnr lnr-user"></span>
                        <label>Program date</label>
                        <input type="date" class="form-control" name="date" id="date" required onChange="vdate();">
                    </div>
					<span id="msgd" style="color:red;"></span>
<script>		
function vdate() 
{
    var val = document.getElementById('date').value;
	 if(val=="")
	 {
	    document.getElementById('msgd').innerHTML="** please fill date";
		return false;
		}
</script>
                   <div class="form-group">
				   <span class="lnr lnr-user"></span>
                        <label>Add description</label>
                        <textarea type="text" class="form-control" placeholder="description" name="discription"  id="discription" required onChange="Valiprg();"></textarea>
                    </div>
					<span id="msgi1" style="color:red;"></span>
<script>		
function Valiprg() 
{
    var val = document.getElementById('discription').value;
	 if(val=="")
	 {
	    document.getElementById('msgi1').innerHTML="** please fill description";
		return false;
		}
</script>
                     <div class="form-group">
					 <span class="lnr lnr-user"></span>
                        <label>Upload Poster/Brochure</label>
                        <input type="file" class="form-control" name="file" id="file" required onChange="return fileValidation();">
                    </div>
					<script>
        function fileValidation() {
            var fileInput = 
                document.getElementById('file');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.pdf|\.jpg|\.png|\.jpeg|\.wpd)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>
                    
                    <input type="submit" name="b"  value="Add program"  class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">
                </form>
               
                <h1 class="paragraph-agileits-w3layouts mt-2">
                    <a href="adminindex.php">Back to Home</a>
                </h1>
            </div>
   
								<?php
								include '../connect.php';
if(isset($_POST['b']))
{



$programname=$_POST['programname'];
$discription=$_POST['discription'];
$date=$_POST['date'];
$file=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"../uploads/".$file);
$sql="insert into awarenessprograms(programname,date,discription,file) values('$programname','$date','$discription','$file')";
$result = mysqli_query($con, $sql);
echo "<script> alert('Successfully added awareness programs'); window.location.href='addawarenessprograms.php';</script>";

							}
								
							?>
<!--if($result>0)
{
echo "<script>
window.onload=function()
{
alert('successfully  added awareness programs.....!');
window.location='addawarenessprograms.php';
}
</script>";
}



}
?>--><section class="grids-section bd-content">

                <!-- Grids Info -->
                <div class="outer-w3-agile mt-2">
                    <h4 class="tittle-w3-agileits mb-4">awarenessprograms</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Programname</th>
								  <th>Date</th>
                                <th>Discription</th>
								 <th>Image</th>
                                 <th class="text-center"align="center">
                                    Action
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
						include '../connect.php';
$sql="select * from awarenessprograms";
$result = mysqli_query($con, $sql);
//$r= mysqli_fetch_assoc($result);
while($r=mysqli_fetch_array($result))
{?>
		<tr><td><?php echo $r['programname'];?></td>
		   <td><?php echo $r['date'];?></td>
        <td><?php echo $r['discription'];?></td>
        <td><img src="../uploads/<?php echo $r['file'];?>" width="100" height="100"></td>
                <td><a style="background-color:#F63" href="deleteprograms.php?id=<?php echo $r['programid'];?>"><b>Delete</a></td></tr>
                      <?php
}
?></tbody>
                    </table>
                </div>
                <!--// Grids I
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>?? 2022 Admin panel . All Rights Reserved 
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