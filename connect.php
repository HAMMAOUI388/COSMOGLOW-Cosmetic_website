<?php
// Retrieve form data
$email = $_POST['email'];
$username = $_POST['username'];
$ville = $_POST['ville'];
$adresse = $_POST['adresse'];
$password = $_POST['password'];

// Validate form data
if (empty($email) || empty($username) || empty($ville) || empty($adresse) || empty($password)) {
  // Required field is missing
  header("Location: empty.html");
  // You can also redirect back to the form and display an error message there.
  exit;
}

// Connect to the database
$host = 'localhost';
$dbName = 'sign';
$dbUsername = 'root';
$dbPassword = '';

$conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUsername, $dbPassword);

// Insert data into the database
$stmt = $conn->prepare("INSERT INTO USERs (email, username, ville, adresse, password) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([$email,$username, $ville, $adresse, $password]);
// Check if the data was successfully inserted
if ($stmt->rowCount() > 0) {
  // Redirect to a new page
  echo "<script>alert('registration  succefully.....!GO LOGIN TO YOUR ACCOUNT ')</script>";
                echo "<script>window.location = 'login.html'</script>";
  exit;
} else {
  echo "Sign-up failed. Please try again.";
}
?>