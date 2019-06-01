<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 02-Mar-2019, 08:30:40 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    class Endorser
    {
        /*
        public static function showRecommendationNumber($userid)
        {
            $userrecommendations = DB::query('SELECT COUNT(endorsers_endorserid) FROM tb_endorsers WHERE endorsers_endorserid=:userid ORDER BY posts_id DESC', array(':userid'=>$userid));
            echo $userrecommendations;
        }
        */
        public static function showRecommendationNumber()
        {
            #GLOBAL VARIABLES
            //Here - First the variable username is set with a "blank" value (left blank)
            //$username = "";

            //Here - If the username is set in the URL this will grab the username value and store for a while
            if (isset($_GET['username']))
            {
                
                //Here - If the username is equal to the value stored from the GET method above(...)
                if (DB::query('SELECT username FROM tb_users WHERE username=:username', array(':username'=>$_GET['username'])))
                {
                    //(...)set the variables below
                    //Here - the variable username will retrieve the value of the username from the DB
                    //$username = DB::query('SELECT username FROM tb_users WHERE username=:username', array(':username'=>$_GET['username']))[0]['username'];
                    //Here - the variable userid will retrieve the value of the userid from the DB
                    $userid = DB::query('SELECT userid FROM tb_users WHERE username=:username', array(':username'=>$_GET['username']))[0]['userid'];
                    
                    //This will get the user email
                    //$user_email = DB::query('SELECT useremail FROM tb_users WHERE userid=:userid', array(':userid'=>$userid))[0]['useremail'];
                    $userrecommendations = DB::query('SELECT COUNT(endorsers_endorserid) FROM tb_endorsers WHERE endorsers_userid=:userid', array(':userid'=>$userid))[0]['COUNT(endorsers_endorserid)'];
                    
                    //echo $userrecommendations;
                    print_r($userrecommendations);
                    
                    
                    
                }
                
                //echo "45";
                
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
                        //$user_email = DB::query('SELECT useremail FROM tb_users WHERE userid=:logintokenuserid', array(':logintokenuserid'=>$logintokenuserid))[0]['useremail'];
                        $userrecommendations = DB::query('SELECT COUNT(endorsers_endorserid) FROM tb_endorsers WHERE endorsers_userid=:logintokenuserid', array(':logintokenuserid'=>$logintokenuserid))[0]['COUNT(endorsers_endorserid)'];


                        echo $userrecommendations;
                        //print_r($userrecommendations);
                        
                    }
                    
                    //echo "45";
                }
            }
            
        }
    }
?>