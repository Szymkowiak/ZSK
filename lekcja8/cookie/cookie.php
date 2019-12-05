<?php
    setcookie("age",20,time()+60*60);
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

    <?php
    if(isset($_COOKIE['age'])) {
        include('cookie_js.php');
    }

    ?>
</body>
</html>