<?php
  session_start();
  $id=$_GET['id'];
  include '../connect.php';
  $sq = "DELETE FROM lawyers WHERE loginid = '$id'";
  mysqli_query($con, $sq);
  $sql = "DELETE FROM tbl_login WHERE loginid = '$id'";
  mysqli_query($con, $sql);
  echo "<script> alert('lawyer removed'); window.location.href='addlawyers.php';</script>";
?>