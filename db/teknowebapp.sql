-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2019 at 10:41 PM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teknowebapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id_article` int(11) NOT NULL,
  `title_article` varchar(50) NOT NULL,
  `slug_article` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL,
  `thumb_article` varchar(50) NOT NULL,
  `content_article` text NOT NULL,
  `featured` int(11) NOT NULL,
  `article_active` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id_article`, `title_article`, `slug_article`, `id_category`, `thumb_article`, `content_article`, `featured`, `article_active`, `created_at`, `updated_at`) VALUES
(1, 'Hello World', 'hello-world', 7, 'blog-post-thumb-2.jpg', '<p>Selamat datang di Website TeknoWebApp, website ini sepenuhnya milik Gagas Sangga Pratama yang dimulai untuk berbagi pengetahuan tentang Programming, Teknologi dan lain sebagainya. Semua artikel yang akan dipublikasikan berdasarkan pengalaman pribadi, dan inilah postingan pertama untuk website TeknoWebApp.</p>\r\n\r\n<p><strong>Apa itu TeknoWebApp?</strong></p>\r\n\r\n<p>TeknoWebApp adalah sebuah komunitas kecil yang menyediakan jasa pembuatan aplikasi terutama website seperti:</p>\r\n\r\n<ol>\r\n	<li>Website Pemerintahan / Goverment</li>\r\n	<li>Website Sekolah / Education</li>\r\n	<li>CMS / Content Management System</li>\r\n</ol>\r\n\r\n<p>dan masih banyak lagi. TeknoWebApp sendiri sudah berpengalaman didunia Web Developer selama 2 tahun dan mempunyai banyak Client yang telah bergabung. Apa saja project yang sudah dibuat TeknoWebApp bisa dilihat dihalaman <a href="http://teknowebapp.com/projects.html">Projects</a>.</p>\r\n\r\n<p><strong>VISI</strong></p>\r\n\r\n<p>Menjadi Komunitas Teknologi Informasi yang Solutif, Inovatif dan Kreatif.</p>\r\n\r\n<p><strong>MISI</strong></p>\r\n\r\n<ol>\r\n	<li>Menciptakan produk yang inovatif pada perkembangan pasar.</li>\r\n	<li>Mengembangkan teknologi sebagai media penunjang pendidikan dan perekonomian di indonesia.</li>\r\n	<li>Mengembangkan sumber daya manusia yang berkualitas dan kreatif dibidang teknologi.</li>\r\n</ol>\r\n\r\n<p><strong>Apa yang kami posting disini?</strong></p>\r\n\r\n<p>Website TeknoWebApp sendiri dibuat untuk memberikan segala informasi tentang Programming, seperti Studi Kasus, Project, Tutorial, bahkan Source Code yang teman-teman bisa download sekaligus disini. Ada pun Tutorial yang akan dibahas yaitu PHP Native, CSS, Hingga Framework.</p>\r\n\r\n<p>Mungkin cukup sekian untuk artikel pertama <a href="http://teknowebapp.com/post/hello-world.html">Hello World</a>, jika ada pertanyaan atau berminat berkerjasama dengan kami bisa hubungi kami melalui halaman <a href="http://teknowebapp.com/contact.html">Contact</a> atau email ke <a href="mailto:teknowebapp@gmail.com">teknowebapp@gmail.com</a>.</p>', 0, 1, '2019-04-01', '2019-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_active` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(8, 1, 'Website', 1, '2019-06-25', '2019-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id_project` int(11) NOT NULL,
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
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id_project`, `project_name`, `thumb_project`, `id_category`, `slug_project`, `short_desc`, `project_desc`, `client_web`, `price`, `project_active`, `created_at`, `updated_at`) VALUES
(1, 'Sampurasun', '', 1, 'sampurasun', 'Website Pariwisata Purwakarta', 'Project summary goes here. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus.', 'http://pariwisata.purwakartakab.go.id/', '', 1, '2019-04-01', '2019-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE `tbl_session` (
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

CREATE TABLE `tbl_settings` (
  `id_setting` int(11) NOT NULL,
  `homepage` int(11) NOT NULL,
  `web_name` varchar(30) NOT NULL,
  `web_description` varchar(120) NOT NULL,
  `web_keyword` varchar(120) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id_setting`, `homepage`, `web_name`, `web_description`, `web_keyword`, `created_at`, `updated_at`) VALUES
(1, 1, 'TeknoWebApp', 'Website Belajar Bahasa Pemrograman Web', 'teknowebapp, gagas, codeigniter', '2019-05-26', '2019-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `image` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `facebook` varchar(150) NOT NULL,
  `twitter` varchar(150) NOT NULL,
  `instagram` varchar(150) NOT NULL,
  `google_plus` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `password`, `image`, `about`, `facebook`, `twitter`, `instagram`, `google_plus`, `address`, `phone`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'Gagas Sangga Pratama', 'gagas.exclusive@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '88000e32d1bc32776f2599bbea8ea88c.jpg', 'Komunitas yang berlokasi di Kota Pemalang yang bergerak di bidang Teknologi Informasi terutama Pengembangan Website. ', 'http://facebook.com/gagas.sp', 'http://twitter.com/haiigas', 'http://instagram.com/haiigas', '', 'Dukuh Siwalan Danasari, RT/RW. 008/004 Desa Danasari, Kec/Kab. Pemalang, Jawa Tengah. Indonesia. Kode Pos 52314', '+6285200612371', '2019-06-21 09:33:41', '2017-02-21', '2019-06-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
