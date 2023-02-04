<?php
	session_start();
	include ('connection/conect.php');
?>

<html>
    <head>
        <title>Admin Login </title>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css"  >     
              <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        
        <style>
            body{
                font-family: 'Roboto', sans-serif;
                background: url(Photos/back1.jpg) no-repeat center center fixed;
                background-size: cover;
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
            .user-img img {
                height: 120px;
                width: 120px;
                
            }
            .user-img{
                margin-top: -60px;
                margin-bottom: 45px;
                
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
            .frogot{
                padding: 5px 0 25px;
            }
            .frogot a {
                color: #daf1ff;
            }
        
       
    
        </style> 
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><i class="fas fa-user-shield"></i></a>
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
        <!--................................................................................-->
        
        
        <div class="modal-dialog text-center">
            <div class="col-sm-9- main-section">
                <div class="modal-content">
                    <div class="col-12 user-img">
                        <img src="Photos/admin.gif">
                    </div>
                    <div class="col-12 form-input">
                        
                        
                        <form method="post" action="adminform.php">
                            <div class="form-group">
                                <input type="username" class="form-control" placeholder="Enter your user name" name="name" required>
                            </div>
                             <div class="form-group">
                                <input type="pasword" class="form-control" placeholder="Enter your password" name="pasword" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success" onclick="adminwork.php"> Login</button>
                        </form>
                    </div>
                    <div class="col-12 forgot">
                        <a href="#" > Frogot Password</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>