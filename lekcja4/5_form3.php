<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label for="sentence">Podaj zdanie</label>
        <input type="text" name="sentence" placeholder="imie" autofocus>
        <input type="radio" name="country"  value="p" checked> Polska
        <input type="radio" name="country" value="us"> Ameryka
        <input type="radio" name="country" value="de"> Niemcy
        <textarea name="description" id="" cols="30" rows="10" placeholder="opis..."></textarea>
        <button name="button">Sprawdz</button>
    </form>

<?php
    if(!empty($_POST['sentence']) && !empty($_POST['country']) && !empty(trim($_POST['description']))) {
        $sentence = $_POST['sentence'];
        $country = $_POST['country'];
        $descripion = nl2br($_POST['description']);
        switch($country) {
            case 'p' : $country = 'polska';
            break;
            case 'us' : $country = 'ameryka';
            break;
            case 'de' : $country = 'niemcy';
            break;
        }   
        echo $country,' ', $sentence,'Opis: ',$descripion;
    }else {
        echo 'podaj dane';
    }
?>
</body>
</html>