<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 12/18/2017
 * Time: 12:02 PM
 */



function arvuSumma($number){
    $summa = 0;
    while($number !=0){
        $arv = $number % 10;
        $number = $number / 10;
        echo $arv.'<br />';
        settype($number, 'integer');
    }

}

arvuSumma(123);