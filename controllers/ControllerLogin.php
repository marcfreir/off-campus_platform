<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 04-Feb-2019, 04:39:17 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //Including the DB class
    include ('../classes/DB.php');
?>

<?php
    //This controls the btnlogin
    if (isset($_POST['btnlogin']))
    {
        $user_login = $_POST['txtuserlogin'];
        $user_password = $_POST['txtuserpassword'];

        //This verify if the data in the DB is equal to the variable $user_login
        if (DB::query('SELECT username FROM tb_users WHERE username=:username', array(':username'=>$user_login)))
        {
            //This verify if the data in the DB is equal to the variable $user_password
            if (password_verify($user_password, DB::query('SELECT userpassword FROM tb_users WHERE username=:username', array(':username'=>$user_login))[0]['userpassword']))
            {
                #########If the is already any session in use MAYBE########
                //If the statement above is true, so start the session
                session_start();

                //Setting the token for the user
                $cstrong = True;
                $logintoken = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                //echo $logintoken;

                //This insert into the database the $logintoken
                $logintoken_userid = DB::query('SELECT userid FROM tb_users WHERE username=:username', array(':username'=>$user_login))[0]['userid'];
                DB::query('INSERT INTO tb_login_tokens VALUES (NULL, :logintoken, :logintoken_userid)', array(':logintoken'=>sha1($logintoken), ':logintoken_userid'=>$logintoken_userid));
                
                //Setting the cookies for the user (OC stands for Off-Campus - so the OCID is the name for the cookie)
                setcookie("OCID", $logintoken, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE); //This on for 7 days
                setcookie("OCID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE); //This on for 3 days

                //Setting the logintoken to the session_logintoken
                //$_SESSION['session_logintoken'] = $logintoken;

                //Old process -> (Replaced) //Now the code below will redirect to the ControllerNewsFeed
                //header("location: ../controllers/ControllerNewsFeed.php");
                //New process -> now the code below will redirect to the index (because we have cookies now)
                header("location: ../index.php");

            }
            else
            {
                session_start();
                $wrong_password = "Senha Incorreta";
                $_SESSION['session_wrongpassword'] = $wrong_password;
                //Now the code below will redirect to the wrong-password.php page
                header("location: ../wrong-password.php");

            }
        }
        else
        {
            session_start();
            $wrong_password = "Login Incorreto";
            $_SESSION['session_wronguser'] = $wrong_user;
            //Now the code below will redirect to the wrong-user.php page
            header("location: ../wrong-user.php");
        }
    }
    else
    {
        //Now the code below will redirect to the login.php page
        header("location: ../login.php");
    }
?>