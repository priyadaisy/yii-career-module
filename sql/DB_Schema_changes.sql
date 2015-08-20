-------------------change the type of update on---------ON : 19 Aug 2015-----
ALTER TABLE `job_description` CHANGE `update_on` `update_on` DATETIME NOT NULL ;

-----add created_on field in the Job Description Table ----- ON : 20 Aug 2015------
ALTER TABLE `job_description` ADD `created_on` DATETIME NOT NULL AFTER `status`;

-----add url_resume field in the Job Application table ------  ON : 20 Aug 2015------
ALTER TABLE `job_application` ADD `url_resume` TEXT NOT NULL AFTER `mobile`;