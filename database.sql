#
# TABLE STRUCTURE FOR: chat
#

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `to` varchar(255) NOT NULL DEFAULT '',
  `from` varchar(255) NOT NULL DEFAULT '',
  `to_name` varchar(255) NOT NULL DEFAULT '',
  `from_name` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL,
  `recd` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `to` (`to`),
  KEY `from` (`from`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `chat` (`id`, `to`, `from`, `to_name`, `from_name`, `message`, `sent`, `recd`) VALUES (1, 15, 1, Hasna, Bos, ho, 2018-08-12 12:45:47, 0);


#
# TABLE STRUCTURE FOR: ci_sessions
#

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: tbl_kontak
#

DROP TABLE IF EXISTS `tbl_kontak`;

CREATE TABLE `tbl_kontak` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `headline` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `long` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_kontak` (`id`, `headline`, `address`, `phone`, `mail`, `lat`, `long`) VALUES (1, Garuda Informatics Software House, Jl. Garuda No.09, Tambak Rejo, Kec. Jombang, Kabupaten Jombang, Jawa Timur 61451, Indonesia, 085646045594, info@garudainformatics.tk, -7.5200, 112.2322);


#
# TABLE STRUCTURE FOR: tbl_last_login
#

DROP TABLE IF EXISTS `tbl_last_login`;

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (1, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-07-31 16:03:43);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (2, 3, {"role":"3","roleText":"Client","name":"Anu"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-07-31 22:58:37);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (3, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-01 08:23:11);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (4, 3, {"role":"3","roleText":"Client","name":"Anu"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-01 08:25:12);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (5, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-02 10:03:06);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (6, 3, {"role":"3","roleText":"Client","name":"Anu"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-02 10:04:57);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (7, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-08 13:53:06);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (8, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-08 15:25:23);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (9, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-09 13:16:32);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (10, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-09 13:37:23);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (11, 3, {"role":"3","roleText":"Client","name":"Anu"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-09 13:51:52);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (12, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-10 00:06:00);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (13, 3, {"role":"3","roleText":"Client","name":"Fahmi"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-10 00:58:33);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (14, 3, {"role":"3","roleText":"Client","name":"Fahmi"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-10 01:36:36);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (15, 12, {"role":"3","roleText":"Client","name":"Aplikasi Peninjau Jomblo"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-10 01:41:40);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (16, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-10 11:01:33);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (17, 3, {"role":"3","roleText":"Client","name":"Fahmi"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-10 11:03:33);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (18, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-10 11:14:08);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (19, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-11 11:04:25);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (20, 3, {"role":"3","roleText":"Client","name":"Fahmi"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-11 12:15:49);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (21, 3, {"role":"3","roleText":"Client","name":"Fahmi"}, 127.0.0.1, Chrome 67.0.3396.99, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36, Windows 10, 2018-08-11 12:39:51);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (22, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 68.0.3440.106, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36, Windows 10, 2018-08-11 18:57:38);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (23, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 68.0.3440.106, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36, Windows 10, 2018-08-11 22:24:45);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (24, 3, {"role":"3","roleText":"Client","name":"Fahmi"}, 127.0.0.1, Chrome 68.0.3440.106, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36, Windows 10, 2018-08-11 22:46:14);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (25, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 68.0.3440.106, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36, Windows 10, 2018-08-11 22:54:08);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (26, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 68.0.3440.106, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36, Windows 10, 2018-08-12 11:18:36);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (27, 3, {"role":"3","roleText":"Client","name":"Fahmi"}, 127.0.0.1, Chrome 68.0.3440.106, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36, Windows 10, 2018-08-12 11:18:54);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (28, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 68.0.3440.106, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36, Windows 10, 2018-08-12 11:33:40);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (29, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 68.0.3440.106, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36, Windows 10, 2018-08-15 19:59:17);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (30, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 68.0.3440.106, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36, Windows 10, 2018-08-19 12:49:13);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (31, 3, {"role":"3","roleText":"Client","name":"Fahmi"}, 127.0.0.1, Chrome 68.0.3440.106, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36, Windows 10, 2018-08-19 12:49:35);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (32, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 69.0.3497.100, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36, Windows 10, 2018-09-25 18:01:35);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (33, 13, {"role":"3","roleText":"Client","name":"Tony Budi"}, 127.0.0.1, Chrome 69.0.3497.100, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36, Windows 10, 2018-09-25 18:02:29);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (34, 13, {"role":"3","roleText":"Client","name":"Tony Budi"}, 127.0.0.1, Chrome 69.0.3497.100, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36, Windows 10, 2018-09-25 20:04:37);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (35, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 69.0.3497.100, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36, Windows 10, 2018-09-25 20:41:40);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (36, 2, {"role":"2","roleText":"Admin","name":"Admin"}, 127.0.0.1, Chrome 69.0.3497.100, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36, Windows 10, 2018-09-25 20:42:38);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (37, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 69.0.3497.100, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36, Windows 10, 2018-09-25 20:51:05);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (38, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 69.0.3497.100, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36, Windows 10, 2018-09-25 21:10:22);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (39, 2, {"role":"2","roleText":"Admin","name":"Admin"}, 127.0.0.1, Chrome 69.0.3497.100, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36, Windows 10, 2018-09-25 21:10:38);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (40, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 69.0.3497.100, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36, Windows 10, 2018-09-25 21:12:08);
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES (41, 1, {"role":"1","roleText":"Admin System","name":"Bos"}, 127.0.0.1, Chrome 69.0.3497.100, Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36, Windows 10, 2018-09-26 09:49:19);


#
# TABLE STRUCTURE FOR: tbl_link
#

DROP TABLE IF EXISTS `tbl_link`;

CREATE TABLE `tbl_link` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_link` (`id`, `facebook`, `twitter`, `instagram`) VALUES (1, #, #, #);


#
# TABLE STRUCTURE FOR: tbl_order
#

DROP TABLE IF EXISTS `tbl_order`;

CREATE TABLE `tbl_order` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `progress` varchar(100) DEFAULT 'START',
  `status` varchar(100) DEFAULT 'UNPAID',
  `deadline` date DEFAULT NULL,
  `userId` int(255) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_order` (`id`, `title`, `type`, `file`, `progress`, `status`, `deadline`, `userId`, `timestamp`) VALUES (1, Android Aplikasi Rental Mobil Pt Anugrah Abadi, Desktop Apps, SEKOLAH_JAMAN_NOW.docx, START, UNPAID, 2019-02-20, 1, 2018-09-25 20:29:27);
INSERT INTO `tbl_order` (`id`, `title`, `type`, `file`, `progress`, `status`, `deadline`, `userId`, `timestamp`) VALUES (7, Android Aplikasi Rental Mobil Pt Anugrah Abadi, Mobile Apps, SEKOLAH_JAMAN_NOW.docx, IN PROGRESS, NON CASH, 2019-02-20, 13, 2018-09-25 20:39:23);
INSERT INTO `tbl_order` (`id`, `title`, `type`, `file`, `progress`, `status`, `deadline`, `userId`, `timestamp`) VALUES (8, Program Kasir PT Market Mall, Desktop Apps, SEKOLAH_JAMAN_NOW.docx, START, UNPAID, 2018-02-02, 13, 2018-09-25 20:50:43);


#
# TABLE STRUCTURE FOR: tbl_pesan
#

DROP TABLE IF EXISTS `tbl_pesan`;

CREATE TABLE `tbl_pesan` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT '0',
  `email` varchar(100) DEFAULT '0',
  `phone` varchar(100) DEFAULT '0',
  `website` varchar(100) DEFAULT '0',
  `pesan` varchar(500) DEFAULT '0',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_pesan` (`id`, `name`, `email`, `phone`, `website`, `pesan`, `timestamp`) VALUES (1, Febrian Dwi Putra, febrikimli0@gmail.com, 089688940024, rajasa.com, mau tanya apakah bisa membuat website sekaligus android aplikasinya, 2018-09-25 21:01:56);
INSERT INTO `tbl_pesan` (`id`, `name`, `email`, `phone`, `website`, `pesan`, `timestamp`) VALUES (2, Sudirma, superadmin@fake.com, 896889400212, bjpk.com, sama minta kontak personalnya , dan saya sangat tertarik dengan bisnis bapak. terima kasih, 2018-09-25 21:03:16);
INSERT INTO `tbl_pesan` (`id`, `name`, `email`, `phone`, `website`, `pesan`, `timestamp`) VALUES (3, indah dwi sari, indah@service.com, 89688940024, servicelaptop.com, bagaimana cara untuk order di website ini ya ?, 2018-09-25 21:04:44);


#
# TABLE STRUCTURE FOR: tbl_product
#

DROP TABLE IF EXISTS `tbl_product`;

CREATE TABLE `tbl_product` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `desc` varchar(500) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `catagory` varchar(100) DEFAULT NULL,
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_product` (`id`, `name`, `desc`, `img`, `catagory`, `createtime`) VALUES (5, Sistem Rental Mobil Pt Anugrah, sistem mempermudah pelayanan rental mobil dengan pelayanan prima dan terpadu, rental_mobil.jpg, Websites, 2018-09-25 18:53:27);
INSERT INTO `tbl_product` (`id`, `name`, `desc`, `img`, `catagory`, `createtime`) VALUES (6, Android Aplikasi Rental Mobil Pt Anugrah Abadi, pelayanan pada aplikasi android dibuat dari java, android_rental.png, Mobile App, 2018-09-25 18:55:43);
INSERT INTO `tbl_product` (`id`, `name`, `desc`, `img`, `catagory`, `createtime`) VALUES (9, Aplikasi Point Of Sale Pt Market Mall, aplikasi kasir, pos.jpg, Desktop App, 2018-09-25 19:47:20);


#
# TABLE STRUCTURE FOR: tbl_reset_password
#

DROP TABLE IF EXISTS `tbl_reset_password`;

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: tbl_roles
#

DROP TABLE IF EXISTS `tbl_roles`;

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text',
  PRIMARY KEY (`roleId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES (1, Admin System);
INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES (2, Admin);
INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES (3, Client);


#
# TABLE STRUCTURE FOR: tbl_timeline
#

DROP TABLE IF EXISTS `tbl_timeline`;

CREATE TABLE `tbl_timeline` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `badge` varchar(100) DEFAULT NULL,
  `orderId` int(225) DEFAULT NULL,
  `userId` int(225) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `orderId` (`orderId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_timeline` (`id`, `title`, `text`, `badge`, `orderId`, `userId`, `timestamp`) VALUES (1, Pembayaran DP, <p>Pembayaran Awal Telah Di Transfer</p>, fa fa-commenting bg-blue, 7, 1, 2018-09-25 20:40:41);
INSERT INTO `tbl_timeline` (`id`, `title`, `text`, `badge`, `orderId`, `userId`, `timestamp`) VALUES (2, Membuat login, <p>Membuat login seperti brefing kemarin sabtu</p>

<p>&nbsp;</p>

<p><img alt="contoh login" src="https://image.freepik.com/free-vector/login-template_1017-6719.jpg" style="height:626px; width:626px" /></p>, fa fa-calendar bg-blue, 7, 2, 2018-09-25 20:45:44);
INSERT INTO `tbl_timeline` (`id`, `title`, `text`, `badge`, `orderId`, `userId`, `timestamp`) VALUES (3, Error Login, <p>Error page not found.</p>, fa fa-ban bg-red, 7, 2, 2018-09-25 20:46:58);
INSERT INTO `tbl_timeline` (`id`, `title`, `text`, `badge`, `orderId`, `userId`, `timestamp`) VALUES (4, Modul Login Telah Selesai, <p>Modul yang kita bahas kemarin sudah selesai</p>, fa fa-check  bg-aqua, 7, 2, 2018-09-25 20:48:30);
INSERT INTO `tbl_timeline` (`id`, `title`, `text`, `badge`, `orderId`, `userId`, `timestamp`) VALUES (5, Pembayaran DP belum terbayar, <p>Informasi Untuk pembayaran DP tolong dibayarkan agar proses dapat di lanjutkan. terima kasih ~~</p>, fa fa-calendar bg-red, 8, 1, 2018-09-25 20:52:28);


#
# TABLE STRUCTURE FOR: tbl_users
#

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `userId` int(225) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES (1, admin@example.com, $2y$10$D5lxnXgOH4u1e2hDvWJwM.Zk5wwLxBi0BGWGXb8owcUrronJtc3Km, Bos, 9890098900, 1, 0, 0, 2015-07-01 18:56:49, 1, 2018-06-23 05:01:40);
INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES (2, manager@example.com, $2y$10$C/EeVYctSWbLKlK6Y7Exvu4xpp5nTAk8deVOhqGYSt/KGahNDs.OC, Admin, 0896889400, 2, 0, 1, 2016-12-09 17:49:56, 1, 2018-09-25 20:42:20);
INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES (3, febri@gmail.com, $2y$10$aLFzvzL.gwSXkSLTueF7ieIx4yZrDX.g93Bcz4Hn48johA1f33E0i, Fahmi, 0896889400, 3, 0, 1, 2018-07-27 00:18:35, 1, 2018-08-10 00:06:11);
INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES (12, clonez9494@gmail.com, $2y$10$AowrRrjyZUjVEC5LePvrEu.m.ri2FcWYciitjeY1eNH0nCjOT2iGe, Aplikasi Peninjau Jomblo, 089688940024, 3, 1, 1, 2018-08-10 01:41:29, 1, 2018-09-25 21:05:17);
INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES (13, budi2121@gmail.com, $2y$10$el1087ie2ukG4ZSqCVLsxOOrXChr2udIXQtIgLD0swbHjBmufTb9S, Tony Budi, 0896889400, 3, 0, 1, 2018-08-11 22:55:50, NULL, NULL);
INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES (14, febrikondang0@yahoo.com, $2y$10$H6RlTE/O6nmJ4ZJs2bteuOjT0zIpeYrd9kJogFpj34LdLCQmIuXDu, Febrian Dwi Putra, 9999999991, 3, 1, 1, 2018-08-11 22:56:26, 1, 2018-09-25 21:05:12);
INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES (15, asmin@example.com, $2y$10$0qKcCG5JtyW4SQh9r3XIwOf8c4dyJV0hMCn7MZLicGb0KM.JgIqlS, Hasna, 0896889400, 3, 0, 1, 2018-08-11 22:56:54, NULL, NULL);


