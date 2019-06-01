<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 14-Feb-2019, 12:06:38 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //include ('./classes/DB.php');
    //include ('./classes/Login.php');

    session_start();

    if (isset($_SESSION['change_password_with_token']))
    {

        //Just making more sense (for security matters) - but seems slow to render in the browser
        //INCLUDING THE HTML_HEAD_p1
        include ('./features/HTML_HEAD_part1.php');

        echo "<title>Mudar Senha - com Token</title>";

        //INCLUDING THE HTML_HEAD_p2
        include ('./features/HTML_HEAD_part2.php');

        echo "<link rel='stylesheet' type='text/css' media='screen' href='./css/style_newsfeed.css' />
        <script src='./js/index.js'></script>
    </head>";

        //INCLUDING THE HTML_BODY_p1_V3
        include ('./features/HTML_BODY_part1_V3.php');

        //INCLUDING THE HTML_BODY_p2_V3
        include ('./features/HTML_BODY_part2_V3.php');

        //INCLUDING THE HTML_BODY_CHANGE_PASSWORD_WITH_TOKEN
        include ('./features/HTML_BODY_CHANGE_PASSWORD_WITH_TOKEN.php');

        unset($_SESSION['change_password_with_token']);
    }
    else
    {
        session_destroy();
        //Now the code below will redirect to the index.php page
        die(header("location: ./login.php"));
        
        //echo "I have no idea";
    }
?>