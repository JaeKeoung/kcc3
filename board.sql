-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-12-01 15:15
-- 서버 버전: 10.1.19-MariaDB
-- PHP 버전: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `kcc`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(15) NOT NULL,
  `Num` varchar(10) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Count` varchar(10) NOT NULL,
  `Content` varchar(100) NOT NULL,
  `upload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `Num`, `Title`, `Date`, `Count`, `Content`, `upload`) VALUES
(1, '171', '2016년 4월 25일(月) 회원초청 친선골프 행사 결과 안내', '2016.04.27', '1,071', '', NULL),
(2, '172', '2016년 6월 그린피 안내', '2016.05.16', '6,325', '', NULL),
(3, '173', '2016년 하절기 복장 안내문', '2016.05.26', '4,003', '', NULL),
(4, '174', '2016년 6월~7월 그린피 안내', '2016.06.13', '4,596', '', NULL),
(5, '175', '2016년 7월 그린피 안내', '2016.06.28', '5,168', '', NULL),
(6, '176', '2016년 8월 그린피 안내', '2016.07.18', '5,997', '', NULL),
(7, '177', '2016년 9월 그린피 안내', '2016.08.16', '5,831', '', NULL),
(8, '178', '2016년 9월~10월 그린피 안내', '2016.09.12', '3,665', '', NULL),
(9, '179', '2016년 10월 그린피 안내', '2016.09.19', '7,314', '', NULL),
(10, '180', '2016년 10월~11월 그린피 안내', '2016.10.18', '914', '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
