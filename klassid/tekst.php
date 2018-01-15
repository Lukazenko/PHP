<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 1/15/2018
 * Time: 8:51 AM
 */

class tekst
{
    //klassi omadus(ed)
    //klassi muutuja(d)
    var $sone = '';

    //tekst konstruktor (parem klops ja Generate ja siis construkt)

    public function __construct($s = '')
    {
        $this->maaraTekst($s);
    }

    // klassi meetodid
    // teksti määramine

    function maaraTekst($s){
        $this->sone = $s;
    }

    function prindiTekst(){
        echo $this->sone.'<br />';
    }



}