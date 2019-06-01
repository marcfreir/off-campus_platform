<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 06-Feb-2019, 02:38:14 AM
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
    //This controls the btncreateaccount
    if (isset($_POST['btncreateaccount']))
    {
        //Store the text boxes data
        $user_name = $_POST['txtusername'];
        $user_email = $_POST['txtuseremail'];
        $user_profile = $_POST['txtuserprofile'];
        $user_password = $_POST['txtuserpassword'];

        //CHECK IF THE USER EXISTS IN THE DATABASE
        if (!DB::query('SELECT username FROM tb_users WHERE username=:username', array(':username'=>$user_name)))
        {
            //CHECK THE LENGTH OF THE USERNAME
            if (strlen($user_name) >= 3 && strlen($user_name) <= 32)
            {
                //CHECK THE POSSIBLE CHARACTERS OF THE USERNAME
                if (preg_match('/[a-zA-Z0-9_]+/', $user_name))
                {
                    //CHECK THE LENGTH OF THE PASSWORD
                    if (strlen($user_password) >= 6 && strlen($user_password) <= 60)
                    {
                        //FILTERING THE EMAIL
                        if (filter_var($user_email, FILTER_VALIDATE_EMAIL))
                        {
                            if (!DB::query('SELECT useremail FROM tb_users WHERE useremail=:useremail', array(':useremail'=>$user_email)))
                            {
                                //INSERTING THE DATA INTO THE DATABASE
                                DB::query('INSERT INTO tb_users VALUES (NULL, :username, :useremail, :userprofile, :userpassword, \'0\')', array(':username'=>$user_name, ':useremail'=>$user_email, ':userprofile'=>$user_profile, ':userpassword'=>password_hash($user_password, PASSWORD_BCRYPT)));
                                //header("Refresh: 5; url=../successfully_registered.php");
                                session_start();
                                $_SESSION['session_successfully_registered'] = 'success';
                                //REPLACE (...)
                                header("location: ../successfully-registered.php");
                                //(...) WITH THIS - CALLING THE BRIDGE INSTEAD
                                //header("location: ./BridgeMessagePagesAPI.php");
                            }
                            else
                            {
                                //echo "E-mail já em uso";
                                session_start();
                                $_SESSION['session_email_already_used'] = 'email_already_used';
                                //REPLACE (...)
                                header("location: ../email-already-used.php");
                                //(...) WITH THIS - CALLING THE BRIDGE INSTEAD
                                //header("location: ./BridgeMessagePagesAPI.php");
                            }
                        }
                        else
                        {
                            //echo "E-mail Inválido";
                            session_start();
                            $_SESSION['session_invalid_email'] = 'invalid_email';
                            //REPLACE (...)
                            header("location: ../invalid-email.php");
                            //(...) WITH THIS - CALLING THE BRIDGE INSTEAD
                            //header("location: ./BridgeMessagePagesAPI.php");
                        }
                    }
                    else
                    {
                        //echo "Senha Inválida";
                        session_start();
                        $_SESSION['session_invalid_password'] = 'invalid_password';
                        //REPLACE (...)
                        header("location: ../invalid-password.php");
                        //(...) WITH THIS - CALLING THE BRIDGE INSTEAD
                        //header("location: ./BridgeMessagePagesAPI.php");
                    }
                }
                else
                {
                    //echo "Nome de usuário Inválido (caracters especiais não correspondente)";
                    session_start();
                    $_SESSION['session_wrong_caracters'] = 'wrong_caracters';
                    //REPLACE (...)
                    header("location: ../wrong-caracters.php");
                    //(...) WITH THIS - CALLING THE BRIDGE INSTEAD
                    //header("location: ./BridgeMessagePagesAPI.php");
                }
            }
            else
            {
                //echo "Nome de usuário Inválido (deve ter de 3 a 32 caracters)";
                session_start();
                $_SESSION['session_invalid_username'] = 'invalid_username';
                //REPLACE (...)
                header("location: ../invalid-username.php");
                //(...) WITH THIS - CALLING THE BRIDGE INSTEAD
                //header("location: ./BridgeMessagePagesAPI.php");
            }
        }
        else
        {
            //echo "Usuário já existe";
            session_start();
            $_SESSION['session_already_exists'] = 'already_exists';
            //REPLACE (...)
            header("location: ../already-exists.php");
            //(...) WITH THIS - CALLING THE BRIDGE INSTEAD
            //header("location: ./BridgeMessagePagesAPI.php");
        }

        //insert into table
    }
    else
    {
        //REFRESH THE PAGE
        header("location: ../create-account.php");
    }
?>