<?php
include("header.php");
?>
<!-- header -->
<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3><span>Change password</span> </h3>
			
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<div class="mail-grid-left1">
						<form action="changepasswordprocess.php" method="post" name="form21" enctype="multipart/form-data">

							Enter password<input type="text"  name="pass" placeholder="Enter new password">
							
							
							Confirm password<input type="text" name="cpass" placeholder="Enter confirm password" >
							 
							<input type="submit" name="b" value="Submit Now" onclick="return valid()">
						</form>
						 <script type="text/javascript">
function valid()
{
if(document.form21.pass.value=="")
{
alert("Enter new password");
document.form21.pass.focus();
return false;
}	
if(document.form21.cpass.value=="")
{
alert("Enter confirm password");
document.form21.cpass.focus();
return false;
}
if((document.form21.pass.value)!=(document.form21.cpass.value))
	{
alert("Enter same password");
document.form21.cpass.focus();
return false;
    }
}
</script>
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
				<div class="social_icons">
					<a href="#" class="icon icon-cube facebook"></a>
					<a href="#" class="icon icon-cube rss"></a>
					<a href="#" class="icon icon-cube instagram"></a>
					<a href="#" class="icon icon-cube t"></a>
					<div class="clearfix"> </div>
				</div>
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