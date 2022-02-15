<?php
include '../connect.php';
include("header.php");

?>
<!-- header -->
<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3><span>Report a Crime</span> </h3>
			
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<div class="mail-grid-left1">
						<form action="crimedetailsprocess.php" method="post" name="form9" enctype="multipart/form-data">

							Enter Crime date<input type="date"  name="crimedate" required="">
							
							<textarea name="discription" required="" placeholder="Type case description..."></textarea>
							<input type="text" name="age" placeholder="Enter your age" >
							  Upload id proof <input type="file" name="file" />
							<input type="submit" value="Submit Now" onclick="return valid()">
						</form>
						 <script type="text/javascript">
function valid()
{
if(document.form9.crimedate.value=="")
{
alert("Enter the crime date");
document.form9.crimedate.focus();
return false;
}
if(document.form9.discription.value=="")
{
alert("Enter your discription");
document.form9.discription.focus();
return false;
}
if(document.form9.age.value=="")
{
alert("enter your age");
document.form9.age.focus();
return false;
}
if(isNaN(document.form9.age.value))
{
alert("enter integers only");
document.form9.age.focus();
return false;
}
if(document.form9.file.value=="")
{
alert("upload id proof");
document.form9.file.focus();
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