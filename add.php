<?php
    require "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add.php</title>
</head>
<body>
    <h2>Inserimento dati libro</h2>
    <form action="insert.php" method="POST">
        Titolo:<br>
        <input type="text" name="titolo"><br>
        Autore:<br>
        <input type="text" name="autore"><br>
        Genere:<br>
        <select name="genere">
            <option value="fantasy">fantasy</option>
            <option value="letteratura">letteratura</option>
            <option value="storico">storico</option>
            <option value="fantascienza">fantascienza</option>
            <option value="horror">horror</option>
        </select>
        <br><br>
        <input type="submit" value="Invio">
    </form>
    <br>
    <a href="http://localhost/esercitazioneesame/index.php">Torna indietro</a>
</body>
</html>