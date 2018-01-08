<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 1/8/2018
 * Time: 10:38 AM
 */

// method = "get" näitab parooli ja kasutajat aadressi ribal

echo '
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
        Kasutaja:<input type="text" name="kasutaja"><br />
        Parool: <input type="password" name="parool"><br />
        <input type="submit" value="Saada">
    </form>
';

echo $_SERVER['PHP_SELF'];

echo '<hr />';

echo '<pre>';
print_r($_GET);
print_r($_POST);
print_r($_REQUEST);
echo '</pre>';

echo '<hr />';

// andmete kätte saamine

echo $_POST['kasutaja'].'<br />';
echo $_POST['parool'].'<br />';













