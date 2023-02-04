<?php
	session_start();
	include ('connection/conect.php');

?>


<html>
    <head>
        <title> Customer Registation Form</title>
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
        
        <!--..................css.............-->
        <style>
            body{
                margin: 0;
                padding: 0;
                background-color: #fff;
            }
            .form-div{
                margin: 5% auto;
                border-top:15px groove #017fb5;
                border-bottom: 15px groove #017fb5;
            }
            .form-div h1{
                font-size: 3.5em;
                color:#017fb5;
                margin: 2% 0;
                 font-weight: 700;
                
            }
            .form-div label{
                font-size: 2em;
                color:#017bf5;
                font-weight: 500;
                margin: 2% 0;
                
            }
            form-div input[type="text"]{
                -webkit-appearance:none !important;
                border:none;
                border-bottom: 1px solid #017fb5;
            }
            form-div{
                margin: 2% 0;
                font-size: 1.5em;
                font-weight: 660;
            }
        </style>
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 form-div">
                    <form id="form-register" method="post" action="insertCus.php">
                        <h1 class="text-center"> REGISTER</h1>
                        <div class="form-group">
                            <label for="username" > User Name</label>
                            <input type="text" name="username" class="form-control form-control-lg" placeholder="enter user name" required>
                        </div>
                         <div class="form-group">
                            <label for="address" > Address</label>
                            <input type="text" name="Address" class="form-control form-control-lg" placeholder="enter address name" required>
                        </div>
                         <div class="form-group">
                            <label for="email" > Email</label>
                            <input type="text" name="email" class="form-control form-control-lg" placeholder="enter your email" required>
                        </div>
                         <div class="form-group">
                            <label for="telephone no" > Telephone No</label>
                            <input type="text" name="tele" class="form-control form-control-lg" placeholder="enter user telephone No" required >
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" form="form-register" value="sign-up" class="btn btn-primary btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
        
    </body>
</html>