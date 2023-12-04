
<?php
// start session
session_start();
require_once('component.php');
require_once('conn_db.php');
// creat instance of the class
$database= new creatdb("Panier1","product");
if(isset($_POST['add']))
{
    // print_r($_POST['product_id']);
    if(isset($_SESSION['cart']))
    {
        $item_array_id = array_column($_SESSION['cart'],"id");
        if(in_array($_POST['id'],$item_array_id))
        {
          echo "<script>alert('Product is already added to the cart !')</script>";
          echo "<script>window.location ='allproduct.php'</script>";
        }
        else{
            $count=count($_SESSION['cart']);
            $items_array = array('id' => $_POST['id']);

            $_SESSION['cart'][$count] = $items_array;
            // print_r($_SESSION['cart']);
            echo "<script>alert('Product is added !')</script>";
            echo "<script>window.location ='allproduct.php'</script>";
        } 
    }
    else
    {
        $items_array = array('id' => $_POST['id']);
        //create new session variable
        $_SESSION['cart'][0]=$items_array;
        print_r( $_SESSION['cart']);
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CosmoGlow Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </head>

  <style>
        /* Style for the header container */
        .header-container {
            position: sticky;
            top: 0;
            background-color: #ffffff; /* Adjust the background color as needed */
            z-index: 1000; /* Ensure the header appears above other content */
            width: 100%; /* Make sure the header spans the full width */
            padding-bottom: 3px;
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
</head>

    
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
          <a class="h3 nav-link" href="pageprincipale.php#aboutus">About Us</a>
        </li>
        <li class="nav-item dropdown" >
          <a class="h3 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="h44 dropdown-menu" >
            <li><a class="dropdown-item" href="login.html">Log In</a></li>
            <li><a class="dropdown-item" href="signup.html">Sign UP</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="men.php">Men Products</a></li>
            <li><a class="dropdown-item" href="kids.php">Kids Product</a></li>
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

<body>

    <div class="container">
       <div>
           <span  style=" color: black; font-size: 40px; font-family: Abhaya Libre; font-weight: 700; word-wrap: break-word ">All Our </span>
           <span style="color: #D6BFAE; font-size: 40px; font-family: Abhaya Libre; font-weight: 700; word-wrap: break-word ">Products</span>
       </div>
  
        <div class="row text-center py-5">
           <?php
          $result = $database->getData();
          while($row=mysqli_fetch_assoc($result))
          {
            component($row['id'],$row['nam'], $row['price'],$row['imag'],$row['ancienprice'],$row['infoprod'],$row['categorie']);
          }
           ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
</body>
</html>