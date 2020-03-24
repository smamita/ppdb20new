<?php
$dbhost = "localhost";

//$dbuser = "root";
//$dbpassword = "";
//$database = "ppdb2019";


$dbuser = "smamtasc_login";
$dbpassword = "Smamita18";
$database = "smamtasc_ppdb";



$db = @mysql_connect($dbhost, $dbuser, $dbpassword) or die("Connection Error: " . @mysql_error());
@mysql_select_db($database) or die("Tidak Terkoneksi Dengan Database.");
?>
