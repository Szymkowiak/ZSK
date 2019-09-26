<?php
    $test = <<< T
    zsk - Zespół
    szkół
    komunikacji
T;
    echo 'przed wywołaniem funckcji: nl2br: <br>'.$test . '<br>';
    echo '<br> Po wywolaniu funkcji nl2br: <br>';
    echo nl2br($test) . '<br>'; //nl2br dodaje <br> tam gdzie dalismy enter
?>