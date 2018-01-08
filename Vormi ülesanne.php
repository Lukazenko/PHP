<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 1/8/2018
 * Time: 11:49 AM
 */

/*
 * Koosta mäng, kus kasutaja saab ära arvata programmis mõeldud
 * täisarvu ühest viiekümneni. Skript peab
 * töötama seni kuni õige arv on leitud ning teavitama
 * sellest kasutajat.
 *
 * Vale arvu sisestamisel antakse kasutajale vihje, kas
 * serveri poolt valitud arv on suurem või väiksem
 * kasutaja sisestatud arvust.
 *
 * Täienda programmi selliselt, et kui õige vastuse ja
 * kasutaja sisestatud arvu vahe on väiksem
 * või võrdne 5-ga, siis teavitatakse kasutajat, et ta on
 * õigele vastusele juba üsna lähedale jõudnud.
 *
 * Täineda programmi selliselt, et on kirjas, mitu katset
 * on sooritatud õige arvu leidmisel.
 * */




echo '<b>'.'Ylessane'.'<br /><br /><br />'.'</b>';
echo '<b>'.'Minu variant, poolik'.'<br /><br /><br />'.'</b>';

$number = $_POST['number'];
$number = (isset($number)) ? $number : rand(1,50);


echo '<h3>Sisesta arv 1 kuni 50!</h3>
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
        Sinu number:<input type="text" name="number1"><br /> 
        <input type="hidden" name="number" value="'.$number.'">      
        <input type="submit" value="Kontrolli">
    </form>
';

// staatiline et proovida
//$number = 10;




if($_POST['number1'] == $number){
    echo 'Vastus on õige'.'<br />';
}
else {
    if($_POST['number1'] > $number){

        if(($_POST['number1'] - $number) <= 5){
            echo 'Vale vastus! Natuke suur! Aga sa oled õigele vastusele üsna lähedal';
        }else {
            echo 'Vale vastus. Sinu arv on suurem kui genereeritud arv!';

        }
    }else{
        if(($_POST['number1'] - $number) >= -5){
            echo 'Vale vastus! Natuke väike. Aga sa oled õigele vastusele üsna lähedal';
        }else {
            echo 'Vale vastus. Sinu arv on väiksem kui genereeritud arv!';
        }
    }
}


echo '<hr><br />';

echo '<b>'.'Õpetaja variant'.'<br /><br /><br />'.'</b>';


$katseteArv = $_POST['katseteArv'];
$serveriArv = $_POST['serveriArv'];
$katseteArv = (isset($katseteArv)) ? ++$katseteArv : 0;
$serveriArv = (isset($serveriArv)) ? $serveriArv : rand(1,50);
print_r($serveriArv);
echo 'Arva arv ära: <br />';
echo '
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
        <input type="text" name="kasutajaArv">
        <input type="submit" value="Kontrolli!">
        <input type="hidden" name="katseteArv" value="'.$katseteArv.'">
        <input type="hidden" name="serveriArv" value="'.$serveriArv.'">
    </form>
';
//$serveriArv = 35;
$kasutajaArv = $_POST['kasutajaArv'];
if(strlen($kasutajaArv) > 0){
    if($kasutajaArv > $serveriArv){
        echo 'Sinu arv on suurem kui välja mõeldud<br />';
    }
    if($kasutajaArv < $serveriArv){
        echo 'Sinu arv on väiksem kui välja mõeldud<br />';
    }
    if(abs($kasutajaArv - $serveriArv) <= 5){
        if($kasutajaArv == $serveriArv){
            echo 'Õige! Väljamõeldud arv oli '.$serveriArv.'<br />';
            echo 'Arvasid ära '.$katseteArv.' korraga<br />';
            exit;
        }
        echo 'Aga oled juba väga lähedal õigele vastusele!<br />';
    }
    $katseteArv++;
}



