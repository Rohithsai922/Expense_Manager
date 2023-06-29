<?php
   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "create";

$conn = new mysqli('localhost', 'root', '', 'create');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];
$mobileNumber = $_POST['mobileNumber'];

// Insert data into database
$sql = "INSERT INTO test (username, password, mobileNumber) VALUES ('$username', '$password', '$mobileNumber')";

if (mysqli_query($conn,$sql)) {
    echo "Account created successfully";
     header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

