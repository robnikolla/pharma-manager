<?php
$servername="localhost";
$username="root";
$password="";
$dbname="pharmamagdb";

try{
	$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
} catch(PDOException $e){
	echo "Not connected";
}






?>