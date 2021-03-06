-- MySQL Script generated by MySQL Workbench
-- 02/28/16 16:51:53
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema p3
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema p3
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `p3` DEFAULT CHARACTER SET utf8 ;
USE `p3` ;

-- -----------------------------------------------------
-- Table `p3`.`wn16_p3_articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `p3`.`wn16_p3_articles` (
  `ArticleID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Title` VARCHAR(2000) NULL DEFAULT '',
  `URL` VARCHAR(1000) NULL DEFAULT NULL,
  `Description` VARCHAR(2000) NULL DEFAULT '',
  `ImageURL` VARCHAR(1000) NULL DEFAULT NULL,
  `OriginalDate` DATETIME NOT NULL DEFAULT ON UPDATE CURRENT_TIMESTAMP,
  `Time_Stamp` DATETIME NOT NULL DEFAULT ON UPDATE CURRENT_TIMESTAMP,
  `subCategoryID` INT(10) UNSIGNED NOT NULL DEFAULT '1',
  `SourceID` INT(10) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`ArticleID`),
  INDEX `subCategoryID` (`subCategoryID` ASC),
  INDEX `SourceID` (`SourceID` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 435
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `p3`.`wn16_p3_categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `p3`.`wn16_p3_categories` (
  `CategoryID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Categoryname` VARCHAR(64) NULL DEFAULT '',
  PRIMARY KEY (`CategoryID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `p3`.`wn16_p3_source`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `p3`.`wn16_p3_source` (
  `SourceID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Sitename` VARCHAR(128) NULL DEFAULT '',
  `URL` VARCHAR(256) NULL DEFAULT NULL,
  PRIMARY KEY (`SourceID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `p3`.`wn16_p3_subcategories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `p3`.`wn16_p3_subcategories` (
  `subCategoryID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subCategoryName` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`subCategoryID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `p3`.`wn16_p3_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `p3`.`wn16_p3_user` (
  `UserID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Username` VARCHAR(16) NULL DEFAULT '',
  `Role` VARCHAR(32) NULL DEFAULT '',
  `Fname` VARCHAR(32) NULL DEFAULT '',
  `Lname` VARCHAR(32) NULL DEFAULT '',
  `Email` VARCHAR(60) NULL DEFAULT '',
  `Datejoined` DATETIME NULL DEFAULT NULL,
  `LastUpdated` TIMESTAMP NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `pwd` VARCHAR(16) NULL DEFAULT NULL,
  PRIMARY KEY (`UserID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;