<?php
    function najs($array,$dl):int {
        $max = $array[1];
        for($i = 2 ; $i<=$dl; $i++)
        {
            if($array[$i] > $max){
                $max = $array[$i];
            }
        }
        return $max;
    }
    function najm($array,$dl):int{
        $min = $array[1];
        for($i = 2 ; $i<=$dl; $i++)
        {
            if($array[$i] < $min){
                $min = $array[$i];
            }
        }
        return $min;
    }
    function sred($array,$dl):float{
        $sum =0;
        for($i = 1 ; $i<=$dl; $i++)
        {
            $sum+=$array[$i];
        }
        return $sum/$dl;
    }

?>

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
        if(!isset($_POST['wielkosc']) && !isset($_POST['wiek1']))
        {
    ?>
    <form method="post">
        <input type="number" min="1" max="70" name="wielkosc" id="">
        <button>Wyslij</button>
    </form>

    <?php
        }
        else if(!isset($_POST['wiek1'])){
        $wielkosc =  $_POST['wielkosc'];

        echo '<form method="post">';
       
        for($i = 1 ; $i<=$wielkosc; $i++)
        {
            
    ?>
        
            <label for="wiek">Wiek: <?php echo $i;?> </label>
            <input type="number" min="0"  name="wiek<?php echo $i;?>" id="wiek"><br>
        
    <?php
        }
        echo "<input type=\"hidden\" name=\"wielkosc\" value=\"$wielkosc\">";
        echo '<button>Wyslij</button> <br>';
        echo '</form>';
        }else {
            $wielkosc =  $_POST['wielkosc'];
            $array;
            for($i = 1 ; $i<=$wielkosc; $i++)
            {
                $array[$i]= $_POST["wiek$i"];
            }
            echo "Średni wiek to: ".sred($array,$wielkosc);
            echo "Najmłodsza to: ". najm($array,$wielkosc);
            echo "Najstarsza to: ". najs($array,$wielkosc);
        }
    ?>

</body>
</html>