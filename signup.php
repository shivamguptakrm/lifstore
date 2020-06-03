<?php
/*require'common.php';

session_start();
if (isset($_SESSION['id'])) {
	echo "Hello".$_SESSION['Email'];
} else {
	echo "Hello Guest";
}*/
/*echo $_SESSION['id'];
die();*/
?>
<!DOCTYPE html>
<html>
<head>
	<title> Sign Up | Lifestyle Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\style.css">	
</head>
<body>
	<?php
	include 'header.php'; ?><br><br>
	<div class="container">
		<div class="row row_style">
			<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
				<h2>SIGN UP</h2>
				<form action="signup_script.php" method="POST">
					<div class="form-group"><input class="form-control" type="text" name="Name" placeholder="Name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"></div>
					<div class="form-group">
						<input class="form-control" type="email" name="Email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
					</div>
					<div class="form-group"><input class="form-control" type="password" name="Password" placeholder="Password" required="true" pattern=".{6,}"></div>
					<div class="form-group"><input class="form-control" type="tel" name="Contact" placeholder="Contact" required="true"></div>
					<div class="form-group"><input class="form-control" type="text" name="City" placeholder="City" required="true"></div>
					<div class="form-group"><input class="form-control" type="" name="Address" placeholder="Address" required="true"></div>
					<input class="btn btn-primary btn-lg" type="submit" name="Submit">
				</form>				
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>