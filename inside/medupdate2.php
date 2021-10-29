<?php

include_once("../config.php");

                                                                     

if (isset($_POST['submit'],$_POST['ID'])) {
	

$ID = $_POST['ID'];
	$medname = $_POST['medname'];
	$type = $_POST['type'];
	$drug = $_POST['drug'];
	$origincountry = $_POST['origincountry'];
	$producer = $_POST['producer'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];


if (empty($medname)||
	empty($type)||
 	empty($drug)||
 	empty($origincountry)||
 	empty($producer)||
 	empty($price)|| 
 	empty($quantity)){

	echo "Ploteso te gjitha fushat";
}

else {

   $sql = "UPDATE medicinedb SET 	medname=:medname,
   									type=:type,
   									drug=:drug,
   									origincountry=:origincountry,
   									producer=:producer,
   									price=:price,
   									quantity=:quantity  WHERE ID=:ID";


$sqlQuery = $conn->prepare($sql);
		$sqlQuery ->bindParam(':ID',$ID);
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