<?php 
//Menamatkan session
session_start();

session_unset();

session_destroy();
//Kembali ke halaman utama
header("Location: index.php");