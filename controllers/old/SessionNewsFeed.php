<?php
/* 
    Subject    : OFF CAMPUS PLATFORM PROJECT
    Created on : 08-Feb-2019, 03:28:32 AM
    Author     : Marc Freir
    License    : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
*/
?>

<?php
    //This is called by the ControllerNewsFeed.php
    session_start();
    if (isset($_SESSION['session_newsfeed']))
    {
        $user_newsfeed = $_SESSION['session_newsfeed'];
        $_SESSION['session_show_user_newsfeed'] = $user_newsfeed;
        header("location: ../index.php");
    }
    else
    {
        session_destroy();
        //Now the code below will redirect to the login.php page
        header("location: ../login.php");
    }
?>