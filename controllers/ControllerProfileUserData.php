<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 05-Mar-2019, 10:29:17 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
/*
include ('../classes/Profile.php');
    //if ($userid == $followerid)
    //{
        $profile = new Profile();
        $rows = $profile->selectProfile();

        echo $rows['profile_userid'];
    //}
*/


    //$userid = Login::isLoggedIn();
    //$followers = DB::query('SELECT username FROM tb_users, tb_followers WHERE userid=followers_followerid AND followers_userid=:userid', array(':userid'=>$userid))[0]['username'];
    $profile = DB::query('SELECT * FROM tb_profile WHERE profile_userid=:userid', array(':userid'=>$userid));
    $profileBirthDate = DB::query('SELECT DATE_FORMAT(profile_user_birth_date, "%d/%m/%Y") FROM tb_profile WHERE profile_userid=:userid', array(':userid'=>$userid));

    if ($userid == $followerid)
    {
        if ($isFollowing == False)
        {
            //Total of users in tb_profile
            $length = count($profile);
            //echo "<h4><span class='badge badge-light'>Nº de Seguidores: " . $length . "</span></h4>" . "<br>";

            if ($length > 0)
            {
                $userFullName = $profile[0]['profile_user_fullname'];
                $userProfileType = $profile[0]['profile_user_profile_type'];
                $userBirthDate = $profile[0]['profile_user_birth_date'];
                //$userBirthDate = $profileBirthDate[0]['DATE_FORMAT(profile_user_birth_date, "%d/%m/%Y")'];
                $userSex = $profile[0]['profile_user_sex'];
                $userNumber = $profile[0]['profile_user_number'];
                $userOrcid = $profile[0]['profile_user_orcid'];
                $userEducationType = $profile[0]['profile_user_education_type'];
                $userCity = $profile[0]['profile_user_city'];
                $userStateProvince = $profile[0]['profile_user_state_province'];
                $userCountry = $profile[0]['profile_user_country'];
                $userBio = $profile[0]['profile_user_bio'];
            }
            else
            {
                $userFullName = "sem dados";
                $userProfileType = "sem dados";
                $userBirthDate = "sem dados";
                //$userBirthDate = $profileBirthDate[0]['DATE_FORMAT(profile_user_birth_date, "%d/%m/%Y")'];
                $userSex = "sem dados";
                $userNumber = "sem dados";
                $userOrcid = "sem dados";
                $userEducationType = "sem dados";
                $userCity = "sem dados";
                $userStateProvince = "sem dados";
                $userCountry = "sem dados";
                $userBio = "sem dados";
            }
        }
    }
    else
    {
        //die;
        
        $profile = DB::query('SELECT * FROM tb_profile WHERE profile_userid=:userid', array(':userid'=>$userid));

        $length = count($profile);

        if ($length > 0)
        {
            $userFullName = $profile[0]['profile_user_fullname'];
            $userProfileType = $profile[0]['profile_user_profile_type'];
            $userBirthDate = $profile[0]['profile_user_birth_date'];
            //$userBirthDate = $profileBirthDate[0]['DATE_FORMAT(profile_user_birth_date, "%d/%m/%Y")'];
            $userSex = $profile[0]['profile_user_sex'];
            $userNumber = $profile[0]['profile_user_number'];
            $userOrcid = $profile[0]['profile_user_orcid'];
            $userEducationType = $profile[0]['profile_user_education_type'];
            $userCity = $profile[0]['profile_user_city'];
            $userStateProvince = $profile[0]['profile_user_state_province'];
            $userCountry = $profile[0]['profile_user_country'];
            $userBio = $profile[0]['profile_user_bio'];
        }
        else
        {
            $userFullName = "sem dados";
            $userProfileType = "sem dados";
            $userBirthDate = "sem dados";
            //$userBirthDate = $profileBirthDate[0]['DATE_FORMAT(profile_user_birth_date, "%d/%m/%Y")'];
            $userSex = "sem dados";
            $userNumber = "sem dados";
            $userOrcid = "sem dados";
            $userEducationType = "sem dados";
            $userCity = "sem dados";
            $userStateProvince = "sem dados";
            $userCountry = "sem dados";
            $userBio = "sem dados";
        }
        
    }

?>