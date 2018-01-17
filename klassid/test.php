<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 1/15/2018
 * Time: 8:57 AM
 */

require_once 'tekst.php';
require_once 'vtekst.php';


// loome reaalse objekti classi tekst abil

$minuTekst = new tekst('Tere maailm!');

// väärtustame sone muutuja

// $minuTekst->maaraTekst('Tere maailm!');


// teostame testvaade antud objektist

echo '<pre>';
print_r($minuTekst);
echo '</pre>';

// väljastame objekti sone väärtuse

$minuTekst->prindiTekst();

echo '<hr />';


// loome reaalse objekti vtekst klassi abil


$punaneTekst = new vtekst('Punane tekst');

//teostame testvaate antud objektist

echo '<pre>';
print_r($punaneTekst);
echo '</pre>';

// väljastame objekti sone väärtus

$punaneTekst->prindiTekst();