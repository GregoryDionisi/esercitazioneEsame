<?php
    require "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete.php</title>
</head>
<body>
    <?php
        $titolo = $_POST['titolo'];
        $connection = @ new mysqli("localhost", "root", "", "biblioteca");
        if($connection->connect_error){
            die("Errore di connessione al database DBMS");
        }
        $query = "SELECT TITOLO FROM libri WHERE TITOLO = '$titolo'";
        $result = @ $connection->query($query);
        if($connection->errno){
            $connection->close();
            die("Errore nell'esecuzione della query");
        }
        if(@ $result->num_rows != 0){
            $query = "DELETE FROM libri WHERE TITOLO = '$titolo'";
            $result = @ $connection->query($query);
            if($connection->errno){
                $connection->close();
                die("Errore nell'esecuzione della query");
            }
            echo "Il libro $titolo &egrave stato eliminato";
        } else {
            echo "Il libro $titolo non &egrave presente nel database";
        }
    ?>
    <br><br>
    <a href="http://localhost/esercitazioneesame/index.php">Visualizza la tabella dei libri</a>
</body>
</html>