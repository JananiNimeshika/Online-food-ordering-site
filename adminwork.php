<?php
	session_start();
	include ('connection/conect.php');
?>




<html>
    <head>
        <title> Workin Form</title>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css"
              href="style.css"  >     
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        
        
        <style>
            
            body{
                font-family: 'Roboto', sans-serif;
                background: url(Photos/back1.jpg) no-repeat center center fixed;
                background-size: cover;
            }
            
            .order{
                text-align: center;
                font-family: inherit;
            }
            .main-section{
                margin: 0 auto;
                margin-top: 130px;
                padding: 0;
            }
             .modal-content{
                background-color: #434e5a;
                opacity: .9;
                padding: 0 18px;
                border-radius: 10px;
                
            }
             .form-group{
                margin-bottom: 25px;
            }
            .form-group input{
                height: 42px;
                border-radius: 5px;
                border: 0;
                font-size: 18px;
                letter-spacing: 2px;
                padding-left: 54px;
            }
             .form-group:before{
                font-family: 'font Awesome\ 5 Free';
                content: "\f1fa";
                position: absolute;
                font-size: 22px;
                left: 28px;
            }
            .form-input button{
                width: 40%;
                margin: 5px 0 25px;
            }
            .btn-success{
                background-color: #1c6288;
                font-size:19px;
                border-radius: 5px;
                padding: 7px 14px;
                border: 1px solid #daf1ff;
                
            }
            .btn-success:hover{
                background-color: #13445e;
                border: 1px solid #daf1ff;
            }
            
            .table{
                 border: 1px solid black;
            }
            .thed{
                 text-align: center;
                  
            }
        </style>
        
        
        
    </head>
    <body>
        <!--....................................navbar..............................................-->
        
        
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="admin.php"><i class="fas fa-user-shield"></i></a>
  <a class="navbar-brand" href="#">GET YOUR FAVOURITE FOOD..</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php">Menu</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="delivery.php">Delivery Areas</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="aboutus.php"> About us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
        <!--.............. Edit daily menu.....................-->
        
        
        
        
          <h1 class="order"> <b><marquee> Add Today's Menu...</marquee></b></h1>      
        <div class="modal-dialog text-center">
            <div class="col-sm-9- main-section">
                <div class="modal-content">
                    <div class="col-12 ">
                       <h2> Add Menu</h2>     
                    </div>
                    <div class="col-12 form-input">
                        
                        
                        <form method="post" action="insertData.php">
                            
                            <div class="form-group">
                                <input type="fid" class="form-control" placeholder="Enter food id" name="fid" required>
                            </div>
                             <div class="form-group"> 
                                <input type="fname" class="form-control" placeholder="Enter food name" name="fname" required>
                            </div>
                            <div class="form-group">
                               
                                <input type="fprize" class="form-control" placeholder="Enter food prize" name="fprize" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success" > Submit</button>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
           <br>    
        
        <!-- ..........................retrive data ..............................-->
          <h1 class="order"> <b> Edit Today's Menu...</b></h1>

          
          
        
<table class="table table-dark">
  <thead class="thed">
    <tr>
      <th scope="col">Food ID</th>
      <th scope="col">Food Name</th>
      <th scope="col">Food Price</th>
      <th scope="col">Action </th>
    </tr>
  </thead>
    
    <?php
        
        $query = " select * from food ";
        $result = mysqli_query($con,$query);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $fid = $row['fid'];
                                        $fname = $row['fname'];
                                        $fprize = $row['fprize'];
                                        
                                        
       
    
    ?>
    
    
  <tbody class="thed">
    <tr>
      <td><?php echo $fid ?></td>
      <td><?php echo $fname ?></td>
      <td> <?php echo $fprize ?> </td>
      <td><a href="upform.php?Getfid=<?php echo $fid ?>"><button type="button" name="update" class="btn btn-primary">Update Menu</button></a>
          
          
          <a href="deleteData.php?dele=<?php echo $fid ?>">
              <button type="button" name="delete" class="btn btn-primary" >Delete Items</button></a> </td>
    </tr>
    <?php 
                 }
           
		
          ?>  
  </tbody>
</table>
        
     
 
        
        

    </body>
</html>