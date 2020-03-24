<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_ppdb_new";

// $server = "localhost";
// $username = "smamtasc_login";
// $password = "Smamita18";
// $database = "smamtasc_ppdb";

// Koneksi dan memilih database di server
mysql_connect($server, $username, $password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
