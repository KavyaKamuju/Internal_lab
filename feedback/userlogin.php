<?php
include "connect.php";
session_start();
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$qry = "SELECT * FROM `user` where `username`='$username'";
	$sql = mysqli_query($conn,$qry)or die('connection failed'.mysqli_error($conn));
	if(mysqli_num_rows($sql)>0){
		$row = mysqli_fetch_assoc($sql);
		$username=$row['$username'];
		$password=$row['$password'];
		header('location:feedmain.php');
	      }
	else{
	$message="Invalid login";
	echo "<script type='text/javascript'>alert('$message');</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="main.css">
</head>
<body>
<header>
<h1>WATCH</h1>
<a href="userlogin.php">Home</a>
</header>
<div id="main">
	<div id="login" >
	<form method="POST" action="">
	<label>Username:</label>
	<input type="text" name="username"><br><br>
	<label>Password:</label>
	<input type="password" name="password"><br><br>
	<button type="submit" name="submit">LOGIN</button>
	<form>
	</div>
</div>
</body>

</html>
