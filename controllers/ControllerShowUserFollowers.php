<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 03-Mar-2019, 05:53:37 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php

    //$userid = Login::isLoggedIn();
    //$followers = DB::query('SELECT username FROM tb_users, tb_followers WHERE userid=followers_followerid AND followers_userid=:userid', array(':userid'=>$userid))[0]['username'];
    $followers = DB::query('SELECT username FROM tb_users, tb_followers WHERE userid=followers_followerid AND followers_userid=:userid', array(':userid'=>$userid));

    if ($userid == $followerid)
    {
        //if ($isFollowing == False)
        //{
            //Total of connections
            $length = count($followers);
            echo "<h4><span class='badge badge-light'>Nº de Seguidores: " . $length . "</span></h4>" . "<br>";

            //Showing the followers
            
            for ($i = 0; $i < $length; $i++)
            {
                //Here this will take the index of $i and the name in the table
                //echo $followers[$i]['username'];

                $follower_user = $followers[$i]['username'];
                echo "<blockquote><p><i><a href='profile.php?username=$follower_user'>" . "@". $follower_user . "</a></i></p></blockquote>";
                
                //echo DB::query('SELECT username FROM tb_users, tb_followers WHERE userid=followers_followerid AND followers_userid=:userid', array(':userid'=>$userid))[$i]['username'];
                echo "<br>";
            }
            
            //Another way of get things done
            /*
            foreach ($followers as $follower)
            {
                //$blega = $follower;
                echo $follower[0] . "<br>";
            }
            */
        //}
    }
    else
    {
        //echo "buguella";
        $followers = DB::query('SELECT username FROM tb_users, tb_followers WHERE userid=followers_followerid AND followers_userid=:userid', array(':userid'=>$userid));

        $length = count($followers);
        echo "<h4><span class='badge badge-light'>Nº de Seguidores: " . $length . "</span></h4>" . "<br>";

        //Showing the followers
        
        for ($i = 0; $i < $length; $i++)
        {
            //Here this will take the index of $i and the name in the table
            //echo $followers[$i]['username'];

            $follower_user = $followers[$i]['username'];
            echo "<blockquote><p><i><a href='profile.php?username=$follower_user'>" . "@". $follower_user . "</a></i></p></blockquote>";

            //echo DB::query('SELECT username FROM tb_users, tb_followers WHERE userid=followers_followerid AND followers_userid=:userid', array(':userid'=>$userid))[$i]['username'];
            echo "<br>";
        }
    }

?>