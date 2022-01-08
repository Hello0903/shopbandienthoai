-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 08, 2022 lúc 10:10 AM
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
-- Cơ sở dữ liệu: `shopbandienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dungluong`
--

CREATE TABLE `dungluong` (
  `id` int(10) NOT NULL,
  `dungluong` int(10) NOT NULL,
  `giatien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dungluong`
--

INSERT INTO `dungluong` (`id`, `dungluong`, `giatien`) VALUES
(1, 64, 999),
(2, 256, 1234),
(1, 128, 1234);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(10) NOT NULL,
  `tenloai` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'tên hãng sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id`, `tenloai`) VALUES
(1, 'Apple'),
(2, 'SamSung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `id_mau` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `anh` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`id_mau`, `anh`, `id`) VALUES
('color bg-dark', 'https://smartgadgets139.co.za/wp-content/uploads/2020/02/images-4.jpeg', 1),
('color bg-dark', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvjzhEhHhLNSs0p8k2ctuD6DszeTf_EIUj6JefpaoC2cqjvxOxkM25q-DG2lTPCzrvllo&usqp=CAU', 2),
('color bg-warning ', 'https://product.hstatic.net/1000403181/product/iphone-xs-max-gold_e0991f9b8ac94ad0b9f7cf43b8466827_master.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `ten` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_loaisp` int(10) NOT NULL,
  `giaban` int(11) NOT NULL,
  `giamgia` int(11) NOT NULL,
  `id_mamau` int(10) NOT NULL,
  `id_dungluong` int(10) NOT NULL,
  `thongso` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `id_loaisp`, `giaban`, `giamgia`, `id_mamau`, `id_dungluong`, `thongso`) VALUES
(1, 'iPhone Xs Quốc tế', 1, 0, 0, 1, 1, 'RAM 4GB| ROM tối đa 512GB| Chuẩn chống nước, chống bụi IP68 | Trang bị tính năng Dual-Sim  Chip A12 Bionic trên tiến trình 7 nm | Dung lượng pin là 3174 mAh| Công nghệ FaceID được cải tiến'),
(2, 'SamSung Fold', 2, 0, 0, 2, 2, ' Galaxy Z Fold3 5G được tích hợp chip Snapdragon 888| RAM 12 GB và bộ nhớ 256 GB hoặc 512 GB Cung cấp năng lượng cho Samsung Z Fold3 là viên pin 4.400 mAh| tần số quét 120 Hz, mang đến trải nghiệm tối ưu hơn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dungluong`
--
ALTER TABLE `dungluong`
  ADD KEY `id` (`id`,`dungluong`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`id_mau`,`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_mau` (`id_mau`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ten`),
  ADD KEY `id_loaisp` (`id_loaisp`),
  ADD KEY `id_mamau` (`id_mamau`),
  ADD KEY `id_dungluong` (`id_dungluong`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_loaisp`) REFERENCES `loaisp` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`id_dungluong`) REFERENCES `dungluong` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_4` FOREIGN KEY (`id_mamau`) REFERENCES `mausac` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
