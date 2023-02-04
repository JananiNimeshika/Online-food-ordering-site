<?php
	session_start();
	include_once('connection/conect.php');
	
	if(isset($_POST['comments'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
  
    
   
 
    $sql = "insert into comments
    (name,email,message) values ('$name','$email','$message')";
    
    $query_run = mysqli_query($con,$sql);
    
    if($query_run){
        
        echo "comment inserted";
       
        
    }
	
    else{
         echo "comment not inserted";
    }
	header("location: aboutus.php");
    
}
	
	
	
	
	
	
	
	
	





?>