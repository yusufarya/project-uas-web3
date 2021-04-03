-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2021 pada 05.02
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek-web3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `jenis_kel` varchar(56) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `kota` varchar(64) NOT NULL,
  `negara` varchar(64) NOT NULL,
  `kode_pos` varchar(64) NOT NULL,
  `no_telp` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tinggi_badan` int(12) NOT NULL,
  `berat_badan` int(12) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `name`, `jenis_kel`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kota`, `negara`, `kode_pos`, `no_telp`, `email`, `tinggi_badan`, `berat_badan`, `image`) VALUES
(8, 'Aryaherbie', 'laki laki', 'California', '1999-09-11', 'Los Angeles, California', 'Tangerang', 'Indonesia', '15330', '0898712345', 'herbie@gmail.com', 170, 65, ''),
(11, 'Yusuf Aryadilla', 'laki laki', 'Tangerang', '2000-11-29', 'Desa Mekar kondang rt 04-02 kec. sukadiri', 'Tangerang', 'Indonesia', '15330', '08987654321', 'aryaherby29nov2k@gmail.com', 170, 55, ''),
(13, 'Anya geraldine', 'Perempuan', 'Jakarta', '1993-04-12', '....', 'Solo', 'Indonesia', '15880', '08199997000', 'anya@gmail.com', 170, 68, ''),
(17, 'ahmad kamaluddin', 'laki laki', 'Tangerang', '1999-09-11', 'Oja Sepatan.', 'Tangerang', 'Indonesia', '15530', '6289098765678', 'kamaludin@gmail.com', 178, 56, ''),
(20, 'Yusuf Aryadilla', 'laki laki', 'Tangerang', '2000-11-29', 'Kondang City', 'Tangerang', 'Indonesia', '15330', '08987654321', 'aryaherby29nov2k@gmail.com', 170, 55, ''),
(22, 'Fajrul nur alam', 'laki laki', 'Tangerang', '1999-09-20', 'Bumi Asri', 'Tangerang', 'Indonesia', '155830', '08999900000', 'fajrul11@gmail.com', 168, 56, ''),
(23, 'Fajrul nur alam', 'laki laki', 'Tangerang', '1999-09-20', 'Bumi indah', 'Tangerang', 'Indonesia', '155830', '08999900000', 'fajrul11@gmail.com', 168, 56, ''),
(24, 'Nana predator', 'laki laki', 'California', '1897-07-19', 'Kp Kondang ke. Sukadiri', 'Yogyakarta', 'Indonesia', '15330', '08987656789', 'nana@gmail.com', 178, 68, ''),
(25, 'Ziva Magnolia', 'Perempuan', 'Medan', '2001-02-12', 'Jakarta', 'Solo', 'Indonesia', '15880', '08987654321', 'ziva@gmail.com', 165, 55, ''),
(26, 'tsaaa', '', 'Surabaya', '1998-07-23', 'Jl Imam Bonjol', 'surabaya', 'Indonesia', '', '088887777', 'rarara@gmail.com', 0, 0, ''),
(27, 'Karina Naraini', 'Perempuan', 'Bandung', '1999-10-03', 'Jln Cendana No 89', 'Solo', 'Indonesia', '15670', '0813245789', 'narinarina@gmail.com', 165, 50, ''),
(28, 'Yusuf Aryadilla', 'laki laki', 'Tangerang', '2000-11-29', '....sturdyfugih', 'Tangerang', 'Indonesia', '15330', '08987654321', 'aryaherby29nov2k@gmail.com', 170, 55, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamar`
--

CREATE TABLE `lamar` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenis_kel` varchar(128) NOT NULL,
  `tgl_lamar` date NOT NULL,
  `attachment` varchar(40) NOT NULL,
  `kd_loker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lamar`
--

INSERT INTO `lamar` (`id`, `name`, `email`, `jenis_kel`, `tgl_lamar`, `attachment`, `kd_loker`) VALUES
(21, 'Yusuf Aryadilla', 'aryaherby29nov2k@gmail.com', '', '2020-07-01', 'ilyyyyyyyyyyyyyyyyyyyy1.docx', 1),
(25, 'Fajrul nur alam', 'fajrul11@gmail.com', 'Laki-laki', '2020-07-01', 'Kwesioner Riset.doc', 3),
(26, 'Nirvana kurt cobain', 'nirvana@gmail.com', 'Laki-laki', '2020-07-02', 'Resume_Buku_Filsafat_Hukum1.docx', 1),
(27, 'Nana predator', 'nana@gmail.com', 'Laki-laki', '2020-07-04', 'ERD_APSI.docx', 4),
(28, 'Ziva Magnolia', 'ziva@gmail.com', 'Perempuan', '2020-07-05', 'UTS_BAHASA_INGGRIS_(1).docx', 1),
(29, 'Karina Naraini', 'narinarina@gmail.com', 'Perempuan', '2020-07-07', '160673-urban-template-16x9.pptx', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `loker`
--

CREATE TABLE `loker` (
  `kd_loker` int(11) NOT NULL,
  `judul_loker` varchar(56) NOT NULL,
  `kualifikasi` text NOT NULL,
  `job_desk` text NOT NULL,
  `pendidikan` varchar(128) NOT NULL,
  `tgl_tayang` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loker`
--

INSERT INTO `loker` (`kd_loker`, `judul_loker`, `kualifikasi`, `job_desk`, `pendidikan`, `tgl_tayang`, `tgl_berakhir`, `aktif`) VALUES
(1, 'Personal Assistant to Director', '1. Perempuan, umur mini 28 tahun\r\n2.Min D3 Finance / Industrial Engineer\r\n3.Experience min 2 years as Personal Assistant or secretary\r\n4.Knowing Oral & Written Japan language\r\n', '1.Provide discreet personal assistance and secretarial support to the Director\r\n2.Manage and diaries online, co-ordinate and set up meetings. \r\n3.Manage and handle all aspects of local and overseas confidential correspondences. \r\n4.Prepare presentation materials for Global and Regional meetings. \r\n5.Coordinate logistics needs for business trips, meeting schedules, video and teleconferences. \r\n6.Organize and handle the logistics aspects for regional creative meetings and workshops. \r\n7.Manage expense claims. \r\n8.Develop, organize and maintain office-filing system. \r\n9.Maintain and upkeep internal contacts within the department. \r\n10.Responsible for department meeting support and travel arrangements. ', '', '2020-05-09', '2020-06-03', 'Y'),
(2, 'Industrial Engineering Manager', '1.Graduate from Bachelor degree in industrial engineering\r\n2.Able to operate computer ( Ms Office )\r\n3.English active is a must\r\n4.Able to work independently and team work\r\n5.Having skill to analyze and problem solving\r\n6.For placement in Tangerang\r\n', '1.Checking, controlling and organize CI / Improvement team for daily & project\r\n2.Checking, controlling and organize Line balancing & Lay out for production\r\n3.Analyze and approving kaizen like Cost, time, space, worker, etc\r\n', 'D3, S1 Sistem Informasi', '2020-05-09', '2020-06-03', 'Y'),
(3, 'Design Graphic', '1.Min 1 year experience in garment company\r\n2.Understand about Software graphic (Corel, Adobe Illustrator)\r\n3.English active is a must\r\n4.For placement in Tangerang\r\n', 'descjob', 'SMK, D3, S1, Multimedia', '2020-05-02', '2020-05-29', 'N'),
(4, 'IT Support', '1.Minimum D III Computer, Fresh Graduated are welcome\r\n2.Familiar with trouble shoot for computer & networking\r\n3.Familiar with Routing System like Microtic / Cisco is Point Plus \r\n4.Good interpersonal and communication skill\r\n5.Knowing in oral & written English\r\n6.Computer literate in using Ms. Office, Internet\r\n7.Able to work under pressure\r\n8.Able to work independently as well as team\r\n', '1.Daily IT Operation\r\n2.Support daily trouble shoot for Hardware and Networking\r\n3.Preventive Maintenance Schedule \r\n', 'SMK, D3, S1, Teknik Informatika', '2020-06-08', '2020-06-29', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `terima`
--

CREATE TABLE `terima` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenis_kel` varchar(60) NOT NULL,
  `tgl_lamar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `terima`
--

INSERT INTO `terima` (`id`, `name`, `email`, `jenis_kel`, `tgl_lamar`) VALUES
(21, 'Yusuf Aryadilla', 'aryaherby29nov2k@gmail.com', '', '2020-07-01'),
(28, 'Ziva Magnolia', 'ziva@gmail.com', 'Perempuan', '2020-07-05');

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
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(11, 'Yusuf Aryadilla', 'aryaherby29nov2k@gmail.com', 'default.png', '$2y$10$qz.r/WqDkC0dYCIaPFeVN.QKbAQY3dBZ8xL2mWzK46fd2v8NvEWpK', 2, 1, 1588078198),
(18, 'ahmad kamaluddin', 'kamaludin@gmail.com', 'default.jpg', '$2y$10$e/RPsd3Vc7VqhIZRB3W6nODWsZmpEFE0HxJnQCWNS2cb0GK6qkH1y', 2, 1, 1592593711),
(19, 'Herbie', 'herbie@gmail.com', 'default.jpg', '$2y$10$eiDtdeSCqQhodROXqnkvNewZuK9OGt9joJOaydsEIIRRmlEQyRxJK', 2, 1, 1592634870),
(20, 'Anya geraldine', 'anya@gmail.com', 'default.jpg', '$2y$10$dSHTIciH2DdAnV6zXYbcpez66lQKwJjxthBolNtz5X59vHC/bDeFu', 2, 1, 1592666843),
(21, 'ahmad kamaluddin', 'kamaludin@gmail.com', 'default.jpg', '$2y$10$dbogFBAA0V.WCnbu0Ahx0u1FNKL6IIuYqLyuj0FEmP45bCYObz.q6', 2, 1, 1593455510),
(23, 'Fajrul nur alam', 'fajrul11@gmail.com', 'default.jpg', '$2y$10$/v41YMnA5K4qjPuvBn.xYOQRReiU/e32X9EZzFqEBosS6ZXuGY922', 2, 1, 1593591212),
(24, 'Admin', 'admin@gmail.com', 'default.png', '$2y$10$pDwb4mJPygdW3zrjSB7uguEezDOV35WdMBN6EEFn9saQivaFVkTO6', 1, 1, 1593626185),
(26, 'Nirvana', 'nirvana@gmail.com', 'default.jpg', '$2y$10$DsJdWBT/cQ2xvHfH5Wr3O.8pNvMBUYMclZVUJq1kuk8Tw8hag76iO', 2, 1, 1593669377),
(27, 'Nana predator', 'nana@gmail.com', 'default.jpg', '$2y$10$46OMheCJFcFsdKZ1R1jRxObzB6ciDHwiI6bH/sKgGsBKN5wQQC4oC', 2, 1, 1593854723),
(28, 'Ziva Magnolia', 'ziva@gmail.com', 'default.jpg', '$2y$10$zW8LPcUOTMEunrKD6fh/F.rM0IoPt3XWha/0UasOV8srTZq.Dr4pq', 2, 1, 1593949138),
(29, 'tsaaa', 'rarara@gmail.com', 'default.jpg', '$2y$10$0vZ8UNpXCV/kVnWz.mdrjOWUIjOS4V3.KL45cz5.k/a5/zoiHLS.y', 2, 1, 1594098955),
(30, 'narina', 'narinarina@gmail.com', 'default.jpg', '$2y$10$ksmG/JizvzbQ9k.Ae8gyU.IwNMPYApDcjo3olK4G3YspWQquyLCD2', 2, 1, 1594099313),
(31, 'alis', 'alis@gmail.com', 'default.jpg', '$2y$10$LVDmJcefWyyxxk8cxfo1n.Stql4d6pagMmto60CLihbqrzmbtSfv6', 2, 1, 1594266811);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lamar`
--
ALTER TABLE `lamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`kd_loker`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `terima`
--
ALTER TABLE `terima`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `lamar`
--
ALTER TABLE `lamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `loker`
--
ALTER TABLE `loker`
  MODIFY `kd_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `terima`
--
ALTER TABLE `terima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
