<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 10-Mar-2019, 01:08:12 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    class Post
    {
        public static function createPost($postbody, $loggedInUserId, $profileUserId)
        {
            
            

            if (strlen($postbody) > 2400 || strlen($postbody) < 1)
            {
                die ('Quantidade incorreta de caracters!');
            }

            $topics = self::getTopics($postbody);

            if ($loggedInUserId == $profileUserId)
            {
                DB::query('INSERT INTO tb_posts VALUES (NULL, :posts_body, NOW(), :posts_userid, 0, :posts_topics)', array(':posts_body'=>$postbody, ':posts_userid'=>$profileUserId, ':posts_topics'=>$topics));
            }
            else
            {
                die ('Usuário incorreto!');
            }
        }

        public static function likePost($postId, $likerId)
        {
            if (!DB::query('SELECT post_likes_userid FROM tb_post_likes WHERE post_likes_post_id=:post_likes_post_id AND post_likes_userid=:post_likes_userid', array(':post_likes_post_id'=>$postId, ':post_likes_userid'=>$likerId)))
            {
                DB::query('UPDATE tb_posts SET posts_likes=posts_likes+1 WHERE posts_id=:posts_id', array(':posts_id'=>$postId));
                DB::query('INSERT INTO tb_post_likes VALUES (NULL, :post_likes_post_id, :post_likes_userid)', array(':post_likes_post_id'=>$postId, ':post_likes_userid'=>$likerId));
            }
            else
            {
                DB::query('UPDATE tb_posts SET posts_likes=posts_likes-1 WHERE posts_id=:posts_id', array(':posts_id'=>$postId));
                DB::query('DELETE FROM tb_post_likes WHERE post_likes_post_id=:post_likes_post_id AND post_likes_userid=:post_likes_userid', array(':post_likes_post_id'=>$postId, ':post_likes_userid'=>$likerId));
            }
        }

        public static function getTopics($text)
        {
            $text = explode(" ", $text);
            $topics = "";

            foreach ($text as $word)
            {
                if (substr($word, 0, 1) == "#")
                {
                    $topics .= substr($word, 1).",";
                }
            }
            return $topics;
        }

        public static function link_add($text)
        {
            $text = explode(" ", $text);
            $newstring = "";

            foreach ($text as $word)
            {
                if (substr($word, 0, 1) == "@")
                {
                    $newstring .= "<a href='profile.php?username=".substr($word, 1)."'>".$word." </a>";
                }
                else if (substr($word, 0, 1) == "#")
                {
                    $newstring .= "<a href='topics.php?topic=".substr($word, 1)."'>".$word." </a>";
                }
                else
                {
                    $newstring .= $word." ";
                }
            }

            //echo $newstring;

            return $newstring;
        }

        public static function displayPosts($userid, $username, $loggedInUserId)
        {
            $dbposts = DB::query('SELECT * FROM tb_posts WHERE posts_userid=:posts_userid ORDER BY posts_id DESC', array(':posts_userid'=>$userid));
            $posts = "";
            //Show the posts
            foreach ($dbposts as $p)
            {
                if (!DB::query('SELECT post_likes_post_id FROM tb_post_likes WHERE post_likes_post_id=:post_likes_post_id AND post_likes_userid=:post_likes_userid', array(':post_likes_post_id'=>$p['posts_id'], ':post_likes_userid'=>$loggedInUserId)))
                {
                    $posts .= self::link_add($p['posts_body']) . "<form action='profile.php?username=$username&postid=" . $p['posts_id'] . "' method='post'>
                                                    <!-- <input type='submit' name='like' value='Like'> -->
                                                    <button class='small button' name='like' type='submit' id='sml-button'><span class='fa fa-heart'></span>Like</button>
                                                    <span class='badge badge-light'>".$p['posts_likes']." like(s)</span>";
                    if ($userid == $loggedInUserId)
                    {
                        $posts .= "<button type='submit' class='small button' id='sml-button' name='btndeletepost'><span class='fa fa-trash'></span>Deletar</button>";
                    }
                    $posts .= "                               
                                </form>
                                <hr /></br />";
                }
                else
                {
                    $posts .= self::link_add($p['posts_body']) . "<form action='profile.php?username=$username&postid=" . $p['posts_id'] . "' method='post'>
                                                    <!-- <input type='submit' name='unlike' value='Unlike'> -->
                                                    <button class='small button' name='unlike' type='submit' id='smu-button'><span class='fa fa-thumbs-down'></span>Unike</button>
                                                    <span class='badge badge-light'>".$p['posts_likes']." like(s)</span>";
                    if ($userid == $loggedInUserId)
                    {
                        $posts .= "<button type='submit' class='small button' id='sml-button' name='btndeletepost'><span class='fa fa-trash'></span>Deletar</button>";
                    }
                    $posts .= "                               
                                </form>
                                <hr /></br />";
                    
                    //
                    //unset($_GET['username']);
                    //unset($_GET['postid']);
                }
            }
            return $posts;
        }
    }
?>