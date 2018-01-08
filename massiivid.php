<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 12/20/2017
 * Time: 12:02 PM
 */
$arvud = array(1,5,2,4,3);
var_dump($arvud);
echo '<pre>';
print_r($arvud);
echo '</pre>';

echo '<hr>';

for($i = 0; $i < count($arvud); $i++){
    echo '<b>'.$arvud[$i].'</b><br />';
}
echo '<hr>';

foreach($arvud as $arv){
    echo '<i>'.$arv.'</i><br />';
}

echo '<hr>';
// lisame juurde elemente

$arvud[] = 6;

foreach($arvud as $arv){
    echo '<i>'.$arv.'</i><br />';
}

echo '<hr>';

$arvud[0] = 6;

foreach($arvud as $arv){
    echo '<i>'.$arv.'</i><br />';
}

echo '<hr>';
