<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sklep papierniczy</title>
</head>
<body>
    <?php
        $sql = "SELECT `nazwa` FROM `towary` WHERE `promocja` = 1";
        $connect = mysqli_connect('localhost','root','','sklep');
        mysqli_set_charset($connect,'utf8');
        $result = mysqli_query($connect,$sql);
        echo '<ul>';
            while($row = mysqli_fetch_assoc($result)) {
                echo '<li>'.$row['nazwa'].'</li>';
            } 
        echo '</ul>';
    ?>
        <form method="post">
            <select name="towar" id="">
            <?php
            $sql = "SELECT `nazwa` FROM `towary`";
            $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_assoc($result))
                echo '<option value="'.strtolower(substr($row['nazwa'],0,1)).'">'.$row['nazwa'].'</option>';
            ?>
            </select>
            <button>Wybierz</button>
        </form>

    <?php
        if(isset($_POST['towar']))
        {
            $towar = $_POST['towar'];
            switch($towar){
                case 'c': $towar= 'Czekolada';
                break;
                case 'g': $towar= 'Grześki';
                break;
                case 'w': $towar= 'Wafle';
                break;
                case 'b': $towar= 'Baton';
                break;
            }
            $sql =  "SELECT `cena` FROM `towary` WHERE `nazwa` = \"$towar\"";
            $result = mysqli_query($connect,$sql);
            $row = mysqli_fetch_assoc($result);
            echo 'Promocja: ',round($row['cena']*0.85,2);
        }
        $sql = "SELECT `cena` FROM `towary` WHERE `nazwa`=\'cienkopis\'";
        mysqli_close($connect);

    ?>
</body>
</html>