<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 1/15/2018
 * Time: 12:32 PM
 */

require_once 'tabel.php';

// loome tabeli kirjelduse järgi tabeli objekti

$minuTabel = new tabel(array('a','b','c'));

// lisame tabeli read

$minuTabel->lisaRida(array(1,2,3));
$minuTabel->lisaRida(array(4,5,6));
$minuTabel->lisaRida(array(7,8,9));

// väljastame tabel test kujul

echo '<pre>';
print_r($minuTabel);
echo '</pre>';

echo 'Prindin tabeli: ';

// prindime tabeli pealkirjad ja sisu

$minuTabel->prindiTabel();




