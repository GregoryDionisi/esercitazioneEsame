<?php
    require "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.php</title>
</head>
<body>
    <?php
        $connection = new mysqli("localhost", "root", "", "biblioteca");
        if($connection->connect_error){
            die("Errore di connessione al database DBMS");
        }
        $query = "SELECT TITOLO, AUTORE, GENERE FROM libri";
        $result = $connection->query($query);

        if($connection->errno){
            $connection->close();
            die("Errore nell'esecuzione della query");
        }

        if(@ $result->num_rows != 0){ //RICORDATI DI NON METTERE LE PARENTESI TONDE
            echo "<table border>";
            echo "<tr>";
            echo "<th>TITOLO</th>";
            echo "<th>AUTORE</th>";
            echo "<th>GENERE</th>";
            echo "</tr>";

            while($row = @ $result->fetch_array()){
                echo "<tr>";
                echo "<td>$row[TITOLO]</td>";
                echo "<td>$row[AUTORE]</td>";
                echo "<td>$row[GENERE]</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Non &egrave presente alcun dato";
        }
        $result->free();
        $connection->close();
    ?>
    <br>
    <a href="http://localhost/esercitazioneesame/add.php">Aggiungi libro</a><br>
    <a href="http://localhost/esercitazioneesame/del.php">Elimina libro</a><br>
    <?php
    echo "<a href=\"http://localhost/esercitazioneesame/logout.php\">[$_SESSION[username] logout]</a>";
    ?>
</body>
</html>