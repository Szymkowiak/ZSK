<?php
    $array = ['red','green','blue'];
    for($i=0;$i<count($array);$i++) {
        echo 'Element color: '.$array[$i].'<br>';
    }
    echo '<hr>';
    function showArray($array) {
        for($i=0;$i<count($array);$i++) {
            echo 'Element color: '.$array[$i].'<br>';
        }
    }
    showArray(['e','d','b','c','z']);

    foreach($array as $key => $a) {
        echo "<br> $key => $a";
    }
    echo '<hr>';
    $data = [
        'imie' => 'Albert',
        'nazwisko' => 'Szymkowiak',
        'wiek' => 19
    ];
    foreach($data as $key => $a) {
        echo "<br> $key => $a";
    }
    echo '<br>';
    echo  $data['wiek'];
    echo "<hr>imie uzytkownika: {$data['imie']}";

    $student = array(
        array('Katarzyna','Nowak', 30),
        array('Cezary','Pszczoła'),
        array('Obi')
    );
    function show($array) {
        for($i=0;$i<count($array);$i++) {
            for($j=0;$j<count($array[$i]);$j++) {
                echo $array[$i][$j].' ';
            }
            echo '<br>';
        }
    }
    echo '<hr>';
    show($student);
    echo '<hr>';
    function showForeach($a) {
        foreach($a as $value) {
            foreach($value as $v) {
                echo $v.' ';
            }
            echo '<br>';
        }
    }
    showForeach($student);
    echo '<hr>';
    $student1 = array(
        array(array('Katarzyna','Helena'),'Nowak', 30),
        array('Cezary','Pszczoła'),
        array('Obi')
    );
    function show3d($a) {
        foreach($a as $value) {
            foreach($value as $val) {
                if(is_array($val)){
                foreach($val as $v) {
                    echo $v.' ';
                }
            }
            else {
                echo $val.' ';
            }
            }
            echo '<br>';
        }
    }
    show3d($student1);

    function shoow($a) {
        foreach($a as $val) {
            if(is_array($val)){
                shoow($val);
            }else {
                echo $val.'<br>';
            }
        }
    }
    shoow($student1);

    ob_clean();

    //sortowanie
    $tablica = ['y','z','b','c','d'];
    sort($tablica);
    shoow($tablica);
    echo '<hr>';
    //mal
    rsort($tablica);
    shoow($tablica);
    echo '<hr>';
    //assoscja
    $t = [
        'b' => 1,
        'z' => 2,
        'v' => 3,
        'K' => 4,
        'B' => 5    
    ];
    ksort($t);
    foreach($t as $k => $v) {
        echo $k.'=>'.$v.'<br>';
    }
    echo '<hr>';
    krsort($t);
    foreach($t as $k => $v) {
        echo $k.'=>'.$v.'<br>';
    }
    echo '<hr>';
    arsort($t);
    foreach($t as $k => $v) {
        echo $k.'=>'.$v.'<br>';
    }
    echo '<hr>';
    asort($t);
    foreach($t as $k => $v) {
        echo $k.'=>'.$v.'<br>';
    }
    echo '<hr>';
    var_dump($t);
    echo '<hr>';
    echo '<pre>';
    print_r($t);
    echo '</pre>';
?>