<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 14-Feb-2019, 12:18:44 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    include ('../classes/DB.php');

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
                session_start();
                $passwordtoken = $_SESSION['passwordtoken'];

                $userid = DB::query('SELECT passwordtoken_userid FROM tb_password_tokens WHERE passwordtoken=:passwordtoken', array(':passwordtoken'=>sha1($passwordtoken)))[0]['passwordtoken_userid'];

                //This will update the password with the new one
                DB::query('UPDATE tb_users SET userpassword=:newpassword WHERE userid=:userid', array(':newpassword'=>password_hash($newpassword, PASSWORD_BCRYPT), ':userid'=>$userid));
                //echo 'Senha trocada com sucesso!';

                //This will delete the password token from the DB
                DB::query('DELETE FROM tb_password_tokens WHERE passwordtoken_userid=:passwordtoken_userid', array(':passwordtoken_userid'=>$userid));

                $_SESSION['session_password_successfully_changed'] = 'password_successfully_changed';
                header("location: ../password-successfully-changed.php");

            }
        }
        else
        {
            //Otherwise, will print this message
            //echo 'Senha não combina!';
            session_start();
            $_SESSION['session_password_donot_mach'] = 'password-donot-mach';
            header("location: ../password-donot-match.php");
        }
    }
?>