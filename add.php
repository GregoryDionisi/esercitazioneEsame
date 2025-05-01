<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add.php</title>
</head>
<body>
    <form action="insert.php" method="POST">
        <h1>Aggiunta libro</h1>
        Inserire il titolo del libro<br>
        <input type="text" name="titolo"><br>
        Inserire l'autore del libro<br>
        <input type="text" name="autore"><br>
        Scegliere il genere del libro<br>
        <select name="genere">
            <option value="fantasy">fantasy</option>
            <option value="distopico">distopico</option>
            <option value="storico">storico</option>
            <option value="romantico">romantico</option>
            <option value="classico">classico</option>
            <option value="horror">horror</option>
            <option value="letteratura">letteratura</option>
        </select><br><br>
        <input type="submit" value="Invio">
    </form>
</body>
</html>