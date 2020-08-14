<?php 

session_start();

session_destroy();
header("location:homeindex.php?pesan=logout");
?>