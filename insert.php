<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert.php</title>
</head>
<body>
    <?php
        $titolo = $_POST['titolo'];
        $autore = $_POST['autore'];
        $genere = $_POST['genere'];
        $connection = new mysqli("localhost", "root", "", "biblioteca");
        if($connection->connect_error){
            die("Errore di connessione al database DBMS");
        }
        $query = "SELECT TITOLO FROM libri WHERE TITOLO = '$titolo'";
        $result = $connection->query($query);

        if($connection->errno){
            $connection->close();
            die("Errore nell'esecuzione della query"); 
        }

        if(@ $result->num_rows != 0){
            echo "Il libro $titolo &egrave gi&agrave presente nel database";
        } else {
            $query = "INSERT INTO libri(TITOLO, AUTORE, GENERE) VALUES('$titolo', '$autore', '$genere')"; //NON INSERIRE TABLE
            $result = $connection->query($query);

            if($connection->errno){
                $connection->close();
                die("Errore nell'esecuzione della query");
            }
            echo "Il libro $titolo &egrave stato inserito con successo nel database";
        }
        $result->free();
        $connection->close();
    ?>
    <br><br>
    <a href="http://localhost/esercitazioneesame/index.php">Visualizza la tabella dei libri</a>
</body>
</html>