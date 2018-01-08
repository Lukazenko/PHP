<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 1/8/2018
 * Time: 12:56 PM
 */

// nii saab kasutada teist faili


require_once 'fnk.php';
/*raamatuVorm();
$raamat = array(
    'title' => 'Peppa Goes To London',
    'author' => 'Ladybird',
    'print' => 'Penguin',
    'status' => 'valjas'
);*/
$raamat = loeVormist();
salvestaRaamat($raamat, 'raamatud.txt');
loeAndmed('raamatud.txt');