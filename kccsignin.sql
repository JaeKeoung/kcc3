-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-06 02:20
-- 서버 버전: 10.1.16-MariaDB
-- PHP 버전: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `kccsignin`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `kccsignin`
--

CREATE TABLE `kccsignin` (
  `KoreanName` varchar(10) NOT NULL,
  `EnglishName` varchar(30) NOT NULL,
  `BirthDay` varchar(8) NOT NULL,
  `ID` varchar(16) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `PhoneNumber` varchar(16) DEFAULT NULL,
  `CellphoneNumber` varchar(16) NOT NULL,
  `SMS` varchar(1) NOT NULL,
  `EMail` varchar(30) DEFAULT NULL,
  `HomePost` varchar(6) NOT NULL,
  `HomeAdress1` varchar(60) NOT NULL,
  `HomeAdress2` varchar(60) NOT NULL,
  `DM` varchar(1) NOT NULL,
  `CompanyName` varchar(30) NOT NULL,
  `JobKind` varchar(30) DEFAULT NULL,
  `Position` varchar(30) DEFAULT NULL,
  `CompanyPost` varchar(6) DEFAULT NULL,
  `CompanyAdress1` varchar(60) DEFAULT NULL,
  `CompanyAdress2` varchar(60) DEFAULT NULL,
  `CompanyNumber` varchar(16) NOT NULL,
  `FaxNumber` varchar(16) DEFAULT NULL,
  `WeddingCheck` varchar(1) DEFAULT NULL,
  `WeddingDate` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `kccsignin`
--

INSERT INTO `kccsignin` (`KoreanName`, `EnglishName`, `BirthDay`, `ID`, `Password`, `PhoneNumber`, `CellphoneNumber`, `SMS`, `EMail`, `HomePost`, `HomeAdress1`, `HomeAdress2`, `DM`, `CompanyName`, `JobKind`, `Position`, `CompanyPost`, `CompanyAdress1`, `CompanyAdress2`, `CompanyNumber`, `FaxNumber`, `WeddingCheck`, `WeddingDate`) VALUES
('', '', '0', '', '', '0', '0', '', '', '0', '', '', '', '', '', '', '0', '', '', '0', '0', '', '0'),
('', '', '0', '', '', '0', '0', '', '', '0', '', '', '', '', '', '', '0', '', '', '0', '0', '', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
