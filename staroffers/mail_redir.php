<!DOCTYPE html>
<html>
<head>
	<title>redir</title>
	<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
	<style type="text/css">
		body{
			padding-top: 20%;
			background-color: black;
		}
	</style>
</head>
<body>
	<div class="container">
	<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="Redirect();">&times;</span></button>
  <strong>Success!</strong> You have been signed in successfully!
</div>
</div>
</body>
<script type="text/javascript">
		window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
		function Redirect() {
               window.location="index.html";
            }
        setTimeout(function() {
               window.location="index.html";
    }, 4500);
	</script>
</html>
