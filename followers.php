<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 03-Mar-2019, 05:53:37 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    include ('./classes/DB.php');
    include ('./classes/Login.php');
    //include ('./classes/Post.php');
    include ('./controllers/ControllerFollowers.php');
    include ('./controllers/ControllerFollowings.php');
    include ('./controllers/ControllerVerifiedUser.php');
    

    //New method to show the Followers Page (followers.php)
    if (Login::isLoggedIn())
    {
        $user = $_SESSION['session_user_set'];

        //Just making more sense (for security matters) - but seems slow to render in the browser
        //INCLUDING THE HTML_HEAD_part1
        include ('./features/HTML_HEAD_part1.php');

        echo "<title>Seguidores</title>";

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

        //INCLUDING THE HTML_BODY_IMAGE_PROFILE
        include ('./features/HTML_BODY_IMAGE_PROFILE.php');

        //INCLUDING THE HTML_BODY_USER_PROFILE
        include ('./features/HTML_BODY_USER_FOLLOWERS.php');

        //echo "Quem me segue <br><hr>";
        
        //include ('./controllers/ControllerShowUserFollowers.php');

        //INCLUDING THE HTML_MODAL_PROFILE_EDIT
        //include ('./features/HTML_MODAL_PROFILE_EDIT.php');
        
    }
    else
    {
        session_destroy();
        //Now the code below will redirect to the index.php page
        die(header("location: ./login.php"));
    }
?>