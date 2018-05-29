-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2016 at 11:26 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggaran`
--

CREATE TABLE IF NOT EXISTS `anggaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` varchar(255) DEFAULT NULL,
  `anggaran` varchar(255) DEFAULT NULL,
  `tanggal_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `penanggung_jawab` varchar(255) DEFAULT NULL,
  `tanggal_update` varchar(100) DEFAULT NULL,
  `nomor_rekening` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `anggaran`
--

INSERT INTO `anggaran` (`id`, `tahun`, `anggaran`, `tanggal_input`, `penanggung_jawab`, `tanggal_update`, `nomor_rekening`) VALUES
(1, '2014', '10600000', '2016-04-14 23:18:33', 'Devi Permana', '2016-04-15', '1.1.2.3'),
(2, '2015', '50250000', '2016-04-14 23:18:48', 'Devi Permana', '2016-04-15', '1.1.1.2'),
(3, '2015', '300000000', '2016-04-14 23:19:16', 'Devi Permana', '2016-04-15', '1.1.3.4'),
(4, '2015', '7800000000', '2016-04-14 23:19:35', 'Devi Permana', '2016-04-15', '1.1.1.2'),
(5, '2016', '650000000', '2016-04-14 23:20:13', 'Devi Permana', '2016-04-15', '1.2.1'),
(6, '2016', '650000000', '2016-04-14 23:20:13', 'Devi Permana', '2016-04-15', '1.2.1'),
(7, '2017', '700000000', '2016-04-15 01:18:34', 'Devi Permana', '2016-04-15', '1.1.1.6'),
(8, '2015', '500000000', '2016-04-15 01:52:12', 'Devi Permana', '2016-04-15', '1.1.1.2'),
(9, '2015', '500000000', '2016-04-15 01:52:52', 'Devi Permana', '2016-04-15', '1.1.1.2'),
(10, '2016', '98982938323', '2016-04-15 03:14:42', 'Devi Permana', '2016-04-15', '1.1.2.3'),
(11, '2016', '700000000', '2016-04-15 03:34:28', 'Devi Permana', '2016-04-15', '1.1.1.6');

-- --------------------------------------------------------

--
-- Table structure for table `apbdes`
--

CREATE TABLE IF NOT EXISTS `apbdes` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kegiatan` varchar(200) DEFAULT NULL,
  `anggaran` int(100) DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL,
  `penanggung_jawab` varchar(150) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `apbdes`
--

INSERT INTO `apbdes` (`id`, `kegiatan`, `anggaran`, `tanggal`, `penanggung_jawab`, `tahun`, `keterangan`) VALUES
(2, 'Membangun Jembatan', 2147483647, '2016-03-08', 'a', '2004', 'Untuk Akses Jalan Ke Kampung'),
(4, 'Membangun Pemukiman Desa', 2, '2016-04-28', 'Devi Permana', '2016', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `apbdes_pendapatan`
--

CREATE TABLE IF NOT EXISTS `apbdes_pendapatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_rekening` varchar(20) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `anggaran` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `apbdes_pendapatan`
--

INSERT INTO `apbdes_pendapatan` (`id`, `nomor_rekening`, `uraian`, `anggaran`) VALUES
(1, '1', 'PENDAPATAN DESA', 0),
(2, '1.1', 'PENDAPATAN ASLI DESA', 0),
(3, '1.1.1', 'HASIL USAHA', 0),
(4, '1.1.1.2', 'Hasil Tanah Kas Desa', 500000000),
(5, '1.1.1.4', 'Hasil Badan Usaha Milik Desa', 0),
(6, '1.1.1.5', 'Hasil Sewa Kos', 1),
(7, '1.1.1.6', 'Sewa Gedung Serba Guna', 700000000),
(8, '1.1.1.7', 'Hasil dari Usaha Tanah Desa', 1),
(9, '1.1.2', 'SWADAYA, PARTISIPASI DAN GOTONG ROYONG', 1),
(10, '1.1.2.1', 'Swadaya Masyarakat', 1),
(11, '1.1.2.2', 'Pastisipasi Masyarakat', 1),
(12, '1.1.2.3', 'Gotong Royong', 2147483647),
(13, '1.1.3', 'LAIN-LAIN PENDAPATAN ASLI DESA YANG SAH', 1),
(14, '1.1.3.1', 'Retribusi atas kewenangan lokal desa', 1),
(15, '1.1.3.3', 'Pungutan administrasi Desa', 1),
(16, '1.1.3.4', 'Tanah kas Desa', 1),
(17, '1.1.3.5', 'Sewa Gedung Serba Guna', 1),
(18, '1.2', 'PENDAPATAN TRANSFER', 1),
(19, '1.2.1', 'Dana Desa', 1),
(20, '1.2.2', 'Bagian dari Hasil Pajak dan Retribusi Daerah Kabupaten/Kota', 0);

-- --------------------------------------------------------

--
-- Table structure for table `apbdes_perubahan`
--

CREATE TABLE IF NOT EXISTS `apbdes_perubahan` (
  `nomor_perdes` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `penanggung_jawab` varchar(50) NOT NULL,
  `grant` int(11) NOT NULL,
  PRIMARY KEY (`nomor_perdes`),
  UNIQUE KEY `tahun` (`tahun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apbdes_perubahan`
--

INSERT INTO `apbdes_perubahan` (`nomor_perdes`, `tahun`, `status`, `penanggung_jawab`, `grant`) VALUES
('002/PERDES/2016', 2016, 'Tidak Murni', 'Rizkiani Widiastuti', 0);

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `nip` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `last_log` varchar(100) DEFAULT NULL,
  `level` varchar(50) NOT NULL,
  `tanggal_daftar` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`nip`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`nip`, `email`, `password`, `status`, `last_log`, `level`, `tanggal_daftar`) VALUES
('1234567890', 'sopi@gmail.com', '240b633313e05792ff7509c165e39b65', 'Aktif', 'Me-Logout email sopi@gmail.com', '2', NULL),
('19980327120120181001', 'Kreskiani23@gmail.com', '45fe63f9f4a27aa4dbf0c3140476d1c8', 'Aktif', 'Me-Logout email Kreskiani23@gmail.com', '2', '2016-03-11 04:24:19'),
('19980327120120181002', 'devipermana97@gmail.com', 'aa84a69154d08d5681d6c3533118f22f', 'Aktif', 'Login dengan email devipermana97@gmail.com', '1', '2016-03-11 04:24:52'),
('9980017378', 'rizkianiwidiastuti98@gmail.com', 'cd3b1cdea493c51d94c497c9031180e1', 'Aktif', 'Menambah dan menyimpan item rekening dengan uraian Penyewaan Setum', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_desa`
--

CREATE TABLE IF NOT EXISTS `data_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `data_penanda_tangan`
--

CREATE TABLE IF NOT EXISTS `data_penanda_tangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip_camat` varchar(255) NOT NULL,
  `nama_camat` varchar(255) NOT NULL,
  `pangkat_camat` varchar(255) NOT NULL,
  `nip_kades` varchar(255) NOT NULL,
  `nama_kades` varchar(255) NOT NULL,
  `pangkat_kades` varchar(255) NOT NULL,
  `nip_sekdes` varchar(255) NOT NULL,
  `nama_sekdes` varchar(255) NOT NULL,
  `pangkat_sekdes` varchar(255) NOT NULL,
  `nip_bendes` varchar(255) NOT NULL,
  `nama_bendes` varchar(255) NOT NULL,
  `pangkat_bendes` varchar(255) NOT NULL,
  `nip_plt` varchar(255) NOT NULL,
  `nama_plt` varchar(255) NOT NULL,
  `pangkat_plt` varchar(255) NOT NULL,
  `nip_pj` varchar(255) NOT NULL,
  `nama_pj` varchar(255) NOT NULL,
  `pangkat_pj` varchar(255) NOT NULL,
  `nip_kaur` varchar(255) NOT NULL,
  `nama_kaur` varchar(255) NOT NULL,
  `pangkat_kaur` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data_penanda_tangan`
--

INSERT INTO `data_penanda_tangan` (`id`, `nip_camat`, `nama_camat`, `pangkat_camat`, `nip_kades`, `nama_kades`, `pangkat_kades`, `nip_sekdes`, `nama_sekdes`, `pangkat_sekdes`, `nip_bendes`, `nama_bendes`, `pangkat_bendes`, `nip_plt`, `nama_plt`, `pangkat_plt`, `nip_pj`, `nama_pj`, `pangkat_pj`, `nip_kaur`, `nama_kaur`, `pangkat_kaur`) VALUES
(1, '111111111111111111111', 'abdul ghani', 'penata I', '111111111111111111120', 'bidul', 'penata II', '111111111111111111130', 'ahmad', 'penata III', '222222222222222222240', 'wen', 'penata I', '3333333333333333333310', 'kin', 'penata II', '3333333333333333333340', 'moin', 'penata III', '4444444444444444444410', 'pani', 'penata I');

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk`
--

CREATE TABLE IF NOT EXISTS `data_penduduk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_kk` varchar(20) NOT NULL,
  `no_NIK` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `golongan_darah` varchar(10) NOT NULL,
  `Alamat` text NOT NULL,
  `RT` int(11) NOT NULL,
  `RW` int(11) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `hubungan_keluarga` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`no_kk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`id`, `no_kk`, `no_NIK`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `golongan_darah`, `Alamat`, `RT`, `RW`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `agama`, `status_perkawinan`, `pendidikan_terakhir`, `pekerjaan`, `hubungan_keluarga`, `kewarganegaraan`, `nama_ayah`, `nama_ibu`) VALUES
(0, '32847587349573948578', '32847587349573948577', 'Devi', 'Bandung', '1997-11-26', 'Laki - Laki', 'O', 'Bumi Pakusarakan 2 E9', 5, 23, 'purwosari', 'purworejo', 'pasuruan', 'islam', 'belummenikah', 'slta/sederajat', 'pelajar/mahasiswa', 'anak', 'Indonesia', 'Unang', 'Marsinah'),
(1, '21897428374827384723', '82397498273489723423', 'Ujang', 'Bandung', '1984-03-01', 'Laki - Laki', 'B', 'Jalan Mekar sari no 20', 2, 2, 'purwosari', 'purworejo', 'pasuruan', 'protestan', 'menikah', 'diplomaiv/stratai', 'bekerjakaryawanbumn', 'kepalakeluarga', 'Indonesia', 'Ujaka', 'Watin'),
(2, '83465873458973489578', '92834929489236545673', 'Masmudik', 'Ambon', '1969-03-05', 'Laki - Laki', 'O', 'Komp Melati Mawar 90', 5, 20, 'purwosari', 'purworejo', 'pasuruan', 'protestan', 'belummenikah', 'tamatsd/sederajat', 'bekerjaburuhtaniperkebunan', 'kepalakeluarga', 'Indonesia', 'Manu', 'mina'),
(3, '62315462364325764782', '98237482734872384729', 'Wawan', 'Cimahi', '1980-03-12', 'Laki - Laki', 'A', 'Gg Budiansah 4 no 10', 10, 1, 'purwosari', 'purworejo', 'pasuruan', 'islam', 'menikah', 'diplomaiv/stratai', 'bekerjaindustri', 'kepalakeluarga', 'Indonesia', 'Budi', 'Wani'),
(4, '23232332323123214234', '23472384682736487234', 'Budi', 'Yogyakarta', '1975-08-13', 'Laki - Laki', 'AB', 'Jalan budi asih no 100 ', 9, 9, 'purwosari', 'purworejo', 'pasuruan', 'islam', 'menikah', 'slta/sederajat', 'bekerjapns', 'kepalakeluarga', 'Indonesia', 'Maman', 'kirana'),
(6, '11111111111111111111', '11111111111111111112', 'Acep', 'Bandung', '1984-03-01', 'Laki - Laki', 'O', 'Jalan kamarung 20', 3, 4, 'purwosari', 'purworejo', 'pasuruan', 'Hindu', 'Belum Menikah', 'DIPLOMA IV / STRATA I', 'bekerjapolri', 'Kepala Keluarga', 'Indonesia', 'Manto', 'suti');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat`
--

CREATE TABLE IF NOT EXISTS `data_surat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_surat` varchar(255) NOT NULL,
  `jumlah_keluar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `data_surat`
--

INSERT INTO `data_surat` (`id`, `nomor_surat`, `nama_surat`, `jumlah_keluar`) VALUES
(1, '/SK.lahir/01/2016', 'Surat Keterangan Kelahiran', ''),
(2, '/SK.pindah/01/2016', 'surat Keterangan Pindah', ''),
(3, '/SK.domisili/01/2016', 'Surat Keterangan Domisili', ''),
(4, '/SK.KTP/01/2016', 'Surat Keterangan Pembuatan KTP dari RT-RW', ''),
(5, '/SK.KK/01/2016', 'Surat Keterangan Pembuatan KK dari RT-RW', ''),
(6, '/SK.wali/01/2016', 'Surat Keterangan Wali', ''),
(7, '/SK.nikah/01/2016', 'Surat Keterangan untuk Nikah', ''),
(8, '/SK.SKCK/01/2016', 'Surat Keterangan Pembuatan SKCK dari RT-RW', ''),
(9, '/SK.TM/01/2016', 'Surat Keterangan Tidak Mampu', ''),
(10, '/SK.kematian/01/2016', 'Surat Keterangan Kematian', ''),
(11, '/SK.BM/01/2016', 'Surat Keterangan Belum Menikah', ''),
(12, '/SK.AU/01/2016', 'Surat Keterangan Asal Usul', ''),
(13, '/SK.PM/01/2016', 'Surat Persetujuan Mempelai', ''),
(14, '/SK.OT/01/2016', 'Surat Keterangan tentang Orang Tua', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_keterangan_asal_usul`
--

CREATE TABLE IF NOT EXISTS `data_surat_keterangan_asal_usul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_pria` varchar(255) NOT NULL,
  `tempat_tanggal_lahir_pria` varchar(255) NOT NULL,
  `kewarganegaraan_pria` varchar(255) NOT NULL,
  `agama_pria` varchar(255) NOT NULL,
  `pekerjaan_pria` varchar(255) NOT NULL,
  `alamat_pria` varchar(255) NOT NULL,
  `nama_wanita` varchar(255) NOT NULL,
  `tempat_tanggal_lahir_wanita` varchar(255) NOT NULL,
  `kewarganegaraan_wanita` varchar(255) NOT NULL,
  `agama_wanita` varchar(255) NOT NULL,
  `pekerjaan_wanita` varchar(255) NOT NULL,
  `alamat_wanita` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `data_surat_keterangan_asal_usul`
--

INSERT INTO `data_surat_keterangan_asal_usul` (`id`, `nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `rt`, `rw`, `nama`, `tempat_tanggal_lahir`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`, `nama_pria`, `tempat_tanggal_lahir_pria`, `kewarganegaraan_pria`, `agama_pria`, `pekerjaan_pria`, `alamat_pria`, `nama_wanita`, `tempat_tanggal_lahir_wanita`, `kewarganegaraan_wanita`, `agama_wanita`, `pekerjaan_wanita`, `alamat_wanita`, `tanggal`, `penanda_tangan`) VALUES
(1, '001/SK.AU/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Indonesia', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', 'abeng', 'bandung,2016-05-06', 'Indonesia', 'Islam', 'Pelajar / Mahasiswa', 'cicaheum', 'weni', 'jakarta,2016-05-12', 'Indonesia', 'Islam', 'Belum / Tidak Bekerja', 'saung hejo', '12 May 2016', ''),
(2, '002/SK.AU/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Indonesia', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', 'a', ',', '', 'Islam', 'Belum / Tidak Bekerja', '', '', ',', '', 'Islam', 'Belum / Tidak Bekerja', '', '16 May 2016', ''),
(3, '003/SK.AU/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Indonesia', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', 'Devi', 'Bandung,1997-11-26', 'Indonesia', 'Islam', 'Belum / Tidak Bekerja', 'Bumi Pakusarakan 2 E9', '', ',', '', 'Islam', 'Belum / Tidak Bekerja', '', '16 May 2016', 'abdul ghani'),
(4, '004/SK.AU/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Indonesia', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', 'Ujang', 'Bandung,1984-03-01', 'Indonesia', 'Islam', 'Belum / Tidak Bekerja', 'Jalan Mekar sari no 20', '', ',', '', 'Islam', 'Belum / Tidak Bekerja', '', '16 May 2016', 'abdul ghani');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_keterangan_belum_menikah`
--

CREATE TABLE IF NOT EXISTS `data_surat_keterangan_belum_menikah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `data_surat_keterangan_belum_menikah`
--

INSERT INTO `data_surat_keterangan_belum_menikah` (`id`, `nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `rt`, `rw`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `agama`, `alamat`, `tujuan`, `tanggal`, `penanda_tangan`) VALUES
(1, '001/SK.BM/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'Bumi Pakusarakan 2 E9', 'pribadi', '12 May 2016', ''),
(2, '002/SK.BM/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'Bumi Pakusarakan 2 E9', 'asd', '16 May 2016', ''),
(3, '003/SK.BM/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'Bumi Pakusarakan 2 E9', 'asd', '16 May 2016', 'abdul ghani');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_keterangan_domisili`
--

CREATE TABLE IF NOT EXISTS `data_surat_keterangan_domisili` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `status_perkawinan` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `data_surat_keterangan_domisili`
--

INSERT INTO `data_surat_keterangan_domisili` (`id`, `nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `rt`, `rw`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `agama`, `status_perkawinan`, `kewarganegaraan`, `alamat`, `tujuan`, `tanggal`, `penanda_tangan`) VALUES
(1, '001/SK.domisili/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', 'cimahi,26 november 1997', 'laki-laki', 'bekerjaburuh', 'islam', 'belummenikah', 'Indonesia', 'Jalan cidahu no 10', 'asd', '10 May 2016', ''),
(2, '002/SK.domisili/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', 'cimahi,26 november 1997', 'laki-laki', 'bekerjaburuh', 'islam', 'belummenikah', 'Indonesia', 'Jalan cidahu no 10', 'asd', '10 May 2016', ''),
(3, '003/SK.domisili/01/2016', '', '', '', '5', '23', 'Devi', 'Bandung,1997-11-26', 'laki-laki', 'pelajar/mahasiswa', 'islam', 'belummenikah', 'Indonesia', 'Bumi Pakusarakan 2 E9', 'bosan', '10 May 2016', ''),
(4, '004/SK.domisili/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'belummenikah', 'Indonesia', 'Bumi Pakusarakan 2 E9', 'untuk pemindahan lahan', '12 May 2016', ''),
(5, '005/SK.domisili/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'belummenikah', 'Indonesia', 'Bumi Pakusarakan 2 E9', 'surat', '16 May 2016', ''),
(6, '006/SK.domisili/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'belummenikah', 'Indonesia', 'Bumi Pakusarakan 2 E9', 'asd', '16 May 2016', 'abdul ghani'),
(7, '007/SK.domisili/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'belummenikah', 'Indonesia', 'Bumi Pakusarakan 2 E9', 'untuk pemindahan lahan', '16 May 2016', 'abdul ghani'),
(8, '008/SK.domisili/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'belummenikah', 'Indonesia', 'Bumi Pakusarakan 2 E9', 'sd', '16 May 2016', 'abdul ghani');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_keterangan_kelahiran`
--

CREATE TABLE IF NOT EXISTS `data_surat_keterangan_kelahiran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `rt` varchar(20) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `nama_ibu_kandung` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `lahir` varchar(200) NOT NULL,
  `panjang` varchar(20) NOT NULL,
  `berat` varchar(20) NOT NULL,
  `anak_ke` varchar(2) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`nomor_surat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `data_surat_keterangan_kelahiran`
--

INSERT INTO `data_surat_keterangan_kelahiran` (`id`, `nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `rt`, `rw`, `nama_ibu_kandung`, `agama`, `pekerjaan`, `alamat`, `nama_anak`, `jenis_kelamin`, `lahir`, `panjang`, `berat`, `anak_ke`, `tanggal`, `penanda_tangan`) VALUES
(1, '001/SK.lahir/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', 'islam', 'bekerjaburuh', 'Jalan cidahu no 10', '', 'laki-laki', 'senin ', '', '', '', '', ''),
(2, '002/SK.lahir/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', 'islam', 'bekerjaburuh', 'Jalan cidahu no 10', '', 'laki-laki', 'senin ', '', '', '', '', ''),
(3, '003/SK.lahir/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', 'islam', 'bekerjaburuh', 'Jalan cidahu no 10', '', 'laki-laki', 'senin ', '', '', '', '', ''),
(4, '004/SK.lahir/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', 'islam', 'bekerjaburuh', 'Jalan cidahu no 10', '', 'laki-laki', 'senin ', '', '', '', '', ''),
(5, '005/SK.lahir/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', 'islam', 'bekerjaburuh', 'Jalan cidahu no 10', '', 'laki-laki', 'senin ', '', '', '', '', ''),
(6, '006/SK.lahir/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', 'islam', 'bekerjaburuh', 'Jalan cidahu no 10', 'asd', 'laki-laki', 'senin ', '', '', '', '', ''),
(7, '007/SK.lahir/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', 'islam', 'bekerjaburuh', 'Jalan cidahu no 10', 'k', 'laki-laki', 'senin ', '', '', '', '', ''),
(8, '008/SK.lahir/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', 'islam', 'bekerjaburuh', 'Jalan cidahu no 10', '', 'laki-laki', 'senin ', '', '', '', '', ''),
(9, '009/SK.lahir/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', 'islam', 'bekerjaburuh', 'Jalan cidahu no 10', 'ade', 'laki-laki', 'kamis 2016-05-11', '30', '100', '2', '', ''),
(10, '010/SK.lahir/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', 'kemal', 'laki-laki', 'rabu 2016-05-11', '20', '1002', '2', '', ''),
(11, '011/SK.lahir/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', '', 'laki-laki', 'senin ', '', '', '', '', ''),
(12, '012/SK.lahir/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', 'a', 'laki-laki', 'senin ', '5', '3', '3', '16 May 2016', 'ahmad');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_keterangan_kematian`
--

CREATE TABLE IF NOT EXISTS `data_surat_keterangan_kematian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hari_tanggal` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `pada_usia` varchar(255) NOT NULL,
  `dikarenakan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `data_surat_keterangan_kematian`
--

INSERT INTO `data_surat_keterangan_kematian` (`id`, `nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `rt`, `rw`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `hari_tanggal`, `jam`, `pada_usia`, `dikarenakan`, `tanggal`, `penanda_tangan`) VALUES
(1, '001/SK.kematian/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'islam', 'Bumi Pakusarakan 2 E9', 'senin', '07:00', '34', 'sakit jantung', '12 May 2016', ''),
(2, '002/SK.kematian/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'islam', 'Bumi Pakusarakan 2 E9', 'senin', '07:00', '23', 'sakit jantung', '12 May 2016', ''),
(3, '003/SK.kematian/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'islam', 'Bumi Pakusarakan 2 E9', 'senin', '', '', '', '16 May 2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_keterangan_pembuatan_skck`
--

CREATE TABLE IF NOT EXISTS `data_surat_keterangan_pembuatan_skck` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `data_surat_keterangan_pembuatan_skck`
--

INSERT INTO `data_surat_keterangan_pembuatan_skck` (`id`, `nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `rt`, `rw`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `agama`, `alamat`, `tanggal`, `penanda_tangan`) VALUES
(1, '001/SK.SKCK/01/2016', 'purwosari', 'purworejo', 'pasuruan', '9', '9', 'Budi', 'Yogyakarta,1975-08-13', 'Laki - Laki', 'bekerjapns', 'islam', 'Jalan budi asih no 100 ', '11 May 2016', ''),
(2, '002/SK.SKCK/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'Bumi Pakusarakan 2 E9', '12 May 2016', ''),
(3, '003/SK.SKCK/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'Bumi Pakusarakan 2 E9', '16 May 2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_keterangan_pindah`
--

CREATE TABLE IF NOT EXISTS `data_surat_keterangan_pindah` (
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nomor_kk` varchar(255) NOT NULL,
  `nomor_nik` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `pindah_ke` text NOT NULL,
  `nama_desa_baru` varchar(255) NOT NULL,
  `nama_kecamatan_baru` varchar(255) NOT NULL,
  `nama_kabupaten_baru` varchar(255) NOT NULL,
  `alasan_pindah` varchar(255) NOT NULL,
  `jumlah_pengikut` varchar(100) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan` varchar(255) NOT NULL,
  PRIMARY KEY (`nomor_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_surat_keterangan_pindah`
--

INSERT INTO `data_surat_keterangan_pindah` (`nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `rt`, `rw`, `nama_lengkap`, `nomor_kk`, `nomor_nik`, `jenis_kelamin`, `tempat_tanggal_lahir`, `agama`, `kewarganegaraan`, `alamat`, `pindah_ke`, `nama_desa_baru`, `nama_kecamatan_baru`, `nama_kabupaten_baru`, `alasan_pindah`, `jumlah_pengikut`, `tanggal`, `penanda_tangan`) VALUES
('001/SK.pindah/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', '3201620385172635', '3201623983492849', 'laki-laki', 'cimahi,26 november 1997', 'islam', 'Indonesia', 'Jalan cidahu no 10', 'asdas', 'asdsa', 'sd', 'asd', 'asd2', '2', '10 May 2016', ''),
('002/SK.pindah/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', '3201620385172635', '3201623983492849', 'laki-laki', 'cimahi,26 november 1997', 'islam', 'Indonesia', 'Jalan cidahu no 10', 'cicaheum', 'cica', 'aci', 'iul', 'bosan', '5', '10 May 2016', ''),
('003/SK.pindah/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', '3201620385172635', '3201623983492849', 'laki-laki', 'cimahi,26 november 1997', 'islam', 'Indonesia', 'Jalan cidahu no 10', '', '', '', '', '', '', '10 May 2016', ''),
('004/SK.pindah/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', '32847587349573948578', '32847587349573948577', 'Laki - Laki', 'Bandung,1997-11-26', 'islam', 'Indonesia', 'Bumi Pakusarakan 2 E9', 'cicheum', 'cibuntu', 'cimanggu', 'soreng', 'untuk keperluan bisnis', '4', '12 May 2016', ''),
('005/SK.pindah/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', '32847587349573948578', '32847587349573948577', 'Laki - Laki', 'Bandung,1997-11-26', 'islam', 'Indonesia', 'Bumi Pakusarakan 2 E9', '', '', '', '', '', '', '16 May 2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_keterangan_tentang_orang_tua`
--

CREATE TABLE IF NOT EXISTS `data_surat_keterangan_tentang_orang_tua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `tempat_tanggal_lahir_ayah` varchar(255) NOT NULL,
  `kewarganegaraan_ayah` varchar(255) NOT NULL,
  `agama_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `alamat_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `tempat_tanggal_lahir_ibu` varchar(255) NOT NULL,
  `kewarganegaraan_ibu` varchar(255) NOT NULL,
  `agama_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `alamat_ibu` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `data_surat_keterangan_tentang_orang_tua`
--

INSERT INTO `data_surat_keterangan_tentang_orang_tua` (`id`, `nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `nama_ayah`, `tempat_tanggal_lahir_ayah`, `kewarganegaraan_ayah`, `agama_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `nama_ibu`, `tempat_tanggal_lahir_ibu`, `kewarganegaraan_ibu`, `agama_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `nama`, `jenis_kelamin`, `tempat_tanggal_lahir`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`, `tanggal`, `penanda_tangan`) VALUES
(1, '001/SK.OT/01/2016', 'purwosari', 'purworejo', 'pasuruan', 'Devi', 'Bandung,1997-11-26', 'Indonesia', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', 'a', 'b,c', 'g', 'e', 'f', 'd', 'h', 'w', 'i,j', 'n', 'l', 'm', 'k', '12 May 2016', ''),
(2, '002/SK.OT/01/2016', 'purwosari', 'purworejo', 'pasuruan', 'Devi', 'Bandung,1997-11-26', 'Indonesia', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', 'weni', 'jakarta,2016-05-20', 'Indonesia', 'Islam', 'Belum / Tidak Bekerja', 'jalan bandung', 'ahmad', 'Laki - Laki', 'jakarta,2016-05-12', 'Indonesia', 'Islam', 'Belum / Tidak Bekerja', 'jalan cimahi', '12 May 2016', ''),
(3, '003/SK.OT/01/2016', 'purwosari', 'purworejo', 'pasuruan', 'Devi', 'Bandung,1997-11-26', 'Indonesia', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', '', ',', '', 'Islam', 'Belum / Tidak Bekerja', '', '', 'Laki - Laki', ',', '', 'Islam', 'Belum / Tidak Bekerja', '', '16 May 2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_keterangan_tidak_mampu`
--

CREATE TABLE IF NOT EXISTS `data_surat_keterangan_tidak_mampu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `status_perkawinan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `data_surat_keterangan_tidak_mampu`
--

INSERT INTO `data_surat_keterangan_tidak_mampu` (`id`, `nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `rt`, `rw`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `status_perkawinan`, `alamat`, `tanggal`, `penanda_tangan`) VALUES
(1, '001/SK.TM/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'belummenikah', 'Bumi Pakusarakan 2 E9', '11 May 2016', ''),
(2, '002/SK.TM/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'belummenikah', 'Bumi Pakusarakan 2 E9', '12 May 2016', ''),
(3, '003/SK.TM/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'belummenikah', 'Bumi Pakusarakan 2 E9', '12 May 2016', ''),
(4, '004/SK.TM/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'belummenikah', 'Bumi Pakusarakan 2 E9', '12 May 2016', ''),
(5, '005/SK.TM/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'belummenikah', 'Bumi Pakusarakan 2 E9', '16 May 2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_keterangan_untuk_nikah`
--

CREATE TABLE IF NOT EXISTS `data_surat_keterangan_untuk_nikah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `bin_binti` varchar(255) NOT NULL,
  `status_perkawinan` varchar(255) NOT NULL,
  `nama_istri_suami_dulu` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `data_surat_keterangan_untuk_nikah`
--

INSERT INTO `data_surat_keterangan_untuk_nikah` (`id`, `nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `rt`, `rw`, `nama`, `jenis_kelamin`, `tempat_tanggal_lahir`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`, `bin_binti`, `status_perkawinan`, `nama_istri_suami_dulu`, `tanggal`, `penanda_tangan`) VALUES
(1, '001/SK.nikah/01/2016', 'purwosari', 'purworejo', 'pasuruan', '', '', 'Devi', 'Laki - Laki', 'Bandung,1997-11-26', 'Indonesia', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', 'a', 'Menikah', '-', '11 May 2016', ''),
(2, '002/SK.nikah/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Laki - Laki', 'Bandung,1997-11-26', 'Indonesia', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', 'a', 'Menikah', '-', '11 May 2016', ''),
(3, '003/SK.nikah/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Laki - Laki', 'Bandung,1997-11-26', 'Indonesia', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', 'maman', 'Menikah', 'sutimah', '12 May 2016', ''),
(4, '004/SK.nikah/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Laki - Laki', 'Bandung,1997-11-26', 'Indonesia', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', '', 'Belum Menikah', '', '16 May 2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_keterangan_wali`
--

CREATE TABLE IF NOT EXISTS `data_surat_keterangan_wali` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_dua` varchar(255) NOT NULL,
  `umur_dua` varchar(255) NOT NULL,
  `agama_dua` varchar(255) NOT NULL,
  `alamat_dua` varchar(255) NOT NULL,
  `nama_tiga` varchar(255) NOT NULL,
  `umur_tiga` varchar(255) NOT NULL,
  `agama_tiga` varchar(255) NOT NULL,
  `alamat_tiga` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `data_surat_keterangan_wali`
--

INSERT INTO `data_surat_keterangan_wali` (`id`, `nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `rt`, `rw`, `nama`, `umur`, `agama`, `alamat`, `nama_dua`, `umur_dua`, `agama_dua`, `alamat_dua`, `nama_tiga`, `umur_tiga`, `agama_tiga`, `alamat_tiga`, `tanggal`, `penanda_tangan`) VALUES
(1, '001/SK.wali/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', '19', 'islam', 'Bumi Pakusarakan 2 E9', 'a', 'd', 'c', 'b', 'e', 'h', 'g', 'f', '11 May 2016', ''),
(2, '002/SK.wali/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', '19', 'islam', 'Bumi Pakusarakan 2 E9', 'acep', '20', 'islam', 'bumi pakusarakan', 'weni', '19', 'islam', 'bumi bumian', '12 May 2016', ''),
(3, '003/SK.wali/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', '19', 'islam', 'Bumi Pakusarakan 2 E9', '', '', '', '', '', '', '', '', '16 May 2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_pengantar_pembuatan_kk`
--

CREATE TABLE IF NOT EXISTS `data_surat_pengantar_pembuatan_kk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `status_perkawinan` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `data_surat_pengantar_pembuatan_kk`
--

INSERT INTO `data_surat_pengantar_pembuatan_kk` (`id`, `nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `rt`, `rw`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `agama`, `status_perkawinan`, `kewarganegaraan`, `alamat`, `tanggal`, `penanda_tangan`) VALUES
(1, '001/SK.KK/01/2016', 'purwosari', 'purworejo', 'pasuruan', '3', '4', 'Acep', 'Bandung,1984-03-01', 'Laki - Laki', 'bekerjapolri', 'Hindu', 'Belum Menikah', 'Indonesia', 'Jalan kamarung 20', '11 May 2016', ''),
(2, '002/SK.KK/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'belummenikah', 'Indonesia', 'Bumi Pakusarakan 2 E9', '12 May 2016', ''),
(3, '003/SK.KK/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'belummenikah', 'Indonesia', 'Bumi Pakusarakan 2 E9', '16 May 2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_pengantar_pembuatan_ktp`
--

CREATE TABLE IF NOT EXISTS `data_surat_pengantar_pembuatan_ktp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `status_perkawinan` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `data_surat_pengantar_pembuatan_ktp`
--

INSERT INTO `data_surat_pengantar_pembuatan_ktp` (`id`, `nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `rt`, `rw`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `agama`, `status_perkawinan`, `kewarganegaraan`, `alamat`, `tanggal`, `penanda_tangan`) VALUES
(3, '001/SK.KTP/01/2016', 'purwosari', 'purworejo', 'pasuruan', '1', '1', 'ujang', 'cimahi,26 november 1997', 'laki-laki', 'bekerjaburuh', 'islam', 'belummenikah', 'Indonesia', 'Jalan cidahu no 10', '10 May 2016', ''),
(4, '002/SK.KTP/01/2016', 'purwosari', 'purworejo', 'pasuruan', '3', '4', 'Acep', 'Bandung,1984-03-01', 'Laki - Laki', 'bekerjapolri', 'Hindu', 'Belum Menikah', 'Indonesia', 'Jalan kamarung 20', '11 May 2016', ''),
(5, '003/SK.KTP/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'belummenikah', 'Indonesia', 'Bumi Pakusarakan 2 E9', '12 May 2016', ''),
(6, '004/SK.KTP/01/2016', 'purwosari', 'purworejo', 'pasuruan', '5', '23', 'Devi', 'Bandung,1997-11-26', 'Laki - Laki', 'pelajar/mahasiswa', 'islam', 'belummenikah', 'Indonesia', 'Bumi Pakusarakan 2 E9', '16 May 2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_persetujuan_mempelai`
--

CREATE TABLE IF NOT EXISTS `data_surat_persetujuan_mempelai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `nama_suami` varchar(255) NOT NULL,
  `bin` varchar(255) NOT NULL,
  `tempat_tanggal_lahir_suami` varchar(255) NOT NULL,
  `kewarganegaraan_suami` varchar(255) NOT NULL,
  `agama_suami` varchar(255) NOT NULL,
  `pekerjaan_suami` varchar(255) NOT NULL,
  `alamat_suami` varchar(255) NOT NULL,
  `nama_istri` varchar(255) NOT NULL,
  `binti` varchar(255) NOT NULL,
  `tempat_tanggal_lahir_istri` varchar(255) NOT NULL,
  `kewarganegaraan_istri` varchar(255) NOT NULL,
  `agama_istri` varchar(255) NOT NULL,
  `pekerjaan_istri` varchar(255) NOT NULL,
  `alamat_istri` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penanda_tangan_suami` varchar(255) NOT NULL,
  `penanda_tangan_istri` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `data_surat_persetujuan_mempelai`
--

INSERT INTO `data_surat_persetujuan_mempelai` (`id`, `nomor_surat`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `nama_suami`, `bin`, `tempat_tanggal_lahir_suami`, `kewarganegaraan_suami`, `agama_suami`, `pekerjaan_suami`, `alamat_suami`, `nama_istri`, `binti`, `tempat_tanggal_lahir_istri`, `kewarganegaraan_istri`, `agama_istri`, `pekerjaan_istri`, `alamat_istri`, `tanggal`, `penanda_tangan_suami`, `penanda_tangan_istri`) VALUES
(1, '001/SK.PM/01/2016', 'purwosari', 'purworejo', 'pasuruan', 'Devi', 'Unang', 'Bandung,1997-11-26', 'Indonesia', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', 'wina', 'maman', 'bandung,2016-05-11', 'Indonesia', 'Islam', 'Belum / Tidak Bekerja', 'jalan jakarta', '12 May 2016', '', ''),
(2, '002/SK.PM/01/2016', 'purwosari', 'purworejo', 'pasuruan', 'Devi', 'Unang', 'Bandung,1997-11-26', 'Indonesia', 'islam', 'pelajar/mahasiswa', 'Bumi Pakusarakan 2 E9', '', '', ',', '', 'Islam', 'Belum / Tidak Bekerja', '', '16 May 2016', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_apbdes_pendapatan`
--

CREATE TABLE IF NOT EXISTS `detail_apbdes_pendapatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_rekening` varchar(10) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `volume` int(200) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga_set` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL,
  `Alokasi_dana` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `detail_apbdes_pendapatan`
--

INSERT INTO `detail_apbdes_pendapatan` (`id`, `kode_rekening`, `uraian`, `volume`, `satuan`, `harga_set`, `jumlah`, `sumber_dana`, `Alokasi_dana`) VALUES
(1, '1.1.1.6', 'null', 0, 'null', 0, 0, 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `item_rekening`
--

CREATE TABLE IF NOT EXISTS `item_rekening` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_rekening` varchar(50) NOT NULL,
  `uraian` text NOT NULL,
  `tanggal_ditambahkan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tahun` int(11) NOT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `item_rekening`
--

INSERT INTO `item_rekening` (`id_item`, `nomor_rekening`, `uraian`, `tanggal_ditambahkan`, `tahun`) VALUES
(1, '2.1.1.1', 'Penyewaan Setum', '2016-05-10 02:30:22', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aksi` varchar(255) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `waktu` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=339 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `aksi`, `nip`, `waktu`) VALUES
(150, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-15 07:17:07'),
(151, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-15 07:20:24'),
(152, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-15 07:21:46'),
(153, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-15 07:31:52'),
(154, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-15 07:33:28'),
(155, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-15 07:33:31'),
(156, 'Menyimpan Data Anggaran devipermana97@gmail.com', '19980327120120181002', '2016-04-15 03:14:42'),
(157, 'Menyimpan Data Anggaran devipermana97@gmail.com', '19980327120120181002', '2016-04-15 03:34:28'),
(158, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-15 08:38:00'),
(159, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-15 08:43:25'),
(160, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-15 10:17:43'),
(161, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-19 02:16:15'),
(162, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-19 04:38:52'),
(163, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-19 04:39:23'),
(164, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-20 02:26:05'),
(165, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-20 02:47:04'),
(166, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-20 02:47:06'),
(167, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-20 03:32:04'),
(168, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-20 03:32:06'),
(169, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-20 05:07:30'),
(170, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-20 05:08:00'),
(171, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-20 06:55:50'),
(172, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-20 06:55:52'),
(173, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-20 07:02:17'),
(174, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-20 07:02:25'),
(175, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-20 10:24:48'),
(176, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 02:33:27'),
(177, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 03:03:19'),
(178, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 03:03:36'),
(179, 'Menyimpan Data RAPBDes devipermana97@gmail.com', '19980327120120181002', '2016-04-21 00:53:54'),
(180, 'Menyimpan Data RAPBDes devipermana97@gmail.com', '19980327120120181002', '2016-04-21 00:55:23'),
(181, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:04:00'),
(182, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:04:02'),
(183, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:08:09'),
(184, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:15:32'),
(185, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:25:06'),
(186, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:27:16'),
(187, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:28:57'),
(188, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:29:25'),
(189, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:30:31'),
(190, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:31:13'),
(191, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:31:37'),
(192, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:31:40'),
(193, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:31:56'),
(194, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 07:55:37'),
(195, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 08:19:37'),
(196, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 08:24:26'),
(197, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 08:36:22'),
(198, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 08:36:24'),
(199, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 08:36:46'),
(200, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 08:36:56'),
(201, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-21 10:59:19'),
(202, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-22 03:18:43'),
(203, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-22 03:44:57'),
(204, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-22 04:02:50'),
(205, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-22 04:10:55'),
(206, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-22 04:25:17'),
(207, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-22 04:36:42'),
(208, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-22 07:24:48'),
(209, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-22 07:26:05'),
(210, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-22 07:26:07'),
(211, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-22 07:27:27'),
(212, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-22 07:27:29'),
(213, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-22 07:27:49'),
(214, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-22 07:27:51'),
(215, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-25 02:30:43'),
(216, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-25 02:40:00'),
(217, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-25 02:41:09'),
(218, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-25 04:30:59'),
(219, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-25 05:23:49'),
(220, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-25 05:24:22'),
(221, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-25 09:22:54'),
(222, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-25 09:26:55'),
(223, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-25 09:50:39'),
(224, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-25 09:51:17'),
(225, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-25 10:26:40'),
(226, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-26 02:32:26'),
(227, 'Me-Logout email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-26 07:21:28'),
(228, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-26 07:22:52'),
(229, 'Me-Logout email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-26 08:00:50'),
(230, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '2016-04-26 08:22:21'),
(231, 'Menambah dan menyimpan item rekening dengan uraian Pembangunan Kantor Rw', '19980327120120181001', '2016-04-26 08:22:58'),
(232, 'Menghapus item rekening dengan Nomor Rekening 6', '19980327120120181001', '2016-04-26 08:33:08'),
(233, 'Mengubah item rekening dengan nomor rekening 6 dengan uraian Pembangunan Kantor RT', '19980327120120181001', '2016-04-26 08:33:39'),
(234, 'Mengubah item rekening dengan nomor rekening 5 dengan uraian Pembangunan Kantor Rt', '19980327120120181001', '2016-04-26 08:34:17'),
(235, 'Mengubah item rekening dengan nomor rekening 6 dengan uraian what''s wrong ?', '19980327120120181001', '2016-04-26 08:36:13'),
(236, 'Mengubah item rekening dengan nomor rekening 6 dengan uraian what''s wrong ?', '19980327120120181001', '2016-04-26 08:36:37'),
(237, 'Mengubah item rekening dengan nomor rekening 5 dengan uraian what''s wrong ?', '19980327120120181001', '2016-04-26 08:38:05'),
(238, 'Mengubah item rekening dengan nomor rekening 5 dengan uraian what''s wrong ?', '19980327120120181001', '2016-04-26 08:38:28'),
(239, 'Mengubah item rekening dengan nomor rekening 5 dengan uraian what''s wrong ?', '19980327120120181001', '2016-04-26 08:39:12'),
(240, 'Mengubah item rekening dengan nomor rekening 6 dengan uraian what''s wrong ?', '19980327120120181001', '2016-04-26 08:40:14'),
(241, 'Mengubah item rekening dengan nomor rekening 5 dengan uraian what''s wrong ?', '19980327120120181001', '2016-04-26 08:40:30'),
(242, 'Mengubah item rekening dengan nomor rekening 5 dengan uraian what''s wrong ?', '19980327120120181001', '2016-04-26 08:41:09'),
(243, 'Mengubah item rekening dengan nomor rekening 5 dengan uraian what''s wrong ?', '19980327120120181001', '2016-04-26 08:41:40'),
(244, 'Mengubah item rekening dengan nomor rekening 6 dengan uraian what''s wrong ?', '19980327120120181001', '2016-04-26 08:43:27'),
(245, 'Menghapus item rekening dengan Nomor Rekening 6', '19980327120120181001', '2016-04-26 08:43:35'),
(246, 'Me-Logout email Kreskiani23@gmail.com', '19980327120120181001', '2016-04-26 09:08:16'),
(247, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-26 09:08:28'),
(248, 'Menambah dan menyimpan item rekening dengan uraian Tesjeulah', '9980017378', '2016-04-26 09:09:46'),
(249, 'Menghapus item rekening dengan Nomor Rekening 7', '9980017378', '2016-04-26 09:25:02'),
(250, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 02:41:11'),
(251, 'Menambah item rekening dengan uraian Hasil sesuatu', '9980017378', '2016-04-27 02:42:34'),
(252, 'Menyimpan Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 00:13:52'),
(253, 'Menyimpan Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 00:14:08'),
(254, 'Menghapus Data APBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 00:14:17'),
(255, 'Menambah item rekening dengan uraian Sesuatu seperti itu', '9980017378', '2016-04-27 05:28:07'),
(256, 'Menambah item rekening dengan uraian nice one', '9980017378', '2016-04-27 05:34:59'),
(257, 'Menambah item rekening dengan uraian Bisa lah', '9980017378', '2016-04-27 05:55:49'),
(258, 'Menambah item rekening dengan uraian fuck your self', '9980017378', '2016-04-27 05:58:22'),
(259, 'Menambah item rekening dengan uraian what''s wrong ?', '9980017378', '2016-04-27 05:58:39'),
(260, 'Menambah item rekening dengan uraian what''s wrong ?', '9980017378', '2016-04-27 05:58:54'),
(261, 'Menambah item rekening dengan uraian what''s wrong ?', '9980017378', '2016-04-27 05:59:09'),
(262, 'Menambah item rekening dengan uraian what''s wrong ?', '9980017378', '2016-04-27 06:02:12'),
(263, 'Menyimpan Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 02:44:14'),
(264, 'Menyimpan Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 02:45:33'),
(265, 'Menyimpan Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 02:45:49'),
(266, 'Menyimpan Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 02:46:39'),
(267, 'Menambah item rekening dengan uraian Apa ajalah', '9980017378', '2016-04-27 08:09:28'),
(268, 'Menambah item rekening dengan uraian what''s wrong ?', '9980017378', '2016-04-27 08:09:42'),
(269, 'Menambah item rekening dengan uraian what''s wrong ?', '9980017378', '2016-04-27 08:10:01'),
(270, 'Menambah item rekening dengan uraian what''s wrong ?', '9980017378', '2016-04-27 08:13:35'),
(271, 'Menambah item rekening dengan uraian what''s wrong ?', '9980017378', '2016-04-27 08:14:45'),
(272, 'Menambah item rekening dengan uraian what''s wrong ?', '9980017378', '2016-04-27 08:16:56'),
(273, 'Menambah item rekening dengan uraian apalah', '9980017378', '2016-04-27 08:18:56'),
(274, 'Menyimpan Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 03:33:41'),
(275, 'Menyimpan Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 03:36:56'),
(276, 'Menambah item rekening dengan uraian nngurut lah', '9980017378', '2016-04-27 08:37:22'),
(277, 'Menambah item rekening dengan uraian hope this work', '9980017378', '2016-04-27 08:39:24'),
(278, 'Menambah dan menyimpan item rekening dengan uraian nc one', '9980017378', '2016-04-27 08:39:34'),
(279, 'Mengubah item rekening dengan nomor rekening 6 dengan uraian holy shit', '9980017378', '2016-04-27 08:50:34'),
(280, 'Menghapus item rekening dengan Nomor Rekening 6', '9980017378', '2016-04-27 08:50:41'),
(281, 'Menambah item rekening dengan uraian hope this work', '9980017378', '2016-04-27 08:56:53'),
(282, 'Menambah dan menyimpan item rekening dengan uraian Bisa plis', '9980017378', '2016-04-27 09:02:37'),
(283, 'Mengubah item rekening dengan nomor rekening 7 dengan uraian bisa ya', '9980017378', '2016-04-27 09:02:52'),
(284, 'Menghapus item rekening dengan Nomor Rekening 7', '9980017378', '2016-04-27 09:03:04'),
(285, 'Menyimpan Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 04:04:50'),
(286, 'Menambah item rekening dengan uraian ini 131', '9980017378', '2016-04-27 09:05:24'),
(287, 'Menyimpan Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 22:32:52'),
(288, 'Menyimpan Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 22:44:59'),
(289, 'Me-Logout email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-28 04:07:28'),
(290, 'Login dengan email Kreskiani23@gmail.com', '19980327120120181001', '2016-04-28 04:08:38'),
(291, 'Me-Logout email Kreskiani23@gmail.com', '19980327120120181001', '2016-04-28 04:09:30'),
(292, 'Login dengan email rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-28 04:10:07'),
(293, 'Menyimpan Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 23:31:39'),
(294, 'Menghapus Data APBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 23:32:28'),
(295, 'Menghapus Data APBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 23:46:36'),
(296, 'Menghapus Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-04-27 23:47:21'),
(297, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-28 05:02:55'),
(298, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-28 10:07:57'),
(299, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-28 10:08:07'),
(300, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-28 10:15:58'),
(301, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-28 10:18:08'),
(302, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-28 11:31:43'),
(303, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-29 02:46:07'),
(304, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-29 06:38:35'),
(305, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-29 08:36:25'),
(306, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-29 08:36:35'),
(307, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-29 08:42:53'),
(308, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-29 08:43:01'),
(309, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-29 10:45:27'),
(310, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-04-29 11:15:52'),
(311, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-04-29 12:03:18'),
(312, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-05-02 02:59:16'),
(313, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-05-02 10:20:24'),
(314, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-05-03 02:30:08'),
(315, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-05-03 11:11:41'),
(316, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-05-04 02:44:50'),
(317, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-05-04 09:01:57'),
(318, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-05-04 10:41:57'),
(319, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-05-10 02:18:12'),
(320, 'Menyimpan Data RAPBDes rizkianiwidiastuti98@gmail.com', '9980017378', '2016-05-09 21:29:02'),
(321, 'Menambah item rekening dengan uraian Pemangunan Jembatan Layang', '9980017378', '2016-05-10 02:29:53'),
(322, 'Menambah item rekening dengan uraian Pemasangan Aspal Jalan', '9980017378', '2016-05-10 02:30:08'),
(323, 'Menambah dan menyimpan item rekening dengan uraian Penyewaan Setum', '9980017378', '2016-05-10 02:30:21'),
(324, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-05-10 03:28:17'),
(325, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-05-10 04:11:53'),
(326, 'Menghapus data penduduk ', '19980327120120181002', '2016-05-10 09:42:45'),
(327, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-05-10 11:03:44'),
(328, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-05-11 01:59:08'),
(329, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-05-11 02:16:23'),
(330, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-05-11 02:16:24'),
(331, 'Menghapus data penduduk ', '19980327120120181002', '2016-05-11 04:08:07'),
(332, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-05-12 02:18:15'),
(333, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-05-12 10:37:54'),
(334, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-05-16 02:21:35'),
(335, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-05-16 06:23:07'),
(336, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-05-16 06:23:16'),
(337, 'Me-Logout email devipermana97@gmail.com', '19980327120120181002', '2016-05-16 06:24:02'),
(338, 'Login dengan email devipermana97@gmail.com', '19980327120120181002', '2016-05-16 06:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `NIP` varchar(100) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `alamat` text,
  `tanggal_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `nama`, `hp`, `alamat`, `tanggal_input`, `status`, `jenis_kelamin`, `foto`) VALUES
('1234567890', 'Sopi saniah trilani', '123456789009', 'Cisangkan girang', '2016-03-30 16:03:17', 'Aktif', 'Perempuan', 'assets/foto/DeffaultWoman.jpg'),
('19980327120120181001', 'Kresna Aji Hidayat', '089632534965', 'Jl. Pesantren Gg. Trs. Citaman Rt. 02 Rw. 16 No. 91 Kel. Cibabat Kec. Cimahi Utara Kota Cimahi Kabupaten Bandung Provinsi Jawa Barat Negara Indonesia Asia Tenggara Asia Dunia Bumi Planet ke 3 Galaxy ke- 4', '2016-03-11 04:13:49', 'Aktif', 'Laki-Laki', 'assets/foto/2015-11-03 06.46.58 1.jpg'),
('19980327120120181002', 'Devi Permana', '089686730150', 'Komp Bumi Pakusarakan 2 Blok E no 9 Desa. Tanimulya Kec Ngamprah Kab. Bandung Barat kode pos 40552 Prov. Jawa Barat, Indonesia', '2016-03-11 04:14:16', 'Aktif', 'Perempuan', 'assets/foto/20151122_122427.jpg'),
('9980017378', 'Rizkiani Widiastuti', '08992558063', 'Cisangkan girang Rt. 02 Rw. 10 Kel. Padasuka Kec. Cimahi Tengah', '2016-03-28 01:43:14', 'Aktif', 'Perempuan', 'assets/foto/2015-11-03 06.46.59 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `perangkat_desa`
--

CREATE TABLE IF NOT EXISTS `perangkat_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kabupaten` varchar(200) NOT NULL,
  `nama_kecamatan` varchar(200) NOT NULL,
  `nama_desa` varchar(200) NOT NULL,
  `nama_kepala_desa` varchar(200) NOT NULL,
  `nama_sekretaris_desa` varchar(200) NOT NULL,
  `nama_bendahara_desa` varchar(200) NOT NULL,
  `nama_bank_desa` varchar(100) NOT NULL,
  `cabang` varchar(100) NOT NULL,
  `nomor_rekening_desa` varchar(100) NOT NULL,
  `logo_desa` varchar(255) NOT NULL,
  `alamat_desa` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `perangkat_desa`
--

INSERT INTO `perangkat_desa` (`id`, `nama_kabupaten`, `nama_kecamatan`, `nama_desa`, `nama_kepala_desa`, `nama_sekretaris_desa`, `nama_bendahara_desa`, `nama_bank_desa`, `cabang`, `nomor_rekening_desa`, `logo_desa`, `alamat_desa`) VALUES
(1, 'pasuruan', 'purworejo', 'purwosari', 'hartono', 'santi', 'asep', 'BRI', 'purwosari', '0231873829', 'assets/images/Logo_Desa_Purworejo.png', 'Alamat : Kel. Purworejo, Desa. Purworejo, Kec. Purworejo, Kab. Pasuruan, Provinsi. Jawa Timur, Kode Pos: 67115');

-- --------------------------------------------------------

--
-- Table structure for table `rab`
--

CREATE TABLE IF NOT EXISTS `rab` (
  `id` int(11) NOT NULL,
  `nomor_rekening` varchar(50) NOT NULL,
  `uraian` text NOT NULL,
  `volume` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `waktu_pelaksanaan` varchar(50) NOT NULL,
  `bidang` text NOT NULL,
  `kegiatan` text NOT NULL,
  `pelaksana_kegiatan` varchar(75) NOT NULL,
  `tanggal` date NOT NULL,
  `tahun` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rapbdes`
--

CREATE TABLE IF NOT EXISTS `rapbdes` (
  `nomor_perdes` varchar(255) NOT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `penanggung_jawab` varchar(200) NOT NULL,
  `grant` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nomor_perdes`),
  UNIQUE KEY `tahun` (`tahun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapbdes`
--

INSERT INTO `rapbdes` (`nomor_perdes`, `tahun`, `status`, `penanggung_jawab`, `grant`) VALUES
('001/PERDES/2015', '2015', 'murni', 'Rizkiani Widiastuti', '0'),
('002/PERDES/2010', '2010', 'murni', 'Rizkiani Widiastuti', '0'),
('003/PERDES/2016', '2016', 'murni', 'Rizkiani Widiastuti', '1');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
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
  `uraian` text NOT NULL,
  PRIMARY KEY (`nomor_rekening`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`nomor_rekening`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `k9`, `k10`, `uraian`) VALUES
('1', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'PENDAPATAN DESA'),
('1.1', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'PENDAPATAN ASLI DESA'),
('1.1.1', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 'HASIL USAHA'),
('1.1.1.1', 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 'Hasil sesuatu'),
('1.1.1.2', 1, 1, 1, 2, 0, 0, 0, 0, 0, 0, 'Hasil Tanah Kas Desa'),
('1.1.1.4', 1, 1, 1, 4, 0, 0, 0, 0, 0, 0, 'Hasil Badan Usaha Milik Desa'),
('1.1.1.5', 1, 1, 1, 5, 0, 0, 0, 0, 0, 0, 'Hasil Sewa Kos'),
('1.1.1.6', 1, 1, 1, 6, 0, 0, 0, 0, 0, 0, 'Sewa Gedung Serba Guna'),
('1.1.1.7', 1, 1, 1, 7, 0, 0, 0, 0, 0, 0, 'Hasil dari Ssaha Tanah Desa'),
('1.1.2', 1, 1, 2, 0, 0, 0, 0, 0, 0, 0, 'SWADAYA, PARTISIPASI DAN GOTONG ROYONG'),
('1.1.2.1', 1, 1, 2, 1, 0, 0, 0, 0, 0, 0, 'Swadaya Masyarakat'),
('1.1.2.2', 1, 1, 2, 2, 0, 0, 0, 0, 0, 0, 'Partisipasi Masyarakat'),
('1.1.2.3', 1, 1, 2, 3, 0, 0, 0, 0, 0, 0, 'Gotong Royong'),
('1.1.3', 1, 1, 3, 0, 0, 0, 0, 0, 0, 0, 'LAIN LAIN PENDAPATAN HASIL DESA YANG SAH'),
('1.1.3.1', 1, 1, 3, 1, 0, 0, 0, 0, 0, 0, 'Retribusi atas Kewenangan lokal desa'),
('1.1.3.3', 1, 1, 3, 3, 0, 0, 0, 0, 0, 0, 'Pungutan administrasi desa'),
('1.1.3.4', 1, 1, 3, 4, 0, 0, 0, 0, 0, 0, 'Tanah kas Desa'),
('1.1.3.5', 1, 1, 3, 5, 0, 0, 0, 0, 0, 0, 'Sewa Gedung Serba Guna'),
('1.1.4', 0, 1, 4, 0, 0, 0, 0, 0, 0, 0, 'Sesuatu seperti itu'),
('1.2', 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 'PENDAPATAN TRANSFER'),
('1.2.1', 1, 2, 1, 0, 0, 0, 0, 0, 0, 0, 'Dana Desa'),
('1.2.2', 1, 2, 2, 0, 0, 0, 0, 0, 0, 0, 'Bagian dari Hasil Pajak dan Retribusi Daerah Kabupaten/Kota'),
('1.3', 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 'edwan'),
('1.4', 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 'what''s wrong ?'),
('2.1', 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'BIDANG PENYELENGGARAAN PEMERINTAH DESA'),
('2.1.1', 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 'PENGHASILAN TETAP DAN TUNJUNGAN'),
('2.1.1.1', 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 'BELANJA PEGAWAI'),
('2.1.1.1.1', 2, 1, 1, 1, 1, 0, 0, 0, 0, 0, 'Penghasilan Tetap Kepala Desa dan Perangkat Desa'),
('2.1.1.1.2', 2, 1, 1, 1, 2, 0, 0, 0, 0, 0, 'Tunjangan Kepala Desa dan Perangkat Desa'),
('2.1.1.1.3', 2, 1, 1, 1, 3, 0, 0, 0, 0, 0, 'Tunjangan Tambahan Penghasilan Kepala Desa dan Perangkat'),
('2.1.1.1.5', 2, 1, 1, 1, 5, 0, 0, 0, 0, 0, 'Tunjungan Kesehatan Kepala Desa dan Perangkat'),
('2.1.1.1.6', 2, 1, 1, 1, 6, 0, 0, 0, 0, 0, 'Tunjungan BPD'),
('2.1.1.1.7', 2, 1, 1, 1, 7, 0, 0, 0, 0, 0, 'Tunjungan Tambahan Penghasilan BPD'),
('2.1.1.1.9', 2, 1, 1, 1, 9, 0, 0, 0, 0, 0, 'Tunjangan Kesehatan bagi BPD'),
('2.1.2.2.1', 2, 1, 2, 2, 1, 0, 0, 0, 0, 0, 'Alat Tulis Kantor (ATK)'),
('2.2', 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 'BIDANG PELAKSANAAN PEMBANGUNAN DESA'),
('2.3', 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 'BIDANG PEMBINAAN KEMASYARAKATAN DESA'),
('2.4', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 'BIDANG PEMBERDAYAAN MASYARAKAT DESA'),
('2.5', 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 'Bidang Tak Terduga'),
('null', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `rekening_tahunan`
--

CREATE TABLE IF NOT EXISTS `rekening_tahunan` (
  `nomor_rekening` varchar(50) NOT NULL,
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `k1` int(11) NOT NULL,
  `k2` int(11) NOT NULL,
  `k3` int(11) NOT NULL,
  `k4` int(11) NOT NULL,
  `k5` int(11) NOT NULL,
  `uraian` text NOT NULL,
  `anggaran` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `rekening_tahunan`
--

INSERT INTO `rekening_tahunan` (`nomor_rekening`, `id_item`, `k1`, `k2`, `k3`, `k4`, `k5`, `uraian`, `anggaran`, `tahun`) VALUES
('1', 1, 1, 0, 0, 0, 0, 'PENDAPATAN DESA', 0, 2015),
('1.1', 2, 1, 1, 0, 0, 0, 'Pendapatan Asli Desa', 0, 2015),
('1.2', 3, 1, 2, 0, 0, 0, 'Pendapatan Transfer', 0, 2015),
('1.3', 4, 1, 3, 0, 0, 0, 'Pendapatan Lain Lain', 0, 2015),
('2', 5, 2, 0, 0, 0, 0, 'BELANJA', 0, 2015),
('2.1', 6, 2, 1, 0, 0, 0, 'Bidang Penyelenggaraan Pemerintahan Desa ', 0, 2015),
('2.2', 7, 2, 2, 0, 0, 0, 'Bidang Pelaksanaan Pembangunan Desa', 0, 2015),
('2.3', 8, 2, 3, 0, 0, 0, 'Bidang Pembinaan Kemasyarakatan', 0, 2015),
('2.4', 9, 2, 4, 0, 0, 0, 'Bidang Pemberdayaan Masyarakat', 0, 2015),
('2.5', 10, 2, 5, 0, 0, 0, 'Bidang Tak Terduga', 0, 2015),
('1', 11, 1, 0, 0, 0, 0, 'PENDAPATAN DESA', 0, 2010),
('1.1', 12, 1, 1, 0, 0, 0, 'Pendapatan Asli Desa', 0, 2010),
('1.2', 13, 1, 2, 0, 0, 0, 'Pendapatan Transfer', 0, 2010),
('1.3', 14, 1, 3, 0, 0, 0, 'Pendapatan Lain Lain', 0, 2010),
('2', 15, 2, 0, 0, 0, 0, 'BELANJA', 0, 2010),
('2.1', 16, 2, 1, 0, 0, 0, 'Bidang Penyelenggaraan Pemerintahan Desa ', 0, 2010),
('2.2', 17, 2, 2, 0, 0, 0, 'Bidang Pelaksanaan Pembangunan Desa', 0, 2010),
('2.3', 18, 2, 3, 0, 0, 0, 'Bidang Pembinaan Kemasyarakatan', 0, 2010),
('2.4', 19, 2, 4, 0, 0, 0, 'Bidang Pemberdayaan Masyarakat', 0, 2010),
('2.5', 20, 2, 5, 0, 0, 0, 'Bidang Tak Terduga', 0, 2010),
('1', 21, 1, 0, 0, 0, 0, 'PENDAPATAN DESA', 0, 2016),
('1.1', 22, 1, 1, 0, 0, 0, 'Pendapatan Asli Desa', 0, 2016),
('1.1.1', 23, 1, 1, 1, 0, 0, 'Hasil Usaha', 10000, 2016),
('1.1.2', 24, 1, 1, 2, 0, 0, 'Swadaya Partisipasi dan Gotong Royong', 0, 2016),
('1.1.3', 25, 1, 1, 3, 0, 0, 'Lain - Lain Pendapatan Asli Desa Yang Sah', 0, 2016),
('1.2', 26, 1, 2, 0, 0, 0, 'Pendapatan Transfer', 0, 2016),
('1.2.1', 27, 1, 2, 1, 0, 0, 'Dana Desa', 0, 2016),
('1.2.2', 28, 1, 2, 2, 0, 0, 'Bagian dari Hasil Pajak & retribusi daerah kabupaten/kota', 0, 2016),
('1.2.3', 29, 1, 2, 3, 0, 0, 'Alokasi Dana Desa', 0, 2016),
('1.2.4', 30, 1, 2, 4, 0, 0, 'Bantuan Keuangan', 0, 2016),
('1.2.4.1', 31, 1, 2, 4, 1, 0, 'Bantuan Provinsi', 0, 2016),
('1.2.4.2', 32, 1, 2, 4, 2, 0, 'Bantuan Kabupaten / Kota', 0, 2016),
('1.3', 33, 1, 3, 0, 0, 0, 'Pendapatan Lain Lain', 0, 2016),
('1.3.1', 34, 1, 3, 1, 0, 0, 'Hibah dan Sumbangan dari pihak ke-3 yang tidak mengikat', 0, 2016),
('1.3.2', 35, 1, 3, 2, 0, 0, 'Lain - Lain pendapatan desa yang sah', 0, 2016),
('2', 36, 2, 0, 0, 0, 0, 'BELANJA', 0, 2016),
('2.1', 37, 2, 1, 0, 0, 0, 'Bidang Penyelenggaraan Pemerintahan Desa ', 0, 2016),
('2.2', 38, 2, 2, 0, 0, 0, 'Bidang Pelaksanaan Pembangunan Desa', 0, 2016),
('2.3', 39, 2, 3, 0, 0, 0, 'Bidang Pembinaan Kemasyarakatan', 0, 2016),
('2.4', 40, 2, 4, 0, 0, 0, 'Bidang Pemberdayaan Masyarakat', 0, 2016),
('2.5', 41, 2, 5, 0, 0, 0, 'Bidang Tak Terduga', 0, 2016),
('3', 42, 3, 0, 0, 0, 0, 'PEMBIAYAAN', 0, 2016),
('3.1', 43, 3, 1, 0, 0, 0, 'Penerimaan Pembiayaan', 0, 2016),
('3.1.1', 44, 3, 1, 1, 0, 0, 'SILVA', 5000, 2016),
('3.1.2', 45, 3, 1, 2, 0, 0, 'Pencairan Dana Cadangan', 0, 2016),
('3.1.3', 46, 3, 1, 3, 0, 0, 'Hasil Kekayaan Desa yang Di Pisahkan', 0, 2016),
('3.2', 47, 3, 2, 0, 0, 0, 'Pengeluaran Pembiayaan', 0, 2016),
('3.2.1', 48, 3, 2, 1, 0, 0, 'Pembentukan Dana Cadangan', 0, 2016),
('3.2.2', 49, 3, 2, 2, 0, 0, 'Pernyataan Modal Desa', 0, 2016),
('2.1.1', 50, 2, 1, 1, 0, 0, 'Pemangunan Jembatan Layang', 0, 2016),
('2.1.1.1', 51, 2, 1, 1, 1, 0, 'Pemasangan Aspal Jalan', 5000, 2016);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
