<?php
    class CheckForm {
        public function __construct()
        {
            $this->sentence = $_POST['sentence'];
        }
        public function check() {
            if($this->sentence != null){
                $cenzored = array('biały','czarny');
                $newSentence = str_ireplace($cenzored,'#####',$this->sentence);
                return $newSentence;
                }else {
                    return 'brak zdania';
                }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie</title>
</head>
<body>
    <form method="post">
        <label for="sentence">Podaj zdanie</label>
        <textarea name="sentence" id="sentence" cols="30" rows="10"></textarea>
        <button>Sprawdz</button>
    </form>
    <p><?php 
        $check = new CheckForm;
        echo $check->check();
    ?></p>
</body>
</html>