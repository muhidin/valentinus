-- Adminer 4.8.1 MySQL 10.3.34-MariaDB-0ubuntu0.20.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` varchar(2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `banner` (`id`, `no`, `image`, `title`, `description`) VALUES
(1,	'1',	'banner_5e37c428e2ea6.jpg',	'Suasana Kota Depok',	'Salah satu Depok di tengah Kota Depok'),
(2,	'2',	'banner_5e1aedbf5e548.jpg',	'Alun-Alun',	'Alun-Alun Kota Depok di GDC'),
(3,	'3',	'banner_123.jpg',	'asal',	'cuma tes saja');

DROP TABLE IF EXISTS `colum`;
CREATE TABLE `colum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `colum1` varchar(100) NOT NULL,
  `colum2` varchar(100) NOT NULL,
  `colum3` varchar(100) NOT NULL,
  `colum4` varchar(100) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_wa` varchar(20) NOT NULL,
  `warna_button` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna` (
  `idpengguna` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hakakses` varchar(15) NOT NULL,
  `aktif` enum('Y','T') NOT NULL DEFAULT 'T',
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`idpengguna`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pengguna` (`idpengguna`, `username`, `password`, `nama`, `jabatan`, `hp`, `email`, `hakakses`, `aktif`, `foto`) VALUES
(1,	'admin',	'21232f297a57a5a743894a0e4a801fc3',	'Admin Web Pilkasis',	'Administrator',	'081297224622',	'muhidinsaimin@gmail.com',	'Admin',	'Y',	'UGD.JPG');

-- 2022-04-12 03:06:00
