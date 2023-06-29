

<html>
<head>
    <title>Profile</title>
    <link href="main.css" rel="stylesheet">

<style>
  body{
     background-image: url('mainpagee.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;

  }







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
#table{
   background-image: url('beg1.webp');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        width:300px;
        margin:auto;
        padding:10px 20px 10px 20px;
        margin-top:50px ;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 255, 0.5);
       animation: glow 1.5s infinite alternate;
}

@keyframes glow {
  0% {
    box-shadow: 0 0 10px rgba(0, 0, 255, 0.5);
  }
  100% {
    box-shadow: 0 0 20px rgba(0, 0, 255, 0.8), 0 0 40px rgba(0, 0, 255, 0.6), 0 0 80px rgba(0, 0, 255, 0.4);
  }
</style>







</head>
<body>



<ul>
  <li><a class="active" href="http://localhost/crud/mainpage.php">Expense</a></li>
  <li><a href="http://localhost/crud/display.php">Display</a></li>
  <li><a href="http://localhost/crud/sorted.php">Filter</a></li>
  <li><a href="http://localhost/crud/About.php">About</a></li>
</ul>








<div id="table">
  <form  method="post" action="mainconn.php">
  



  <h1 id="Manager"> Expense Manager </h1>

<br>

<br>
<p>Enter date </p>
<input name="date" type="date" id="date">
<br>
<br>
<p> Enter Amount </p>

   <input type="text" id="Amount" name="Amount" placeholder="Amount" size="6">

<br>
<br>

  <input type="checkbox" id="reason" name="reason[]" value="food">
  <label for="food"> Food</label>
  <input type="checkbox" id="reason" name="reason[]" value="shopping">
  <label for="Shopping"> Shopping</label>
  <input type="checkbox" id="reason" name="reason[]" value="Other">
  <label for="Other">Other</label><br><br>



<br>
<textarea id="note" name="note" placeholder="Add note.." rows="3" cols="20" >
</textarea>
<br>
<br>

  <div class="button">
  <input type="submit" value="Submit" >
</div>

</form>
</div>



<script src="profi.js" ></script>
</body>

</html>
