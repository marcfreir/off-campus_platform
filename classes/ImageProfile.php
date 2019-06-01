<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 22-Feb-2019, 08:08:05 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    
    class ImageProfile
    {
        public static function getGravatar()
        {
            #GLOBAL VARIABLES
            //Here - First the variable username is set with a "blank" value (left blank)
            $username = "";

            //Here - If the username is set in the URL this will grab the username value and store for a while
            if (isset($_GET['username']))
            {
                //Here - If the username is equal to the value stored from the GET method above(...)
                if (DB::query('SELECT username FROM tb_users WHERE username=:username', array(':username'=>$_GET['username'])))
                {
                    //(...)set the variables below
                    //Here - the variable username will retrieve the value of the username from the DB
                    $username = DB::query('SELECT username FROM tb_users WHERE username=:username', array(':username'=>$_GET['username']))[0]['username'];
                    //Here - the variable userid will retrieve the value of the userid from the DB
                    $userid = DB::query('SELECT userid FROM tb_users WHERE username=:username', array(':username'=>$_GET['username']))[0]['userid'];
                    
                    //This will get the user email
                    $user_email = DB::query('SELECT useremail FROM tb_users WHERE userid=:userid', array(':userid'=>$userid))[0]['useremail'];

                    ##The Gravatar code - where everything make more sense##
                    $email = $user_email; //"someone@somewhere.com";
                    $default = "mp"; //This is the default image ("mystery-person") case the user does not have a Gravatar Profile
                    $size = 150; //This is the default size of the image
                    //This variable just get the "Gravatar" image from the Gravatar profile based on the $user_email
                    $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

                    echo $grav_url;
                    
                    
                }

                
            }
            else
            {

                //This will verify if there is a cookie stored (OCID)
                if (isset($_COOKIE['OCID']))
                {
                    //This will verify the logintoken of the user in the DB and compare to the cookie stored in the browser
                    if (DB::query('SELECT logintoken_userid FROM tb_login_tokens WHERE logintoken=:logintoken', array(':logintoken'=>sha1($_COOKIE['OCID']))))
                    {
                        $logintokenuserid = DB::query('SELECT logintoken_userid FROM tb_login_tokens WHERE logintoken=:logintoken', array(':logintoken'=>sha1($_COOKIE['OCID'])))[0]['logintoken_userid'];
                        //This will get the user email
                        $user_email = DB::query('SELECT useremail FROM tb_users WHERE userid=:logintokenuserid', array(':logintokenuserid'=>$logintokenuserid))[0]['useremail'];

                        ##The Gravatar code - where everything make more sense##
                        $email = $user_email; //"someone@somewhere.com";
                        $default = "mp"; //This is the default image ("mystery-person") case the user does not have a Gravatar Profile
                        $size = 150; //This is the default size of the image
                        //This variable just get the "Gravatar" image from the Gravatar profile based on the $user_email
                        $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

                        echo $grav_url;
                    }
                }
            }
            
        }
    }

?>