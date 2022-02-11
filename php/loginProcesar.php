<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$user = strtoupper(str_replace("'", "", $_POST["usuario"]));
		$pass = strtoupper(str_replace("'", "", $_POST["password"]));
		
		if (($user == "captura") && ($pass == "captura")) {
			session_start();
			$_SESSION['is_logged_in'] = 1;
			echo "OK";
		}
		else {
			//Error
			echo "ERROR";
		}
	}
	else
		echo "ERROR";
?>
