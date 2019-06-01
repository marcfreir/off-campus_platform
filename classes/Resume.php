<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 12-Mar-2019, 08:44:38 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    class Resume
    {
        public static function editResume($userid, $userFullName, $userReferenceName, $userBirthDate, $userSex, $userEmail, $userDocumentNumber, $userAddress, 
        $resumeMainId, $resumeUserId, $degreeName, $degreeStartDate, $degreeFinishDate, $degreeInstitutionName, $coursesName, $jobPositionName, 
        $jobStartDate, $jobFinishDate, $jobInstitutionName, $languages, $academicPaperEssay_1, $academicPaperEssayLink_1, 
        $academicPaperEssay_2, $academicPaperEssayLink_2, $academicPaperEssay_3, $academicPaperEssayLink_3, $academicPaperEssay_4, $academicPaperEssayLink_4,
        $academicPaperEssay_5, $academicPaperEssayLink_5, $othersRelevantInformation)
        {
            $userid = Login::isLoggedIn();

            if (!DB::query('SELECT * FROM tb_resume_main WHERE resume_main_userid=:userid', array(':userid'=>$userid)))
            {
                if (!DB::query('SELECT * FROM tb_resume_features WHERE resume_features_userid=:userid', array(':userid'=>$userid)))
                {
                    //First Insert into the Resume Table
                    DB::query('INSERT INTO tb_resume_main VALUES (NULL, :userid, :userfullname, :userreferencename, :userbirthdate, :usersex, :useremail, :userdocumentnumber,
                    :useraddress)', array(':userid'=>$userid, ':userfullname'=>$userFullName, ':userreferencename'=>$userReferenceName, ':userbirthdate'=>$userBirthDate, ':usersex'=>$userSex, ':useremail'=>$userEmail, 
                    ':userdocumentnumber'=>$userDocumentNumber, ':useraddress'=>$userAddress));

                    $resumeMainId = DB::query('SELECT resume_main_id FROM tb_resume_main WHERE resume_main_userid=:resumeuserid', array(':resumeuserid'=>$userid));

                    //Second Insert into the Resume Features Table
                    DB::query('INSERT INTO tb_resume_features VALUES (NULL, :resumemainid, :userid, :degreename, :degreestartdate, :degreefinishdate, :degreeinstitutionname, :coursename, :jobpositionname,
                    :jobstartdate, :jobfinishdate, :jobinstitutionname, :languages, :academicpaperessay_1, :academicpaperessaylink_1, :academicpaperessay_2, :academicpaperessaylink_2, :academicpaperessay_3, 
                    :academicpaperessaylink_3, :academicpaperessay_4, :academicpaperessaylink_4, :academicpaperessay_5, :academicpaperessaylink_5, :othersrelevantinformation)', 
                    array(':resumemainid'=>$resumeMainId, ':resumeuserid'=>$resumeUserId, ':degreename'=>$degreeName, ':degreestartdate'=>$degreeStartDate, ':degreefinishdate'=>$degreeFinishDate, ':degreeinstitutionname'=>$degreeInstitutionName, 
                    ':coursesname'=>$coursesName, ':jobpositionname'=>$jobPositionName, ':jobstartdate'=>$jobStartDate, ':jobfinishdate'=>$jobFinishDate, ':jobinstitutionname'=>$jobInstitutionName, ':languages'=>$languages, 
                    ':academicpaperessay_1'=>$academicPaperEssay_1, ':academicpaperessaylink_1'=>$academicPaperEssayLink_1, ':academicpaperessay_2'=>$academicPaperEssay_2, ':academicpaperessaylink_2'=>$academicPaperEssayLink_2, 
                    ':academicpaperessay_3'=>$academicPaperEssay_3, ':academicpaperessaylink_3'=>$academicPaperEssayLink_3, ':academicpaperessay_4'=>$academicPaperEssay_4, ':academicpaperessaylink_4'=>$academicPaperEssayLink_4, 
                    ':academicpaperessay_5'=>$academicPaperEssay_5, ':academicpaperessaylink_5'=>$academicPaperEssayLink_5,  
                    ':othersrelevantinformation'=>$othersRelevantInformation));
    
                    header("location: ../resume.php");
                }
            }
            else
            {
                //First Update the Resume Table
                DB::query('UPDATE tb_resume_main SET resume_main_user_fullname=:userfullname, resume_main_user_reference_name=:userreferencename,
                resume_main_user_birth_date=:userbirthdate, resume_main_user_sex=:usersex, resume_main_user_email=:useremail, resume_main_user_document_number=:userdocumentnumber,
                resume_main_user_address=:useraddress WHERE resume_main_userid=:userid', array(':userfullname'=>$userFullName, ':userreferencename'=>$userReferenceName, ':userbirthdate'=>$userBirthDate, ':usersex'=>$userSex, 
                ':useremail'=>$userEmail, ':userdocumentnumber'=>$userDocumentNumber, ':useraddress'=>$userAddress, ':userid'=>$userid));

                //Second Update the Resume Features Table
                DB::query('UPDATE tb_resume_features SET resume_features_degree_name=:degreename, resume_features_degree_start_date=:degreestartdate,
                resume_features_degree_finish_date=:degreefinishdate, resume_features_degree_institution_name=:degreeinstitutionname, resume_features_courses_name=:coursesname, resume_features_job_position_name=:jobpositionname,
                resume_features_job_start_date=:jobstartdate, resume_features_job_finish_date=:jobfinishdate, resume_features_job_institution_name=:jobinstitutionname, resume_features_languages=:languages, 
                resume_features_academic_paper_essay_1=:academicpaperessay_1, resume_features_academic_paper_essay_link_1=:academicpaperessaylink_1, resume_features_academic_paper_essay_2=:academicpaperessay_2, resume_features_academic_paper_essay_link_2=:academicpaperessaylink_2, 
                resume_features_academic_paper_essay_3=:academicpaperessay_3, resume_features_academic_paper_essay_link_3=:academicpaperessaylink_3, resume_features_academic_paper_essay_4=:academicpaperessay_4, resume_features_academic_paper_essay_link_4=:academicpaperessaylink_4, 
                resume_features_academic_paper_essay_5=:academicpaperessay_5, resume_features_academic_paper_essay_link_5=:academicpaperessaylink_5, resume_features_others_relevant_information=:othersrelevantinformation WHERE resume_features_userid=:userid', 
                array(':degreename'=>$degreeName, ':degreestartdate'=>$degreeStartDate, ':degreefinishdate'=>$degreeFinishDate, ':degreeinstitutionname'=>$degreeInstitutionName, ':coursesname'=>$coursesName, 
                ':jobpositionname'=>$jobPositionName, ':jobstartdate'=>$jobStartDate, ':jobfinishdate'=>$jobFinishDate, ':jobinstitutionname'=>$jobInstitutionName, ':languages'=>$languages, 
                ':academicpaperessay_1'=>$academicPaperEssay_1, ':academicpaperessaylink_1'=>$academicPaperEssayLink_1, ':academicpaperessay_2'=>$academicPaperEssay_2, ':academicpaperessaylink_2'=>$academicPaperEssayLink_2, 
                ':academicpaperessay_3'=>$academicPaperEssay_3, ':academicpaperessaylink_3'=>$academicPaperEssayLink_3, ':academicpaperessay_4'=>$academicPaperEssay_4, ':academicpaperessaylink_4'=>$academicPaperEssayLink_4, 
                ':academicpaperessay_5'=>$academicPaperEssay_5, ':academicpaperessaylink_5'=>$academicPaperEssayLink_5, ':othersrelevantinformation'=>$othersRelevantInformation, ':userid'=>$userid));

                header("location: ../resume.php");
            }
        }

        public static function getUserData($userid)
        {
            //if is logged in // !db select tb_resume show there is no data to show, otherwise show select yb_resume
            if (Login::isLoggedIn())
            {
                //echo "buguellllaaaaa";
                //echo $userid;
            }
        }
    }
?>