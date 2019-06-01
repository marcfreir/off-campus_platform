<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 17-Feb-2019, 01:52:03 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //Just...
    //Here - just check if the user isn't the follower itself -> will avoid the actual user from following itself
    if ($userid != $followerid)
    {
        if ($isFollowing)
        {
            //Here - if is already following this shows the Unfollow Button
            include ('./features/HTML_UNFOLLOW_BUTTON.php');
        }
        else
        {
            //Here - othewise this shows the Follow Button
            include ('./features/HTML_FOLLOW_BUTTON.php');
        }
    }
?>