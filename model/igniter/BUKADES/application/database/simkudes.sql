-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Apr 2016 pada 04.43
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simkudes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggaran`
--

CREATE TABLE IF NOT EXISTS `anggaran` (
  `id` int(11) NOT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `anggaran` varchar(255) DEFAULT NULL,
  `tanggal_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `penanggung_jawab` varchar(255) DEFAULT NULL,
  `tanggal_update` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggaran`
--

INSERT INTO `anggaran` (`id`, `tahun`, `anggaran`, `tanggal_input`, `penanggung_jawab`, `tanggal_update`) VALUES
(1, '2014', '200000000000', '2024-03-15 17:25:12', 'Devi Permana', '2016-03-24'),
(2, '2015', '35050505050', '2024-03-15 17:28:22', 'Devi Permana', '2016-03-24'),
(3, '2016', '10000000000', '2016-03-23 17:29:42', 'Devi Permana', '2016-03-24'),
(4, '2015', '9834758347584', '2016-03-23 17:31:04', 'Devi Permana', '2016-03-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apbdes`
--

CREATE TABLE IF NOT EXISTS `apbdes` (
  `id` int(20) NOT NULL,
  `kegiatan` varchar(200) DEFAULT NULL,
  `anggaran` int(100) DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL,
  `penanggung_jawab` varchar(150) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apbdes`
--

INSERT INTO `apbdes` (`id`, `kegiatan`, `anggaran`, `tanggal`, `penanggung_jawab`, `tahun`, `keterangan`) VALUES
(2, 'Membangun Jembatan', 2147483647, '2016-03-08', 'a', '2004', 'Untuk Akses Jalan Ke Kampung'),
(3, 'Membuat Jalan Raya', 900000, '2016-03-10', 'a', '2015', 'Cek'),
(4, 'Membangun Pemukiman Desa', 2, '2016-04-28', 'Devi Permana', '2016', 'a'),
(5, 'Membangun Pemukiman Desa', 1, '2016-04-14', 'Devi Permana', '2016', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apbdes_pendapatan`
--

CREATE TABLE IF NOT EXISTS `apbdes_pendapatan` (
  `id` int(11) NOT NULL,
  `kode_rekening` varchar(20) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `Anggaran` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apbdes_pendapatan`
--

INSERT INTO `apbdes_pendapatan` (`id`, `kode_rekening`, `uraian`, `Anggaran`) VALUES
(1, '1', 'PENDAPATAN DESA', 0),
(2, '1.1', 'PENDAPATAN ASLI DESA', 0),
(3, '1.1.1', 'HASIL USAHA', 0),
(4, '1.1.1.2', 'Hasil Tanah Kas Desa', 0),
(5, '1.1.1.4', 'Hasil Badan Usaha Milik Desa', 0),
(6, '1.1.1.5', 'Hasil Sewa Kos', 1),
(7, '1.1.1.6', 'Sewa Gedung Serba Guna', 1),
(8, '1.1.1.7', 'Hasil dari Usaha Tanah Desa', 1),
(9, '1.1.2', 'SWADAYA, PARTISIPASI DAN GOTONG ROYONG', 1),
(10, '1.1.2.1', 'Swadaya Masyarakat', 1),
(11, '1.1.2.2', 'Pastisipasi Masyarakat', 1),
(12, '1.1.2.3', 'Gotong Royong', 1),
(13, '1.1.3', 'LAIN-LAIN PENDAPATAN ASLI DESA YANG SAH', 1),
(14, '1.1.3.1', 'Retribusi atas kewenangan lokal desa', 1),
(15, '1.1.3.3', 'Pungutan administrasi D1esa', 1),
(16, '1.1.3.4', 'Tanah kas Desa', 1),
(17, '1.1.3.5', 'Sewa Gedung Serba Guna', 1),
(18, '1.2', 'PENDAPATAN TRANSFER', 1),
(19, '1.2.1', 'Dana Desa', 1),
(20, '1.2.2', 'Bagian dari Hasil Pajak dan Retribusi Daerah Kabupaten/Kota', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `nip` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `last_log` varchar(100) DEFAULT NULL,
  `level` varchar(50) NOT NULL,
  `tanggal_daftar` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `auth`
--

INSERT INTO `auth` (`nip`, `email`, `password`, `status`, `last_log`, `level`, `tanggal_daftar`) VALUES
('1234567890', 'sopi@gmail.com', '240b633313e05792ff7509c165e39b65', 'Aktif', 'Me-Logout email sopi@gmail.com', '2', NULL),
('19980327120120181001', 'Kreskiani23@gmail.com', '45fe63f9f4a27aa4dbf0c3140476d1c8', 'Aktif', 'Me-Logout email Kreskiani23@gmail.com', '2', '2016-03-11 04:24:19'),
('19980327120120181002', 'devipermana97@gmail.com', 'aa84a69154d08d5681d6c3533118f22f', 'Aktif', 'Me-Logout email devipermana97@gmail.com', '1', '2016-03-11 04:24:52'),
('9980017378', 'rizkianiwidiastuti98@gmail.com', 'cd3b1cdea493c51d94c497c9031180e1', 'Aktif', 'Login dengan email rizkianiwidiastuti98@gmail.com', '1', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_apbdes_pendapatan`
--

CREATE TABLE IF NOT EXISTS `detail_apbdes_pendapatan` (
  `id` int(11) NOT NULL,
  `kode_rekening` varchar(10) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `volume` int(200) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga_set` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL,
  `Alokasi dana 30 / 70` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL,
  `aksi` varchar(255) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `waktu` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `aksi`, `nip`, `waktu`) VALUES
(1, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(2, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(3, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(4, 'Me-Logout email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(5, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(6, 'Me-Logout email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(7, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(8, 'Me-Logout email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(9, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(10, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(11, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(12, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(13, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(14, 'Me-Logout email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(15, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(16, 'Me-Logout email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(17, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(18, 'Me-Logout email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(19, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(20, 'Me-Logout email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(21, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(22, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(23, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(24, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(25, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(26, 'Me-Logout email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(27, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(28, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(29, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(30, 'Mengubah data pegawai dengan NIP 19980327120120181002', '19980327120120181002', '0000-00-00 00:00:00'),
(31, 'Mengubah data pegawai dengan NIP 19980327120120181002', '19980327120120181002', '0000-00-00 00:00:00'),
(32, 'Menyimpan data dengan NIP 9981576889', '9981576889', '0000-00-00 00:00:00'),
(33, 'Menyimpan data dengan NIP 123456789', '123456789', '0000-00-00 00:00:00'),
(34, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(35, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(36, 'Mengubah data pegawai dengan NIP 123456789', '123456789', '0000-00-00 00:00:00'),
(37, 'Menyimpan data dengan NIP 1234567890', '1234567890', '0000-00-00 00:00:00'),
(38, 'Menyimpan data dengan NIP 998', '998', '0000-00-00 00:00:00'),
(39, 'Mengubah data pegawai dengan NIP 9981', '9981', '0000-00-00 00:00:00'),
(40, 'Mengubah data pegawai dengan NIP 9981', '9981', '0000-00-00 00:00:00'),
(41, 'Mengubah data pegawai dengan NIP 9981', '9981', '0000-00-00 00:00:00'),
(42, 'Mengubah data pegawai dengan NIP 19980327120120181002', '19980327120120181002', '0000-00-00 00:00:00'),
(43, 'Mengubah data pegawai dengan NIP 19980327120120181002', '19980327120120181002', '0000-00-00 00:00:00'),
(44, 'Mengubah data pegawai dengan NIP 19980327120120181002', '19980327120120181002', '0000-00-00 00:00:00'),
(45, 'Mengubah data pegawai dengan NIP 998', '19980327120120181002', '0000-00-00 00:00:00'),
(46, 'Mengubah data pegawai dengan NIP 123', '19980327120120181002', '0000-00-00 00:00:00'),
(47, 'Menambah data pegawai dengan NIP 123456789', '19980327120120181002', '0000-00-00 00:00:00'),
(48, 'Mengubah data pegawai dengan NIP 321', '19980327120120181002', '0000-00-00 00:00:00'),
(49, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '0000-00-00 00:00:00'),
(50, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(51, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(52, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(53, 'Me-Logout email Kreskiani23@gmail.com', '19980327120120181001', '0000-00-00 00:00:00'),
(54, 'Melupa Password', NULL, '0000-00-00 00:00:00'),
(55, 'Melupa Password', '19980327120120181002', '0000-00-00 00:00:00'),
(56, 'Daftar dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '0000-00-00 00:00:00'),
(57, 'Daftar dengan email blah@gmail.com', '99800', '0000-00-00 00:00:00'),
(58, 'Daftar dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '0000-00-00 00:00:00'),
(59, 'Daftar dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '0000-00-00 00:00:00'),
(60, 'Verifikasi email berhasil dengan id 26674', '9980017378', '0000-00-00 00:00:00'),
(61, 'Verifikasi email berhasil dengan id 26674', '9980017378', '0000-00-00 00:00:00'),
(62, 'Verifikasi email berhasil dengan id 26674', '9980017378', '0000-00-00 00:00:00'),
(63, 'Verifikasi email berhasil dengan id 26674', '9980017378', '0000-00-00 00:00:00'),
(64, 'Verifikasi email berhasil dengan id 26674', '9980017378', '0000-00-00 00:00:00'),
(65, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '0000-00-00 00:00:00'),
(66, 'Me-Logout email rizkianiwidiastuti98@gmail.com', '9980017378', '0000-00-00 00:00:00'),
(67, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '0000-00-00 00:00:00'),
(68, 'Mengubah data profil', '9980017378', '0000-00-00 00:00:00'),
(69, 'Me-Logout email rizkianiwidiastuti98@gmail.com', '9980017378', '0000-00-00 00:00:00'),
(70, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '0000-00-00 00:00:00'),
(71, 'Menghapus data pegawai dengan NIP ', '9980017378', '0000-00-00 00:00:00'),
(72, 'Menghapus data pegawai dengan NIP 321', '9980017378', '0000-00-00 00:00:00'),
(73, 'Menghapus data pegawai dengan NIP 998', '9980017378', '0000-00-00 00:00:00'),
(74, 'Menghapus data pegawai dengan NIP 123456789', '9980017378', '0000-00-00 00:00:00'),
(75, 'Menghapus data pegawai dengan NIP 1234567890', '9980017378', '0000-00-00 00:00:00'),
(76, 'Menghapus data pegawai dengan NIP 9981576889', '9980017378', '0000-00-00 00:00:00'),
(77, 'Menambah data pegawai dengan NIP 1234567890', '9980017378', '0000-00-00 00:00:00'),
(78, 'Me-Logout email rizkianiwidiastuti98@gmail.com', '9980017378', '0000-00-00 00:00:00'),
(79, 'Daftar dengan email sopi@gmail.com', '1234567890', '0000-00-00 00:00:00'),
(80, 'Verifikasi email berhasil dengan id 26551', '1234567890', '0000-00-00 00:00:00'),
(81, 'Login dengan email sopi@gmail.com', '1234567890', '0000-00-00 00:00:00'),
(82, 'Me-Logout email sopi@gmail.com', '1234567890', '0000-00-00 00:00:00'),
(83, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '0000-00-00 00:00:00'),
(84, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '0000-00-00 00:00:00'),
(85, 'Menambah data pegawai dengan NIP 1', '9980017378', '2016-03-30 16:10:36'),
(86, 'Menghapus data pegawai dengan NIP 1', '9980017378', '2016-03-30 16:10:52'),
(87, 'Me-Logout email rizkianiwidiastuti98@gmail.com', '9980017378', '0000-00-00 00:00:00'),
(88, 'Login dengan email rizkianiwidiastuti98@gmail.com', NULL, '2016-03-30 16:14:26'),
(89, 'Me-Logout email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-03-30 16:14:40'),
(90, 'Login dengan email rizkianiwidiastuti98@gmail.com', NULL, '2016-03-30 16:14:51'),
(91, 'Me-Logout email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-03-30 16:57:21'),
(92, 'Login dengan email rizkianiwidiastuti98@gmail.com', NULL, '2016-03-30 16:57:43'),
(93, 'Me-Logout email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-03-30 16:58:01'),
(94, 'Login dengan email rizkianiwidiastuti98@gmail.com', NULL, '2016-03-30 16:58:14'),
(95, 'Login dengan email rizkianiwidiastuti98@gmail.com', 'rizkianiwidiastuti98@gmail.com', '2016-03-30 16:59:22'),
(96, 'Me-Logout email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-03-30 16:59:31'),
(97, 'Login dengan email rizkianiwidiastuti98@gmail.com', 'rizkianiwidiastuti98@gmail.com', '2016-03-30 16:59:40'),
(98, 'Me-Logout email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-03-30 16:59:50'),
(99, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-03-30 17:02:32'),
(100, 'Melupa Password', '19980327120120181002', '2016-04-01 02:33:21'),
(101, 'Melupa Password', '19980327120120181002', '2016-04-01 02:35:18'),
(102, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-01 02:36:25'),
(103, 'Meng-acc Data RAPBDes devipermana97@gmail.com', '19980327120120181002', '2016-03-31 21:46:11'),
(104, 'Meng-acc Data RAPBDes devipermana97@gmail.com', '19980327120120181002', '2016-03-31 21:46:16'),
(105, 'Menyimpan Data APBDes devipermana97@gmail.com', '19980327120120181002', '2016-03-31 22:09:27'),
(106, 'Menyimpan Data APBDes devipermana97@gmail.com', '19980327120120181002', '2016-04-01 03:21:18'),
(107, 'Menyimpan Data Anggaran devipermana97@gmail.com', '19980327120120181002', '2016-03-31 22:37:39'),
(108, 'Menghapus Data Anggaran devipermana97@gmail.com', '19980327120120181002', '2016-03-31 22:38:00'),
(109, 'Menghapus Data RAPBDes devipermana97@gmail.com', '19980327120120181002', '2016-03-31 22:44:34'),
(110, 'Menghapus Data RAPBDes devipermana97@gmail.com', '19980327120120181002', '2016-03-31 22:46:34'),
(111, 'Menghapus Data RAPBDes devipermana97@gmail.com', '19980327120120181002', '2016-03-31 22:46:52'),
(112, 'Menghapus Data Anggaran devipermana97@gmail.com', '19980327120120181002', '2016-03-31 22:49:15'),
(113, 'Mengubah Data APBDes devipermana97@gmail.com', '19980327120120181002', '2016-03-31 23:09:50'),
(114, 'Menyimpan Data RAPBDes devipermana97@gmail.com', '19980327120120181002', '2016-04-01 01:28:45'),
(115, 'Menyimpan Data RAPBDes devipermana97@gmail.com', '19980327120120181002', '2016-04-01 01:30:42'),
(116, 'Meng-acc Data RAPBDes devipermana97@gmail.com', '19980327120120181002', '2016-04-01 01:30:48'),
(117, 'Meng-acc Data RAPBDes devipermana97@gmail.com', '19980327120120181002', '2016-04-01 01:31:12'),
(118, 'Me-Logout email Kreskiani23@gmail.com', '19980327120120181001', '2016-04-01 09:33:28'),
(119, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-01 09:33:53'),
(120, 'Menambah data pegawai dengan NIP 998123', '9980017378', '2016-04-01 09:37:24'),
(121, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-01 10:00:22'),
(122, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-08 02:25:36'),
(123, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-08 03:31:09'),
(124, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-08 03:31:11'),
(125, 'Me-Logout email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-08 03:59:38'),
(126, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-08 06:24:10'),
(127, 'Menghapus data pegawai dengan NIP 998123', '9980017378', '2016-04-08 07:29:19'),
(128, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-11 16:54:45'),
(129, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-12 15:09:32'),
(130, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-14 01:50:15'),
(131, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-14 07:12:55'),
(132, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-14 07:12:58'),
(133, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-14 07:37:33'),
(134, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-14 10:07:59'),
(135, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-14 10:40:42'),
(136, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-15 01:49:57'),
(137, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-15 02:42:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `NIP` varchar(100) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `alamat` text,
  `tanggal_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `nama`, `hp`, `alamat`, `tanggal_input`, `status`, `jenis_kelamin`, `foto`) VALUES
('1234567890', 'Sopi saniah trilani', '123456789009', 'Cisangkan girang', '2016-03-30 16:03:17', 'Aktif', 'Perempuan', 'assets/foto/DeffaultWoman.jpg'),
('19980327120120181001', 'Kresna Aji Hidayat', '089632534965', 'Jl. Pesantren Gg. Trs. Citaman Rt. 02 Rw. 16 No. 91 Kel. Cibabat Kec. Cimahi Utara Kota Cimahi Kabupaten Bandung Provinsi Jawa Barat Negara Indonesia Asia Tenggara Asia Dunia Bumi Planet ke 3 Galaxy ke- 4', '2016-03-11 04:13:49', 'Aktif', 'Laki-Laki', 'assets/foto/2015-11-03 06.46.58 1.jpg'),
('19980327120120181002', 'Devi Permana', '089686730150', 'Komp Bumi Pakusarakan 2 Blok E no 9 Desa. Tanimulya Kec Ngamprah Kab. Bandung Barat kode pos 40552 Prov. Jawa Barat, Indonesia', '2016-03-11 04:14:16', 'Aktif', 'Perempuan', 'assets/foto/20151122_122427.jpg'),
('9980017378', 'Rizkiani Widiastuti', '08992558063', 'Cisangkan girang Rt. 02 Rw. 10 Kel. Padasuka Kec. Cimahi Tengah', '2016-03-28 01:43:14', 'Aktif', 'Perempuan', 'assets/foto/2015-11-03 06.46.59 1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapbdes`
--

CREATE TABLE IF NOT EXISTS `rapbdes` (
  `id` int(30) NOT NULL,
  `rencana` varchar(255) DEFAULT NULL,
  `anggaran` bigint(255) DEFAULT NULL,
  `target` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `tahun` varchar(50) DEFAULT NULL,
  `penanggung_jawab` varchar(200) NOT NULL,
  `grant` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rapbdes`
--

INSERT INTO `rapbdes` (`id`, `rencana`, `anggaran`, `target`, `status`, `keterangan`, `tahun`, `penanggung_jawab`, `grant`) VALUES
(1, 'Membangun Pemukiman Desa', 100000, '20-11-2020', 'Tercapai', 'Untuk Kepentingan Masyarakat', '2015', 'Kresna Aji Hidayat', '1'),
(2, 'Membangun Pemukiman Desa', 100000, '20-11-2020', 'Tercapai', 'Untuk Kepentingan Masyarakat', '2015', 'Kresna Aji Hidayat', '1'),
(4, 'Membangun Rumah-rumah Warga Kali Ciliwung', 200000, '2041-03-01', 'Belum Tercapai', 'Untuk Mensejahterakan masyarakat', '2016', 'Kresna Aji Hidayat', '1'),
(7, 'Dana Penduduk', 2147483647, '2016-04-21', 'Belum Tercapai', 'Untuk Membantu Rakyat Kurang Mampu', '2016', 'Devi Permana', '1'),
(8, 'Pemukinan Desa', 45000000000, '2016-04-21', 'Belum Tercapai', 'Untuk Masyarakat', '2016', 'Devi Permana', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE IF NOT EXISTS `rekening` (
  `nomor_rekening` varchar(50) NOT NULL,
  `k1` int(11) NOT NULL,
  `k2` int(11) NOT NULL,
  `k3` int(11) NOT NULL,
  `k4` int(11) NOT NULL,
  `k5` int(11) NOT NULL,
  `k6` int(11) NOT NULL,
  `k7` int(11) NOT NULL,
  `k8` int(11) NOT NULL,
  `k9` int(11) NOT NULL,
  `k10` int(11) NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`nomor_rekening`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `k9`, `k10`, `uraian`) VALUES
('1', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pembangunan Gedung di SMKN 2 Cimahi di kamarung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggaran`
--
ALTER TABLE `anggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apbdes`
--
ALTER TABLE `apbdes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apbdes_pendapatan`
--
ALTER TABLE `apbdes_pendapatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`nip`,`email`);

--
-- Indexes for table `detail_apbdes_pendapatan`
--
ALTER TABLE `detail_apbdes_pendapatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `rapbdes`
--
ALTER TABLE `rapbdes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`nomor_rekening`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apbdes`
--
ALTER TABLE `apbdes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `apbdes_pendapatan`
--
ALTER TABLE `apbdes_pendapatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `detail_apbdes_pendapatan`
--
ALTER TABLE `detail_apbdes_pendapatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `rapbdes`
--
ALTER TABLE `rapbdes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
