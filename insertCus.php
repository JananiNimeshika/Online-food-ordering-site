<?php
	
	session_start();
	include_once ('connection/conect.php');
	
	$email=$_POST["email"];
	$tele=$_POST["tele"];
	
	//chek e mail is valid or not
	
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  echo("$email is a valid email address");
	} else {
	  echo("$email is not a valid email address");
	}


	// check phone no valid or not
    if (preg_match("/^[0-9]+$/", $tele)) {
       echo("$tele is valid");  
    }
    else{
		echo ("$tele not valid");
	}

?>

<?php

	
	session_start();
	include_once ('connection/conect.php');
	
	
	
	if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $Address = $_POST['Address'];
    $email = $_POST['email'];
    $tele = $_POST['tele'];
   
    
   
 
    $sql = "insert into customer
    (username,Address ,email,tele) values ('$username','$Address','$email',' $tele')";
    
    $query_run = mysqli_query($con,$sql);
    
    if($query_run){
        
        echo "<script>alert('data insert succesfully')</script> ";
       
        
    }
	
    else{
         echo "<script>alert('data not insert succesfully')</script> ";
    }
	header("location: cusForm.php");
    
	
	}
	
	
	
?>





