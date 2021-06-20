-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2020 lúc 07:18 AM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `music`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `album`
--

CREATE TABLE `album` (
  `maAB` int(100) NOT NULL,
  `tenAB` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quocgia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `album`
--

INSERT INTO `album` (`maAB`, `tenAB`, `Quocgia`) VALUES
(2, 'POP', 'Âu Mỹ'),
(3, 'Rock', 'Âu Mỹ'),
(4, 'Rap/Hip hop', 'Âu Mỹ'),
(5, 'R&B', 'Âu Mỹ'),
(6, 'Hàn Quốc', 'Châu Á'),
(7, 'Hoa Ngữ', 'Châu Á'),
(8, 'Nhạc trẻ', 'Việt Nam'),
(11, 'Nhạc trữ tình', 'Việt Nam'),
(12, 'Nhạc dance Việt', 'Việt Nam'),
(13, 'Rap Việt', 'Việt Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chude`
--

CREATE TABLE `chude` (
  `maCD` int(50) NOT NULL,
  `tenCD` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaiCD` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chude`
--

INSERT INTO `chude` (`maCD`, `tenCD`, `loaiCD`) VALUES
(1, 'Nhạc hot', 'Đề xuất'),
(2, 'Những bài hit', 'Đề xuất'),
(3, 'Nhạc hot Âu-Mỹ', 'Đề xuất'),
(4, 'Kpop - hit', 'Đề xuất'),
(5, 'EDM', 'Thể loại'),
(6, 'Acoustic', 'Thể loại'),
(7, 'Indie', 'Thể loại'),
(8, 'Ngày mưa', 'Tâm trạng'),
(9, 'Tình Yêu', 'Tâm trạng'),
(10, 'Âm nhạc thư giãn', 'Tâm trạng'),
(11, 'Trữ Tình & bolero', 'Thể loại'),
(12, 'Motivation', 'Tâm trạng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `listbh`
--

CREATE TABLE `listbh` (
  `maList` int(11) NOT NULL,
  `tenList` varchar(50) NOT NULL,
  `maAB` int(50) NOT NULL,
  `Anh` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `listbh`
--

INSERT INTO `listbh` (`maList`, `tenList`, `maAB`, `Anh`, `dateTime`) VALUES
(1, 'Những bài hát của Sơn Tùng hay nhất', 8, 'public/images/1607673360DkpG-iyU4AE30YS.jpg', '2020-12-11 07:54:24'),
(3, 'Bài hát của tháng', 8, 'public/images/1607673391hinh-anh-anime-dep-8.jpg', '2020-12-11 07:54:24'),
(5, 'Nhạc hot', 2, 'public/images/160767340641498402_1930628060570421_2334997301816354118_nyeonjung.jpg', '2020-12-11 07:54:24'),
(7, 'Rock', 8, 'public/images/1607673429top-nhung-hinh-anime-dep-nhat-de-thuong-hinh-nen-anime-16.png', '2020-12-11 07:54:24'),
(9, 'Hoa Ngữ', 8, 'public/images/1607673446wallpaper-4k-hinh-nen-4k-binh-minh-tren-nui_101300409.jpg', '2020-12-11 07:54:24'),
(11, 'Nghe gì hôm nay', 8, 'public/images/1608306511wallpaper-4k-hinh-nen-4k-hai-chu-cho-vui-dua-ben-song_101308536.jpg', '2020-12-18 15:48:31'),
(12, 'Chủ nhật chill', 8, 'public/images/160830661848412054_2250208225242395_2184146180328390656_o.jpg', '2020-12-18 15:50:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaimv`
--

CREATE TABLE `loaimv` (
  `maLMV` int(50) NOT NULL,
  `tenLMV` varchar(50) NOT NULL,
  `Quocgia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaimv`
--

INSERT INTO `loaimv` (`maLMV`, `tenLMV`, `Quocgia`) VALUES
(1, 'Nhạc trẻ', 'Việt Nam'),
(2, 'Nhạc trữ tình', 'Việt Nam'),
(3, 'Nhạc dance Việt', 'Việt Nam'),
(4, 'Rap Việt', 'Việt Nam'),
(5, 'POP', 'Âu Mỹ'),
(6, 'Rock', 'Âu Mỹ'),
(7, 'Rap/Hip hop', 'Âu Mỹ'),
(8, 'R&B', 'Âu Mỹ'),
(9, 'Hàn Quốc', 'Châu Á'),
(11, 'Hoa Ngữ', 'Châu Á');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mv`
--

CREATE TABLE `mv` (
  `maMV` int(50) NOT NULL,
  `tenMV` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maLMV` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maCS` int(50) NOT NULL,
  `Quocgia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anh` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Link` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mv`
--

INSERT INTO `mv` (`maMV`, `tenMV`, `maLMV`, `maCS`, `Quocgia`, `Anh`, `Link`, `dateTime`) VALUES
(2, 'Chạy ngay đi', '7', 1, 'Việt Nam', 'public/images/Bài hát-MV/Chạy ngay đi.jpg', 'public/mv/chayngaydi.mp4', '2020-12-08 14:29:12'),
(3, 'Hà Phi Vũ', '1', 2, 'Âu Mỹ', 'public/images/1607528223nhac4.jpg', 'public/mv/letmedownslowly.mp4', '2020-12-09 15:37:03'),
(4, 'run now', '7', 2, 'Âu Mỹ', 'public/images/1607528543phuong.jpg', 'public/mv/letmedownslowly.mp4', '2020-12-09 15:42:23'),
(7, 'Senõrita', '8', 4, 'Việt Nam', 'public/images/1607862778senorita.jpg', 'public/mv/senorita.mp4', '2020-12-14 13:00:46'),
(8, 'I dont care', '1', 8, 'Châu Á', 'public/images/Bài hát-MV/idontcare.jpg', 'public/mv/idontcare.mp4', '2020-12-21 04:10:02'),
(9, 'Fake love', '7', 11, 'Châu Á', 'public/images/Bài hát-MV/fakelove.jpg', 'public/mv/fakelove.mp4', '2020-12-21 05:24:22'),
(10, 'Ôi tình yêu thật điêu', '1', 10, 'Việt Nam', 'public/images/Bài hát-MV/oitinhyeuthatdieu.jpg', 'public/mv/oitinhyeuthatdieu.mp4', '2020-12-21 05:47:14'),
(11, 'Let me down slowly', '8', 2, 'Âu Mỹ', 'public/images/Bài hát-MV/letmedownslowly.jpg', 'public/mv/letmedownslowly.mp4', '2020-12-21 05:48:52'),
(12, 'Grind me down', '5', 9, 'Âu Mỹ', 'public/images/Bài hát-MV/grindmedown.jpg', 'public/mv/grindmedown.mp4', '2020-12-21 05:50:41'),
(13, 'Lạc trôi', '1', 1, 'Việt Nam', 'public/images/Bài hát-MV/lactroi.jpg', 'public/mv/lactroi.mp4', '2020-12-21 06:07:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nghesi`
--

CREATE TABLE `nghesi` (
  `maCS` int(50) NOT NULL,
  `tenCS` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quocgia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gioithieu` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anh` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nghesi`
--

INSERT INTO `nghesi` (`maCS`, `tenCS`, `Quocgia`, `Gioithieu`, `Anh`, `dateTime`) VALUES
(1, 'Sơn Tùng MTP', 'Việt Nam', '<p>ok con d&ecirc;</p>\r\n', 'public/images/1607595687nhac3.jpg', '2020-12-09 16:17:12'),
(2, 'Alec Benjamin', 'Âu Mỹ', '<p>Anh viết nhạc hay</p>\r\n', 'public/images/Ca sĩ/alec-benjamin.jpg', '2020-12-09 16:17:12'),
(3, 'Hà Phi Vũ', 'Hàn Quốc', '<p>được kh&ocirc;ng anh zai</p>\r\n', 'public/images/1607534051nhac6.jpg', '2020-12-09 17:14:11'),
(4, 'Shaw Mendes', 'Âu Mỹ', '', 'public/images/1607862744Shawn-Mendes.jpg', '2020-12-13 12:32:24'),
(5, 'Justin Beiber', 'Âu Mỹ', '', 'public/images/1608128790Justin-Bieber-0.jpg', '2020-12-16 14:26:30'),
(6, 'Bích Phương', 'Việt Nam', '', 'public/images/1608128892Bích Phương.jpg', '2020-12-16 14:28:12'),
(7, 'Charlie Puth', 'Âu Mỹ', '', 'public/images/1608349234charlieputh.jpg', '2020-12-19 03:40:34'),
(8, 'Hoa Thần Vũ', 'Trung Quốc', '', 'public/images/Ca sĩ/hoathanvu.jpg', '2020-12-19 03:42:12'),
(9, 'Lilianna Wilde', 'Âu Mỹ', '', 'public/images/Ca sĩ/Liliana Wilde.jpg', '2020-12-21 05:18:58'),
(10, 'Lê Na (Lena)', 'Việt Nam', '', 'public/images/Ca sĩ/lê na.jpg', '2020-12-21 05:19:21'),
(11, 'BTS', 'Hàn Quốc', '', 'public/images/Ca sĩ/bts.jpg', '2020-12-21 05:19:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song`
--

CREATE TABLE `song` (
  `maBH` int(50) NOT NULL,
  `tenBH` varchar(50) NOT NULL,
  `maCD` varchar(50) NOT NULL,
  `maCS` varchar(50) NOT NULL,
  `maList` varchar(50) NOT NULL,
  `moi` tinyint(1) NOT NULL,
  `Anh` varchar(200) NOT NULL,
  `link` varchar(50) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`maBH`, `tenBH`, `maCD`, `maCS`, `maList`, `moi`, `Anh`, `link`, `dateTime`) VALUES
(1, 'Chạy Ngay Đi', '12', '1', '1', 1, 'public/images/1607597206Chạy ngay đi.jpg', 'public/music/TwentyThree-IU-4155748.mp3', '2020-12-09 15:25:32'),
(2, 'Chạy Ngay Đi', '8', '2', '3', 1, 'public/images/1607597235d1e2ad70500ef532a91c8f186bc64fb7.jpg', 'public/music/Chayngaydi.mp3', '2020-12-09 15:25:32'),
(3, 'Hà Phi Vũ', '1', '1', '1', 0, 'public/images/1607597109nhac3.jpg', 'public/music/Maria - Hwa Sa (MAMAMOO).mp3', '2020-12-09 15:25:32'),
(4, 'Hà Phi Vũ', '8', '1', '1', 1, 'public/images/1607527571743487.jpg', 'public/music/HarehareYa-Sou-5492450.mp3', '2020-12-09 15:25:32'),
(7, 'Alone', '5', '2', '3', 1, 'public/images/16076703245b14ffc3-44954703e1.jpg', 'public/music/Wolves - Selena Gomez, Marshmello.mp3', '2020-12-11 07:05:24'),
(8, 'How to show my love to you', '3', '1', '3', 0, 'public/images/1607862452Hình nền được.jpg', 'public/music/Blank Space - Taylor Swift.mp3', '2020-12-13 12:27:32'),
(9, 'Senõrita', '3', '4', '5', 1, 'public/images/1607862778senorita.jpg', 'public/music/Han Chi La Luot Qua - h3R3_ Felix Ben', '2020-12-13 12:32:58'),
(12, 'run now', '1', '8', '9', 0, 'public/images/1608349582idontcare.jpg', 'public/music/BBoom BBoom (Japanese Version) - Momo', '2020-12-19 03:46:22'),
(13, 'What is love', '1', '6', '7', 1, 'public/images/1608350772anh-nen-may-tinh-cuc-dep-cua-bo-phim-your-name-cau-ten-la-gi-dang-hot-fptshop-8.jpg', 'public/music/finding-hope---300-am.mp3', '2020-12-19 04:06:12'),
(14, 'run now', '1', '8', '9', 0, 'public/images/160835079151836.jpeg', 'public/music/finding-hope---300-am.mp3', '2020-12-19 04:06:31'),
(15, 'Sương tuyết ngàn năm', '1', '8', '9', 0, 'public/images/16083509672419c4279ef77fd6c3056c46c84e0328.jpg', 'public/music/See You Friday .mp3', '2020-12-19 04:09:27'),
(16, 'Quan Mộng Trường', '2', '8', '9', 1, 'public/images/16085251315b14ffc3-92fe23a19d.jpg', 'public/music/Bbibbi - IU.mp3', '2020-12-21 04:32:11'),
(17, 'Gió và Mây', '1', '6', '5', 1, 'public/images/1608525559wallpaper-4k-hinh-nen-4k-hai-chu-cho-vui-dua-ben-song_101308536.jpg', 'public/music/HarehareYa-Sou-5492450.mp3', '2020-12-21 04:39:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`, `updated`) VALUES
(1, 'Hà Phi Vũ ', 'hoalong369741@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-12-08 08:40:26', '2020-12-08 12:17:56'),
(6, 'Trần Thị Như Ý', 'nhuytran2000@gmail.com', '4297f44b13955235245b2497399d7a93', '2020-12-11 07:11:44', '2020-12-11 07:11:44');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`maAB`);

--
-- Chỉ mục cho bảng `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`maCD`);

--
-- Chỉ mục cho bảng `listbh`
--
ALTER TABLE `listbh`
  ADD PRIMARY KEY (`maList`);

--
-- Chỉ mục cho bảng `loaimv`
--
ALTER TABLE `loaimv`
  ADD PRIMARY KEY (`maLMV`);

--
-- Chỉ mục cho bảng `mv`
--
ALTER TABLE `mv`
  ADD PRIMARY KEY (`maMV`);

--
-- Chỉ mục cho bảng `nghesi`
--
ALTER TABLE `nghesi`
  ADD PRIMARY KEY (`maCS`);

--
-- Chỉ mục cho bảng `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`maBH`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `album`
--
ALTER TABLE `album`
  MODIFY `maAB` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `chude`
--
ALTER TABLE `chude`
  MODIFY `maCD` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `listbh`
--
ALTER TABLE `listbh`
  MODIFY `maList` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `loaimv`
--
ALTER TABLE `loaimv`
  MODIFY `maLMV` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `mv`
--
ALTER TABLE `mv`
  MODIFY `maMV` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `nghesi`
--
ALTER TABLE `nghesi`
  MODIFY `maCS` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `song`
--
ALTER TABLE `song`
  MODIFY `maBH` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
