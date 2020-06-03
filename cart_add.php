<?php
require 'common.php';
if(!isset($_SESSION['Email'])) {
	header('location:index.php');
}
$email=$_SESSION['Email'];
echo $email;
$con= mysqli_connect("localhost", "root", "", "store") or die (mysqli_error($con));

$select_query="SELECT id FROM users WHERE Email='$email'";

$select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
$row=mysqli_fetch_array($select_query_result);
$user_id=$row['id'];
//echo "$user_id";

$item_id=$_GET['id'];
//echo "$item_id";
$user_registration_query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart') ";
$select_query_result=mysqli_query($con,$user_registration_query) or die (mysqli_error($con));
header('location:product.php');
?>

