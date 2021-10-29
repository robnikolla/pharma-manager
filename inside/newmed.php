<?php 
include_once('../config.php');

if(isset($_POST['submit'])){
	$ID = $_POST['ID'];
	$medname = $_POST['medname'];
	$type = $_POST['type'];
	$drug = $_POST['drug'];
	$origincountry = $_POST['origincountry'];
	$producer = $_POST['producer'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];

	if(empty($medname)||empty($type)||empty($drug)||empty($origincountry)||empty($producer)||empty($price)||empty($quantity)){
		echo "Fill out the fields";
	}
	else{
		$sql ="INSERT INTO medicinedb(id,medname,type,drug,origincountry,producer,price,quantity) VALUES(:id,:medname,:type,:drug,:origincountry,:producer,:price,:quantity)";

		$sqlQuery = $conn->prepare($sql);
		$sqlQuery ->bindParam(':id',$id);
		$sqlQuery ->bindParam(':medname',$medname);
		$sqlQuery ->bindParam(':type',$type);
		$sqlQuery ->bindParam(':drug',$drug);
		$sqlQuery ->bindParam(':origincountry',$origincountry);
		$sqlQuery ->bindParam(':producer',$producer);
		$sqlQuery ->bindParam(':price',$price);
		$sqlQuery ->bindParam(':quantity',$quantity);
		$sqlQuery ->execute();

		header('Location:mainframe.php');		
	}

}
?>