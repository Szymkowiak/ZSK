<?php
    session_start();
    $_SESSION['name'] = "Janusz";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesja 1</title>
</head>
<body>
    <h1>Strona 2</h1>
    <hr>

    <p>Witamy     <?php
        echo $_SESSION['name'];
    ?> na stronie!</p>
    <?php 
        echo "Identyfikator sesji: ". session_id();
    ?>
    <br>
    <a href="./session.php" >Next</a>
</body>
</html>