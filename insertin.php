<?php
include 'conn.php';
$klik = $_POST['klik'];

$query = "insert into pilihan (klik) values('$klik')";
	if(!mysqli_query($con,$query)) {
		die('Error: ' . mysqli_error());
	}
header('location:done.html');
?>