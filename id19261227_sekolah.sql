-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2023 at 02:35 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19261227_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'teamakatsuki', 'teamakatsuki', 'Admin Akatsuki'),
(2, 'duwi', 'anjar', 'duwi anjar Ariw'),
(3, 'indra', 'aditia', 'Indra Aditia Warman');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `email_guru` varchar(100) NOT NULL,
  `password_guru` varchar(50) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `telepon_guru` varchar(25) NOT NULL,
  `Mengajar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `email_guru`, `password_guru`, `nama_guru`, `telepon_guru`, `Mengajar`) VALUES
(1, 'nurjanah@gmail.com', 'sitinur', 'Siti Nurjanah M.Pd', '082288837880', 'IPA - BIOLOGI - FISIKA'),
(4, 'Asnani@gmail.com', 'Asnan', 'Asnani Ijal S.Pd.', '08198765435', 'MTK - KALKULUS\r\n'),
(7, 'agwiliam@gmail.com', 'Williamagus', 'William Agus S.Pd', '0897654545', 'Bahasa_Inggris - Bahasa_Inggris-Profesional'),
(8, 'duwi@uad.ac.id', 'anjarduwi', 'duwi anjar M.Pd.', '0897654545', 'ALJABAR'),
(11, 'agung@gmail.com', 'agungagung', 'agung S.Pd.', '08912398766', 'Bahasa_Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `kelas_mapel` varchar(100) NOT NULL,
  `guru_mapel` varchar(100) NOT NULL,
  `id_guru_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `kelas_mapel`, `guru_mapel`, `id_guru_mapel`) VALUES
(1, 'IPA', '10', 'Siti Nurjanah M.Pd', 1),
(5, 'MTK', '10', 'Asnani S.Pd.', 4),
(8, 'Bahasa_Indonesia', '10', 'agung S.Pd.', 11),
(11, 'BIOLOGI', '11', 'Siti Nurjanah M.Pd\r\n', 1),
(14, 'KALKULUS', '11', 'Asnani S.Pd.', 4),
(17, 'Bahasa_Inggris', '11', 'William Agus S.Pd 	', 7),
(21, 'FISIKA', '12', 'Siti Nurjanah M.Pd', 1),
(24, 'ALJABAR', '12', 'Asnani S.Pd.', 8),
(27, 'Inggris_Terapan', '12', 'William Agus S.Pd ', 7);

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id_murid` int(11) NOT NULL,
  `nama_murid` varchar(50) NOT NULL,
  `telepon_murid` varchar(25) NOT NULL,
  `email_murid` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `password_murid` varchar(100) NOT NULL,
  `IPA` int(100) NOT NULL,
  `BIOLOGI` int(100) NOT NULL,
  `FISIKA` int(100) NOT NULL,
  `KALKULUS` int(100) NOT NULL,
  `ALJABAR` int(100) NOT NULL,
  `Bahasa_Inggris` int(100) NOT NULL,
  `MTK` int(100) NOT NULL,
  `pengubah` varchar(100) NOT NULL,
  `Bahasa_Indonesia` int(100) NOT NULL,
  `Inggris_Terapan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id_murid`, `nama_murid`, `telepon_murid`, `email_murid`, `kelas`, `password_murid`, `IPA`, `BIOLOGI`, `FISIKA`, `KALKULUS`, `ALJABAR`, `Bahasa_Inggris`, `MTK`, `pengubah`, `Bahasa_Indonesia`, `Inggris_Terapan`) VALUES
(2, 'Duwi Anjar', '085157993801', 'duwianjar@gmail.com', '10', 'duwianjar', 95, 0, 0, 0, 0, 0, 95, 'Guru', 95, 0),
(7, 'Arya', '0897654545', 'irfan@gmail.com', '10', 'arya', 95, 0, 0, 0, 0, 0, 80, 'Admin', 100, 0),
(10, 'Citra Mega Lestari ', '08234567187', 'citramegal@gmail.com ', '10', 'citramegal', 90, 0, 0, 0, 0, 0, 95, 'Admin', 95, 0),
(11, 'Deri Fauzi ', '087245718938', 'derifauzi97@gmail.com ', '10', 'derifauzi', 85, 0, 0, 0, 0, 0, 90, 'Admin', 80, 0),
(21, 'windi ayu ', '08897365463764', 'windiayu65@gmail.com', '11', 'windiayu11', 95, 85, 0, 100, 0, 95, 90, 'Guru', 0, 0),
(22, 'Regina Eldinia Rahayu ', '0854321879918', 'reginaeldiniarahayu@gmail.com ', '11', 'reginaeldinia', 100, 95, 0, 90, 0, 100, 80, 'Guru', 0, 0),
(23, 'Adnan Saefulloh ', '0876543218903', 'Adnansaefuloh@gmail.com ', '11', 'Adnansaefuloh', 95, 85, 0, 100, 0, 95, 100, 'Guru', 0, 0),
(24, 'Putri marytha setiadi ', '0887654321678', 'putrimaryta@gmail.com', '11', 'putrimaryta', 100, 75, 0, 95, 0, 100, 95, 'Admin', 0, 0),
(35, 'Revina Sadiyyah Fatimah ', '0892134567809', 'revinasadiyyah@gmail.com ', '12', 'revinasadiyyah', 75, 95, 80, 90, 100, 0, 0, 'Guru', 0, 85),
(36, 'rani nuryati ', '0897654321807', 'nuryatirani@gmail.com ', '12', 'nuryatirani', 90, 100, 75, 90, 95, 0, 0, 'Admin', 0, 90),
(37, 'Suherdi ', '0851234678905', 'ady.suherdi@gmail.com ', '12', 'suherdi', 95, 95, 80, 85, 80, 98, 100, 'Admin', 0, 75),
(38, 'Bella Putri Nastiti ', '0876543210987', 'bella.putrinastiti@gmail.com ', '12', 'putrinastiti', 100, 100, 95, 90, 95, 95, 100, 'Guru', 100, 95);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id_murid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id_murid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
