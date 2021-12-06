-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 02, 2021 lúc 03:57 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datanews`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `name` varchar(256) NOT NULL,
  `cmt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`name`, `cmt`) VALUES
('Mai Thị Nhật Lan', 'đẹp'),
('Mai Thị Nhật Lan', 'đẹp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customer_name` varchar(256) NOT NULL,
  `customer_pass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`customer_name`, `customer_pass`) VALUES
('vudaian12a7@gmail.com', '123'),
('vudaian12a7@gmail.com', '123'),
('mr.vuan24@gmail.com', '12345'),
('mr.vuan24@gmail.com', '123456'),
('maithilan25122002@gmail.com', '123'),
('vudaian12a7@gmail.com', '12345'),
('vudaian12a7@gmail.com', '111'),
('maithilan25122002@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinmoi`
--

CREATE TABLE `tinmoi` (
  `ID` int(11) NOT NULL,
  `titlenew` varchar(256) DEFAULT NULL,
  `imagenew` varchar(500) DEFAULT NULL,
  `timenew` varchar(500) DEFAULT NULL,
  `detailsnew` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinthethao`
--

CREATE TABLE `tinthethao` (
  `ID` int(11) NOT NULL,
  `titlesport` varchar(150) DEFAULT NULL,
  `imagesport` varchar(500) DEFAULT NULL,
  `timesport` varchar(500) DEFAULT NULL,
  `detailssport` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tinmoi`
--
ALTER TABLE `tinmoi`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tinthethao`
--
ALTER TABLE `tinthethao`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tinmoi`
--
ALTER TABLE `tinmoi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `tinthethao`
--
ALTER TABLE `tinthethao`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
