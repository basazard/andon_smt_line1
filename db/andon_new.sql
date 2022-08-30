-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 11:26 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andon_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `npk` int(4) NOT NULL,
  `nama` tinytext NOT NULL,
  `departemen` tinytext NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`npk`, `nama`, `departemen`, `password`) VALUES
(8, 'Bayu Wibisono', 'Produksi', 'prod0008'),
(11, 'Sugeng Sunaryo', 'Eng/Mtc', 'main0011'),
(16, 'Arief Budiman', 'Quality', 'qual0016'),
(18, 'Ila Kurnia', 'Produksi', 'prod0018'),
(19, 'Siti Mariyam', 'Produksi', 'prod0019'),
(22, 'Nasirudin', 'Quality', 'qual0022'),
(32, 'Siti Jaenap Ramadhan', 'Produksi', 'prod0032'),
(36, 'Aji Dwianto', 'Quality', 'qual0036'),
(39, 'Rismayanti', 'Produksi', 'prod0039'),
(40, 'Siti Ningrum', 'Produksi', 'prod0040'),
(53, 'Ayu Rizki', 'Produksi', 'prod0053'),
(62, 'Mustakim', 'Eng/Mtc', 'main0062'),
(64, 'Fajar Eko Susanto', 'Quality', 'qual0064'),
(73, 'Sari Khofifah', 'Produksi', 'prod0073'),
(82, 'Agung Budiyanto', 'Quality', 'qual0082'),
(112, 'Siti Komalasari', 'Produksi', 'prod0112'),
(114, 'Zico Aprireza', 'Eng/Mtc', 'main0114'),
(117, 'Prasetio Adi Sasono', 'Eng/Mtc', 'main0117'),
(141, 'Dwi Anggraeni', 'Produksi', 'prod0141'),
(144, 'Marsisto Utoyo', 'Quality', 'qual0144'),
(157, 'Lukman Nulhakim', 'Eng/Mtc', 'main0157'),
(196, 'Mutia Rachmawati', 'Produksi', 'prod0196'),
(211, 'Yunita Pratiwi', 'Produksi', 'prod0211'),
(214, 'Arif Setiawan', 'Quality', 'qual0214'),
(235, 'Anisa', 'Produksi', 'prod0235'),
(245, 'Ramdoni', 'Produksi', 'prod0245'),
(255, 'Rahayu Suci Kurnia', 'Produksi', 'prod0255'),
(319, 'Syabanul Khafi Tanjung', 'Eng/Mtc', 'main0319'),
(320, 'Ibnu Khaerudin', 'Eng/Mtc', 'main0320'),
(368, 'Ade Rukmi Sarastiti', 'Quality', 'qual0368'),
(371, 'Roby Sunggoro', 'Produksi', 'prod0371'),
(373, 'Ryan Ahsani Taqwim', 'Eng/Mtc', 'main0373'),
(397, 'Bayu Septiadi Putra', 'Eng/Mtc', 'main0397'),
(407, 'Kike Nurhakim', 'Produksi', 'prod0407'),
(409, 'Gilang Dean Nugraha', 'Produksi', 'prod0409'),
(412, 'Rian Setiawan', 'Quality', 'qual0412'),
(437, 'Fitri Arfiani', 'Produksi', 'prod0437'),
(459, 'Saifuddin Fathi Salam', 'Eng/Mtc', 'main0459'),
(462, 'Nur Aisyah', 'Produksi', 'prod0462'),
(464, 'Hanifah Amatulloh', 'Produksi', 'prod0464'),
(466, 'M. Abi Nugraha', 'Produksi', 'prod0466'),
(468, 'Eka Fauziah', 'Produksi', 'prod0468'),
(469, 'Tiyas Sulis Setyawati', 'Produksi', 'prod0469'),
(470, 'Nelly Fadlia Putri', 'Produksi', 'prod0470'),
(472, 'Fitri Dwi', 'Produksi', 'prod0472'),
(473, 'Ade Rizki Lubis', 'Eng/Mtc', 'main0473'),
(475, 'Elvira Dwi Septiyani', 'Produksi', 'prod0475'),
(476, 'Imam Gunawan', 'Quality', 'qual0476'),
(477, 'Dian Novia', 'Produksi', 'prod0477'),
(478, 'Nanang Kriscandono', 'Eng/Mtc', 'main0478'),
(481, 'Widi Astuti', 'Produksi', 'prod0481'),
(482, 'Maulidatul Fazriah', 'Produksi', 'prod0482'),
(483, 'Siti Nuramalia', 'Produksi', 'prod0483'),
(484, 'Widya Pangestika', 'Produksi', 'prod0484'),
(489, 'Dinda Sari', 'Produksi', 'prod0489'),
(490, 'Nurul Fadilah', 'Produksi', 'prod0490'),
(491, 'Winda Lestari', 'Produksi', 'prod0491'),
(492, 'Riana Alifvia', 'Produksi', 'prod0492'),
(493, 'Evi Hapipah', 'Produksi', 'prod0493'),
(494, 'Nurul Aeni', 'Produksi', 'prod0494'),
(495, 'Shinta Sindi Pertiwi', 'Produksi', 'prod0495'),
(498, 'Rahman', 'Quality', 'qual0498'),
(499, 'Hasnita Pratiwi', 'Produksi', 'prod0499'),
(500, 'Aziyah Laely', 'Produksi', 'prod0500'),
(503, 'Richa Kusuma Evendi', 'Produksi', 'prod0503'),
(504, 'Della Aprilia', 'Produksi', 'prod0504'),
(505, 'Enggar Yulistia Prahesti', 'Produksi', 'prod0505'),
(506, 'Utami Ade Ningsih', 'Produksi', 'prod0506'),
(507, 'Elisa Kiranti', 'Produksi', 'prod0507'),
(508, 'Prihatini', 'Produksi', 'prod0508'),
(509, 'Meli Nur Habibah', 'Produksi', 'prod0509'),
(510, 'Delia Novita Sari', 'Produksi', 'prod0510'),
(511, 'Arlika Indriani', 'Produksi', 'prod0511'),
(512, 'Dina Setyani', 'Produksi', 'prod0512'),
(513, 'Rr Intan Ade Budiarum', 'Produksi', 'prod0513'),
(514, 'Karmila Kamal', 'Produksi', 'prod0514'),
(515, 'Muhammad Zidan Maulana', 'Produksi', 'prod0515'),
(518, 'Muhammad Azzam Al Afifi', 'Produksi', 'prod0518'),
(519, 'Eriska Triana Purwanty', 'Produksi', 'prod0519'),
(520, 'Nur Kayla Dewinta', 'Produksi', 'prod0520'),
(522, 'Firda Nurbaeti', 'Produksi', 'prod0522'),
(524, 'Muhammad Alwin Andriansyah', 'Produksi', 'prod0524'),
(525, 'Jaka Maulana Purba', 'Eng/Mtc', 'main0525'),
(527, 'Maulana Yusuf', 'Produksi', 'prod0527'),
(528, 'Muhammad Akbar Nurhidayat', 'Produksi', 'prod0528'),
(530, 'Sahrul Mauludin', 'Eng/Mtc', 'main0530'),
(531, 'Dandi Syahputra', 'Eng/Mtc', 'main0531'),
(533, 'Muhamad Anryansyah', 'Quality', 'qual0533'),
(534, 'Wirda Maulida Rahmah', 'Produksi', 'prod0534'),
(536, 'Fitri Mamawarni', 'Produksi', 'prod0536'),
(538, 'Nur Anggrayani', 'Produksi', 'prod0538'),
(539, 'Aditia Faramita', 'Produksi', 'prod0539'),
(540, 'Shofi Aulia Rochani', 'Produksi', 'prod0540'),
(541, 'Siti Khodijah', 'Produksi', 'prod0541'),
(542, 'Suendro', 'Produksi', 'prod0542'),
(544, 'Milawati', 'Produksi', 'prod0544'),
(545, 'Siwi Fauziah', 'Produksi', 'prod0545'),
(546, 'Devi Komalasari', 'Produksi', 'prod0546'),
(547, 'Santi Aprilia', 'Produksi', 'prod0547'),
(548, 'Riska Dila Apriliani', 'Produksi', 'prod0548'),
(549, 'Khusni Khayatul Fatichah', 'Produksi', 'prod0549'),
(550, 'Rizki Septian Nasution', 'Produksi', 'prod0550'),
(551, 'Alfia Zahra Wulandari', 'Produksi', 'prod0551'),
(553, 'Novita Sari', 'Produksi', 'prod0553'),
(554, 'Diana Safitri', 'Produksi', 'prod0554'),
(556, 'Tika Juliyanti', 'Produksi', 'prod0556'),
(557, 'Diannita Vella Suffah', 'Produksi', 'prod0557'),
(560, 'Panji Abdul Rahman', 'Produksi', 'prod0560'),
(561, 'Renintya Gitasmara', 'Produksi', 'prod0561');

-- --------------------------------------------------------

--
-- Table structure for table `smt`
--

CREATE TABLE `smt` (
  `no` int(10) NOT NULL,
  `name` text NOT NULL,
  `cluster` tinytext NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smt`
--

INSERT INTO `smt` (`no`, `name`, `cluster`, `status`) VALUES
(1, 'Destecker', 'TOP', 1),
(2, 'PWB Cleaning', 'TOP', 1),
(3, 'Label Barcode (TOP)', 'TOP', 1),
(4, 'Solder Paste Printing (TOP)', 'TOP', 1),
(5, 'SPI (TOP)', 'TOP', 1),
(6, 'Pick & Place (TOP)', 'TOP', 1),
(7, 'Reflow Oven (TOP)', 'TOP', 1),
(8, 'AOI (TOP)', 'TOP', 1),
(9, 'Label Barcode (BOTTOM)', 'BOTTOM', 1),
(10, 'Solder Paste Printing (BOTTOM)', 'BOTTOM', 1),
(11, 'SPI (BOTTOM)', 'BOTTOM', 1),
(12, 'Pick & Place (BOTTOM)', 'BOTTOM', 1),
(13, 'Reflow Oven (BOTTOM)', 'BOTTOM', 1),
(14, 'AOI (BOTTOM)', 'BOTTOM', 1),
(15, 'Manual Insert', 'BACK END', 1),
(16, 'Fluxer', 'BACK END', 1),
(17, 'Heater', 'BACK END', 1),
(18, 'Selective Solder 1', 'BACK END', 1),
(19, 'Selective Solder 2', 'BACK END', 1),
(20, 'ICT 1', 'TEST', 1),
(21, 'ICT 2', 'TEST', 1),
(22, 'Flash 1', 'TEST', 1),
(23, 'Flash 2', 'TEST', 1),
(24, 'Router', 'TEST', 1),
(25, 'FCT 1', 'TEST', 1),
(26, 'FCT 2', 'TEST', 1),
(27, 'FCT 3', 'TEST', 1),
(28, 'FCT 4', 'TEST', 1),
(29, 'Coating', 'TEST', 1);

-- --------------------------------------------------------

--
-- Table structure for table `smt_action`
--

CREATE TABLE `smt_action` (
  `no` int(11) NOT NULL,
  `id_trouble` int(10) NOT NULL,
  `date_trouble` date NOT NULL,
  `time_trouble` time NOT NULL,
  `no_station` int(10) NOT NULL,
  `nama_station` tinytext NOT NULL,
  `trouble` text NOT NULL,
  `action` text NOT NULL,
  `name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smt_report`
--

CREATE TABLE `smt_report` (
  `id_trouble` int(11) NOT NULL,
  `date_trouble` date NOT NULL,
  `time_trouble` time NOT NULL,
  `op_prod` int(4) NOT NULL,
  `no_station` int(10) NOT NULL,
  `nama_station` text NOT NULL,
  `start_repair` time DEFAULT NULL,
  `finish_repair` time DEFAULT NULL,
  `duration_repair` time DEFAULT NULL,
  `op_mtc` int(4) NOT NULL,
  `time_confirm` time DEFAULT NULL,
  `duration_all` time DEFAULT NULL,
  `op_qual` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`npk`);

--
-- Indexes for table `smt`
--
ALTER TABLE `smt`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `smt_action`
--
ALTER TABLE `smt_action`
  ADD PRIMARY KEY (`no`),
  ADD KEY `no_station` (`no_station`),
  ADD KEY `id-trouble` (`id_trouble`);

--
-- Indexes for table `smt_report`
--
ALTER TABLE `smt_report`
  ADD PRIMARY KEY (`id_trouble`),
  ADD KEY `no_station` (`no_station`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `smt`
--
ALTER TABLE `smt`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `smt_action`
--
ALTER TABLE `smt_action`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `smt_report`
--
ALTER TABLE `smt_report`
  MODIFY `id_trouble` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `smt_action`
--
ALTER TABLE `smt_action`
  ADD CONSTRAINT `id-trouble` FOREIGN KEY (`id_trouble`) REFERENCES `smt_report` (`id_trouble`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `smt_action_ibfk_1` FOREIGN KEY (`no_station`) REFERENCES `smt` (`no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `smt_report`
--
ALTER TABLE `smt_report`
  ADD CONSTRAINT `station` FOREIGN KEY (`no_station`) REFERENCES `smt` (`no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
