<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 13-Feb-2019, 02:50:30 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    include ('./classes/DB.php');
    include ('./classes/Login.php');
    include ('./classes/Post.php');
    include ('./controllers/ControllerResume.php');
    include ('./controllers/ControllerVerifiedUser.php');
    include ('./classes/Endorser.php');
    //include ('./classes/Resume.php');
    //include ('./controllers/ControllerEditResumeModal.php');
    //include ('./controllers/ControllerResumeUserData.php');
    
    ////This was called by the ControllerNewsFeed.php (now in the "old" folder)
    /*
    session_start();
    if (isset($_SESSION['session_show_user_newsfeed']))
    {
        $user = $_SESSION['session_show_user_newsfeed'];
        //echo $user;
    }
    else
    {
        session_destroy();
        //Now the code below will redirect to the index.php page
        header("location: ./login.php");
    }
    */

    //New method to show the Profile (profile.php)
    if (Login::isLoggedIn())
    {
        $user = $_SESSION['session_user_set'];

        //Just making more sense (for security matters) - but seems slow to render in the browser
        //INCLUDING THE HTML_HEAD_part1
        include ('./features/HTML_HEAD_part1.php');

        echo "<title>Curriculo</title>";

        //INCLUDING THE HTML_HEAD_part2
        include ('./features/HTML_HEAD_part2.php');

        echo "<link rel='stylesheet' type='text/css' media='screen' href='./css/style_resume.css' />
        <script src='./js/index.js'></script>
    </head>";

        //INCLUDING THE HTML_BODY_part1_V4
        include ('./features/HTML_BODY_part1_V4.php');

        //INCLUDING THE HTML_BODY_part2_V4
        include ('./features/HTML_BODY_part2_V4.php');

        //INCLUDING THE HTML_BODY_USER_RESUME
        include ('./features/HTML_BODY_USER_RESUME.php');

        //INCLUDING THE HTML_MODAL_RESUME_EDIT
        include ('./features/HTML_MODAL_RESUME_EDIT.php');
    }
    else
    {
        session_destroy();
        //Now the code below will redirect to the index.php page
        die(header("location: ./login.php"));
    }
?>

<!-- (OLD) Make less sense (for security matters) - but seems fast to render in the browser -->
<!-- INCLUDING THE HTML MAIN FEATURES -->
<?php
//INCLUDING THE HTML_HEAD_p1
//include ('./features/HTML_HEAD_part1.php');
?>
<!-- <title>Perfil</title> -->
<?php
//INCLUDING THE HTML_HEAD_p2
//include ('./features/HTML_HEAD_part2.php');
?>

<!-- The complement of the code for HTML_HEAD_part2.php -->
<!--
    <link rel='stylesheet' type='text/css' media='screen' href='./css/style_profile.css' />
    <script src='./js/index.js'></script>
</head>
-->

<?php
////INCLUDING THE HTML_BODY_p1_V3
//include ('./features/HTML_BODY_part1_V3.php');
?>
<?php
////INCLUDING THE HTML_BODY_p2_V3
//include ('./features/HTML_BODY_part2_V3.php');
?>
<?php
////INCLUDING THE HTML_BODY_p2_V3
//include ('./features/HTML_BODY_PROFILE.php');
?>