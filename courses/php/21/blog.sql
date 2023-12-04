/*
 Navicat MariaDB Data Transfer

 Source Server         : VPS ORION
 Source Server Type    : MariaDB
 Source Server Version : 100521 (10.5.21-MariaDB-0+deb11u1)
 Source Host           : 94.176.233.50:3306
 Source Schema         : blog

 Target Server Type    : MariaDB
 Target Server Version : 100521 (10.5.21-MariaDB-0+deb11u1)
 File Encoding         : 65001

 Date: 04/12/2023 15:35:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `picture` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `active` tinyint(3) UNSIGNED NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES (1, 'L&#039;hiver est à nos portes', 'L’été nous apporte ses journées ensoleillées et ses soirées dorées ; l’automne, le\r\nmouvement du vent et la coloration glorieuse du feuillage. Mais l’hiver ?\r\nSon doux manteau de neige, uniforme et épuré, recouvre les aspérités des paysages,\r\nleur permettant de prendre une pause pour mieux renaître au printemps.', NULL, 1);
INSERT INTO `articles` VALUES (2, 'Le soleil', 'Le Soleil est l’étoile autour de laquelle tournoient tous les objets qui constituent notre système solaire, à savoir les planètes, les comètes et autres astéroïdes.', NULL, 1);
INSERT INTO `articles` VALUES (3, 'L\'intelligence artificielle', 'Souvent classée dans le groupe des mathématiques et des sciences cognitives, elle fait appel à la neurobiologie computationnelle (particulièrement aux réseaux neuronaux) et à la logique mathématique (partie des mathématiques et de la philosophie). ', NULL, 1);
INSERT INTO `articles` VALUES (15, 'Encore un', '...', NULL, 0);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `passwd` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'john@mail.com', '1234');
INSERT INTO `users` VALUES (2, 'alain@kelleter.be', 'AZERTY');

SET FOREIGN_KEY_CHECKS = 1;
