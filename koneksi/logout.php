<?php session_start();
unset($_SESSION['nopendaftaran']);
session_destroy();
header("Location: index.php");
?>
