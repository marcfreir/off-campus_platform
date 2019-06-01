<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 04-Mar-2019, 08:21:34 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php

    //$userid = Login::isLoggedIn();
    //$followers = DB::query('SELECT username FROM tb_users, tb_followers WHERE userid=followers_followerid AND followers_userid=:userid', array(':userid'=>$userid))[0]['username'];
    $followings = DB::query('SELECT username FROM tb_users, tb_followers WHERE userid=followers_userid AND followers_followerid=:userid', array(':userid'=>$userid));

    if ($userid == $followingid)
    {
        //if ($isFollowing == False)
        //{
            //Total of connections
            $length = count($followings);
            echo "<h4><span class='badge badge-light'>Nº de usuarios que segue: " . $length . "</span></h4>" . "<br>";

            //Showing the followers
            
            for ($i = 0; $i < $length; $i++)
            {
                //Here this will take the index of $i and the name in the table
                //echo $followings[$i]['username'];

                $following_user = $followings[$i]['username'];
                echo "<blockquote><p><i><a href='profile.php?username=$following_user'>" . "@". $following_user . "</a></i></p></blockquote>";
                
                //echo DB::query('SELECT username FROM tb_users, tb_followers WHERE userid=followers_followerid AND followers_userid=:userid', array(':userid'=>$userid))[$i]['username'];
                echo "<br>";
            }
            
            //Another way of get things done
            /*
            foreach ($followings as $following)
            {
                //$blega = $following;
                echo $following[0] . "<br>";
            }
            */
        //}
    }
    else
    {
        //echo "buguella";
        $followings = DB::query('SELECT username FROM tb_users, tb_followers WHERE userid=followers_userid AND followers_followerid=:userid', array(':userid'=>$userid));

        $length = count($followings);
        echo "<h4><span class='badge badge-light'>Nº de usuarios que segue: " . $length . "</span></h4>" . "<br>";

        //Showing the followings
        
        for ($i = 0; $i < $length; $i++)
        {
            //Here this will take the index of $i and the name in the table
            //echo $followers[$i]['username'];

            $following_user = $followings[$i]['username'];
            echo "<blockquote><p><i><a href='profile.php?username=$following_user'>" . "@". $following_user . "</a></i></p></blockquote>";

            //echo DB::query('SELECT username FROM tb_users, tb_followers WHERE userid=followers_followerid AND followers_userid=:userid', array(':userid'=>$userid))[$i]['username'];
            echo "<br>";
        }
    }

?>