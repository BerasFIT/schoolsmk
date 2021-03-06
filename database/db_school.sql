-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2021 pada 04.09
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_school`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `content`, `photo`) VALUES
(5, '<p><strong>Januari 2020 :</strong></p>\r\n<ol>\r\n<li>Seminar</li>\r\n<li>Wawancara</li>\r\n<li>Kuliah Online</li>\r\n</ol>\r\n<p><strong>Februari 2020 :</strong></p>\r\n<ol>\r\n<li>Seminar</li>\r\n<li>Seminar Kedua</li>\r\n<li>Seminar Ketiga</li>\r\n</ol>', '20db093ab926d030b16d9c2aedc6f094.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `asisten`
--

CREATE TABLE `asisten` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `asisten`
--

INSERT INTO `asisten` (`id`, `content`, `photo`) VALUES
(1, '<h4>A. Apa itu jurusan Asisten Keperawatan?</h4>\r\n<p>Pada saat kesadaran berpendidikan itu tumbuh dari kota sampai di desa, terasa sekali lembaga dan sarana prasarana yang disediakan oleh pemerintah jauh dari cukup. Sehingga diperlukan kontribusi pihak swasta untuk berperan dalam mendirikan lembaga pendidikan dan memberikan pelayanan pendidikan bagi anak bangsa yang membutuhkan layanan pedidikan. Karena itu pada hari rabu, tanggal 2 mei 2007, yayasan Asy-Syuhada Roeslie merekomendasikan pendirian Smp Dan Smk Asy-Syuhada kepada dinas pendidikan kabupaten bogor. <br><br></p>', '0097f749bdc41b81a882a84f9f820253.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banners`
--

INSERT INTO `banners` (`id`, `title`, `text`, `photo`) VALUES
(1, 'Belajar tidak akan pernah membuat lelah', '\"Pendidikan adalah bekal terbaik untuk perjalanan hidup.\" ', '1ced87b27cee74e53502fb0abe0de2f6.jpeg'),
(3, 'Terus Maju', '\"Kegagalan hanyalah kesempatan untuk memulai lagi. Kali ini lebih cerdas.\"', '05ac50d1d73333931d6c211e5806af79.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bg_majors`
--

CREATE TABLE `bg_majors` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bg_majors`
--

INSERT INTO `bg_majors` (`id`, `photo`) VALUES
(1, 'b812b356ea9cf1f14a32b66fe536e0a7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstra`
--

CREATE TABLE `ekstra` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ekstra`
--

INSERT INTO `ekstra` (`id`, `name`, `photo`) VALUES
(1, 'Tapak Suci', 'tapak-suci.jpg'),
(2, 'Musik', 'musik-20210116173845.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `photo`) VALUES
(3, 'Lab Komputer', 'lab-komputer-20200430114840.jpg'),
(4, 'Perpustakaan', 'perpustakaan-20200430114943.jpg'),
(5, 'Kantin', 'kantin-20200430115218.jpeg'),
(6, 'Lapangan', 'lapangan-20200430115417.jpeg'),
(7, 'Lab Pemasaran', 'lab-pemasaran-20200430115719.jpg'),
(8, 'Lab Admistrasi Perkantoran', 'lab-admistrasi-perkantoran-20200430115528.jpeg'),
(9, 'Musholla', 'musholla-20200430120051.jpg'),
(10, 'Ruang Kelas', 'ruang-kelas-20200430120101.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` text NOT NULL,
  `nama` text NOT NULL,
  `pendidikan` text NOT NULL,
  `pelajaran` text NOT NULL,
  `jabatan` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `pendidikan`, `pelajaran`, `jabatan`, `photo`) VALUES
(1, '456', 'Ok', 'S1 Univ', 'Bahasa Indonesia', 'Guru', '-20210117154244.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identity`
--

CREATE TABLE `identity` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identity`
--

INSERT INTO `identity` (`id`, `meta_title`, `meta_description`, `meta_keyword`, `photo`) VALUES
(1, '', 'Himbauan untuk siswa dan siswi SMK KESEHATAN DARUSSALAM BERGAS untuk tetap fokus untuk belajar dengan baik, amanah, serta berakhlak mulia.', 'SMK KESEHATAN DARUSSALAM BERGAS', '18efe02e7fcc5c6a4ee8c619e501a7d9.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepsek`
--

CREATE TABLE `kepsek` (
  `id` int(11) NOT NULL,
  `nip` text NOT NULL,
  `nama` text NOT NULL,
  `pendidikan` text NOT NULL,
  `jabatan` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kepsek`
--

INSERT INTO `kepsek` (`id`, `nip`, `nama`, `pendidikan`, `jabatan`, `photo`) VALUES
(1, '123', 'Coba Test', 'S2 Universitas Negeri Semarang 2007', 'Kepala Sekolah', '6cc1ec52bf9b2bca406c9f0edca0ab5b.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laborat`
--

CREATE TABLE `laborat` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laborat`
--

INSERT INTO `laborat` (`id`, `content`, `photo`) VALUES
(1, '<h4>A. Apa itu jurusan Teknologi Laboratorium Medik?</h4>\r\n<p>Pada saat kesadaran berpendidikan itu tumbuh dari kota sampai di desa, terasa sekali lembaga dan sarana prasarana yang disediakan oleh pemerintah jauh dari cukup. Sehingga diperlukan kontribusi pihak swasta untuk berperan dalam mendirikan lembaga pendidikan dan memberikan pelayanan pendidikan bagi anak bangsa yang membutuhkan layanan pedidikan. Karena itu pada hari rabu, tanggal 2 mei 2007, yayasan Asy-Syuhada Roeslie merekomendasikan pendirian Smp Dan Smk Asy-Syuhada kepada dinas pendidikan kabupaten bogor. <br><br></p>', '6018825273aea0f0cd3fe0fceb16c85d.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `majors`
--

CREATE TABLE `majors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `is_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `user_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Halaman Utama', '', 'fas fa-fw fa-home', 'Y'),
(2, 2, 'Profil Sekolah', '', 'fas fa-fw fa-school', 'Y'),
(3, 2, 'Jurusan', '', 'fas fa-fw fa-flask', 'Y'),
(4, 2, 'Agenda', 'jadwal', 'fas fa-fw fa-calendar', 'Y'),
(5, 2, 'Prestasi Sekolah', 'prestasi', 'fas fa-fw fa-trophy', 'Y'),
(6, 2, 'Tenaga Kependidikan', '', 'fas fa-fw fa-users', 'Y'),
(7, 2, 'Tata Tertib', 'tatib', 'fas fa-fw fa-book', 'Y'),
(8, 2, 'Berita', 'berita', 'fas fa-fw fa-newspaper', 'Y'),
(9, 2, 'Upload File', 'upfile', 'fas fa-fw fa-upload', 'Y'),
(10, 1, 'Manajemen Admin', 'user', 'fas fa-fw fa-user', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opening`
--

CREATE TABLE `opening` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `opening`
--

INSERT INTO `opening` (`id`, `content`, `photo`) VALUES
(1, 'Era globalisasi dengan segala implikasinya menjadi salah satu pemicu cepatnya perubahan yang terjadi pada berbagai aspek kehidupan masyarakat, dan bila tidak ada upaya sungguh-sungguh untuk mengantisipasinya maka hal tersebut akan menjadi maslah yang sangat serius. Dalam hal ini dunia pendidikan mempunyai tanggung jawab yang besar, terutama dalam menyiapkan sumber daya manusia yang tangguh sehingga mampu hidup selaras didalam perubahan itu sendiri. Pendidikan merupakan investasi jangka panjang yang hasilnya tidak dapat dilihat dan dirasakan secara instan, sehingga sekolah sebagai ujung tombak dilapangan harus memiliki arah pengembangan jangka panjang dengan tahapan pencapaiannya yang jelas dan tetap mengakomodir tuntutan permasalahan faktual kekinian yang ada di masyarakat.', 'e528107af4c68648a6d10cd2cafba74d.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` text NOT NULL,
  `nama` text NOT NULL,
  `pendidikan` text NOT NULL,
  `pelajaran` text NOT NULL,
  `jabatan` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `pendidikan`, `pelajaran`, `jabatan`, `photo`) VALUES
(1, '345', 'Test Coba', 'D3 Universitas', 'Abc', 'Pustakawati', '-20210117143616.jpeg'),
(2, '098', 'Hai', 'S1 Universitas', '-', 'Satpam', '-20210117143627.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `is_active` char(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `seo_title`, `content`, `photo`, `is_active`, `date`) VALUES
(1, 'Peserta Ujikom', 'peserta-ujikom', '<p>Kegiatan dan pelatihan siswa dan siswi peserta ujikom, dilaksanakan dengan kesenangan serta antusias siswa dan siswi SMK KESEHATAN DARUSSALAM BERGAS.</p>', '-20200430120422.jpeg', 'Y', '2021-01-16'),
(2, 'Kegiatan Outdoor', 'kegiatan-outdoor', '<p>Kegiatan outdoor yang sangat menyenangkan dan semangat yang membara.<br></p>', '-20200430120805.jpeg', 'Y', '2020-04-30'),
(3, 'Perayaan Hari Batik Nasional', 'perayaan-hari-batik-nasional', '<p>Hari raya batik nasional dilakukan dengan membatik pada kain yang dilakukan oleh seluruh aspek di sekolah.<br></p>', '-20200430121231.jpg', 'Y', '2020-04-30'),
(4, 'Doa Bersama ', 'doa-bersama', '<p>Doa bersama sebelum dilaksanakannya Ujian Nasional, agar diberikan kemudahan .<br></p>', '-20200430121342.jpg', 'Y', '2020-04-30'),
(5, 'Kegiatan dengan Polisi', 'kegiatan-dengan-polisi', '<p>Mengajarkan tentang etika berkendara saat di jalan raya.<br></p>', 'kegiatan-dengan-polisi-20200430121645.jpg', 'Y', '2020-04-30'),
(6, 'Mentoring dengan Profesional', 'mentoring-dengan-profesional', 'Mentoring yang dilakukan oleh Bapak Bapak Profesional.<br>', 'mentoring-dengan-profesional-20200430121728.jpg', 'Y', '2020-04-30'),
(7, 'Pentas Seni Tahunan', 'pentas-seni-tahunan', '<p>Pentas seni yang dilakukan setiap tahun ini merupakan sebuah tradisi.<br></p>', 'pentas-seni-tahunan-20200430121831.jpg', 'Y', '2020-04-30'),
(8, 'Dzikir Bareng', 'dzikir-bareng', '<p>Dzikir bareng agar dapet pahala dan terhindar dari panasnya api neraka.<br></p>', 'dzikir-bareng-20200430121951.jpg', 'Y', '2020-04-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id`, `name`, `content`, `photo`) VALUES
(1, 'Juara Debat Bahasa Inggris Jateng 2018', 'Piala Gubernur Jateng', 'juara-debat-bahasa-inggris-jateng-2018-20210117045740.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id`, `content`, `photo`) VALUES
(1, '<h4>A. Latar Belakang Berdirinya SMK Kesehatan Darussalam Bergas</h4>\r\n Pada saat kesadaran berpendidikan itu tumbuh dari mulai dikota-kota sampai di desa, terasa sekali lembaga dan sarana prasarana yang disediakan oleh pemerintah jauh dari cukup. Sehingga diperlukan kontribusi pihak swasta untuk berperan dalam mendirikan lembaga pendidikan dan memberikan pelayanan pendidikan bagi anak bangsa yang membutuhkan layanan pedidikan. Karena itu pada hari rabu, tanggal 2 mei 2007, yayasan Asy-Syuhada Roeslie merekomendasikan pendirian Smp Dan Smk Asy-Syuhada kepada dinas pendidikan kabupaten bogor.\r\n <br>\r\n <br>\r\n\r\n <h4>B. Legalitas SMK Kesehatan Darussalam Bergas Sebagai Lembaga Pendidikan Formal</h4>\r\n Pada tanggal 24 agustus 2007 Dinas Pendidikan Kabupaten Bogor  memberikan surat keputusan pendirian dan izin operasional Smp Islam Asy-Syuhada. Dan kemudian pada tanggal 12 desember 2008 juga Dinas Pendidikan Kabupaten Bogor memberikan surat keputusan pendirian dan izin operasional untuk Smk Islam Asy-Syuhada.\r\n <br>\r\n <br>\r\n Pada tahun ketiga, yaitu tahun 2009 dimana Smp baru mempunyai siswa kelas IX dan Smk mempunyai kelas XII, dan belum ada siswa yang selesai atau lulus, Smp Dan Smk Islam Asy-Syuhada sudah diakreditasi yang pertama, oleh Badan Akreditasi Nasional Sekolah/Madrasah Provinsi Jawa Barat.\r\n Selanjutnya lima tahun kemudian, yaitu pada tahun 2014 Smp dan Smk Asy-Syuhada sudah diakreditasi yang ke-2 dan Alhamdulillah Smp dan Smk sudah terakreditasi dengan nilai A. pada tahun 2019 yang lalu Smp dan Smk Islam Asy-Syuhada sudah melaksanakan akreditasi dan Alhamdulillah badan akreditasi nasional sekolah dan madrasah juga memberikan nilai A baik untuk smp maupun untuk smk semua jurusan', 'e49012c75631defeba0fb86e452eb351.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `structure`
--

CREATE TABLE `structure` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `structure`
--

INSERT INTO `structure` (`id`, `photo`) VALUES
(1, '0a9a0c2cabfd87f0b94e4c30a00242b6.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenus`
--

CREATE TABLE `submenus` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_title` varchar(50) NOT NULL,
  `sub_url` varchar(100) NOT NULL,
  `is_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `submenus`
--

INSERT INTO `submenus` (`id`, `menu_id`, `sub_title`, `sub_url`, `is_active`) VALUES
(1, 1, 'Identitas Web', 'identitas', 'Y'),
(2, 1, 'Sambutan', 'sambutan', 'Y'),
(3, 1, 'Banner', 'banner', 'Y'),
(4, 2, 'Fasilitas', 'fasilitas', 'Y'),
(6, 1, 'Background Login', 'background', 'Y'),
(7, 2, 'Sejarah', 'sejarah', 'Y'),
(8, 2, 'Struktur Organisasi', 'struktur', 'Y'),
(9, 3, 'Asisten Keperawatan', 'asisten', 'Y'),
(10, 3, 'Tek. Lab. Medik', 'laborat', 'Y'),
(11, 2, 'Ekstrakurikuler', 'ekstra', 'Y'),
(12, 6, 'Kepala Sekolah', 'kepsek', 'Y'),
(13, 6, 'Pegawai', 'pegawai', 'Y'),
(14, 6, 'Guru', 'guru', 'Y'),
(15, 2, 'Visi Misi', 'visimisi', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tatatertib`
--

CREATE TABLE `tatatertib` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tatatertib`
--

INSERT INTO `tatatertib` (`id`, `content`, `photo`) VALUES
(1, '<h4>A. Latar Belakang SMK Kesehatan Darussalam Bergas</h4>\r\n<p>Pada saat kesadaran berpendidikan itu tumbuh dari mulai dikota-kota sampai di desa, terasa sekali lembaga dan sarana prasarana yang disediakan oleh pemerintah jauh dari cukup. Sehingga diperlukan kontribusi pihak swasta untuk berperan dalam mendirikan lembaga pendidikan dan memberikan pelayanan pendidikan bagi anak bangsa yang membutuhkan layanan pedidikan. Karena itu pada hari rabu, tanggal 2 mei 2007, yayasan Asy-Syuhada Roeslie merekomendasikan pendirian Smp Dan Smk Asy-Syuhada kepada dinas pendidikan kabupaten bogor.</p>', 'tata-tertib.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id`, `name`, `photo`) VALUES
(1, 'SK Januari 2021', 'sk-januari-2021-20210117081615.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$63pqg8Mtq8ABN3c59RD2.OLMNLSV2hEij7bo1n59XNQFoM/xSz.iS', 'admin@mail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1610951519, 1, 'Admin', 'SMK Kesehatan Darussalam', NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(38, 1, 1),
(39, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi`
--

CREATE TABLE `visi` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi`
--

INSERT INTO `visi` (`id`, `content`, `photo`) VALUES
(1, '<h4>VISI</h4>\r\n<p>Melalui proses pembelajaran yang menitikberatkan pada IPTEQ dan IMTAQ, SMK Kesehatan Darussalam Bergas diharapkan mampu mewujudkan lulusan yang berakhlak karimah, beriman, bertaqwa dan siap hidup mandiri.</p>\r\n<h4>MISI</h4>\r\n<ul>\r\n<li>Melaksanakan pembinaan pembelajaran secara efektif dan efisien.</li>\r\n<li>Memberikan motivasi kepada peserta didik agar mampu mengenali potensi dirinya sehingga termotivasi untuk mengembangkannya.</li>\r\n<li>Mengupayakan jalinan kemitraan dengan instansi pemerintah, swasta, dan perusahaan untuk mendapatkan peluang dalam lapangan pekerjaan.</li>\r\n<li>Menerapkan konsep religius dalam bermasyarakat di lingkungan masyarakat sekolah dan lingkungan masyarakat secara umum. </li>\r\n</ul>', 'visimisi2.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `asisten`
--
ALTER TABLE `asisten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bg_majors`
--
ALTER TABLE `bg_majors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ekstra`
--
ALTER TABLE `ekstra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `identity`
--
ALTER TABLE `identity`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laborat`
--
ALTER TABLE `laborat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `opening`
--
ALTER TABLE `opening`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `tatatertib`
--
ALTER TABLE `tatatertib`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indeks untuk tabel `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `asisten`
--
ALTER TABLE `asisten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `bg_majors`
--
ALTER TABLE `bg_majors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ekstra`
--
ALTER TABLE `ekstra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `identity`
--
ALTER TABLE `identity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kepsek`
--
ALTER TABLE `kepsek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `laborat`
--
ALTER TABLE `laborat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `majors`
--
ALTER TABLE `majors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `opening`
--
ALTER TABLE `opening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `structure`
--
ALTER TABLE `structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tatatertib`
--
ALTER TABLE `tatatertib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `submenus`
--
ALTER TABLE `submenus`
  ADD CONSTRAINT `submenus_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
