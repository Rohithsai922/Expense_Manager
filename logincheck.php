<?php
// Check if the login form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the values entered by the user in the login form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Connect to the database
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "create";

    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    
    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Query the database to check if the entered credentials are valid
    $sql = "SELECT * FROM test WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
    // Check if the query was successful
    if (mysqli_num_rows($result) > 0) {
        // The user's credentials are valid
        session_start();
        $_SESSION['username'] = $username;
        
        header("Location: mainpage.php");
    } else {
        // The user's credentials are invalid
        echo "Invalid username or password";
        header("Location: missing.php?username=$username");
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>
