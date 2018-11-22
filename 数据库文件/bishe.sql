-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 10 月 28 日 04:46
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bishe`
--

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `c_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `c_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `t_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `t_name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`c_id`, `c_name`, `t_id`, `t_name`) VALUES
('c_1', 'Linux操作系统应用（15软件）', 't_1', '教师'),
('c_2', 'Linux（15软件）', 't_1', '教师'),
('c_3', 'Linux（15软件）', 't_2', '教师');

-- --------------------------------------------------------

--
-- 表的结构 `liuyan`
--

CREATE TABLE IF NOT EXISTS `liuyan` (
  `t_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `s_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dx` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `fasong` varchar(100) CHARACTER SET utf8 NOT NULL,
  `jieshou` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `man_psw`
--

CREATE TABLE IF NOT EXISTS `man_psw` (
  `m_id` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '管理员账号',
  `m_name` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '管理员姓名',
  `zhanghao` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '账号',
  `psw` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '密码'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='管理员账号密码表';

--
-- 转存表中的数据 `man_psw`
--

INSERT INTO `man_psw` (`m_id`, `m_name`, `zhanghao`, `psw`) VALUES
('m_1', '管理员', 'admin', '123');

-- --------------------------------------------------------

--
-- 表的结构 `man_wenti`
--

CREATE TABLE IF NOT EXISTS `man_wenti` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `s_A` varchar(100) CHARACTER SET utf8 NOT NULL,
  `A_score` varchar(100) CHARACTER SET utf8 NOT NULL,
  `s_B` varchar(100) CHARACTER SET utf8 NOT NULL,
  `B_score` varchar(100) CHARACTER SET utf8 NOT NULL,
  `s_C` varchar(100) CHARACTER SET utf8 NOT NULL,
  `C_score` varchar(100) CHARACTER SET utf8 NOT NULL,
  `s_D` varchar(100) CHARACTER SET utf8 NOT NULL,
  `D_score` varchar(100) CHARACTER SET utf8 NOT NULL,
  `w_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `man_wenti`
--

INSERT INTO `man_wenti` (`q_id`, `q_title`, `s_A`, `A_score`, `s_B`, `B_score`, `s_C`, `C_score`, `s_D`, `D_score`, `w_id`) VALUES
(6, '测试', '测试', '5', '测试', '4', '测试', '2', '测试', '1', 'a07-58-21am'),
(7, '测试', '测试', '5', '测试', '4', '测试', '2', '测试', '1', '07-58-21am'),
(8, '测试', '测试', '5', '测试', '4', '测试', '2', '测试', '1', 'w_1');

-- --------------------------------------------------------

--
-- 表的结构 `stu_psw`
--

CREATE TABLE IF NOT EXISTS `stu_psw` (
  `s_id` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '学生序号',
  `zhanghao` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '账号',
  `psw` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '密码',
  `s_name` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '学生姓名'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='学生账号密码表';

--
-- 转存表中的数据 `stu_psw`
--

INSERT INTO `stu_psw` (`s_id`, `zhanghao`, `psw`, `s_name`) VALUES
('s_1', 'student', '123', '学生');

-- --------------------------------------------------------

--
-- 表的结构 `tea_psw`
--

CREATE TABLE IF NOT EXISTS `tea_psw` (
  `t_id` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '教师序号',
  `t_name` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '教师姓名',
  `zhanghao` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '账号',
  `psw` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '密码'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='教师账号密码';

--
-- 转存表中的数据 `tea_psw`
--

INSERT INTO `tea_psw` (`t_id`, `t_name`, `zhanghao`, `psw`) VALUES
('t_1', '教师', 'teacher', '123'),
('t_2', '教师2', 'teacher2', '123');

-- --------------------------------------------------------

--
-- 表的结构 `wenjuan`
--

CREATE TABLE IF NOT EXISTS `wenjuan` (
  `w_id` varchar(100) NOT NULL,
  `w_title` varchar(100) NOT NULL,
  `w_score` int(100) NOT NULL,
  `day_creat` date NOT NULL,
  `t_id` varchar(100) NOT NULL,
  `day_finish` date NOT NULL,
  `c_id` varchar(100) NOT NULL,
  PRIMARY KEY (`w_id`),
  UNIQUE KEY `c_id` (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wenjuan`
--

INSERT INTO `wenjuan` (`w_id`, `w_title`, `w_score`, `day_creat`, `t_id`, `day_finish`, `c_id`) VALUES
('w_1', '2018期中问卷', 0, '2018-10-10', 't_1', '2018-10-24', 'c_1'),
('w_2', '2018期中问卷', 0, '2018-10-28', 't_1', '2018-10-31', 'c_2'),
('w_3', '2018期中问卷', 0, '2018-10-17', 't_2', '2018-10-31', 'c_3');

-- --------------------------------------------------------

--
-- 表的结构 `wenti`
--

CREATE TABLE IF NOT EXISTS `wenti` (
  `q_id` int(100) NOT NULL AUTO_INCREMENT,
  `q_title` varchar(100) NOT NULL,
  `w_id` varchar(100) NOT NULL,
  `s_A` varchar(100) NOT NULL,
  `A_score` int(100) NOT NULL,
  `s_B` varchar(100) NOT NULL,
  `B_score` int(100) NOT NULL,
  `s_C` varchar(100) NOT NULL,
  `C_score` int(100) NOT NULL,
  `s_D` varchar(100) NOT NULL,
  `D_score` int(100) NOT NULL,
  `t_id` varchar(100) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `wenti`
--

INSERT INTO `wenti` (`q_id`, `q_title`, `w_id`, `s_A`, `A_score`, `s_B`, `B_score`, `s_C`, `C_score`, `s_D`, `D_score`, `t_id`) VALUES
(10, '测试', 'w_1', '测试', 5, '测试', 4, '测试', 2, '测试', 1, 't_1'),
(11, '测试', 'w_1', '测试', 5, '测试', 4, '测试', 2, '测试', 1, 't_1'),
(13, '测试', 'w_1', '测试', 5, '测试', 4, '测试', 2, '测试', 1, 't_1'),
(15, '测试', 'w_1', '测试', 5, '测试', 4, '测试', 2, '测试', 1, 't_1');

-- --------------------------------------------------------

--
-- 表的结构 `xiaoxi`
--

CREATE TABLE IF NOT EXISTS `xiaoxi` (
  `x_id` int(11) NOT NULL AUTO_INCREMENT,
  `x_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dx` varchar(1000) CHARACTER SET utf32 NOT NULL,
  `x_date` date NOT NULL,
  `x_type` varchar(100) CHARACTER SET utf8 NOT NULL,
  `m_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`x_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `xiaoxi`
--

INSERT INTO `xiaoxi` (`x_id`, `x_title`, `dx`, `x_date`, `x_type`, `m_id`) VALUES
(1, '测试', '测试', '2018-10-09', 'teacher', 'm_1'),
(2, '测试', '测试', '2018-10-25', 'teacher', 'm_1'),
(3, '测试', '测试', '2018-10-25', 'student', 'm_1'),
(5, '测试', '测试', '2018-10-25', 'teacher', 'm_1'),
(6, '测试', '测试', '2018-10-25', 'teacher', 'm_1'),
(7, '测试', '测试', '2018-10-25', 'teacher', 'm_1'),
(8, '测试', '测试', '2018-10-25', 'teacher', 'm_1'),
(9, '测试', '测试', '2018-10-25', 'teacher', 'm_1'),
(10, '测试', '测试', '2018-10-25', 'teacher', 'm_1'),
(11, '测试', '测试', '2018-10-25', 'teacher', 'm_1'),
(12, '测试', '测试', '2018-10-25', 'teacher', 'm_1'),
(13, '测试', '测试', '2018-10-25', 'teacher', 'm_1'),
(14, '测试', '测试', '2018-10-25', 'all', 'm_1');

-- --------------------------------------------------------

--
-- 表的结构 `xsrotb`
--

CREATE TABLE IF NOT EXISTS `xsrotb` (
  `s_id` varchar(100) NOT NULL,
  `t_id` varchar(100) NOT NULL,
  `c_id` varchar(100) NOT NULL,
  `score` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `xsrotb`
--

INSERT INTO `xsrotb` (`s_id`, `t_id`, `c_id`, `score`) VALUES
('s_1', 't_1', 'c_1', '15'),
('s_1', 't_1', 'c_2', ''),
('s_1', 't_2', 'c_3', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
