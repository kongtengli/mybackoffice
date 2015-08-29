/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : thinkphp

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-08-29 14:02:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `administrator`
-- ----------------------------
DROP TABLE IF EXISTS `administrator`;
CREATE TABLE `administrator` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `type` int(2) NOT NULL,
  `createTime` int(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of administrator
-- ----------------------------
INSERT INTO `administrator` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '0');

-- ----------------------------
-- Table structure for `debug`
-- ----------------------------
DROP TABLE IF EXISTS `debug`;
CREATE TABLE `debug` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `value` varchar(300) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of debug
-- ----------------------------
INSERT INTO `debug` VALUES ('1', 'postdate', '<pre>array(0) {\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('2', 'postdate', '<pre>array(0) {\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('3', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('4', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('5', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('6', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('7', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('8', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('9', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('10', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('11', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('12', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('13', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('14', null, '<pre>NULL\n</pre>', null);
INSERT INTO `debug` VALUES ('15', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('16', null, '<pre>NULL\n</pre>', null);
INSERT INTO `debug` VALUES ('17', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('18', 'aaa', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(8) &quot;admin123&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('19', 'postdate', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(5) &quot;admin&quot;\n}\n</pre>', null);
INSERT INTO `debug` VALUES ('20', 'aaa', '<pre>array(2) {\n  [&quot;user&quot;] =&gt; string(5) &quot;admin&quot;\n  [&quot;password&quot;] =&gt; string(5) &quot;admin&quot;\n}\n</pre>', null);

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `userName` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(40) NOT NULL COMMENT 'md5 密码',
  `createTime` varchar(20) DEFAULT NULL,
  `type` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', null, null);
