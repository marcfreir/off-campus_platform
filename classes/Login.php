<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 11-Feb-2019, 05:45:02 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php

class Login
{
    public static function isLoggedIn()
    {
        //This will verify if there is a cookie stored (OCID)
        if (isset($_COOKIE['OCID']))
        {
            //This will verify the logintoken of the user in the DB and compare to the cookie stored in the browser
            if (DB::query('SELECT logintoken_userid FROM tb_login_tokens WHERE logintoken=:logintoken', array(':logintoken'=>sha1($_COOKIE['OCID']))))
            {
                $logintokenuserid = DB::query('SELECT logintoken_userid FROM tb_login_tokens WHERE logintoken=:logintoken', array(':logintoken'=>sha1($_COOKIE['OCID'])))[0]['logintoken_userid'];
                //This will carry the user name to the index.php (NewsFeed)
                $user_set = DB::query('SELECT username FROM tb_users WHERE userid=:logintokenuserid', array(':logintokenuserid'=>$logintokenuserid))[0]['username'];
                $_SESSION['session_user_set'] = $user_set;
                //This will verify if there is a cookie stored (OCID)
                if (isset($_COOKIE['OCID_']))
                {
                    return $logintokenuserid;
                }
                else
                {
                    $cstrong = True;
                    $logintoken = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                    DB::query('INSERT INTO tb_login_tokens VALUES (NULL, :logintoken, :logintoken_userid)', array(':logintoken'=>sha1($logintoken), ':logintoken_userid'=>$logintokenuserid));
                    DB::query('DELETE FROM tb_login_tokens WHERE logintoken=:logintoken', array(':logintoken'=>sha1($_COOKIE['OCID'])));

                    //Setting the cookies for the user (OC stands for Off-Campus - so the OCID is the name for the cookie)
                    setcookie("OCID", $logintoken, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE); //This on for 7 days
                    setcookie("OCID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE); //This on for 3 days

                    return $logintokenuserid;
                }
            }
        }
        return false;
    }
}

?>