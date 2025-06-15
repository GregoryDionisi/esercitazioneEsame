<?php
	session_start();
	if (!isset($_SESSION['start_time'])){
		header('Location:http://localhost/esercitazioneesame/login.php');
	die();
	}
    else {
		$now = time();
		$time = $now - $_SESSION['start_time'];
		if ($time > 3600) // 3600s => 1h
		{
			header('Location:http://localhost/esercitazioneesame/logout.php');
			die();
		}
	}
?>

