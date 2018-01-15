<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 1/15/2018
 * Time: 12:24 PM
 */

class tabel
{
    // klassi muutujad

    var $tabeliSisu = array();
    var $pealkirjad = array();
    var $veergudeArv;

    // klassi meetodid

    /**
     * tabel constructor.
     * @param array $pealkirjad
     */
    public function __construct(array $pealkirjad)
    {
        $this->pealkirjad = $pealkirjad;
        $this->veergudeArv = count($pealkirjad);
    }





}