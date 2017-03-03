/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : bilibili

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-03-03 21:21:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_info
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_account` varchar(20) NOT NULL COMMENT '用户账号',
  `user_password` varchar(50) NOT NULL COMMENT '密码',
  `user_phone` varchar(11) NOT NULL COMMENT '手机号',
  `user_exp` int(10) NOT NULL DEFAULT '0' COMMENT '经验',
  `user_coin` int(10) NOT NULL DEFAULT '0' COMMENT '硬币',
  `user_session` tinyint(1) NOT NULL DEFAULT '-1' COMMENT '用户状态',
  `user_head_url` varchar(30) NOT NULL DEFAULT 'img/default_head.png' COMMENT '头像地址',
  `user_brief` varchar(100) NOT NULL DEFAULT 'bilibili干杯' COMMENT '个人简介',
  `user_head_sub_url` varchar(30) NOT NULL DEFAULT '../img/default_head.png' COMMENT '子目录头像',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of user_info
-- ----------------------------
INSERT INTO `user_info` VALUES ('1', 'yunhan', '1c5416c389b7ffcfbdd1914d455ee6ed', '18875146676', '0', '0', '1', 'img/default_head.png', 'bilibili干杯', '../img/default_head.png');

-- ----------------------------
-- Table structure for video_comment
-- ----------------------------
DROP TABLE IF EXISTS `video_comment`;
CREATE TABLE `video_comment` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `comment_content` varchar(200) NOT NULL DEFAULT '' COMMENT '评论',
  `video_id` int(10) NOT NULL,
  `user_account` varchar(20) NOT NULL COMMENT '用户名称',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video_comment
-- ----------------------------
INSERT INTO `video_comment` VALUES ('1', '韦德戈林宝宝的第一个评论demo', '1', 'yunhan');
INSERT INTO `video_comment` VALUES ('2', '韦德戈林宝宝的第一个评论demo', '1', 'yunhan');
INSERT INTO `video_comment` VALUES ('3', '韦德戈林宝宝的第一个评论demo', '1', 'yunhan');
INSERT INTO `video_comment` VALUES ('4', '韦德戈林宝宝的第一个评论demo\n', '1', 'yunhan');
INSERT INTO `video_comment` VALUES ('5', '韦德戈林宝宝的第一个评论demo\n', '1', 'yunhan');
INSERT INTO `video_comment` VALUES ('6', '韦德戈林宝宝的第一个评论demo', '1', 'yunhan');

-- ----------------------------
-- Table structure for video_danmu
-- ----------------------------
DROP TABLE IF EXISTS `video_danmu`;
CREATE TABLE `video_danmu` (
  `video_id` int(10) NOT NULL,
  `danmu_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '弹幕id',
  `danmu_content` varchar(30) NOT NULL COMMENT '弹幕内容',
  `danmu_date` timestamp(6) NOT NULL ON UPDATE CURRENT_TIMESTAMP(6) COMMENT '时间',
  PRIMARY KEY (`danmu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video_danmu
-- ----------------------------

-- ----------------------------
-- Table structure for video_info
-- ----------------------------
DROP TABLE IF EXISTS `video_info`;
CREATE TABLE `video_info` (
  `video_id` int(10) NOT NULL AUTO_INCREMENT,
  `video_tittle` varchar(50) NOT NULL DEFAULT '' COMMENT '标题',
  `video_zone` varchar(10) NOT NULL DEFAULT '' COMMENT '分类关键字',
  `video_brief` varchar(300) NOT NULL COMMENT '搜索关键字',
  `video_coin` int(10) NOT NULL DEFAULT '0' COMMENT '硬币数',
  `video_danmu` int(10) NOT NULL DEFAULT '0' COMMENT '弹幕数量',
  `video_url` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '视频路径',
  `user_account` varchar(20) NOT NULL COMMENT 'UP主account',
  PRIMARY KEY (`video_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video_info
-- ----------------------------
SET FOREIGN_KEY_CHECKS=1;
