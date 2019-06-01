<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 14-Mar-2019, 04:44:33 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
//include ('../classes/DB.php');
//include ('../classes/Login.php');
/*
include ('../classes/Profile.php');
    //if ($userid == $followerid)
    //{
        $profile = new Profile();
        $rows = $profile->selectProfile();

        echo $rows['profile_userid'];
    //}
*/
include ('./classes/Resume.php');
Resume::getUserData($userid);


    //$userid = Login::isLoggedIn();
    //$followers = DB::query('SELECT username FROM tb_users, tb_followers WHERE userid=followers_followerid AND followers_userid=:userid', array(':userid'=>$userid))[0]['username'];
    $resumeMain = DB::query('SELECT * FROM tb_resume_main WHERE resume_main_userid=:userid', array(':userid'=>$userid));
    $resumeFeatures = DB::query('SELECT * FROM tb_resume_features WHERE resume_features_userid=:userid', array(':userid'=>$userid));

    $resumeBirthDate = DB::query('SELECT DATE_FORMAT(resume_main_user_birth_date, "%d/%m/%Y") FROM tb_resume_main WHERE resume_main_userid=:userid', array(':userid'=>$userid));

    //$length = count($profile);

    //print_r ($length);
    //die;

    if ($userid == $endorserid)
    {
        if ($isEndorsing == False)
        {
            //Total of users in tb_resume_main
            $lengthResumeMain = count($resumeMain);
            //Total of users in tb_resume_features
            $lengthResumeFeatures = count($resumeFeatures);

            //var_dump ($length);
            //die;
            //echo "<h4><span class='badge badge-light'>Nº de Seguidores: " . $length . "</span></h4>" . "<br>";

            if ($lengthResumeMain > 0)
            {
                //Table Resume Main
                $userFullName = $resumeMain[0]['resume_main_user_fullname'];
                $userReferenceName = $resumeMain[0]['resume_main_user_reference_name'];
                $userBirthDate = $resumeMain[0]['resume_main_user_birth_date'];
                //$userBirthDate = $resumeBirthDate[0]['DATE_FORMAT(resume_main_user_birth_date, "%d/%m/%Y")'];
                $userSex = $resumeMain[0]['resume_main_user_sex'];
                $userEmail = $resumeMain[0]['resume_main_user_email'];
                $userDocumentNumber = $resumeMain[0]['resume_main_user_document_number'];
                $userAddress = $resumeMain[0]['resume_main_user_address'];

                if ($lengthResumeFeatures > 0)
                {
                    //Table Resume Features
                    $degreeName = $resumeFeatures[0]['resume_features_degree_name'];
                    $degreeStartDate = $resumeFeatures[0]['resume_features_degree_start_date'];
                    $degreeFinishDate = $resumeFeatures[0]['resume_features_degree_finish_date'];
                    $degreeInstitutionName = $resumeFeatures[0]['resume_features_degree_institution_name'];
                    $coursesName = $resumeFeatures[0]['resume_features_courses_name'];
                    $jobPositionName = $resumeFeatures[0]['resume_features_job_position_name'];
                    $jobStartDate = $resumeFeatures[0]['resume_features_job_start_date'];
                    $jobFinishDate = $resumeFeatures[0]['resume_features_job_finish_date'];
                    $jobInstitutionName = $resumeFeatures[0]['resume_features_job_institution_name'];
                    $languages = $resumeFeatures[0]['resume_features_languages'];
                    $academicPaperEssay_1 = $resumeFeatures[0]['resume_features_academic_paper_essay_1'];
                    $academicPaperEssayLink_1 = $resumeFeatures[0]['resume_features_academic_paper_essay_link_1'];
                    $academicPaperEssay_2 = $resumeFeatures[0]['resume_features_academic_paper_essay_2'];
                    $academicPaperEssayLink_2 = $resumeFeatures[0]['resume_features_academic_paper_essay_link_2'];
                    $academicPaperEssay_3 = $resumeFeatures[0]['resume_features_academic_paper_essay_3'];
                    $academicPaperEssayLink_3 = $resumeFeatures[0]['resume_features_academic_paper_essay_link_3'];
                    $academicPaperEssay_4 = $resumeFeatures[0]['resume_features_academic_paper_essay_4'];
                    $academicPaperEssayLink_4 = $resumeFeatures[0]['resume_features_academic_paper_essay_link_4'];
                    $academicPaperEssay_5 = $resumeFeatures[0]['resume_features_academic_paper_essay_5'];
                    $academicPaperEssayLink_5 = $resumeFeatures[0]['resume_features_academic_paper_essay_link_5'];
                    $othersRelevantInformation = $resumeFeatures[0]['resume_features_others_relevant_information'];
                }
                else
                {
                    //Table Resume Features
                    $degreeName = "sem dados";
                    $degreeStartDate = "sem dados";
                    $degreeFinishDate = "sem dados";
                    $degreeInstitutionName = "sem dados";
                    $coursesName = "sem dados";
                    $jobPositionName = "sem dados";
                    $jobStartDate = "sem dados";
                    $jobFinishDate = "sem dados";
                    $jobInstitutionName = "sem dados";
                    $languages = "sem dados";
                    $academicPaperEssay_1 = "sem dados";
                    $academicPaperEssayLink_1 = "sem dados";
                    $academicPaperEssay_2 = "sem dados";
                    $academicPaperEssayLink_2 = "sem dados";
                    $academicPaperEssay_3 = "sem dados";
                    $academicPaperEssayLink_3 = "sem dados";
                    $academicPaperEssay_4 = "sem dados";
                    $academicPaperEssayLink_4 = "sem dados";
                    $academicPaperEssay_5 = "sem dados";
                    $academicPaperEssayLink_5 = "sem dados";
                    $othersRelevantInformation = "sem dados";
                }
                
            }
            else
            {
                $userFullName = "sem dados";
                //Table Resume Main
                $userFullName = "sem dados";
                $userReferenceName = "sem dados";
                $userBirthDate = "sem dados";
                //$userBirthDate = "sem dados";
                $userSex = "sem dados";
                $userEmail = "sem dados";
                $userDocumentNumber = "sem dados";
                $userAddress = "sem dados";

                //Table Resume Features
                $degreeName = "sem dados";
                $degreeStartDate = "sem dados";
                $degreeFinishDate = "sem dados";
                $degreeInstitutionName = "sem dados";
                $coursesName = "sem dados";
                $jobPositionName = "sem dados";
                $jobStartDate = "sem dados";
                $jobFinishDate = "sem dados";
                $jobInstitutionName = "sem dados";
                $languages = "sem dados";
                $academicPaperEssay_1 = "sem dados";
                $academicPaperEssayLink_1 = "sem dados";
                $academicPaperEssay_2 = "sem dados";
                $academicPaperEssayLink_2 = "sem dados";
                $academicPaperEssay_3 = "sem dados";
                $academicPaperEssayLink_3 = "sem dados";
                $academicPaperEssay_4 = "sem dados";
                $academicPaperEssayLink_4 = "sem dados";
                $academicPaperEssay_5 = "sem dados";
                $academicPaperEssayLink_5 = "sem dados";
                $othersRelevantInformation = "sem dados";
            }
        }
    }
    else
    {
        $resumeMain = DB::query('SELECT * FROM tb_resume_main WHERE resume_main_userid=:userid', array(':userid'=>$userid));
        $resumeFeatures = DB::query('SELECT * FROM tb_resume_features WHERE resume_features_userid=:userid', array(':userid'=>$userid));

        //Total of users in tb_resume_main
        $lengthResumeMain = count($resumeMain);
        //Total of users in tb_resume_features
        $lengthResumeFeatures = count($resumeFeatures);

        if ($lengthResumeMain > 0)
        {
            //Table Resume Main
            $userFullName = $resumeMain[0]['resume_main_user_fullname'];
            $userReferenceName = $resumeMain[0]['resume_main_user_reference_name'];
            $userBirthDate = $resumeMain[0]['resume_main_user_birth_date'];
            //$userBirthDate = $resumeBirthDate[0]['DATE_FORMAT(resume_main_user_birth_date, "%d/%m/%Y")'];
            $userSex = $resumeMain[0]['resume_main_user_sex'];
            $userEmail = $resumeMain[0]['resume_main_user_email'];
            $userDocumentNumber = $resumeMain[0]['resume_main_user_document_number'];
            $userAddress = $resumeMain[0]['resume_main_user_address'];

            if ($lengthResumeFeatures > 0)
            {
                //Table Resume Features
                $degreeName = $resumeFeatures[0]['resume_features_degree_name'];
                $degreeStartDate = $resumeFeatures[0]['resume_features_degree_start_date'];
                $degreeFinishDate = $resumeFeatures[0]['resume_features_degree_finish_date'];
                $degreeInstitutionName = $resumeFeatures[0]['resume_features_degree_institution_name'];
                $coursesName = $resumeFeatures[0]['resume_features_courses_name'];
                $jobPositionName = $resumeFeatures[0]['resume_features_job_position_name'];
                $jobStartDate = $resumeFeatures[0]['resume_features_job_start_date'];
                $jobFinishDate = $resumeFeatures[0]['resume_features_job_finish_date'];
                $jobInstitutionName = $resumeFeatures[0]['resume_features_job_institution_name'];
                $languages = $resumeFeatures[0]['resume_features_languages'];
                $academicPaperEssay_1 = $resumeFeatures[0]['resume_features_academic_paper_essay_1'];
                $academicPaperEssayLink_1 = $resumeFeatures[0]['resume_features_academic_paper_essay_link_1'];
                $academicPaperEssay_2 = $resumeFeatures[0]['resume_features_academic_paper_essay_2'];
                $academicPaperEssayLink_2 = $resumeFeatures[0]['resume_features_academic_paper_essay_link_2'];
                $academicPaperEssay_3 = $resumeFeatures[0]['resume_features_academic_paper_essay_3'];
                $academicPaperEssayLink_3 = $resumeFeatures[0]['resume_features_academic_paper_essay_link_3'];
                $academicPaperEssay_4 = $resumeFeatures[0]['resume_features_academic_paper_essay_4'];
                $academicPaperEssayLink_4 = $resumeFeatures[0]['resume_features_academic_paper_essay_link_4'];
                $academicPaperEssay_5 = $resumeFeatures[0]['resume_features_academic_paper_essay_5'];
                $academicPaperEssayLink_5 = $resumeFeatures[0]['resume_features_academic_paper_essay_link_5'];
                $othersRelevantInformation = $resumeFeatures[0]['resume_features_others_relevant_information'];
            }
            else
            {
                //Table Resume Features
                $degreeName = "sem dados";
                $degreeStartDate = "sem dados";
                $degreeFinishDate = "sem dados";
                $degreeInstitutionName = "sem dados";
                $coursesName = "sem dados";
                $jobPositionName = "sem dados";
                $jobStartDate = "sem dados";
                $jobFinishDate = "sem dados";
                $jobInstitutionName = "sem dados";
                $languages = "sem dados";
                $academicPaperEssay_1 = "sem dados";
                $academicPaperEssayLink_1 = "sem dados";
                $academicPaperEssay_2 = "sem dados";
                $academicPaperEssayLink_2 = "sem dados";
                $academicPaperEssay_3 = "sem dados";
                $academicPaperEssayLink_3 = "sem dados";
                $academicPaperEssay_4 = "sem dados";
                $academicPaperEssayLink_4 = "sem dados";
                $academicPaperEssay_5 = "sem dados";
                $academicPaperEssayLink_5 = "sem dados";
                $othersRelevantInformation = "sem dados";
            }
            
        }
        else
        {
            $userFullName = "sem dados";
            //Table Resume Main
            $userFullName = "sem dados";
            $userReferenceName = "sem dados";
            $userBirthDate = "sem dados";
            //$userBirthDate = "sem dados";
            $userSex = "sem dados";
            $userEmail = "sem dados";
            $userDocumentNumber = "sem dados";
            $userAddress = "sem dados";

            //Table Resume Features
            $degreeName = "sem dados";
            $degreeStartDate = "sem dados";
            $degreeFinishDate = "sem dados";
            $degreeInstitutionName = "sem dados";
            $coursesName = "sem dados";
            $jobPositionName = "sem dados";
            $jobStartDate = "sem dados";
            $jobFinishDate = "sem dados";
            $jobInstitutionName = "sem dados";
            $languages = "sem dados";
            $academicPaperEssay_1 = "sem dados";
            $academicPaperEssayLink_1 = "sem dados";
            $academicPaperEssay_2 = "sem dados";
            $academicPaperEssayLink_2 = "sem dados";
            $academicPaperEssay_3 = "sem dados";
            $academicPaperEssayLink_3 = "sem dados";
            $academicPaperEssay_4 = "sem dados";
            $academicPaperEssayLink_4 = "sem dados";
            $academicPaperEssay_5 = "sem dados";
            $academicPaperEssayLink_5 = "sem dados";
            $othersRelevantInformation = "sem dados";
        }








        //---------------------------------------------------------------------------
        //die;
        /*
        
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
        */
    }

?>