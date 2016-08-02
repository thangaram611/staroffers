<?php
session_start();
$con=mysqli_connect("localhost","root","","staroffers.in");
$code = $_GET['code'];
$cat=$_SESSION['category'];
$query = "SELECT * FROM offer WHERE code='$code'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res)){
						$shop="$row[name]";
						$address="$row[address]";
						$website="$row[website]";
						$email="$row[email]";
						$phno="$row[phno]";
						$caption="$row[caption]";
						$description="$row[description]";
						$offer_detail="$row[offer_details]";
						$review="$row[review]";
						$offer="$row[offer]";
						$ccode="$row[ccode]";
					}

//echo $row['imagepath1'];
?>
<!DOCTYPE html>
<html>
<head>
<title>details</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="img/templatemo_logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/templatemo_logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/templatemo_logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/templatemo_logo.png">
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
 <script type="text/javascript" src="js/rating.js"></script>
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<!-- <ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">mail@example.com</a></li>
					</ul> -->
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".5s">
					<h1><a href="index.html">Star <b>Offers</b><span class="tag">One stop to find your Offers </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!--carousal-->

	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li><?php echo"<a href= '$_SERVER[HTTP_REFERER]'> $cat";?></a></li>
				<li class="active"><?php echo"$shop"; ?></li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--single-page-->
	<div class="single">
		<div class="container">
			<div class="single-info">
				<div class="col-md-6 single-top wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/templatemo_logo.png">
								<div class="thumb-image"> <img src="images/templatemo_logo.png" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="images/templatemo_logo.png">
								 <div class="thumb-image"> <img src="images/templatemo_logo.png" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="images/templatemo_logo.png">
							   <div class="thumb-image"> <img src="images/templatemo_logo.png" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 single-top-left simpleCart_shelfItem wow fadeInRight animated" data-wow-delay=".5s">
					<?php echo"<h3>$shop</h3>"; ?><br>
					<?php echo"<h5>$caption</h5>"; ?><br>

					<div class="row lead">
        <div id="stars-existing" class="starrr col-md-3" data-rating='4'></div><div class="col-md-9" style="font-size: 1em;color: #999;"><span id="count-existing">4</span> star(s) out of 5</div>
    				</div>
					<p><?php echo"$offer_detail"; ?></p>
					<div class="col-md-5"><img class ="img-responsive" src="img/badge.png" style="position: relative;"/><h2 class="offer_lable" style="position: absolute;top: 25%;width: inherit;left: 25%;color: aquamarine;"><?php echo"$offer"; ?><br></h2></div><div class="col-md-7">
					<h1 class="coupon_code" style="position: absolute;top: 35%;"><mark><strong><?php echo"$ccode"; ?></strong></mark></h1>
					<img class="tag" src="img/coupon.png" style="float: right;width: 30%;"/>
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>
			<!--collapse-tabs-->
			<div class="collpse tabs">
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".5s">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Description
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<?php echo"$description"; ?>
							</div>
						</div>
					</div>
					<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".6s">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								   additional information
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								<address>
								<strong><?php echo"$shop"; ?></strong><br>
								<?php echo"$address"; ?><br>
								<abbr title="Phone">Ph:</abbr> <?php echo"$phno"; ?>
								</address>

								<address>
								<strong>Email</strong><br>
									<?php echo"$email"; ?>
								</address>
								<address>
								<strong>WebSite</strong><br>
									<?php echo"$website"; ?>
								</address>
							</div>
						</div>
					</div>
					<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".7s">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									reviews
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<?php echo"$review"; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--//collapse -->
			<!--related-products-->
			<!--//related-products-->
		</div>
	</div><br><br><br>
	<!--//single-page-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.html">Star <b>offers</b> <span class="tag">One stop to find your Offers</span> </a></h4>
					<p>© 2015 staroffers.in . All rights reserved | Design by <strong><a href="https://in.linkedin.com/in/thangaramkannan"> TRK</a></strong></p>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
					<h3>Subscribe</h3>
					<p>Sign Up Now For More Information <br> About Our Company </p>
					<form>
						<input type="text" placeholder="Enter Your Email" required="">
						<input type="submit" value="Go">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//footer-->
	<!--search jQuery-->
	<script src="js/mains.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
