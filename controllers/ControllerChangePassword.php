<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 11-Feb-2019, 11:58:19 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //Including the DB and Login Classes
    include ('../classes/DB.php');
    include ('../classes/Login.php');

    //By default, the token is False
    $tokenIsValid = False;

    //Using the method (function) inside the Login.php file
    if (Login::isLoggedIn())
    {
        ////Just for test
        //echo 'Logged In!';
        //echo Login::isLoggedIn();

        //Capturing and evaluating the btnchangepassword from change-password.php (HTML_BODY_CHANGE_PASSWORD.php)
        if (isset($_POST['btnchangepassword']))
        {
            $oldpassword = $_POST['txtuseroldpassword'];
            $newpassword = $_POST['txtusernewpassword'];
            $newpasswordrepeat = $_POST['txtusernewpasswordrepeat'];
            $userid = Login::isLoggedIn();

            //This will verify the old password and compare with the password inserted in the DB
            if (password_verify($oldpassword, DB::query('SELECT userpassword FROM tb_users WHERE userid=:userid', array(':userid'=>$userid))[0]['userpassword']))
            {
                //This will compare the 2 variables with the values inserted into the textboxes (txtusernewpassword and txtusernewpasswordrepeat)
                if ($newpassword == $newpasswordrepeat)
                {
                    //This will verify the length of the password (between 6 and 60 characters)
                    if (strlen($newpassword) >= 6 && strlen($newpassword) <= 60)
                    {
                        //This will update the password with the new one
                        DB::query('UPDATE tb_users SET userpassword=:newpassword WHERE userid=:userid', array(':newpassword'=>password_hash($newpassword, PASSWORD_BCRYPT), ':userid'=>$userid));
                        //echo 'Senha trocada com sucesso!';

                        //Here - fisrt create a session(...)
                        session_start();
                        $_SESSION['session_password_successfully_changed'] = 'success';
                        //(...) now this is redirected to the page below
                        header("location: ../password-successfully-changed.php");

                    }

                }
                else
                {
                    //Otherwise, will print this message
                    //echo 'Senha não combina!';

                    //Here - fisrt create a session(...)
                    session_start();
                    $_SESSION['session_password_donot_mach'] = 'do_not_mach';
                    //(...) now this is redirected to the page below
                    header("location: ../password-donot-mach.php");
                }

            }
            else
            {
                //Otherwise, will print this message
                //echo 'A senha antiga está incorreta!';

                //Here - fisrt create a session(...)
                session_start();
                $_SESSION['session_wrong_old_password'] = 'wrong_old_password';
                //(...) now this is redirected to the page below
                header("location: ../wrong-old-password.php");
            }

        }
    }
    else
    {

        //THIS IS JUST A TEST TO MOVE THE CODE BELOW
        //header("location: ../change-password.php");
        header("location: ../login.php");
        //END OF TEST
        /*
        //This wil capture the value in the url and evaluate
        if (isset($_GET['passwordtoken']))
        {
            //This will store the value in the variable
            $passwordtoken = $_GET['passwordtoken'];

            //This will check if there is a password token for the user in the DB
            if (DB::query('SELECT passwordtoken_userid FROM tb_password_tokens WHERE passwordtoken=:passwordtoken', array(':passwordtoken'=>sha1($passwordtoken))))
            {
                //This will store de password token in the variable
                $userid = DB::query('SELECT passwordtoken_userid FROM tb_password_tokens WHERE passwordtoken=:passwordtoken', array(':passwordtoken'=>sha1($passwordtoken)))[0]['passwordtoken_userid'];

                //This will now set the token to True
                $tokenIsValid = True;

                //If the button btnchangepassword was pressed
                if (isset($_POST['btnchangepassword']))
                {
                    //Store the passwords, typed in the text boxes, in the variables
                    $newpassword = $_POST['txtusernewpassword'];
                    $newpasswordrepeat = $_POST['txtusernewpasswordrepeat'];
        
                    //This will compare the 2 variables with the values inserted into the textboxes (txtusernewpassword and txtusernewpasswordrepeat)
                    if ($newpassword == $newpasswordrepeat)
                    {
                        //This will verify the length of the password (between 6 and 60 characters)
                        if (strlen($newpassword) >= 6 && strlen($newpassword) <= 60)
                        {
                            //This will update the password with the new one
                            DB::query('UPDATE tb_users SET userpassword=:newpassword WHERE userid=:userid', array(':newpassword'=>password_hash($newpassword, PASSWORD_BCRYPT), ':userid'=>$userid));
                            echo 'Senha trocada com sucesso!';

                            //This will delete the password token from the DB
                            DB::query('DELETE FROM tb_password_tokens WHERE passwordtoken_userid=:passwordtoken_userid', array(':passwordtoken_userid'=>$userid));
        
                        }
                    }
                    else
                    {
                        //Otherwise, will print this message
                        echo 'Senha não combina!';
                    }
                }
            }
            else
            {
                //Otherwise, will print this message
                die('Token inválido...');
            }
        }
        else
        {
            //Otherwise, will print this message
            die('Você não está logado!');
        }
    */
    }
?>