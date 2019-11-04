<?php
$servername = "localhost";
$database = "african_scientists";
$username = "root";
$password = "";
//create connection
$connection = mysqli_connect($servername, $username, $password, $database);
if(!$connection) {
	die("connection_failed: " . mysqli_connect_error());
}

?>