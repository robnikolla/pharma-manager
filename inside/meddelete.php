<?php 

	include_once('../config.php');

	$ID = $_GET['ID'];

	$sql = "DELETE FROM `medicinedb` WHERE ID=:ID";

	$getUsers = $conn->prepare($sql);

	$getUsers->bindParam(':ID',$ID);

	$getUsers ->execute();

	header('Location:mainframe.php');






?>