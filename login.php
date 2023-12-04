<?php
session_start();
// Database connection variables
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sign";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get email and password from form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepare and execute SQL query
    $stmt = $conn->prepare("SELECT * FROM USERs WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a row is found in the database
    if ($result->num_rows > 0)
     {
        // Fetch the row data
        $row = $result->fetch_assoc();
        $storedPassword = $row["password"];

        // Verify the password
        if ($password === $storedPassword)
         {
            // Redirect to mainaccount.html
            $_SESSION['email'] = $email;
            header("location:mainaccount.php");
            exit(); 
        }
        header("location:errorpasem.html");
        exit(); 
    }
    else{
        header("location:userfnd.html");
        exit(); 
    }
    
}

$conn->close();
?>
