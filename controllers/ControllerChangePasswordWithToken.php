<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 13-Feb-2019, 07:01:34 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //$tokenIsValid = False;
    include ('../classes/DB.php');
    //$tokenIsValid = False;
    //This wil capture the value in the url and evaluate
    session_start();
    if (isset($_SESSION['passwordtoken']))
    {
        //This will store the value in the variable
        $passwordtoken = $_SESSION['passwordtoken'];

        //echo sha1($passwordtoken);
        echo "<br>";

        //This will check if there is a password token for the user in the DB
        if (DB::query('SELECT passwordtoken_userid FROM tb_password_tokens WHERE passwordtoken=:passwordtoken', array(':passwordtoken'=>sha1($passwordtoken))))
        {
            
            //This will store de password token in the variable
            //$userid = DB::query('SELECT passwordtoken_userid FROM tb_password_tokens WHERE passwordtoken=:passwordtoken', array(':passwordtoken'=>sha1($passwordtoken)))[0]['passwordtoken_userid'];

            //This will now set the token to True
            //$tokenIsValid = True;

            //
            session_start();
            $_SESSION['change_password_with_token'] = 'change_password_with_token';
            header("location: ../change-password-with-token.php");
            

            //echo sha1($passwordtoken);
            //echo "<br>";
            //echo "blaaaaaaaaaaaaaaaaaaaaaaaaaaa";

        }
        else
        {
            //Otherwise, will print this message
            //die('Token inválido...');

            session_start();
            $_SESSION['session_invalid_token'] = 'invalid-token';
            header("location: ../invalid-token.php");
        }
    }
    else
    {
        //Otherwise, will print this message
        //die('Você não está logado!');
        session_destroy();
        header("location: ../login.php");
    }


?>