<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 17-Feb-2019, 06:46:48 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //Here - First the variable userverified is set to False
    $userverified = False;

    //Here - If the username is set in the URL this will grab the username value and store for a while
    if (isset($_GET['username']))
    {
        //Here - If the username is equal to the value stored from the GET method above(...)
        if (DB::query('SELECT username FROM tb_users WHERE username=:username', array(':username'=>$_GET['username'])))
        {
            //Here - the variable userverified will retrieve the value of the userverified from the DB
            $userverified = DB::query('SELECT userverified FROM tb_users WHERE username=:username', array(':username'=>$_GET['username']))[0]['userverified'];

            /*
            if ($userverified)
            {
                //echo "- Verificado";
                $verified = "- Verificado";
            }
            */
        }
    }
    else
    {
        if (isset($_COOKIE['OCID']))
        {
            //This will verify the logintoken of the user in the DB and compare to the cookie stored in the browser
            if (DB::query('SELECT logintoken_userid FROM tb_login_tokens WHERE logintoken=:logintoken', array(':logintoken'=>sha1($_COOKIE['OCID']))))
            {
                //Here - the variable logintokenuserid will retrieve the value of the logintoken_userid from the DB
                $logintokenuserid = DB::query('SELECT logintoken_userid FROM tb_login_tokens WHERE logintoken=:logintoken', array(':logintoken'=>sha1($_COOKIE['OCID'])))[0]['logintoken_userid'];
                $user_set = DB::query('SELECT username FROM tb_users WHERE userid=:logintokenuserid', array(':logintokenuserid'=>$logintokenuserid))[0]['username'];
                $username = $user_set;

                //Here - the variable userverified will retrieve the value of the userverified from the DB
                $userverified = DB::query('SELECT userverified FROM tb_users WHERE username=:username', array(':username'=>$username))[0]['userverified'];
                /*
                if ($userverified)
                {
                    echo "- Verificado";
                }
                */
            }
            else
            {
                die ('Você precisa habilitar os cookies no seu navegador');
            }
        }
        else
        {
            die ('Você precisa habilitar os cookies no seu navegador');
        }
    }
    //Here - just check if the user has a verified status and print out the word
    
    /*
    if ($userverified)
    {
        //echo "- Verificado";
        $ver = "- Verificado";
    }
    $verified = $userverified;
    */
    $verified = $userverified;
    function isVerified($verified)
    {
        if ($verified)
        {
            echo "- Verificado " . "<i class='fa fa-check-circle id='checked'></i>";
            
        }
    }
    
?>