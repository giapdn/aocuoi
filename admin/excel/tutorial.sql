-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 11:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `id` int(11) NOT NULL,
  `ten` text NOT NULL,
  `ngay` text NOT NULL,
  `nguoi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `ten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tin`
--

CREATE TABLE `tin` (
  `id` int(11) NOT NULL,
  `ten` text NOT NULL,
  `hinh` text NOT NULL,
  `slug` text NOT NULL,
  `menu` int(11) NOT NULL,
  `loai` int(11) NOT NULL,
  `mota` text NOT NULL,
  `noidung` text NOT NULL,
  `ngay` text NOT NULL,
  `nguoi` text NOT NULL,
  `tag` text DEFAULT NULL,
  `so` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tin`
--

INSERT INTO `tin` (`id`, `ten`, `hinh`, `slug`, `menu`, `loai`, `mota`, `noidung`, `ngay`, `nguoi`, `tag`, `so`) VALUES
(1, 'Giới thiệu Code Thuần', 'gioi-thieu-code-thuan.jpg', 'gioi-thieu-code-thuan', 0, 4, 'Code Thuần website chia sẻ kinh nghiệm lập trình web PHP', '<p><strong>Code Thuần</strong>&nbsp;website&nbsp;chia sẻ tin tức, cẩm nang, tin c&ocirc;ng nghệ, thiết kế website. Rất mong c&aacute;c bạn sẽ ủng hộ ch&uacute;ng t&ocirc;i để c&oacute; một k&ecirc;nh th&ocirc;ng tin hữu &iacute;ch.</p>\r\n\r\n<p><img alt=\"Code Thuần website chia sẻ kinh nghiệm, thủ thuật\" src=\"/uploads/images/about/info.jpg\" style=\"height:429px; width:700px\" /></p>\r\n\r\n<p>Trang web do <strong>Code Thuần</strong>&nbsp;ph&aacute;t triển x&acirc;y dựng&nbsp;chuy&ecirc;n đề theo từng chuy&ecirc;n mục. C&oacute; nhiều b&agrave;i viết v&agrave; tại c&aacute;c b&agrave;i viết n&agrave;y ch&uacute;ng ta c&oacute; phần b&igrave;nh luận. B&igrave;nh luận&nbsp;cũng phải theo quy định của <strong>Code Thuần</strong>&nbsp;đề ra đ&uacute;ng kh&ocirc;ng c&aacute;c bạn. Lu&ocirc;n sống v&agrave; học tập theo quy định của nh&agrave; nước v&agrave; ph&aacute;p luật <strong>Việt Nam</strong>.</p>\r\n\r\n<p>Ngo&agrave;i k&ecirc;nh th&ocirc;ng tin từ website, trong thời gian tới <strong>Code Thuần</strong>&nbsp;hướng đến k&ecirc;nh <strong>Youtube</strong> để c&oacute; những video hữu &iacute;ch.</p>\r\n\r\n<p>V&igrave; một cộng đồng <strong>Việt Nam</strong>&nbsp;ph&aacute;t triển rất mong nhận được sự ủng hộ của c&aacute;c bạn lập tr&igrave;nh vi&ecirc;n, c&aacute;c độc giả tr&ecirc;n mọi miền đất nước. C&ugrave;ng nhau học tập, c&ugrave;ng nhau trao đổi v&agrave; c&ugrave;ng nhau ph&aacute;t triển!</p>\r\n', '24/03/2023', 'Giang', '4', NULL),
(2, 'Danh sách điện thoại Redmi update Android 13', 'danh-sach-dien-thoai-redmi-update-android-13-1679664328.jpg', 'danh-sach-dien-thoai-redmi-update-android-13', 2, 5, 'Người ta cho rằng Redmi Note 8 2021 sẽ không nhận được bản cập nhật Android 13. Tuy nhiên, Android 13 đã bắt đầu được thử nghiệm nội bộ trên model này', '<h2>Danh s&aacute;ch thiết bị Redmi l&ecirc;n Android 13</h2>\r\n\r\n<ul>\r\n	<li>Redmi Note 8 2021</li>\r\n	<li>Redmi Note 11 5G / Note 11T 5G</li>\r\n	<li>Redmi Note 10 5G / Note 11SE / Note 10T 5G</li>\r\n	<li>Redmi Note 11S 4G</li>\r\n	<li>Redmi Note 11E / Note 11R / 10 5G / 11 Prime 5G</li>\r\n	<li>Redmi Note 11S 5G</li>\r\n	<li>Redmi Note 11 Pro / Note 11 Pro+ / Note 11 Pro+ 5G</li>\r\n	<li>Redmi Note 10S / Note 11 SE India</li>\r\n	<li>Redmi 10 / 10 2022 / 10 Prime / Note 11 4G</li>\r\n	<li>Redmi Note 11 / 11 NFC</li>\r\n	<li>Redmi Note 11E Pro / Redmi Note 11 Pro 5G</li>\r\n	<li>Redmi Note 11 Pro 4G</li>\r\n	<li>Redmi Note 11T Pro / Pro+</li>\r\n	<li>Redmi 10C / Redmi 10 India</li>\r\n	<li>Redmi Note 10 Pro 5G</li>\r\n	<li>Redmi Note 10T</li>\r\n	<li>Redmi Note 10 Pro / Note 10 Pro Max</li>\r\n	<li>Redmi 11 Prime 4G</li>\r\n	<li>Redmi 12C</li>\r\n	<li>Redmi Note 12 5G</li>\r\n	<li>Redmi Note 12 Pro / Redmi Note 12 Pro+ / Redmi Note 12 Discovery / Redmi Note 12 YIBO Edition</li>\r\n	<li>Redmi Note 12 Pro Speed Edition</li>\r\n	<li>Redmi K40 / K40 Pro / K40 Pro+ / K40 Gaming / K40S</li>\r\n	<li>Redmi K50/ K50 Pro/ K50 Gaming/ K50i / K50i Pro / Redmi K50 Ultra</li>\r\n	<li>Redmi K60 / K60 Pro / K60E</li>\r\n</ul>\r\n', '24/03/2023', 'Giang', '5', NULL),
(3, 'Sự khác biệt HTML và HTML5', 'su-khac-biet-html-va-html5.jpg', 'su-khac-biet-html-va-html5', 1, 6, 'HTML5 là một ngôn ngữ lập trình được phát triển trên nền tảng ngôn ngữ HTML và quan trọng nhất của World Wide Web. Nó được sử dụng để thiết kế và cấu trúc các website, hỗ trợ cho đa phương tiện tối đa nhưng vẫn giúp cho website thân thiện với mọi người dùng và mọi thiết bị, các chương trình máy tính, trình duyệt web', '<h2>HTML v&agrave; HTM5</h2>\r\n\r\n<p>HTML5 hỗ trợ cho nhiều ứng dụng hơn: Một số ứng dụng như SVG, canvas&hellip; được&nbsp;HTML5&nbsp;hỗ trợ, nhưng d&ugrave;ng trong HTML th&igrave; phải sử dụng th&ecirc;m c&aacute;c phương tiện bổ trợ.</p>\r\n\r\n<p>Lưu dữ liệu tạm:&nbsp;HTML5&nbsp;sử dụng web&nbsp;SQL databases,&nbsp;application cache&nbsp;c&ograve;n HTML chỉ d&ugrave;ng cache của tr&igrave;nh duyệt.</p>\r\n\r\n<p>JavaScript chạy trong web browser:&nbsp;HTML5&nbsp;hỗ trợ ho&agrave;n to&agrave;n cho JavaScript chạy tr&ecirc;n web browser, c&ograve;n HTML ở c&aacute;c phi&ecirc;n bản cũ hơn th&igrave; kh&ocirc;ng thể thực hiện được.</p>\r\n\r\n<p>SGML: Kh&aacute;c với HTML,&nbsp;HTML5&nbsp;kh&ocirc;ng dựa tr&ecirc;n SGML, nhờ vậy, sản phẩm lập tr&igrave;nh c&oacute; độ tương th&iacute;ch cao hơn.</p>\r\n\r\n<p>Sử dụng MathML v&agrave; SVG:&nbsp;HTML5&nbsp;cho ph&eacute;p sử dụng MathML v&agrave; SVG cho văn bản, nhưng trong HTML th&igrave; kh&ocirc;ng được hỗ trợ.</p>\r\n\r\n<p>C&aacute;c element:&nbsp;HTML5&nbsp;t&iacute;ch hợp c&aacute;c element mới mẻ v&agrave; quan trọng như summary, time, aside, audio, command, data, datalist, details, embed, wbr, figcaption, figure,&nbsp;footer, header, article, hgroup, bdi, canvas, keygen, mark, meter, nav, output, progress, rp, rt, ruby, section, source, track, video&hellip; B&ecirc;n cạnh đ&oacute;, n&oacute; cũng được loại bỏ c&aacute;c elements lỗi thời trong HTML như isindex, noframes, acronym, applet, basefont, dir, font, frame, frameset, big, center, strike&hellip;.</p>\r\n', '24/03/2023', 'Giang', '6', NULL),
(4, 'Chính sách bảo mật thông tin', 'chinh-sach-bao-mat-thong-tin-1679665966.jpg', 'chinh-sach-bao-mat-thong-tin', 0, 4, 'Quy định về việc sử dụng thông tin, lưu trữ thông tin tại website codethuan.com', '<h2>Thu thập th&ocirc;ng tin c&aacute; nh&acirc;n</h2>\r\n\r\n<p>- Nhằm minh bạch th&ocirc;ng tin trong b&igrave;nh luận, li&ecirc;n hệ, trao đổi th&ocirc;ng tin, bạn sẽ được y&ecirc;u cầu để lại c&aacute;c th&ocirc;ng tin tại trang&nbsp;<a href=\"https://codethuan.com/dang-ky-tai-khoan\">đăng k&yacute; t&agrave;i khoản</a>.</p>\r\n\r\n<p>- C&aacute;c th&ocirc;ng tin sử dụng tại form đăng k&yacute; th&agrave;nh vi&ecirc;n bao gồm t&ecirc;n, email, mật khẩu đăng nhập t&agrave;i khoản chỉ &aacute;p dụng cho t&agrave;i khoản tr&ecirc;n trang web&nbsp;<a href=\"https://codethuan.com\">codethuan.com</a></p>\r\n\r\n<p>- Mật khẩu ho&agrave;n to&agrave;n được m&atilde; ho&aacute; để đảm bảo t&iacute;nh ri&ecirc;ng tư của người d&ugrave;ng.</p>\r\n\r\n<p>- Ngo&agrave;i c&aacute;c th&ocirc;ng tin tại form đăng k&yacute; th&agrave;nh vi&ecirc;n. Ch&uacute;ng t&ocirc;i sử dụng trang&nbsp;<a href=\"https://codethuan.com/lien-he\">li&ecirc;n hệ</a>&nbsp;để tiếp nhận li&ecirc;n hệ nếu c&oacute; bất kỳ c&acirc;u hỏi li&ecirc;n quan đến nội dung trang web.</p>\r\n\r\n<p>- Kh&ocirc;ng sử dụng bất kỳ tool hay phần mềm b&ecirc;n thứ ba để thu thập th&ocirc;ng tin người d&ugrave;ng.</p>\r\n\r\n<p>- Tuyệt đối kh&ocirc;ng lưu trữ dữ liệu h&agrave;nh vi người d&ugrave;ng v&agrave;o website.</p>\r\n\r\n<p>- Kh&ocirc;ng ph&acirc;n t&iacute;ch h&agrave;nh vi người d&ugrave;ng tr&ecirc;n trang web.</p>\r\n', '24/03/2023', 'Giang', '4', NULL),
(5, 'Điều khoản sử dụng website Code Thuần', 'dieu-khoan-su-dung-website-code-thuan.jpg', 'dieu-khoan-su-dung-website-code-thuan', 0, 4, 'Điều khoản sử dụng trên website codethuan.com gồm chia sẻ bài viết, bình luận', '<h2>Nội dung b&agrave;i viết</h2>\r\n\r\n<p>- Nội dung kh&ocirc;ng sử dụng h&igrave;nh ảnh phản cảm, kh&ocirc;ng g&acirc;y k&iacute;ch động, ph&ugrave; hợp với văn h&oacute;a v&agrave; truyền thống của Việt Nam.</p>\r\n\r\n<p>- C&aacute;c b&agrave;i viết được t&aacute;c giả bi&ecirc;n soạn, tổng hợp, nội dung ph&ugrave; hợp với từng chủ đề.</p>\r\n\r\n<p>- Nếu bạn cảm thấy b&agrave;i viết tr&ecirc;n&nbsp;<a href=\"https://codethuan.com\">Code Thuần</a>&nbsp;hay v&agrave; hữu &iacute;ch th&igrave; h&atilde;y chia sẻ để mọi người c&ugrave;ng biết.</p>\r\n\r\n<p>- Chia sẻ l&agrave; để mọi người c&ugrave;ng biết đồng thời sẽ gi&uacute;p kh&iacute;ch lệ c&aacute;c t&aacute;c giả tạo ra c&aacute;c nội dung hấp dẫn hơn để gửi tới độc giả.</p>\r\n\r\n<h2>Kh&ocirc;ng copy b&agrave;i</h2>\r\n\r\n<p>- B&agrave;i viết đăng tr&ecirc;n website <strong>Code Thuần</strong>&nbsp;sẽ ghi r&otilde; nguồn</p>\r\n\r\n<p>- Đối với h&igrave;nh ảnh th&igrave; ch&uacute;ng t&ocirc;i sử dụng internet v&igrave; đ&oacute; l&agrave; kho t&agrave;i nguy&ecirc;n miễn ph&iacute;. Với h&igrave;nh ảnh c&oacute; bản quyền ch&uacute;ng t&ocirc;i sẽ xin ph&eacute;p t&aacute;c giả của h&igrave;nh ảnh để được sử dụng.</p>\r\n\r\n<p>- Trong trường hợp b&agrave;i viết c&oacute; h&igrave;nh ảnh kh&ocirc;ng ph&ugrave; hợp xin h&atilde;y gửi b&aacute;o c&aacute;o để ch&uacute;ng t&ocirc;i update lại th&ocirc;ng tin h&igrave;nh ảnh nh&eacute;.</p>\r\n', '24/03/2023', 'Giang', '4', NULL),
(6, 'Chính sách quy định chung', 'chinh-sach-quy-dinh-chung.jpg', 'chinh-sach-quy-dinh-chung', 0, 4, 'Quy định về sử dụng tài khoản, tài nguyên tại website codethuan.com', '<h2>Đặt t&ecirc;n t&agrave;i khoản</h2>\r\n\r\n<p>- Kh&ocirc;ng sử dụng c&aacute;c t&ecirc;n mang t&iacute;nh chất thiếu văn h&oacute;a l&agrave;m ảnh hưởng đến thuần phong mỹ tục</p>\r\n\r\n<p>- T&agrave;i khoản vi phạm quy định đặt t&ecirc;n c&oacute; thể bị x&oacute;a m&agrave; kh&ocirc;ng cần th&ocirc;ng b&aacute;o đến chủ t&agrave;i khoản</p>\r\n\r\n<h2>B&igrave;nh luận l&agrave; chia sẻ</h2>\r\n\r\n<p>- B&igrave;nh luận một c&aacute;ch lịch sự v&agrave; t&ocirc;n trọng mọi người.</p>\r\n\r\n<p>- Tất cả những b&igrave;nh luận sẽ được public ngay lập tức nhưng admin sẽ lu&ocirc;n theo d&otilde;i v&agrave; kiểm duyệt.</p>\r\n\r\n<p>- X&oacute;a b&igrave;nh luận với những b&igrave;nh luận kh&ocirc;ng ph&ugrave; hợp với thuần phong mỹ tục, g&acirc;y k&iacute;ch động, x&uacute;c phạm người kh&aacute;c, nội dung phản cảm...</p>\r\n\r\n<p>- H&atilde;y coi b&igrave;nh luận l&agrave; những g&oacute;p &yacute; đ&oacute;ng g&oacute;p để gi&uacute;p mọi người hiểu hơn về bạn, c&oacute; c&aacute;i nh&igrave;n về bạn tốt hơn.</p>\r\n', '24/03/2023', 'Giang', '4', NULL),
(7, 'Thẻ mới trong HTML5', 'the-moi-trong-html5.jpg', 'the-moi-trong-html5', 1, 6, 'HTML5 giúp media và vector trên website được xử lý và thực hiện dễ dàng hơn, nhanh hơn mà ko cần phải bổ sung bất kì phần mềm liên quan hoặc thư viện API nào khác', '<h2>Thẻ mới HTML5</h2>\r\n\r\n<p>&lt; article &gt; thẻ n&agrave;y định nghĩa một b&agrave;i viết hoặc b&igrave;nh luận của người d&ugrave;ng. N&oacute; độc lập với content của website.</p>\r\n\r\n<p>&lt; aside &gt; thẻ n&agrave;y đ&aacute;nh dấu nội dung b&ecirc;n cạnh của trang hiện tại. V&iacute; dụ như một slidebar.</p>\r\n\r\n<p>&lt; header &gt;&lt; footer &gt; hai thẻ n&agrave;y gi&uacute;p bạn kh&ocirc;ng cần định nghĩa id cho ti&ecirc;u đề v&agrave; cuối trang.</p>\r\n\r\n<p>&lt; nav &gt; thẻ n&agrave;y định nghĩa phần menu điều hướng cho website.</p>\r\n\r\n<p>&lt; section &gt; đ&acirc;y l&agrave; một thẻ quan trọng, n&oacute; gi&uacute;p bạn x&aacute;c định c&aacute;c th&agrave;nh phần kh&aacute;c nhau trong website. Bạn c&oacute; thể gộp chung c&aacute;c div c&ugrave;ng nội dung v&agrave;o trong thẻ n&agrave;y để dễ d&agrave;ng quản l&yacute;.</p>\r\n\r\n<p>&lt; audio &gt;&lt; video &gt; hai thẻ n&agrave;y gi&uacute;p bạn hiển thị một đoạn phim hoặc một b&agrave;i h&aacute;t tr&ecirc;n website đơn giản hơn rất nhiều.</p>\r\n\r\n<p>&lt; embed &gt; thẻ n&agrave;y x&aacute;c định một container c&aacute;c plugin tương t&aacute;c với ứng dụng b&ecirc;n ngo&agrave;i.</p>\r\n\r\n<p>&lt; canvas &gt; thẻ th&uacute; vị n&agrave;y cho ph&eacute;p bạn vẽ đồ họa m&agrave; kh&ocirc;ng cần phải qua bất k&igrave; đoạn m&atilde; hỗ trợ n&agrave;o (chủ yếu l&agrave; javascript).</p>\r\n', '24/03/2023', 'Giang', '6', NULL),
(8, 'Quy trình phát triển website bằng ngôn ngữ PHP', 'quy-trinh-phat-trien-website-bang-ngon-ngu-php-1679673346.jpg', 'quy-trinh-phat-trien-website-bang-ngon-ngu-php', 1, 7, 'PHP là một ngôn ngữ lập trình phía Server dùng để xây dựng các ứng dụng Website. Điểm mạnh của PHP là tính cộng đồng của nó cao', '<h2>I. Giới thiệu về PHP</h2>\r\n\r\n<p>A. Lịch sử ph&aacute;t triển</p>\r\n\r\n<p>B. Ưu điểm v&agrave; nhược điểm</p>\r\n\r\n<p>C. C&agrave;i đặt PHP</p>\r\n\r\n<h2>II. C&uacute; ph&aacute;p cơ bản của PHP</h2>\r\n\r\n<p>A. Biến v&agrave; kiểu dữ liệu</p>\r\n\r\n<p>B. C&aacute;c to&aacute;n tử</p>\r\n\r\n<p>C. C&aacute;c c&acirc;u lệnh điều kiện v&agrave; v&ograve;ng lặp</p>\r\n\r\n<h2>III. X&acirc;y dựng website động với PHP</h2>\r\n\r\n<p>A. Cơ bản về HTML v&agrave; CSS</p>\r\n\r\n<p>B. Tạo trang đăng nhập v&agrave; đăng k&yacute;</p>\r\n\r\n<p>C. Quản l&yacute; người d&ugrave;ng</p>\r\n\r\n<p>D. Truy vấn cơ sở dữ liệu</p>\r\n\r\n<p>E. Hiển thị dữ liệu tr&ecirc;n trang web</p>\r\n\r\n<p>F. Tạo trang quản trị</p>\r\n\r\n<h2>IV. C&aacute;c framework PHP phổ biến</h2>\r\n\r\n<p>A. Laravel</p>\r\n\r\n<p>B. CodeIgniter</p>\r\n\r\n<p>C. Symfony</p>\r\n\r\n<p>D. CakePHP</p>\r\n\r\n<h2>V. Bảo mật trong lập tr&igrave;nh web PHP</h2>\r\n\r\n<p>A. Tấn c&ocirc;ng v&agrave; lỗ hổng bảo mật</p>\r\n\r\n<p>B. C&aacute;c phương ph&aacute;p bảo mật cơ bản</p>\r\n\r\n<p>C. X&aacute;c thực người d&ugrave;ng v&agrave; ph&acirc;n quyền</p>\r\n\r\n<h2>VI. Triển khai website PHP</h2>\r\n\r\n<p>A. Lựa chọn m&aacute;y chủ v&agrave; t&ecirc;n miền</p>\r\n\r\n<p>B. C&agrave;i đặt v&agrave; cấu h&igrave;nh web server</p>\r\n\r\n<p>C. Triển khai ứng dụng PHP tr&ecirc;n server</p>\r\n\r\n<h2>VII. T&agrave;i liệu tham khảo v&agrave; học tiếp</h2>\r\n\r\n<p>A. C&aacute;c trang web học PHP trực tuyến</p>\r\n\r\n<p>B. C&aacute;c s&aacute;ch về lập tr&igrave;nh web PHP</p>\r\n\r\n<p>C. C&aacute;c diễn đ&agrave;n v&agrave; cộng đồng lập tr&igrave;nh vi&ecirc;n PHP.</p>\r\n', '24/03/2023', 'Giang', '7', NULL),
(9, 'Lỗ hổng bảo mật ngôn ngữ lập trình PHP', 'lo-hong-bao-mat-ngon-ngu-lap-trinh-php.jpg', 'lo-hong-bao-mat-ngon-ngu-lap-trinh-php', 1, 7, 'Thường xuyên cập nhật phiên bản PHP mới nhất và các thư viện của nó để giảm thiểu các lỗ hổng bảo mật có thể xảy ra khi xây dựng website bằng ngôn ngữ PHP', '<h2>Một số lỗ hổng bảo mật trong ng&ocirc;n ngữ PHP</h2>\r\n\r\n<p>Injection Attacks: Lỗ hổng n&agrave;y xảy ra khi attacker c&oacute; thể thực thi m&atilde; PHP trong một ứng dụng web. Injection attacks bao gồm SQL injection, code injection v&agrave; c&aacute;c loại tấn c&ocirc;ng kh&aacute;c.</p>\r\n\r\n<p>Cross-site Scripting (XSS): Lỗ hổng XSS cho ph&eacute;p attacker thực thi m&atilde; JavaScript tr&ecirc;n tr&igrave;nh duyệt của người d&ugrave;ng. Lỗ hổng n&agrave;y thường xảy ra khi người d&ugrave;ng đưa dữ liệu kh&ocirc;ng được kiểm tra v&agrave; xử l&yacute; đ&uacute;ng c&aacute;ch v&agrave;o trang web.</p>\r\n\r\n<p>Cross-site Request Forgery (CSRF): Lỗ hổng n&agrave;y cho ph&eacute;p attacker đưa ra c&aacute;c y&ecirc;u cầu tr&ecirc;n trang web m&agrave; kh&ocirc;ng cần sự cho ph&eacute;p của người d&ugrave;ng. Điều n&agrave;y c&oacute; thể dẫn đến việc thực hiện c&aacute;c h&agrave;nh động kh&ocirc;ng mong muốn.</p>\r\n\r\n<p>File inclusion vulnerabilities: Lỗ hổng n&agrave;y cho ph&eacute;p attacker đưa m&atilde; v&agrave;o một tệp đ&atilde; tồn tại hoặc tạo một tệp mới. Điều n&agrave;y c&oacute; thể dẫn đến việc thực hiện c&aacute;c h&agrave;nh động kh&ocirc;ng mong muốn, bao gồm đọc v&agrave; ghi dữ liệu.</p>\r\n\r\n<p>Session hijacking: Lỗ hổng n&agrave;y cho ph&eacute;p attacker đ&aacute;nh cắp phi&ecirc;n đăng nhập của người d&ugrave;ng v&agrave; sử dụng n&oacute; để truy cập trang web.</p>\r\n\r\n<h2>Để tr&aacute;nh c&aacute;c lỗ hổng bảo mật trong PHP</h2>\r\n\r\n<ul>\r\n	<li>Kiểm tra v&agrave; x&aacute;c thực đầu v&agrave;o, m&atilde; h&oacute;a dữ liệu, kiểm tra quyền truy cập</li>\r\n	<li>Cập nhật phi&ecirc;n bản PHP mới nhất v&agrave; c&aacute;c thư viện sử dụng</li>\r\n</ul>\r\n', '24/03/2023', 'Giang', '7', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tin`
--
ALTER TABLE `tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
