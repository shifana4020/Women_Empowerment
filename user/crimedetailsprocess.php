
<?php
include '../connect.php';
session_start();
$id = $_SESSION['id'];
//echo $id;
$crimedate=$_POST['crimedate'];
$discription=$_POST['discription'];
$age=$_POST['age'];
$file=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"../uploads/".$file);
 //$rs = mysqli_query($con,"SELECT * FROM tbl_login WHERE status='1' and type1='user' and loginid=$id" );
						  //$row1=mysqli_fetch_assoc($rs);
        	//$logid=$row1['loginid'];
        	//$cs = mysqli_query($con,"SELECT * FROM tbl_reg WHERE loginid='$logid' " );
$sql1="insert into crimedetails(crimedate,discription,age,idproof,status,logid) values('$crimedate','$discription',$age,'$file','Reported',$id)";
$result = mysqli_query($con, $sql1);
echo "<script> alert('Successfully reported your case'); window.location.href='reportcase.php';</script>";
?>
<!--<script>
alert('successfully reported your case');
window.location='userindex.php';
</script>
--!>

