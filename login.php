<?php
require'common.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Lifestyle Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\style.css">	
</head>
<body>
	<?php
	include'header.php';
	include'footer.php';
	?><br><br>
	<div class="container">
		<div class="row row_style">
			<div class=" col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
				<div class="panel panel-primary">
					<div class="panel-heading"><h3 >Login</h3></div>
					<div class="panel-body" >
						<p class="text-warning">Login to make a purchase</p>
						<form action="login_submit.php" method="POST">
							<div class="form-group"><input class="form-control" type="email" name="Email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></div>
							<div class="form-group"><input class="form-control" type="password" name="Password" placeholder="Password" required="true" pattern=".{6,}"></div>
							<button class="btn btn-primary">Login</button>
							<?php 
							if (isset($_GET['error'])) {
								echo $_GET['error'];		
							}
							 ?>
						</form>
					</div>
					<div class="panel-footer">Don't have an account? <a href="signup.php">Register</a></div>
				</div>	
			</div>
		</div>
	</div>
</body>
</html>
