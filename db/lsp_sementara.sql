-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 23, 2020 at 11:15 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

DROP TABLE IF EXISTS `tbl_blog`;
CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `title_article` varchar(50) NOT NULL,
  `slug_article` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL,
  `thumb_article` varchar(50) NOT NULL,
  `content_article` text NOT NULL,
  `featured` int(11) NOT NULL,
  `article_active` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id_article`, `title_article`, `slug_article`, `id_category`, `thumb_article`, `content_article`, `featured`, `article_active`, `created_at`, `updated_at`) VALUES
(1, 'Hello World', 'hello-world', 7, '69dbfabd5c0c8b851b0ac00f9752f4c9.png', '<p>Selamat datang di Website TeknoWebApp, website ini sepenuhnya milik Gagas Sangga Pratama yang dimulai untuk berbagi pengetahuan tentang Programming, Teknologi dan lain sebagainya. Semua artikel yang akan dipublikasikan berdasarkan pengalaman pribadi, dan inilah postingan pertama untuk website TeknoWebApp.</p>\r\n\r\n<p><strong>Apa itu TeknoWebApp?</strong></p>\r\n\r\n<p>TeknoWebApp adalah sebuah komunitas kecil yang menyediakan jasa pembuatan aplikasi terutama website seperti:</p>\r\n\r\n<ol>\r\n	<li>Website Pemerintahan / Goverment</li>\r\n	<li>Website Sekolah / Education</li>\r\n	<li>CMS / Content Management System</li>\r\n</ol>\r\n\r\n<p>dan masih banyak lagi. TeknoWebApp sendiri sudah berpengalaman didunia Web Developer selama 2 tahun dan mempunyai banyak Client yang telah bergabung. Apa saja project yang sudah dibuat TeknoWebApp bisa dilihat dihalaman <a href=\"http://teknowebapp.com/projects.html\">Projects</a>.</p>\r\n\r\n<p><strong>VISI</strong></p>\r\n\r\n<p>Menjadi Komunitas Teknologi Informasi yang Solutif, Inovatif dan Kreatif.</p>\r\n\r\n<p><strong>MISI</strong></p>\r\n\r\n<ol>\r\n	<li>Menciptakan produk yang inovatif pada perkembangan pasar.</li>\r\n	<li>Mengembangkan teknologi sebagai media penunjang pendidikan dan perekonomian di indonesia.</li>\r\n	<li>Mengembangkan sumber daya manusia yang berkualitas dan kreatif dibidang teknologi.</li>\r\n</ol>\r\n\r\n<p><strong>Apa yang kami posting disini?</strong></p>\r\n\r\n<p>Website TeknoWebApp sendiri dibuat untuk memberikan segala informasi tentang Programming, seperti Studi Kasus, Project, Tutorial, bahkan Source Code yang teman-teman bisa download sekaligus disini. Ada pun Tutorial yang akan dibahas yaitu PHP Native, CSS, Hingga Framework.</p>\r\n\r\n<p>Mungkin cukup sekian untuk artikel pertama <a href=\"http://teknowebapp.com/post/hello-world.html\">Hello World</a>, jika ada pertanyaan atau berminat berkerjasama dengan kami bisa hubungi kami melalui halaman <a href=\"http://teknowebapp.com/contact.html\">Contact</a> atau email ke <a href=\"mailto:teknowebapp@gmail.com\">teknowebapp@gmail.com</a>.</p>', 0, 1, '2019-04-01', '2020-09-04'),
(3, 'Asasa', 'asasa', 5, 'ffab50d7b6adf0dbf50e044eb1f0cf2b.jpeg', '<p>sas</p><p></p><p>Asasasasasasasasasasas</p><p><b>ASAsasasas</b></p><ul><li>asadadsad</li><li>Asasas</li><li>asasas</li><li>asasasa</li></ul><p><br></p><table class=\"table table-bordered\"><tbody><tr><td>qwqwqw</td><td>wqwqw</td><td>qwqwqw</td></tr><tr><td>sasasa</td><td>Zxzxz</td><td>asadxs</td></tr><tr><td>zxzx</td><td>xzxzxzxz</td><td><p>zxzxz</p><p><br></p></td></tr></tbody></table><h1>ssdasdasdasdasdasdasdsadasdasdasdas</h1>', 0, 1, '2020-09-04', '2020-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_active` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `category`, `category_name`, `category_active`, `created_at`, `updated_at`) VALUES
(1, 0, 'Laravel', 1, '2019-05-01', '2019-05-01'),
(2, 0, 'CodeIgniter', 1, '2019-05-02', '2019-05-26'),
(3, 0, 'PHP', 1, '2019-05-03', '2019-05-03'),
(4, 1, 'Laravel', 1, '2019-05-04', '2019-05-04'),
(5, 1, 'CodeIgniter', 1, '2019-05-05', '2019-05-05'),
(6, 1, 'PHP', 1, '2019-05-06', '2019-05-06'),
(7, 1, 'Other', 1, '2019-05-07', '2019-05-22'),
(8, 1, 'Website', 1, '2019-06-25', '2019-06-25'),
(9, 1, 'test', 1, '2020-09-19', '2020-09-19'),
(10, 0, 'testp', 1, '2020-09-19', '2020-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organisasi`
--

DROP TABLE IF EXISTS `tbl_organisasi`;
CREATE TABLE IF NOT EXISTS `tbl_organisasi` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `image` text,
  `deskripsi` text,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_organisasi`
--

INSERT INTO `tbl_organisasi` (`id`, `image`, `deskripsi`, `updated_at`) VALUES
(1, 'a98a256e81ac1688eec21eac79d4afdc.jpg', '<p>Organisasi dibuat sendiri ,.. input tabel juga bisa</p>', '2020-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

DROP TABLE IF EXISTS `tbl_profile`;
CREATE TABLE IF NOT EXISTS `tbl_profile` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) DEFAULT NULL,
  `NPSN` int(50) DEFAULT NULL,
  `image` text,
  `deskripsi` text,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id`, `title`, `NPSN`, `image`, `deskripsi`, `updated_at`) VALUES
(1, 'SMKN 1 Test1', 12345, '71ad2d733b847294a1fda3332e8584ee.png', '<pre><span style=\"font-family: \" comic=\"\" sans=\"\" ms\";\"=\"\">hallo</span></pre><pre><span style=\"font-family: \" comic=\"\" sans=\"\" ms\";\"=\"\">INSERT INTO tbl_name (field) Values (data);</span></pre>', '2020-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

DROP TABLE IF EXISTS `tbl_project`;
CREATE TABLE IF NOT EXISTS `tbl_project` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(50) NOT NULL,
  `thumb_project` varchar(50) NOT NULL,
  `id_category` int(11) NOT NULL,
  `slug_project` varchar(100) NOT NULL,
  `short_desc` varchar(100) NOT NULL,
  `project_desc` text NOT NULL,
  `client_web` varchar(80) NOT NULL,
  `price` varchar(80) NOT NULL,
  `project_active` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id_project`, `project_name`, `thumb_project`, `id_category`, `slug_project`, `short_desc`, `project_desc`, `client_web`, `price`, `project_active`, `created_at`, `updated_at`) VALUES
(1, 'Sampurasun', '', 1, 'sampurasun', 'Website Pariwisata Purwakarta', 'Project summary goes here. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus.', 'http://pariwisata.purwakartakab.go.id/', '', 1, '2020-09-04', '2020-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

DROP TABLE IF EXISTS `tbl_session`;
CREATE TABLE IF NOT EXISTS `tbl_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('28hjatrcp8hu6c6mnjsav34qiv24lm37', '::1', 1554259824, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343235393535313b);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

DROP TABLE IF EXISTS `tbl_settings`;
CREATE TABLE IF NOT EXISTS `tbl_settings` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `homepage` int(11) NOT NULL,
  `web_name` varchar(30) NOT NULL,
  `web_description` varchar(120) NOT NULL,
  `web_keyword` varchar(120) NOT NULL,
  `info_telp` varchar(100) NOT NULL,
  `info_fax` varchar(100) NOT NULL,
  `info_email` varchar(100) NOT NULL,
  `info_alamat` varchar(256) NOT NULL,
  `info_peta` text NOT NULL,
  `info_fb` varchar(256) NOT NULL,
  `info_ig` varchar(256) NOT NULL,
  `info_twt` varchar(256) NOT NULL,
  `info_yt` varchar(256) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id_setting`, `homepage`, `web_name`, `web_description`, `web_keyword`, `info_telp`, `info_fax`, `info_email`, `info_alamat`, `info_peta`, `info_fb`, `info_ig`, `info_twt`, `info_yt`, `created_at`, `updated_at`) VALUES
(1, 2, 'LSP SMKN 2 KRA', 'Website Profil LSP SMK Negeri 2 Karanganyar', 'lsp, smk bisa, smkn2kra, sertifikasi', '(0219)035431', '', 'website@email.co.id', 'Jl. Sama Aku, Nikah Sama Dia', '', '', '', '', '', '2020-09-18', '2020-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skemasertifikasi`
--

DROP TABLE IF EXISTS `tbl_skemasertifikasi`;
CREATE TABLE IF NOT EXISTS `tbl_skemasertifikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nama` varchar(256) NOT NULL,
  `slug_title` text NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skemasertifikasi`
--

INSERT INTO `tbl_skemasertifikasi` (`id`, `image`, `nama`, `slug_title`, `deskripsi`, `created_at`, `updated_at`) VALUES
(5, '21a191fe561d3f6d38aed1fc68d325fd.PNG', 'Skema Sertifikasi Test', 'skema-sertifikasi-test.html', '<p>Test <b>Test</b></p>', '2020-09-23', '2020-09-23'),
(1, '97ce5ab4f49ef3bf597b45788222a0f7.png', 'Skema Sertifikasi Test', 'skema-sertifikasi-test.html', '<p>Hallo</p>', '2020-09-23', '2020-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `image` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `facebook` varchar(150) NOT NULL,
  `twitter` varchar(150) NOT NULL,
  `instagram` varchar(150) NOT NULL,
  `youtube` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `last_login` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `password`, `image`, `about`, `facebook`, `twitter`, `instagram`, `youtube`, `address`, `phone`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'Isnan Wahyudi', 'isnan@gmail.com', 'c4ddf45979ab303c1a833d43c0c993f5', '0472abd317072139432bfffa0237e3a6.png', 'Tetep Semangat', 'https://www.facebook.com/isnanw354/', 'https://twitter.com/isnanwahyudi45', 'https://www.instagram.com/isnanw3/', 'https://www.youtube.com/channel/UCYEUEhpNSQyB-zdYYyRHlAg', 'Mojogedang, Karanganyar', '081515952136', '2020-09-21 12:13:31', '2020-09-21 03:13:31', '2020-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visimisi`
--

DROP TABLE IF EXISTS `tbl_visimisi`;
CREATE TABLE IF NOT EXISTS `tbl_visimisi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `visi` varchar(256) DEFAULT NULL,
  `misi` text,
  `image` text,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_visimisi`
--

INSERT INTO `tbl_visimisi` (`id`, `visi`, `misi`, `image`, `updated_at`) VALUES
(1, 'Visi Visi Ku iki', '<ol><li>Misi 1</li><li>Misi 2</li><li>Misi 3</li><li>Misi 4</li></ol>', '355221fb6b9261b8321dffb322c9deb0.jpg', '2020-09-21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
