-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2019 pada 12.31
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpontren`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `url_title` varchar(256) NOT NULL,
  `category` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `title`, `url_title`, `category`, `image`, `content`, `author`, `date_created`, `is_active`) VALUES
(1, '6 Fakta Ulama Besar Indonesia KH Maimun Zubair, dari Pendidikan hingga Karir Politiknya', '6-fakta-ulama-besar-indonesia-kh-maimun-zubair-dari-pendidikan-hingga-karir-politiknya', 'Kiai', 'kh-maimun-6-fakta.jpg', '<p>Berikut 6 fakta ulama besar <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a>, dari pendidikan hingga karir politiknya.</p>\r\n\r\n<p><a href=\"https://style.tribunnews.com/\"><strong>TRIBUNSTYLE.COM</strong></a> - Salah satu ulama besar Indonesia, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a>, dikabarkan tutup usia pada Selasa (6/8/2019).</p>\r\n\r\n<p>KH Maimun Zubair meninggal dunia saat menunaikan ibadah haji di <a href=\"https://style.tribunnews.com/tag/mekkah\">Mekkah</a>, Arab Saudi.</p>\r\n\r\n<p>Kabar meninggalnya <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> sempat mengejutkan banyak orang hingga menduduki puncak <em>trending topic</em> di Twitter pada Selasa (6/8/2019) pukul 11.35 WIB.</p>\r\n\r\n<p>Para warganet beramai-ramai mengucapkan belasungkawa di media sosial.</p>\r\n\r\n<p>Sementara itu, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> sendiri dikenal sebagai pimpinan <a href=\"https://style.tribunnews.com/tag/pondok-pesantren-al-anwar-sarang\">Pondok Pesantren Al-Anwar Sarang</a>, <a href=\"https://style.tribunnews.com/tag/rembang\">Rembang</a>.</p>\r\n\r\n<p>Selain itu, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> juga dikenal sebagai ahli fikih dan politisi.</p>\r\n\r\n<p>TribunStyle rangkum dari berbagai sumber, berikut 6 fakta ulama besar Indonesia <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a>.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>1. Lahir di Sarang, Rembang</strong></p>\r\n\r\n<p>KH Maimun merupakan putra dari Kiai Zubair, Sarang.</p>\r\n\r\n<p>Kiai Zubair dikenal sebagai seorang alim dan faqih.</p>\r\n\r\n<p>Kiai Zubair juga sempat berguru dengan Syaikh Saíd al-Yamani serta Syaikh Hasan al-Yamani al-Makky.</p>\r\n\r\n<p><br>\r\n<strong>2. Mengaji di Pesantren Lirboyo</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p>Sebelumnya, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> juga pernah menempuh pendidikan agama di Pesantren Lirboyo, Kediri.</p>\r\n\r\n<p>Di Pesantren Lirboyo, ia dibimbing langsung oleh Kiai Abdul Karim.</p>\r\n\r\n<p>Selain dibimbing oleh Kiai Abdul Karim, KH Maimun juga belajar mengaji dengan Kiai Mahrus Ali dan Kiai Marzuki.</p>\r\n\r\n<p><br>\r\n<strong>3. Belajar mengaji dengan para ulama lokal</strong></p>\r\n\r\n<p>KH Maimun pernah belajar mengaji kepada para ulama di Jawa.</p>\r\n\r\n<p>Para ulama tersebut antara lain adalah Kiai Baidhowi, Kiai Ma&#39;shum Lasem, Kiai Bisri Musthofa yang berasal dari <a href=\"https://style.tribunnews.com/tag/rembang\">Rembang</a> dan Kiai Muslih Mranggen yang berasal dari Demak.</p>\r\n\r\n<p><br>\r\n<br>\r\n </p>\r\n', 'abdulrosyidit@gmail.com', 1571387068, 'active'),
(2, 'ABDUL ROSYID - Dari santri untuk IT', 'abdul-rosyid-dari-santri-untuk-it', 'Kiai', 'HARI_SANTRI.png', '<p>Berikut 6 fakta ulama besar <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a>, dari pendidikan hingga karir politiknya.</p>\r\n\r\n<p><a href=\"https://style.tribunnews.com/\"><strong>TRIBUNSTYLE.COM</strong></a> - Salah satu ulama besar Indonesia, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a>, dikabarkan tutup usia pada Selasa (6/8/2019).</p>\r\n\r\n<p>KH Maimun Zubair meninggal dunia saat menunaikan ibadah haji di <a href=\"https://style.tribunnews.com/tag/mekkah\">Mekkah</a>, Arab Saudi.</p>\r\n\r\n<p>Kabar meninggalnya <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> sempat mengejutkan banyak orang hingga menduduki puncak <em>trending topic</em> di Twitter pada Selasa (6/8/2019) pukul 11.35 WIB.</p>\r\n\r\n<p>Para warganet beramai-ramai mengucapkan belasungkawa di media sosial.</p>\r\n\r\n<p>Sementara itu, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> sendiri dikenal sebagai pimpinan <a href=\"https://style.tribunnews.com/tag/pondok-pesantren-al-anwar-sarang\">Pondok Pesantren Al-Anwar Sarang</a>, <a href=\"https://style.tribunnews.com/tag/rembang\">Rembang</a>.</p>\r\n\r\n<p>Selain itu, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> juga dikenal sebagai ahli fikih dan politisi.</p>\r\n\r\n<p>TribunStyle rangkum dari berbagai sumber, berikut 6 fakta ulama besar Indonesia <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a>.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>1. Lahir di Sarang, Rembang</strong></p>\r\n\r\n<p>KH Maimun merupakan putra dari Kiai Zubair, Sarang.</p>\r\n\r\n<p>Kiai Zubair dikenal sebagai seorang alim dan faqih.</p>\r\n\r\n<p>Kiai Zubair juga sempat berguru dengan Syaikh Saíd al-Yamani serta Syaikh Hasan al-Yamani al-Makky.</p>\r\n\r\n<p><br>\r\n<strong>2. Mengaji di Pesantren Lirboyo</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p>Sebelumnya, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> juga pernah menempuh pendidikan agama di Pesantren Lirboyo, Kediri.</p>\r\n\r\n<p>Di Pesantren Lirboyo, ia dibimbing langsung oleh Kiai Abdul Karim.</p>\r\n\r\n<p>Selain dibimbing oleh Kiai Abdul Karim, KH Maimun juga belajar mengaji dengan Kiai Mahrus Ali dan Kiai Marzuki.</p>\r\n\r\n<p><br>\r\n<strong>3. Belajar mengaji dengan para ulama lokal</strong></p>\r\n\r\n<p>KH Maimun pernah belajar mengaji kepada para ulama di Jawa.</p>\r\n\r\n<p>Para ulama tersebut antara lain adalah Kiai Baidhowi, Kiai Ma&#39;shum Lasem, Kiai Bisri Musthofa yang berasal dari <a href=\"https://style.tribunnews.com/tag/rembang\">Rembang</a> dan Kiai Muslih Mranggen yang berasal dari Demak.</p>\r\n\r\n<p>?&gt;</p>\r\n\r\n<p>?&gt;</p>\r\n\r\n<p>?&gt;</p>\r\n\r\n<p>?&gt;</p>\r\n', 'Abdul Rosyid', 1571641053, 'proccess');

-- --------------------------------------------------------

--
-- Struktur dari tabel `article_category`
--

CREATE TABLE `article_category` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `article_category`
--

INSERT INTO `article_category` (`id`, `name`, `slug`, `date_created`, `is_active`) VALUES
(7, 'Kiai', 'kiai', 1571386889, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `article_commentar`
--

CREATE TABLE `article_commentar` (
  `id` int(11) NOT NULL,
  `commentar` text NOT NULL,
  `url_title` varchar(256) NOT NULL,
  `author` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `article_commentar`
--

INSERT INTO `article_commentar` (`id`, `commentar`, `url_title`, `author`, `image`, `date_created`, `is_active`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '6-fakta-ulama-besar-indonesia-kh-maimun-zubair-dari-pendidikan-hingga-karir-politiknya', 'Abdul Rosyid', 'rosyid.png', 1571395051, 'Aktif'),
(2, 'KH Maimun Zubair meninggal dunia saat menunaikan ibadah haji di Mekkah, Arab Saudi.\r\n\r\nKabar meninggalnya KH Maimun Zubair sempat mengejutkan banyak orang hingga menduduki puncak trending topic di Twitter pada Selasa (6/8/2019) pukul 11.35 WIB.\r\n\r\nPara warganet beramai-ramai mengucapkan belasungkawa di media sosial.', 'abdul-rosyid-dari-santri-untuk-it', 'Dinar Abdi Perdana', 'default.jpg', 1571748088, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `discussion`
--

CREATE TABLE `discussion` (
  `id` int(11) NOT NULL,
  `author` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `quession` varchar(256) NOT NULL,
  `url_quession` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(128) NOT NULL,
  `categorie` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `discussion`
--

INSERT INTO `discussion` (`id`, `author`, `image`, `quession`, `url_quession`, `description`, `status`, `categorie`, `date_created`, `is_active`) VALUES
(3, 'Abdul Rosyid', 'rosyid.png', 'Kalau posisi jama\' muannats salim sebagai obyek yg fathah... maka tetep kasroh?', 'kalau-posisi-jama-muannats-salim-sebagai-obyek-yg-fathah-maka-tetep-kasroh', '<p>Kalau posisi jama&#39; muannats salim sebagai obyek yg fathah... maka tetep kasroh?</p>', 'Not Solved', 'sorof', 1571841421, 'aktif'),
(4, 'Dinar Abdi Perdana', 'default.jpg', 'Apa yang dimaksud mu’rob dan mabni?', 'apa-yang-dimaksud-murob-dan-mabni', '<p>Apa yang dimaksud mu&rsquo;rob dan mabni?</p>', 'Not Solved', 'nahwu', 1571843575, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `discussion_categorie`
--

CREATE TABLE `discussion_categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `discussion_categorie`
--

INSERT INTO `discussion_categorie` (`id`, `name`, `slug`, `date_created`, `is_active`) VALUES
(1, 'Nahwu', 'nahwu', 1571762541, 'aktif'),
(2, 'Sorof', 'sorof', 1571762599, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `discussion_commentar`
--

CREATE TABLE `discussion_commentar` (
  `id` int(11) NOT NULL,
  `commentar` text NOT NULL,
  `url_quession` varchar(256) NOT NULL,
  `author` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `likes` varchar(128) NOT NULL,
  `dislikes` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `discussion_commentar`
--

INSERT INTO `discussion_commentar` (`id`, `commentar`, `url_quession`, `author`, `image`, `likes`, `dislikes`, `date_created`, `is_active`) VALUES
(1, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'kalau-posisi-jama-muannats-salim-sebagai-obyek-yg-fathah-maka-tetep-kasroh', 'Abdul Rosyid', 'rosyid.png', '', '', 1571773063, 'aktif'),
(2, '<p>tesss</p>', 'kalau-posisi-jama-muannats-salim-sebagai-obyek-yg-fathah-maka-tetep-kasroh', 'Abdul Rosyid', 'rosyid.png', '', '', 1571996939, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `facebook` varchar(128) NOT NULL,
  `twitter` varchar(128) NOT NULL,
  `instagram` varchar(128) NOT NULL,
  `website` varchar(128) NOT NULL,
  `mobile` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `number_home` varchar(32) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `facebook`, `twitter`, `instagram`, `website`, `mobile`, `address`, `number_home`, `about`) VALUES
(2, 'Abdul Rosyid', 'abdulrosyidit@gmail.com', 'rosyid.png', '$2y$10$cgaN7FE.74pSNNvOQxnNcuTawbGXCZimOUBjApMsLbzKWUPRLHaGC', 1, 1, 1570601057, '', '', '', '', '', '', '', ''),
(3, 'Abdul Rosyid', 'abdul.rosyid@students.amikom.ac.id', 'rosyid.png', '$2y$10$M7ARZvFSEVmxqyTLnPJCuObUVEdO5hXKYNwwdyfQuhKM/PyhgbfLG', 2, 1, 1571311048, 'https://web.facebook.com/abdulrosyidcom', 'https://twitter.com/abdulrosyidit', 'https://web.facebook.com/abdulrosyidcom', 'http://abdulrosyid.com', '081548576555', 'Bangko, Merangin Jambi', '1234', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 'Dinar Abdi Perdana', 'dinarabdi21@gmail.com', 'default.jpg', '$2y$10$wrP0BGvgzXDXosbJhrl3/ew08GsVvuu0Y/l3lj5m6GGOXWhQf0De6', 2, 1, 1571635823, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(18, 2, 2),
(24, 1, 5),
(25, 1, 3),
(29, 1, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Article'),
(6, 'Discussion');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'fa fa-tachometer', 1),
(2, 2, 'My Profile', 'dashboard/user', 'fa fa-user', 1),
(3, 2, 'Edit Profile', 'dashboard/edit', 'fa fa-users', 0),
(4, 3, 'Menu', 'dashboard/menu', 'fa fa-bars', 1),
(5, 3, 'Sub Menu', 'dashboard/submenu', 'fa fa-folder-open-o', 1),
(6, 5, 'Article', 'dashboard/articles', 'fa fa-pencil-square-o', 1),
(7, 1, 'Role', 'dashboard/role', 'fa fa-user-secret', 1),
(8, 5, 'Categorie', 'dashboard/article_category', 'fa fa-bars', 1),
(9, 6, 'Discussions', 'dashboard/discussions', 'fa fa-comments-o', 1),
(10, 6, 'Categorie', 'dashboard/discussion_categorie', 'fa fa-bars', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `article_commentar`
--
ALTER TABLE `article_commentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `discussion_categorie`
--
ALTER TABLE `discussion_categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `discussion_commentar`
--
ALTER TABLE `discussion_commentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `article_commentar`
--
ALTER TABLE `article_commentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `discussion_categorie`
--
ALTER TABLE `discussion_categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `discussion_commentar`
--
ALTER TABLE `discussion_commentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
