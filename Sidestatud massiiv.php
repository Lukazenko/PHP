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
echo '<b>'.'Sidestatud massiiv'.'<br />'.'</b>';
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

echo '<hr />';
echo '<b>'.'Foreachiga kahemõõtmelise massiivi väljastus'.'<br />'.'</b>';

foreach($opilased as $opilane){
    foreach($opilane as $voti => $vaartus){
        echo $voti.' - '.$vaartus.'<br />';
    }

    echo '---------------'.'<br />';
}

echo '<hr />';
echo '<b>'.'Sort funktsioon'.'<br />'.'</b>';

sort($opilased);

foreach($opilased as $opilane){
    foreach($opilane as $voti => $vaartus){
        echo $voti.' - '.$vaartus.'<br />';
    }

    echo '---------------'.'<br />';
}


echo '<hr />';

echo '<b>'.'arsort funktsioon'.'<br />'.'</b>';


foreach($opilased as $opilane){
    arsort($opilased);
    foreach($opilane as $voti => $vaartus){
        echo $voti.' - '.$vaartus.'<br />';
    }

    echo '---------------'.'<br />';
}
