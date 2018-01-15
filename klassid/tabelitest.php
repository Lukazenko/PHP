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

// väljastame tabel test kujul

echo '<pre>';
print_r($minuTabel);
echo '</pre>';



