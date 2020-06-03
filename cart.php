
<?php
require 'common.php';
if(!isset($_SESSION['Email'])) {
	header('location:index.php');
}/*else {
	header('location:cart.php');
}*/
?>
<!DOCTYPE html>
<html>
<head>

	<title>Cart | Lifestyle Store</title>
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
	<div class="container">	
		<div class="col-md-8 col-md-offset-2">
	    	<table class="table table-striped table-responsive" style="margin-top: 70px;">
	    		<?php
	    		$sum=0;
	    		$id='';
	    		$user_id=$_SESSION['id'];
	    		$con= mysqli_connect("localhost", "root", "", "store") or die (mysqli_error($con));
	    		$query="SELECT items.id AS id, items.price AS Price,items.item_name AS Name FROM users_items JOIN items ON users_items.item_id=items.id WHERE users_items.user_id='$user_id' AND status='Added to cart'";
	    		//echo "$query";
	    		
	    		$result=mysqli_query($con,$query) or die(mysqli_error($con));
	    		if (mysqli_num_rows($result)>=1){
	    			echo mysqli_num_rows($result);
	    			?>
	    	
	    		<thead>
	    			<tr>
	    				<th>Item Number</th>
	    				<th>Item Name</th>
	    				<th>Price</th>
	    				<th></th>
	    			</tr>
	    		</thead>

	    		<tbody>
	    			<?php
	    			while ($row=mysqli_fetch_array($result)) {
	    				$sum+=$row["Price"];
	    				
	    				//$id.=$row["id"].",";
	    				echo "<tr><td>"."#".$row["id"]."</td><td>".$row["Name"]."</td><td>Rs".$row["Price"]."</td><td><a href='cart_remove.php?id={$row['id']}' class='remove_item_link'>Remove</a></td></tr>";	 
	    				
	    		}
	    		$id=rtrim($id,",");
	    			echo "<tr><td></td><td>Total</td><td>Rs".$sum."</td><td><a href='success.php?items_id=".$id."' class='btn btn-primary'>Confirm Order</a></td></tr>";

	    		?>
	    		</tbody>
	    				<?php
	    	} 
	    	?>
	    	
	    	
	    
	    		
	    	</table>
	    	<?php
	    		if (mysqli_num_rows($result)==0){
	    		echo "Add item first";
	    	}
	    	?>
		</div>
	</div>
	<!--?php 
	$user_id='19';
	$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));

	$select_query="SELECT item_id FROM users_items WHERE user_id='$user_id'";
    $select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
    if(mysqli_num_rows($select_query_result) == 0) {
    	echo "Add item to cart";
    } else {
    	while ($row=mysqli_fetch_array($select_query_result)) {
    	echo $row['item_id']."<br/>";
    	}
    }

	 ?-->
	 <!--SELECT items.id AS id, items.price AS Price,items.item_name AS Name FROM users_items JOIN items ON users_items.item_id=item_id WHERE users_items.user_id='$user_id' AND status='Added to cart'-->
</body>
</html>