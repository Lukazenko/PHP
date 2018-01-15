<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 1/15/2018
 * Time: 8:57 AM
 */

require_once 'tekst.php';


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