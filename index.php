<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.php</title>
</head>
<body>
    <?php
        $connection = mysqli_connect("localhost","root","","biblioteca");
        $query = "SELECT TITOLO, AUTORE, GENERE FROM libri";
        $result = mysqli_query($connection,$query);

        if(mysqli_num_rows($result) != 0) {
            echo "<table border>";
            echo "<tr>";
            echo "<th>Titolo</th>";
            echo "<th>Autore</th>";
            echo "<th>Genere</th>";
            echo "</tr>";

            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>$row[TITOLO]</td>";
                echo "<td>$row[AUTORE]</td>";
                echo "<td>$row[GENERE]</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Nel database non &egrave; presente alcun dato!";;
        }
        mysqli_close($connection);
    ?>
    <br><br>
    <a href="http://localhost/esercitazioneesame/add.php">Aggiungi un nuovo libro</a><br>
    <a href="http://localhost/esercitazioneesame/del.php">Elimina un libro</a>
</body>
</html>