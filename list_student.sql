-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 12, 2022 lúc 08:21 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_student`
--

CREATE TABLE `list_student` (
  `STT` int(20) NOT NULL,
  `ma_ho_so` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_sinh_vien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_sinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_sinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmnd_cccd` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hanh_dong` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `list_student`
--

INSERT INTO `list_student` (`STT`, `ma_ho_so`, `ma_sinh_vien`, `ho`, `ten`, `gioi_tinh`, `ngay_sinh`, `SDT`, `Email`, `noi_sinh`, `cmnd_cccd`, `dia_chi`, `hanh_dong`) VALUES
(0, '432423422343', '234324324324', 'Nguyễn', 'Duy Anh', 'Nam', '2022-03-23', '0272839328', 'duyanh@gmail.com', 'Vĩnh Phúc', '324342423424', '15A Tạ Quang Bửu', ''),
(0, '342423423423', '2343542323266', 'Phạm', 'Quỳnh Anh', 'Nam', '2022-03-11', '0389387465', 'qa01918@gmail.com', 'TP HCM', '353414141241', '69 Hàng Gai', ''),
(0, '2342342334', '2423423423434', 'Trần ', 'Quang ', 'Nam', '2022-03-11', '0387243234', 'quangtran123@gmail.com', 'Long An', '34534253245', '11 Thịnh Hào 1', ''),
(1, '12353532132', '32332422321', 'Nguyễn ', 'Thanh Tùng', 'Nam', '1999-07-12', '0837293748', 'tungnguyen@gmail.com', 'Hải Phòng', '789348249921', '99 Trường Chinh', ''),
(0, '1235345123221', '3233442213123', 'Phạm ', 'Hoàng Anh', 'Nam', '1997-09-12', '0837283725', 'hoanganh12@gmail.com', 'Đồng Nai', '423525232452', '101 Hồ Tùng Mậu', ''),
(0, '323423432423', '344514255242', 'Dương ', 'Minh Tú', 'Nam', '2022-03-16', '0927384637', 'minhtu12@gmail.com', 'Lâm Đồng', '4252523234234', '60 Trần Nhật Duật', ''),
(0, '412123122131', '835322424334', 'Nguyễn', 'Hà Phương ', 'Nam', '2022-03-17', '0917385683', 'phuong0911@gmail.com', 'Hà Nội', '342343242342', '56 Trần Quốc Toản', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `list_student`
--
ALTER TABLE `list_student`
  ADD PRIMARY KEY (`ma_sinh_vien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
