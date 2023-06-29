
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

.sum{
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    color:white;
background-color: #009879;
 padding:10px 10px 10px 10px;

}


</style>









  </head>

  <body>

   <ul>
  <li><a  href="http://localhost/crud/mainpage.php">Expense</a></li>
  <li><a class="active"  href="http://localhost/crud/display.php">Display</a></li>
  <li><a href="http://localhost/crud/sorted.php">Filter</a></li>
  <li><a href="http://localhost/crud/About.php">About</a></li>
   </ul>


    <center><h2>Total Expense List</h2>
    <br>

    <table class="styled-table">
      <thead>
        <tr>
         <th>Amount</th>
         <th>Date</th>
         <th>Reason</th>
         <th>Note</th>
         <th>Operation</th>
         <th>Update</th>
         
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
         



      $sql = "SELECT id,Amount,Datee,Reason,Note FROM expense WHERE username='$username' ";
      $result = mysqli_query($conn, $sql);

      // Check if any rows were returned
      if (mysqli_num_rows($result) > 0) {
    

    // Output table rows
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr+><td>" . $row['Amount'] . "
        </td><td>" . $row['Datee'] . "</td>
         <td>" . $row['Reason'] . "</td>
         <td>" . $row['Note'] . "</td>
         <td><a href='delete.php?id=$row[id]' >Delete</a></td>
         <td><a href='update.php?id=$row[id]' >Update</a></td>
         </tr>";

    }

    
} else {
    echo "No data found.";
}

       
   ?>
   </tbody>
 </table>
 </center>
 <center>
 <a class="sum" href="http://localhost/crud/sum.php" >Sum </a>
</center>
 </body>
 </html>