-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 01:07 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diklat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_eselon`
--

CREATE TABLE `tb_eselon` (
  `tipe_eselon` varchar(60) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_eselon`
--

INSERT INTO `tb_eselon` (`tipe_eselon`, `keterangan`) VALUES
('II.a', '<p>Pelatihan&nbsp;Kepemimpinan Tingkat II</p>\r\n'),
('II.b', '<p>Pelatihan Kepemimpinan Tingkat II</p>\r\n'),
('III.a', '<p>Pelatihan Kepimpinan Administrator</p>\r\n'),
('III.b', '<p>Pelatihan Kepimpinan Administrator</p>\r\n'),
('IV.a', '<p>Pelatihan Kepemimpinan Pengawas</p>\r\n'),
('IV.b', '<p>Pelatihan Kepemimpinan Pengawas</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gol`
--

CREATE TABLE `tb_gol` (
  `id_gol` int(11) NOT NULL,
  `gol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gol`
--

INSERT INTO `tb_gol` (`id_gol`, `gol`) VALUES
(1, 'Penata Muda III/a'),
(2, 'Penata Muda Tk. I III/b'),
(3, 'Penata III/c'),
(4, 'Penata Tk. I III/d'),
(5, 'Pembina IV/a'),
(6, 'Pembina Tk. I IV/b'),
(7, 'Pembina Utama Muda IV/c'),
(8, 'Pembina Utama Madya IV/d'),
(9, 'Pembina Utama IV/e');

-- --------------------------------------------------------

--
-- Table structure for table `tb_instansi`
--

CREATE TABLE `tb_instansi` (
  `id_instansi` int(11) NOT NULL,
  `namains` varchar(255) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_instansi`
--

INSERT INTO `tb_instansi` (`id_instansi`, `namains`, `alamat`) VALUES
(1, 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(2, 'Badan Keuangan dan Aset Daerah Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(3, 'Badan Penanggulangan Bencana Daerah Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(4, 'Badan Perencanaan, Penelitian dan Pengembangan Daerah Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(5, 'Dinas Kependudukan dan Pencatatan Sipil Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(6, 'Dinas Kesehatan Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(7, 'Dinas Ketenagakerjaan dan Transmigrasi Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(8, 'Dinas Komunikasi dan Informatika Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(9, 'Dinas Pangan dan Perikanan Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(10, 'Dinas Pariwisata, Pemuda dan Olah Raga Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(11, 'Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(12, 'Dinas Pemberdayaan Masyarakat dan Nagari Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(13, 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(14, 'Dinas Pendidikan dan Kebudayaan Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(15, 'Dinas Pengendalian Penduduk dan Keluarga Berencana Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(16, 'Dinas Perdagangan, Perindustrian, Koperasi Usaha Kecil dan Menengah Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(17, 'Dinas Perhubungan Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(18, 'Dinas Perpustakaan dan Kearsipan Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(19, 'Dinas Pertanian Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(20, 'Dinas Perumahan, Kawasan Permukiman dan Lingkungan Hidup Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(21, 'Dinas Sosial, Pemberdayaan Perempuan dan Perlindungan Anak Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(22, 'Inspektorat Daerah Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(23, 'Kantor Camat IV Nagari', '<p>Sijunjung</p>\r\n'),
(37, 'Kantor Camat Kamang Baru', '<p>Sijunjung</p>\r\n'),
(24, 'Kantor Camat Koto VII', '<p>Sijunjung</p>\r\n'),
(25, 'Kantor Camat Kupitan', '<p>Sijunjung</p>\r\n'),
(36, 'Kantor Camat Lubuk Tarok', '<p>Sijunjung</p>\r\n'),
(26, 'Kantor Camat Sijunjung', '<p>Sijunjung</p>\r\n'),
(27, 'Kantor Camat Sumpur Kudus', '<p>Sijunjung</p>\r\n'),
(28, 'Kantor Camat Tanjung Gadang', '<p>Sijunjung</p>\r\n'),
(29, 'RSUD Sijunjung', '<p>Sijunjung</p>\r\n'),
(30, 'Satuan Polisi Pamong Praja dan Pemadam Kebakaran Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(31, 'Sekretariat Daerah Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n'),
(32, 'Sekretariat DPRD Kabupaten Sijunjung', '<p>Sijunjung</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `level` enum('admin','kepalabidang') NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`level`, `keterangan`) VALUES
('admin', 'Hanya untuk admin'),
('kepalabidang', 'Hanya Untuk Kepala Bidang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pejabat`
--

CREATE TABLE `tb_pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `namapjb` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `gol` varchar(25) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `namains` varchar(255) NOT NULL,
  `ket` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pejabat`
--

INSERT INTO `tb_pejabat` (`id_pejabat`, `namapjb`, `nip`, `gol`, `jabatan`, `namains`, `ket`, `status`) VALUES
(11, 'ADLIM ABBAS,SE', '19600127 198603 1 008', 'Pembina Tk. I IV/b', 'Sekretaris Inspektorat Daerah ', 'Inspektorat Daerah Kabupaten Sijunjung', 'III.a', 'Sudah Diklat'),
(12, 'M. SIID, A.Ma', '19600710 198305 1 001', 'Pembina IV/a', 'Kabid Sekolah Dasar pada Dinas Pendidikan dan Kebudayaan', 'Dinas Pendidikan dan Kebudayaan Kabupaten Sijunjung', 'III.b', 'Belum Diklat'),
(13, 'YUSNIDAR YELLY, S.Pd,MM', '19610721 198202 2 004', 'Pembina Tk. I IV/b', 'Kabid Kebudayaan pada Dinas Pendidikan dan Kebudayaan Kabupaten Sijunjung', 'Dinas Pendidikan dan Kebudayaan Kabupaten Sijunjung', 'III.b', 'Belum Diklat'),
(14, 'RUSWAN, SE', '19610912 198303 1 011', 'Pembina Tk. I IV/b', 'Sekretaris Dinas Komunikasi dan Informatika', 'Dinas Komunikasi dan Informatika Kabupaten Sijunjung', 'III.a', 'Sudah Diklat'),
(15, 'MURNI', '19611005 198803 2 003', 'Penata Tk. I III/d', 'Kabid Keluarga Berencana pada Dinas Pengendalian Penduduk dan Keluarga Berencana', 'Dinas Pengendalian Penduduk dan Keluarga Berencana Kabupaten Sijunjung', 'III.b', 'Sudah Diklat'),
(16, 'SYAMSIR, S.Pd.', '19620309 198302 1 001', 'Pembina IV/a', 'Sekretaris Camat IV Nagari', 'Kantor Camat IV Nagari', 'III.b', 'Sudah Diklat'),
(23, 'ZEFNIHAN, AP, M.Si', '19741025 199311 1 001', 'Pembina Utama Muda IV/c', 'Sekretaris Daerah', 'Sekretariat Daerah Kabupaten Sijunjung', 'II.a', 'Sudah Diklat'),
(24, 'Drs. SYAHRIAL, MM', '19611209 198802 1 002', 'Pembina Utama Muda IV/c', 'Staf Ahli Bidang Hukum, Politik dan Pemerintahan', 'Sekretariat Daerah Kabupaten Sijunjung', 'II.b', 'Belum Diklat'),
(25, 'ABIMAYU WANDA SAPUTRA, S.T', '19870127 201101 1 005', 'Penata Muda Tk. I III/b', 'Pj. Kasi Keselamatan dan Bencana Bidang  Pemadam Kebakaran', 'Satuan Polisi Pamong Praja dan Pemadam Kebakaran Kabupaten Sijunjung', 'IV.a', 'Belum Diklat'),
(26, 'ABDUL MAAS, S.Sos.', '19690607 200906 1 006', 'Penata Muda III/a', 'Pj. Kasubbag Keuangan dan Perencanaan pada Sekretariat', 'Kantor Camat Kamang Baru', 'IV.b', 'Sudah Diklat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `status`) VALUES
(1, 'Sudah Diklat'),
(2, 'Belum Diklat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nohp` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `level` enum('admin','kepalabidang') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama_lengkap`, `nip`, `nohp`, `alamat`, `level`) VALUES
('admin', 'admin', 'Administrator', '19600710 198305 1 210', '081233448893', 'Padang', 'admin'),
('jefri', '123', 'Jefri Nichol', '19600710 198305 1 022', '081245633889', 'Jakarta', 'admin'),
('kabid', 'kabid', 'Sri Maharani, S.Kom, M.Sc, Phd.', '19600127 198603 1 498', '0812997645329', 'Padang', 'kepalabidang'),
('kepalabidang', 'kepalabidang', 'Ahmad Nur Rahman, S.Kom, M.Kom, Ph.D', '19600127 198603 1 243', '081264378499', 'Surabaya', 'kepalabidang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_eselon`
--
ALTER TABLE `tb_eselon`
  ADD PRIMARY KEY (`tipe_eselon`);

--
-- Indexes for table `tb_gol`
--
ALTER TABLE `tb_gol`
  ADD PRIMARY KEY (`gol`),
  ADD KEY `id_gol` (`id_gol`);

--
-- Indexes for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  ADD PRIMARY KEY (`namains`),
  ADD KEY `id_instansi` (`id_instansi`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  ADD PRIMARY KEY (`id_pejabat`),
  ADD KEY `namains` (`namains`),
  ADD KEY `ket` (`ket`),
  ADD KEY `status` (`status`),
  ADD KEY `gol` (`gol`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`status`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`) USING BTREE,
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gol`
--
ALTER TABLE `tb_gol`
  MODIFY `id_gol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  MODIFY `id_pejabat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  ADD CONSTRAINT `tb_pejabat_ibfk_1` FOREIGN KEY (`namains`) REFERENCES `tb_instansi` (`namains`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pejabat_ibfk_2` FOREIGN KEY (`ket`) REFERENCES `tb_eselon` (`tipe_eselon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pejabat_ibfk_3` FOREIGN KEY (`status`) REFERENCES `tb_status` (`status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pejabat_ibfk_4` FOREIGN KEY (`gol`) REFERENCES `tb_gol` (`gol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`level`) REFERENCES `tb_level` (`level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
