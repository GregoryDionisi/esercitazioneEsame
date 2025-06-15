<?php
    require "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Del.php</title>
</head>
<body>
    <?php
        $connection = new mysqli("localhost", "root", "", "biblioteca");
        if($connection->connect_error){
            die("Errore di connessione del database DBMS");
        }
        $query = "SELECT TITOLO FROM libri";
        $result = $connection->query($query);
        if($connection->errno){
            $connection->close();
            die("Errore nell'esecuzione della query");
        }
    ?>
    <form action="delete.php" method="POST">
        Elimina libro:<br>
        <select name="titolo">
            <?php
                if($result->num_rows != 0){
                    while($row = @ $result->fetch_array()){
                        echo "<option value=\"$row[TITOLO]\">$row[TITOLO]</option>";
                    }
                } else {
                    echo "Non &egrave presente alcun dato nel database";
                }
                $result->free();
                $connection->close();
            ?>
        </select><br><br>
        <input type="submit" value="Invio">
    </form>
    <br>
    <a href="http://localhost/esercitazioneesame/index.php">Torna indietro</a>
</body>
</html>