DROP DATABASE IF EXISTS `userforP`;
CREATE DATABASE IF NOT EXISTS `userforP` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `userforP`;
--   表 userforP.userforP 结构
DROP TABLE IF EXISTS `userforP`;
CREATE TABLE IF NOT EXISTS `userforP` (
  `Uname` INT(12) NOT NULL COMMENT '用户名',
  `Upassword` INT(11) NOT NULL COMMENT '密码',
  `Ulogtimes` INT(10) UNSIGNED ZEROFILL NOT NULL COMMENT '密码错误次数',
  PRIMARY KEY (`Uname`,`Upassword`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;
