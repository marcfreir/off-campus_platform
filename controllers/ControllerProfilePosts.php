<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 18-Feb-2019, 05:46:55 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //Here - First the variable userverified is set to False
    $dbposts = "";

    //Here - If the username is set in the URL this will grab the username value and store for a while
    if (isset($_GET['username']))
    {
        //Here - If the username is equal to the value stored from the GET method above(...)
        if (DB::query('SELECT username FROM tb_users WHERE username=:username', array(':username'=>$_GET['username'])))
        {


            if (isset($_POST['btnpost']))
            {
                $postbody = $_POST['txtpostbody'];
                $userid = Login::isLoggedIn();

                if (strlen($postbody) > 3000 || strlen($postbody) < 1)
                {
                    die ('Quantidade incorreta de caracters!');
                }

                //if ($loggedInUserId == $userid)
                //{
                    DB::query('INSERT INTO tb_posts VALUES (NULL, :posts_body, NOW(), :posts_userid, 0)', array(':posts_body'=>$postbody, ':posts_userid'=>$userid));
                //}
                //else
                //{
                    //die ('Usuário incorreto!');
                //}
                
            }

            //$dbposts = DB::query('SELECT * FROM tb_posts WHERE posts_userid=:userid ORDER BY posts_id DESC', array(':userid'=>$userid));
            //$posts = "";
            //Show the posts
            /*
            foreach ($dbposts as $p)
            {
                $posts .= $p['posts_body'] . "<hr><br>";
            }
            */


        }
    }
    else
    {
        if (isset($_COOKIE['OCID']))
        {
            //This will verify the logintoken of the user in the DB and compare to the cookie stored in the browser
            if (DB::query('SELECT logintoken_userid FROM tb_login_tokens WHERE logintoken=:logintoken', array(':logintoken'=>sha1($_COOKIE['OCID']))))
            {
                //Here - the variable logintokenuserid will retrieve the value of the logintoken_userid from the DB
                $logintokenuserid = DB::query('SELECT logintoken_userid FROM tb_login_tokens WHERE logintoken=:logintoken', array(':logintoken'=>sha1($_COOKIE['OCID'])))[0]['logintoken_userid'];
                $user_set = DB::query('SELECT username FROM tb_users WHERE userid=:logintokenuserid', array(':logintokenuserid'=>$logintokenuserid))[0]['username'];
                $username = $user_set;

            }
            else
            {
                die ('Você precisa habilitar os cookies no seu navegador');
            }
        }
        else
        {
            die ('Você precisa habilitar os cookies no seu navegador');
        }
    }
    //Here - just check if the user has a verified status and print out the word
    
    $dbposts = DB::query('SELECT * FROM tb_posts WHERE posts_userid=:userid ORDER BY posts_id DESC', array(':userid'=>$userid));
    $db_posts = $dbposts;
    $posts = "";
    function showPosts($posts)
    {
        $userid = Login::isLoggedIn();
        $dbposts = DB::query('SELECT * FROM tb_posts WHERE posts_userid=:userid ORDER BY posts_id DESC', array(':userid'=>$userid));
        if (is_array($dbposts) || is_object($dbposts))
        {
            foreach ($dbposts as $p)
            {
                $posts .= $p['posts_body'] . "<hr><br>";

                echo $posts;
            }
        }
    }
    
?>

