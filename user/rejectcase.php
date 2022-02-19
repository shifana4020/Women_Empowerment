<?php
include("header.php");
$id=$_SESSION['id'];


?>
<!-- header -->
<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3><span>View Cases</span> </h3>
			
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<div class="mail-grid-left1">
					<?php
include '../connect.php';
 $sql="select * from crimedetails where logid=$id and status='Rejected'";
$res1=mysqli_query($con,$sql);?>
				<table>
				<tr><td>Case details</td><td>Status</td></tr>
<?php
while($r=mysqli_fetch_array($res1))
{
$did=$r['detailid'];
$sql1="select * from crimedetails where detailid=$did";
$res11=mysqli_query($con,$sql1);
$j=mysqli_fetch_array($res11);


?>

<tr><td><textarea  disabled="disabled" ><?php echo $r['discription'];?></textarea></td>
<td><textarea disabled="disabled"><?php echo $j['status'];?></textarea></td></tr>
<?php
}
?></table>
					</div>
				</div>
				<div class="col-md-6 mail-grid-right">
					<div class="mail-grid-right1">
						<img src="images/s.jpg" width="400" height="350">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
<!-- //mail -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid-left">
					
				</div>
				<div class="col-md-4 footer-grid-left">
					
				</div>
				<div class="col-md-4 footer-grid-left">
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<div class="footer-bottom-left">
					<p>&copy 2022 Women Empowerment. All rights reserved |</p>
				</div>
				<!--<div class="social_icons">
					<a href="#" class="icon icon-cube facebook"></a>
					<a href="#" class="icon icon-cube rss"></a>
					<a href="#" class="icon icon-cube instagram"></a>
					<a href="#" class="icon icon-cube t"></a>
					<div class="clearfix"> </div>
				</div>-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>