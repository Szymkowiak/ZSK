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
        $sum = 0;
        do{
            $j = 1;
            echo "<tr>";
            do{
                if($j == $max-$i+1){
                    echo"<td class=\"color-td\">".$i * $j."</td>";
                    $sum+=$i * $j;
                }else{
                    echo "<td>".$i * $j."</td>";
                }
                
                $j++;
            }while($j<=$max);
            echo '</tr>';
            $i++;
        }while($i<=$max);
        echo "</table>";
        echo "Suma = $sum";
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