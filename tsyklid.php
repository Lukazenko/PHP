<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 12/13/2017
 * Time: 2:12 PM
 */


for($kord = 1; $kord < 10; $kord++){
    if($kord % 2 == 0){
        $varv = 'red';
    } else {
        $varv = 'blue';
    }
    if($varv == 'red'){
        continue;
    }
    echo '<font color="'.$varv.'">'.$kord.'</font><br />';
}






















?>