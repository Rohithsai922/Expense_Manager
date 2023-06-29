<?php
$servername = "localhost";
        $dbusername = "root";
        $password = "";
        $dbname = "create";
        $conn = new mysqli('localhost', 'root', '', 'create');

       if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
       }









$sql = "DELETE FROM expense WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>