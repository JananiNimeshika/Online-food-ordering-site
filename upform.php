<?php
	session_start();
	include ('connection/conect.php');
?>
<html>


<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/Admin.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <style>
       
    </style>
    
    
</head>
<body>
	 <?php 

   
    $fid = $_GET['Getfid'];
    $query = " select * from food where fid='".$fid."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
		 
    {
        $fid = $row['fid'];
		$fname = $row['fname'];
		$fprize = $row['fprize'];
    
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Update Form</title>
    <style>
        
        body{
                font-family: 'Roboto', sans-serif;
                background: url(Photos/p1.jpg) no-repeat center center fixed;
                background-size: cover;
        }
   
    
        
    </style>
    
    
    
    
    
</head>
<body>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-4"> Update Data</h3>
                        </div>
                        <div class="card-body">

                            <form action="updateData.php?fid=<?php echo $fid ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" food id  " name="fid" value="<?php echo $fid ?>">
                                <input type="Address" class="form-control mb-2" placeholder=" food name " name="fname" value="<?php echo $fname ?>">
                                <input type="text" class="form-control mb-2" placeholder=" food prize " name="fprize" value="<?php echo $fprize ?>">
                                 
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>












</html>