<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="about.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;


}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>


 <ul>
  <li><a  href="http://localhost/crud/mainpage.php">Expense</a></li>
  <li><a  href="http://localhost/crud/display.php">Display</a></li>
  <li><a href="http://localhost/crud/sorted.php">Filter</a></li>
  <li><a class="active" href="http://localhost/crud/About.php">About</a></li>
   </ul>













<div class="about-section">
  <h1>About Page</h1>
  <p>Our Expense Manager Website is a powerful and user-friendly tool designed to help individuals and businesses track and manage their expenses efficiently. With its intuitive interface and robust features, our website provides a comprehensive solution for organizing, analyzing, and controlling your financial expenditures.</p>
  <p>Take control of your finances, gain insights into your spending habits, and achieve your financial goals with ease</p>
  
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="rohith.jpg" alt="Rohith" style="width:80% ">
      <div class="container">
        <h2>Rohith sai</h2>
        <p class="title">U21CS127</p>
        
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="pa.jpeg" alt="Pardhiv" style="width:80% ">
      <div class="container">
        <h2>Pardhiv Raju</h2>
        <p class="title">U21CS103</p>
        
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="chakri.jpg" alt="John" style="width:80%">
      <div class="container">
        <h2>Chakri</h2>
        <p class="title">U21CS083</p>
        
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
