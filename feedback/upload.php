<?php
include "connect.php";
session_start();
if(isset($_POST['submit'])){
	$photo=$_POST['photo'];
	$name=$_POST['name'];
	$description = $_POST['description'];
	$qry = "INSERT INTO `product`(`photo`,`name`,`description`) VALUES('$photo','$name','$description')";
	$sql = mysqli_query($conn,$qry)or die('connection failed'.mysqli_error($conn));
	$message="uploaded.l";
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
<a href="feedmain.php">HOME</a>
</header>

<div id="main">
      <div id="feedback" >
	<form method="POST" action="">
	<label>Photo:</label>
	<input type="file" name="photo" ><br><br>
	<label>Name</label><br>
	<input type="type" name="photo" ><br><br>
	<label>Description</label>
	<textarea name="description"></textarea><br><br> 
	<button type="submit" name="submit">SUBMIT</button>
	</form>
	</div>
</div>


</body>
</html>
