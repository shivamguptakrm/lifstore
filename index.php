<?php
require'common.php';
/*if(isset($_SESSION['Email'])){
	header('location:products.php');
}*/
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
	?>
	<div id="banner_image">
		<center>
		<div class="container">
			<div id="banner_content"><a class="btn btn-danger btn-lg active" href="product.php">Shop Now</a></div>
		</div>
		</center>
	</div>
	<?php
	include'footer.php';
	?>
</body>
</html>