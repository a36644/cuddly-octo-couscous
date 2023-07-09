-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 09, 2023 lúc 01:17 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoppe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbcart`
--

CREATE TABLE `tbcart` (
  `cartid` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbcart`
--

INSERT INTO `tbcart` (`cartid`, `hinhanh`, `ten`, `gia`, `id`) VALUES
(3, 'sp5.jpg', 'MLB Bao Da Điện Thoại Cho iphone 13 Pro Max i13 13pro 11 Pro Max i11 X XR Xs Max 7plus 8plus 12Pro 12 Pro Max Ốp', 44462, 67),
(14, 'sp4.jpg\r\n', 'Ốp Điện Thoại Da Pikachu Sang Trọng iphone 14 Pro Max 14 + 13 Pro Max 13 13pro 11 Pro Max 11 X XR Xs Max 7 + 8 + 12Pro 12 Pro Max', 37840, 67),
(28, 'sp5.jpg', 'MLB Bao Da Điện Thoại Cho iphone 13 Pro Max i13 13pro 11 Pro Max i11 X XR Xs Max 7plus 8plus 12Pro 12 Pro Max Ốp', 44462, 67);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbshoppe`
--

CREATE TABLE `tbshoppe` (
  `id` int(11) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `priceold` int(11) NOT NULL,
  `pricenew` int(11) NOT NULL,
  `soldquantity` int(11) NOT NULL,
  `saleoff` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `imglarge` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbshoppe`
--

INSERT INTO `tbshoppe` (`id`, `title`, `priceold`, `pricenew`, `soldquantity`, `saleoff`, `img`, `imglarge`) VALUES
(1, 'Ốp Điện Thoại Cho iphone 14 Pro Max i14 plus 13 Pro Max i13 13pro 11 Pro Max i11 X XR Xs Max 7 plus 8 plus 12Pro 12 Pro Max', 47323, 41644, 4900, 5, 'sp1.jpg', 'img1sp1-large.jpg'),
(2, 'Ốp Điện Thoại Vân Đá Cho iphone 14 Pro Max i14 13 Pro Max i13 13pro 11 Pro Max i11 X XR Xs Max 7 plus 8 plus 12Pro 12 Pro Max', 43790, 38535, 67, 12, 'sp2.jpg', 'img1sp2-large.jpg'),
(3, 'Ốp điện thoại thích hợp cho iphone 14 Pro Max i14 plus 13 Pro Max i13 13pro 11 Pro Max i11 X XR Xs Max 7 plus 8 plus', 43790, 38535, 2300, 12, 'sp3.jpg', 'img1sp3-large.jpg'),
(4, 'Ốp Điện Thoại Da Pikachu Sang Trọng iphone 14 Pro Max 14 + 13 Pro Max 13 13pro 11 Pro Max 11 X XR Xs Max 7 + 8 + 12Pro 12 Pro Max', 43000, 37840, 1200, 12, 'sp4.jpg\r\n', 'img1sp4-large.jpg'),
(5, 'MLB Bao Da Điện Thoại Cho iphone 13 Pro Max i13 13pro 11 Pro Max i11 X XR Xs Max 7plus 8plus 12Pro 12 Pro Max Ốp', 50525, 44462, 4200, 12, 'sp5.jpg', 'img1sp5-large.jpg'),
(6, 'Ốp Điện Thoại Da Sang Trọng Cho iphone 14 Pro Max 13 Pro Max i13 13pro 11 Pro Max i11 X XR Xs Max 7plus 8plus 12Pro 12 Pro Max', 47323, 41644, 5400, 5, 'sp6.jpg', 'img1sp6-large.jpg'),
(7, 'Ốp điện thoại in họa tiết THE NORTH FACE cho Iphone 13 promax 13 13pro 7 plus 8 plus 11 promax 11 X XS Max 12 pro Max i12 12pro XR', 98000, 86240, 10900, 12, 'sp7.jpg', 'img1sp7-large.jpg'),
(8, 'Ốp Điện Thoại Cho iphone 14 Pro Max i14 plus 13 Pro Max i13 13pro 11 Pro Max i11 X XR Xs Max 7 plus 8 plus 12Pro 12 Pro Max', 47323, 41644, 1000, 5, 'sp8.jpg', 'img1sp8-large.jpg'),
(9, 'Ốp Điện Thoại Da Họa Tiết graffiti iphone 14 Pro Max i14 14Pro 13 Pro Max i13 13pro 11 Pro Max i11 X XR Xs Max 7plus 8plus 12Pro 12 Pro Max', 43790, 38535, 157, 12, 'sp9.jpg', 'img1sp9-large.jpg'),
(10, 'Ốp Điện Thoại Da Cho iphone 14 Pro Max i14 14Pro 13 Pro Max i13 13pro 11 Pro Max i11 X XR Xs Max 7plus 8plus 12Pro 12 Pro Max', 44000, 38720, 2900, 15, 'sp10.jpg', 'img1sp10-large.jpg'),
(36, 'nha', 4400, 3872, 90, 18, 'img1sp5-large.jpg', 'img1sp4-large.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbuser`
--

INSERT INTO `tbuser` (`id`, `phone`, `password`, `fullname`) VALUES
(67, 999999999, 'Thang124', 'Quan ly'),
(68, 383384412, 'Thang123', 'thang thang');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbcart`
--
ALTER TABLE `tbcart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `id_cart_user` (`id`);

--
-- Chỉ mục cho bảng `tbshoppe`
--
ALTER TABLE `tbshoppe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbcart`
--
ALTER TABLE `tbcart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tbshoppe`
--
ALTER TABLE `tbshoppe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbcart`
--
ALTER TABLE `tbcart`
  ADD CONSTRAINT `tbcart_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbuser` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
