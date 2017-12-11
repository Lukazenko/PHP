<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 12/11/2017
 * Time: 10:17 AM
 */

$var1 = 5;
$var2 = 5;
$var3 = 2;
$var4 = 2;
$var5 = "5";
$var6 = "2";
$var7 = true;
$var8 = false;

// kontrollin tüüpi gettype(muutuja)

echo "kontrollin tüüpi"."<br />";

echo '$var1 = '.$var1.' - '.gettype($var1).'<br />';
echo '$var2 = '.$var2.' - '.gettype($var2).'<br />';
echo '$var3 = '.$var3.' - '.gettype($var3).'<br />';
echo '$var4 = '.$var4.' - '.gettype($var4).'<br />';
echo '$var5 = '.$var5.' - '.gettype($var5).'<br />';
echo '$var6 = '.$var6.' - '.gettype($var6).'<br />';
echo '$var7 = '.$var7.' - '.gettype($var7).'<br />';
echo '$var8 = '.$var8.' - '.gettype($var8).'<br />';

// loome abi funktsiooni

function vordlus($väärtus){
    if($väärtus == true){
        return " - true";
    }
    else {
        return " - false";
    }
}

// võrdlused
echo '<hr>';

echo "võrdlused"."<br />";

echo $var1.' == '. $var2.vordlus($var1 == $var2).'<br />';
echo $var1.' == '. $var5.vordlus($var1 == $var5).'<br />';
echo $var1.' === '. $var2.vordlus($var1 == $var2).'<br />';
echo '<hr>';
echo $var1.' != '. $var3.vordlus($var1 == $var3).'<br />';
echo $var1.' !== '. $var5.vordlus($var1 == $var5).'<br />';
echo '<hr>';
echo $var7.' == '. $var8.vordlus($var7 == $var8).'<br />';
echo $var7.' != '. $var8.vordlus($var17 == $var8).'<br />';

// matemaatilised operaatorid

echo '<hr>';
echo "matemaatilised operaatorid"."<br />";
$a = 2;
$b = 5;
$c = $a++;
echo "c = a++"."<br />";
echo 'a = '.$a.' c = '.$c.'<br />';
$d = $b--;
echo "d = b--"."<br />";
echo 'b = '.$b.' d = '.$d.'<br />';

$a = 2;
$b = 5;
$c = ++$a;
echo "c = ++a"."<br />";
echo 'a = '.$a.' c = '.$c.'<br />';

$d = --$b;
echo "d = --b"."<br />";
echo 'b = '.$b.' d = '.$d.'<br />';


// loome paar konstandit

echo '<hr>';
echo "Loome paar konstandit"."<br />";

define('AINE_NIMETUS', 'PHP ALUSED');
define('NUMBER',1);
echo '<hr>';
echo 'Aine nimetus: '.AINE_NIMETUS.'<br />';
echo 'Konstantne number: '.NUMBER.'<br />';

// katsetame konstandi suurendamist















