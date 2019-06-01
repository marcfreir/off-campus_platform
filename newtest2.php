<?php

include ('./assets/config/Config.php');



$b = "'mysql:host=127.0.0.1;dbname=db_offcampus;charset=utf8', 'root', ''";

$enc = Config::dec_enc('encrypt', $b);

echo $enc;

echo "<br><hr>";

$dec = Config::dec_enc('decrypt', $enc);

echo $dec;

?>

