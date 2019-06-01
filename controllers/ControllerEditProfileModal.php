<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 05-Mar-2019, 09:10:40 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
include ('../classes/DB.php');
include ('../classes/Login.php');

$userid = Login::isLoggedIn();
/*
var_dump ($userid);
echo "<br>";
print_r ($userid);
die;
*/

    if (isset($_POST['btnsaveuser']))
    {
        $userFullName = $_POST['txtuserfullname'];
        $userProfileType = $_POST['txtuserprofiletype'];
        $userBirthDate = $_POST['txtuserbirthdate'];
        $userSex = $_POST['txtusersex'];
        $userNumber = $_POST['txtusernumber'];
        $userOrcid = $_POST['txtuserorcid'];
        $userEducationType = $_POST['txtusereducationtype'];
        $userCity = $_POST['txtusercity'];
        $userStateProvince = $_POST['txtuserstateprovince'];
        $userCountry = $_POST['txtusercountry'];
        $userBio = $_POST['txtuserbio'];

        if (DB::query('SELECT * FROM tb_profile WHERE profile_userid=:userid', array(':userid'=>$userid)))
        {
            DB::query('UPDATE tb_profile SET profile_user_fullname=:userfullname, profile_user_profile_type=:userprofiletype,
            profile_user_birth_date=:userbirthdate, profile_user_sex=:usersex, profile_user_number=:usernumber, profile_user_orcid=:userorcid,
            profile_user_education_type=:usereducationtype, profile_user_city=:usercity, profile_user_state_province=:userstateprovince,
            profile_user_country=:usercountry, profile_user_bio=:userbio 
            WHERE profile_userid=:userid', array(':userfullname'=>$userFullName, ':userprofiletype'=>$userProfileType, ':userbirthdate'=>$userBirthDate, ':usersex'=>$userSex, 
            ':usernumber'=>$userNumber, ':userorcid'=>$userOrcid, ':usereducationtype'=>$userEducationType, ':usercity'=>$userCity, ':userstateprovince'=>$userStateProvince, 
            ':usercountry'=>$userCountry, ':userbio'=>$userBio, ':userid'=>$userid));

            header("location: ../profile.php");
        }
        else
        {
            //OLD QUERY - BUGGY
            /*
            DB::query('INSERT INTO tb_profile VALUES (NULL, profile_userid=:userid, profile_user_fullname=:userfullname, profile_user_profile_type=:userprofiletype,
            profile_user_birth_date=:userbirthdate, profile_user_sex=:usersex, profile_user_number=:usernumber, profile_user_orcid=:userorcid,
            profile_user_education_type=:usereducationtype, profile_user_city=:usercity, profile_user_state_province=:userstateprovince,
            profile_user_country=:usercountry, profile_user_bio=:userbio)', array(':userid'=>$userid, ':userfullname'=>$userFullName, ':userprofiletype'=>$userProfileType, ':userbirthdate'=>$userBirthDate, ':usersex'=>$userSex, 
            ':usernumber'=>$userNumber, ':userorcid'=>$userOrcid, ':usereducationtype'=>$userEducationType, ':usercity'=>$userCity, ':userstateprovince'=>$userStateProvince,
            ':usercountry'=>$userCountry, ':userbio'=>$userBio));
            */
            DB::query('INSERT INTO tb_profile VALUES (NULL, :userid, :userfullname, :userprofiletype, :userbirthdate, :usersex, :usernumber, :userorcid,
            :usereducationtype, :usercity, :userstateprovince, :usercountry, :userbio)', array(':userid'=>$userid, ':userfullname'=>$userFullName, 
            ':userprofiletype'=>$userProfileType, ':userbirthdate'=>$userBirthDate, ':usersex'=>$userSex, ':usernumber'=>$userNumber, 
            ':userorcid'=>$userOrcid, ':usereducationtype'=>$userEducationType, ':usercity'=>$userCity, ':userstateprovince'=>$userStateProvince,
            ':usercountry'=>$userCountry, ':userbio'=>$userBio));

            header("location: ../profile.php");
        }
        

    }
?>