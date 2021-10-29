<?php 
include_once('config.php');

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(empty($name)||empty($lastname)||empty($username)||empty($email)||empty($password)){
		echo "Ju lutem plotesoni te gjitha fushat";
	}
	else{
		$sql ="INSERT INTO regdb(ID,name,lastname,username,email,password) VALUES(:id,:name,:lastname,:username,:email,:password)";

		$sqlQuery = $conn->prepare($sql);
		$sqlQuery ->bindParam(':id',$id);
		$sqlQuery ->bindParam(':name',$name);
		$sqlQuery ->bindParam(':lastname',$lastname);
		$sqlQuery ->bindParam(':username',$username);
		$sqlQuery ->bindParam(':email',$email);
		$sqlQuery ->bindParam(':password',$password);
		$sqlQuery ->execute();

		header('Location:login.php');		
	}

}
?>