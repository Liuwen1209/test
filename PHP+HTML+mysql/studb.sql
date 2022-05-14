# 创建数据库
CREATE DATABASE `studb`;

# 使用数据库
USE `studb`;                 

#创建数据表
CREATE TABLE `student` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(32) DEFAULT NULL COMMENT '姓名',
  `sex` CHAR(2) DEFAULT NULL COMMENT '性别',
  `age` VARCHAR(6) DEFAULT NULL COMMENT '年龄',
  `edu` VARCHAR(12) DEFAULT NULL COMMENT '学历',
  `salary` DECIMAL(10,2) DEFAULT NULL COMMENT '工资',
  `bonus` DECIMAL(10,2) DEFAULT NULL COMMENT '奖金',
  `city` VARCHAR(32) DEFAULT NULL COMMENT '籍贯',
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

#插入测试数据

# 清空数据表
TRUNCATE `student`;                                 
