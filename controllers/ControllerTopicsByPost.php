<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 28-Feb-2019, 09:40:05 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/

//JUST TEMP - TEST
?>

<?php
    include ('../classes/DB.php');
    if (isset($_POST['btnsearchtopic']))
    {
        session_start();
        $keyword = $_POST['txtkeyword'];
        if (DB::query("SELECT posts_topics FROM tb_posts WHERE FIND_IN_SET(:topic, posts_topics)", array(':topic'=>$keyword)))
        {
            $posts = DB::query("SELECT * FROM tb_posts WHERE FIND_IN_SET(:topic, posts_topics)", array(':topic'=>$keyword));

            function printPostTopic($posts)
            {
                for ($i = 0; $i < count($posts); $i++)
                {
                    echo $posts[$i]['posts_body'] . "<br>";
                }
            }
            
            $_SESSION['session_topics'] = printPostTopic($posts);
            header("location: ../topics.php");
        }
        else
        {
            echo ("nothinghgjgjhgjhg");
        }
        
    }
    else
    {
        echo ("fsdfsssssssssssssssssssssssssssssssss");
    }
    
?>