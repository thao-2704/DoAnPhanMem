-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 26, 2022 lúc 11:53 AM
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
-- Cơ sở dữ liệu: `qlatgt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietvanban`
--

CREATE TABLE `chitietvanban` (
  `id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nhan` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8 NOT NULL,
  `loaidauvao` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idloaivanban` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`id`, `ten`, `mota`) VALUES
(1, 'acb', 'abc'),
(2, 'bcd', 'bcd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `ten_dm` varchar(255) NOT NULL,
  `noidung` longtext NOT NULL,
  `idnghidinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten_dm`, `noidung`, `idnghidinh`) VALUES
(1, 'Vượt đèn đỏ', 'VI phạm giao thông đường bộ', 1),
(3, 'e', 'ew', 1),
(4, 'Vượt đèn đỏ', 's', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dieuluat`
--

CREATE TABLE `dieuluat` (
  `id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 NOT NULL,
  `noidung` longtext NOT NULL,
  `idmuc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `doituongapdung` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvi`
--

CREATE TABLE `donvi` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `cap` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donvi`
--

INSERT INTO `donvi` (`id`, `ten`, `cap`) VALUES
(1, 'abc', 1),
(2, 'def', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoan`
--

CREATE TABLE `khoan` (
  `id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mucphatmin` int(11) NOT NULL,
  `iddieuluat` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sothutu` int(11) NOT NULL,
  `mucphatmax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaivanbandinhkem`
--

CREATE TABLE `loaivanbandinhkem` (
  `id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nghidinh`
--

CREATE TABLE `nghidinh` (
  `id` int(11) NOT NULL,
  `so` int(11) NOT NULL,
  `ten_nghidinh` varchar(255) NOT NULL,
  `ngay_banhanh` date NOT NULL,
  `coquanbanhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nghidinh`
--

INSERT INTO `nghidinh` (`id`, `so`, `ten_nghidinh`, `ngay_banhanh`, `coquanbanhanh`) VALUES
(1, 654, 'Vi phạm hành chính', '2022-06-01', 'Uỷ ban nhân dân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoivipham`
--

CREATE TABLE `nguoivipham` (
  `id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `hovaten` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cmnd` varchar(15) CHARACTER SET utf8 NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noidungvanban`
--

CREATE TABLE `noidungvanban` (
  `id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idchitietvanban` varchar(255) CHARACTER SET utf8 NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idvanban` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongtien`
--

CREATE TABLE `phuongtien` (
  `id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `loaiphuongtien` varchar(255) CHARACTER SET utf8 NOT NULL,
  `bienso` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idchuphuongtien` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `maTaiKhoan` int(11) NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sodienthoai` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idchucvu` varchar(255) CHARACTER SET utf8 NOT NULL,
  `iddonvi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `matkhau` varchar(255) CHARACTER SET utf8 NOT NULL,
  `madangnhap` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`maTaiKhoan`, `hoten`, `ngaysinh`, `diachi`, `sodienthoai`, `idchucvu`, `iddonvi`, `matkhau`, `madangnhap`) VALUES
(4, 'thảo', '2022-06-26', '1', '1', '2', '1', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(5, '2', '2022-06-08', 'sdsd', '12345566', '1', '1', 'e10adc3949ba59abbe56e057f20f883e', '2'),
(6, 'ds', '2022-06-10', 'dss', '12345667', '1', '1', 'e10adc3949ba59abbe56e057f20f883e', '3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vanbandinhkem`
--

CREATE TABLE `vanbandinhkem` (
  `id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idvuvipham` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idloaivanban` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ngaytao` date NOT NULL,
  `trangthai` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vuvipham`
--

CREATE TABLE `vuvipham` (
  `id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idphuongtien` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mota` longtext NOT NULL,
  `thoigian` date NOT NULL,
  `phuongthucphathien` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tinhtrangxuly` varchar(100) CHARACTER SET utf8 NOT NULL,
  `idtaikhoan` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idmuc` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietvanban`
--
ALTER TABLE `chitietvanban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_chitietvanban__idloaivanban` (`idloaivanban`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dieuluat`
--
ALTER TABLE `dieuluat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_dieuluat__idmuc` (`idmuc`);

--
-- Chỉ mục cho bảng `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khoan`
--
ALTER TABLE `khoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_khoan__iddieuluat` (`iddieuluat`);

--
-- Chỉ mục cho bảng `loaivanbandinhkem`
--
ALTER TABLE `loaivanbandinhkem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nghidinh`
--
ALTER TABLE `nghidinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoivipham`
--
ALTER TABLE `nguoivipham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `noidungvanban`
--
ALTER TABLE `noidungvanban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_noidungvanban__idchitietvanban` (`idchitietvanban`),
  ADD KEY `FK_noidungvanban__idvanban` (`idvanban`);

--
-- Chỉ mục cho bảng `phuongtien`
--
ALTER TABLE `phuongtien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_phuongtien__idchuphuongtien` (`idchuphuongtien`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maTaiKhoan`);

--
-- Chỉ mục cho bảng `vanbandinhkem`
--
ALTER TABLE `vanbandinhkem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_vanbandinhkem__idvuvipham` (`idvuvipham`),
  ADD KEY `FK_vanbandinhkem__idloaivanban` (`idloaivanban`);

--
-- Chỉ mục cho bảng `vuvipham`
--
ALTER TABLE `vuvipham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_vuvipham__idphuongtien` (`idphuongtien`),
  ADD KEY `FK_vuvipham__idtaikhoan` (`idtaikhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `donvi`
--
ALTER TABLE `donvi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nghidinh`
--
ALTER TABLE `nghidinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `maTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietvanban`
--
ALTER TABLE `chitietvanban`
  ADD CONSTRAINT `FK_chitietvanban__idloaivanban` FOREIGN KEY (`idloaivanban`) REFERENCES `loaivanbandinhkem` (`id`);

--
-- Các ràng buộc cho bảng `dieuluat`
--
ALTER TABLE `dieuluat`
  ADD CONSTRAINT `FK_dieuluat__idmuc` FOREIGN KEY (`idmuc`) REFERENCES `muc` (`id`);

--
-- Các ràng buộc cho bảng `khoan`
--
ALTER TABLE `khoan`
  ADD CONSTRAINT `FK_khoan__iddieuluat` FOREIGN KEY (`iddieuluat`) REFERENCES `dieuluat` (`id`);

--
-- Các ràng buộc cho bảng `noidungvanban`
--
ALTER TABLE `noidungvanban`
  ADD CONSTRAINT `FK_noidungvanban__idchitietvanban` FOREIGN KEY (`idchitietvanban`) REFERENCES `chitietvanban` (`id`),
  ADD CONSTRAINT `FK_noidungvanban__idvanban` FOREIGN KEY (`idvanban`) REFERENCES `vanbandinhkem` (`id`);

--
-- Các ràng buộc cho bảng `phuongtien`
--
ALTER TABLE `phuongtien`
  ADD CONSTRAINT `FK_phuongtien__idchuphuongtien` FOREIGN KEY (`idchuphuongtien`) REFERENCES `nguoivipham` (`id`);

--
-- Các ràng buộc cho bảng `vanbandinhkem`
--
ALTER TABLE `vanbandinhkem`
  ADD CONSTRAINT `FK_vanbandinhkem__idloaivanban` FOREIGN KEY (`idloaivanban`) REFERENCES `loaivanbandinhkem` (`id`),
  ADD CONSTRAINT `FK_vanbandinhkem__idvuvipham` FOREIGN KEY (`idvuvipham`) REFERENCES `vuvipham` (`id`);

--
-- Các ràng buộc cho bảng `vuvipham`
--
ALTER TABLE `vuvipham`
  ADD CONSTRAINT `FK_vuvipham__idphuongtien` FOREIGN KEY (`idphuongtien`) REFERENCES `phuongtien` (`id`),
  ADD CONSTRAINT `FK_vuvipham__idtaikhoan` FOREIGN KEY (`idtaikhoan`) REFERENCES `taikhoan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
