-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2023 lúc 05:03 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pttkht`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon`
--

CREATE TABLE `tbl_hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `mahd` varchar(8) NOT NULL,
  `makh` varchar(8) DEFAULT NULL,
  `mauser` varchar(8) DEFAULT NULL,
  `ngaylap` datetime DEFAULT NULL,
  `tongtien` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `id_khachhang` int(11) NOT NULL,
  `makh` varchar(8) NOT NULL,
  `tenkh` varchar(64) DEFAULT NULL,
  `sdt` varchar(16) DEFAULT NULL,
  `diachi` varchar(64) DEFAULT NULL,
  `gioitinh` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_kho`
--

CREATE TABLE `tbl_kho` (
  `id_kho` int(11) NOT NULL,
  `masp` varchar(8) NOT NULL,
  `slnhap` varchar(4) DEFAULT NULL,
  `slxuat` varchar(4) DEFAULT NULL,
  `ngaynhap` datetime DEFAULT NULL,
  `ngayxuat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ncc`
--

CREATE TABLE `tbl_ncc` (
  `id_ncc` int(11) NOT NULL,
  `mancc` varchar(8) NOT NULL,
  `tenncc` varchar(64) DEFAULT NULL,
  `sdt` varchar(16) DEFAULT NULL,
  `diachi` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `masp` varchar(8) NOT NULL,
  `tensp` varchar(64) DEFAULT NULL,
  `mancc` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanphamban`
--

CREATE TABLE `tbl_sanphamban` (
  `id_sanphamban` int(11) NOT NULL,
  `masp` varchar(8) NOT NULL,
  `mahd` varchar(8) DEFAULT NULL,
  `soluong` varchar(4) DEFAULT NULL,
  `gia` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `mauser` varchar(8) NOT NULL,
  `tenuser` varchar(64) DEFAULT NULL,
  `diachi` varchar(64) DEFAULT NULL,
  `sdt` varchar(16) DEFAULT NULL,
  `chucvu` varchar(32) DEFAULT NULL,
  `gioitinh` varchar(4) DEFAULT NULL,
  `tendangnhap` varchar(16) NOT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `makh` (`makh`),
  ADD KEY `mauser` (`mauser`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `tbl_kho`
--
ALTER TABLE `tbl_kho`
  ADD PRIMARY KEY (`masp`);

--
-- Chỉ mục cho bảng `tbl_ncc`
--
ALTER TABLE `tbl_ncc`
  ADD PRIMARY KEY (`mancc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `mancc` (`mancc`);

--
-- Chỉ mục cho bảng `tbl_sanphamban`
--
ALTER TABLE `tbl_sanphamban`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `mahd` (`mahd`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`mauser`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD CONSTRAINT `tbl_hoadon_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `tbl_khachhang` (`makh`),
  ADD CONSTRAINT `tbl_hoadon_ibfk_2` FOREIGN KEY (`mauser`) REFERENCES `tbl_user` (`mauser`);

--
-- Các ràng buộc cho bảng `tbl_kho`
--
ALTER TABLE `tbl_kho`
  ADD CONSTRAINT `tbl_kho_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `tbl_sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`mancc`) REFERENCES `tbl_ncc` (`mancc`);

--
-- Các ràng buộc cho bảng `tbl_sanphamban`
--
ALTER TABLE `tbl_sanphamban`
  ADD CONSTRAINT `tbl_sanphamban_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `tbl_sanpham` (`masp`),
  ADD CONSTRAINT `tbl_sanphamban_ibfk_2` FOREIGN KEY (`mahd`) REFERENCES `tbl_hoadon` (`mahd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
