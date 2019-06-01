<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 24-Feb-2019, 08:41:21 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //This is going to catch the topic
    if (isset($_GET['topic']))
    {
        if (DB::query("SELECT posts_topics FROM tb_posts WHERE FIND_IN_SET(:topic, posts_topics)", array(':topic'=>$_GET['topic'])))
        {
            $posts = DB::query("SELECT * FROM tb_posts WHERE FIND_IN_SET(:topic, posts_topics)", array(':topic'=>$_GET['topic']));

            /*
            foreach($posts as $post)
            {
                echo $post['posts_body']."<br /><hr>";
                
            }
            */

            function printPostTopic($posts)
            {
                for ($i = 0; $i < count($posts); $i++)
                {
                    echo $posts[$i]['posts_body'] . " &#x1F516;" . "<br>";
                }
            }
        }
        else
        {
            //echo "Não existe nenhum tópico com essa keyword!";
            $posts = "Não existe nenhum tópico com essa keyword!";
            function printPostTopic($posts)
            {
                echo $posts . " &#x1F516;";
                echo "<br>";
                echo "(Verifique se não existe erros de digitação!)";
            }
        }
    }
    //
    elseif (isset($_POST['btnsearchtopic']) && !empty($_POST['txtkeyword']))
    {
        //session_start();
        $keyword = $_POST['txtkeyword'];
        if (DB::query("SELECT posts_topics FROM tb_posts WHERE FIND_IN_SET(:topic, posts_topics)", array(':topic'=>$keyword)))
        {
            $posts = DB::query("SELECT * FROM tb_posts WHERE FIND_IN_SET(:topic, posts_topics)", array(':topic'=>$keyword));

            function printPostTopic($posts)
            {
                for ($i = 0; $i < count($posts); $i++)
                {
                    echo $posts[$i]['posts_body'] . " &#x1F516;" . "<br>";
                }
            }
            
            //$_SESSION['session_topics'] = printPostTopic($posts);
            //header("location: ../topics.php");
        }
        else
        {
            //echo "Não existe nenhum tópico com essa keyword!";
            $posts = "Não existe nenhum tópico com essa keyword!";
            function printPostTopic($posts)
            {
                echo $posts . " &#x1F516;";
                echo "<br>";
                echo "(Verifique se não existe erros de digitação!)";
            }
        }
        
    }
    //
    else
    {
        if (isset($_POST['btnsearchtopic']) && empty($_POST['txtkeyword']))
        {
            $keyword = $_POST['txtkeyword'];
            if (DB::query("SELECT posts_topics FROM tb_posts WHERE FIND_IN_SET(:topic, posts_topics)", array(':topic'=>$keyword)))
            {
                $posts = DB::query("SELECT * FROM tb_posts WHERE FIND_IN_SET(:topic, posts_topics)", array(':topic'=>$keyword));

                
                function printPostTopic($posts)
                {
                    echo "A caixa de texto foi ficou vazia. Todos os resultados foram encontrados:<br><hr>";
                    for ($i = 0; $i < count($posts); $i++)
                    {
                        echo $posts[$i]['posts_body'] . " &#x1F516;" . "<br>";
                    }
                }
                
            }
        }
        else
        {
            //die;
            $posts = "Nenhum tópico ainda!";
            function printPostTopic($posts)
            {
                echo $posts . " &#x1F516;";
            }
        }
    }
?>