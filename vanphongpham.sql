-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 21, 2022 lúc 06:55 AM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vanphongpham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `maadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`maadmin`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`maadmin`, `username`, `password`, `email`, `status`) VALUES
(1, 'phamanhthi', '123456', 'dh51802009@student.stu.edu.vn', 0),
(2, 'tranvantruong', '123456', 'dh51800041@student.stu.edu.vn', 0),
(3, 'phamduclong', '123456', 'lpham776@gmail.com', 0),
(4, 'lenguyenanhtien', '123456', 'lenguyenanhtien@gmail.com', 0),
(5, 'phanlehunhan', '123456', 'phannhan3025@gmail.com', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

DROP TABLE IF EXISTS `giohang`;
CREATE TABLE IF NOT EXISTS `giohang` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahoadon` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` double NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`masp`,`mahoadon`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`masp`, `tensp`, `mahoadon`, `soluong`, `gia`, `status`) VALUES
(1, 'Bộ giấy note heo', 10, 6, 15000, 0),
(3, 'Ốp lưng cô gái hoa', 10, 7, 45000, 0),
(4, 'Combo đen huyền bí', 0, 1, 350000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gopy`
--

DROP TABLE IF EXISTS `gopy`;
CREATE TABLE IF NOT EXISTS `gopy` (
  `magopy` int(255) NOT NULL AUTO_INCREMENT,
  `makhachhang` int(11) DEFAULT NULL,
  `hoten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`magopy`),
  KEY `FK_makhachhang` (`makhachhang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `mahoadon` int(11) NOT NULL AUTO_INCREMENT,
  `ngaylap` date NOT NULL,
  `tongtien` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `makh` int(11) NOT NULL,
  `hoten_kh` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt_kh` int(10) NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:chờ xác nhận,1:chờ lấy hàng,2:đang giao,3:đã giao,4:đã hủy',
  PRIMARY KEY (`mahoadon`,`makh`),
  KEY `makh` (`makh`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahoadon`, `ngaylap`, `tongtien`, `makh`, `hoten_kh`, `sdt_kh`, `diachi`, `trangthai`) VALUES
(1, '2022-03-17', '350000', 3, 'Phan Lê Hữu Nhân', 332582409, '', 1),
(10, '2022-03-20', '490,050.00', 6, 'Phạm Đức Long', 971126374, '180 Cao Lỗ, Phường 4, Quận 8', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `makhachhang` int(11) NOT NULL AUTO_INCREMENT,
  `hotenkhachhang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`makhachhang`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makhachhang`, `hotenkhachhang`, `sdt`, `email`, `password`, `status`) VALUES
(3, 'Phan Lê Hữu Nhân', '0332582409', 'phannhan3025@gmail.com', '123456', 0),
(4, 'Lê Nguyễn Ánh Tiên', '0349970011', 'anhtien0010@gmail.com', '123456', 0),
(5, 'Phạm Đức Long', '0971126374', 'kevil_mitnick@yahoo.com', '123456', 0),
(6, 'Phạm Đức Long', '0971126374', 'lpham776@gmail.com', '123456', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

DROP TABLE IF EXISTS `loai`;
CREATE TABLE IF NOT EXISTS `loai` (
  `maloai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenloai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`maloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `status`) VALUES
('a', 'abc', 1),
('gb', 'Gấu bông', 0),
('pkdt', 'Phụ kiện điện thoại', 0),
('qt', 'Quà tặng', 0),
('vpp', 'Văn phòng phẩm', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `masanpham` int(11) NOT NULL AUTO_INCREMENT,
  `tensanpham` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loaisanpham` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` double NOT NULL,
  `hinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`masanpham`,`loaisanpham`),
  KEY `loaisanpham` (`loaisanpham`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `tensanpham`, `loaisanpham`, `gia`, `hinh`, `mota`, `status`) VALUES
(1, 'Bộ giấy note heo', 'vpp', 15000, 'product2.jpg', 'Bộ giấy note mang nhiều màu sắc dễ thương mang đến cảm hứng học cho bạn.', 0),
(2, 'Vịt bông vàng', 'gb', 150000, 'product17.jpg', 'Vịt bông vàng sẽ mang đến cho bạn cảm giác có bạn đồng hành trong cuộc sống.', 0),
(3, 'Ốp lưng cô gái hoa', 'pkdt', 45000, 'product14.jpg', 'Ốp lưng điện thoại hình cô gái hoa vừa nhẹ nhàng nữ tính vừa hiện đại.', 0),
(4, 'Combo đen huyền bí', 'qt', 350000, 'product1.jpg', 'Combo bao gồm ly nước 500ml, móc khóa cùng một số vật dụng khác.', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masanpham`);

--
-- Các ràng buộc cho bảng `gopy`
--
ALTER TABLE `gopy`
  ADD CONSTRAINT `FK_makhachhang` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`makhachhang`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makhachhang`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`loaisanpham`) REFERENCES `loai` (`maloai`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
