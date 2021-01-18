/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : login

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 18/01/2021 02:52:15
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for passwords
-- ----------------------------
DROP TABLE IF EXISTS `passwords`;
CREATE TABLE `passwords`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PASSWORD` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of passwords
-- ----------------------------
INSERT INTO `passwords` VALUES (1, 'D7&O3HcJfJ');
INSERT INTO `passwords` VALUES (2, '%!%H%WdPQ+');
INSERT INTO `passwords` VALUES (3, '7x(bV&cHR+');
INSERT INTO `passwords` VALUES (4, '6Wo80zT(pV');
INSERT INTO `passwords` VALUES (5, 'GIhk3qRSqz');
INSERT INTO `passwords` VALUES (6, '99yocIA5ku');
INSERT INTO `passwords` VALUES (7, 'O6w(fu_B*d');
INSERT INTO `passwords` VALUES (8, 'Vva0^8KHKB');
INSERT INTO `passwords` VALUES (9, '7Y)bX_V3JU');
INSERT INTO `passwords` VALUES (10, 'hrXzLZ)Qn%');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `PASSWORD` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `EMAIL` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'serhat', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'serhatocal@windowslive.com');

SET FOREIGN_KEY_CHECKS = 1;
