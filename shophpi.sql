-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 23, 2022 lúc 05:19 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shophpi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhsanpham`
--

CREATE TABLE `anhsanpham` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `linkanh` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `anhsanpham`
--

INSERT INTO `anhsanpham` (`id`, `id_sanpham`, `linkanh`) VALUES
(1, 1, 'https://static.chotot.com/storage/chotot-kinhnghiem/c2c/2020/07/iphone-6s-ra-doi-nam-nao-1.jpg'),
(2, 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHI_d8GrAocqTfrhUXw5t4roIKqaLQRMn9IHDg0euDvR0NPcTV5Ain6dsnH7Y1y125tUA&usqp=CAU'),
(3, 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCWc74TOPrWQ98PFFIWINMaBDiD0GMO97VpUeMWGsfi5XO6BCySZ5EuE12qv8RKFir4V8&usqp=CAU');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongsanpham`
--

CREATE TABLE `dongsanpham` (
  `id` int(11) NOT NULL,
  `dongsp` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_loaisp` int(11) NOT NULL,
  `id_hangsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dongsanpham`
--

INSERT INTO `dongsanpham` (`id`, `dongsp`, `id_loaisp`, `id_hangsp`) VALUES
(1, 'Iphone 6', 1, 1),
(2, 'Iphone 7', 1, 1),
(3, 'Samsung Fold 3', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsanpham`
--

CREATE TABLE `hangsanpham` (
  `id` int(11) NOT NULL,
  `id_loaisp` int(11) NOT NULL,
  `tenhang` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `logo` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hangsanpham`
--

INSERT INTO `hangsanpham` (`id`, `id_loaisp`, `tenhang`, `logo`) VALUES
(1, 1, 'Apple', 'https://bloganchoi.com/wp-content/uploads/2021/04/apple-logo.jpg'),
(2, 1, 'SamSung', 'https://images.samsung.com/is/image/samsung/assets/vn/about-us/brand/logo/mo/256_144_3.png?$512_N_PNG$'),
(3, 2, 'Asus', 'https://phucgia.com.vn/wp-content/uploads/2020/03/logo-Asus.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` int(11) NOT NULL,
  `tenloaisp` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thongso` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `anh` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `tenloaisp`, `thongso`, `anh`) VALUES
(1, 'Điện Thoại', 'Màu sắc,Tình trạng, Dung lượng', 'https://www.clipartmax.com/png/middle/246-2461247_phone-call-icon-clipart-panda-icon-%C4%91i%E1%BB%87n-tho%E1%BA%A1i-di-%C4%91%E1%BB%99ng.png'),
(2, 'Laptop', 'Bộ xử lý, Ram, Ổ cứng, Loại ổ cứng, Card màn hình, Kích cỡ màn hình', 'https://png.pngtree.com/png-vector/20190228/ourlarge/pngtree-laptop-glyph-black-icon-png-image_709558.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `tieude` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `giatien` int(12) NOT NULL,
  `ngaytao` datetime NOT NULL,
  `diachi` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_loaisp` int(11) NOT NULL,
  `id_hangsp` int(11) NOT NULL,
  `id_dongsp` int(11) NOT NULL,
  `baohanh` int(3) NOT NULL,
  `taikhoan` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mota` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `trangthai` int(2) NOT NULL,
  `thongso` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tieude`, `giatien`, `ngaytao`, `diachi`, `id_loaisp`, `id_hangsp`, `id_dongsp`, `baohanh`, `taikhoan`, `mota`, `trangthai`, `thongso`) VALUES
(1, 'Apple 6s hàng tồn kho', 5000000, '2022-03-08 15:35:29', 'Cầu giấy', 1, 1, 1, 0, 'User1', '', 0, '- Thiết kế đẹp mắt <br>\r\n- Bảo hành lâu dài'),
(2, 'samsung fold 3 gia re nhu tang', 8500000, '2022-03-14 10:26:56', 'cau giay', 1, 2, 3, 0, 'Admin', '123', 0, '999');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tentaikhoan` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tenkhachhang` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sodienthoai` varchar(11) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaytao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`tentaikhoan`, `matkhau`, `tenkhachhang`, `sodienthoai`, `diachi`, `ngaytao`) VALUES
('Admin', '1', 'Admin', '0', '', '2022-03-17'),
('User1', '1', 'Triệu Vân', '0982636598', 'Cầu giấy', '2022-03-17');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anhsanpham`
--
ALTER TABLE `anhsanpham`
  ADD PRIMARY KEY (`id`,`id_sanpham`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `dongsanpham`
--
ALTER TABLE `dongsanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loaisp` (`id_loaisp`,`id_hangsp`),
  ADD KEY `id_hangsp` (`id_hangsp`);

--
-- Chỉ mục cho bảng `hangsanpham`
--
ALTER TABLE `hangsanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loaisp` (`id_loaisp`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anh` (`id_loaisp`,`id_hangsp`,`taikhoan`),
  ADD KEY `id_dongsp` (`id_dongsp`),
  ADD KEY `id_hangsp` (`id_hangsp`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`tentaikhoan`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anhsanpham`
--
ALTER TABLE `anhsanpham`
  ADD CONSTRAINT `anhsanpham_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `dongsanpham`
--
ALTER TABLE `dongsanpham`
  ADD CONSTRAINT `dongsanpham_ibfk_1` FOREIGN KEY (`id_loaisp`) REFERENCES `loaisanpham` (`id`),
  ADD CONSTRAINT `dongsanpham_ibfk_2` FOREIGN KEY (`id_hangsp`) REFERENCES `hangsanpham` (`id`);

--
-- Các ràng buộc cho bảng `hangsanpham`
--
ALTER TABLE `hangsanpham`
  ADD CONSTRAINT `hangsanpham_ibfk_1` FOREIGN KEY (`id_loaisp`) REFERENCES `loaisanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_loaisp`) REFERENCES `loaisanpham` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`id_dongsp`) REFERENCES `dongsanpham` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`id_hangsp`) REFERENCES `hangsanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
