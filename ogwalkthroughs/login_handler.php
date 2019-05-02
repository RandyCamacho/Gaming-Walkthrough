<?php

require_once "Dao.php";
session_start();
	if(isset($_POST["username"])  && $_POST["username"] != ""){
		$username = $_POST['username'];
		$_SESSION["placehold_username"] = $username;
		unset($_SESSION['emptyUsername']);
	} 
	else {
		unset($_SESSION['username']);
		$_SESSION["emptyUsername"] = "Must Enter a Username";
	}
	if(isset($_POST["password"])  && $_POST["password"] != ""){
		$password = $_POST['password'];
		$_SESSION["placehold_password"] = $password;
		unset($_SESSION['emptyPassword']);
	}
	else{
		unset($_SESSION['password']);
		$_SESSION["emptyPassword"] = "Must Enter a Password";
	}
	if(isset($_SESSION["emptyUsername"]) || isset($_SESSION["emptyPassword"])){
		header("Location: login.php");
	}
	else{
		$db = new Dao();
		if($db->getConnection()){
			
			$password = hash("sha256", $password . "fKd93Vmz!k*dAv5029Vkf9$3Aa");

			$valid = $db->checkCredentials($username, $password);
			if($valid){ 
				$_SESSION["valid_user"] = $username;
				header('Location: index.php');
			}
			else{
				$_SESSION["invalid_user"] = "Invalid Username or Password!";
				unset($_SESSION["valid_user"]);
				header('Location: login.php');
			}
		}
		else{
			echo "Error in Connecting to the Database";
		}
	}
?>
