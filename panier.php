


<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
// Include the necessary class definition and any other required files

require_once("conn_db.php");
require_once("component.php");

// Create an instance of the creatdb class
$db = new creatdb("Panier1","product");


if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value["id"]==$_GET['id'])
            {
                unset($_SESSION['cart'][$key]);           
                echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'panier.php'</script>";
            }

        }

    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/fontawesome/css/all.min.css">
    <script src="path/to/jquery/jquery.min.js"></script>
</head>
<body class="bg-light">
    
   
   
    <style>
        /* Style for the header container */
        .header-container {
            position: sticky;
            top: 0;
            background-color: #ffffff; /* Adjust the background color as needed */
            z-index: 1000; /* Ensure the header appears above other content */
            width: 100%; /* Make sure the header spans the full width */
        }
        .h3{
    font-family: Futura ;
          }
 
          .navbar{
            padding: 40px 0;
    background-color: #D6BFAE;
    border-color: #D6BFAE;
          }
          .h44{    font-family: Futura ;
            background-color: #D6BFAE;

          }
          .navbar-nav li {
    margin: 0px 10px; /* Adjust the margin as needed */
}
.nav-link {
    font-size: 22px; /* Adjust the font size as needed */
}



    </style>
<body>
    
<div class="header-container">
<header id="header">
    <div class="mx-auto"></div>
    <nav class="navbar navbar-expand-lg navbar-light">
        
            <h3 class="h3 px-5">
                <i class="fas fa-shopping-basket"></i> CosmoGlow
            </h3>

        <button class="navbar-toggler" 
             type="button" 
             data-toggle="collapse" 
             data-target="#navbarNavAltMarkup"
             aria-controls="navbarNavAltMarkup"
             aria-expanded="false"
             aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="mx-auto"></div>
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="h3 nav-link active" aria-current="page" href="pageprincipale.php#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="h3 nav-link" href="moreaboutus.html">About Us</a>
        </li>
        <li class="navbar-item dropdown">
          <a class="h3 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="h4 dropdown-menu">
            <li><a class="dropdown-item" href="login.html">Log In</a></li>
            <li><a class="dropdown-item" href="signup.html">Sign UP</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="men.php">Men Products</a></li>
            <li><a class="dropdown-item" href="kids.php">Kids Products</a></li>
            <li><a class="dropdown-item" href="women.php">Women Products</a></li>
          </ul>
        </li>
      </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mx-auto"></div>
            <div class="navbar-nav">
                <a href="panier.php" class="nav-item nav-link active ">
                        <h5 class="h3 px-5 cart">
                         <i class="fas fa-shopping-cart"> </i> Cart
                               <?php 
                                 if(isset($_SESSION['cart']))
                                     {
                                         $count=count($_SESSION['cart']);
                                          echo "<span id=\"cart_count\" class=\"text-warning bg-dark\">$count</span>";
                                     }
                                 else{
                                           echo" <span id=\"cart_count\" class=\"text-warning bg-dark\">0</span>";
                                     }
                               ?>
                        </h5>
                 </a>
            </div>
        </div>
    </nav>
   
</header>
</div>
</body>
</html>
    
    <div class="container-fluid">
    <style>
        .h5,.h6,.h3{
    font-family: Futura ;
          }
          .check{
            margin-top: 50px;
            margin-bottom: 50px;
            margin-left: 230px;
            
            justify-content: center;
            align-items: center;
            text-align: center;
          }
    
  
    </style>
         <div class="row px-5">
            <div class="col-md-7">
                <div class="h3 shopping-cart">
                    <h6>My Cart</h6>
                    <hr>

                    <?php
                        $total=0;
                        if(isset($_SESSION['cart']))
                        {
                            $result = $db->getData() ;
                            
                            $product_id =array_column($_SESSION['cart'],'id');
                            while($row =mysqli_fetch_assoc($result))
                            {
                                foreach($product_id as $ids)
                                {
                                    if($row['id'] == $ids)
                                    {
                                        cartelement($row['imag'],$row['nam'],$row['price'],$row['id']);
                                        $total=$total+(float)$row['price'];
                                        
                                    }
                                }
    
                            }
                        }
                        else{
                            echo"<h5>Cart is empty !</h5>";
                        }
                       
              
                    ?> 


                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                <div class="h3 pt-4">
                    <h5>
                        PRICE DETAILS
                    </h5>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php 
                            if(isset($_SESSION['cart']))
                            {
                                $count =count($_SESSION['cart']);
                                echo" <h6>Price ($count items)</h6>";

                            }
                            else
                            {
                                echo"<h6>Price (0 items)</h6>";
                            }
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount Payble</h6>

                        </div>
                        <div class="col-md-6">
                            <h6>
                            <?php 
                            echo $total;
                            ?>
                            </h6>
                            <h6 class="h6 text-success">
                                FREE
                            </h6>
                            <hr>
                            <h6><?php 
                            echo $total; ?> MAD</h6>
                        </div>
                    </div>
                </div>
                <div>
        <button class="check btn btn-primary " id="checkoutButton">Checkout</button> 
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                     <script>
                         $(document).ready(function () {
                         $("#checkoutButton").click(function () {
                         // Redirect to the checkout PHP script
                         window.location.href = "checkout.php";
                        });
                     });
                    </script>
               
        </div>
 
            </div>
         </div>
       

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>