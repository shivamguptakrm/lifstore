
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
	<div class="container">
		<div class="modal" id="mymodal">
			<div class="modal-dialog modal-dialog-center">
				<div class="modal-content">
					<div class=" modal-header" >
						<h3>Login<button type="button" class="close" data-dismiss="modal">&times;</button></h3>
					</div>
					<div class="modal-body">
						<p>Don't have an account?<a href="signup.php">Register</a></p>
						<form>
							<div class="form-group">
								<input class="form-control" type="email" name="Email" >
							</div>
							<div class="form-group">
								<input class="form-control" type="password" name="Password">
							</div>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Login</button>
						</form><br>
						<p><a href="forget.php">Forget Password?</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#login_button').click(function(){
				var Name=$('#Name').val();
				var Password=$('#Password').val();
				if(Name !='' && Password !='')
				{
					$.ajax({
						url:"login_submit.php",
						method:"POST",
						data:{Name:Name,Password=Password},
						success:function(data)
					});
				}else 
				{
					alert("Both Fields are required");
				}
			});
		});
	</script>
	
	
</body>
</html>
