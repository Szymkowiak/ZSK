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
        require('form.php');
    }
?>

</body>
</html>