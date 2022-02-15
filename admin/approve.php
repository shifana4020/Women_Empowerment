<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
 include '../connect.php';
  $id=$_GET['id'];

  $sq = "UPDATE tbl_login SET status='1'WHERE loginid='$id'";
    mysqli_query($con, $sq);
  $sql="update tbl_reg set status=1 where loginid=$id";
    mysqli_query($con, $sql);
	$sql1="update crimedetails set status='Aproved' where logid=$id";
    mysqli_query($con, $sql1); 
	echo "<script> alert('Approved'); window.location.href='userapproval.php';</script>";
?>
</body>
</html>
