<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 11-Feb-2019, 11:32:11 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //include ('./classes/DB.php');
    //include ('./classes/Login.php');

    if (isset($_POST['btnsetnewpassword']))
    {
        
        //Method to show the Change Password (change-password.php)
        //if (Login::isLoggedIn())
        //if (isset($_GET['passwordtoken']))
        /* //OLD
        {
            //$user = $_SESSION['session_user_set'];

            //Just making more sense (for security matters) - but seems slow to render in the browser
            //INCLUDING THE HTML_HEAD_p1
            include ('./features/HTML_HEAD_part1.php');

            echo "<title>Mudar Senha</title>";

            //INCLUDING THE HTML_HEAD_p2
            include ('./features/HTML_HEAD_part2.php');

            echo "<link rel='stylesheet' type='text/css' media='screen' href='./css/style_newsfeed.css' />
            <script src='./js/index.js'></script>
        </head>";

            //INCLUDING THE HTML_BODY_p1_V3
            include ('./features/HTML_BODY_part1_V3.php');

            //INCLUDING THE HTML_BODY_p2_V3
            include ('./features/HTML_BODY_part2_V3.php');

            //INCLUDING THE HTML_BODY_p2_V3
            include ('./features/HTML_BODY_CHANGE_PASSWORD.php');
        }
        else
        {
            session_destroy();
            //Now the code below will redirect to the index.php page
            die(header("location: ./login.php"));
        }
        */

        //Just making more sense (for security matters) - but seems slow to render in the browser
        //INCLUDING THE HTML_HEAD_p1
        include ('./features/HTML_HEAD_part1.php');

        echo "<title>Mudar Senha</title>";

        //INCLUDING THE HTML_HEAD_p2
        include ('./features/HTML_HEAD_part2.php');

        echo "<link rel='stylesheet' type='text/css' media='screen' href='./css/style_newsfeed.css' />
        <script src='./js/index.js'></script>
    </head>";

        //INCLUDING THE HTML_BODY_p1_V3
        include ('./features/HTML_BODY_part1_V4.php');

        //INCLUDING THE HTML_BODY_p2_V3
        include ('./features/HTML_BODY_part2_V4.php');

        //INCLUDING THE HTML_BODY_p2_V3
        include ('./features/HTML_BODY_CHANGE_PASSWORD.php');

        
    }
    elseif (isset($_GET['passwordtoken']))
    {
        //Storing the given token in the URL
        $passTokenURL = $_GET['passwordtoken'];

        session_start();
        $_SESSION['passwordtoken'] = $passTokenURL;

        header("location: ./controllers/ControllerChangePasswordWithToken.php");

        //session_destroy();
        //Now the code below will redirect to the index.php page
        //die(header("location: ./login.php"));
        //echo "boooooooooooooooooo";

        //Just making more sense (for security matters) - but seems slow to render in the browser
        //INCLUDING THE HTML_HEAD_p1
        /*
        include ('./features/HTML_HEAD_part1.php');

        echo "<title>Mudar Senha - Com Token</title>";

        //INCLUDING THE HTML_HEAD_p2
        include ('./features/HTML_HEAD_part2.php');

        echo "<link rel='stylesheet' type='text/css' media='screen' href='./css/style_newsfeed.css' />
        <script src='./js/index.js'></script>
    </head>";

        //INCLUDING THE HTML_BODY_p1_V3
        include ('./features/HTML_BODY_part1_V3.php');

        //INCLUDING THE HTML_BODY_p2_V3
        include ('./features/HTML_BODY_part2_V3.php');

        //INCLUDING THE HTML_BODY_p2_V3
        include ('./features/HTML_BODY_CHANGE_PASSWORD_WITH_TOKEN.php');

        //INCLUDING THE HTML_FOOTER.php
        include ('./features/HTML_FOOTER.php');

        //INCLUDING THE CONTROLLER ControllerCahngePasswordWithToken.php
        //include ('./controller/ControllerChangePasswordWithToken.php');

        //header("location: ./controllers/ControllerChangePasswordWithToken.php");
        */
    }
    else
    {
        session_destroy();
        //Now the code below will redirect to the index.php page
        die(header("location: ./login.php"));
    }
?>