<?php 

session_start();

include 'conn.php';
if (!$con){
	echo "Koneksi database gagal : " . mysqli_connect_error();
};

$username = $_POST['username'];
$password = $_POST['pass'];
 
$data = mysqli_query($con,"select * from user where username='$username' and pass='$password'");
 
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:indexvote.php");
}else{
	$data = mysqli_query($con,"select * from admin where username='$username' and pass='$password'");
 
	$cek = mysqli_num_rows($data);
	 
	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:index.php");
	}else{
		header("location:login.php?pesan=gagal");
	}
}
?>