<?php
/* 
    Subject    : OFF CAMPUS PLATFORM PROJECT
    Created on : 12-Mar-2019, 01:56:53 AM
    Author     : Marc Freir
    License    : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
*/
?>

<?php

     #ALL THESE STUFFS ARE JUST FOR A TEST

    class Config
    {
        function dec_enc($action, $string)
        {
            $output = false;

            $pass = "buguella";
            $hashkey = hash('sha256', (serialize($pass)));
            $hashiv = md5(serialize($pass));

            $encrypt_method = "AES-256-CBC";
            $secret_key = $hashkey;
            $secret_iv = $hashiv;

            // hash
            $key = hash('sha256', $secret_key);
    
            // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
            $iv = substr(hash('sha256', $secret_iv), 0, 16);

            if ($action == 'encrypt')
            {
                $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
                $output = base64_encode($output);
            }
            else if ($action == 'decrypt')
            {
                $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
            }
            return $output;
        }
    }

?>