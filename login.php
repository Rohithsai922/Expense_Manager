<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style>
		body {
			background-image: url('beg5.gif');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
		}
		.container {
			max-width: 500px;
			margin: 0 auto;
			padding: 50px 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
			margin-top:200px;
		}
		h2 {
			font-size: 24px;
			font-weight: 700;
			margin-bottom: 30px;
			color: #343a40;
			text-align: center;
		}
		label {
			font-size: 14px;
			font-weight: 500;
			color: #343a40;
			margin-bottom: 5px;
			display: block;
		}
		input[type="text"],
		input[type="password"] {
			width: 100%;
			height: 45px;
			padding: 10px;
			margin-bottom: 20px;
			font-size: 16px;
			border: 1px solid #ced4da;
			border-radius: 3px;
			background-color: #fff;
		}
		button[type="submit"] {
			width: 100%;
			height: 45px;
			font-size: 16px;
			font-weight: 500;
			color: #fff;
			background-color: #007bff;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}
		button[type="submit"]:hover {
			background-color: #0069d9;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Login Form</h2>
		<form method="post" action="logincheck.php">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username">
			<label for="password">Password:</label>
			<input type="password" id="password" name="password">
			<button type="submit">Login</button>
		</form>
	</div>
</body>
</html>
