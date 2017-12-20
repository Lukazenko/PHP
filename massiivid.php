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

for($i = 0; $i < count($arvud); $i++){
    echo '<b>'.$arvud[$i].'</b><br />';
}


foreach($arvud as $arv){
    echo '<i>'.$arv.'</i><br />';
}