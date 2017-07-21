DROP DATABASE IF EXISTS antglobal;

CREATE DATABASE IF NOT EXISTS antglobal DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
USE antglobal;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET TIME_ZONE = "+07:00";
SET STORAGE_ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS users (
  user_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  user_name VARCHAR (50) NOT NULL,
  user_fullname VARCHAR (100) NOT NULL,
  user_passcode TEXT NOT NULL,
  user_access_level INT NOT NULL DEFAULT 0 COMMENT '1 for Root Admin, 0 for Admin',
  user_status INT NOT NULL DEFAULT 0 COMMENT '0 for Inactive, 1 for Active',
  user_created_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  user_last_changed_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (user_id),
  UNIQUE (user_name),
  INDEX (user_name)
);
-- 
-- CREATE TABLE IF NOT EXISTS checkpoints ();
--
-- CREATE TABLE IF NOT EXISTS subcheckpoints ();
--
-- CREATE TABLE IF NOT EXISTS servicegroups ();
--
-- CREATE TABLE IF NOT EXISTS tasklists ();
--
-- CREATE TABLE IF NOT EXISTS agents ();
--
-- CREATE TABLE IF NOT EXISTS customers ();
--
-- CREATE TABLE IF NOT EXISTS shipments ();
