<?php
include "connect.php";
session_start();
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$username = $_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$qry = "INSERT INTO `user`(`name`,`username`,`email`,`password`) VALUES('$name','$username','$email','$password')";
	$sql = mysqli_query($conn,$qry)or die('connection failed'.mysqli_error($conn));
	$message = "ThankYou...";
	echo "<script type='text/javascript'>alert('$message');</script>";	
 }
?>
<html>
<head>
<link rel="stylesheet" href="main.css">
</head>
<body>
<header>
<h1>WATCH</h1>
<a href="main.php">HOME</a>
</header>
<div id="main">
      <div id="feedback" >
	<form method="POST" action="">
	<label>Name:</label>
	<input type="text" name="name"><br><br>
	<label>UserName:</label>
	<input type="text" name="username"><br><br>
	<label>Email:</label>
	<input type="email" name="email"><br><br>
	<label>Password:</label>
	<input type="password" name="password"><br><br>
	<button type="submit" name="submit">SUBMIT</button>
	</form>
	</div>
</div>
</body>
</html>
