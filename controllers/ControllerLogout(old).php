<?php
/* 
    Subject    : OFF CAMPUS PLATFORM PROJECT
    Created on : 09-Feb-2019, 03:49:31 AM
    Author     : Marc Freir
    License    : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
*/
?>

<?php
    include ('../classes/DB.php');
    include ('../classes/Login.php');

    //This is called by the SignOut anchor tag in the HTML_BODY__part2_V3.php
    session_start();
    ////This was the old method - because there was no cookie set
    //The code below will capture the value of the variable "link"
    //If it is equal to "logout" the session will be destroyed
    /*
    if (isset($_GET['link']) == "logout")
    {
        session_destroy();
        //Now the code below will redirect to the index.php page
        header("location: ../login.php");
    }
    else
    {
        session_destroy();
        //Now the code below will redirect to the index.php page
        header("location: ../login.php");
    }
    */

    //This is the new method - because there is cookie set
    //The code below will capture the value of the variable "link"
    $logout = "logout";
    if (isset($_GET['link']) == $logout)
    {
        //Now the code below will redirect to the index.php page
        header("location: ../logout.php");
    }
    elseif (isset($_POST['btnconfirm']))
    {
        if (isset($_POST['alldevices']))
        {
            DB::query('DELETE FROM tb_login_tokens WHERE logintoken_userid=:logintokenuserid', array(':logintokenuserid'=>Login::isLoggedIn()));
            
            //HTML code and images for this operation
            echo 'Logged out feito com sucesso!'.'<br />'.'Essa página irá retornar a página principal em 5 segundos...';
            //Redirect
            header("Refresh: 5; url=../login.php");
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
        header("location: ../login.php");
    }
?>