<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sklep papierniczy</title>
    <style>
        table,td{
            border-collapse: collapse;
            border: 1px solid ;
            text-align: center;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
        $sql = "SELECT `nazwa`,`cena`,`promocja` FROM `towary`";

        $connect = mysqli_connect('localhost','root','','sklep');
        mysqli_set_charset($connect,'utf8');
            $result = mysqli_query($connect,$sql) or die();
        echo '<table><tr><th>Nazwa</th><th>Cena</th><th>Promocja</th></tr>';
            while($row = mysqli_fetch_assoc($result)) {
                echo '<tr><td>'.$row['nazwa'].'</td><td>'.$row['cena'].' zł</td><td>'.($row['promocja']==1?'Promocja':'Brak promocji').'</td></tr>';
            } 
        echo '</table>';
    ?>
        <form method="post">
            <select name="towar" id="">
            <?php
            $sql = "SELECT `nazwa` FROM `towary`";
            $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_assoc($result))
                echo '<option value="'.$row['nazwa'].'">'.$row['nazwa'].'</option>';
            ?>
            </select>
            <button>Wybierz</button>
        </form>

    <?php
        if(isset($_POST['towar']))
        {
            $towar = $_POST['towar'];
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