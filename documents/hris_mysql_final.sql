CREATE TABLE `employee` (
	`employee_id` INT(12) NOT NULL AUTO_INCREMENT,
	`employee_lastName` varchar(45) NOT NULL,
	`employee_firstName` varchar(45) NOT NULL,
	`employee_middleName` varchar(45),
	`employee_dob` DATE NOT NULL,
	`employee_address` varchar(255),
	`employee_email` varchar(45),
	`employee_attachment` TEXT,
	`employee_photo` TEXT,
	`employee_TIN` varchar(45),
	`employee_SSS` varchar(45),
	`employee_account` INT(12) NOT NULL,
	`employee_gender` INT(12),
	`employee_civilStatus` INT(12),
	`employee_religion` INT(12),
	`employee_status` INT(12) NOT NULL,
	`employee_employment` INT(12) NOT NULL,
	`employee_department` INT(12) NOT NULL,
	`employee_title` INT(12) NOT NULL,
	`employee_location` INT(12) NOT NULL,
	PRIMARY KEY (`employee_id`)
);

CREATE TABLE `account` (
	`account_id` INT(12) NOT NULL AUTO_INCREMENT,
	`account_username` varchar(45) NOT NULL UNIQUE,
	`account_password` TEXT NOT NULL,
	`account_type` INT(12) NOT NULL,
	PRIMARY KEY (`account_id`)
);

CREATE TABLE `employee_gender` (
	`gender_id` INT(12) NOT NULL AUTO_INCREMENT,
	`gender_name` varchar(45) NOT NULL,
	`gender_description` varchar(255),
	PRIMARY KEY (`gender_id`)
);

CREATE TABLE `employee_religion` (
	`religion_id` INT(12) NOT NULL AUTO_INCREMENT,
	`religion_name` varchar(45) NOT NULL,
	`religion_description` varchar(255),
	PRIMARY KEY (`religion_id`)
);

CREATE TABLE `employee_civilStatus` (
	`civilStatus_id` INT(12) NOT NULL AUTO_INCREMENT,
	`civilStatus_name` varchar(45) NOT NULL,
	`civilStatus_description` varchar(255),
	PRIMARY KEY (`civilStatus_id`)
);

CREATE TABLE `employee_status` (
	`status_id` INT(12) NOT NULL AUTO_INCREMENT,
	`status_name` varchar(45) NOT NULL,
	`status_description` varchar(255),
	PRIMARY KEY (`status_id`)
);

CREATE TABLE `employee_employment` (
	`employment_id` INT(12) NOT NULL AUTO_INCREMENT,
	`employment_name` varchar(45) NOT NULL,
	`employment_description` varchar(255),
	PRIMARY KEY (`employment_id`)
);

CREATE TABLE `employee_department` (
	`department_id` INT(12) NOT NULL AUTO_INCREMENT,
	`department_name` varchar(45) NOT NULL,
	`department_description` varchar(255),
	PRIMARY KEY (`department_id`)
);

CREATE TABLE `employee_title` (
	`title_id` INT(12) NOT NULL AUTO_INCREMENT,
	`title_name` varchar(45) NOT NULL,
	`title_description` varchar(255),
	PRIMARY KEY (`title_id`)
);

CREATE TABLE `post` (
	`post_id` INT(12) NOT NULL AUTO_INCREMENT,
	`post_title` varchar(45) NOT NULL,
	`post_when_start` DATE,
	`post_when_end` DATE,
	`post_body` TEXT,
	`post_author` INT(12) NOT NULL,
	`post_type` INT(12) NOT NULL,
	`post_dateCreated` TIMESTAMP NOT NULL,
	`post_dateUpdated` TIMESTAMP,
	`post_department` INT(12),
	`post_title` INT(12),
	PRIMARY KEY (`post_id`)
);

CREATE TABLE `post_type` (
	`type_id` INT(12) NOT NULL AUTO_INCREMENT,
	`type_name` varchar(45) NOT NULL,
	`type_description` varchar(255) NOT NULL,
	PRIMARY KEY (`type_id`)
);

CREATE TABLE `employee_load` (
	`load_id` INT(12) NOT NULL AUTO_INCREMENT,
	`load_subject` INT(12) NOT NULL,
	`load_employee` INT(12) NOT NULL,
	`load_timeStart` TIME NOT NULL,
	`load_timeEnd` TIME NOT NULL,
	`load_dayCode` varchar(45) NOT NULL,
	PRIMARY KEY (`load_id`)
);

CREATE TABLE `subject` (
	`subject_id` INT(12) NOT NULL AUTO_INCREMENT,
	`subject_name` varchar(45) NOT NULL,
	`subject_code` varchar(45) NOT NULL UNIQUE,
	`subject_description` varchar(255),
	`subject_unit` INT(12) NOT NULL,
	PRIMARY KEY (`subject_id`)
);

CREATE TABLE `load_pin` (
	`pin_id` INT(12) NOT NULL AUTO_INCREMENT,
	`pin_code` INT(6) NOT NULL UNIQUE,
	`pin_load` INT(12) NOT NULL,
	`pin_expiration` DATETIME NOT NULL,
	PRIMARY KEY (`pin_id`)
);

CREATE TABLE `session` (
	`session_id` INT(12) NOT NULL AUTO_INCREMENT,
	`session_pin` INT(12) NOT NULL,
	`session_score` INT(12),
	`session_dateCreated` TIMESTAMP NOT NULL,
	PRIMARY KEY (`session_id`)
);

CREATE TABLE `session_sheet` (
	`sheet_id` INT(12) NOT NULL AUTO_INCREMENT,
	`sheet_session` INT(12) NOT NULL,
	`sheet_question` INT(12) NOT NULL,
	`sheet_answer` varchar(255) NOT NULL,
	PRIMARY KEY (`sheet_id`)
);

CREATE TABLE `question` (
	`question_id` INT(12) NOT NULL AUTO_INCREMENT,
	`question_question` varchar(255) NOT NULL,
	`question_subcategory` INT(12) NOT NULL,
	PRIMARY KEY (`question_id`)
);

CREATE TABLE `question_subcategory` (
	`subcategory_id` INT(12) NOT NULL AUTO_INCREMENT,
	`subcategory_name` varchar(45) NOT NULL,
	`subcategory_description` varchar(255),
	`subcategory_category` INT(12) NOT NULL,
	PRIMARY KEY (`subcategory_id`)
);

CREATE TABLE `question_category` (
	`category_id` INT(12) NOT NULL AUTO_INCREMENT,
	`category_name` varchar(45) NOT NULL,
	`category_description` varchar(255),
	`category_order` varchar(45),
	PRIMARY KEY (`category_id`)
);

CREATE TABLE `employee_location` (
	`location_id` INT(12) NOT NULL AUTO_INCREMENT,
	`location_name` varchar(45) NOT NULL,
	`location_description` varchar(255),
	PRIMARY KEY (`location_id`)
);

CREATE TABLE `rank` (
	`rank_id` INT(12) NOT NULL AUTO_INCREMENT,
	`rank_employee` INT(12) NOT NULL,
	`rank_factor` INT(12) NOT NULL,
	`rank_score` INT(12) NOT NULL,
	`rank_school` varchar(45) NOT NULL,
	`rank_degree` varchar(45) NOT NULL,
	`rank_start` DATE NOT NULL,
	`rank_end` DATE NOT NULL,
	PRIMARY KEY (`rank_id`)
);

CREATE TABLE `rank_category` (
	`category_id` INT(12) NOT NULL AUTO_INCREMENT,
	`category_name` varchar(45) NOT NULL,
	`category_description` varchar(255),
	PRIMARY KEY (`category_id`)
);

CREATE TABLE `rank_subcategory` (
	`subcategory_id` INT(12) NOT NULL AUTO_INCREMENT,
	`subcategory_name` varchar(45) NOT NULL,
	`subcategory_description` varchar(255),
	`subcategory_max` INT(12) NOT NULL,
	`subcategory_category` INT(12) NOT NULL,
	PRIMARY KEY (`subcategory_id`)
);

CREATE TABLE `rank_factor` (
	`factor_id` INT(12) NOT NULL AUTO_INCREMENT,
	`factor_condition` varchar(255) NOT NULL,
	`factor_description` varchar(255),
	`factor_score` INT(12) NOT NULL,
	`factor_subcategory` INT(12) NOT NULL,
	PRIMARY KEY (`factor_id`)
);

CREATE TABLE `document_requirement` (
	`requirment_id` INT(12) NOT NULL AUTO_INCREMENT,
	`requirement_name` varchar(45) NOT NULL,
	`requirement_description` varchar(255),
	PRIMARY KEY (`requirment_id`)
);

CREATE TABLE `employee_document` (
	`document_id` INT(12) NOT NULL AUTO_INCREMENT,
	`document_employee` INT(12) NOT NULL,
	`document_requirement` INT(12) NOT NULL,
	PRIMARY KEY (`document_id`)
);

CREATE TABLE `account_type` (
	`type_id` INT(12) NOT NULL AUTO_INCREMENT,
	`type_name` varchar(45) NOT NULL,
	`type_description` varchar(255),
	PRIMARY KEY (`type_id`)
);

CREATE TABLE `employee_evaluation` (
	`evaluation_id` INT(12) NOT NULL AUTO_INCREMENT,
	`evaluation_employee` INT(12) NOT NULL,
	`evaluation_subject` INT(12) NOT NULL,
	`evaluation_year` DATE NOT NULL,
	`evaluation_semester` INT(12) NOT NULL,
	`evaluation_numberStudents` INT(12) NOT NULL,
	`evaluation_overall` INT NOT NULL,
	PRIMARY KEY (`evaluation_id`)
);

CREATE TABLE `employee_service` (
	`service_id` INT(12) NOT NULL AUTO_INCREMENT,
	`service_employee` INT(12) NOT NULL,
	`service_department` INT(12) NOT NULL,
	`service_dateStart` DATE NOT NULL,
	`service_dateEnd` DATE,
	`service_appointment` varchar(45) NOT NULL,
	`service_salary` INT(12) NOT NULL,
	`service_remarks` varchar(45),
	PRIMARY KEY (`service_id`)
);

CREATE TABLE `evaluation_score` (
	`score_id` INT(12) NOT NULL AUTO_INCREMENT,
	`score_evaluation` INT(12) NOT NULL,
	`score_subcategory` INT(12) NOT NULL,
	`score_score` INT(12) NOT NULL,
	PRIMARY KEY (`score_id`)
);

CREATE TABLE `employee_education` (
	`education_id` INT(12) NOT NULL AUTO_INCREMENT,
	`education_type` INT(12) NOT NULL,
	`education_course` varchar(45) NOT NULL,
	`education_major` varchar(45),
	`education_school` varchar(45) NOT NULL,
	`education_remarks` varchar(45) NOT NULL,
	`education_employee` INT(12) NOT NULL,
	PRIMARY KEY (`education_id`)
);

CREATE TABLE `education_type` (
	`type_id` INT(12) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`type_id`)
);

CREATE TABLE `employee_training` (
	`training_id` INT(12) NOT NULL AUTO_INCREMENT,
	`training_employee` INT(12) NOT NULL,
	`training_date` DATE NOT NULL,
	`training_title` varchar(45) NOT NULL,
	`training_venue` TEXT NOT NULL,
	`training_remarks` TEXT NOT NULL,
	PRIMARY KEY (`training_id`)
);

CREATE TABLE `employee_organization` (
	`organization_id` INT(12) NOT NULL AUTO_INCREMENT,
	`organization_employee` INT(12) NOT NULL,
	`organization_register` DATE NOT NULL,
	`organization_validityStart` DATE NOT NULL,
	`organization_validityEnd` DATE,
	`organization_name` varchar(45) NOT NULL,
	`organization_place` TEXT NOT NULL,
	PRIMARY KEY (`organization_id`)
);

ALTER TABLE `employee` ADD CONSTRAINT `employee_fk0` FOREIGN KEY (`employee_account`) REFERENCES `account`(`account_id`);

ALTER TABLE `employee` ADD CONSTRAINT `employee_fk1` FOREIGN KEY (`employee_gender`) REFERENCES `employee_gender`(`gender_id`);

ALTER TABLE `employee` ADD CONSTRAINT `employee_fk2` FOREIGN KEY (`employee_civilStatus`) REFERENCES `employee_civilStatus`(`civilStatus_id`);

ALTER TABLE `employee` ADD CONSTRAINT `employee_fk3` FOREIGN KEY (`employee_religion`) REFERENCES `employee_religion`(`religion_id`);

ALTER TABLE `employee` ADD CONSTRAINT `employee_fk4` FOREIGN KEY (`employee_status`) REFERENCES `employee_status`(`status_id`);

ALTER TABLE `employee` ADD CONSTRAINT `employee_fk5` FOREIGN KEY (`employee_employment`) REFERENCES `employee_employment`(`employment_id`);

ALTER TABLE `employee` ADD CONSTRAINT `employee_fk6` FOREIGN KEY (`employee_department`) REFERENCES `employee_department`(`department_id`);

ALTER TABLE `employee` ADD CONSTRAINT `employee_fk7` FOREIGN KEY (`employee_title`) REFERENCES `employee_title`(`title_id`);

ALTER TABLE `employee` ADD CONSTRAINT `employee_fk8` FOREIGN KEY (`employee_location`) REFERENCES `employee_location`(`location_id`);

ALTER TABLE `account` ADD CONSTRAINT `account_fk0` FOREIGN KEY (`account_type`) REFERENCES `account_type`(`type_id`);

ALTER TABLE `post` ADD CONSTRAINT `post_fk0` FOREIGN KEY (`post_author`) REFERENCES `account`(`account_id`);

ALTER TABLE `post` ADD CONSTRAINT `post_fk1` FOREIGN KEY (`post_type`) REFERENCES `post_type`(`type_id`);

ALTER TABLE `post` ADD CONSTRAINT `post_fk2` FOREIGN KEY (`post_department`) REFERENCES `employee_department`(`department_id`);

ALTER TABLE `post` ADD CONSTRAINT `post_fk3` FOREIGN KEY (`post_title`) REFERENCES `employee_title`(`title_id`);

ALTER TABLE `employee_load` ADD CONSTRAINT `employee_load_fk0` FOREIGN KEY (`load_subject`) REFERENCES `subject`(`subject_id`);

ALTER TABLE `employee_load` ADD CONSTRAINT `employee_load_fk1` FOREIGN KEY (`load_employee`) REFERENCES `employee`(`employee_id`);

ALTER TABLE `load_pin` ADD CONSTRAINT `load_pin_fk0` FOREIGN KEY (`pin_load`) REFERENCES `employee_load`(`load_id`);

ALTER TABLE `session` ADD CONSTRAINT `session_fk0` FOREIGN KEY (`session_pin`) REFERENCES `load_pin`(`pin_id`);

ALTER TABLE `session_sheet` ADD CONSTRAINT `session_sheet_fk0` FOREIGN KEY (`sheet_session`) REFERENCES `session`(`session_id`);

ALTER TABLE `session_sheet` ADD CONSTRAINT `session_sheet_fk1` FOREIGN KEY (`sheet_question`) REFERENCES `question`(`question_id`);

ALTER TABLE `question` ADD CONSTRAINT `question_fk0` FOREIGN KEY (`question_subcategory`) REFERENCES `question_subcategory`(`subcategory_id`);

ALTER TABLE `question_subcategory` ADD CONSTRAINT `question_subcategory_fk0` FOREIGN KEY (`subcategory_category`) REFERENCES `question_category`(`category_id`);

ALTER TABLE `rank` ADD CONSTRAINT `rank_fk0` FOREIGN KEY (`rank_employee`) REFERENCES `employee`(`employee_id`);

ALTER TABLE `rank` ADD CONSTRAINT `rank_fk1` FOREIGN KEY (`rank_factor`) REFERENCES `rank_factor`(`factor_id`);

ALTER TABLE `rank_subcategory` ADD CONSTRAINT `rank_subcategory_fk0` FOREIGN KEY (`subcategory_category`) REFERENCES `rank_category`(`category_id`);

ALTER TABLE `rank_factor` ADD CONSTRAINT `rank_factor_fk0` FOREIGN KEY (`factor_subcategory`) REFERENCES `rank_subcategory`(`subcategory_id`);

ALTER TABLE `employee_document` ADD CONSTRAINT `employee_document_fk0` FOREIGN KEY (`document_employee`) REFERENCES `employee`(`employee_id`);

ALTER TABLE `employee_document` ADD CONSTRAINT `employee_document_fk1` FOREIGN KEY (`document_requirement`) REFERENCES `document_requirement`(`requirment_id`);

ALTER TABLE `employee_evaluation` ADD CONSTRAINT `employee_evaluation_fk0` FOREIGN KEY (`evaluation_employee`) REFERENCES `employee`(`employee_id`);

ALTER TABLE `employee_evaluation` ADD CONSTRAINT `employee_evaluation_fk1` FOREIGN KEY (`evaluation_subject`) REFERENCES `subject`(`subject_id`);

ALTER TABLE `employee_service` ADD CONSTRAINT `employee_service_fk0` FOREIGN KEY (`service_employee`) REFERENCES `employee`(`employee_id`);

ALTER TABLE `employee_service` ADD CONSTRAINT `employee_service_fk1` FOREIGN KEY (`service_department`) REFERENCES `employee_department`(`department_id`);

ALTER TABLE `evaluation_score` ADD CONSTRAINT `evaluation_score_fk0` FOREIGN KEY (`score_evaluation`) REFERENCES `employee_evaluation`(`evaluation_id`);

ALTER TABLE `evaluation_score` ADD CONSTRAINT `evaluation_score_fk1` FOREIGN KEY (`score_subcategory`) REFERENCES `question_subcategory`(`subcategory_id`);

ALTER TABLE `employee_education` ADD CONSTRAINT `employee_education_fk0` FOREIGN KEY (`education_type`) REFERENCES `education_type`(`type_id`);

ALTER TABLE `employee_education` ADD CONSTRAINT `employee_education_fk1` FOREIGN KEY (`education_employee`) REFERENCES `employee`(`employee_id`);

ALTER TABLE `employee_training` ADD CONSTRAINT `employee_training_fk0` FOREIGN KEY (`training_employee`) REFERENCES `employee`(`employee_id`);

ALTER TABLE `employee_organization` ADD CONSTRAINT `employee_organization_fk0` FOREIGN KEY (`organization_employee`) REFERENCES `employee`(`employee_id`);

