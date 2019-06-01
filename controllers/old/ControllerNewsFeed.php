<?php
/* 
    Subject    : OFF CAMPUS PLATFORM PROJECT
    Created on : 08-Feb-2019, 03:17:25 AM
    Author     : Marc Freir
    License    : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
*/
?>

<?php
    //This is called by the ControllerLogin.php
    session_start();
    if (isset($_SESSION['session_txtuserlogin']))
    {
        $user = $_SESSION['session_txtuserlogin'];
        $_SESSION['session_newsfeed'] = $user;

        ////Carrying the logintoken through the session
        //$logintoken = $_SESSION['session_logintoken'];
        //$_SESSION['session_logintoken'] = $logintoken;

        //Now the code below will redirect to the SessionNewsFeed.php controller
        header("location: SessionNewsFeed.php");
    }
    else
    {
        //Now the code below will redirect to the index.php page
        header("location: ../login.php");
    }
?>