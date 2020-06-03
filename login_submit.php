<?php
require 'common.php';
/*if (isset($_POST['Email'])) {
	$_SESSION['Email']=$_POST['Email'];
	header('location:product.php');
}*/
$con= mysqli_connect("localhost", "root", "", "store") or die (mysqli_error($con));
$email= mysqli_real_escape_string($con,$_POST['Email']);
$password=md5(mysqli_real_escape_string($con,$_POST['Password']));

   $select_query="SELECT id FROM users WHERE Email='$email' and Password='$password' ";
    $select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
    $total_rows_fetched=mysqli_num_rows($select_query_result);
    $row=mysqli_fetch_array($select_query_result);
    $id=$row['id'];
    //echo "$id";
    if(mysqli_num_rows($select_query_result) > 0) {
         $_SESSION['Email']=$email;

        $_SESSION['id']=$id;
       
    	header('location:product.php');
       
    } else {
    	
    	//header('location:login.php');
         $error = "Please enter correct E-mail id and Password";
        header('location: login.php?error=' . $error);
    }


//echo "$id";*/
?>