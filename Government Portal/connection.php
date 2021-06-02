<?php
$servername="localhost";
$username="root";
$dbname="Durbin_app";
$password="";

$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn)
	echo "Connection is Okay";
else
	echo "Connection Failed";
?>
