<?php
include "connect.php";
session_start();
	$qry = "SELECT * FROM `fd`";
	$sql = mysqli_query($conn,$qry)or die('connection failed'.mysqli_error($conn));
	echo "<table><tr><th>'Product'</th><th>'Rating'</th></tr>";
	
	while($row= mysqli_fetch_assoc($sql)){
	echo "<tr>
	<td>".$row["$product"]. "</td> <td>".$row["$rating"]."</td> </tr> </table>";
	}
?>
