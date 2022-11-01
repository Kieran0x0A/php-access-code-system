<?php

$dbhost = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$dbname = "website";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if(mysqli_connect_errno()) {
	echo 'Error connecting to database: '.mysqli_connect_errno();
	exit();
}