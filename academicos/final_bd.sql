-- MySQL Script generated by MySQL Workbench
-- Qua 22 Mar 2017 01:13:17 BRT
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema academicos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema academicos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `academicos` DEFAULT CHARACTER SET utf8 ;
USE `academicos` ;

-- -----------------------------------------------------
-- Table `academicos`.`class`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academicos`.`class` (
  `idclass` INT(11) NOT NULL AUTO_INCREMENT,
  `serie` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `ensino` VARCHAR(40) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  PRIMARY KEY (`idclass`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `academicos`.`discipline`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academicos`.`discipline` (
  `iddiscipline` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `teacher` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  PRIMARY KEY (`iddiscipline`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `academicos`.`class_has_discipline`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academicos`.`class_has_discipline` (
  `class_idclass` INT(11) NOT NULL,
  `discipline_iddiscipline` INT(11) NOT NULL,
  PRIMARY KEY (`class_idclass`, `discipline_iddiscipline`),
  INDEX `fk_class_has_discipline_discipline1_idx` (`discipline_iddiscipline` ASC),
  INDEX `fk_class_has_discipline_class1_idx` (`class_idclass` ASC),
  CONSTRAINT `fk_class_has_discipline_class1`
    FOREIGN KEY (`class_idclass`)
    REFERENCES `academicos`.`class` (`idclass`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_class_has_discipline_discipline1`
    FOREIGN KEY (`discipline_iddiscipline`)
    REFERENCES `academicos`.`discipline` (`iddiscipline`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `academicos`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academicos`.`user` (
  `iduser` INT(11) NOT NULL AUTO_INCREMENT,
  `matricula` VARCHAR(5) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `name` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `sobrenome` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `cpf` CHAR(11) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `telefone` CHAR(12) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `perfil` CHAR(2) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `status` INT(11) NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `matricula_UNIQUE` (`matricula` ASC),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `academicos`.`frequencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academicos`.`frequencia` (
  `idfrequencia` INT(11) NOT NULL AUTO_INCREMENT,
  `falta` CHAR(2) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `data` DATE NOT NULL,
  `justificativa` VARCHAR(140) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `user_iduser` INT(11) NOT NULL,
  `discipline_iddiscipline` INT(11) NOT NULL,
  PRIMARY KEY (`idfrequencia`, `user_iduser`, `discipline_iddiscipline`),
  INDEX `fk_frequencia_user1_idx` (`user_iduser` ASC),
  INDEX `fk_frequencia_discipline1_idx` (`discipline_iddiscipline` ASC),
  CONSTRAINT `fk_frequencia_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `academicos`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_frequencia_discipline1`
    FOREIGN KEY (`discipline_iddiscipline`)
    REFERENCES `academicos`.`discipline` (`iddiscipline`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `academicos`.`notas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academicos`.`notas` (
  `idnotas` INT(11) NOT NULL AUTO_INCREMENT,
  `nota` FLOAT NULL DEFAULT NULL,
  `unidade` CHAR(10) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `discipline_iddiscipline` INT(11) NOT NULL,
  `user_iduser` INT(11) NOT NULL,
  PRIMARY KEY (`idnotas`, `discipline_iddiscipline`, `user_iduser`),
  INDEX `fk_notas_discipline1_idx` (`discipline_iddiscipline` ASC),
  INDEX `fk_notas_user1_idx` (`user_iduser` ASC),
  CONSTRAINT `fk_notas_discipline1`
    FOREIGN KEY (`discipline_iddiscipline`)
    REFERENCES `academicos`.`discipline` (`iddiscipline`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_notas_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `academicos`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `academicos`.`students`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academicos`.`students` (
  `idstudents` INT NOT NULL AUTO_INCREMENT,
  `user_iduser` INT(11) NOT NULL,
  `class_idclass` INT(11) NOT NULL,
  PRIMARY KEY (`idstudents`, `user_iduser`, `class_idclass`),
  UNIQUE INDEX `idstudents_UNIQUE` (`idstudents` ASC),
  INDEX `fk_students_user1_idx` (`user_iduser` ASC),
  INDEX `fk_students_class1_idx` (`class_idclass` ASC),
  CONSTRAINT `fk_students_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `academicos`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_students_class1`
    FOREIGN KEY (`class_idclass`)
    REFERENCES `academicos`.`class` (`idclass`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academicos`.`user_has_students`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academicos`.`user_has_students` (
  `user_iduser` INT(11) NOT NULL,
  `students_idstudents` INT NOT NULL,
  PRIMARY KEY (`user_iduser`, `students_idstudents`),
  INDEX `fk_user_has_students_students1_idx` (`students_idstudents` ASC),
  INDEX `fk_user_has_students_user1_idx` (`user_iduser` ASC),
  CONSTRAINT `fk_user_has_students_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `academicos`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_students_students1`
    FOREIGN KEY (`students_idstudents`)
    REFERENCES `academicos`.`students` (`idstudents`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `academicos`.`mensage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academicos`.`mensage` (
  `idmensage` INT NOT NULL AUTO_INCREMENT,
  `idfrom` INT NOT NULL,
  `description` VARCHAR(140) NOT NULL,
  `idreceiver` INT NOT NULL,
  `data` DATETIME NOT NULL,
  PRIMARY KEY (`idmensage`),
  UNIQUE INDEX `idmensage_UNIQUE` (`idmensage` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academicos`.`feedback`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academicos`.`feedback` (
  `idfeedback` INT NOT NULL AUTO_INCREMENT,
  `students_idstudents` INT NOT NULL,
  `students_user_iduser` INT(11) NOT NULL,
  `students_class_idclass` INT(11) NOT NULL,
  `discipline_iddiscipline` INT(11) NOT NULL,
  PRIMARY KEY (`idfeedback`, `students_idstudents`, `students_user_iduser`, `students_class_idclass`, `discipline_iddiscipline`),
  UNIQUE INDEX `idfeedback_UNIQUE` (`idfeedback` ASC),
  INDEX `fk_feedback_students1_idx` (`students_idstudents` ASC, `students_user_iduser` ASC, `students_class_idclass` ASC),
  INDEX `fk_feedback_discipline1_idx` (`discipline_iddiscipline` ASC),
  CONSTRAINT `fk_feedback_students1`
    FOREIGN KEY (`students_idstudents` , `students_user_iduser` , `students_class_idclass`)
    REFERENCES `academicos`.`students` (`idstudents` , `user_iduser` , `class_idclass`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_feedback_discipline1`
    FOREIGN KEY (`discipline_iddiscipline`)
    REFERENCES `academicos`.`discipline` (`iddiscipline`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
