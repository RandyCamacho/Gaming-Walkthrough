<?php
require_once "Dao.php";
session_start();
        if(isset($_POST["comment"]) && $_POST["comment"] != ""){
                $username = $_SESSION["valid_user"];
                $comment = $_POST['comment'];
                $_SESSION["placehold_comment"] = $comment;
        	

		try {
			$dao = new Dao();
			$dao->saveMaddenComment($username, $comment);
			$_SESSION['message'] = "Thanks for posting!";
                        $_SESSION['good'] = true;

		} catch (Exception $e) {
			var_dump($e);
			die;
		}
	} else {
                        $_SESSION['message'] = "Please Enter a Comment";
                        $_SESSION['good'] = false;
        }

	header("Location: madden.php");
?>
