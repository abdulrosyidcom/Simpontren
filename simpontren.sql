-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2020 at 07:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `article`
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
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `url_title`, `category`, `image`, `content`, `author`, `date_created`, `is_active`) VALUES
(1, '6 Fakta Ulama Besar Indonesia KH Maimun Zubair, dari Pendidikan hingga Karir Politiknya', '6-fakta-ulama-besar-indonesia-kh-maimun-zubair-dari-pendidikan-hingga-karir-politiknya', 'Kiai', 'kh-maimun-6-fakta.jpg', '<p>Berikut 6 fakta ulama besar <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a>, dari pendidikan hingga karir politiknya.</p>\r\n\r\n<p><a href=\"https://style.tribunnews.com/\"><strong>TRIBUNSTYLE.COM</strong></a> - Salah satu ulama besar Indonesia, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a>, dikabarkan tutup usia pada Selasa (6/8/2019).</p>\r\n\r\n<p>KH Maimun Zubair meninggal dunia saat menunaikan ibadah haji di <a href=\"https://style.tribunnews.com/tag/mekkah\">Mekkah</a>, Arab Saudi.</p>\r\n\r\n<p>Kabar meninggalnya <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> sempat mengejutkan banyak orang hingga menduduki puncak <em>trending topic</em> di Twitter pada Selasa (6/8/2019) pukul 11.35 WIB.</p>\r\n\r\n<p>Para warganet beramai-ramai mengucapkan belasungkawa di media sosial.</p>\r\n\r\n<p>Sementara itu, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> sendiri dikenal sebagai pimpinan <a href=\"https://style.tribunnews.com/tag/pondok-pesantren-al-anwar-sarang\">Pondok Pesantren Al-Anwar Sarang</a>, <a href=\"https://style.tribunnews.com/tag/rembang\">Rembang</a>.</p>\r\n\r\n<p>Selain itu, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> juga dikenal sebagai ahli fikih dan politisi.</p>\r\n\r\n<p>TribunStyle rangkum dari berbagai sumber, berikut 6 fakta ulama besar Indonesia <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a>.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>1. Lahir di Sarang, Rembang</strong></p>\r\n\r\n<p>KH Maimun merupakan putra dari Kiai Zubair, Sarang.</p>\r\n\r\n<p>Kiai Zubair dikenal sebagai seorang alim dan faqih.</p>\r\n\r\n<p>Kiai Zubair juga sempat berguru dengan Syaikh Saíd al-Yamani serta Syaikh Hasan al-Yamani al-Makky.</p>\r\n\r\n<p><br>\r\n<strong>2. Mengaji di Pesantren Lirboyo</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p>Sebelumnya, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> juga pernah menempuh pendidikan agama di Pesantren Lirboyo, Kediri.</p>\r\n\r\n<p>Di Pesantren Lirboyo, ia dibimbing langsung oleh Kiai Abdul Karim.</p>\r\n\r\n<p>Selain dibimbing oleh Kiai Abdul Karim, KH Maimun juga belajar mengaji dengan Kiai Mahrus Ali dan Kiai Marzuki.</p>\r\n\r\n<p><br>\r\n<strong>3. Belajar mengaji dengan para ulama lokal</strong></p>\r\n\r\n<p>KH Maimun pernah belajar mengaji kepada para ulama di Jawa.</p>\r\n\r\n<p>Para ulama tersebut antara lain adalah Kiai Baidhowi, Kiai Ma&#39;shum Lasem, Kiai Bisri Musthofa yang berasal dari <a href=\"https://style.tribunnews.com/tag/rembang\">Rembang</a> dan Kiai Muslih Mranggen yang berasal dari Demak.</p>\r\n\r\n<p><br>\r\n<br>\r\n </p>\r\n\r\n<p>?&gt;</p>\r\n\r\n<p>?&gt;</p>\r\n', 'abdulrosyidit@gmail.com', 1571387068, 'active'),
(2, 'ABDUL ROSYID - Dari santri untuk IT', 'abdul-rosyid-dari-santri-untuk-it', 'Kiai', 'HARI_SANTRI.png', '<p>Berikut 6 fakta ulama besar <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a>, dari pendidikan hingga karir politiknya.</p>\r\n\r\n<p><a href=\"https://style.tribunnews.com/\"><strong>TRIBUNSTYLE.COM</strong></a> - Salah satu ulama besar Indonesia, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a>, dikabarkan tutup usia pada Selasa (6/8/2019).</p>\r\n\r\n<p>KH Maimun Zubair meninggal dunia saat menunaikan ibadah haji di <a href=\"https://style.tribunnews.com/tag/mekkah\">Mekkah</a>, Arab Saudi.</p>\r\n\r\n<p>Kabar meninggalnya <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> sempat mengejutkan banyak orang hingga menduduki puncak <em>trending topic</em> di Twitter pada Selasa (6/8/2019) pukul 11.35 WIB.</p>\r\n\r\n<p>Para warganet beramai-ramai mengucapkan belasungkawa di media sosial.</p>\r\n\r\n<p>Sementara itu, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> sendiri dikenal sebagai pimpinan <a href=\"https://style.tribunnews.com/tag/pondok-pesantren-al-anwar-sarang\">Pondok Pesantren Al-Anwar Sarang</a>, <a href=\"https://style.tribunnews.com/tag/rembang\">Rembang</a>.</p>\r\n\r\n<p>Selain itu, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> juga dikenal sebagai ahli fikih dan politisi.</p>\r\n\r\n<p>TribunStyle rangkum dari berbagai sumber, berikut 6 fakta ulama besar Indonesia <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a>.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>1. Lahir di Sarang, Rembang</strong></p>\r\n\r\n<p>KH Maimun merupakan putra dari Kiai Zubair, Sarang.</p>\r\n\r\n<p>Kiai Zubair dikenal sebagai seorang alim dan faqih.</p>\r\n\r\n<p>Kiai Zubair juga sempat berguru dengan Syaikh Saíd al-Yamani serta Syaikh Hasan al-Yamani al-Makky.</p>\r\n\r\n<p><br>\r\n<strong>2. Mengaji di Pesantren Lirboyo</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p>Sebelumnya, <a href=\"https://style.tribunnews.com/tag/kh-maimun-zubair\">KH Maimun Zubair</a> juga pernah menempuh pendidikan agama di Pesantren Lirboyo, Kediri.</p>\r\n\r\n<p>Di Pesantren Lirboyo, ia dibimbing langsung oleh Kiai Abdul Karim.</p>\r\n\r\n<p>Selain dibimbing oleh Kiai Abdul Karim, KH Maimun juga belajar mengaji dengan Kiai Mahrus Ali dan Kiai Marzuki.</p>\r\n\r\n<p><br>\r\n<strong>3. Belajar mengaji dengan para ulama lokal</strong></p>\r\n\r\n<p>KH Maimun pernah belajar mengaji kepada para ulama di Jawa.</p>\r\n\r\n<p>Para ulama tersebut antara lain adalah Kiai Baidhowi, Kiai Ma&#39;shum Lasem, Kiai Bisri Musthofa yang berasal dari <a href=\"https://style.tribunnews.com/tag/rembang\">Rembang</a> dan Kiai Muslih Mranggen yang berasal dari Demak.</p>\r\n\r\n<p>?&gt;</p>\r\n\r\n<p>?&gt;</p>\r\n\r\n<p>?&gt;</p>\r\n\r\n<p>?&gt;</p>\r\n\r\n<p>?&gt;</p>\r\n', 'Abdul Rosyid', 1571641053, 'active'),
(3, 'Santri Indonesia Untuk Perdamaian Dunia ', 'santri-indonesia-untuk-perdamaian-dunia', 'Santri', 'IMG_20161226_200338.jpg', '<p>Tanggal 22 Oktober merupakan hari bersejarah bagi Santri serta kaum sarungan dan tentunya acara peringatan dengan berbagai kegiatan yang lakukan. Bahkan sudah lazim setiap tahun hari Santri diperingati dengan tema yang berbeda dan menjadi magnet tersendiri bagi kaum sarungan.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Demikian dikatakan Sekretaris Umum Himpunan Mahasiswa Islam (HMI) Tasikmalaya, Yuda Yudistira, Rabu (23/10).<br>\r\n<br>\r\n\"Maka dari itu, hari Santri harusnya menjadi salah satu hari besar umat Islam yang ada di Indonesia dan banyak ucapan serta dipanjatkannya doa saat menyambutnya,\" ungkapnya.<br>\r\n<br>\r\nMenurutnya, Santri adalah cermin Islam Nusantara juga sosok yang berupaya jadi manusia sejati yang meneladani sifat dan ajaran Rasullulah Muhammad SAW.<br>\r\n<br>\r\n\"Sejuta benang terpisah dari orangtua, hidup di pondok pesantren, takzim di hadapan Kiai untuk menempuh ilmu demi masa depan dunia dan akhirat. Menjadi santri, upaya memperbaiki diri dan bangsa ini,\" ucapnya.<br>\r\n<br>\r\nMelalui Kepres No. 22 Tahun 2015 tentang Penetapan Tanggal 22 Oktober sebagai hari santri, tahun ini kaum santri kembali mendapat penguatan negara melalui pengesahaan Undang-undang Pesantren.<br>\r\n<br>\r\n\"Diharapkan melalui Undang-undang ini, santri dan pendidikan pesantren dapat meningkatkan peran dan kontribusinya dalam pembangunan bangsa dan negara melalui fungsi pendidikan, dakwah, dan pemberdayaan masyarakat,\" harapnya.<br>\r\n<br>\r\nDi tengah revolusi gelombang keempat (4.0), lanjutnya, santri harus kreatif, inovatif, dan adaptif terhadap nilai-nilai baru yang baik sekaligus teguh menjaga tradisi dan nilai-nilai lama yang baik.<br>\r\n<br>\r\n\"Santri tidak boleh kehilangan jati dirinya sebagai muslim yang berakhlakul karimah, yang hormat kepada Kiai dan menjanjung tinggi ajaran para ulama terutama metode dakwah dan pemberdayaan Walisongo,\" tegasnya.<br>\r\n<br>\r\nSantri disatukan dalam asâsiyât (dasar dan prinsip perjuangan), khalfiyat (background sejarah), dan ghâyat (tujuan).<br>\r\n<br>\r\n\"Tentu hal ini menjadi magnet spritual bagi kami selaku kader HMI karena sejatinya selaku santri bisa menjadi nahkoda ataupun untuk terus menggemakan keislaman dan keindonesiaan untuk menjaga perdamaian diseantero Indonesia,\" tuturnya.<br>\r\n<br>\r\nDia berharap, agama jangan hanya dijadikan jadikan jargon dan simpul-simpul untuk kepentingan politik tetapi harus menjadi benteng moral bagi kaum terdidik.<br>\r\n<br>\r\n\"Jati diri santri adalah moralitas dan akhlak pesantren dengan kiai sebagai simbol kepemimpinan spiritual (qiyâdah r?hâniyah). Karena itu, meskipun santri telah melanglang buana, menempuh pendidikan hingga ke mancanegara, dia tidak boleh melupakan jati dirinya sebagai santri yang hormat dan patuh pada Kiai,\" pungkasnya. </p>\r\n\r\n<p>?&gt;</p>\r\n', 'abdulrosyidit@gmail.com', 1574212226, 'active'),
(4, 'rdfdg', 'rdfdg', 'Kiai', 'blog1.jpg', '<p>Dynamically parallel task goal-oriented interfaces before team driven collaboration and idea-sharing. Dramatically fashion wireless synergy vis-a-vis client-based portals. Completely enhance ethical total linkage after premium channels. Uniquely evolve future-proof mindshare after interactive total linkage. Seamlessly initiate unique networks for ubiquitous networks.</p>\r\n\r\n<p>Efficiently.</p>\r\n\r\n<p>?&gt;</p>\r\n', 'Abdul Rosyid', 1577996469, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id`, `name`, `slug`, `date_created`, `is_active`) VALUES
(7, 'Kiai', 'kiai', 1571386889, 'aktif'),
(8, 'Habaib', 'habaib', 1574211782, 'aktif'),
(9, 'Santri', 'santri', 1574211795, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `article_commentar`
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
-- Dumping data for table `article_commentar`
--

INSERT INTO `article_commentar` (`id`, `commentar`, `url_title`, `author`, `image`, `date_created`, `is_active`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '6-fakta-ulama-besar-indonesia-kh-maimun-zubair-dari-pendidikan-hingga-karir-politiknya', 'Abdul Rosyid', 'rosyid.png', 1571395051, 'Aktif'),
(2, 'KH Maimun Zubair meninggal dunia saat menunaikan ibadah haji di Mekkah, Arab Saudi.\r\n\r\nKabar meninggalnya KH Maimun Zubair sempat mengejutkan banyak orang hingga menduduki puncak trending topic di Twitter pada Selasa (6/8/2019) pukul 11.35 WIB.\r\n\r\nPara warganet beramai-ramai mengucapkan belasungkawa di media sosial.', 'abdul-rosyid-dari-santri-untuk-it', 'Dinar Abdi Perdana', 'default.jpg', 1571748088, 'Aktif'),
(3, 'Uniquely transition high-payoff infomediaries and visionary testing procedures. Objectively fabricate fully researched niche markets whereas wireless supply chains. Authoritatively strategize distinctive niches for cutting-edge platforms. Interactively transition go forward intellectual capital and enterprise customer service. Distinctively pursue world-class data before go forward bandwidth.\r\n\r\nSeamlessly coordinate global solutions via progressive resources. Compellingly target end-to-end channels whereas vertical models. Energistically evolve extensible collaboration and idea-sharing with cost effective leadership. Efficiently mesh one-to-one channels with ethical strategic theme areas. Credibly foster innovative content after vertical e-business.\r\n\r\nCredibly provide access to dynamic resources with orthogonal interfaces. Enthusiastically facilitate standardized.', 'santri-indonesia-untuk-perdamaian-dunia', 'Abdul Rosyid', 'default.jpg', 1576973710, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `session_email` varchar(128) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(16) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL,
  `author_name` varchar(128) NOT NULL,
  `author_email` varchar(128) NOT NULL,
  `author_image` varchar(128) NOT NULL,
  `is_active` varchar(16) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `session_email`, `cart_id`, `quantity`, `category`, `name`, `description`, `image`, `price`, `author_name`, `author_email`, `author_image`, `is_active`, `date_created`) VALUES
(4, 'abdul.rosyid@students.amikom.ac.id', 1, 1, 'kitab', 'Fathul Qorib', '<p>Dalam rangka untuk memantapkan akidah Ahlussunnah wal Jamaah (Aswaja), Majelis Wakil Cabang Nahdlatul Ulama (MWCNU) Kecamatan Sumberasih Kabupaten Probolinggo, Jawa Timur menggelar kajian kitab kuning Fathul Qorib di Desa Lemah Kembar Kecamatan Sumberasih, Ahad (23/2) malam. &lt;&gt; Kajian kitab kuning ini diikuti oleh sedikitnya 250 orang pengurus NU mulai dari majelis wakil cabang hingga ranting baik lembaga, lajnah dan badan otonom. Selain membaca kitab, para pengurus dan warga NU ini juga melakukan pendalaman berikut memecahkan masalah-masalah dalam kehidupan masyarakat. &nbsp; &ldquo;Selain untuk memantapkan akidah Aswaja, kajian kitab kuning ini dimaksudkan untuk memasyarakat kitab kuning di tengah-tengah masyarakat. Sehingga masyarakat memiliki pemahaman yang cukup terhadap isi dan kandungan kitab kuning Fathul Qorib,&rdquo; ungkap Ketua Tanfidziyah MWCNU Kecamatan Sumberasih Imam Syaf&rsquo;i. &nbsp; Menurut Imam, kitab Fathul Qorib ini adalah kitab kuning yang banyak membahas masalah persoalan fiqih seperti thoharoh, sholat, puasa, zakat, haji,jinayat, munahakat dan mawaris. &ldquo;Ini merupakan salah satu upaya untuk terus memperkuat tradisi-tradisi ulama NU,&rdquo; jelasnya. &nbsp; Dikatakan Imam, kegiatan ini akan dapat menambah wawasan dan pemahaman pengurus dan warga NU terkait kitab kuning Fathul Qorib sehingga mampu mempererat silaturahim dan mempraktekkan langsung dalam kehidupan sehari-hari. &nbsp; &ldquo;Melalui kajian kitab kuning ini kami berharap pengurus maupun warga NU mampu mempraktekkan secara langsung apa yang terdapat di dalam kitab tersebut. Sehingga mampu menjadi pedoman dalam kehidupan sehari-hari,&rdquo; harapnya. (Syamsul AkbarMahbib)</p>', 'fathul-qorib.jpg', '35000', 'Abdul Rosyid', 'abdul.rosyid@students.amikom.ac.id', 'rosyid.png', 'aktif', 1574771645),
(7, 'dinarabdi21@gmail.com', 1, 1, 'kitab', 'Fathul Qorib', '<p>Dalam rangka untuk memantapkan akidah Ahlussunnah wal Jamaah (Aswaja), Majelis Wakil Cabang Nahdlatul Ulama (MWCNU) Kecamatan Sumberasih Kabupaten Probolinggo, Jawa Timur menggelar kajian kitab kuning Fathul Qorib di Desa Lemah Kembar Kecamatan Sumberasih, Ahad (23/2) malam. &lt;&gt; Kajian kitab kuning ini diikuti oleh sedikitnya 250 orang pengurus NU mulai dari majelis wakil cabang hingga ranting baik lembaga, lajnah dan badan otonom. Selain membaca kitab, para pengurus dan warga NU ini juga melakukan pendalaman berikut memecahkan masalah-masalah dalam kehidupan masyarakat. &nbsp; &ldquo;Selain untuk memantapkan akidah Aswaja, kajian kitab kuning ini dimaksudkan untuk memasyarakat kitab kuning di tengah-tengah masyarakat. Sehingga masyarakat memiliki pemahaman yang cukup terhadap isi dan kandungan kitab kuning Fathul Qorib,&rdquo; ungkap Ketua Tanfidziyah MWCNU Kecamatan Sumberasih Imam Syaf&rsquo;i. &nbsp; Menurut Imam, kitab Fathul Qorib ini adalah kitab kuning yang banyak membahas masalah persoalan fiqih seperti thoharoh, sholat, puasa, zakat, haji,jinayat, munahakat dan mawaris. &ldquo;Ini merupakan salah satu upaya untuk terus memperkuat tradisi-tradisi ulama NU,&rdquo; jelasnya. &nbsp; Dikatakan Imam, kegiatan ini akan dapat menambah wawasan dan pemahaman pengurus dan warga NU terkait kitab kuning Fathul Qorib sehingga mampu mempererat silaturahim dan mempraktekkan langsung dalam kehidupan sehari-hari. &nbsp; &ldquo;Melalui kajian kitab kuning ini kami berharap pengurus maupun warga NU mampu mempraktekkan secara langsung apa yang terdapat di dalam kitab tersebut. Sehingga mampu menjadi pedoman dalam kehidupan sehari-hari,&rdquo; harapnya. (Syamsul AkbarMahbib)</p>', 'fathul-qorib.jpg', '35000', 'Abdul Rosyid', 'abdul.rosyid@students.amikom.ac.id', 'rosyid.png', 'aktif', 1576110537);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` text NOT NULL,
  `delivery_service` varchar(128) NOT NULL,
  `bank` varchar(128) NOT NULL,
  `confirm` varchar(128) NOT NULL,
  `date_created` datetime NOT NULL,
  `pay_limit` datetime NOT NULL,
  `is_active` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `name`, `email`, `mobile`, `address`, `delivery_service`, `bank`, `confirm`, `date_created`, `pay_limit`, `is_active`) VALUES
(14, 'Dinar Abdi Perdana', 'dinarabdi21@gmail.com', 2147483647, 'Klaten, Jawa Tengah, Indonesia', 'JNE', 'BRI - 0832354343', 'rosyid1.png', '2020-01-02 08:52:05', '2020-01-03 08:52:05', ''),
(15, 'Abdul Rosyid', 'ab.rosyid98@gmail.com', 2147483647, 'Bunga Antoi, Merangin, Jambi', 'JNE', 'BRI - 0832354343', 'rosyid2.png', '2020-01-02 08:57:33', '2020-01-03 08:57:33', ''),
(16, 'Abdul Rosyid', 'ab.rosyid98@gmail.com', 2147483647, 'Bunga Antoi, Merangin, Jambi', 'JNE', 'BRI - 0832354343', 'blog2.jpg', '2020-01-03 03:23:57', '2020-01-04 03:23:57', ''),
(17, 'Abdul Rosyid', 'ab.rosyid98@gmail.com', 2147483647, 'Bunga Antoi, Merangin, Jambi', 'JNE', 'BRI - 0832354343', 'default.jpg', '2020-01-03 03:34:56', '2020-01-04 03:34:56', ''),
(18, 'Abdul Rosyid', 'ab.rosyid98@gmail.com', 2147483647, 'Bunga Antoi, Merangin, Jambi', 'JNE', 'BRI - 0832354343', 'default.jpg', '2020-01-03 03:37:16', '2020-01-04 03:37:16', '');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
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
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`id`, `author`, `image`, `quession`, `url_quession`, `description`, `status`, `categorie`, `date_created`, `is_active`) VALUES
(3, 'Abdul Rosyid', 'rosyid.png', 'Kalau posisi jama\' muannats salim sebagai obyek yg fathah... maka tetep kasroh?', 'kalau-posisi-jama-muannats-salim-sebagai-obyek-yg-fathah-maka-tetep-kasroh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.', 'Solved', 'sorof', 1571841421, 'aktif'),
(4, 'Dinar Abdi Perdana', 'default.jpg', 'Bahkan sudah lazim setiap tahun hari Santri diperingati dengan tema yang berbeda dan menjadi magnet tersendiri bagi kaum sarungan.', 'bahkan-sudah-lazim-setiap-tahun-hari-santri-diperingati-dengan-tema-yang-berbeda-dan-menjadi-magnet-tersendiri-bagi-kaum-sarungan', '<p>Tanggal 22 Oktober merupakan hari bersejarah bagi Santri serta kaum sarungan dan tentunya acara peringatan dengan berbagai kegiatan yang lakukan. Bahkan sudah lazim setiap tahun hari Santri diperingati dengan tema yang berbeda dan menjadi magnet tersendiri bagi kaum sarungan.</p>', 'Not Solved', 'nahwu', 1574866268, 'aktif'),
(5, 'Dinar Abdi Perdana', 'default.jpg', 'test', 'test', '<p>test</p>', 'Not Solved', 'nahwu', 1574868155, 'aktif'),
(6, 'Abdul Rosyid', 'rosyid5.png', 'Bahkan sudah lazim setiap tahun hari Santri diperingati dengan tema yang berbeda dan menjadi magnet tersendiri bagi kaum sarungan.', 'bahkan-sudah-lazim-setiap-tahun-hari-santri-diperingati-dengan-tema-yang-berbeda-dan-menjadi-magnet-tersendiri-bagi-kaum-sarungan', '<p>&nbsp;</p><p><strong>Dynamically parallel task goal-oriented interfaces before team driven collaboration and idea-sharing. Dramatically fashion wireless synergy vis-a-vis client-based portals. Completely enhance ethical total linkage after premium channels. Uniquely evolve future-proof mindshare after interactive total linkage. Seamlessly initiate unique networks for ubiquitous networks.</strong></p><p><strong>Efficiently.</strong></p>', 'Not Solved', 'nahwu', 1577996525, 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `discussion_categorie`
--

CREATE TABLE `discussion_categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion_categorie`
--

INSERT INTO `discussion_categorie` (`id`, `name`, `slug`, `date_created`, `is_active`) VALUES
(1, 'Nahwu', 'nahwu', 1571762541, 'aktif'),
(2, 'Sorof', 'sorof', 1571762599, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `discussion_commentar`
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
-- Dumping data for table `discussion_commentar`
--

INSERT INTO `discussion_commentar` (`id`, `commentar`, `url_quession`, `author`, `image`, `likes`, `dislikes`, `date_created`, `is_active`) VALUES
(1, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'kalau-posisi-jama-muannats-salim-sebagai-obyek-yg-fathah-maka-tetep-kasroh', 'Abdul Rosyid', 'rosyid.png', '', '', 1571773063, 'aktif'),
(2, '<p>tesss</p>', 'kalau-posisi-jama-muannats-salim-sebagai-obyek-yg-fathah-maka-tetep-kasroh', 'Abdul Rosyid', 'rosyid.png', '', '', 1571996939, 'aktif'),
(3, '<p>Saya akan menjawab</p>', 'kalau-posisi-jama-muannats-salim-sebagai-obyek-yg-fathah-maka-tetep-kasroh', 'Abdul Rosyid', 'rosyid.png', '', '', 1574709486, 'aktif'),
(4, '<p>Uniquely transition high-payoff infomediaries and visionary testing procedures. Objectively fabricate fully researched niche markets whereas wireless supply chains. Authoritatively strategize distinctive niches for cutting-edge platforms. Interactively transition go forward intellectual capital and enterprise customer service. Distinctively pursue world-class data before go forward bandwidth.</p><p>Seamlessly coordinate global solutions via progressive resources. Compellingly target end-to-end channels whereas vertical models. Energistically evolve extensible collaboration and idea-sharing with cost effective leadership. Efficiently mesh one-to-one channels with ethical strategic theme areas. Credibly foster innovative content after vertical e-business.</p><p>Credibly provide access to dynamic resources with orthogonal interfaces. Enthusiastically facilitate standardized.</p>', 'bahkan-sudah-lazim-setiap-tahun-hari-santri-diperingati-dengan-tema-yang-berbeda-dan-menjadi-magnet-tersendiri-bagi-kaum-sarungan', 'Abdul Rosyid', 'default.jpg', '', '', 1576973619, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `id_checkout` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `selection` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `id_checkout`, `id_product`, `name`, `qty`, `price`, `selection`) VALUES
(27, 14, 4, 'Kitab Fathul Qorib', 2, 50000, ''),
(28, 14, 6, 'Kitab Tafsir Jalalain', 1, 75000, ''),
(29, 15, 4, 'Kitab Fathul Qorib', 1, 50000, ''),
(30, 15, 6, 'Kitab Tafsir Jalalain', 1, 75000, ''),
(31, 16, 4, 'Kitab Fathul Qorib', 2, 50000, ''),
(32, 16, 6, 'Kitab Tafsir Jalalain', 1, 75000, ''),
(33, 17, 4, 'Kitab Fathul Qorib', 1, 50000, ''),
(34, 18, 4, 'Kitab Fathul Qorib', 1, 50000, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` varchar(128) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL,
  `qty` int(11) NOT NULL,
  `view` int(32) NOT NULL,
  `author_name` varchar(128) NOT NULL,
  `author_email` varchar(128) NOT NULL,
  `author_image` varchar(128) NOT NULL,
  `author_join_in` int(11) NOT NULL,
  `author_facebook` varchar(128) NOT NULL,
  `author_twitter` varchar(128) NOT NULL,
  `author_instagram` varchar(128) NOT NULL,
  `is_active` varchar(16) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `name`, `description`, `image`, `price`, `qty`, `view`, `author_name`, `author_email`, `author_image`, `author_join_in`, `author_facebook`, `author_twitter`, `author_instagram`, `is_active`, `date_created`) VALUES
(4, 'Kitab', 'Kitab Fathul Qorib', '<p>Phosfluorescently exploit 24/365 interfaces with cross-media schemas. Dramatically innovate interdependent &quot;outside the box&quot; thinking before an expanded array of markets. Distinctively transform distinctive testing procedures for extensible solutions. Objectively cultivate e-business solutions after accurate niches. Professionally procrastinate B2C collaboration and idea-sharing without maintainable products.</p>\r\n\r\n<p>Conveniently disintermediate intuitive information for ubiquitous initiatives. Completely reintermediate next-generation data via client-focused human capital. Enthusiastically embrace effective leadership through premium niches. Rapidiously promote 24/365 content with future-proof resources. Compellingly orchestrate pandemic information before market-driven models.</p>\r\n\r\n<p>Appropriately restore superior initiatives without frictionless metrics. Globally coordinate cost effective partnerships for optimal portals. Objectively integrate cross-unit meta-services via user friendly intellectual capital. Credibly streamline equity invested services for out-of-the-box sources. Dramatically transition compelling action items before out-of-the-box services.</p>\r\n\r\n<p>Intrinsicly implement worldwide value for 24/7 applications. Continually customize professional experiences through granular users. Quickly matrix cross-media markets with viral e-business. Rapidiously conceptualize quality methodologies for efficient metrics. Rapidiously strategize resource maximizing growth strategies before quality opportunities.</p>\r\n\r\n<p>Completely transform transparent platforms via seamless niche markets. Energistically embrace distributed scenarios without effective intellectual capital. Progressively customize viral interfaces rather than unique mindshare. Enthusiastically formulate cooperative innovation whereas superior results. Collaboratively reconceptualize unique markets without bricks-and-clicks collaboration and idea-sharing.</p>\r\n\r\n<p>Professionally network world-class paradigms via sticky products. Monotonectally engineer sustainable catalysts for change before ubiquitous sources. Seamlessly recaptiualize state of the art ideas before intermandated potentialities. Intrinsicly visualize multidisciplinary human capital for an expanded array of bandwidth. Monotonectally underwhelm prospective vortals through exceptional quality vectors.</p>\r\n\r\n<p>Efficiently repurpose fully researched experiences with distributed content. Credibly recaptiualize principle-centered resources with impactful networks. Appropriately redefine ubiquitous portals without high-payoff e-services. Quickly whiteboard distinctive portals through granular ideas. Collaboratively visualize empowered services via impactful functionalities.</p>\r\n\r\n<p>Credibly administrate market-driven catalysts for change vis-a-vis accurate core competencies. Authoritatively foster optimal outsourcing whereas diverse platforms. Continually transition highly efficient e-tailers for covalent web services. Distinctively maintain holistic core competencies before maintainable potentialities. Authoritatively engineer optimal value rather than leveraged services.</p>\r\n\r\n<p>Holisticly transform customized mindshare rather than client-centric ideas. Quickly implement adaptive applications via revolutionary synergy. Credibly harness compelling information and technically sound experiences. Appropriately transition user friendly growth strategies for web-enabled.</p>', 'fathul-qorib1.jpg', '50000', 10, 1, 'Abdul Rosyid', 'abdulrosyidit@gmail.com', 'abdulrosyid.png', 1570601057, '', '', '', 'aktif', 1576810437),
(6, 'Kitab', 'Kitab Tafsir Jalalain', '<p>Appropriately whiteboard best-of-breed web-readiness vis-a-vis error-free human capital. Credibly parallel task clicks-and-mortar information after functionalized manufactured products. Energistically actualize inexpensive process improvements vis-a-vis installed base convergence. Dynamically repurpose global mindshare for performance based users. Competently predominate quality resources for distinctive growth strategies.</p>\r\n\r\n<p>Compellingly harness premium channels without interdependent bandwidth. Seamlessly parallel task intermandated alignments with effective experiences. Synergistically drive exceptional human capital with enterprise information. Distinctively foster backend synergy after viral action items. Synergistically fashion maintainable catalysts for change whereas customer directed products.</p>\r\n\r\n<p>Phosfluorescently iterate customer directed deliverables for resource maximizing channels. Progressively transform exceptional deliverables with holistic core competencies. Appropriately initiate cooperative niches after end-to-end e-services. Uniquely innovate bricks-and-clicks ROI before frictionless solutions. Enthusiastically mesh fully tested leadership via highly efficient &quot;outside the box&quot; thinking.</p>\r\n\r\n<p>Energistically fabricate multifunctional meta-services before focused web-readiness. Uniquely restore covalent collaboration and idea-sharing through inexpensive technologies. Competently administrate visionary internal or &quot;organic&quot; sources and team driven mindshare. Collaboratively predominate goal-oriented outsourcing without cross functional quality vectors. Monotonectally maintain visionary opportunities without robust leadership.</p>\r\n\r\n<p>Monotonectally synthesize team building potentialities via user friendly supply chains. Seamlessly negotiate orthogonal niches with reliable intellectual capital. Appropriately incubate resource sucking core competencies whereas real-time scenarios. Synergistically aggregate frictionless sources vis-a-vis value-added ROI. Assertively leverage other&#39;s virtual methodologies and premium platforms.</p>\r\n\r\n<p>Progressively procrastinate client-based users rather than market positioning e-tailers. Seamlessly enable equity invested e-services after B2C experiences. Dynamically implement cross functional products rather than technically sound solutions. Compellingly plagiarize excellent solutions with ubiquitous e-business. Distinctively target cross-unit e-tailers before future-proof action items.</p>\r\n\r\n<p>Rapidiously transition high standards in potentialities with inexpensive portals. Seamlessly synthesize interoperable niches vis-a-vis end-to-end resources. Conveniently integrate resource-leveling convergence for unique e-services. Continually disintermediate compelling infomediaries before professional interfaces. Energistically benchmark sustainable manufactured products for multidisciplinary mindshare.</p>\r\n\r\n<p>Phosfluorescently underwhelm premium strategic theme areas and just in time infrastructures. Authoritatively orchestrate high-payoff ideas before timely methodologies. Enthusiastically coordinate emerging imperatives through orthogonal process improvements. Quickly enable user-centric initiatives with accurate core competencies. Conveniently benchmark one-to-one data rather than seamless communities.</p>\r\n\r\n<p>Interactively maintain mission-critical bandwidth after economically sound processes. Appropriately enable excellent opportunities before functional systems. Synergistically productivate error-free.</p>', 'tafsir-jalalain-640x450.jpg', '75000', 12, 1, 'Abdul Rosyid', 'abdulrosyidit@gmail.com', 'abdulrosyid.png', 1570601057, '', '', '', 'aktif', 1576816022);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `is_active` varchar(16) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `slug`, `is_active`, `date_created`) VALUES
(1, 'Kitab', 'kitab', 'aktif', 1574390313);

-- --------------------------------------------------------

--
-- Table structure for table `product_commentar`
--

CREATE TABLE `product_commentar` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `id_product` int(11) NOT NULL,
  `author` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_commentar`
--

INSERT INTO `product_commentar` (`id`, `comment`, `id_product`, `author`, `image`, `date_created`, `is_active`) VALUES
(1, 'Completely pursue revolutionary networks vis-a-vis robust synergy. Completely benchmark ethical benefits with user friendly resources. Compellingly administrate interoperable web services through interdependent e-business. Progressively pontificate maintainable e-markets rather than optimal bandwidth. Synergistically scale premier customer service vis-a-vis worldwide infomediaries.\r\n\r\nAuthoritatively fashion wireless portals rather than standards compliant e-business. Enthusiastically incubate flexible testing procedures whereas cross-platform niche markets. Dynamically enable client-centered methods of empowerment for innovative communities. Globally disseminate error-free technologies and empowered collaboration and idea-sharing. Proactively implement corporate total linkage with plug-and-play materials.\r\n\r\nDramatically communicate professional core competencies and premier.', 4, 'Abdul Rosyid', 'default.jpg', 1577928839, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `facebook`, `twitter`, `instagram`, `website`, `mobile`, `address`, `number_home`, `about`) VALUES
(2, 'Abdul Rosyid', 'abdulrosyidit@gmail.com', 'abdulrosyid.png', '$2y$10$cgaN7FE.74pSNNvOQxnNcuTawbGXCZimOUBjApMsLbzKWUPRLHaGC', 1, 1, 1570601057, '', '', '', '', '081548576555', 'Yogyakarta', '1234', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum.\r\n'),
(3, 'Abdul Rosyid', 'abdul.rosyid@students.amikom.ac.id', 'rosyid.png', '$2y$10$M7ARZvFSEVmxqyTLnPJCuObUVEdO5hXKYNwwdyfQuhKM/PyhgbfLG', 2, 1, 1571311048, 'https://web.facebook.com/abdulrosyidcom', 'https://twitter.com/abdulrosyidit', 'https://instagram.com/abdulrosyidcom', 'http://abdulrosyid.com', '081548576555', 'Bangko, Merangin Jambi', '1234', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 'Dinar Abdi Perdana', 'dinarabdi21@gmail.com', 'default.jpg', '$2y$10$wrP0BGvgzXDXosbJhrl3/ew08GsVvuu0Y/l3lj5m6GGOXWhQf0De6', 2, 1, 1571635823, '', '', '', '', '081548576555', 'Klaten, Jawa Tengah, Indonesia', '', ''),
(8, 'Abdul Rosyid', 'ab.rosyid98@gmail.com', 'rosyid5.png', '$2y$10$z/qLnQ8XmNSslTrvYPdsreVSDcqhYVdkBI/84cj4a6wrLOKHTnWUG', 2, 1, 1573262944, '', '', '', '', '081548576555', 'Bunga Antoi, Merangin, Jambi', '12345', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(18, 2, 2),
(24, 1, 5),
(29, 1, 6),
(32, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Article'),
(6, 'Discussion'),
(7, 'Product');

-- --------------------------------------------------------

--
-- Table structure for table `user_notes`
--

CREATE TABLE `user_notes` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `note` text NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_notes`
--

INSERT INTO `user_notes` (`id`, `name`, `email`, `image`, `note`, `date_created`, `is_active`) VALUES
(1, 'Abdul Rosyid', 'abdul.rosyid@students.amikom.ac.id', 'rosyid.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nzss', 1572504846, 'aktif'),
(4, 'Abdul Rosyid', 'abdul.rosyid@students.amikom.ac.id', 'rosyid.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions\r\n', 1572504974, 'aktif'),
(5, 'Abdul Rosyid', 'ab.rosyid98@gmail.com', 'rosyid5.png', 'Quickly network customer directed infomediaries rather than accurate core competencies. Objectively build cooperative expertise through cooperative ideas. Dramatically architect maintainable strategic theme areas after cross-unit collaboration and idea-sharing. Enthusiastically create multimedia based ideas rather than fully researched portals. Distinctively deploy cooperative vortals.', 1577996850, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
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
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'fa fa-tachometer', 1),
(2, 2, 'My Profile', 'dashboard/edit', 'fa fa-user', 1),
(3, 2, 'Edit Profile', 'dashboard/edit', 'fa fa-users', 0),
(4, 3, 'Menu', 'dashboard/menu', 'fa fa-bars', 1),
(5, 3, 'Sub Menu', 'dashboard/submenu', 'fa fa-folder-open-o', 1),
(6, 5, 'Article', 'dashboard/articles', 'fa fa-pencil-square-o', 1),
(7, 1, 'Role', 'dashboard/role', 'fa fa-user-secret', 1),
(8, 5, 'Categorie', 'dashboard/article_category', 'fa fa-bars', 1),
(9, 6, 'Discussions', 'dashboard/discussions', 'fa fa-comments-o', 1),
(10, 6, 'Categorie', 'dashboard/discussion_categorie', 'fa fa-bars', 1),
(11, 2, 'Feedback', 'dashboard/feedback', 'fa fa-commenting', 1),
(12, 7, 'Product', 'dashboard/products', 'fa fa-cart-plus', 1),
(13, 7, 'Category', 'dashboard/product_category', 'fa fa-bars', 1),
(14, 7, 'Checkout', 'dashboard/checkout', 'fa fa-check-circle', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_commentar`
--
ALTER TABLE `article_commentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussion_categorie`
--
ALTER TABLE `discussion_categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussion_commentar`
--
ALTER TABLE `discussion_commentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_commentar`
--
ALTER TABLE `product_commentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notes`
--
ALTER TABLE `user_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `article_commentar`
--
ALTER TABLE `article_commentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `discussion_categorie`
--
ALTER TABLE `discussion_categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `discussion_commentar`
--
ALTER TABLE `discussion_commentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_commentar`
--
ALTER TABLE `product_commentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_notes`
--
ALTER TABLE `user_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
