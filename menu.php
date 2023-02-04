<?php
	session_start();
	include ('connection/conect.php');

//	if(isset($_POST["add to cart"]))
//	{
//		if(isset($_SESSION["cart"])){
//			$item_array_id = array_column($_SESSION["cart"],"fid");
//			if(!in_array($_GET['fid'], $item_array_id))
//			{
//				$count=count($_SESSION["cart"]);
//                
//				$item_array=array(
//				'fname' => $_GET["fname"];
//				'fprize' => $_POST["fprize"];
//				'fqty' => $_POST["fqty"];
//				'tprize' => $_POST["hidden_price"];);
//                
//		        $_SESSION["cart"] =$item_array;
//			} else {
//				'<script>alert("Item already added")</script>';
//			}
//		}
//	} else {
//		$item_array=array(
//			'fname' => $_GET["fname"];
//			'fprize' => $_POST['fprize'];
//			'fqty' => $_POST['fqty'];
//			'tprize' => $_POST['hidden_price'];
//		);
//        
//		$_SESSION["cart"][0] = $item_array;
//	}



?>

<html>
    <head>
        <title> Menu</title>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css"  >     
              <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        
        <style>
            .container{
                margin-top: 8%;
            }
            .inner{
                overflow: hidden;
            }
            .inner img{
                transition: all 1.5s ease;
            }
            .inner:hover img{
                transform: scale(1.5);
            } 
            
            .order{
                text-align: center;
                font-family: inherit;
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
        
            <h2 class="order"> <marquee> Order Your Meal Here...</marquee></h2>
        <div>
         <form method="post" action="cart.php">
        <div class="container">
           
            <h2 class="text-center"> <b>Vegitarian Foods</b></h2>
            <div class="row justify-content-center">
              
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                            <img class="card-img-top" src="Photos/veg%20dumplings.jpg" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title" value="<?php ?>">Vegitable Dumplings</h5>
                        <p class="card-text"> Hot and crispy Vegitable Dumplings </p>
                             <p value="<?php ?>"> <b>Rs.50.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu" value="<?php echo $fqty ?>">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success" value="add to cart" name="add to cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                             <img class="card-img-top" src="Photos/veg%20kottu.jpg" alt="Card image cap">
                        </div>
                       
                        <div class="card-body text-center">
                        <h5 class="card-title">Vegitable Kottu</h5>
                        <p class="card-text"> Spaicy vegitable kottu</p>
                             <p> <b>Rs.200.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                          <div class="inner">
                              <img class="card-img-top" src="Photos/veg%20pasta.jpg" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title"> Vegitable Pasta</h5>
                        <p class="card-text"> Vegitable Pasta with cheese</p>
                         <p> <b>Rs.300.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                            
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>        
                
                
            </div>
            
            
            
              <div class="row justify-content-center">
              
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                            <img class="card-img-top" src="Photos/veg%20shawarma.png" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title">Vegitable Shawarma</h5>
                        <p class="card-text"> Vegitable Shawarma with delicious souce</p>
                             <p> <b>Rs.200.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                             <img class="card-img-top" src="Photos/vegSalad.jpg" alt="Card image cap">
                        </div>
                       
                        <div class="card-body text-center">
                        <h5 class="card-title">Vegitable Salad</h5>
                        <p class="card-text">Vegitable Salad with fresh vegitables</p>
                             <p> <b>Rs.200.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                          <div class="inner">
                              <img class="card-img-top" src="Photos/Vegetable-Lasagna.jpg" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title">Vegitable Lasagna</h5>
                        <p class="card-text"> Vegitable Lasagna with chees</p>
                         <p> <b>Rs.400.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                            
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>        
                
                
            </div>   
        </div>
        <!--.........................seafoods.................................-->
        
        <div class="container">
            <h2 class="text-center"> <b>Meat and Sea Foods</b></h2>
            <div class="row justify-content-center">
              
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                            <img class="card-img-top" src="Photos/chiken%20wings.jpg" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title">Chiken Wings</h5>
                        <p class="card-text">Spaicy Chikens wings with garlic </p>
                             <p> <b>Rs.600.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                             <img class="card-img-top" src="Photos/biriyaninw.jpeg" alt="Card image cap">
                        </div>
                       
                        <div class="card-body text-center">
                        <h5 class="card-title">Chiken Biriyani</h5>
                        <p class="card-text">Delicious Chiken Biriyani Pot</p>
                             <p> <b>Rs.500.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                          <div class="inner">
                              <img class="card-img-top" src="Photos/crunchwrap.jpg" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title">Chiken Crunchwrap</h5>
                        <p class="card-text">Delicious Chiken Crunchwrap with cheese</p>
                         <p> <b>Rs.300 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                            
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>        
                
                
            </div>
            
            
            
              <div class="row justify-content-center">
              
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                            <img class="card-img-top" src="Photos/fried%20fish%20nw.jpg" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title">Fried Fish</h5>
                        <p class="card-text">Delicious Thai Fried Fish</p>
                             <p> <b>Rs.400.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                             <img class="card-img-top" src="Photos/sea%20food%20paella.jpg" alt="Card image cap">
                        </div>
                       
                        <div class="card-body text-center">
                        <h5 class="card-title">Sea Food Paella</h5>
                        <p class="card-text">Delicious Sea Food Paella</p>
                             <p> <b>Rs.300.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                          <div class="inner">
                              <img class="card-img-top" src="Photos/sea%20food%20rice.jpg" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title">Sea Food Rice</h5>
                        <p class="card-text"> Delicious Sea Food rice with lots of Sea Foods.</p>
                         <p> <b>Rs. <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                            
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>        
                
                
            </div>   
            
            
            
            
              <div class="row justify-content-center">
              
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                            <img class="card-img-top" src="Photos/nasiguran.jpg" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title">Nasi Goreng</h5>
                        <p class="card-text"> Nasi Goreng Rice with egg omlete</p>
                             <p> <b>Rs.400.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                             <img class="card-img-top" src="Photos/chicken-kottu-parata-1000x1000.jpg" alt="Card image cap">
                        </div>
                       
                        <div class="card-body text-center">
                        <h5 class="card-title">Chiken Kottu</h5>
                        <p class="card-text"> Delicious Spaicy Chiken Kottu</p>
                             <p> <b>Rs.200.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                          <div class="inner">
                              <img class="card-img-top" src="Photos/chrice.webp" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title">Chiken Rice</h5>
                        <p class="card-text"> Spaicy Chiken Rice</p>
                         <p> <b>Rs.200.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                            
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>        
                
                
            </div>   
            
            
        </div>
        <!---------------------------------desert------------------------------>
        
        
        
        <div class="container">
            <h2 class="text-center"> <b>Desserts</b></h2>
            <div class="row justify-content-center">
              
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                            <img class="card-img-top" src="Photos/caramal.jpg" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title">Caramal Pudding</h5>
                        <p class="card-text"> Caramal Pudding With honey </p>
                             <p> <b>Rs.150.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                             <img class="card-img-top" src="Photos/watalapan.jpg" alt="Card image cap">
                        </div>
                       
                        <div class="card-body text-center">
                        <h5 class="card-title">Watalappan</h5>
                        <p class="card-text"> Watalappan with honey and cashew</p>
                             <p> <b>Rs.200.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                          <div class="inner">
                              <img class="card-img-top" src="Photos/cup%20cakes.jpg" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title"> Cup Cakes</h5>
                        <p class="card-text"> Delicious Choclate Cup cakes</p>
                         <p> <b>Rs.200.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                            
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>        
                
                
            </div>
            
            
            
              <div class="row justify-content-center">
              
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                            <img class="card-img-top" src="Photos/coffe%20pudding.jpeg" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title">Coffee Pudding</h5>
                        <p class="card-text"> Coffee Puding with choclate ganash</p>
                             <p> <b>Rs.200.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                             <img class="card-img-top" src="Photos/jarcakes.jpg" alt="Card image cap">
                        </div>
                       
                        <div class="card-body text-center">
                        <h5 class="card-title">Jar Cakes</h5>
                        <p class="card-text">Velvet Jar Cakes</p>
                             <p> <b>Rs.300.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                          <div class="inner">
                              <img class="card-img-top" src="Photos/jelly%20pudding.jpg" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-center">
                        <h5 class="card-title">Jelly Pudding</h5>
                        <p class="card-text"> Broken Glass Jelly Pudding</p>
                         <p> <b>Rs.200.00 <br>
                             To Buy Add to your Cart </b></p> 
                            <label for="foods">No of Quntity</label>
                            <select name="foods" id="foodmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select><br>
                            
                        <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>        
                
                
            </div>   
        </div>
            </form>
            </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>