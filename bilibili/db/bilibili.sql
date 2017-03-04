/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : bilibili

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-03-04 13:16:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_info
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_account` varchar(30) NOT NULL COMMENT '用户账号',
  `user_password` varchar(50) NOT NULL COMMENT '密码',
  `user_phone` varchar(11) NOT NULL COMMENT '手机号',
  `user_exp` int(10) NOT NULL DEFAULT '0' COMMENT '经验',
  `user_coin` int(10) NOT NULL DEFAULT '0' COMMENT '硬币',
  `user_session` tinyint(1) NOT NULL DEFAULT '-1' COMMENT '用户状态',
  `user_head_url` varchar(30) NOT NULL DEFAULT 'img/default_head.png' COMMENT '头像地址',
  `user_brief` varchar(100) NOT NULL DEFAULT 'bilibili干杯' COMMENT '个人简介',
  `user_head_sub_url` varchar(30) NOT NULL DEFAULT '../img/default_head.png' COMMENT '子目录头像',
  PRIMARY KEY (`user_id`),
  KEY `user_account` (`user_account`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of user_info
-- ----------------------------
INSERT INTO `user_info` VALUES ('1', 'WindGrin', '1c5416c389b7ffcfbdd1914d455ee6ed', '18875146676', '0', '0', '0', 'img/default_head.png', '网易云ID：Toch_Her , 我是一个用户demo , 23333333', '../img/default_head.png');

-- ----------------------------
-- Table structure for video_comment
-- ----------------------------
DROP TABLE IF EXISTS `video_comment`;
CREATE TABLE `video_comment` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `comment_content` varchar(200) NOT NULL DEFAULT '' COMMENT '评论',
  `video_id` int(10) NOT NULL,
  `user_account` varchar(30) NOT NULL COMMENT '用户名称',
  `user_head_sub_url` varchar(30) NOT NULL DEFAULT '../img/default_head.png' COMMENT '头像',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video_comment
-- ----------------------------
INSERT INTO `video_comment` VALUES ('1', 'WindGrin的第1个评论', '1', 'WindGrin', '../img/default_head.png');
INSERT INTO `video_comment` VALUES ('2', 'WindGrin的第2个评论', '1', 'WindGrin', '../img/default_head.png');
INSERT INTO `video_comment` VALUES ('3', 'WindGrin的第3个评论', '1', 'WindGrin', '../img/default_head.png');
INSERT INTO `video_comment` VALUES ('4', 'WindGrin的第4个评论', '1', 'WindGrin', '../img/default_head.png');
INSERT INTO `video_comment` VALUES ('5', 'WindGrin的第5个评论', '1', 'WindGrin', '../img/default_head.png');
INSERT INTO `video_comment` VALUES ('6', 'WindGrin的第6个评论', '1', 'WindGrin', '../img/default_head.png');

-- ----------------------------
-- Table structure for video_danmu
-- ----------------------------
DROP TABLE IF EXISTS `video_danmu`;
CREATE TABLE `video_danmu` (
  `danmu_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '弹幕id',
  `video_id` int(10) NOT NULL,
  `danmu_content` varchar(100) NOT NULL COMMENT '弹幕内容',
  `user_account` varchar(30) NOT NULL COMMENT '用户名',
  `danmu_date` varchar(10) NOT NULL COMMENT '时间',
  PRIMARY KEY (`danmu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video_danmu
-- ----------------------------
INSERT INTO `video_danmu` VALUES ('1', '1', 'WindGrin的弹幕1', 'WindGrin', '02-39');
INSERT INTO `video_danmu` VALUES ('2', '1', 'WindGrin的弹幕1', 'WindGrin', '02-39');
INSERT INTO `video_danmu` VALUES ('3', '1', 'WindGrin的弹幕2', 'WindGrin', '02-39');
INSERT INTO `video_danmu` VALUES ('4', '1', 'WindGrin的弹幕2', 'WindGrin', '02-39');
INSERT INTO `video_danmu` VALUES ('5', '1', '233333333333333333', 'WindGrin', '02-39');
INSERT INTO `video_danmu` VALUES ('6', '1', '哈哈哈哈哈哈哈哈', 'WindGrin', '02-39');
INSERT INTO `video_danmu` VALUES ('7', '1', '计数君', 'WindGrin', '02-48');
INSERT INTO `video_danmu` VALUES ('8', '1', '计数君', 'WindGrin', '02-48');
INSERT INTO `video_danmu` VALUES ('9', '1', '高能高能', 'WindGrin', '03-09');
INSERT INTO `video_danmu` VALUES ('10', '1', '弹幕 100', 'WindGrin', '03-10');
INSERT INTO `video_danmu` VALUES ('11', '1', '弹幕 100', 'WindGrin', '03-10');
INSERT INTO `video_danmu` VALUES ('12', '1', 'Lmollit anim id est laborum.', 'WindGrin', '03-11');
INSERT INTO `video_danmu` VALUES ('13', '1', 'Lmollit anim id est laborum.', 'WindGrin', '03-11');
INSERT INTO `video_danmu` VALUES ('14', '1', 'Lmollit anim id est laborum.', 'WindGrin', '03-11');
INSERT INTO `video_danmu` VALUES ('15', '1', 'I deserunt mollit anim id est laborum.', 'WindGrin', '03-12');
INSERT INTO `video_danmu` VALUES ('16', '1', 'I deserunt mollit anim id est laborum.', 'WindGrin', '03-12');
INSERT INTO `video_danmu` VALUES ('17', '1', ' I deserunt mollit anim id est laborum.', 'WindGrin', '03-12');
INSERT INTO `video_danmu` VALUES ('18', '1', ' I deserunt mollit anim id est laborum.', 'WindGrin', '03-12');
INSERT INTO `video_danmu` VALUES ('19', '1', ' I deserunt mollit anim id est laborum.', 'WindGrin', '03-12');
INSERT INTO `video_danmu` VALUES ('20', '1', ' I deserunt mollit anim id est laborum.', 'WindGrin', '03-12');
INSERT INTO `video_danmu` VALUES ('21', '1', ' I deserunt mollit anim id est laborum.', 'WindGrin', '03-12');
INSERT INTO `video_danmu` VALUES ('22', '1', '123', 'WindGrin', '03-42');
INSERT INTO `video_danmu` VALUES ('23', '1', '123', 'WindGrin', '03-42');
INSERT INTO `video_danmu` VALUES ('24', '1', '123', 'WindGrin', '03-42');
INSERT INTO `video_danmu` VALUES ('25', '1', '123', 'WindGrin', '03-42');
INSERT INTO `video_danmu` VALUES ('26', '1', '123', 'WindGrin', '03-42');
INSERT INTO `video_danmu` VALUES ('27', '1', '123', 'WindGrin', '03-42');
INSERT INTO `video_danmu` VALUES ('28', '1', '123', 'WindGrin', '03-42');
INSERT INTO `video_danmu` VALUES ('29', '1', '123', 'WindGrin', '03-42');
INSERT INTO `video_danmu` VALUES ('30', '1', '123', 'WindGrin', '03-42');
INSERT INTO `video_danmu` VALUES ('31', '1', '123', 'WindGrin', '03-42');
INSERT INTO `video_danmu` VALUES ('32', '1', 'demo', 'WindGrin', '03-43');
INSERT INTO `video_danmu` VALUES ('33', '1', 'demo', 'WindGrin', '03-43');
INSERT INTO `video_danmu` VALUES ('34', '1', '弹幕', 'WindGrin', '04-03');
INSERT INTO `video_danmu` VALUES ('35', '1', '弹幕', 'WindGrin', '04-04');
INSERT INTO `video_danmu` VALUES ('36', '1', '弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('37', '1', '弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('38', '1', '弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('39', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('40', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('41', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('42', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('43', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('44', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('45', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('46', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('47', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('48', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('49', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('50', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('51', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('52', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('53', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('54', '1', '测试弹幕', 'WindGrin', '04-05');
INSERT INTO `video_danmu` VALUES ('55', '1', '测试弹幕', 'WindGrin', '04-05');

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
  `user_account` varchar(30) NOT NULL COMMENT 'UP主account',
  PRIMARY KEY (`video_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video_info
-- ----------------------------
INSERT INTO `video_info` VALUES ('1', '【自制】WindGrin的第一个上传视频', '生活', 'WindGrin的视频', '0', '0', '../video.demo.mp4', 'WindGrin');
SET FOREIGN_KEY_CHECKS=1;
