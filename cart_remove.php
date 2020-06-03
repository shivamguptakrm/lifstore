<?php
require 'common.php';
if(!isset($_SESSION['Email'])) {
	header('location:index.php');
}
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$select_query="DELETE  FROM users_items WHERE user_id='$user_id' AND item_id='$item_id' ";
$select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
header('location:cart.php');
//$total_rows_fetched=mysqli_num_rows($select_query_result);
//echo "$total_rows_fetched";

?>

