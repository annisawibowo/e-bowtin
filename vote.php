<?php
include 'conn.php';
?><!DOCTYPE html>
<html>
<head>
	<title>E-Voting</title>
</head>
<body>
	<form action="insertin.php" method="post">
	<center>

<table width="100px">
	<tr>
		<td><img src="img/noh.jpg" width="50px"></td>
		<td><img src="img/nih.jpg" width="50px"></td>
		<td><img src="img/nuh.jpg" width="50px"></td>
	</tr>

	<tr>

		<td><input type="radio" name="klik" value="1"></td>
		<td><input type="radio" name="klik" value="2"></td>
		<td><input type="radio" name="klik" value="3"></td>
	</tr>
	<tr><td>
		<input type="submit" placeholder="submit"> </td>
	</tr>
</table>
</center>
</form>
</body>
</html>