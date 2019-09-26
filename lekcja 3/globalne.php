<?php 
    //$_GET $_POST $_COOKIE $_SERVER $_SESSION
    echo $_SERVER['SERVER_PROTOCOL'] , '<br>';
    echo $_SERVER['SERVER_PORT'] , '<br>';
    echo $_SERVER['DOCUMENT_ROOT'] , '<br>';
    echo $_SERVER['SCRIPT_NAME'] , '<br>';
    echo $_SERVER['DOCUMENT_ROOT'] , '<br>';
    
    $localFile = $_SERVER['DOCUMENT_ROOT'].$_SERVER['DOCUMENT_ROOT'];
    
    //stałe
    echo $localFile;

    define('NAZWISKO','Kowal'); //jak dasz 3 argument true to mozna nazwisko // od wersji 8 brak 3 argumentu

    echo '<br>'.    NAZWISKO;

    //stałe prefiniowane
    echo '<br>' .PHP_VERSION . '<br>';
    echo gettype(PHP_VERSION).'<br>';
    if(PHP_VERSION > '5.6') {
        echo 'nowa wersja <br>';
    } else {
        echo 'stała wersja php <br>';
    }

    echo PHP_OS . '<br>'; //WINNT
    echo __LINE__ . '<br>'; //linia w kodzie
    echo __FILE__ . '<br>';
    echo __DIR__ . '<br>';

?>