<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 12/15/2017
 * Time: 8:47 AM
 */



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




