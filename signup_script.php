<?php
$con= mysqli_connect("localhost", "root", "", "store") or die (mysqli_error($con));
//session_start();
//if (isset($_POST['save'])){
	$name= mysqli_real_escape_string($con,$_POST['Name']);
    $email= mysqli_real_escape_string($con,$_POST['Email']);
    $password= mysqli_real_escape_string($con,$_POST['Password']);
    $contact= mysqli_real_escape_string($con,$_POST['Contact']);
    $city= mysqli_real_escape_string($con,$_POST['City']);
    $address= mysqli_real_escape_string($con,$_POST['Address']);
    $select_query="SELECT * FROM users WHERE Email='$email'";
    $select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
    if(mysqli_num_rows($select_query_result) > 0) {
    	header('location:login.php');
    } else {
    	$user_registration_query="insert into users(Name,Email,Password,Contact,City,Address) VALUES ('$name','$email','".md5($password)."','$contact','$city','$address')";
    	$select_query_result=mysqli_query($con,$user_registration_query) or die (mysqli_error($con));
    	header('location:product.php');
    	

    }
//}

/*echo "user successfully inserted";
$_SESSION['Email']=$email;
$_SESSION['id']=mysqli_insert_id($con);*/
?>