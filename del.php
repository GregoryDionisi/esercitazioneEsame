<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Del.php</title>
</head>
<body>
    <?php
        $connection = mysqli_connect("localhost","root","","biblioteca");
        $query = "SELECT TITOLO, AUTORE, GENERE FROM libri";
        $result = mysqli_query($connection,$query);
    ?>
    <form action="delete.php" method="POST">
        <h1>Eliminazione libro</h1>
        Libro da eliminare<br>
        <select name="titolo">
            <?php
                if(mysqli_num_rows($result) != 0) {
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value=\"row[titolo]\">$row[TITOLO]</option>";
                    }
                } else {
                    echo "Nel database non &egrave; presente alcun dato";
                }
                mysqli_close($connection);
            ?>
        </select><br><br>
        <input type="submit" value="Invio">
    </form>
</body>
</html>