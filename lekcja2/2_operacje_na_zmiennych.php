<?php
    echo 2**10;

    //operatory bitowe: and &, or |, not ~, xor ^, >>, <<
    $x = 0b1010;
    $x = $x >>1; //101 5
    $x = $x <<2; //10100 20
    echo '<br>';
    echo $x.'<hr>';
    $x = 2.2;
    $y = 11;
    $wynik = $x <=> $y;// rowne 0 ,  po lewej mniejsza to -1 a jak wieksza to 1
    echo $wynik. '<hr>';
    echo gettype($x);
    if($x === $y)
    {
        echo 'identyczne';
    }
    $x = 2;
    echo '<br>2,4,4,4,6,7';
    $x= 20;
    $x = (unset) $x; //null usuwa warotsc
    //operatory  rzutowania
    //bool,array,object,float,unset,string,int
?>