<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 18-Feb-2019, 01:00:03 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<!-- SHOWING THE POSTS -->
                
            <div class="posts">
                <?php
                    $posts = Post::displayPosts($userid, $username, $followerid);
                    echo $posts;
                ?>
            </div>

                