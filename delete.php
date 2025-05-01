<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete.php</title>
</head>
<body>
    <?php
        $titolo = $_POST["titolo"];
        $connection = mysqli_connect("localhost","root","","biblioteca");
        $query = "DELETE FROM libri WHERE TITOLO = '$titolo'";
        $result = mysqli_query($connection,$query);

        echo "Il libro $titolo &egrave; stato eliminato dal database!";
        mysqli_close($connection);
    ?>
    <br><br>
    <a href="http://localhost/esercitazioneesame/index.php">Visualizza la tabella dei libri</a>
</body>
</html>