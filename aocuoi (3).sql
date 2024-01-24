-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2024 at 09:23 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aocuoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anhsp`
--

CREATE TABLE `tb_anhsp` (
  `id_anh` int(11) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `id_san_pham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_baidang`
--

CREATE TABLE `tb_baidang` (
  `id_bai_dang` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ngay_dang` date NOT NULL,
  `path` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_baidang`
--

INSERT INTO `tb_baidang` (`id_bai_dang`, `tieu_de`, `noi_dung`, `ngay_dang`, `path`, `username`, `trangthai`) VALUES
(1, 'gdfb vfdrg', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_binhluan`
--

CREATE TABLE `tb_binhluan` (
  `id_binh_luan` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_binh_luan` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `id_san_pham` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_chitiet_donhang`
--

CREATE TABLE `tb_chitiet_donhang` (
  `id_don_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `tong_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_danhgia`
--

CREATE TABLE `tb_danhgia` (
  `id_danh_gia` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_them` date NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `so_sao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `id_danh_muc` int(11) NOT NULL,
  `mo_ta` text NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`id_danh_muc`, `mo_ta`, `path`) VALUES
(3, 'f', 'Screenshot (439).png'),
(4, 'moden', 'Screenshot 2024-01-05 214304.png'),
(5, 'f', 'Screenshot 2024-01-05 174233.png'),
(6, 'frefre', 'Screenshot 2024-01-08 091840.png'),
(7, 'f', 'Screenshot 2024-01-08 085104.png'),
(8, 'frefre', 'Screenshot 2024-01-14 141618.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_donhang`
--

CREATE TABLE `tb_donhang` (
  `id_donhang` int(11) NOT NULL,
  `ngay_dat` date NOT NULL,
  `tong_gia` int(11) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `phuong_thuc_tt` varchar(255) NOT NULL,
  `ten_nguoi_mua` varchar(255) NOT NULL,
  `dien_thoai` int(11) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_khachhang`
--

CREATE TABLE `tb_khachhang` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `ten_khach_hang` varchar(255) DEFAULT NULL,
  `dien_thoai` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `quyen_han` varchar(255) DEFAULT NULL,
  `trang_thai` varchar(255) DEFAULT NULL,
  `option` varchar(255) DEFAULT NULL,
  `ma_xac_nhan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_khachhang`
--

INSERT INTO `tb_khachhang` (`username`, `password`, `ten_khach_hang`, `dien_thoai`, `email`, `dia_chi`, `quyen_han`, `trang_thai`, `option`, `ma_xac_nhan`) VALUES
('a', 'a', 'a', 837862, 'a', 'a', 'a', 'a', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lienhe`
--

CREATE TABLE `tb_lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dien_thoai` varchar(255) NOT NULL,
  `ten_khach_hang` varchar(255) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `loai_dich_vu` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_lienhe`
--

INSERT INTO `tb_lienhe` (`id_lienhe`, `noi_dung`, `username`, `email`, `dien_thoai`, `ten_khach_hang`, `id_san_pham`, `loai_dich_vu`, `trang_thai`) VALUES
(2, '11', 'a', '111', 'qqqqq', 'qqqqq', 2, 'qqqqqqqqq', 'qqq');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `id_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(255) DEFAULT NULL,
  `gia_san_pham` float DEFAULT NULL,
  `img_path_default` varchar(255) DEFAULT NULL,
  `mo_ta_san_pham` text,
  `ma_san_pham` varchar(255) DEFAULT NULL,
  `id_danh_muc` int(11) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `toption` int(11) DEFAULT NULL,
  `khuyen_mai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`id_san_pham`, `ten_san_pham`, `gia_san_pham`, `img_path_default`, `mo_ta_san_pham`, `ma_san_pham`, `id_danh_muc`, `so_luong`, `toption`, `khuyen_mai`) VALUES
(2, 'modenq', 1111110, '', '11qqq1111112', '11111112', 3, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anhsp`
--
ALTER TABLE `tb_anhsp`
  ADD KEY `ik_tb_anhsp_tb_sanpham` (`id_san_pham`);

--
-- Indexes for table `tb_baidang`
--
ALTER TABLE `tb_baidang`
  ADD PRIMARY KEY (`id_bai_dang`),
  ADD KEY `il_tb_baidang_tb_khachhang` (`username`);

--
-- Indexes for table `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD PRIMARY KEY (`id_binh_luan`),
  ADD KEY `ik_tb_binhluan_tb_khachhang` (`username`),
  ADD KEY `ik_tb_binhluan_tb_sanpham` (`id_san_pham`);

--
-- Indexes for table `tb_chitiet_donhang`
--
ALTER TABLE `tb_chitiet_donhang`
  ADD PRIMARY KEY (`id_don_hang`),
  ADD KEY `ik_tb_chitiet_donhang_tb_sanpham` (`id_san_pham`);

--
-- Indexes for table `tb_danhgia`
--
ALTER TABLE `tb_danhgia`
  ADD PRIMARY KEY (`id_danh_gia`),
  ADD KEY `ik_tb_danhgia_tb_sanpham` (`id_san_pham`),
  ADD KEY `ik_tb_danhgia_tb_khachhang` (`username`);

--
-- Indexes for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`id_danh_muc`);

--
-- Indexes for table `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `ik_tb_donhang_tb_khachhang` (`username`);

--
-- Indexes for table `tb_khachhang`
--
ALTER TABLE `tb_khachhang`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  ADD PRIMARY KEY (`id_lienhe`),
  ADD KEY `ik_tb_lienhe_tb_khachhang` (`username`),
  ADD KEY `ik_tb_lienhe_tb_sanpham` (`id_san_pham`);

--
-- Indexes for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`id_san_pham`),
  ADD KEY `ik_tb_sanpham_tb_danhmuc` (`id_danh_muc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_baidang`
--
ALTER TABLE `tb_baidang`
  MODIFY `id_bai_dang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_chitiet_donhang`
--
ALTER TABLE `tb_chitiet_donhang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_danhgia`
--
ALTER TABLE `tb_danhgia`
  MODIFY `id_danh_gia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `id_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_donhang`
--
ALTER TABLE `tb_donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anhsp`
--
ALTER TABLE `tb_anhsp`
  ADD CONSTRAINT `ik_tb_anhsp_tb_sanpham` FOREIGN KEY (`id_san_pham`) REFERENCES `tb_sanpham` (`id_san_pham`);

--
-- Constraints for table `tb_baidang`
--
ALTER TABLE `tb_baidang`
  ADD CONSTRAINT `il_tb_baidang_tb_khachhang` FOREIGN KEY (`username`) REFERENCES `tb_khachhang` (`username`);

--
-- Constraints for table `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD CONSTRAINT `ik_tb_binhluan_tb_khachhang` FOREIGN KEY (`username`) REFERENCES `tb_khachhang` (`username`),
  ADD CONSTRAINT `ik_tb_binhluan_tb_sanpham` FOREIGN KEY (`id_san_pham`) REFERENCES `tb_sanpham` (`id_san_pham`);

--
-- Constraints for table `tb_chitiet_donhang`
--
ALTER TABLE `tb_chitiet_donhang`
  ADD CONSTRAINT `ik_tb_chitiet_donhang_tb_sanpham` FOREIGN KEY (`id_san_pham`) REFERENCES `tb_sanpham` (`id_san_pham`);

--
-- Constraints for table `tb_danhgia`
--
ALTER TABLE `tb_danhgia`
  ADD CONSTRAINT `ik_tb_danhgia_tb_khachhang` FOREIGN KEY (`username`) REFERENCES `tb_khachhang` (`username`);

--
-- Constraints for table `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD CONSTRAINT `ik_tb_donhang_tb_khachhang` FOREIGN KEY (`username`) REFERENCES `tb_khachhang` (`username`);

--
-- Constraints for table `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  ADD CONSTRAINT `ik_tb_lienhe_tb_khachhang` FOREIGN KEY (`username`) REFERENCES `tb_khachhang` (`username`),
  ADD CONSTRAINT `ik_tb_lienhe_tb_sanpham` FOREIGN KEY (`id_san_pham`) REFERENCES `tb_sanpham` (`id_san_pham`);

--
-- Constraints for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD CONSTRAINT `ik_tb_sanpham_tb_danhmuc` FOREIGN KEY (`id_danh_muc`) REFERENCES `tb_danhmuc` (`id_danh_muc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
