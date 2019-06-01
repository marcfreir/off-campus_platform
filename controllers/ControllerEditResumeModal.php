<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 10-Mar-2019, 01:36:38 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
include ('../classes/DB.php');
include ('../classes/Login.php');
//include ('../classes/Resume.php');


//$userid = Login::isLoggedIn();
/*
var_dump ($userid);
echo "<br>";
print_r ($userid);
die;
*/

    if (isset($_POST['btnsaveresumeuser']))
    {
        //First - Resume Table
        $userid = Login::isLoggedIn();
        $userFullName = $_POST['txtuserfullname'];
        $userReferenceName = $_POST['txtuserreferencename'];
        $userBirthDate = $_POST['txtuserbirthdate'];
        $userSex = $_POST['txtusersex'];
        $userEmail = $_POST['txtuseremail'];
        $userDocumentNumber = $_POST['txtuserdocumentnumber'];
        $userAddress = $_POST['txtuseraddress'];

        //Second - Resume Features Table
        $resumeMainId = DB::query('SELECT resume_main_id FROM tb_resume_main WHERE resume_main_userid=:userid', array(':userid'=>$userid));;
        //$userid = Login::isLoggedIn();
        $resumeUserId = Login::isLoggedIn();
        $degreeName = $_POST['txtdegreename'];
        $degreeStartDate = $_POST['txtdegreestartdate'];
        $degreeFinishDate = $_POST['txtdegreefinishdate'];
        $degreeInstitutionName = $_POST['txtdegreeinstitutionname'];
        $coursesName = $_POST['txtcoursesname'];
        $jobPositionName = $_POST['txtjobpositionname'];
        $jobStartDate = $_POST['txtjobstartdate'];
        $jobFinishDate = $_POST['txtjobfinishdate'];
        $jobInstitutionName = $_POST['txtjobinstitutionname'];
        $languages = $_POST['txtlanguages'];
        $academicPaperEssay_1 = $_POST['txtpaperessay1'];
        $academicPaperEssayLink_1 = $_POST['txtpaperessaylink1'];
        $academicPaperEssay_2 = $_POST['txtpaperessay2'];
        $academicPaperEssayLink_2 = $_POST['txtpaperessaylink2'];
        $academicPaperEssay_3 = $_POST['txtpaperessay3'];
        $academicPaperEssayLink_3 = $_POST['txtpaperessaylink3'];
        $academicPaperEssay_4 = $_POST['txtpaperessay4'];
        $academicPaperEssayLink_4 = $_POST['txtpaperessaylink4'];
        $academicPaperEssay_5 = $_POST['txtpaperessay5'];
        $academicPaperEssayLink_5 = $_POST['txtpaperessaylink5'];
        $othersRelevantInformation = $_POST['txtothersrelevantinformation'];

        //Calling the Resume Class with the editResume Function
        include ('../classes/Resume.php');
        Resume::editResume($userid, $userFullName, $userReferenceName, $userBirthDate, $userSex, $userEmail, $userDocumentNumber, $userAddress, 
        $resumeMainId, $resumeUserId, $degreeName, $degreeStartDate, $degreeFinishDate, $degreeInstitutionName, $coursesName, $jobPositionName, 
        $jobStartDate, $jobFinishDate, $jobInstitutionName, $languages, $academicPaperEssay_1, $academicPaperEssayLink_1, 
        $academicPaperEssay_2, $academicPaperEssayLink_2, $academicPaperEssay_3, $academicPaperEssayLink_3, $academicPaperEssay_4, $academicPaperEssayLink_4,
        $academicPaperEssay_5, $academicPaperEssayLink_5, $othersRelevantInformation);

        /*

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
        }*/
        /*
        else
        {*/
            //OLD QUERY - BUGGY
            /*
            DB::query('INSERT INTO tb_profile VALUES (NULL, profile_userid=:userid, profile_user_fullname=:userfullname, profile_user_profile_type=:userprofiletype,
            profile_user_birth_date=:userbirthdate, profile_user_sex=:usersex, profile_user_number=:usernumber, profile_user_orcid=:userorcid,
            profile_user_education_type=:usereducationtype, profile_user_city=:usercity, profile_user_state_province=:userstateprovince,
            profile_user_country=:usercountry, profile_user_bio=:userbio)', array(':userid'=>$userid, ':userfullname'=>$userFullName, ':userprofiletype'=>$userProfileType, ':userbirthdate'=>$userBirthDate, ':usersex'=>$userSex, 
            ':usernumber'=>$userNumber, ':userorcid'=>$userOrcid, ':usereducationtype'=>$userEducationType, ':usercity'=>$userCity, ':userstateprovince'=>$userStateProvince,
            ':usercountry'=>$userCountry, ':userbio'=>$userBio));
            */

            /*
            DB::query('INSERT INTO tb_profile VALUES (NULL, :userid, :userfullname, :userprofiletype, :userbirthdate, :usersex, :usernumber, :userorcid,
            :usereducationtype, :usercity, :userstateprovince, :usercountry, :userbio)', array(':userid'=>$userid, ':userfullname'=>$userFullName, 
            ':userprofiletype'=>$userProfileType, ':userbirthdate'=>$userBirthDate, ':usersex'=>$userSex, ':usernumber'=>$userNumber, 
            ':userorcid'=>$userOrcid, ':usereducationtype'=>$userEducationType, ':usercity'=>$userCity, ':userstateprovince'=>$userStateProvince,
            ':usercountry'=>$userCountry, ':userbio'=>$userBio));

            header("location: ../profile.php");
        }
        */

    }

    
?>