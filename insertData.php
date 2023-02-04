<?php
	session_start();
	include_once('connection/conect.php');
	
	if(isset($_POST['submit'])){
    
    $fid = $_POST['fid'];
    $fname = $_POST['fname'];
    $fprize = $_POST['fprize'];
    
   
    
   
 
    $sql = "insert into food
    (fid,fname,fprize) values ('$fid','$fname','$fprize')";
    
    $query_run = mysqli_query($con,$sql);
    
    if($query_run){
        
        echo "<script>alert('food insert succesfully')</script>";
       
        
    }
	
    else{
         echo "<script>alert('food not inserted')</script>";
    }
	header("location: adminwork.php");
    
}
	



?>