<?php
	session_start();
	include_once ('connection/conect.php');
	
	 if(isset($_POST['update']))
    {
        $fid = $_GET['fid'];
		$fname = $_POST['fname'];
		$fprize = $_POST['fprize'];
    

        $query = " update food set fid = '".$fid."', fname='".$fname."',fprize='".$fprize."' where fid='".$fid."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location: adminwork.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
       header("location: adminwork.php");
    }

	
	
	
	
	
?>