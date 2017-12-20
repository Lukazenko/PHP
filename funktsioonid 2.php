<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 12/18/2017
 * Time: 12:02 PM
 */

// Ylesanne 1

function arvuSumma($number){
    $summa = 0;
    while($number !=0){
        $arv = $number % 10;
        $summa = $summa + $arv;
        $number = $number / 10;
        settype($number, 'integer');
    }
    return $summa;

}

for($kord = 1; $kord <= 5; $kord++){
    $number = rand(0,1000);
    echo 'Numbri '.$number.' arvude summa on '.arvuSumma($number).'<br />';
}


// YLESANNE 2


function otsiNumber($suvalineArv, $kindelArv){

    echo $kindelArv. ' esineb numbris '.$suvalineArv;
    $mitukorda = 0;
    while($suvalineArv !=0){
        $arv = $suvalineArv % 10;
        if($arv == $kindelArv){
            $mitukorda++;
        }

        $suvalineArv = $suvalineArv / 10;
        settype($suvalineArv, 'integer');
    }

    echo ' '.$mitukorda.' arv korda<br />';

}

otsiNumber(24234234234232, 2);
otsiNumber(24234234234232, 4);
otsiNumber(24234234234232, 3);
