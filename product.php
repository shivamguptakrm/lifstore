<?php 
require'common.php';



/*if(!isset($_SESSION['email'])){
header('location: login.php');
exit;
}else {
	header('location:product.php');
}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Product | Lifestyle Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\style.css">	
</head>
<body>
	<?php
	include'header.php';
	echo "<br><br><br><br><br>";
	include 'check_if_added.php';
	include'footer.php';
	?>
	<br><br>
	<div class="container" style="margin-top: 30px;">
		<div class="jumbotron">
	       	<h1>Welcome to our Lifestyle Store!</h1>
	       	<p>We have the best cameras, watches and shirts for you.No need to hunt around. we have all in one place.</p>
        </div>
	</div>
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="Image/5.jpg">
					<div class="caption" >
						<h3>Cannon EOS</h3>
						<p>Price: Rs 36,000.00</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						  	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
						  	<?php                             
						  } else {                            
						  //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart("1") != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						  		?>                                     
						  		<a href="cart_add.php?id=1" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						  	<?php                                 
						    }                             
						  }                             
						  ?>  
					</div>	
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="Image/2.jpg">
					<div class="caption">
						<h3>Sony DSLR</h3>
						<p>Price: Rs 40,000.00</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						  	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
						  	<?php                             
						  } else {                            
						  //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart("2") != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						  		?>                                     
						  		<a href="cart_add.php?id=2" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						  	<?php                                 
						    }                             
						  }                             
						  ?>  
						
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="Image/3.jpg">
					<div class="caption">
						<h3>Sony DSLR</h3>
						<p>Price: Rs 50,000.00</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						  	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
						  	<?php                             
						  } else {                            
						  //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart("3") != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						  		?>                                     
						  		<a href="cart_add.php?id=3" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						  	<?php                                 
						    }                             
						  }                             
						  ?>  
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="Image/4.jpg">
					<div class="caption" >
						<h3>Olympus DSLR</h3>
						<p>Price: Rs 80,000.00</p>
						<form action="cart_add.php">
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						  	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
						  	<?php                             
						  } else {                            
						  //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart("4") != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						  		?>                                     
						  		<a href="cart_add.php?id=4" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						  	<?php                                 
						    }                             
						  }                             
						  ?>  
					</div>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="Image/1.jpg">
					<div class="caption" >
						<h3>Cannon EOS</h3>
						<p>Price: Rs 36,000.00</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						  	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
						  	<?php                             
						  } else {                            
						  //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart("5") != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						  		?>                                     
						  		<a href="cart_add.php?id=5" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						  	<?php                                 
						    }                             
						  }                             
						  ?>  
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="Image/6.jpg">
					<div class="caption" >
						<h3>Luis Phill</h3>
						<p>Price: Rs 1,000.00</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						  	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
						  	<?php                             
						  } else {                            
						  //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart("6") != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						  		?>                                     
						  		<a href="cart_add.php?id=6" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						  	<?php                                 
						    }                             
						  }                             
						  ?>  
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="Image/7.jpg">
					<div class="caption" >
						<h3>Titan</h3>
						<p>Price: Rs 4,000.00</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						  	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
						  	<?php                             
						  } else {                            
						  //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart("7") != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						  		?>                                     
						  		<a href="cart_add.php?id=7" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						  	<?php                                 
						    }                             
						  }                             
						  ?>  
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="Image/8.jpg">
					<div class="caption" >
						<h3>H&W</h3>
						<p>Price: Rs 800.00</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						  	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
						  	<?php                             
						  } else {                            
						  //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart("8") != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						  		?>                                     
						  		<a href="cart_add.php?id=8" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						  	<?php                                 
						    }                             
						  }                             
						  ?>  
					</div>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="Image/9.jpg">
					<div class="caption" >
						<h3>Titan Model #301</h3>
						<p>Price: Rs 13,000.00</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						  	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
						  	<?php                             
						  } else {                            
						  //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart("9") != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						  		?>                                     
						  		<a href="cart_add.php?id=9" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						  	<?php                                 
						    }                             
						  }                             
						  ?>  
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="Image/10.jpg">
					<div class="caption">
						<h3>Titan Model #201</h3>
						<p>Price: Rs 3,000.00</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						  	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
						  	<?php                             
						  } else {                            
						  //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart("10") != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						  		?>                                     
						  		<a href="cart_add.php?id=10" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						  	<?php                                 
						    }                             
						  }                             
						  ?>  
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="Image/11.jpg">
					<div class="caption" >
						<h3>HMT Milan</h3>
						<p>Price: Rs 8,000.00</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						  	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
						  	<?php                             
						  } else {                            
						  //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart("11") != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						  		?>                                     
						  		<a href="cart_add.php?id=11" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						  	<?php                                 
						    }                             
						  }                             
						  ?>  
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="Image/12.jpg">
					<div class="caption" >
						<h3>Faber Luber #111</h3>
						<p>Price: Rs 18,000.00</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						  	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
						  	<?php                             
						  } else {                            
						  //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart("12") != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						  		?>                                     
						  		<a href="cart_add.php?id=12" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						  	<?php                                 
						    }                             
						  }                             
						  ?>  
					</div>
				</div>
			</div>
		</div>
	</div><br><br>
</body>
</html>