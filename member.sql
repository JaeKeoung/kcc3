-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-11-30 16:05
-- 서버 버전: 10.1.10-MariaDB
-- PHP 버전: 5.6.19

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
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `name_kr` varchar(20) NOT NULL,
  `name_en` text NOT NULL,
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `year` int(5) NOT NULL,
  `month` int(5) NOT NULL,
  `day` int(5) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `sms` text NOT NULL,
  `email` text NOT NULL,
  `post` varchar(20) NOT NULL,
  `home_ad` varchar(20) NOT NULL,
  `dm` tinyint(1) NOT NULL,
  `company` varchar(150) NOT NULL,
  `work` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `company_post` varchar(100) NOT NULL,
  `company_ad` varchar(100) NOT NULL,
  `com_tel` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `marry` tinyint(1) NOT NULL,
  `marry_y` int(5) NOT NULL,
  `marry_m` int(5) NOT NULL,
  `marry_d` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `name_kr`, `name_en`, `id`, `password`, `year`, `month`, `day`, `tel`, `phone`, `sms`, `email`, `post`, `home_ad`, `dm`, `company`, `work`, `position`, `company_post`, `company_ad`, `com_tel`, `fax`, `marry`, `marry_y`, `marry_m`, `marry_d`) VALUES
(60, '송은지', 'song', 'kms1111', '', 0, 0, 0, '', '02 . 0000 . 000', '', '', '', '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0),
(63, '김민석', 'kms', 'kmsbabo', 'sj20151226', 0, 0, 0, '02 . 9586 . 1751', '', '', '', '', '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0),
(64, '송은지', 'song', 'thdmsw', 'ms', 1927, 11, 11, '0212234561', '01011257865', '2', 'bbuni', '12345', '654664654', 2, '0', '0', '0', '1234', '0', '1', '1', 0, 1931, 11, 15),
(65, '송은지', 'song', 'thdmsw', 'ms', 1927, 11, 11, '0212234561', '01011257865', '2', 'bbuni', '12345', '654664654', 2, '0', '0', '0', '1234', '0', '1', '1', 0, 1931, 11, 15),
(66, '송은지', 'song', 'thdmsw', 'ms', 1927, 11, 11, '0212234561', '01011257865', '2', 'bbuni', '12345', '654664654', 2, '0', '0', '0', '1234', '0', '1', '1', 0, 1931, 11, 15),
(67, '송은지', 'song', 'thdmsw', '', 1927, 11, 11, '0212234561', '01011257865', '2', 'bbuni', '12345', '654664654', 2, '0', '0', '0', '1234', '0', '1', '1', 0, 1931, 11, 15),
(68, '정태인', 'jung', 'jung', '0103', 1999, 1, 3, '0212355555', '01018751562', '2', 'jung@sdhs.com', '123', '44444444', 1, '서울디지텍', '학생', '빠구', '1111', '111222', '15465665', '12313213', 0, 2013, 12, 1),
(69, '정태인', 'jung', 'jung', '0103', 1999, 1, 3, '0212355555', '01018751562', '2', 'jung@sdhs.com', '123', '44444444', 1, '서울디지텍', '학생', '빠구', '1111', '111222', '15465665', '12313213', 0, 2013, 12, 1),
(70, '민석이', '바보', 'quicket', 'dksdkffuwna', 1998, 8, 18, '0200000000', '01095861751', '2', 'kimmiseok@gmail.com', '08720', '서울 관악구 봉천로17가길 16-8 ', 2, '퀵켓', '막내', '막내', '08380', '서울 구로구 디지털로33길 27 (구로동)서울 구로구 구로동 197-5', '100000000', '155555555', 2, 1918, 1, 1);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
