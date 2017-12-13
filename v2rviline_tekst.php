<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 12/13/2017
 * Time: 2:55 PM
 */
header("Refresh:1");

for($rida = 1; $rida <=5; $rida++){
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++){
        $juhuarv = rand(0,15);
        $juhuhex = dechex($juhuarv);
        $varv = $varv.$juhuhex;
    }


    echo '<font color="'.$varv.'">V2rviline tekst</font><br />';
}