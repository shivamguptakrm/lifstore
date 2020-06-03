<?php
require'common.php';
if(!isset($_SESSION['Email'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\style.css">	
</head>
<body>
	<?php
	include'header.php';
	include'footer.php';
	?>
	<div class="container" style="margin-top: 70px;">
		<div class="jumbotron text-center">
			<p>Your order is confirmed. Thank you for shopping  with us.</p>
			<p><a class="btn btn-primary" href="product.php">Click Here</a> to purchase any other item.</p>
		</div>
	</div>
</body>
</html>