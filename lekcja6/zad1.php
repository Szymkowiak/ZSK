<?php
    function value($a):string {
        if($a<0){
            return 'ujemna';
        }else if($a == 0){
            return 'zero';
        }else {
            return 'dodatnia';
        }
    }
    echo value(4),'<br>';
    echo gettype(value(4)).'<br>';

    function getValue() {
        return 10.55;
    }
    echo getValue();
    $x = 10;
    function show() {
        echo 'wartosc x:'."$GLOBALS[x]".$GLOBALS['x'];
    }
    show();
    $y = 11;
    function show1() {
        global $y;
        echo '<br>'.$y; 
    }
    show1();

    function sum(){
        static $l = 10; //dzieki static zmienna sie nie usuwa
        echo '<br>liczba wynosi: '.$l;
        $l+=10;
    }
    sum();
    sum();


    //////////////////////////////////////
    echo '<hr>';

    function add($x,$y =1){
        return $x+$y;
    }
    $z =20;
    echo add($z). '<br>';
    echo add(5,2);

    function multi(float $x, int $y) {
        return $x * $y;
    }

    echo '<br>'. multi(3,4); 
    echo '<br>'. multi(3,4.5);
    echo '<br>'. multi(3.5,4);
    echo '<br>'. multi(2.5,3.5);
?>