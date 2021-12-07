-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2021 lúc 09:53 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lau_wang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ban`
--

CREATE TABLE `ban` (
  `MaBan` int(11) NOT NULL,
  `SoNguoiToiDa` int(11) DEFAULT NULL,
  `TinhTrang` bit(1) DEFAULT NULL,
  `MaCS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ban`
--

INSERT INTO `ban` (`MaBan`, `SoNguoiToiDa`, `TinhTrang`, `MaCS`) VALUES
(1, 20, b'0', 1),
(2, 10, b'0', 3),
(3, 10, b'0', 3),
(4, 30, b'0', 1),
(5, 20, b'1', 2),
(6, 10, b'0', 4),
(7, 11, b'0', 1),
(8, 20, b'0', 1),
(9, 11, b'0', 2),
(10, 30, b'0', 2),
(11, 30, b'0', 2),
(12, 30, b'0', 3),
(13, 30, b'0', 3),
(14, 30, b'0', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coso`
--

CREATE TABLE `coso` (
  `Ma` int(11) NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coso`
--

INSERT INTO `coso` (`Ma`, `DiaChi`) VALUES
(1, '134 Trần Đại Nghĩa, HN'),
(2, 'Số 21 đường 19/5, HN'),
(3, '17 Tam Khương, HN'),
(4, '81B Nguyễn Khang, HN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `endow`
--

CREATE TABLE `endow` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `representativeImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortContent` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `userName` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_Type` int(11) DEFAULT NULL,
  `ID_key_word` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `endow`
--

INSERT INTO `endow` (`ID`, `title`, `representativeImage`, `shortContent`, `description`, `userName`, `ID_Type`, `ID_key_word`, `created_at`) VALUES
(35, 'Ưu đãi Tháng 1 – Liên hoan tất niên cực đã tại Lẩu Wang với ưu đãi 30%', '2188bc95c5963216627e6f1e178caf53.jpeg', 'Liên hoan tất niên cuối năm chắc chắn là một sự kiện quan trọng mà chúng ta không thể bỏ lỡ. Nếu bạn vẫn chưa tìm được địa điểm phù hợp với những buổi tổng kết cuối năm đông người với mức giá phải chă', '<p class=\"has-text-align-left\" style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><span style=\"font-family: Poppins; font-size: 14px;\">Liên hoan tất niên cuối năm chắc chắn là một sự kiện quan trọng mà chúng ta không thể bỏ lỡ. Nếu bạn vẫn chưa tìm được địa điểm phù hợp với những buổi tổng kết cuối năm đông người với mức giá phải chăng và không gian rộng thoáng thì Lẩu Wang là một trong những lựa chọn hoàn hảo dành cho bạn! Nay còn thêm ƯU ĐÃI 30% cho bàn đặt trước!</span><span style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline !important;\">Liên hoan tất niên cuối năm chắc chắn là một sự kiện quan trọng mà chúng ta không thể bỏ lỡ. Nếu bạn vẫn chưa tìm được địa điểm phù hợp với những buổi tổng kết cuối năm đông người với mức giá phải chăng và không gian rộng thoáng thì Lẩu Wang là một trong những lựa chọn hoàn hảo dành cho bạn! Nay còn thêm ƯU ĐÃI 30% cho bàn đặt trước!</span><span style=\"font-family: Poppins;\"></span></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><span style=\"font-family: Poppins; font-size: 14px;\">Khám phá ngay chứ nhỉ?</span></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><img src=\"https://lauwang.vn/wp-content/uploads/2021/01/434bbdef3619c6479f08.jpg\" style=\"width: 100%;\"><span style=\"font-family: Helvetica;\"><br></span></p><div class=\"wp-block-image\" style=\"margin-bottom: 1em; color: rgb(0, 0, 0); font-family: Quicksand; font-size: 16px;\">Liên hoan tất niên cực đã tại Lẩu Wang với ưu đãi 30%<br></div><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 50px; font-size: 28px;\"><span style=\"font-family: Helvetica; font-size: 18px;\">Nội dung chương trình:</span></h3><ol style=\"color: rgb(0, 0, 0); font-family: Quicksand; font-size: 16px;\"><li></li><li></li><li></li><li></li><li></li></ol><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><ul></ul><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><ul></ul><p></p><p></p><ol></ol><p></p><ol><li style=\"text-align: left; line-height: 2;\"><span style=\"font-size: 14px; font-family: Verdana;\">Áp dụng giảm giá 30% cho người thứ 2,4,6… cho bàn từ 04 người trở lên sử dụng từ suất buffet 149k.\r\nThời gian áp dụng: Khung giờ BUỔI TRƯA (11h00-14h00) từ THỨ 2 – THỨ 5.\r\nÁp dụng cho khách hàng đặt bàn trước, check-in và đăng bài.\r\nKhông áp dụng ngày lễ Tết, không áp dụng đồng thời với các CTKM khác.</span></li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; text-align: left; line-height: 2;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: Verdana; font-size: 14px;\">Áp dụng giảm giá 30% cho người thứ 2,4,6… cho bàn từ 04 người trở lên sử dụng từ suất buffet 149k.</span></li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; text-align: left; line-height: 2;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: Verdana; font-size: 14px;\">Thời gian áp dụng: Khung giờ BUỔI TRƯA (11h00-14h00) từ THỨ 2 – THỨ 5.</span></li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; text-align: left; line-height: 2;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: Verdana; font-size: 14px;\">Áp dụng cho khách hàng đặt bàn trước, check-in và đăng bài.</span></li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; text-align: left; line-height: 2;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: Verdana; font-size: 14px;\">Không áp dụng ngày lễ Tết, không áp dụng đồng thời với các CTKM khác.</span></li><li style=\"text-align: left; line-height: 2;\"><span style=\"font-family: Helvetica; font-size: 18px;\"></span></li><li style=\"text-align: left; line-height: 2;\"></li></ol><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 50px; font-size: 28px;\"><span style=\"font-family: Helvetica; font-size: 14px;\">Đặt bàn ngay ưu đãi 30% liền tay</span></h3><h2 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; line-height: 50px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 45px; font-size: 50px;\"><span style=\"font-family: Helvetica; font-size: 24px;\">Mùa tất niên thêm rực rỡ tại Lẩu Wang!</span></h2><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><strong><span style=\"font-family: Helvetica; font-size: 14px;\">Tìm hiểu thêm:&nbsp;</span><a rel=\"noreferrer noopener\" href=\"https://lauwang.vn/uu-dai/\" target=\"_blank\" style=\"color: rgb(239, 116, 0); outline: none !important; transition: all 0.25s ease 0s !important;\"><span style=\"font-family: Helvetica; font-size: 14px;\">Ưu đãi Lẩu Wang</span></a></strong></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><strong><span style=\"font-family: Helvetica; font-size: 14px;\">Theo dõi Fanpage&nbsp;</span><a rel=\"noreferrer noopener\" href=\"https://www.facebook.com/buffetlauwang\" target=\"_blank\" style=\"color: rgb(239, 116, 0); outline: none !important; transition: all 0.25s ease 0s !important;\"><span style=\"font-size: 14px;\">Lẩu Wang – Vua Buffet Lẩu</span></a><span style=\"font-family: Helvetica; font-size: 14px;\">&nbsp;để không bỏ lỡ những chương trình ưu đãi hấp dẫn nhé!</span></strong></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><span style=\"font-family: Helvetica; font-size: 14px;\">——————————————</span><br><strong>Lẩu Wang – Vua Buffet lẩu<br>Hotline đặt bàn: 1900 0081</strong><br><strong>Địa chỉ:</strong><br><span style=\"font-family: Helvetica;\">CS1: 134 Trần Đại Nghĩa, Hai Bà Trưng.</span><br><span style=\"font-family: Helvetica;\">CS3: Số 21 đường 19/5, Văn Quán, Hà Đông (cổng sau Học Viện An Ninh).</span><br><span style=\"font-family: Helvetica;\">CS4: 17 Tam Khương (số 17 ngõ 10 Tôn Thất Tùng).</span><br><span style=\"font-family: Helvetica;\">CS5: 81B Nguyễn Khang, Yên Hòa, Cầu Giấy.</span><br><span style=\"font-family: Helvetica;\">CS6: 265 Tô Hiệu, Cầu Giấy.</span></p>', 'Admin', 3, 1, '2021-11-27 15:24:54'),
(37, ' Lẩu Wang comeback tặng ngay ƯU ĐÃI 20%', '7f97cca27a292cde8bd8af7279ebdceb.jpeg', 'Loa loa loa…! Tình hình dịch bệnh đã ổn định nên Lẩu Wang đã quay trở lại ngay lập tức rồi đây ạ! Đặc biệt hơn, Lẩu Wang mang đến ƯU ĐÃI 20% cho bàn đặt trước từ 04 người trở lên. Sau một thời gian dà', '<p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><span style=\"font-size: 18px;\">﻿</span><span style=\"font-family: Tahoma; font-size: 14px;\">Loa loa loa…! Tình hình dịch bệnh đã ổn định nên Lẩu Wang đã quay trở lại ngay lập tức rồi đây ạ! Đặc biệt hơn, Lẩu Wang mang đến ƯU ĐÃI 20% cho bàn đặt trước từ 04 người trở lên.</span></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><span style=\"font-family: Tahoma; font-size: 14px;\">Sau một thời gian dài vắng bóng thì Lẩu Wang đã trở lại và chắc chắn là lợi hại hơn xưa. Vậy còn chần chừ gì mà không đặt bàn ngay để nhận ƯU Đãi 20% của chúng mình nhỉ?</span></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><img src=\"https://lauwang.vn/wp-content/uploads/2021/06/0349581bc72d33736a3c-1024x681.jpg\" style=\"width: 100%;\"><span style=\"font-family: Tahoma;\"><br></span></p><div class=\"wp-block-image\" style=\"margin-bottom: 1em; color: rgb(0, 0, 0); font-family: Quicksand; font-size: 16px;\"><span style=\"font-weight: 700;\"><span style=\"font-family: Tahoma;\">Lẩu Wang comeback tặng ngay ưu đãi 20%</span></span><br></div><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 50px; font-size: 28px;\"><span style=\"font-family: Tahoma;\">Nội dung chương trình:</span></h3><ul style=\"color: rgb(0, 0, 0); font-family: Quicksand; font-size: 16px;\"><li></li><li></li><li></li><li style=\"line-height: 1.8;\"><ul><li style=\"line-height: 1.8;\"><span style=\"font-family: Tahoma; font-size: 14px;\">Áp dụng cho bàn từ 04 người trở lên sử dụng từ set 159K.</span></li><li style=\"line-height: 1.8;\"><span style=\"font-family: Tahoma; font-size: 14px;\">Thời gian áp dụng: KHUNG GIỜ TRƯA từ thứ 2 đến thứ 6 hàng tuần.</span></li><li style=\"line-height: 1.8;\"><span style=\"font-family: Tahoma; font-size: 14px;\">Áp dụng cho khách hàng đặt bàn trước, check-in và đăng bài.</span></li><li style=\"line-height: 1.8;\"><span style=\"font-family: Tahoma; font-size: 14px;\">Không áp dụng ngày lễ Tết, không áp dụng đồng thời với các chương trình ưu đãi khác.</span></li></ul></li></ul><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 50px; font-size: 28px;\"><span style=\"font-family: Tahoma; font-size: 18px;\">Cho tôi thấy cánh tay sẵn sàng nhận ưu đãi 20% của các bạn đi nào!</span></h3><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><strong><span style=\"font-family: Tahoma; font-size: 14px;\">Tìm hiểu thêm:&nbsp;</span><a rel=\"noreferrer noopener\" href=\"https://lauwang.vn/uu-dai/\" target=\"_blank\" style=\"color: rgb(239, 116, 0); outline: none !important; transition: all 0.25s ease 0s !important;\"><span style=\"font-family: Tahoma; font-size: 14px;\">Ưu đãi Lẩu Wang</span></a></strong></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><strong><span style=\"font-family: Tahoma; font-size: 14px;\">Theo dõi Fanpage&nbsp;</span><a rel=\"noreferrer noopener\" href=\"https://www.facebook.com/buffetlauwang\" target=\"_blank\" style=\"color: rgb(239, 116, 0); outline: none !important; transition: all 0.25s ease 0s !important;\"><span style=\"font-size: 14px;\">Lẩu Wang – Vua Buffet Lẩu</span></a><span style=\"font-family: Tahoma; font-size: 14px;\">&nbsp;để không bỏ lỡ những chương trình ưu đãi hấp dẫn nhé!</span></strong></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><span style=\"font-family: Tahoma;\">——————————————</span><br><strong><span style=\"font-size: 18px;\">Lẩu Wang – Vua Buffet lẩu</span><br><span style=\"font-size: 18px;\">Hotline đặt bàn: 1900 0081</span></strong><br><strong><span style=\"font-size: 18px;\">Địa chỉ:</span></strong><br><span style=\"font-family: Tahoma; font-size: 18px;\">CS1: 134 Trần Đại Nghĩa, Hai Bà Trưng.</span><br><span style=\"font-family: Tahoma; font-size: 18px;\">CS3: Số 21 đường 19/5, Văn Quán, Hà Đông (cổng sau Học Viện An Ninh).</span><br><span style=\"font-family: Tahoma; font-size: 18px;\">CS4: 17 Tam Khương (số 17 ngõ 10 Tôn Thất Tùng).</span><br><span style=\"font-family: Tahoma; font-size: 18px;\">CS5: 81B Nguyễn Khang, Yên Hòa, Cầu Giấy.</span><br><span style=\"font-family: Tahoma; font-size: 18px;\">CS6: 265 Tô Hiệu, Cầu Giấy.</span><br><span style=\"font-family: Tahoma; font-size: 18px;\">CS7: 51A Hồ Tùng Mậu, Mai Dịch, Cầu Giấy.</span><br><span style=\"font-family: Tahoma; font-size: 18px;\">CS8: 143 Trâu Quỳ, Gia Lâm (gần Học viện Nông Nghiệp).</span></p>', 'Admin', 2, 4, '2021-11-28 08:02:40'),
(38, 'Lẩu Wang bao trọn cuộc vui với ưu đãi ĐI 4 TẶNG 1', '47f600e0f406fe09d7908a92efda3387.jpeg', 'Chào đông với tiệc buffet lẩu cực đã tại Lẩu Wang với ưu đãi ĐI 4 TẶNG 1 ngay thôi nào! Dấu hiệu nhận biết mùa lạnh chính là những nồi lẩu thơm lừng, thêm chút cay cay cùng thật nhiều thịt bò, gà, hải', '<h5 style=\"font-family: Quicksand; font-weight: 700; color: rgb(39, 66, 83); margin-top: 0px; margin-bottom: 8px; font-size: 18px; line-height: 24px !important; cursor: pointer !important;\"><span style=\"color: rgb(0, 0, 0); font-size: 16px; font-weight: 400;\">Chào đông với tiệc buffet lẩu cực đã tại Lẩu Wang với ưu đãi ĐI 4 TẶNG 1 ngay thôi nào! Dấu hiệu nhận biết mùa lạnh chính là những nồi lẩu thơm lừng, thêm chút cay cay cùng thật nhiều thịt bò, gà, hải sản các loại. Nghĩ thôi cũng thấy ấm lòng rồi!</span></h5><h5 style=\"font-family: Quicksand; font-weight: 700; color: rgb(39, 66, 83); margin-top: 0px; margin-bottom: 8px; font-size: 18px; line-height: 24px !important; cursor: pointer !important;\"><img src=\"https://lauwang.vn/wp-content/uploads/2021/11/fce5448f9ca354fd0db2-1024x640.jpg\" style=\"width: 100%;\"><span style=\"color: rgb(0, 0, 0); font-size: 16px; font-weight: 400;\"><br></span></h5><h5 style=\"font-family: Quicksand; font-weight: 700; color: rgb(39, 66, 83); margin-top: 0px; margin-bottom: 8px; font-size: 18px; line-height: 24px !important; cursor: pointer !important;\"><div class=\"wp-block-image\" style=\"margin-bottom: 1em; color: rgb(0, 0, 0); font-size: 16px; font-weight: 400;\"><span style=\"font-weight: 700; font-size: 14px; font-family: Tahoma;\">Lẩu Wang ưu đãi ĐI 4 TẶNG 1 nè!</span><br></div><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-weight: 400;\"><span style=\"font-size: 14px;\">Lẩu Wang cùng bạn chào đông này với ưu đãi lớn – Tặng ngay 01 suất buffet miễn phí cho bàn đặt trước từ 04 người trở lên. Đi 4 lại chỉ tính tiền 3 thì chỉ có thể là Lẩu Wang thôi ạ. Vẫn là menu buffet gắp mỏi tay gần 50 món cực hấp dẫn. Nồi lẩu hai ngăn với 5 vị lẩu chỉ Lẩu Wang có công thức, tha hồ nhúng đạm để tích mỡ tránh rét nè!</span></p></h5><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 50px; font-size: 28px;\">Nội dung chương trình:</h3><p style=\"font-family: Quicksand; font-weight: 700; color: rgb(39, 66, 83); margin-top: 0px; margin-bottom: 8px; font-size: 18px; line-height: 24px !important; cursor: pointer !important;\"></p><p style=\"font-family: Quicksand; font-weight: 700; color: rgb(39, 66, 83); margin-top: 0px; margin-bottom: 8px; font-size: 18px; line-height: 24px !important; cursor: pointer !important;\"></p><ul style=\"color: rgb(0, 0, 0); font-size: 16px; font-weight: 400;\"><ul></ul></ul><p></p><p style=\"line-height: 1.8; margin-left: 25px;\"><i><span style=\"font-size: 14px;\">Áp dụng cho bàn từ 04 người trở lên (4 người MIỄN PHÍ 1 suất buffet, 8 người MIỄN PHÍ 2 suất,… ) sử dụng từ set 169K.</span></i></p><p style=\"line-height: 1.8; margin-left: 25px;\"><i><span style=\"font-size: 14px;\">Thời gian áp dụng: KHUNG GIỜ TRƯA từ thứ 2 – thứ 6 hàng tuần.</span></i></p><p style=\"line-height: 1.8; margin-left: 25px;\"><i><span style=\"font-size: 14px;\">Áp dụng cho khách hàng đặt bàn trước, check-in và đăng bài.</span></i></p><p style=\"line-height: 1.8; margin-left: 25px;\"><i><span style=\"font-size: 14px;\">Không áp dụng ngày lễ Tết, không áp dụng đồng thời với các CTKM khác.</span></i></p><p style=\"line-height: 1.8; margin-left: 25px;\"><i><span style=\"font-size: 14px;\">Lẩu Wang không phục vụ set 129K vào dịp lễ, Tết và cuối tuần (từ tối thứ 6 – hết chủ nhật).</span></i></p><p style=\"margin-bottom: 25px; line-height: 1.8; color: rgb(0, 0, 0); margin-left: 25px;\"><i style=\"\"><span style=\"font-size: 14px;\">Như vậy là chỉ cần đặt bàn trước theo nhóm 4 người, khách hàng sẽ được tặng ngay 01 suất miễn phí!</span></i></p><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 50px; font-size: 28px;\">Đặt bàn ngay để nhận ngay đi 4 tính tiền 3 cho bàn đặt trước</h3><h5 style=\"font-family: Quicksand; font-weight: 700; color: rgb(39, 66, 83); margin-top: 0px; margin-bottom: 8px; font-size: 18px; line-height: 24px !important; cursor: pointer !important;\"><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-weight: 400;\"><strong>Tìm hiểu thêm:&nbsp;<a rel=\"noreferrer noopener\" href=\"https://lauwang.vn/uu-dai/\" target=\"_blank\" style=\"color: rgb(239, 116, 0); outline: none !important; transition: all 0.25s ease 0s !important;\"><span class=\"has-inline-color has-luminous-vivid-orange-color\" style=\"color: rgb(255, 105, 0);\">Ưu đãi Lẩu Wang</span></a></strong></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-weight: 400;\"><strong>Theo dõi Fanpage&nbsp;<a rel=\"noreferrer noopener\" href=\"https://www.facebook.com/buffetlauwang\" target=\"_blank\" style=\"color: rgb(239, 116, 0); outline: none !important; transition: all 0.25s ease 0s !important;\"><span class=\"has-inline-color has-luminous-vivid-orange-color\" style=\"color: rgb(255, 105, 0);\">Lẩu Wang – Vua Buffet Lẩu</span></a>&nbsp;để không bỏ lỡ những chương trình ưu đãi hấp dẫn nhé!</strong></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-weight: 400;\">——————————————<br><strong>Lẩu Wang – Vua Buffet lẩu<br>Hotline đặt bàn: 1900 0081</strong><br><strong>Địa chỉ:</strong><br>CS1: 134 Trần Đại Nghĩa, Hai Bà Trưng.<br>CS3: Số 21 đường 19/5, Văn Quán, Hà Đông (cổng sau Học Viện An Ninh).<br>CS4: 17 Tam Khương (số 17 ngõ 10 Tôn Thất Tùng).<br>CS5: 81B Nguyễn Khang, Yên Hòa, Cầu Giấy.<br>CS6: 265 Tô Hiệu, Cầu Giấy.<br>CS7: 51A Hồ Tùng Mậu, Mai Dịch, Cầu Giấy<br>CS8: 143 Trâu Quỳ, Gia Lâm (gần Học viện Nông Nghiệp)</p><br></h5>', 'Admin', 2, 6, '2021-11-28 08:25:01'),
(39, 'Check in ngay – Nhận quà liền tay tại Lẩu Wang', 'ebbf6d5ce95f7136985d1c3970a6378e.jpeg', 'Những chiếc móc khóa xinh xắn với thiết kế độc đáo chỉ có tại Lẩu Wang chính là những món quà thay lời tri ân mà Lẩu Wang muốn gửi tới những khách hàng thân thiết của Nhà hàng. Check-in vừa có ảnh đẹp', '<p><div class=\"wp-block-image\" style=\"box-sizing: border-box; margin-bottom: 1em; color: rgb(0, 0, 0); font-family: Quicksand; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"></div></p><p style=\"box-sizing: border-box; margin: 0px 0px 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-family: Tahoma; font-size: 14px;\">Những chiếc móc khóa xinh xắn với thiết kế độc đáo chỉ có tại Lẩu Wang chính là những món quà thay lời tri ân mà Lẩu Wang muốn gửi tới những khách hàng thân thiết của Nhà hàng. Check-in vừa có ảnh đẹp sống ảo lại vừa được nhận quà luôn và ngay! Quá tuyệt vời phải không nào?</span></p><p style=\"box-sizing: border-box; margin: 0px 0px 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><img src=\"https://lauwang.vn/wp-content/uploads/2021/03/78c4792e2e53dc0d8542-1024x680.jpg\" style=\"width: 100%;\"><span style=\"font-family: Tahoma; font-size: 14px;\"><br></span></p><div class=\"wp-block-image\" style=\"margin-bottom: 1em; color: rgb(0, 0, 0); font-family: Quicksand; font-size: 16px;\"><span style=\"font-weight: 700;\">Check in ngay – Nhận quà liền tay tại Lẩu Wang</span><br></div><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 50px; font-size: 28px;\">Nội dung chương trình:</h3><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><strong>Bước 1:</strong>&nbsp;Khách hàng check-in trước khi dùng bữa và đăng ảnh tag bạn bè vào bài viết.<br><strong>Bước 2:</strong>&nbsp;Follow instagram của Lẩu Wang.<br><strong>Bước 3:</strong>&nbsp;Khi thanh toán, bài check-in của khách hàng được trên 30 like.<br>(Lưu ý: Một bàn chỉ cần một người check-in và tag những người còn lại. Móc chìa khóc sẽ tặng cho cả bàn mỗi người 1 chiếc)</p><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 50px; font-size: 28px;\">Đừng quên Lẩu Wang vẫn đang có ưu đãi 20% cho cả bàn nhé!</h3><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><strong>Tìm hiểu thêm:&nbsp;<a rel=\"noreferrer noopener\" href=\"https://lauwang.vn/uu-dai/\" target=\"_blank\" style=\"color: rgb(239, 116, 0); outline: none !important; transition: all 0.25s ease 0s !important;\">Ưu đãi Lẩu Wang</a></strong></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><strong>Theo dõi Fanpage&nbsp;<a rel=\"noreferrer noopener\" href=\"https://www.facebook.com/buffetlauwang\" target=\"_blank\" style=\"color: rgb(239, 116, 0); outline: none !important; transition: all 0.25s ease 0s !important;\">Lẩu Wang – Vua Buffet Lẩu</a>&nbsp;để không bỏ lỡ những chương trình ưu đãi hấp dẫn nhé!</strong></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\">——————————————<br><strong>Lẩu Wang – Vua Buffet lẩu<br>Hotline đặt bàn: 1900 0081</strong><br><strong>Địa chỉ:</strong><br>CS1: 134 Trần Đại Nghĩa, Hai Bà Trưng.<br>CS3: Số 21 đường 19/5, Văn Quán, Hà Đông (cổng sau Học Viện An Ninh).<br>CS4: 17 Tam Khương (số 17 ngõ 10 Tôn Thất Tùng).<br>CS5: 81B Nguyễn Khang, Yên Hòa, Cầu Giấy.<br>CS6: 265 Tô Hiệu, Cầu Giấy.</p>', 'Admin', 2, 2, '2021-11-28 08:55:18'),
(40, 'Back to school – Lẩu Wang tặng ƯU ĐÃI 20% cho cả team!', '0c70f82fea387e3bc781888442813a54.jpeg', 'Trở lại giảng đường cực chất với ƯU ĐÃI 20% nguyên team đi vào hết của Lẩu Wang ngay thôi! Ơn giời, đã được đi học lại rồi. Hỡi những anh em thèm lẩu, “kỳ nghỉ Tết huyền thoại” đã qua, lại được gặp nh', '<p style=\"margin-bottom: 25px; line-height: 1.4; font-family: Quicksand;\"><span style=\"font-family: Helvetica; font-size: 18px;\"><font color=\"#636363\">Trở lại giảng đường cực chất với ƯU ĐÃI 20% nguyên team đi vào hết của Lẩu Wang ngay thôi!</font></span></p><p style=\"line-height: 1.4;\"><span style=\"font-family: Helvetica; font-size: 18px;\"><font color=\"#636363\">Ơn giời, đã được đi học lại rồi. Hỡi những anh em thèm lẩu, “kỳ nghỉ Tết huyền thoại” đã qua, lại được gặp nhau rồi, cùng Lẩu Wang đẩy cao tình bạn thân mến thân bằng cách set kèo ăn lẩu thả phanh chỉ từ 119K thôi nha.</font></span></p><p style=\"line-height: 1.4;\"><span style=\"font-family: Helvetica; font-size: 18px;\"><font color=\"#636363\"><br></font></span></p><p style=\"line-height: 1.4;\"><img src=\"https://lauwang.vn/wp-content/uploads/2021/03/ea5aa00e73598107d848-1024x681.jpg\" style=\"width: 100%;\"><span style=\"font-family: Helvetica; font-size: 18px;\"><font color=\"#636363\"><br></font></span></p><p style=\"line-height: 1.4;\"><span style=\"font-family: Helvetica; font-size: 18px;\"><font color=\"#636363\"><br></font></span></p><figure class=\"wp-block-image size-large\" style=\"margin-bottom: 1em; color: rgb(0, 0, 0); font-family: Quicksand; font-size: 16px;\"><figcaption style=\"margin-top: 0.5em; margin-bottom: 1em;\"><strong><span style=\"font-size: 14px;\">Lẩu Wang tặng ưu đãi 20% cho cả team!</span></strong></figcaption></figure><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 50px; font-size: 28px;\"><span style=\"font-size: 24px;\">Nội dung chương trình:</span></h3><ul style=\"color: rgb(0, 0, 0); font-family: Quicksand; font-size: 16px;\"><li><span style=\"font-size: 14px;\">Áp dụng cho bàn từ 04 người trở lên sử dụng từ set 149K.</span></li><li><span style=\"font-size: 14px;\">Thời gian áp dụng: KHUNG GIỜ TRƯA từ thứ 2 – thứ 6 hàng tuần.</span></li><li><span style=\"font-size: 14px;\">Áp dụng cho khách hàng đặt bàn trước, check-in và đăng bài.</span></li><li><span style=\"font-size: 14px;\">Không áp dụng ngày lễ Tết, không áp dụng đồng thời với các chương trình ưu đãi khác.</span></li></ul><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 50px; font-size: 28px;\"><span style=\"font-size: 24px;\">Nhận ngay mã giảm giá 20% liền tay khi đặt bàn trước!</span></h3><h2 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; line-height: 50px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 45px; font-size: 50px;\"><span style=\"font-size: 36px;\">Liên hoan càng đông càng vui tại Lẩu Wang!</span></h2><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><strong><span style=\"font-size: 18px;\">Tìm hiểu thêm:&nbsp;</span><a rel=\"noreferrer noopener\" href=\"https://lauwang.vn/uu-dai/\" target=\"_blank\" style=\"color: rgb(239, 116, 0); outline: none !important; transition: all 0.25s ease 0s !important;\"><span style=\"font-size: 18px;\">Ưu đãi Lẩu Wang</span></a></strong></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\"><strong><span style=\"font-size: 18px;\">Theo dõi Fanpage&nbsp;</span><a rel=\"noreferrer noopener\" href=\"https://www.facebook.com/buffetlauwang\" target=\"_blank\" style=\"color: rgb(239, 116, 0); outline: none !important; transition: all 0.25s ease 0s !important;\">Lẩu Wang – Vua Buffet Lẩu</a><span style=\"font-size: 18px;\">&nbsp;để không bỏ lỡ những chương trình ưu đãi hấp dẫn nhé!</span></strong></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-family: Quicksand;\">——————————————<br><strong><span style=\"font-family: Tahoma; font-size: 18px;\">Lẩu Wang – Vua Buffet lẩu</span><br><span style=\"font-family: Tahoma; font-size: 18px;\">Hotline đặt bàn: 1900 0081</span></strong><br><strong><span style=\"font-family: Tahoma; font-size: 14px;\">Địa chỉ:</span></strong><br><span style=\"font-family: Tahoma; font-size: 14px;\">CS1: 134 Trần Đại Nghĩa, Hai Bà Trưng.</span><br><span style=\"font-family: Tahoma; font-size: 14px;\">CS3: Số 21 đường 19/5, Văn Quán, Hà Đông (cổng sau Học Viện An Ninh).</span><br><span style=\"font-family: Tahoma; font-size: 14px;\">CS4: 17 Tam Khương (số 17 ngõ 10 Tôn Thất Tùng).</span><br><span style=\"font-family: Tahoma; font-size: 14px;\">CS5: 81B Nguyễn Khang, Yên Hòa, Cầu Giấy.</span><br><span style=\"font-family: Tahoma; font-size: 14px;\">CS6: 265 Tô Hiệu, Cầu Giấy.</span></p><p style=\"line-height: 1.4;\"><span style=\"font-family: Poppins;\">﻿</span><br></p>', 'Admin', 2, 2, '2021-11-28 08:57:19'),
(41, 'Lẩu Wang Ship 24/7 – Alo là lên đơn liền!', 'db9c660670704b38d33486da3f298eb3.jpeg', 'Lẩu Wang lên menu 3 set Lẩu ship 24/7 quanh Hà Nội, bạn đã cập nhật chưa? Mùa đông ở Hà Nội có lẽ là màu đẹp nhất để ăn lẩu. Cứ mỗi độ tiết trời chuyển sang đông tầm tháng 10 – 11 là lúc mọi người hay', '<p><div class=\"wp-block-image\" style=\"box-sizing: border-box; margin-bottom: 1em; color: rgb(0, 0, 0); font-family: Quicksand; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"></div></p><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"box-sizing: border-box; font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin: 0px 0px 50px; font-size: 28px; padding: 0px; letter-spacing: normal; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 18px; font-family: Tahoma;\">Lẩu Wang lên menu 3 set Lẩu ship 24/7 quanh Hà Nội, bạn đã cập nhật chưa?</span></h3><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"box-sizing: border-box; font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin: 0px 0px 50px; font-size: 28px; padding: 0px; letter-spacing: normal; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><img src=\"https://lauwang.vn/wp-content/uploads/2021/11/fce14794201ae844b10b-1024x640.jpg\" style=\"width: 100%;\"><span style=\"font-size: 18px; font-family: Tahoma;\"><br></span></h3><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"box-sizing: border-box; font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin: 0px 0px 50px; font-size: 28px; padding: 0px; letter-spacing: normal; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"wp-block-image\" style=\"margin-bottom: 1em; color: rgb(0, 0, 0); font-size: 16px; font-weight: 400;\"><span style=\"font-weight: 700; font-family: Tahoma;\">Lẩu Wang Ship 24/7</span><br></div><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-weight: 400;\"><span style=\"font-family: Tahoma;\">Mùa đông ở Hà Nội có lẽ là màu đẹp nhất để ăn lẩu. Cứ mỗi độ tiết trời chuyển sang đông tầm tháng 10 – 11 là lúc mọi người hay đùa nhau rằng: Bỗng nhận ra hương lẩu phả vào trong gió se! Thế nhưng thời tiết ẩm ương đầu đông cũng khiến nhiều cuộc vui bỏ ngỏ. Thế nên Lẩu Wang mang tới giải pháp cho bạn không cần ngại thời tiết, không lo đi xa, ở nhà vẫn vui. Chính là menu 3 set lẩu ship hỏa tốc, phù hợp với đa dạng khách hàng, đáp ứng mọi yêu cầu và giao Hà Nội bất chấp thời tiết!</span></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-weight: 400;\"><img src=\"https://lauwang.vn/wp-content/uploads/2021/11/67c052ea5d6b9535cc7a-1024x604.jpg\" style=\"width: 100%;\"><span style=\"font-family: Tahoma;\"><br></span></p><div class=\"wp-block-image\" style=\"margin-bottom: 1em; color: rgb(0, 0, 0); font-size: 16px; font-weight: 400;\"><span style=\"font-weight: 700;\">Menu Lẩu Ship cực hấp dẫn của Lẩu Wang</span><br></div><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-weight: 400;\"><span style=\"font-size: 14px;\">Với 3 set lẩu từ 369K – 499K – 759K phù hợp cho 2 – 6 người ăn, Lẩu Wang mang tới nhiều hơn những sự lựa chọn cho khách hàng. Vẫn là những hương vị thơm ngon, hấp dẫn quen thuộc, nhưng nay bạn đã có thể thưởng thức Lẩu Wang ngay tại nhà. Chỉ cần nhấc máy alo ngay 1900 0081 và Lẩu Wang sẽ ship tận nơi cho bạn 1 set lẩu cực đỉnh trong vòng chỉ 20-30 phút.</span></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-weight: 400;\"><span style=\"font-size: 14px;\">Vẫn là tinh hoa ngũ vị lẩu độc quyền nhà Wang kết hợp với đồ nhúng tươi ngon, Lẩu Wang ship 24/7 đảm bảo chất lượng dịch vụ cực tốt cả khi đặt về. Tình hình dịch căng thẳng như này, liên hoan ngoài hàng quán cũng có nhiều nguy cơ. Liên hoan tại nhà vẫn siêu vui vì đã có menu lẩu ship của Lẩu Wang. Đừng ngần ngại thẩm ngay nha!</span></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-weight: 400;\"><strong><span style=\"font-size: 14px;\">Đặc biệt, Lẩu Wang hiện đang giảm ngay 15% cho các đơn hàng ship quanh Hà Nội.</span></strong><span style=\"font-size: 14px;\">&nbsp;Chỉ từ 313K bạn đã có ngay một nồi lẩu full topping ngay tại nhà! Nghe là đã thấy hấp dẫn rồi đúng không nào?</span></p></h3><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 50px; font-size: 28px;\"><span style=\"font-size: 24px;\">500 anh em ngại gì mà không gọi ngay 1900 0081 và đặt 1 set lẩu nhỉ?</span></h3><h3 class=\"has-very-dark-gray-color has-text-color\" style=\"font-family: Quicksand; font-weight: 700; line-height: 28px; color: rgb(49, 49, 49); margin-top: 0px; margin-bottom: 50px; font-size: 28px;\"><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-weight: 400;\"><strong>Tìm hiểu thêm:&nbsp;<a rel=\"noreferrer noopener\" href=\"https://lauwang.vn/uu-dai/\" target=\"_blank\" style=\"color: rgb(239, 116, 0); outline: none !important; transition: all 0.25s ease 0s !important;\">Ưu đãi Lẩu Wang</a></strong></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-weight: 400;\"><strong>Theo dõi Fanpage&nbsp;<a rel=\"noreferrer noopener\" href=\"https://www.facebook.com/buffetlauwang\" target=\"_blank\" style=\"color: rgb(239, 116, 0); outline: none !important; transition: all 0.25s ease 0s !important;\">Lẩu Wang – Vua Buffet Lẩu</a>&nbsp;để không bỏ lỡ những chương trình ưu đãi hấp dẫn nhé!</strong></p><p style=\"margin-bottom: 25px; line-height: 24px; color: rgb(0, 0, 0); font-weight: 400;\">——————————————<br><strong>Lẩu Wang – Vua Buffet lẩu<br>Hotline đặt bàn: 1900 0081</strong><br><strong>Địa chỉ:</strong><br>CS1: 134 Trần Đại Nghĩa, Hai Bà Trưng.<br>CS3: Số 21 đường 19/5, Văn Quán, Hà Đông (cổng sau Học Viện An Ninh).<br>CS4: 17 Tam Khương (số 17 ngõ 10 Tôn Thất Tùng).<br>CS5: 81B Nguyễn Khang, Yên Hòa, Cầu Giấy.<br>CS6: 265 Tô Hiệu, Cầu Giấy.<br>CS7: 51A Hồ Tùng Mậu, Mai Dịch, Cầu Giấy.<br>CS8: 143 Trâu Quỳ, Gia Lâm (gần Học viện Nông Nghiệp).</p></h3>', 'TrangHeo', 2, 3, '2021-11-28 13:59:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GhiChu` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ngay` date DEFAULT NULL,
  `Gio` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `num_adult` int(11) DEFAULT NULL,
  `num_child` int(11) DEFAULT NULL,
  `MaCS` int(11) DEFAULT NULL,
  `MaBan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `HoTen`, `SDT`, `GhiChu`, `Ngay`, `Gio`, `num_adult`, `num_child`, `MaCS`, `MaBan`) VALUES
(17, 'Nguyễn Như Tuyên', '01864721123', 'ahahaa', '2021-02-20', '12:15', 20, 5, 2, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kind_of_news`
--

CREATE TABLE `kind_of_news` (
  `ID` int(11) NOT NULL,
  `nameNews` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kind_of_news`
--

INSERT INTO `kind_of_news` (`ID`, `nameNews`) VALUES
(1, 'Blog'),
(2, 'Ưu Đãi'),
(3, 'Tuyển Dụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `SDT` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `MatKhau` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `ID_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `HoTen`, `avatar`, `NgaySinh`, `SDT`, `DiaChi`, `gioitinh`, `MatKhau`, `userName`, `deleted`, `ID_role`) VALUES
(1, 'Nguyễn Đình Chuân', 'hinh-anh-girl-xinh-toc-ngan-de-thuong.jpg', '2001-04-03', '028282282', 'Bắc Ninh - Yên Phong', 1, '1690c7b4f2115483c93ec40a8509d143', 'Admin', 0, 1),
(2, 'Nguyễn Đình Trang', '3055c7106d89778697ec4953209410cf.jpeg', '2001-04-03', '0213444444', 'Bắc Ninh', 0, '1690c7b4f2115483c93ec40a8509d143', 'Trang', 1, 0),
(5, 'Nguyễn Đình Chuân', '3df5bdaafc1a170e9c092ae6803c5d9d.jpeg', '2021-11-05', '02828221', 'Bắc Ninh - Yên Phong', 1, '2a3319f512b5693f18910e6a700cf123', 'ChuanDinh', 0, 0),
(6, 'Vũ Thị Thùy Trang', '22d8b3b89e7253e4d72efadbfe9fa664.jpg', '2001-06-06', '02828228', 'Ninh Bình', 0, '1690c7b4f2115483c93ec40a8509d143', 'TrangHeo', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_temp`
--

CREATE TABLE `order_temp` (
  `ma` int(11) NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay` date DEFAULT NULL,
  `gio` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` int(11) DEFAULT NULL,
  `num_adult` int(11) DEFAULT NULL,
  `num_child` int(11) DEFAULT 0,
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `related_keywords`
--

CREATE TABLE `related_keywords` (
  `ID` int(11) NOT NULL,
  `key_word` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `related_keywords`
--

INSERT INTO `related_keywords` (`ID`, `key_word`) VALUES
(1, 'đặt bàn Lẩu Wang'),
(2, 'Khuyến mại Lẩu Wang'),
(3, 'Lẩu Wang'),
(4, 'Lẩu Wang giảm sâu 50%'),
(5, 'Lẩu Wang món mới'),
(6, 'Lẩu Wang ưu đãi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `ID` int(11) NOT NULL,
  `nameRole` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`ID`, `nameRole`) VALUES
(0, 'Nhân Viên'),
(1, 'Giám Đốc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thucdon`
--

CREATE TABLE `thucdon` (
  `Ma` int(11) NOT NULL,
  `Ten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MoTa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thucdon`
--

INSERT INTO `thucdon` (`Ma`, `Ten`, `gia`, `image`, `MoTa`) VALUES
(11, 'Buffet', 169, '476597dfb4def16805f8454f3d200cf2.jpeg', 'Buffet 169K là thực đơn được nhiều khách hàng lựa chọn nhất. Thả ga với 35 món ăn với nhiều món khai vị vô cùng đặc biệt như Cá chiên hoàng bào, Nộm chân gà pha lê, Salad hoa quả nho khô, Salad rau xanh Hàn Quốc, Ngao xào sốt Thái, Ghẹ sữa rang muối,...'),
(12, 'Buffet', 129, '9d19ef10f9ca94b53a2a85b94f56a7b0.jpeg', 'Buffet 129K thả ga hơn 15 món ăn đặc biệt của Lẩu Wang. Kết hợp cùng nồi lẩu 2 ngăn thoả thích các bạn lựa chọn vị Lẩu Thái, Lẩu Kim Chi, Lẩu Wang đặc biệt sẽ phù hợp cho nhiều khách hàng với nhiều lựa chọn vị lẩu khác nhau .'),
(13, 'Buffet', 199, 'c9b6afa2cfbe4a465e043472280591ff.jpeg', 'Với set 199K, thực đơn bổ sung thêm 10 món hải sản tươi ngon như Cá ngừ đại dương fillet, Tôm Sú, Mực Trứng, Bạch Tuộc, Thanh Cua,... Khách hàng sẽ đắm chìm gần 40 món ăn siêu ngon cùng những vị lẩu vô cùng đặc biệt chỉ có tại Lẩu Wang ...'),
(14, 'Buffet', 169, 'f823dacfdc5cacbd8a180d1f4177f59d.jpeg', 'Buffet 169K là thực đơn được nhiều khách hàng lựa chọn nhất. Thả ga với 35 món ăn với nhiều món khai vị vô cùng đặc biệt như Cá chiên hoàng bào, Nộm chân gà pha lê, Salad hoa quả nho khô, Salad rau xanh Hàn Quốc, Ngao xào sốt Thái, Ghẹ sữa rang muối,...');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ban`
--
ALTER TABLE `ban`
  ADD PRIMARY KEY (`MaBan`),
  ADD KEY `MaCS` (`MaCS`);

--
-- Chỉ mục cho bảng `coso`
--
ALTER TABLE `coso`
  ADD PRIMARY KEY (`Ma`);

--
-- Chỉ mục cho bảng `endow`
--
ALTER TABLE `endow`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaCS` (`MaCS`),
  ADD KEY `MaBan` (`MaBan`);

--
-- Chỉ mục cho bảng `kind_of_news`
--
ALTER TABLE `kind_of_news`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD KEY `ID_role` (`ID_role`);

--
-- Chỉ mục cho bảng `order_temp`
--
ALTER TABLE `order_temp`
  ADD PRIMARY KEY (`ma`),
  ADD KEY `dia_chi` (`dia_chi`);

--
-- Chỉ mục cho bảng `related_keywords`
--
ALTER TABLE `related_keywords`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `thucdon`
--
ALTER TABLE `thucdon`
  ADD PRIMARY KEY (`Ma`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ban`
--
ALTER TABLE `ban`
  MODIFY `MaBan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `coso`
--
ALTER TABLE `coso`
  MODIFY `Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `endow`
--
ALTER TABLE `endow`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `kind_of_news`
--
ALTER TABLE `kind_of_news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `order_temp`
--
ALTER TABLE `order_temp`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `related_keywords`
--
ALTER TABLE `related_keywords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `thucdon`
--
ALTER TABLE `thucdon`
  MODIFY `Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ban`
--
ALTER TABLE `ban`
  ADD CONSTRAINT `ban_ibfk_1` FOREIGN KEY (`MaCS`) REFERENCES `coso` (`Ma`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`MaCS`) REFERENCES `coso` (`Ma`),
  ADD CONSTRAINT `khachhang_ibfk_2` FOREIGN KEY (`MaBan`) REFERENCES `ban` (`MaBan`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`ID_role`) REFERENCES `role` (`ID`);

--
-- Các ràng buộc cho bảng `order_temp`
--
ALTER TABLE `order_temp`
  ADD CONSTRAINT `order_temp_ibfk_1` FOREIGN KEY (`dia_chi`) REFERENCES `coso` (`Ma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
