<html>
   <head>
     <title>Nuovo utente</title>
   </head>
    <body>
<?php
	if (!isset($_POST['username']) || !isset($_POST['password'])) {
    } else {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (strlen($username) != 0 && strlen($password) != 0) {
		$connection = new mysqli ( "localhost","root","","biblioteca");
		$query = "SELECT * FROM utenti WHERE username = '$username'";
		$result = $connection->query($query);
		if ($result->num_rows != 0)
			echo " L'utente $username &egrave; gi&agrave;presente nel database.";
		else {
			$query = "INSERT INTO utenti (username,password) 
		              VALUES ('$username', '$password')";
		    $connection->query($query);
			echo " L'utente $username &egrave; stato aggiunto al database.";
		}
		$result->free();
		$connection->close();
	}
	else {
		echo "Username/password non validi.";
}
}
?>
 </body>
</html>