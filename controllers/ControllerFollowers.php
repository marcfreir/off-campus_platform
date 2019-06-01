<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 04-Mar-2019, 03:43:51 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //INCLUDING THE DB AND LOGIN CLASSES
    //include ('./classes/DB.php');
    //include ('./classes/Login.php');

    #GLOBAL VARIABLES
    //Here - First the variable username is set with a "blank" value (left blank)
    $username = "";
    //Here - First the variable userverified is set to False
    //$userverified = False;
    //Here - First the variable isFollowing is set to False
    $isFollowing = False;

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
            //Here - the variable userverified will retrieve the value of the userverified from the DB
            //$userverified = DB::query('SELECT userverified FROM tb_users WHERE username=:username', array(':username'=>$_GET['username']))[0]['userverified'];
            //Here - the variable followerid will check the class Login.php and retrieve the value if the state is set to true
            $followerid = Login::isLoggedIn();

            //Here - If the follow button is clicked, the POST method will store the value of the name atribute from the HTML file (name='follow')
            if (isset($_POST['btnfollow']))
            {
                //Here - just check if the user isn't the follower itself -> will avoid the actual user from following itself
                if ($userid != $followerid)
                {
                    if (!DB::query('SELECT followers_followerid FROM tb_followers WHERE followers_userid=:userid AND followers_followerid=:followerid', array(':userid'=>$userid, ':followerid'=>$followerid)))
                    {
                        DB::query('INSERT INTO tb_followers VALUES (NULL, :userid, :followerid)', array(':userid'=>$userid, ':followerid'=>$followerid));
                    }
                    else
                    {
                        echo 'Already following!';
                    }
                    $isFollowing = True;
                }
            }

            //Here - If the unfollow button is clicked, the POST method will store the value of the name atribute from the HTML file (name='unfollow')
            if (isset($_POST['btnunfollow']))
            {
                //Here - just check if the user isn't the follower itself -> will avoid the actual user from following itself
                if ($userid != $followerid)
                {
                    if (DB::query('SELECT followers_followerid FROM tb_followers WHERE followers_userid=:userid AND followers_followerid=:followerid', array(':userid'=>$userid, ':followerid'=>$followerid)))
                    {
                        DB::query('DELETE FROM tb_followers WHERE followers_userid=:userid AND followers_followerid=:followerid', array(':userid'=>$userid, ':followerid'=>$followerid));
                    }
                    
                    $isFollowing = False;
                }
            }

            if (DB::query('SELECT followers_followerid FROM tb_followers WHERE followers_userid=:userid AND followers_followerid=:followerid', array(':userid'=>$userid, ':followerid'=>$followerid)))
            {
                //echo 'Already following!';
                $isFollowing = True;
            }
            
            
        }
        else
        {
            die ('Usuário não encontrado!');
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
                //Here - the variable userid will retrieve the value of the userid from the DB
                $userid = DB::query('SELECT userid FROM tb_users WHERE username=:username', array(':username'=>$username))[0]['userid'];
                //Here - the variable followerid will check the class Login.php and retrieve the value if the state is set to true
                $followerid = Login::isLoggedIn();

                //Here - the variable userverified will retrieve the value of the userverified from the DB
                //$userverified = DB::query('SELECT userverified FROM tb_users WHERE username=:username', array(':username'=>$username))[0]['userverified'];
            }
            else
            {
                die ('Você precisa habilitar os cookies no seu navegador');
            }
        }
        //Trying -- start
        elseif (Login::isLoggedIn())
        {
            $user = $_SESSION['session_user_set'];
            //Here - If the username is equal to the value stored from the GET method above(...)
            if (DB::query('SELECT username FROM tb_users WHERE username=:username', array(':username'=>$user)))
            {
                //(...)set the variables below
                //Here - the variable username will retrieve the value of the username from the DB
                $username = DB::query('SELECT username FROM tb_users WHERE username=:username', array(':username'=>$user))[0]['username'];
                //Here - the variable userid will retrieve the value of the userid from the DB
                $userid = DB::query('SELECT userid FROM tb_users WHERE username=:username', array(':username'=>$user))[0]['userid'];
                //Here - the variable userverified will retrieve the value of the userverified from the DB
                //$userverified = DB::query('SELECT userverified FROM tb_users WHERE username=:username', array(':username'=>$_GET['username']))[0]['userverified'];
                //Here - the variable followerid will check the class Login.php and retrieve the value if the state is set to true
                $followerid = Login::isLoggedIn();
            }
        }
        //Trying -- end
        else
        {
            die ('Você precisa habilitar os cookies no seu navegador');
        }
    }
?>