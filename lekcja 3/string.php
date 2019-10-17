<?php
    $test = <<< T
    zsk - Zespół
    szkół
    komunikacji
T;
    echo 'przed wywołaniem funckcji: nl2br: <br>'.$test . '<br>';
    echo '<br> Po wywolaniu funkcji nl2br: <br>';
    echo nl2br($test) . '<br>'; //nl2br dodaje <br> tam gdzie dalismy enter
    if(isset($_POST['name'])) {
        $name = $_POST['name'];
        $name= strtoupper($name);
        echo $name;
        $name= strtolower($name);
        echo $name;
        echo '<br>';
        echo ucfirst($name),'<br>';
        echo ucwords($name);
        $lorem =' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus doloribus ducimus provident doloremque enim fuga. Provident consequatur officia numquam voluptatem qui, dicta dolor aperiam molestias eum dolore accusamus, odio ut.';
        echo  '<hr>';
        $lorem = wordwrap($lorem,20,"<br>");
        echo $lorem;

        ob_clean();
    }
    $text = 'Janusz';
    $text1 = '  Janusz  ';
    echo "Długośc zmiennej: \$text ", strlen($text),'<br>';
    echo "Długośc zmiennej: \$text1 ", strlen($text1),'<br>';
    echo strlen(trim($text1));

    $address = 'Poznań, ul.Fredry 13, tel. (61) 445-44-58';
    $search = strstr($address,'tel');
    echo '<br>',$search;
    $search = strstr($address,'Tel',true); //nie działą bo T jest  z duzej
    echo '<br>',$search;
    $search = stristr($address,'Tel',true); 
    echo '<br>',$search.'<br>';
    $mail = strstr('zsk@gmail.com', '@').'<br>';
    echo $mail;
    $mail = strstr('zsk@gmail.com', 64).'<br>';
    echo $mail;

    $pos = strpos('abcdefg', 'cde');
    echo $pos. '<br>';
    $pos = strpos('abcdabc', 'abc');
    echo $pos. '<br>';

    //sprawdź czy w ciągu o nazwie text 1 znajduje sie ciąg text2

    $text1 = 'abcdab';
    $text2 = 'ab';
    if(strpos($text1,$text2) === false) {
        echo 'nie zawiera';
    }else {
        echo ' zawiera';
    }

    $replace = '<br>'.str_replace('zsk', ' *** ','zsk - Zespół Szkół Komunikacji');
    echo $replace;

    $surname = '<br>'.substr('Janusz Kowalski',3,5);
    echo $surname;
    $surname = '<br>'.substr('Janusz Kowalski',-3,1);
    echo $surname;
    $surname = '<br>'.substr('Janusz Kowalski',-8,5);
    echo $surname;
    $surname = '<br>'.substr('Janusz Kowalski',-8,-3);
    echo $surname;
    $login = 'żółć';

    $censore = array('ą','ę','ś','ż','ź','ć','ó','ń','ł');
    $replace = array('a','e','s','z','z','c','o','n','l');

    $newLogin = str_ireplace($censore,$replace,$login);

    echo '<br>'.$newLogin;
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String</title>
</head>
<body>
    <hr>
    <form method="POST">
        <input type="text" name="name" placeholder="Imię" autofocus autocomplete="off"><br>
        <button>Zatwierdź</button>
    </form>
</body>
</html>