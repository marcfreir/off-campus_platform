<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 20-Feb-2019, 05:09:14 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    $userid = Login::isLoggedIn();

    if (isset($_GET['postid']))
    {
        //Calling the POST class --> function likePost
        Post::likePost($_GET['postid'], $userid);
    }

    if (isset($_POST['btncomment']))
    {
        //Calling the COMMENT class --> function createComment
        Comment::createComment($_POST['txtcommentbody'], $_GET['postid'], $userid);
    }

    $followingPosts = DB::query('SELECT tb_posts.posts_id, tb_posts.posts_body, tb_posts.posts_likes, tb_users.username FROM tb_users, tb_posts, tb_followers
    WHERE tb_posts.posts_userid = tb_followers.followers_userid
    AND tb_users.userid = tb_posts.posts_userid
    AND followers_followerid = :userid
    ORDER BY tb_posts.posts_likes DESC;', array(':userid'=>$userid));

    foreach($followingPosts as $post)
    {
        
            //create um include for the pieces of code below
            echo "
                <div class='container'>
                    <div class='card'>
                        <div class='card-body'>
                            <div class='timelineposts'>
                                <blockquote>
                                    <p>
                                        ".$post['posts_body']." ~ <a href='profile.php?username=".$post['username']."'>@".$post['username']."</a>";
            echo "
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    
                        <form action='index.php?postid=".$post['posts_id']."' method='post' id='content'>";
                        if (!DB::query('SELECT post_likes_post_id FROM tb_post_likes WHERE post_likes_post_id=:post_likes_post_id AND post_likes_userid=:post_likes_userid', array(':post_likes_post_id'=>$post['posts_id'], ':post_likes_userid'=>$userid)))
                        {
                            echo "
                            <!-- <div class='input-group lg'> -->
                            <!-- <div class='btn-group lg'> -->
                            <!-- <input type='submit' class='small button' id='sml-button' name='like' value='Like'> -->
                            <button class='small button' name='like' type='submit' id='sml-button'><span class='fa fa-heart'></span>Like</button>";
                        }
                        else
                        {
                            echo "
                            <!-- <input type='submit' name='unlike' value='Unlike'> -->
                            <button class='small button' name='unlike' type='submit' id='smu-button'><span class='fa fa-thumbs-down'></span>Unike</button>";
                        }

                        echo "
                            <span class='badge badge-light'>".$post['posts_likes']." like(s)</span>
                        </form>
                    </div>
                </div>
                ";
                        //INCLUDING THE HTML_BODY_COMMENT
                        include ('./features/HTML_BODY_COMMENT.php');

                        //INCLUDING THE HTML_BODY_DISPLAY_COMMENT
                        include ('./features/HTML_BODY_DISPLAY_COMMENT.php');

            /*
            echo "
            <form action='index.php?postid=" . $post['posts_id'] . "' method='post'>
                <input type='submit' name='like' value='Like'>
                <span class='badge badge-light'>".$post['posts_likes']." like(s)</span>
            </form>
            <hr /></br />";
            */
    }
?>