-- SUBJECT: DATABASE PROJECT - OFF CAMPUS PLATFORM PROJECT
-- AUTHOR: MARC FREIR
-- CREATED ON: 28-NOV-2018, 02:17:38 PM
-- LICENCE: This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
-- LICENCE SOURCE: https://creativecommons.org/licenses/by-nc-nd/4.0/

CREATE DATABASE db_offcampus;

-- DROP DATABASE db_offcampus;

USE db_offcampus;

CREATE TABLE tb_users
(
	userid INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	username VARCHAR(32) DEFAULT NULL,
	useremail TEXT,
	userprofile VARCHAR(10) NOT NULL,
	userpassword VARCHAR(60) NOT NULL,
	userverified TINYINT(1) NOT NULL DEFAULT '0',
	-- userprofileimg VARCHAR(255) DEFAULT NULL,
	CONSTRAINT PRIMARY KEY (userid)
)
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- DROP TABLE tb_users;

SELECT *
FROM tb_users;

DELETE FROM tb_users
WHERE userid = "1";

SELECT userpassword
FROM tb_users
WHERE username = "lili";

ALTER TABLE tb_users
ADD CONSTRAINT userid
PRIMARY KEY (userid);

#ALTER TABLE tb_users
#MODIFY COLUMN username VARCHAR(32) NOT NULL UNIQUE;

#ALTER TABLE tb_users
#ADD COLUMN userverified BOOL NOT NULL DEFAULT '0';

#ALTER TABLE tb_users
#MODIFY COLUMN userverified BOOL NOT NULL DEFAULT '0';

/*
UPDATE tb_users
SET userverified = '1'
WHERE username = "mike";
*/

SELECT *
FROM tb_users;

/*
SELECT tb_users.username, tb_posts.posts_body FROM tb_users, tb_posts
WHERE tb_users.username LIKE '%mike%'
OR tb_posts.posts_body LIKE '%test%';
*/

-- USER SESSION TABLE (if there is any user with a session already started, the user cannot log in again) MAYBE? ###

CREATE TABLE tb_login_tokens
(
	logintoken_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	logintoken CHAR(64) NOT NULL DEFAULT '',
	logintoken_userid INT(11) UNSIGNED NOT NULL,
	CONSTRAINT PRIMARY KEY (logintoken_id),
	CONSTRAINT UNIQUE KEY logintoken (logintoken),
	CONSTRAINT fk_logintoken_userid FOREIGN KEY (logintoken_userid)
	REFERENCES tb_users(userid)
	#ON DELETE CASCADE
	#ON UPDATE CASCADE
)
ENGINE = InnoDB DEFAULT CHARSET=UTF8;

-- DROP TABLE tb_login_tokens;

SELECT *
FROM tb_login_tokens;

CREATE TABLE tb_password_tokens
(
	passwordtoken_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	passwordtoken CHAR(64) NOT NULL DEFAULT '',
	passwordtoken_userid INT(11) UNSIGNED NOT NULL,
	CONSTRAINT PRIMARY KEY (passwordtoken_id),
	CONSTRAINT UNIQUE KEY passwordtoken (passwordtoken),
	CONSTRAINT fk_passwordtoken_userid FOREIGN KEY (passwordtoken_userid)
	REFERENCES tb_users(userid)
	#ON DELETE CASCADE
	#ON UPDATE CASCADE
)
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- DROP TABLE tb_password_tokens;

SELECT *
FROM tb_password_tokens;

CREATE TABLE tb_followers
(
	followers_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	followers_userid INT(11) UNSIGNED NOT NULL, # the user's id who is followed (the user who is followed)
	followers_followerid INT(11) UNSIGNED NOT NULL, # the follower's id (the user who is following)
	CONSTRAINT PRIMARY KEY (followers_id),
	CONSTRAINT fk_followers_userid FOREIGN KEY (followers_userid)
	REFERENCES tb_users(userid)
	#ON DELETE CASCADE
	#ON UPDATE CASCADE
)
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- DROP TABLE tb_followers;

SELECT *
FROM tb_followers;

-- WoW //START
SELECT username
FROM tb_users, tb_followers 
WHERE userid = followers_followerid AND followers_userid = 1;

SELECT followers_followerid
FROM tb_followers
WHERE followers_userid = "1";

## Lili's followers 
SELECT followers_followerid, username
FROM tb_followers, tb_users
WHERE userid = followers_followerid AND followers_userid = 1;

## Who Lili follows 
SELECT followers_userid, username
FROM tb_followers, tb_users
WHERE userid = followers_userid AND followers_followerid = 1;

-- WoW //END

-- TEST
SELECT followers_followerid
FROM tb_followers
WHERE followers_userid = 1
AND followers_followerid = 2;
-- --------------

SELECT tb_users.username, tb_posts.posts_body FROM tb_users, tb_posts
WHERE tb_users.username LIKE '%mike%'
OR tb_posts.posts_body LIKE '%test%';

SELECT tb_users.username FROM tb_users, tb_followers
WHERE tb_followers.followers_userid = 1;

-- I (lili) want the name of my followers -mike and -titi 
SELECT tb_users.username
FROM tb_users, tb_followers
WHERE tb_users.userid = tb_followers.followers_userid = 1;


INSERT INTO tb_users
(userid, username, userprofile, userpassword, useremail, userverified)
VALUES
(DEFAULT, "verified", "verified", "verified", "verified@verified.com", 0);


CREATE TABLE tb_posts
(
	posts_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	posts_body TEXT NOT NULL,
	posts_posted_at DATETIME NOT NULL,
	posts_userid INT(11) UNSIGNED NOT NULL,
	posts_likes INT(11) UNSIGNED NOT NULL,
	-- posts_posting VARCHAR(255) DEFAULT NULL,
	posts_topics VARCHAR(500) DEFAULT NULL,
	CONSTRAINT PRIMARY KEY (posts_id),
	CONSTRAINT fk_posts_userid FOREIGN KEY (posts_userid)
	REFERENCES tb_users(userid)
	#ON DELETE CASCADE
	#ON UPDATE CASCADE
)
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- DROP TABLE tb_posts;

SELECT * FROM tb_posts;

CREATE TABLE tb_post_likes
(
	post_likes_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	post_likes_post_id INT(11) UNSIGNED NOT NULL,
	post_likes_userid INT(11) UNSIGNED NOT NULL,
	CONSTRAINT PRIMARY KEY (post_likes_id),
	CONSTRAINT fk_post_likes_post_id FOREIGN KEY (post_likes_post_id)
	REFERENCES tb_posts(posts_id),
	#ON DELETE CASCADE,
	#ON UPDATE CASCADE,
	CONSTRAINT fk_post_likes_userid FOREIGN KEY (post_likes_userid)
	REFERENCES tb_users(userid)
	#ON DELETE CASCADE
	#ON UPDATE CASCADE
)
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- DROP TABLE tb_post_likes;

SELECT *
FROM tb_post_likes;


CREATE TABLE tb_comments
(
	comments_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	comments_comment TEXT NOT NULL,
	comments_userid INT(11) UNSIGNED NOT NULL,
	comments_posted_at DATETIME NOT NULL,
	comments_post_id INT(11) UNSIGNED NOT NULL,
	CONSTRAINT PRIMARY KEY (comments_id),
	CONSTRAINT fk_comments_userid FOREIGN KEY (comments_userid)
	REFERENCES tb_users(userid),
	#ON DELETE CASCADE,
	#ON UPDATE CASCADE,
	CONSTRAINT fk_comments_post_id FOREIGN KEY (comments_post_id)
	REFERENCES tb_posts(posts_id)
	#ON DELETE CASCADE
	#ON UPDATE CASCADE
)
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- DROP TABLE tb_comments;

SELECT *
FROM tb_comments;


-- PROFILE TABLE
CREATE TABLE tb_profile
(
	profile_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    profile_userid INT(11) UNSIGNED NOT NULL,
    profile_user_fullname VARCHAR(64),
    profile_user_profile_type VARCHAR(10) NOT NULL,
    profile_user_birth_date DATE, -- Changed from DATATIME to VARCHAR(10)
    profile_user_sex CHAR(1),
    profile_user_number VARCHAR(12),
    profile_user_orcid VARCHAR(19),
    profile_user_education_type VARCHAR(12),
    profile_user_city VARCHAR(64),
    profile_user_state_province VARCHAR(64),
    profile_user_country VARCHAR(32),
    profile_user_bio TEXT,
    CONSTRAINT PRIMARY KEY (profile_id),
    CONSTRAINT UNIQUE KEY profile_user_number (profile_user_number),
	CONSTRAINT fk_profile_userid FOREIGN KEY (profile_userid)
	REFERENCES tb_users(userid)
    #ON DELETE CASCADE
	#ON UPDATE CASCADE
) 
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- DROP TABLE tb_profile;

SELECT *
FROM tb_profile;

INSERT INTO tb_profile
VALUES
(DEFAULT, "1", "lili", "Estudante", "2004-02-02", "F", "121212121212", "1234-1234-1234-1234", "Homeschool", "Lililand", "Lilistate", "Greenland", "I'm so beautiful");

-- TABLE ENDORSERS

CREATE TABLE tb_endorsers
(
	endorsers_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	endorsers_userid INT(11) UNSIGNED NOT NULL, # the user's id who is endorsed (the user who is endorsed)
	endorsers_endorserid INT(11) UNSIGNED NOT NULL, # the endorser's id (the user who is endorsing)
	CONSTRAINT PRIMARY KEY (endorsers_id),
	CONSTRAINT fk_endorsers_userid FOREIGN KEY (endorsers_userid)
	REFERENCES tb_users(userid)
	#ON DELETE CASCADE
	#ON UPDATE CASCADE
)
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- DROP TABLE tb_endorsers;

SELECT * FROM tb_endorsers;

SELECT SUM(endorsers_endorserid)
FROM tb_endorsers;

SELECT COUNT(endorsers_endorserid)
FROM tb_endorsers
WHERE endorsers_endorserid = "0";

SELECT COUNT(endorsers_endorserid)
FROM tb_endorsers
WHERE endorsers_userid = "2";

-- RESUME TABLE

CREATE TABLE tb_resume_main
(
	resume_main_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    resume_main_userid INT(11) UNSIGNED NOT NULL,
    resume_main_user_fullname VARCHAR(64),
    resume_main_user_reference_name VARCHAR(64),
    resume_main_user_birth_date DATE, -- Changed from DATATIME to VARCHAR(10)
    resume_main_user_sex CHAR(1),
    resume_main_user_email VARCHAR(64),
    resume_main_user_document_number VARCHAR(11),
    resume_main_user_address TEXT,
    CONSTRAINT PRIMARY KEY (resume_main_id),
    CONSTRAINT UNIQUE KEY uk_resume_main_user_document_number (resume_main_user_document_number),
	CONSTRAINT fk_resume_main_userid FOREIGN KEY (resume_main_userid)
	REFERENCES tb_users(userid)
    #ON DELETE CASCADE
	#ON UPDATE CASCADE
) 
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- DROP TABLE tb_resume_main;

SELECT * FROM tb_resume_main;

DELETE FROM tb_resume_main
WHERE resume_main_id = "6";

CREATE TABLE tb_resume_features
(
	resume_features_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    resume_features_resume_main_id INT(11) UNSIGNED NOT NULL,
    resume_features_userid INT(11) UNSIGNED NOT NULL,
    resume_features_degree_name VARCHAR(64),
    resume_features_degree_start_date DATE, -- Changed from DATATIME to VARCHAR(10)
    resume_features_degree_finish_date DATE,
    resume_features_degree_institution_name VARCHAR(64),
    resume_features_courses_name TEXT,
    -- resume_features_course_name VARCHAR(64),
    -- resume_features_course_start_date DATE, -- Changed from DATATIME to VARCHAR(10)
    -- resume_features_course_finish_date DATE,
    -- resume_features_course_institution_name VARCHAR(64),
    resume_features_job_position_name VARCHAR(64),
    resume_features_job_start_date DATE, -- Changed from DATATIME to VARCHAR(10)
    resume_features_job_finish_date DATE,
    resume_features_job_institution_name VARCHAR(64),
    resume_features_languages VARCHAR(32),
    resume_features_academic_paper_essay_1 TEXT,
    resume_features_academic_paper_essay_link_1 TEXT,
    resume_features_academic_paper_essay_2 TEXT,
    resume_features_academic_paper_essay_link_2 TEXT,
    resume_features_academic_paper_essay_3 TEXT,
    resume_features_academic_paper_essay_link_3 TEXT,
    resume_features_academic_paper_essay_4 TEXT,
    resume_features_academic_paper_essay_link_4 TEXT,
    resume_features_academic_paper_essay_5 TEXT,
    resume_features_academic_paper_essay_link_5 TEXT,
    resume_features_others_relevant_information TEXT,
    CONSTRAINT PRIMARY KEY (resume_features_id),
    CONSTRAINT fk_resume_features_resume_main_id FOREIGN KEY (resume_features_resume_main_id)
	REFERENCES tb_resume_main(resume_main_id),
	CONSTRAINT fk_resume_features_userid FOREIGN KEY (resume_features_userid)
	REFERENCES tb_users(userid)
    #ON DELETE CASCADE
	#ON UPDATE CASCADE
) 
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- DROP TABLE tb_resume_features;

SELECT * FROM tb_resume_features;

CREATE TABLE tb_articles
(
	articles_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    articles_title TEXT NOT NULL,
    articles_body TEXT NOT NULL,
    -- articles_body_first_part TEXT NOT NULL,
    -- articles_body_second_part TEXT,
    -- articles_body_third_part TEXT,
    articles_posted_at DATETIME NOT NULL,
    articles_userid INT(11) UNSIGNED NOT NULL,
    articles_likes INT(11) UNSIGNED NOT NULL,
    articles_topics VARCHAR(200) DEFAULT NULL,
    CONSTRAINT PRIMARY KEY (articles_id),
	CONSTRAINT fk_articles_userid FOREIGN KEY (articles_userid)
	REFERENCES tb_users(userid)
    #ON DELETE CASCADE
	#ON UPDATE CASCADE
) 
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- DROP TABLE tb_articles;

###(TO BE CONTINUED)###