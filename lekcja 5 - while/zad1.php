<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php

if(!empty($_GET['size'])){
    echo "<table>";
    $i = 1;
        $max = $_GET['size'];
        do{
            $j = 1;
            echo "<tr>";
            do{
                echo "<td>".$i * $j."</td>";
                $j++;
            }while($j<=$max);
            echo '</tr>';
            $i++;
        }while($i<=$max);
        echo "</table>";
    }else {
    ?>
    <form method="get">
        <input type="number" name="size">
        <button>DO IT</button>
    </form>
    <?php
    }
    ?>
</body>
</html>