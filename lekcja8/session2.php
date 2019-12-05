<?php
session_start();
unset($_SESSION['name']);
    session_destroy();
    
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesja 2</title>
</head>
<body>
    <h1>Strona 3</h1>
    <hr>

    <p>Witamy     <?php
        echo $_SESSION['name'];
    ?> na stronie!</p>
    <?php 
        echo "Identyfikator sesji: ". session_id();
    ?>
    <br>
    <a href="./start.php" >Next</a>
</body>
</html>