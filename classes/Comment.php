<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 21-Feb-2019, 10:04:42 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    class Comment
    {
        public static function createComment($commentbody, $postId, $userId)
        {
            if (strlen($commentbody) > 1500 || strlen($commentbody) < 1)
            {
                echo "Are you trying to trick me?<br />";
                echo "There's nothing inside the box...<br />";
                echo "DUDE - Let's play a game...<br />";
                die;
                //die('Incorrect length!');
            }
    
            if (!DB::query('SELECT posts_id FROM tb_posts WHERE posts_id=:postid', array(':postid'=>$postId)))
            {
                echo 'Invalid Post ID';
    
            }
            else
            {
                DB::query('INSERT INTO tb_comments VALUES (NULL, :comment, :userid, NOW(), :postid)', array(':comment'=>$commentbody, ':userid'=>$userId, ':postid'=>$postId));
            }
        }
        public static function displayComments($postId)
        {
            $comments = DB::query('SELECT tb_comments.comments_comment, tb_users.username FROM tb_comments, tb_users
            WHERE comments_post_id = :postid
            AND tb_comments.comments_userid = tb_users.userid;', array(':postid'=>$postId));
            //print_r($comments);
            foreach($comments as $comment)
            {
                //echo "<section id='comcom'>".$comment['comments_comment']." ~ <a href='profile.php?username=".$comment['username']."'>@".$comment['username']."</a><hr /></section>";
                echo "<section id='comcom'>".$comment['comments_comment']." ~ <a href='profile.php?username=".$comment['username']."'>@".$comment['username']."</a><hr /></section>";
            }
        }
    }
?>