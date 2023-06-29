<html>
  <head>
    <title>Display</title>

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
</style>









  </head>

  <body>

  


    <center><h2>Total Expense List</h2>
    <br>

    <table class="styled-table">
      <thead>
        <tr>
         <th>Amount</th>
         
         
       </tr>
     </thead>
     <tbody>
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
        $username=$_SESSION['username'];
         

$sql = "SELECT SUM(Amount) AS total FROM expense WHERE username='$username'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr+><td>"  . $row["total"]."</td>
        </tr+>";
    }
} else {
    echo "0 results";
}

    

        
   ?>


   </tbody>
 </table>
 </center>
 </body>
 </html>