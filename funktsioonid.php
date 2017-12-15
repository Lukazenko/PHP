<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 12/15/2017
 * Time: 8:47 AM
 */



function lootabel($ridadeArv, $veerudeArv){
    echo '<table border="1">';
        for($reanumber = 1; $reanumber <= $ridadeArv; $reanumber++){
            echo '<tr>';
            for($veeruNumber = 1; $veeruNumber <= $veerudeArv; $veeruNumber++){
                echo '<td>';
                echo rand(10,99);
                echo '</td>';
            }
            echo '</tr>';
        }
    echo '</table';
}

lootabel(5, 7);



?>