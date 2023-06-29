<!DOCTYPE html>
<html>
<head>
    <title>Reasons</title>
        <link rel="stylesheet" type="text/css" href="displaystyle.css"> 
        <style>
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ddd;
}

li a.active {
  color: white;
  background-color: #04AA6D;
}

body{
    background-image: url('beg3.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
}


</style>
</head>
<body>


      <ul>
    <li><a  href="http://localhost/crud/mainpage.php">Expense</a></li>
    <li><a   href="http://localhost/crud/display.php">Display</a></li>
     <li><a class="active" href="http://localhost/crud/sorted.php">Filter</a></li>
     <li><a href="http://localhost/crud/About.php">About</a></li>
   </ul>










    <h2>Select a Reason</h2>

    <form method="POST" action="">
        <label for="reason">Reason:</label>
        <select id="reason" name="reason">
            <option value="food">Food</option>
            <option value="shopping">Shopping</option>
            <option value="other">Other</option>
        </select>
        <input type="submit" value="Submit">
    </form>

     
     <table class="styled-table">
      <thead>
        <tr>
         <th>Amount</th>
         <th>Date</th>
         <th>Reason</th>
         <th>Note</th>
         
         
       </tr>
     </thead>
      <tbody>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if the reason field is set in the form data
        if (isset($_POST['reason'])) {
            $reason = $_POST['reason'];

            // Create connection to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "create";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

               session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
               $username=$_SESSION['username'];

            // Perform the database query based on the selected reason
            $sql = "SELECT * FROM expense WHERE Reason = '$reason' and username='$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<h3>Results:</h3>";
                echo "<ul>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr+><td>" . $row['Amount'] . "
                </td><td>" . $row['Datee'] . "</td>
               <td>" . $row['Reason'] . "</td>
               <td>" . $row['Note'] . "</td>
             
                 </tr>";
                }
                echo "</ul>";
            } else {
                echo "No results found for the selected reason.";
            }

            // Close the connection
            $conn->close();
        }
    }
    ?>
</tbody>
</table>
    
</body>
</html>
