<?php
    require_once('scripts/connect.php');
    $sql = "select * from user";
    $result = mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Komis</title>
</head>
<body>
    <h3>Użytkownicy</h3>
    <?php 
        echo <<<TABLE
        <table>
            <tr>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Data urodzenia</th>
            </tr>
TABLE;

        echo <<<ROW
    asdd
ROW;
        echo '</table>';
    ?>

</body>
</html>