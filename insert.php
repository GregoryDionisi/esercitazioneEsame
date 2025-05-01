<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert.php</title>
</head>
<body>
    <?php
        $titolo = $_POST["titolo"];
        $autore = $_POST["autore"];
        $genere = $_POST["genere"];
        $connection = mysqli_connect("localhost","root","","biblioteca");
        $query = "SELECT TITOLO FROM libri WHERE TITOLO = '$titolo'";
        $result = mysqli_query($connection,$query);

        if(mysqli_num_rows($result) != 0) {
            echo "Il libro $titolo &egrave; gi&agrave; presente nel database!";
        } else {
            $query = "INSERT INTO LIBRI(titolo, autore, genere) VALUES('$titolo', '$autore', '$genere')";
            $result = mysqli_query($connection,$query);
            echo "Il libro $titolo &egrave; stato inserito con successo nel database!";
        }
        mysqli_close($connection);
    ?>
    <br><br>
    <a href="http://localhost/esercitazioneesame/index.php">Visualizza la tabella dei libri</a>
</body>
</html>