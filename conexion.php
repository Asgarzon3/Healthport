<?php

// declaro las variables principales para conectar a bd

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "healthport";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
		die("No conecta" .mysqli_connect_error());
}

?>