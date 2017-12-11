<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 12/11/2017
 * Time: 11:06 AM
 */


// refreshima

header("Refresh:2");


$vanus = rand(0,100);
if($vanus >= 0 and $vanus < 11){
    echo "Oled laps, kes on ".$vanus." aastat vana.";
}
elseif($vanus > 10 and $vanus < 18){
    echo "Oled nooruk, kes on ".$vanus." aastat vana";
}
elseif($vanus > 17 and $vanus < 65){
    echo "Oled tööinimene, kes on ".$vanus." aastat vana";
}
else{
    echo "Oled senioor, kes on väga vana";
}
echo '<hr>';
// switch operaator
$sokolaad = "Kalev";
switch($sokolaad) {
    case 'Kalev':
        echo "Super sokolaad";
        break;
    case 'Kinder':
        echo "Laste lemmik";
        break;
    default:
        echo "Sobib kui muud pole";
        break;
}
echo '<hr>';
// ternary operaatori katse
$pidu = "halb";
$pidutseme = ($pidu == 'hea') ? 'lähme peole' : 'istume kodus';

echo $pidutseme.'<br />';









?>