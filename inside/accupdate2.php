<?php

include_once("../config.php");



if (isset($_POST['submit'],$_POST['id'])) {
	
$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];



if (empty($name)|| empty($lastname)|| empty($user)|| empty($email)|| empty($pass)) {

}

else {

   $sql = "UPDATE regdb SET name=:name,lastname=:lastname,username=:username,email=:email,password=:password WHERE id=:id";


	$sqlQuery=$conn->prepare($sql);	
	$sqlQuery->bindParam(':id',$id);
	$sqlQuery->bindParam(':name',$name);
	$sqlQuery->bindParam(':lastname',$lastname);
	$sqlQuery->bindParam(':username',$user);
	$sqlQuery->bindParam(':email',$email);
	$sqlQuery->bindParam(':password',$pass);
	$sqlQuery->execute();

 header('Location:mainframe.php');


}



}