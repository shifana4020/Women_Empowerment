<?php
include("header.php");



?>
<!-- header -->
<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3><span>LAWYER PROFILE</span> </h3>
			
			
				<div class="col-md-6 mail-grid-left">
					<div class="mail-grid-left1">
					<table width="1"class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Crime Details</th>
                                 <th>Lawyer Details</th>
								 <th>photo</th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
                          include '../connect.php';


$sql="select * from crimedetails where  status='Assigned'";
$res=mysqli_query($con,$sql);

while($r=mysqli_fetch_array($res))
{
$id=$r['logid'];
$did=$r['detailid'];
$sqe="select * from assigncase where  detailid=$did";
$ree=mysqli_query($con,$sqe);
$k=mysqli_fetch_array($ree);
$lid=$k['lawyerid'];
$sg="select * from lawyers where lawyerid=$lid";
$rg=mysqli_query($con,$sg);
$j=mysqli_fetch_array($rg);

?>
		<tr><td><?php echo $r['discription'];?><br />on <?php echo $r['crimedate'];?></td>
		
        		
                <td>
				<?php echo $j['name'];?><br />
				<?php echo $j['gender'];?> <br />
				<?php echo $j['phonenumber'];?><br />
				<?php echo $j['email'];?><br />
				<?php echo $j['address'];?><br />
				<?php echo $j['district'];?><br />
				<td><img src="../uploads/<?php echo $j['file'];?>" width="100" height="100" /></td>
				</td>
				</tr>
		</form>		
                      <?php
}
?></tbody>
                    </table>
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