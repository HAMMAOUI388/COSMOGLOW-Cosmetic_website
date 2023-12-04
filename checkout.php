<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once("conn_db.php");



if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $db = new creatdb("mystore", "customers");

    // Calculate the total order amount
    $total = 0;
    $product_ids = array_column($_SESSION['cart'], 'id');
    $result = $db->getData();
    while ($row = mysqli_fetch_assoc($result)) {
        if (in_array($row['id'], $product_ids)) {
            $total += (float)$row['price'];
        }
    }

    // Create an order record in the database (this part depends on your database schema)
  
    $order_number = "ORD" . time(); // Example: ORD1635448912
    $order_date = date("Y-m-d H:i:s");
    // Insert this information into your database (using SQL INSERT statement)
// ...



// ...

// Pass these values to the thank you page
$_SESSION['order_number'] = $order_number;
$_SESSION['order_date'] = $order_date;
$_SESSION['total_amount'] = $total;

    // Clear the user's cart
    unset($_SESSION['cart']);

    // Optionally, generate an order confirmation page or send an email confirmation

    // Redirect to a thank you page
    header("Location: thank_you.php");
} else {
    // If the cart is empty, handle this scenario as needed
    header("Location: cart.php");
}

?>


