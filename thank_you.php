<?php 
     $order_id = $_GET['order_id'];

     // Query the database to retrieve order details based on $order_id
     // Display the retrieved order information on the thank you page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Purchase</title>
    <link rel="stylesheet" href="styles.css"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .thank-you-container {
            max-width: 800px;
            margin: 400px auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 24px;
            text-align: center;
        }

        p {
            color: #555;
            font-size: 16px;
        }

        .order-details {
            margin-top: 20px;
        }

        .btn {
            margin-left: 300px;
            display: inline-block;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <h1>Thank You for Your Purchase</h1>
        <p>Your order has been successfully placed. Below are the order details:</p>
        
        <div class="order-details">
            <p><strong>Order Number:</strong> <?php echo $order_number; ?></p>
            <p><strong>Order Date:</strong> <?php echo $order_date; ?></p>
            <p><strong>Total Amount:</strong> <?php echo $total_amount; ?> MAD</p>
        </div>
        
        <p>For more information and updates on your order, please visit your <a href="mainaccount.php">account</a>.</p>
        
        <a href="allproduct.php" class="btn">Continue Shopping</a>
    </div>
</body>
</html>