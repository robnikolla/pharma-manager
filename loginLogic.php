<?php 
	session_start();
	require 'config.php';

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username)||empty($password)){
			echo "<script>alert('please fill out the fields'); </script>";
		}
		else{
			// Check for admin
			$sqlad = "SELECT ID,name,lastname,username,email,password FROM admindb WHERE username=:username AND password=:password";
			
			$query = $conn->prepare($sqlad);
			$query -> bindParam(':username',$username);
			$query -> bindParam(':password',$password);
			$query -> execute(
				array(
					'username' => $_POST['username'],
					'password' => $_POST['password'],
				)
			);
			$count = $query -> rowCount();
			$row = $query->fetch();
			
			if($count>0){
				$_SESSION["username"] = $_POST["username"];
				$_SESSION["type"] = "admin";
				$_SESSION['user']=	$row ;
			}


			// Check for user
			$sql = "SELECT ID,name,lastname,username,email,password FROM regdb WHERE username=:username AND password=:password";

			$query = $conn->prepare($sql);
			$query -> bindParam(':username',$username);
			$query -> bindParam(':password',$password);
			$query -> execute(
				array(
					'username' => $_POST['username'],
					'password' => $_POST['password'],
				)
			);
			$count = $query -> rowCount();
			if($count>0){
				$_SESSION["username"] = $_POST["username"];
				$_SESSION["type"] = "user";
			}

			if($_SESSION["type"] == "admin"){
				header('Location:admin/home.php');
				
			}
			else if($_SESSION["type"]=="user"){
				header('Location:inside/mainframe.php');
			}
			else{
				header('Location:login.php');
				

			}

		}


	




	}





?>