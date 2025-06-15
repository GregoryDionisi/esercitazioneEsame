<html>
  <head>
    <title>Login</title>
  </head>
  <body>
<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (strlen($username) != 0 && strlen($password) != 0){ //strlen restituisce la lunghezza
		$connection = new mysqli( "localhost","root","","biblioteca");
		$query ="SELECT * FROM utenti WHERE username = '$username'";
		$result = $connection->query($query);
		if ($result->num_rows == 0) {
			echo "Utente $username sconosciuto: ";
			echo " <a href=\"http://localhost/esercitazioneesame/login.php\"> riprova.</a><br>";
		}
		else {
			$user_row = $result->fetch_array();
			if ($password == $user_row['PASSWORD']) {
				echo "Password corretta: ";
				echo " <a href=\"http://localhost/esercitazioneesame/index.php\"> accedi.</a><br>";
				// distruzione eventuale sessione
				// precedente
				session_start();
				session_unset();
				session_destroy();
				// inizializzazione nuova sessione
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['start_time'] = time();
				echo " <a href=\"http://localhost/esercitazioneesame/logout.php\"> [$username logout]</a>";
			}
			else {
				echo "Password errata: ";
				echo " <a href=\"http://localhost/esercitazioneesame/login.php\"> riprova.</a>";
			}
		}
		$result->free();
		$connection->close();
	}
	else {
		echo "Username/password non validi: ";
		echo " <a href=\"http://localhost/esercitazioneesame/login.php\">riprova.</a>";
	}
?>
 </body>
</html>