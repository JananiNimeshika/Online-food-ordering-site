<?php
	session_start();
	include ('connection/conect.php');
		
		
	if (isset($_POST['submit'])) {

	if (empty($_POST['name']) || empty($_POST['pasword'])) {
	echo "Username or Password is invalid";
	}
	else
	{
	// Define admins and password
	$name = $_POST['name'];
	$pasword = $_POST['pasword'];
	

	//  registerd admin and pasword  match.
	$query = mysqli_query($con,"select * from admin where name='$name' AND pasword='$pasword'");
	$rows = mysqli_num_rows($query);
	if($rows == 1) {
		$_SESSION['name']=$name;// Initializing Session
		header("location: adminwork.php"); 

	$row = mysqli_fetch_assoc($query);
	if ($row < 2) {
		$_SESSION['name']=$name;
		$_SESSION['pasword']=$pasword;
		// Initializing Session
		header("location: adminwork.php");


	} 
	}
	else {
	echo "Username or Password is invalid";
	}

	mysqli_close($con); 
	}
	}












?>
