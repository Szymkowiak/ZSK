<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if(!empty($_POST['sentence']) && isset($_POST['button'])){
        echo 'ok';
    }else {
        ?>
<form method="post">
        <label for="sentence">Podaj zdanie</label>
        <textarea name="sentence" id="sentence" cols="30" rows="10"></textarea>
        <button name="button">Sprawdz</button>
    </form>
    <?php
        }
    ?>  


</body>
</html>