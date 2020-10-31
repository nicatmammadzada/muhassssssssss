/*
 Navicat Premium Data Transfer

 Source Server         : MySql
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : muhasib

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 31/10/2020 11:34:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT ' ',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, '{\"az\":\"SU\\u015e\\u0130\",\"ru\":\"Sushi ru\"}', '{\"az\":\"susi\",\"ru\":\"sushi-ru\"}', '1600108622sushi.png', '15999082891 icon.png');
INSERT INTO `category` VALUES (2, '{\"az\":\"SALAT\"}', '{\"az\":\"salat\"}', '1600108641salad.png', '15999084472 icon.png');
INSERT INTO `category` VALUES (3, '{\"az\":\"SENDV\\u0130\\u00c7 & ROLL\"}', '{\"az\":\"sendvic\"}', '1600108663sendwich.png', '15999088685 icon.png');
INSERT INTO `category` VALUES (5, '{\"az\":\"DESSERT\"}', '{\"az\":\"dessertler\"}', '1600108689dessert.png', '15999088984 icon.png');
INSERT INTO `category` VALUES (22, '{\"az\":\"\\u0130\\u00c7K\\u0130L\\u018fR\"}', '{\"az\":\"ickiler\"}', '1600108783drinks.png', '15999089763 icon.png');

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `reklam` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `logo2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `long` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `reklam2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `reklam3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `reklam4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci KEY_BLOCK_SIZE = 8 ROW_FORMAT = COMPRESSED;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES (1, '{\"az\":\"Bak\\u0131 \\u015f\\u0259h\\u0259ri, \\u00c7obanzad\\u0259 k\\u00fc\\u00e7.2404 (Neft\\u00e7\\u0131l\\u0259r m-n yax\\u0131nl\\u0131\\u011f\\u0131)\"}', 'info@bakuer.az', '+994 12 5655723', 'https://www.facebook.com/bakuer-101208491420247/?modal=admin_todo_tour', 'https://www.instagram.com/bakuer.az/?hl=tr', 'https://twitter.com/bakuer', NULL, '1597407111.png', '1592573362.jpeg', '1591431736.jpeg', '40.409138', '49.862569', '1592573390.jpeg', '1592573402.jpeg', '1592574278.jpeg');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES (1, 'Nesib', 'info@mustafalim.tk', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-01-12 00:14:59', '2020-01-14 04:05:46', '2020-01-14 04:05:46');
INSERT INTO `contact` VALUES (2, 'Mustafalı', 'info@mustafalim.tk', 'hhhhhhhhhhhhhhhhhhhhhhhhhh', '2020-01-12 00:16:36', '2020-01-14 01:39:23', '2020-01-14 01:39:23');
INSERT INTO `contact` VALUES (3, 'Mustafalı', 'info@mustafalim.tk', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '2020-01-12 00:20:39', '2020-01-14 04:05:43', '2020-01-14 04:05:43');
INSERT INTO `contact` VALUES (4, 'ELnur', 'elnur@mail.ru', 'asdasdasafasasd', '2020-01-15 16:24:13', '2020-01-15 22:14:08', '2020-01-15 22:14:08');

-- ----------------------------
-- Table structure for cv
-- ----------------------------
DROP TABLE IF EXISTS `cv`;
CREATE TABLE `cv`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `surname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_id` int(11) NULL DEFAULT 1,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `salary` decimal(10, 2) NULL DEFAULT NULL,
  `education_degree` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `education` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `experience` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `works` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `gender` int(11) NULL DEFAULT NULL,
  `family` tinyint(4) NULL DEFAULT 0,
  `dob` date NULL DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `adress` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `computer_skills` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `language_skills` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sertification` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `in_addition` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  `is_active` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `unique_id` bigint(22) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cv
-- ----------------------------

-- ----------------------------
-- Table structure for dil
-- ----------------------------
DROP TABLE IF EXISTS `dil`;
CREATE TABLE `dil`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dil` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `flag` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of dil
-- ----------------------------
INSERT INTO `dil` VALUES (1, 'az', 'azerbaijan.png');
INSERT INTO `dil` VALUES (2, 'en', 'uk.png');
INSERT INTO `dil` VALUES (3, 'ru', 'russia.png');

-- ----------------------------
-- Table structure for photos
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of photos
-- ----------------------------
INSERT INTO `photos` VALUES (1, '16016195492.jpg');
INSERT INTO `photos` VALUES (2, '16016201023.jpg');

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `small_text` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  `is_active` tinyint(1) NULL DEFAULT 1,
  `view` int(11) NULL DEFAULT 0,
  `category_id` int(11) NULL DEFAULT NULL,
  `author_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 83 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES (1, 'Test', '1591857256head1.jpg', 'test', 'Kicik metin', '<p>Men meshqde olanda</p>', '2020-01-14 18:28:24', '2020-06-20 16:49:16', '2020-06-20 16:49:16', 1, 12, 7, NULL);
INSERT INTO `post` VALUES (2, 'Test1', '1591857212analtika_konversiya1.jpg', 'test1', 'Dostlarla', '<p>Ramiz dayinin yeri</p>', '2020-01-14 18:30:28', '2020-06-20 10:23:49', '2020-06-20 10:23:49', 1, 0, 8, NULL);
INSERT INTO `post` VALUES (3, 'Test2', '1591857184head1.jpg', 'test2', 'Tarqovu', '<p>Tenis oynarken)</p>', '2020-01-14 18:31:36', '2020-06-20 16:49:05', '2020-06-20 16:49:05', 1, 0, 9, NULL);
INSERT INTO `post` VALUES (61, '{\"az\":\"Aut iste commodi exc\"}', '1592723565.jpeg', '{\"az\":\"aut-iste-commodi-exc\"}', '{\"az\":\"Incidunt quis a\"}', '{\"az\":\"<p>Test<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\"}', '2020-06-21 11:12:45', '2020-09-06 19:33:43', NULL, 1, 0, 19, 9);

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES (9, '{\"az\":\"1597523747.jpeg\"}');
INSERT INTO `slider` VALUES (10, '{\"az\":\"1597523763.jpeg\"}');
INSERT INTO `slider` VALUES (11, '{\"az\":\"1597523785.jpeg\"}');

-- ----------------------------
-- Table structure for subscribe
-- ----------------------------
DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE `subscribe`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `is_active` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of subscribe
-- ----------------------------
INSERT INTO `subscribe` VALUES (37, 'nicatmemmedzade@hotmail.com', '0', '2020-06-20 03:45:13');
INSERT INTO `subscribe` VALUES (38, 'nicatmemmedzade.phpdev@gmail.com', '0', '2020-06-20 03:45:44');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `email`) USING BTREE,
  UNIQUE INDEX `user_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (5, 'Nicat Memmedzade', 'nicatmemmedzade@hotmail.com', '$2y$10$g/oubB3I8.tiYQLaDlcaUOO7vlomxUX9CoX.50Ll1xVtaXmNf8B3i', '1qtYv7wHVhWEsvm3fzlqzAFDE0VQf7kE9CgnMItaibHaQIgCQYzGv3B', 1, 1, 'GZmpnZKEQ0SvuQ4Sp6N6SOhP910Irm0aDnQVtIXdZj852F5yOLZK3UAW0s7Z', '2020-01-14 07:06:59', '2020-06-15 22:54:34', NULL, NULL);
INSERT INTO `users` VALUES (19, 'Levi Berger', 'xoculuzy@mailinator.com', '$2y$10$KQO6645K/sC0aOv2AG5/kOdpaL9hztbx.wUq16c0AC.XEqN3HMt9.', NULL, 0, 1, NULL, '2020-08-20 12:26:59', '2020-08-25 13:11:04', '2020-08-25 13:11:04', '2020-08-20 12:27:58');
INSERT INTO `users` VALUES (20, 'Dale Bryan', 'nicatmemmedzadeee@hotmail.com', '$2y$10$alVXd7AZf159cuR/TnHna.ZhrAP9x1Pp9bimpQcl00GuWvcM0csX6', NULL, 0, 1, NULL, '2020-08-20 12:30:42', '2020-08-20 12:34:42', NULL, '2020-08-20 12:34:42');

SET FOREIGN_KEY_CHECKS = 1;
