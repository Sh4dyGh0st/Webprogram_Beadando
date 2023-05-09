CREATE DATABASE `email`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `email`;

CREATE TABLE `email` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `felhasznalo` varchar(100) NOT NULL default '',
  `email` varchar(45) NOT NULL default '',
  `szoveg` varchar(1000) NOT NULL default '',
  `date` varchar(45) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `email` (`id`,`felhasznalo`,`email`,`szoveg`,`date`) VALUES 