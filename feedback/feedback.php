<?php
include "connect.php";
session_start();
if(isset($_POST['submit'])){
	$product=$_POST['product'];
	$description = $_POST['description'];
	$rating=$_POST['rating'];
	$qry = "INSERT INTO `fd`(`product`,`description`,`rating`) VALUES('$product','$description','$rating')";
	$sql = mysqli_query($conn,$qry)or die('connection failed'.mysqli_error($conn));
	$message="ThankYou for your Feedback";
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
<a href="logout.php">Logout</a>
</header>

<div id="main">
      <div id="feedback" >
	<form method="POST" action="">
	<label>Product:</label>
	<input type="text" name="product" value="fossil watch"><br><br>
	<label>Write Your Feedback:</label><br>
	<textarea rows="10" cols="30" name="description" ></textarea><br><br>
	<label>Rate the Product out of 10:</label>
	<input type="text" name="rating"><br><br> 
	<button type="submit" name="submit">SUBMIT</button>
	</form>
	</div>
</div>


</body>
</html>
