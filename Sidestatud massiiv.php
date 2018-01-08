<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 1/8/2018
 * Time: 8:44 AM
 */


$opilane = array('eesnimi' => 'Mart', 'perenimi' => 'Lepp', 'vanus' => 16, 'klass' => 10);


echo '<pre>';
print_r($opilane);
echo '</pre>';

echo '<hr />';


//väljastab võtmed ja väärtused foreach tsükliga


foreach($opilane as $voti => $vaartus){
    echo $voti.' - '.$vaartus.'<br />';
}