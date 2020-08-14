<?php
  include 'conn.php';

$kode = $_GET['kode'];
$query = "delete from pilihan where kode='$kode'";
 mysqli_query($con,$query);
 
header('location:tampilvote.php'); 

?>