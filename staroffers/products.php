<?php
session_start();
$con=mysqli_connect("localhost","root","","staroffers.in");
$loc=$_SESSION['location'];
$sloc=$_SESSION['sublocation'];
$cat=$_SESSION['category'];
$query = "SELECT * FROM offer WHERE location='$loc' and sublocation='$sloc' and category='$cat'";
$res=mysqli_query($con,$query);



//echo $row['imagepath1'];
?>

<!DOCTYPE html>
<html>
<head>
<title>offers</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="img/templatemo_logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/templatemo_logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/templatemo_logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/templatemo_logo.png">
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<!--//js-->
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
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">

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
				<li class="active"><?php echo"$cat";?></li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--products-->
	<div class="products">
		<div class="container">
		<div class="row">
		<?php
			$count=0;
			while($row=mysqli_fetch_array($res)){
				$count++;
				if($count>3){
					echo "</div>";
					$count=0;
					echo "<div class='row'>";
				}
			echo "
				<div class='product-grids simpleCart_shelfItem wow fadeInUp animated col-md-4 product-model-sec' data-wow-delay='.3s'>
					<div class='new-top'>
						<a href='single.php?code=$row[code]'><img src='$row[imagepath1]' class='img-responsive'/></a>
						<div class='new-text'>
							<ul>
								<li><a href='single.php?code=$row[code]'>Quick View </a></li>
							</ul>
						</div>
					</div>
					<div class='new-bottom'>
						<h5><a class='name' href='single.php?code=$row[code]'>$row[name]</a></h5>

						<div class='ofr'>
							<p class='pric1'><del>100%</del></p>
							<p><span class='item_price'>$row[offer]</span></p>
						</div>
					</div>
				</div>";
			}
			?>
			<!--div class="clearfix"> </div-->
		</div>
	</div>
	<!--//products-->
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
	<!-- the jScrollPane script -->
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
			<script type="text/javascript" id="sourcecode">
				$(function()
				{
					$('.scroll-pane').jScrollPane();
				});
			</script>
	<!-- //the jScrollPane script -->
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<!-- the mousewheel plugin -->
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
