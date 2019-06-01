<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 09-Feb-2019, 07:55:21 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    include ('./classes/DB.php');
    include ('./classes/Login.php');
    include ('./classes/Post.php');
    include ('./controllers/ControllerProfile.php');
    //include ('./controllers/ControllerEditProfileModal.php');
    include ('./controllers/ControllerVerifiedUser.php');
    //include ('./classes/User.php');
    
    //include ('./controllers/ControllerProfilePosts.php');
    
    
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

        echo "<title>Perfil</title>";

        //INCLUDING THE HTML_HEAD_part2
        include ('./features/HTML_HEAD_part2.php');

        echo "<link rel='stylesheet' type='text/css' media='screen' href='./css/style_profile.css' />
        <script src='./js/index.js'></script>
    </head>";

        //INCLUDING THE HTML_BODY_part1_V4
        include ('./features/HTML_BODY_part1_V4.php');

        //INCLUDING THE HTML_BODY_part2_V4
        include ('./features/HTML_BODY_part2_V4.php');

        //INCLUDING THE HTML_BODY_part2_V3 (old)
        //include ('./features/HTML_BODY_PROFILE.php');

        //TEST
        //include ('./classes/ImageProfile.php');

        //ImageProfile::get_gravatar("someone@example.com");

        //INCLUDING THE HTML_BODY_STICKY_CARD_USER
        //include ('./features/HTML_BODY_STICKY_CARD_USER.php');

        //INCLUDING THE HTML_BODY_IMAGE_PROFILE
        include ('./features/HTML_BODY_IMAGE_PROFILE.php');

        //INCLUDING THE HTML_BODY_USER_PROFILE
        include ('./features/HTML_BODY_USER_PROFILE.php');

        //INCLUDING THE HTML_MODAL_PROFILE_EDIT
        include ('./features/HTML_MODAL_PROFILE_EDIT.php');
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