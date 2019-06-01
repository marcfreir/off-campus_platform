<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 24-Feb-2019, 09:04:58 PM
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
    include ('./controllers/ControllerTopics.php');
    //include ('./controllers/ControllerTopicsByPost.php');

    if (Login::isLoggedIn())
    {
        $user = $_SESSION['session_user_set'];

        //Just making more sense (for security matters) - but seems slow to render in the browser
        //INCLUDING THE HTML_HEAD_part1
        include ('./features/HTML_HEAD_part1.php');

        echo "<title>Tópicos</title>";

        //INCLUDING THE HTML_HEAD_part2
        include ('./features/HTML_HEAD_part2.php');

        echo "<link rel='stylesheet' type='text/css' media='screen' href='./css/style_message_pages.css' />
        <script src='./js/index.js'></script>
        </head>";

        //INCLUDING THE HTML_BODY_part1_V4
        include ('./features/HTML_BODY_part1_V4.php');

        //INCLUDING THE HTML_BODY_part2_V4
        include ('./features/HTML_BODY_part2_V4.php');

        //INCLUDING THE HTML_BODY_TOPICS
        include ('./features/HTML_BODY_TOPICS.php');

        /*
        if (isset($_SESSION['session_topics']))
        {
            echo $_SESSION['session_topics'];
        }
        else
        {
            die ("Nothing");
        }
        */
    }

    else
    {
        session_destroy();
        //Now the code below will redirect to the index.php page
        die(header("location: ./login.php"));
    }
?>