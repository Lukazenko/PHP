<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 12/15/2017
 * Time: 8:47 AM
 */

header("Refresh:5");

function lootabel($ridadeArv, $veergudeArv){
    echo '<table border="1">';
        for($reanumber = 1; $reanumber <= $ridadeArv; $reanumber++){
            echo '<tr>';
            for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++){
                echo '<td style="background-color: '.genereeriVarv().';">';
                echo rand(10,99);
                echo '</td>';
            }
            echo '</tr>';
        }
    echo '</table>';
}

lootabel(5, 7);



function genereeriVarv(){
        $varv = '#';
        for($kord = 1; $kord <= 6; $kord++){
            $juhuarv = rand(0,15);
            $juhuhex = dechex($juhuarv);
            $varv = $varv.$juhuhex;
        }
    return $varv;
}

echo genereeriVarv();


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Ylesanne

function tabelTekst($sona1, $sona2, $sona3, $sona4){
    echo '<table border="1">';
        for($reaNumber = 1; $reaNumber <=4; $reaNumber++){
            echo '<tr>';
                echo '<td>';
                    echo ${'sona'.$reaNumber};
                echo '</td>';
            echo '</tr>';
        }

    echo '</table>';
}


tabelTekst("yks","kaks", "kolm", "neli");



