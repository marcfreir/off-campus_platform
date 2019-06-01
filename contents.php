<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 10-Mar-2019, 05:49:07 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    include ('./classes/DB.php');
    include ('./classes/Login.php');
    //include ('./classes/Post.php');
    //include ('./controllers/ControllerProfile.php');
    //include ('./controllers/ControllerTopics.php');
    //include ('./controllers/ControllerTopicsByPost.php');

    if (Login::isLoggedIn())
    {
        $user = $_SESSION['session_user_set'];

        //Just making more sense (for security matters) - but seems slow to render in the browser
        //INCLUDING THE HTML_HEAD_part1
        include ('./features/HTML_HEAD_part1.php');

        echo "<title>Conteudos</title>";

        //INCLUDING THE HTML_HEAD_part2
        include ('./features/HTML_HEAD_part2.php');

        echo "<link rel='stylesheet' type='text/css' media='screen' href='./css/style_contents.css' />
        <script src='./js/index.js'></script>
        </head>";

        //INCLUDING THE HTML_BODY_part1_V4
        include ('./features/HTML_BODY_part1_V4.php');

        //INCLUDING THE HTML_BODY_part2_V4
        include ('./features/HTML_BODY_part2_V4.php');

        //INCLUDING THE HTML_BODY_TOPICS
        include ('./features/HTML_BODY_CONTENTS.php');

        //INCLUDING THE HTML_BODY_CONTENTS_EDITOR
        include ('./features/HTML_BODY_CONTENTS_EDITOR.php');

        include ('./features/HTML_MODAL_CONTENTS_MODELS.php');

        echo "<br><br><br><br><br><br><br>";

        echo "<h4>*criar formas de publicar artigos com um padrão ou com um editor embutido</h4> <br>";

        echo "<h4>*os artigos tem que ser paginas dinamicas</h4><br>";

        echo "<h4>*funcionar como posts, porem publicos</h4><br>";

        echo "<h4>*provavelmente criar um buscador</h4><br>";

        echo "<h4>*MOSTRAR AQUI OS ARTIGOS/PUBLICAçÕES SALVAS</h4><br>";

        include ('./features/HTML_FOOTER.php');

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



