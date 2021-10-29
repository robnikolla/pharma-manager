<?php

include_once("../config.php");

                                                                     

if (isset($_POST['submit'],$_POST['id'])) {
	

$id = $_POST['id'];
	$name = $_POST['name'];
	$last = $_POST['last'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$employdate = $_POST['employdate'];


if (empty($name)||
	empty($last)||
 	empty($age)||
 	empty($address)||
 	empty($phone)||
 	empty($email)|| 
 	empty($employdate)){

	echo "Ploteso te gjitha fushat";
}

else {

   $sql = "UPDATE workdb SET 	name=:name,
   									last=:last,
   									age=:age,
   									address=:address,
   									phone=:phone,
   									email=:email,
   									employdate=:employdate  WHERE id=:id";


$sqlQuery = $conn->prepare($sql);
		$sqlQuery ->bindParam(':id',$id);
		$sqlQuery ->bindParam(':name',$name);
		$sqlQuery ->bindParam(':last',$last);
		$sqlQuery ->bindParam(':age',$age);
		$sqlQuery ->bindParam(':address',$address);
		$sqlQuery ->bindParam(':phone',$phone);
		$sqlQuery ->bindParam(':email',$email);
		$sqlQuery ->bindParam(':employdate',$employdate);
		$sqlQuery ->execute();

		header('Location:mainframe.php');


}
}





?>