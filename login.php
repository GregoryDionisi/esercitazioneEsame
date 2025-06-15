<?php
	if (!isset($_POST['username']) || !isset($_POST['password'])) //isset() verifica se una variabile esiste ed è diversa da NULL
?>
<html>
  <head>
   <title>Login</title>
  </head>
  <body>
   <form method="POST" action="login_backend.php">
    Username <input name="username" type="text"><br>
    Password
    <input name="password" type="password"><br><br>
    <input type="submit" value="Accedi">
   </form>
   <a href="http://localhost/esercitazioneesame/nuovo_utente.php">Non sei registrato? Registrati</a>
  </body>
</html>

