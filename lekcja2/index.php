<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $hex = 0xA;
        $oc = 0654;
        $bin = 0b1001;
        $heredoc = <<< heredoc
            $oc osemkowy<br>
            $hex hex<br>
            $bin binarka<hr>
heredoc;
        echo $heredoc;

        $nowdoc = <<< 'nowdoc'
            $oc osemkowy<br>
            $hex hex<br>
            $bin binarka<hr>
nowdoc;
    echo $nowdoc;
    
    echo "wartość zmiennej \$bin wynosi $bin";
    ?>
</body>
</html>