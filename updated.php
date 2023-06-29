
<?php


  
 $servername = "localhost";
        $dbusername = "root";
        $password = "";
        $dbname = "create";
        $conn = new mysqli('localhost', 'root', '', 'create');



    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
       }

         
      


          // this NEEDS TO BE AT THE TOP of the page before any output etc
        
         
        // Retrieve the updated values from the form fields
        $Amount = $_POST['Amount'];
        $Datee = $_POST['Datee'];
         
      
        // Retrieve more values for other columns

        // Perform the update query
        $sql = "UPDATE expense SET Amount = '$Amount' and Datee='$Datee'  WHERE id='$id';
        
        


    

?>