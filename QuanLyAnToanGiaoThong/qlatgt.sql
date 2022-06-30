-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 30, 2022 lúc 06:28 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

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
(1, 'Cán bộ Cảnh sát giao thông', 'Cán bộ Cảnh sát giao thông'),
(2, 'Nhân viên thuế', 'Nhân viên thuế'),
(5, 'Thủ trưởng đơn vị', 'Thủ trưởng đơn vị'),
(6, 'Admin', 'Admin');

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
(1, 'Xe không có biển số', 'VI phạm giao thông đường bộ', 1),
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
(1, 'Phòng Cảnh sát giao thông - Công an Đà Nẵng', 1),
(2, 'Đội cảnh sát giao thông - Công an quận Thanh Khê', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_26_161542_create_taikhoans_table', 1),
(6, '2022_06_27_162306_create_sessions_table', 1);

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
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `madangnhap` varchar(255) CHARACTER SET utf8 NOT NULL,
  `quyen` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`maTaiKhoan`, `hoten`, `ngaysinh`, `diachi`, `sodienthoai`, `idchucvu`, `iddonvi`, `matkhau`, `madangnhap`, `quyen`) VALUES
(5, 'Thanh Thảo', '2022-06-08', 'sdsd', '12345566', '1', '1', 'e10adc3949ba59abbe56e057f20f883e', '2', 1),
(6, 'ds', '2022-06-10', 'dss', '12345667', '6', '1', 'e10adc3949ba59abbe56e057f20f883e', '3', 2),
(7, '1', '2022-06-23', '1', '1', '6', '1', 'e10adc3949ba59abbe56e057f20f883e', '1', 2),
(9, 'Nguyễn Thị Phi Thương', '2001-02-16', '02 Thanh Sơn, Thanh Bình, Hải Châu', '0375191332', '1', '2', 'e10adc3949ba59abbe56e057f20f883e', 'broombroom', 1),
(10, 'Lê Tấn Tài', '1989-02-15', '02 Thanh Sơn, Thanh Bình, Hải Châu', '0647841355', '2', '2', 'e10adc3949ba59abbe56e057f20f883e', 'nvt123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoans`
--

CREATE TABLE `taikhoans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
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
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `phuongtien`
--
ALTER TABLE `phuongtien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_phuongtien__idchuphuongtien` (`idchuphuongtien`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maTaiKhoan`);

--
-- Chỉ mục cho bảng `taikhoans`
--
ALTER TABLE `taikhoans`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nghidinh`
--
ALTER TABLE `nghidinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `maTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `taikhoans`
--
ALTER TABLE `taikhoans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietvanban`
--
ALTER TABLE `chitietvanban`
  ADD CONSTRAINT `FK_chitietvanban__idloaivanban` FOREIGN KEY (`idloaivanban`) REFERENCES `loaivanbandinhkem` (`id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
