<?php
	session_start();
	include_once ('connection/conect.php');




	
       

        if(isset($_GET['dele']))
        {
            $fid = $_GET['dele'];
            $query = " delete from food where fid = '".$fid."'";
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