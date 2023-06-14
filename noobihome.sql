-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2023 lúc 10:10 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `noobihome`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Hello', 'Noobihome Xin chào.'),
(2, 'Áo thun nam', 'Danh mục Áo thun nam:<a href=\"http://localhost/testnoobi/danhmuc/loaidanhmucsanpham/3\">Áo thun nam</a>\n'),
(3, 'Thời trang nam', 'Bấm vào link này nhé: </br>\n            <a href=\"http://localhost/testnoobi/danhmuc/danhmucsanpham/1\">Thời Trang nam</a>'),
(4, 'Áo sơ mi', 'Link1: <br>\n<a href=\"http://localhost/testnoobi/danhmuc/loaidanhmucsanpham/1\">Áo sơ mi nam</a><br>Link2: \n <a href=\"http://localhost/testnoobi/danhmuc/loaidanhmucsanpham/2\"><br>Áo sơ mi nữ</a>'),
(5, 'Thông tin sản phẩm', '- Hình ảnh được chụp 100% từ sản phẩm thật, dưới ánh sáng tự nhiên và không qua chỉnh sửa để đảm bảo màu sắc trung thực nhất có thể (không tránh khỏi sai lệch từ 10-20% do thiết bị hiển thị).\r\n\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdh`
--

CREATE TABLE `ctdh` (
  `id_ctdh` int(11) NOT NULL,
  `idtk` int(11) NOT NULL,
  `idSp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `thanhtien` float NOT NULL,
  `iddonhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ctdh`
--

INSERT INTO `ctdh` (`id_ctdh`, `idtk`, `idSp`, `soluong`, `dongia`, `thanhtien`, `iddonhang`) VALUES
(229, 1, 1, 1, 179000, 179000, 324),
(230, 1, 3, 1, 229000, 229000, 324),
(231, 1, 7, 1, 222, 222, 324),
(236, 6, 1, 2, 179000, 358000, 328),
(237, 6, 3, 2, 229000, 458000, 329),
(238, 6, 1, 2, 179000, 358000, 329),
(239, 6, 7, 1, 222, 222, 329),
(240, 19, 3, 1, 229000, 229000, 330),
(241, 19, 1, 2, 179000, 358000, 330);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddm` int(100) NOT NULL,
  `tendm` varchar(100) NOT NULL,
  `noibat` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`iddm`, `tendm`, `noibat`) VALUES
(1, 'thời trang nam', 1),
(2, 'thời trang nữ', 1),
(9, 'phụ kiện', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `iddonhang` int(11) NOT NULL,
  `idtk` int(11) NOT NULL,
  `giatridh` int(11) NOT NULL,
  `ngayxuathd` date NOT NULL,
  `diachinhanhang` varchar(200) NOT NULL,
  `sdt` int(11) NOT NULL,
  `ghichu` varchar(500) NOT NULL,
  `id_km` int(11) NOT NULL,
  `trangthaidonhang` int(11) NOT NULL,
  `thanhtoan` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: Chưa thanh toán\r\n1: Đã thanh toán\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`iddonhang`, `idtk`, `giatridh`, `ngayxuathd`, `diachinhanhang`, `sdt`, `ghichu`, `id_km`, `trangthaidonhang`, `thanhtoan`) VALUES
(324, 1, 408222, '2023-05-25', ' ádsda, Quận Ninh Kiều, 14', 123456789, '', 0, 1, 0),
(328, 6, 358000, '2023-05-30', ' asfjgdasfdasdhgf\r\n', 869147101, '', 0, 1, 1),
(329, 6, 628491, '2023-05-31', ' asfjgdasfdasdhgf\r\n', 869147101, '', 0, 1, 1),
(330, 19, 384700, '2023-05-31', ' , Quận Ninh Kiều, 14', 123123123, '', 8, 3, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id_km` int(11) NOT NULL,
  `maKhuyenMai` varchar(100) NOT NULL,
  `soluongma` int(11) NOT NULL,
  `giatien` int(11) NOT NULL DEFAULT 0,
  `phantram` int(11) NOT NULL DEFAULT 0,
  `chitiet` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id_km`, `maKhuyenMai`, `soluongma`, `giatien`, `phantram`, `chitiet`) VALUES
(7, 'SALE112', 1, 0, 23, ''),
(8, 'sale2023', 19, 202300, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaidm`
--

CREATE TABLE `loaidm` (
  `idloaidm` int(100) NOT NULL,
  `tenloaidm` varchar(100) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaidm`
--

INSERT INTO `loaidm` (`idloaidm`, `tenloaidm`, `iddm`) VALUES
(1, 'Áo sơ mi nam', 1),
(2, 'áo sơ mi nữ', 2),
(3, 'áo thun', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `giasp` int(11) UNSIGNED NOT NULL,
  `chitiet` varchar(255) NOT NULL,
  `soluong` int(11) UNSIGNED NOT NULL,
  `tinhtrang` int(11) NOT NULL DEFAULT 1 COMMENT '1: còn hàng\r\n2: hết hàng',
  `hinhanh` varchar(200) NOT NULL,
  `iddm` int(11) NOT NULL,
  `idloaidm` int(11) NOT NULL,
  `noibat` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `giasp`, `chitiet`, `soluong`, `tinhtrang`, `hinhanh`, `iddm`, `idloaidm`, `noibat`) VALUES
(1, 'Áo thun pred perry', 179000, 'áo thun theu pred perry', 0, 2, 'ao-thun-pred-perry1678895621.png', 1, 3, 1),
(3, 'sơ mi tay ngắn deim', 229000, '', 1, 1, 'so-mi-tay-ngan-deim1678896891.png', 1, 1, 1),
(7, 'sss', 222, 'sfasd', 44, 1, '2022_11_18_13_39_IMG_20911684574753.jpg', 2, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idtk` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `sdt` int(11) NOT NULL,
  `gioitinh` tinyint(4) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `loaitk` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`idtk`, `email`, `pass`, `hoten`, `sdt`, `gioitinh`, `diachi`, `loaitk`) VALUES
(1, 'admin1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Quản trị viên 1', 123456789, 1, 'ádsda', 1),
(6, 'admin2@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'QUản trị vien 2', 869147101, 1, 'asfjgdasfdasdhgf\r\n', 1),
(19, 'tvkhanh1900271@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'truong van khanh', 123123123, 1, '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ctdh`
--
ALTER TABLE `ctdh`
  ADD PRIMARY KEY (`id_ctdh`),
  ADD KEY `iddonhang` (`iddonhang`),
  ADD KEY `idSp` (`idSp`),
  ADD KEY `idtk` (`idtk`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddm`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`iddonhang`),
  ADD KEY `idtk` (`idtk`),
  ADD KEY `id_km` (`id_km`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id_km`);

--
-- Chỉ mục cho bảng `loaidm`
--
ALTER TABLE `loaidm`
  ADD PRIMARY KEY (`idloaidm`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `iddm` (`iddm`),
  ADD KEY `idloaidm` (`idloaidm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idtk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `ctdh`
--
ALTER TABLE `ctdh`
  MODIFY `id_ctdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddm` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `iddonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id_km` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `loaidm`
--
ALTER TABLE `loaidm`
  MODIFY `idloaidm` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idtk` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ctdh`
--
ALTER TABLE `ctdh`
  ADD CONSTRAINT `ctdh_ibfk_1` FOREIGN KEY (`iddonhang`) REFERENCES `donhang` (`iddonhang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ctdh_ibfk_2` FOREIGN KEY (`idSp`) REFERENCES `sanpham` (`idsp`),
  ADD CONSTRAINT `ctdh_ibfk_3` FOREIGN KEY (`idtk`) REFERENCES `taikhoan` (`idtk`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`idtk`) REFERENCES `taikhoan` (`idtk`);

--
-- Các ràng buộc cho bảng `loaidm`
--
ALTER TABLE `loaidm`
  ADD CONSTRAINT `loaidm_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`iddm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`iddm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`idloaidm`) REFERENCES `loaidm` (`idloaidm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
