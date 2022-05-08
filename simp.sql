-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 10:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simp`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `nip` char(18) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`nip`, `nama_lengkap`, `password`) VALUES
('30790217', 'Maguire', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info_faskes`
--

CREATE TABLE `info_faskes` (
  `id_faskes` int(11) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info_vaksinasi`
--

CREATE TABLE `info_vaksinasi` (
  `id_vaksinasi` int(11) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_vaksinasi`
--

INSERT INTO `info_vaksinasi` (`id_vaksinasi`, `tempat`, `tanggal`, `waktu`, `keterangan`) VALUES
(2, 'Situ Mustika', '2022-04-27 to 2022-04-28', '07:00 s.d.12:00', 'Dosis 1 : 100 (Sinovac)\r\nDosis 2 : 50 (AstraZeneca)');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_vaksin`
--

CREATE TABLE `jenis_vaksin` (
  `id_jenis_vaksin` int(11) NOT NULL,
  `jenis_vaksin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `golongan_darah` char(2) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `jenis_kelamin`, `golongan_darah`, `tanggal_lahir`, `alamat`, `no_hp`) VALUES
('0285884923947452', 'Neville Mercer', 'P', 'A', '10/29/2012', 'Langensari', '087-571-172-169'),
('0411008161342834', 'Charity Foley', 'P', 'B', '12/16/1982', 'Pataruman', '088-684-684-355'),
('0595896830046844', 'Hoyt Salazar', 'P', 'O', '03/18/2015', 'Purwaharja', '082-771-961-744'),
('1063114366359191', 'Walker Head', 'L', 'A', '06/23/2012', 'Banjar', '087-998-108-357'),
('1063465162256064', 'Carson Simpson', 'P', 'B', '08/04/1981', 'Langensari', '086-804-158-659'),
('1111450202016177', 'Benedict Bradshaw', 'L', 'A', '05/28/1967', 'Pataruman', '087-724-005-434'),
('1115796146449858', 'Erasmus Wilkinson', 'P', 'AB', '06/30/1987', 'Purwaharja', '082-567-610-443'),
('1381278732613267', 'Warren Talley', 'L', 'A', '12/30/1978', 'Purwaharja', '089-911-919-888'),
('1484208182068484', 'Colton Case', 'L', 'AB', '11/25/1973', 'Pataruman', '087-152-567-885'),
('1581575667248523', 'Keaton Reed', 'P', 'A', '07/12/2003', 'Langensari', '088-774-493-444'),
('1603456553501836', 'Dora Floyd', 'P', 'A', '12/10/1996', 'Purwaharja', '087-653-814-684'),
('1984853938186476', 'Maxwell Rosales', 'L', 'O', '01/31/1966', 'Pataruman', '081-404-027-185'),
('2103777162614674', 'Cyrus Vinson', 'L', 'O', '11/08/2005', 'Pataruman', '081-182-223-593'),
('2330288377754647', 'Odette Jimenez', 'L', 'AB', '09/22/2004', 'Pataruman', '083-784-378-613'),
('2513112350696781', 'Buffy Noel', 'L', 'B', '06/02/1997', 'Purwaharja', '081-786-855-027'),
('2627989121872435', 'Amber Montgomery', 'L', 'B', '12/05/2003', 'Langensari', '089-785-187-270'),
('2642142005423479', 'Preston Donovan', 'L', 'B', '07/12/1975', 'Banjar', '084-742-654-245'),
('2930745188875237', 'Ashely May', 'P', 'B', '11/01/1999', 'Pataruman', '087-185-566-227'),
('3018893397452578', 'Thor Kent', 'P', 'B', '04/03/1977', 'Pataruman', '085-327-965-295'),
('3188828834867318', 'Blaze Kerr', 'P', 'B', '05/23/1994', 'Pataruman', '080-341-863-483'),
('3246978168938322', 'Jessica Barrera', 'L', 'O', '07/10/1992', 'Banjar', '084-448-338-766'),
('3440214236344635', 'Damian Foreman', 'L', 'O', '07/22/1983', 'Banjar', '084-873-659-588'),
('3519973626118721', 'Jescie Blackwell', 'P', 'AB', '12/15/1978', 'Purwaharja', '084-119-232-848'),
('3845338831786395', 'Zena Bates', 'P', 'O', '11/13/1985', 'Pataruman', '084-351-673-675'),
('3992643521856054', 'Martin Potter', 'L', 'B', '09/23/1968', 'Pataruman', '083-748-827-313'),
('4232254689789718', 'Vladimir Potts', 'L', 'AB', '10/10/1985', 'Purwaharja', '082-435-511-466'),
('4519826540720116', 'Adria Mejia', 'L', 'A', '12/02/2013', 'Purwaharja', '088-571-439-368'),
('4535434333513312', 'Zorita Schneider', 'P', 'B', '12/09/1998', 'Banjar', '084-211-546-887'),
('4575983112641122', 'Kameko Klein', 'P', 'AB', '03/16/1975', 'Purwaharja', '089-551-641-178'),
('4848725257322651', 'Imani Austin', 'L', 'AB', '08/07/1979', 'Pataruman', '084-461-518-857'),
('4873257330477581', 'Minerva Blankenship', 'L', 'AB', '05/29/2003', 'Purwaharja', '085-747-274-846'),
('5045478944462269', 'Anthony Petersen', 'P', 'O', '10/31/1977', 'Purwaharja', '082-085-875-942'),
('5105060857815248', 'Malcolm Lara', 'L', 'A', '11/01/2002', 'Purwaharja', '086-438-632-219'),
('5145035758111555', 'Petra Barnett', 'P', 'B', '12/02/1967', 'Pataruman', '081-487-972-132'),
('5205312165854545', 'Chantale Carrillo', 'P', 'A', '09/15/1981', 'Banjar', '086-855-568-128'),
('5345375662353879', 'Reece Kane', 'L', 'B', '08/28/2008', 'Pataruman', '083-767-573-125'),
('5485753475929801', 'Damon Case', 'P', 'B', '06/01/1977', 'Purwaharja', '082-558-776-491'),
('5528652631836212', 'Hayes Chen', 'P', 'A', '08/10/1988', 'Purwaharja', '082-433-162-377'),
('5774913545276354', 'Carter Joyner', 'P', 'O', '09/11/1974', 'Pataruman', '086-286-170-365'),
('6298615848864685', 'Sage Lynn', 'L', 'AB', '11/18/1988', 'Purwaharja', '080-173-235-928'),
('6318662836516253', 'Deacon Strickland', 'L', 'A', '08/03/1986', 'Purwaharja', '081-541-078-865'),
('6336419414352593', 'Henry O\'connor', 'P', 'B', '11/16/1981', 'Pataruman', '084-507-426-668'),
('6391076656226228', 'Timothy Juarez', 'P', 'O', '03/08/1966', 'Pataruman', '087-452-339-537'),
('6463535408316420', 'Meghan Cleveland', 'L', 'B', '01/26/2011', 'Pataruman', '088-498-751-382'),
('6505952477151547', 'Cassandra Guerra', 'P', 'O', '08/17/1986', 'Banjar', '081-145-738-787'),
('6735647737013831', 'Bethany Kramer', 'P', 'O', '09/10/1970', 'Purwaharja', '088-902-054-660'),
('7476961727633282', 'Kevin Kline', 'L', 'O', '05/11/2015', 'Purwaharja', '081-074-835-171'),
('7710838741063159', 'Rana Kelley', 'L', 'A', '11/01/1992', 'Purwaharja', '081-578-454-105'),
('7753802112366057', 'Kameko Burton', 'P', 'O', '10/18/1997', 'Langensari', '084-368-905-505'),
('7812827224776174', 'Mariko Farrell', 'P', 'O', '03/08/2014', 'Pataruman', '084-283-935-237'),
('7862755648182878', 'Camden Roberts', 'L', 'O', '02/23/1970', 'Banjar', '086-101-286-431'),
('7945970642712886', 'Fuller Reilly', 'P', 'O', '09/29/1995', 'Purwaharja', '080-683-684-806'),
('8154806117584763', 'Mufutau Hatfield', 'P', 'O', '12/03/2010', 'Pataruman', '087-414-486-694'),
('8277874174436161', 'Aline Griffin', 'L', 'A', '03/14/1968', 'Purwaharja', '088-252-428-584'),
('8288648595316461', 'Harding Hanson', 'L', 'A', '10/01/2014', 'Purwaharja', '086-078-345-456'),
('8387675897842593', 'Gregory Andrews', 'L', 'O', '11/04/1967', 'Purwaharja', '088-737-982-244'),
('8455387812257339', 'Reuben Shaffer', 'P', 'A', '01/02/2000', 'Pataruman', '082-811-281-562'),
('8775483877948609', 'Kathleen Gardner', 'P', 'O', '10/11/2013', 'Purwaharja', '088-746-661-511'),
('8832816243725517', 'Tana Landry', 'L', 'B', '03/22/2011', 'Langensari', '083-729-866-862'),
('8858052042681711', 'Mohammad Cantrell', 'L', 'B', '11/29/1986', 'Purwaharja', '083-921-215-146'),
('8904418745123551', 'Chaim Summers', 'P', 'O', '07/04/1978', 'Purwaharja', '086-147-285-661'),
('8918858891678266', 'Rigel Donaldson', 'L', 'B', '12/08/1996', 'Purwaharja', '081-189-353-857'),
('9334267174021782', 'Brian Walton', 'P', 'O', '09/02/1978', 'Pataruman', '086-031-115-207'),
('9629392495365222', 'Amaya Fowler', 'L', 'B', '12/04/2003', 'Banjar', '085-431-617-343'),
('9758098742785870', 'Brittany Chang', 'L', 'A', '10/11/1967', 'Banjar', '085-126-523-277');

-- --------------------------------------------------------

--
-- Table structure for table `status_vaksinasi`
--

CREATE TABLE `status_vaksinasi` (
  `id_vaksinasi` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `vaksinasi_pertama` varchar(20) DEFAULT NULL,
  `tanggal_vaksinasi_pertama` varchar(30) DEFAULT NULL,
  `vaksinasi_kedua` varchar(20) DEFAULT NULL,
  `tanggal_vaksinasi_kedua` varchar(30) DEFAULT NULL,
  `id_jenis_vaksin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_vaksinasi`
--

INSERT INTO `status_vaksinasi` (`id_vaksinasi`, `nik`, `vaksinasi_pertama`, `tanggal_vaksinasi_pertama`, `vaksinasi_kedua`, `tanggal_vaksinasi_kedua`, `id_jenis_vaksin`) VALUES
(66, '1115796146449858', NULL, NULL, NULL, NULL, NULL),
(67, '1063114366359191', NULL, NULL, NULL, NULL, NULL),
(68, '8277874174436161', NULL, NULL, NULL, NULL, NULL),
(69, '2103777162614674', NULL, NULL, NULL, NULL, NULL),
(70, '8288648595316461', NULL, NULL, NULL, NULL, NULL),
(71, '1111450202016177', NULL, NULL, NULL, NULL, NULL),
(72, '5145035758111555', NULL, NULL, NULL, NULL, NULL),
(73, '8387675897842593', NULL, NULL, NULL, NULL, NULL),
(74, '5345375662353879', NULL, NULL, NULL, NULL, NULL),
(75, '6463535408316420', NULL, NULL, NULL, NULL, NULL),
(76, '4575983112641122', NULL, NULL, NULL, NULL, NULL),
(77, '7945970642712886', NULL, NULL, NULL, NULL, NULL),
(78, '8858052042681711', NULL, NULL, NULL, NULL, NULL),
(79, '1603456553501836', NULL, NULL, NULL, NULL, NULL),
(80, '2627989121872435', NULL, NULL, NULL, NULL, NULL),
(81, '2513112350696781', NULL, NULL, NULL, NULL, NULL),
(82, '6336419414352593', NULL, NULL, NULL, NULL, NULL),
(83, '0411008161342834', NULL, NULL, NULL, NULL, NULL),
(84, '9629392495365222', NULL, NULL, NULL, NULL, NULL),
(85, '3188828834867318', NULL, NULL, NULL, NULL, NULL),
(86, '8775483877948609', NULL, NULL, NULL, NULL, NULL),
(87, '5774913545276354', NULL, NULL, NULL, NULL, NULL),
(88, '1581575667248523', NULL, NULL, NULL, NULL, NULL),
(89, '3440214236344635', NULL, NULL, NULL, NULL, NULL),
(90, '4873257330477581', NULL, NULL, NULL, NULL, NULL),
(91, '8455387812257339', NULL, NULL, NULL, NULL, NULL),
(92, '5485753475929801', NULL, NULL, NULL, NULL, NULL),
(93, '3246978168938322', NULL, NULL, NULL, NULL, NULL),
(94, '8154806117584763', NULL, NULL, NULL, NULL, NULL),
(95, '8904418745123551', NULL, NULL, NULL, NULL, NULL),
(96, '3845338831786395', NULL, NULL, NULL, NULL, NULL),
(97, '3018893397452578', NULL, NULL, NULL, NULL, NULL),
(98, '6735647737013831', NULL, NULL, NULL, NULL, NULL),
(99, '1381278732613267', NULL, NULL, NULL, NULL, NULL),
(100, '7812827224776174', NULL, NULL, NULL, NULL, NULL),
(101, '5205312165854545', NULL, NULL, NULL, NULL, NULL),
(102, '4848725257322651', NULL, NULL, NULL, NULL, NULL),
(103, '3519973626118721', NULL, NULL, NULL, NULL, NULL),
(104, '5105060857815248', NULL, NULL, NULL, NULL, NULL),
(105, '4232254689789718', NULL, NULL, NULL, NULL, NULL),
(106, '2642142005423479', NULL, NULL, NULL, NULL, NULL),
(107, '7862755648182878', NULL, NULL, NULL, NULL, NULL),
(108, '6298615848864685', NULL, NULL, NULL, NULL, NULL),
(109, '2330288377754647', NULL, NULL, NULL, NULL, NULL),
(110, '5045478944462269', NULL, NULL, NULL, NULL, NULL),
(111, '9758098742785870', NULL, NULL, NULL, NULL, NULL),
(112, '7710838741063159', NULL, NULL, NULL, NULL, NULL),
(113, '3992643521856054', NULL, NULL, NULL, NULL, NULL),
(114, '4535434333513312', NULL, NULL, NULL, NULL, NULL),
(115, '8832816243725517', NULL, NULL, NULL, NULL, NULL),
(116, '1984853938186476', NULL, NULL, NULL, NULL, NULL),
(117, '7476961727633282', NULL, NULL, NULL, NULL, NULL),
(118, '1063465162256064', NULL, NULL, NULL, NULL, NULL),
(119, '8918858891678266', NULL, NULL, NULL, NULL, NULL),
(120, '0595896830046844', NULL, NULL, NULL, NULL, NULL),
(121, '9334267174021782', NULL, NULL, NULL, NULL, NULL),
(122, '0285884923947452', NULL, NULL, NULL, NULL, NULL),
(123, '6318662836516253', NULL, NULL, NULL, NULL, NULL),
(124, '7753802112366057', NULL, NULL, NULL, NULL, NULL),
(125, '1484208182068484', NULL, NULL, NULL, NULL, NULL),
(126, '4519826540720116', NULL, NULL, NULL, NULL, NULL),
(127, '2930745188875237', NULL, NULL, NULL, NULL, NULL),
(128, '5528652631836212', NULL, NULL, NULL, NULL, NULL),
(129, '6505952477151547', NULL, NULL, NULL, NULL, NULL),
(130, '6391076656226228', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `info_faskes`
--
ALTER TABLE `info_faskes`
  ADD PRIMARY KEY (`id_faskes`);

--
-- Indexes for table `info_vaksinasi`
--
ALTER TABLE `info_vaksinasi`
  ADD PRIMARY KEY (`id_vaksinasi`);

--
-- Indexes for table `jenis_vaksin`
--
ALTER TABLE `jenis_vaksin`
  ADD PRIMARY KEY (`id_jenis_vaksin`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `status_vaksinasi`
--
ALTER TABLE `status_vaksinasi`
  ADD PRIMARY KEY (`id_vaksinasi`,`nik`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_jenis_vaksin` (`id_jenis_vaksin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_faskes`
--
ALTER TABLE `info_faskes`
  MODIFY `id_faskes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info_vaksinasi`
--
ALTER TABLE `info_vaksinasi`
  MODIFY `id_vaksinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_vaksin`
--
ALTER TABLE `jenis_vaksin`
  MODIFY `id_jenis_vaksin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_vaksinasi`
--
ALTER TABLE `status_vaksinasi`
  MODIFY `id_vaksinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `status_vaksinasi`
--
ALTER TABLE `status_vaksinasi`
  ADD CONSTRAINT `status_vaksinasi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status_vaksinasi_ibfk_2` FOREIGN KEY (`id_jenis_vaksin`) REFERENCES `jenis_vaksin` (`id_jenis_vaksin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
