-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 10 月 24 日 04:22
-- 服务器版本: 5.0.90
-- PHP 版本: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `roomyy`
--

-- --------------------------------------------------------

--
-- 表的结构 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL auto_increment,
  `submitDate` varchar(11) NOT NULL COMMENT '预约提交时间',
  `useDate` varchar(11) NOT NULL,
  `startTime` varchar(5) NOT NULL COMMENT '预约使用开始时间',
  `endTime` varchar(5) NOT NULL,
  `exDevice` varchar(20) NOT NULL default '无',
  `useWay` text NOT NULL COMMENT '用途',
  `applyer` varchar(20) NOT NULL COMMENT '申请者',
  `phone` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `state` int(11) NOT NULL COMMENT '审核状态 0代审1通过一级 2正式通过',
  `room` varchar(20) NOT NULL COMMENT '教室名称',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='预约停止使用时间' AUTO_INCREMENT=73 ;

--
-- 转存表中的数据 `order`
--

INSERT INTO `order` (`id`, `submitDate`, `useDate`, `startTime`, `endTime`, `exDevice`, `useWay`, `applyer`, `phone`, `department`, `state`, `room`) VALUES
(1, '2012-08-18', '2012-8-31', '08:45', '12:00', '无', '开会', '吴晓军', '123456', '工程与技术系', 2, '一号楼报告厅'),
(2, '2012-08-18', '', '08:00', '22:00', '无', '', '王学峰', '15257587905', '信息与电子系', -1, '一号楼报告厅'),
(5, '2012-09-06', '2012-9-7', '09:00', '21:00', '无', '测试', '信息与电子系', '0', '信息与电子系', -2, '一号楼报告厅'),
(6, '2012-09-06', '2012-9-14', '08:00', '12:00', '无', '新生会议', '人文科学系', '0', '人文科学系', 2, '一号楼报告厅'),
(7, '2012-09-06', '2012-9-15', '17:00', '21:00', '无', '新生会议', '生命科学系', '0', '生命科学系', 2, '一号楼报告厅'),
(8, '2012-09-06', '2012-9-16', '14:00', '17:00', '无', '新生会议', '生命科学系', '0', '生命科学系', 2, '一号楼报告厅'),
(9, '2012-09-06', '2012-9-15', '14:00', '17:00', '无', '新生会议', '人文科学系', '0', '人文科学系', 2, '一号楼报告厅'),
(10, '2012-09-06', '2012-9-17', '18:00', '21:00', '无', '招新会', '团委', '0', '团委', 2, '一号楼报告厅'),
(11, '2012-09-06', '2012-9-19', '17:00', '21:00', '无', '讲座', '团委', '0', '团委', 2, '一号楼报告厅'),
(12, '2012-09-06', '2012-9-20', '17:00', '21:00', '无', '讲座', '图书馆', '0', '图书馆', 2, '一号楼报告厅'),
(13, '2012-09-06', '2012-9-24', '17:00', '21:00', '无', '讲座', '招就处', '0', '招就处', 2, '一号楼报告厅'),
(14, '2012-09-06', '2012-9-16', '08:00', '12:00', '无', '钱贤民教授讲座', '信息与电子系', '0', '信息与电子系', 2, '一号楼报告厅'),
(15, '2012-09-07', '2012-9-14', '14:00', '17:00', '无', '经管学院使用', '金筱', '669668', '后勤科', 2, '一号楼报告厅'),
(23, '2012-09-07', '2012-9-14', '19:00', '21:00', '无', '新生团学讲座', '信息与电子系', '0', '信息与电子系', 2, '一号楼报告厅'),
(17, '2012-09-07', '2012-9-15', '08:00', '12:00', '无', '经管学院使用', '金筱', '669668', '后勤科', 2, '一号楼报告厅'),
(19, '2012-09-07', '2012-9-16', '17:00', '21:00', '无', '安全讲座', '外语系', '0', '外语系', 2, '一号楼报告厅'),
(20, '2012-09-07', '2012-10-12', '08:00', '21:00', '无', '新生见面会', '团委', '0', '团委', 2, '一号楼报告厅'),
(21, '2012-09-07', '2012-9-19', '15:30', '17:00', '无', '始业教育', '服装与艺术设计系', '0', '服装与艺术设计系', 2, '一号楼报告厅'),
(22, '2012-09-07', '2012-9-18', '18:00', '21:00', '多媒体', '始业教育', '服装与艺术设计系', '0', '服装与艺术设计系', 2, '一号楼报告厅'),
(24, '2012-09-07', '2012-9-17', '15:30', '17:30', '电脑', '新生始业典礼', '外语系', '0', '外语系', 2, '一号楼报告厅'),
(25, '2012-09-07', '2012-9-25', '19:00', '21:00', '电脑', '新生资料检索培训', '外语系', '0', '外语系', 2, '一号楼报告厅'),
(26, '2012-09-08', '2012-9-18', '14:00', '18:00', '电脑多媒体', '新生安全教育', '经济与管理系', '0', '经济与管理系', 2, '一号楼报告厅'),
(27, '2012-09-08', '2012-9-20', '14:00', '17:00', '电脑多媒体', '新生安全教育', '经济与管理系', '0', '经济与管理系', 2, '一号楼报告厅'),
(28, '2012-09-10', '2012-10-10', '18:00', '20:00', '投影仪 视频播放', '始业教育', '生命科学系', '0', '生命科学系', 2, '一号楼报告厅'),
(29, '2012-09-10', '2012-9-26', '18:00', '21:30', '网线 笔记本 投影仪', '图书馆实务指导', '生命科学系', '0', '生命科学系', 2, '一号楼报告厅'),
(30, '2012-09-20', '2012-9-22', '08:00', '22:00', '电脑、音响', '金鸡百花电影节诗歌朗诵彩排', '经济与管理系', '0', '经济与管理系', 2, '一号楼报告厅'),
(31, '2012-09-20', '2012-9-23', '08:00', '22:00', '电脑、音响', '金鸡百花电影节诗歌朗诵节目彩排', '经济与管理系', '0', '经济与管理系', 2, '一号楼报告厅'),
(32, '2012-09-21', '2012-9-27', '17:00', '22:00', '无', '刘鹏程老师讲座', '信息与电子系', '0', '信息与电子系', 2, '一号楼报告厅'),
(33, '2012-09-24', '2012-9-25', '08:00', '11:30', '无', '金鸡百花奖节目彩排', '经济与管理系', '0', '经济与管理系', 2, '一号楼报告厅'),
(34, '2012-09-26', '2012-9-28', '18:00', '21:00', '无', '新生大会', '工程与技术系', '0', '工程与技术系', 2, '一号楼报告厅'),
(35, '2012-09-28', '2012-10-11', '18:00', '20:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(36, '2012-09-28', '2012-10-15', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(37, '2012-09-28', '2012-10-19', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(38, '2012-09-28', '2012-10-22', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(39, '2012-09-28', '2012-10-26', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(40, '2012-09-28', '2012-10-29', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(41, '2012-09-28', '2012-11-2', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(42, '2012-09-28', '2012-11-5', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(43, '2012-09-28', '2012-11-9', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(44, '2012-09-28', '2012-11-12', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(45, '2012-09-28', '2012-10-14', '14:00', '17:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(46, '2012-09-28', '2012-10-16', '18:45', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(47, '2012-09-28', '2012-10-21', '14:00', '17:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(48, '2012-09-28', '2012-10-23', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(49, '2012-09-28', '2012-10-28', '14:00', '17:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(70, '2012-09-29', '2012-10-18', '15:00', '22:00', '电脑、桌椅等', '人文科学系新生才艺大赛', '人文科学系', '0', '人文科学系', 1, '一号楼报告厅'),
(51, '2012-09-28', '2012-10-30', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(52, '2012-09-28', '2012-11-4', '14:00', '17:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(53, '2012-09-28', '2012-11-6', '18:45', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(54, '2012-09-28', '2012-11-11', '14:00', '17:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(55, '2012-09-28', '2012-11-13', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(56, '2012-09-28', '2012-10-25', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(57, '2012-09-28', '2012-10-28', '08:00', '12:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(58, '2012-09-28', '2012-11-1', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(59, '2012-09-28', '2012-11-4', '08:00', '12:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(60, '2012-09-28', '2012-11-8', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(61, '2012-09-28', '2012-11-11', '08:00', '12:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(62, '2012-09-28', '2012-11-15', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(63, '2012-09-28', '2012-11-18', '08:00', '12:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(64, '2012-09-28', '2012-11-22', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(65, '2012-09-28', '2012-11-25', '08:00', '12:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(66, '2012-09-28', '2012-12-2', '08:00', '12:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(67, '2012-09-28', '2012-12-6', '18:00', '22:00', '投影仪、电脑', '党课', '党委办公室', '0', '党委办公室', 2, '一号楼报告厅'),
(71, '2012-09-29', '2012-11-11', '19:00', '22:00', '无', '无', '信息与电子系', '0', '信息与电子系', 2, '一号楼报告厅'),
(72, '2012-09-30', '2012-10-11', '10:00', '12:00', '无', '无', '王学峰', '15257587905', '信息与电子系', 2, '一号楼报告厅');

-- --------------------------------------------------------

--
-- 表的结构 `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL auto_increment,
  `roomName` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `room`
--

INSERT INTO `room` (`id`, `roomName`) VALUES
(1, '一号楼报告厅'),
(9, '5幢103'),
(6, '5幢102');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(10) NOT NULL COMMENT '姓名',
  `pass` varchar(32) NOT NULL,
  `type` int(1) NOT NULL,
  `phone` varchar(20) NOT NULL default '0',
  `department` varchar(10) NOT NULL,
  `logTime` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `type`, `phone`, `department`, `logTime`) VALUES
(1, '总务处', 'e10adc3949ba59abbe56e057f20f883e', 4, '0', '总务处', 99),
(4, '报告厅管理员', 'e10adc3949ba59abbe56e057f20f883e', 1, '1', '报告厅管理员', 3),
(12, '信息与电子系', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '信息与电子系', 10),
(7, '工程与技术系', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '工程与技术系', 7),
(9, '外语系', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '外语系', 6),
(10, '经济与管理系', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '经济与管理系', 8),
(21, '王学峰', 'e10adc3949ba59abbe56e057f20f883e', 2, '15257587905', '信息与电子系', 43),
(23, '党委办公室', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '党委办公室', 1),
(24, '院长办公室', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '院长办公室', 0),
(25, '拆迁办', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '拆迁办', 0),
(26, '教务处', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '教务处', 0),
(27, '学工部', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '学工部', 0),
(28, '团委', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '团委', 5),
(29, '招就处', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '招就处', 2),
(30, '人事科', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '人事科', 0),
(31, '后勤科', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '后勤科', 2),
(32, '实验中心', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '实验中心', 0),
(33, '财务部', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '财务部', 0),
(34, '图书馆', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '图书馆', 1),
(35, '人文科学系', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '人文科学系', 8),
(36, '生命科学系', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '生命科学系', 3),
(37, '服装与艺术设计系', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '服装与艺术设计系', 6),
(38, '基础课部', 'e10adc3949ba59abbe56e057f20f883e', 3, '0', '基础课部', 0),
(41, '金筱', 'e10adc3949ba59abbe56e057f20f883e', 2, '669668', '后勤科', 2),
(42, '谢飞', '4945952b413e6e7a0ad66bc0af8a183f', 2, '671111', '党委办公室', 1),
(43, '周卫江', 'e10adc3949ba59abbe56e057f20f883e', 2, '13777338178', '后勤科', 0);