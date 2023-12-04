<?php
// Database connection variables
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sign";

// Create connection
$con = new mysqli($host, $username, $password, $dbname);
?>
<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
// Include the necessary class definition and any other required file
require_once("conn_db.php");
require_once("component.php");
$dbw = new creatdb("Panier1","product");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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


 .table {
    width: 50%; /* Adjust the width as needed */
    margin: auto;
    border-collapse: collapse;
    border: 2px  solid #ddd;
}

.table th, .table td {
    padding: 8px;
    text-align: center;
    border: 1px solid #ddd;
}

.table th {
    background-color: #f2f2f2;
}
.user-info ,.basket-info,.order-info{
        text-align: center;
        font-family: 'Futura';
        font-size: 24px; 
    }


    .basket,.order-history{
        font-family: 'Futura';
        font-size: 24px; 

    }

 </style>
</head>
<body>

   
<div class="header-container shadow mb-5">
<header id="header mb-5">
    <div class="mx-auto"></div>
    <nav class="navbar navbar-expand-lg navbar-light">
        
            <h3 class="h3 px-5">
                <i class="fas fa-shopping-basket"></i> CosmoGlow
            </h3>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="mx-auto"></div>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="h3 nav-link active" aria-current="page" href="pageprincipale.php#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="h3 nav-link" href="pageprincipale.php#aboutus">About Us</a>
            </li>
            <li class="nav-item dropdown">
               <a class="h3 nav-link dropdown-toggle" href="pageprincipale.php#aboutus" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </a>
              <ul class="h44 dropdown-menu">
                
                 <li><a class="dropdown-item" href="women.php">Women Products</a></li>
                 <li><a class="dropdown-item" href="men.php">men Products</a></li>
                 <li><a class="dropdown-item" href="kids.php">kids Products</a></li>

             </ul>
            </li>
         </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mx-auto"></div>
            <div class="navbar-nav">
                <a href="panier.php" class="nav-item nav-link active ">
                        <h5 class="h3  cart">
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



<div class="container">
        <h2 class="text-center mb-5">
           <span  style=" color: black; font-size: 40px; font-family: Abhaya Libre; font-weight: 700; word-wrap: break-word ">Welcome to Your </span>
           <span style="color: #D6BFAE; font-size: 40px; font-family: Abhaya Libre; font-weight: 700; word-wrap: break-word ">Account</span>
        </h2>
        
    
    <div class="user-info">
 
   <!-- ... Your HTML and CSS code ... -->

<?php
// Database connection variables
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sign";

// Create connection
$con = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if user is logged in
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Query to fetch user information
    $sql = "SELECT * FROM USERs WHERE email = '$email'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <div class="user-info">
            <h2 class="user-info mb-4">Your Information :</h2>
            <table class="table">
                <tr><th>Field</th><th>Value</th></tr>
                <tr><td>Username</td><td><?php echo $row['username']; ?></td></tr>
                <tr><td>City</td><td><?php echo $row['ville']; ?></td></tr>
                <tr><td>Email</td><td><?php echo $row['email']; ?></td></tr>
                <tr><td>Adresse</td><td><?php echo $row['adresse']; ?></td></tr>
                <tr><td>Code User</td><td><?php echo $row['code_user']; ?></td></tr>
            </table>
        </div>
        <?php
    } else {
        echo "<p>User information not found.</p>";
    }
}
?>

<!-- ... The rest of your HTML code ... -->



    </div>



        <!-- Display user information fetched from the database -->
        <h2 class="basket-info mb-4 mt-5">Your Basket :</h2>
        <div class="basket">
        <?php
    // Assuming you have fetched user's basket information from the database
    $products = array(
        array(
            'nam' => 'Product A',
            'imag' => 'product_a.jpg',
        ),
        array(
            'nam' => 'Product B',
            'imag' => 'product_b.jpg',
        ),
        array(
            'nam' => 'Product C',
            'imag' => 'product_c.jpg',
        )
    );


    if (isset($_POST['remove'])) {
        $productToRemove = $_POST['id'];
    
        // Assuming you have the basket stored in a session variable named 'cart'
        if (isset($_SESSION['cart'])) {
            // Loop through the cart and find the product to remove
            foreach ($_SESSION['cart'] as $key => $product) {
                if ($product['id'] == $productToRemove) {
                    // Remove the product from the cart
                    unset($_SESSION['cart'][$key]);
                    // Re-index the array to maintain consistent keys
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    break; // Exit the loop after removing the product
                    
                }
            }
        }
    
        // Redirect back to the same page to reflect the changes
        header("Location: mainaccount.php");
        exit();
    }
    

    if (isset($_POST['empty'])) {
        // Empty the basket
        if (isset($_SESSION['cart'])) {
            unset($_SESSION['cart']);
        }

        // Display message when the basket is empty
    } else {
        // Display the basket items
        echo "<ul class='list-group'>";
        if(isset($_SESSION['cart']))
        {
                            $result = $dbw->getData() ;
                            
                            $product_id =array_column($_SESSION['cart'],'id');
                            while($row =mysqli_fetch_assoc($result))
                            {
                                foreach($product_id as $ids)
                                {
                                    if($row['id'] == $ids)
                                    {
                                        cartelement($row['imag'],$row['nam'],$row['price'],$row['id']);
                                    }
                                }
    
                            }
                       
                        }else{
                            echo "<p class='text-center text-muted'>Your basket is empty.</p>";

                        }   

        // Empty basket button
        echo "<div class='text-center mb-5'>";
        echo "<form method='post'>";
        echo "<button type='submit' name='empty' class='btn btn-secondary'>Empty Basket</button>";
        echo "</form>";
        echo "</div>";
    }
    ?>


    

        <!-- Display past orders if available -->


    </div>

</div>








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>