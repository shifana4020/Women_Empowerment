<?php
extract($_POST);
$cid=$_POST["cid"];
$lname=$_POST["lname"];
include '../connect.php';
$sql2="insert into assigncase(detailid,lawyerid,status) values('$cid','$lname','Assigned')";
$res1=mysqli_query($con,$sql2);
$sql="update crimedetails set status='Assigned' where detailid=$cid";
$res=mysqli_query($con,$sql);
?>
<script>
alert('Lawyer Assigned....!');
window.location='viewcases.php';
</script>

