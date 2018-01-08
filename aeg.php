<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 1/8/2018
 * Time: 2:53 PM
 */


date_default_timezone_set('Europe/Helsinki');

echo time().'<br />';
echo mktime(14, 56,00,1,09,2018).'<br />';

$tana = date("H:i");  // näitab mis kell on
echo $tana.'<br />';

echo '<hr />';

echo 'Ülesanne<br /><br />';


/*
 * Koosta skript, mis väljastab vormi, mille kaudu
 * kasutajal on võimalik sisestada oma sünnikuupäev
 * Arvuta nuppu vajutamisega kasutajale antakse
 * teada, mitu kuud, päeva, tundi ja minutid on
 * jäänud antud tähtsa sündmuseni.
 *
 * Lahendus peab olema funktsionaalne - eraldi osad
 * realiseerida funtksioonidega,
 * võimalusel andmete salvestamiseks kasuta sobilik
 * andmetüüp - näiteks massiivid, sõned jne
 * */
