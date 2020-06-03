<?php 
require 'common.php'; 
if(!isset($_SESSION['Email'])) {
	header('location:index.php');
}



$con= mysqli_connect("localhost", "root", "", "store") or die (mysqli_error($con));
$email=$_SESSION['Email'];
$password=md5(mysqli_real_escape_string($con,$_POST['Password']));
$newpass=md5(mysqli_real_escape_string($con,$_POST['newpass']));

   $select_query="SELECT password FROM users WHERE Email='$email' and Password='$password' ";
    $select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
    $total_rows_fetched=mysqli_num_rows($select_query_result);
    

    if(mysqli_num_rows($select_query_result) > 0) {
    	$row=mysqli_fetch_array($select_query_result);
    	$r=$row['0'];

    	if ($password==$r) {
    		$con= mysqli_connect("localhost", "root", "", "store") or die (mysqli_error($con));
    		 $select_query="UPDATE `users` SET `Password` = '$newpass' WHERE `users`.`Email` = '$email' ";
    		    $select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
    		    header('location:product.php');
    	
    	} 
}else{
	echo "incorrect old password";
}
?>