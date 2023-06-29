 <!DOCTYPE html>
<html>
<head>
    <title>Create Account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
    
<style>
body {
  background-image: url('beg1.webp');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>


</head>
<body>
    <h1>Create Account</h1>
    <form id="createAccountForm" action="try.php" method="post" onsubmit="return validateForm()">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        <br>
        <label for="mobileNumber">Mobile Number:</label>
        <input type="tel" id="mobileNumber" name="mobileNumber" required>
        <br>
        <input type="submit" value="Create Account">

        <a href="http://localhost/crud/login.php">Already an user? <br>Click here</a>
    </form>

    

</body>
</html>
