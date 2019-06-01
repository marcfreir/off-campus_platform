<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 03-Mar-2019, 01:25:53 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    include ('./classes/DB.php');
    include ('./classes/Login.php');
    //include ('./controllers/ControllerLogout.php');

    if (Login::isLoggedIn())
    {
        //INCLUDING THE HTML_HEAD_p1
        include ('./features/HTML_HEAD_part1.php');

        echo "<title>Logout</title>";

        //INCLUDING THE HTML_HEAD_p2
        include ('./features/HTML_HEAD_part2.php');

        //The complement of the code for HTML_HEAD_part2.php
        echo "<link rel='stylesheet' type='text/css' media='screen' href='./css/style_message_pages.css' />
        <script src='./js/index.js'></script>
    </head>";

        //INCLUDING THE HTML_BODY_p1_V4
        include ('./features/HTML_BODY_part1_V4.php');

        //INCLUDING THE HTML_BODY_p2_V4
        include ('./features/HTML_BODY_part2_V4.php');

        //INCLUDING THE HTML_BODY_LOGOUT
        include ('./features/HTML_BODY_LOGOUT.php');

        //INCLUDING THE HTML_FOOTER
        include ('./features/HTML_FOOTER.php');
    }
    else
    {
        session_destroy();
        //Now the code below will redirect to the index.php page
        die(header("location: ./login.php"));
    }
?>