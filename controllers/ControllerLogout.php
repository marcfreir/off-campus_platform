<?php
/* 
    Subject    : OFF CAMPUS PLATFORM PROJECT
    Created on : 03-Mar-2019, 12:58:50 AM
    Author     : Marc Freir
    License    : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    include ('../classes/DB.php');
    include ('../classes/Login.php');

    
    if (isset($_POST['btnconfirm']))
    {
        if (isset($_POST['chkboxalldevices']))
        {
            DB::query('DELETE FROM tb_login_tokens WHERE logintoken_userid=:logintokenuserid', array(':logintokenuserid'=>Login::isLoggedIn()));
            
            //HTML code and images for this operation
            //echo 'Logged out feito com sucesso!'.'<br />'.'Essa página irá retornar a página principal em 5 segundos...';
            //INCLUDING THE HTML_MODAL_MESSAGE
            //include ('../features/HTML_MODAL_MESSAGE.php');
            //Redirect
            //header("Refresh: 5; url=../login.php");
            header("location: ../login.php");
        }
        else
        {
            if (isset($_COOKIE['OCID'])){
                DB::query('DELETE FROM tb_login_tokens WHERE logintoken=:logintoken', array(':logintoken'=>sha1($_COOKIE['OCID'])));
            }
            setcookie('OCID', '1', time()-3600);
            setcookie('_OCID', '1', time()-3600);
            
            echo 'Logged out feito com sucesso!'.'<br />'.'Essa página irá retornar a página principal em 5 segundos...';
            //Redirect
            header("Refresh: 5; url=../login.php");

        }
    }
    else
    {
        session_destroy();
        //Now the code below will redirect to the index.php page
        die(header("location: ../login.php"));
    }
?>