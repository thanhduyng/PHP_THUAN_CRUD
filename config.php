<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Admin@123';
$dbname = 'mydbpdo';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>