<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 1/8/2018
 * Time: 8:44 AM
 */


$opilane = array('eesnimi' => 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 16,
    'klass' => 10);


echo '<pre>';
print_r($opilane);
echo '</pre>';

echo '<hr />';


//väljastab võtmed ja väärtused foreach tsükliga


foreach($opilane as $voti => $vaartus){
    echo $voti.' - '.$vaartus.'<br />';
}


echo '<hr />';
echo 'Sidestatud massiiv';
//kahemõõtmeline massiiv


$opilased = array(
    array('eesnimi' => 'Mart',
        'perenimi' => 'Lepp',
        'vanus' => 16,
        'klass' => 10),
    array('eesnimi' => 'Liisu',
        'perenimi' => 'Kong',
        'vanus' => 18,
        'klass' => 12),
    array('eesnimi' => 'Risto',
        'perenimi' => 'Kang',
        'vanus' => 12,
        'klass' => 5)
);


echo '<pre>';
print_r($opilased);
echo '</pre>';