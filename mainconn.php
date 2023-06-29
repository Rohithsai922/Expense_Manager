<?php 

$servername = "localhost";
$dbusername = "root";
$password = "";
$dbname = "create";

$conn = new mysqli('localhost', 'root', '', 'create');



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

   session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
  
   $_SESSION['username'];


  $username=$_SESSION['username'];
  $Date= $_POST['date'];
  $Amount= $_POST['Amount'];
  $Reason= $_POST['reason'];
  $Treason=implode($Reason);
  $Note= $_POST['note'];
   

//Insert data

$main = "INSERT INTO expense (username,Amount,Datee, Reason,Note) VALUES ('$username','$Amount', '$Date', '$Treason' , '$Note')";

if (mysqli_query($conn,$main)) {
    echo "Data Entered successfully";
   header("Location: display.php");
   
     
} else {
    echo "Error: " . $main . "<br>" . $conn->error;
}

$conn->close();
?>