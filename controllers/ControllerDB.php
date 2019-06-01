<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 12-Mar-2019, 02:32:44 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php

    #ALL THESE STUFFS ARE JUST FOR A TEST
    
    //include ('./assets/config/Config.php');
    $string_DB = "mysql:host=127.0.0.1;dbname=db_offcampus;charset=utf8";
    $user_DB = "root";
    $pass_DB = "root";

    //encrypting
    $stringDB = Config::dec_enc('encrypt', $string_DB);
    $userDB = Config::dec_enc('encrypt', $user_DB);
    //$passDB = $pass_DB = ""; //doesn't need be encrypted
    $passDB = Config::dec_enc('encrypt', $pass_DB);

?>