<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 12-Feb-2019, 01:28:29 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //Including the DB Class
    include ('../classes/DB.php');

    if (isset($_POST['btnforgotpassword']))
    {
        $cstrong = True;
        $passwordtoken = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
        $useremail = $_POST['txtuseremail'];
        $passwordtoken_userid = DB::query('SELECT userid FROM tb_users WHERE useremail=:useremail', array(':useremail'=>$useremail))[0]['userid'];
        DB::query('INSERT INTO tb_password_tokens VALUES (NULL, :passwordtoken, :passwordtoken_userid)', array(':passwordtoken'=>sha1($passwordtoken), ':passwordtoken_userid'=>$passwordtoken_userid));

        //echo 'E-mail enviado!';
        //echo '<br />';
        //echo $passwordtoken;

        session_start();
        $_SESSION['session_forgot_password_token'] = $passwordtoken;
        header("location: ../sent-email.php");
    }
    else
    {
        session_destroy();
        header("location: ../login.php");
    }

?>