-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 02:23 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `no_induk` varchar(32) NOT NULL,
  `kd_lembaga` varchar(8) NOT NULL,
  `nm_pd` varchar(35) NOT NULL,
  `tmpt_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` varchar(1) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `nm_ayah` varchar(32) DEFAULT NULL,
  `pekerjaan_ayah` varchar(25) DEFAULT NULL,
  `nm_ibu` varchar(32) DEFAULT NULL,
  `pekerjaan_ibu` varchar(25) DEFAULT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`no_induk`, `kd_lembaga`, `nm_pd`, `tmpt_lahir`, `tgl_lahir`, `jns_kelamin`, `alamat`, `nm_ayah`, `pekerjaan_ayah`, `nm_ibu`, `pekerjaan_ibu`, `no_hp`, `tgl_keluar`) VALUES
('KS000', '41127310', 'Indah Sari', 'Polewalie', '2008-08-10', 'P', 'Gilireng', 'Tang', 'Petani', 'Lili', 'URT', '-', '2019-02-10'),
('KS002', '41127313', 'Fitri Ramadani', 'Polewalie', '2020-01-24', 'P', 'Polewalie', 'Ambo Unga', 'Petani', 'Nanni', 'URT', '-', '2019-04-16'),
('KS2001', '41127302', 'A.Ashar', 'Polewalie', '2007-04-15', 'L', 'Polewalie', 'Abdul Muis', 'Petani', 'A.Endang', 'URT', '-', '2019-02-01'),
('KS002', '1', 'Fitri Ramadani', 'Polewalie', '2020-04-17', 'P', 'Polewalie', 'Ambo Unga', 'Petani', 'Nanni', 'URT', '-', '2019-04-16'),
('41127301-1-KS1007', '41127301', 'Nur Amelia', 'Gilireng', '2008-01-08', 'P', 'Jl.Poros Paselloreng, Kel.Gilireng', 'Abd.Rasyid', 'Petani', 'Santi', 'URT', '085342661309', '2019-10-02'),
('KS1008', '41127301', 'Sulis Diana', 'Gilireng', '2008-07-10', 'P', 'Jl.Poros Paselloreng', 'Kulau', 'Petani', 'St. Fatimah', 'URT', '085211678131', '2019-01-02'),
('KS2006', '41127302', 'Asriadi', 'Gilireng', '2007-04-20', 'L', 'polewalie', 'Muh. Ali', 'Petani', 'Sasrianti', 'URT', '-', '2019-08-17'),
('KS2007', '41127302', 'Arman Hidayah', 'Gilireng', '2006-02-19', 'L', 'polewalie', 'Muh. Saleng', 'Petani', 'Sanimbar', 'URT', '-', '2019-09-13'),
('KS4005', '41127304', 'Hidayah', 'Lamata', '2010-11-14', 'L', 'Gilireng', 'Tenri', 'Petani', 'Fatmawati', 'Pekerja Kantor', '-', '2019-04-12'),
('KS4006', '41127304', 'Mutmainnah', 'Gilireng', '2010-06-05', 'P', 'Gilireng', 'Baharuddin', 'Petani', 'Normi', 'URT', '-', '2019-02-03'),
('KS4007', '41127304', 'Muh. Fahri', 'Gilireng', '2010-10-20', 'L', 'Gilireng', 'Syahabuddin', 'Petani', 'Risnawati', 'URT', '-', '2019-01-15'),
('KS5011', '41127305', 'Hasnita', 'Lamata', '2010-12-22', 'P', 'Lamata', 'Renreng', 'Karyawan', 'Menni', 'Guru', '-', '2019-10-18'),
('KS5012', '41127305', 'Fifa', 'Sengkang', '2009-09-10', 'P', 'Lamata', 'Ambo Enteng', 'Guru', 'Uleng', 'URT', '-', '2019-11-02'),
('KS5013', '41127305', 'Umrah', 'Lamata', '2009-02-22', 'P', 'Lamata', 'Ambo Asse', 'Petani', 'Emma', 'URT', '-', '2019-09-06'),
('KS5014', '41127305', 'Ambo Asse', 'Sengkang', '2009-09-30', 'L', 'Lamata', 'Odding', 'Karyawan ', 'Lija', 'Karyawan', '-', '2019-12-11'),
('KS5015', '41127305', 'Muh. Fadli', 'Sakkoli', '2010-03-29', 'L', 'Lamata', 'imannaungi', 'Guru', 'Mira', 'Guru', '-', '2019-10-01'),
('KS5016', '41127305', 'Imran', 'Sajoanging', '2009-02-25', 'L', 'Lamata', 'Toni', 'Petani', 'Muni', 'URT', '-', '2019-08-07'),
('KS6005', '41127306', 'Bandul', 'Anabanua', '2010-10-16', 'L', 'Lamata', 'Zakaria', 'Karyawan', 'Ulau', 'URT', '-', '2019-09-17'),
('KS6006', '41127306', 'Halifah', 'Gilireng', '2009-05-30', 'P', 'Lamata', 'Manda', 'Karyawan', 'ilahang', 'Guru', '-', '2019-07-11'),
('KS6007', '41127306', 'Asril', 'Gilireng', '2008-03-15', 'L', 'Lamata', 'Anwar', 'Wiraswasta', 'Cambolong', 'URT', '-', '2019-08-02'),
('KS6008', '41127306', 'Alfin', 'Lamata', '2010-01-21', 'L', 'Lamata', 'Muslimin', 'Petani', 'Fenni', 'URT', '-', '2019-08-20'),
('KS6009', '41127306', 'Iqbal', 'Gilireng', '2008-02-18', 'L', 'Lamata', 'Zakaria', 'Karyawan', 'Ulau', 'URT', '-', '2019-03-29'),
('KS7006', '41127307', 'Fauzan', 'Paselloreng', '2010-05-11', 'L', 'Paselloreng', 'Lanua', 'Petani', 'Mutti', 'URT', '-', '2019-06-30'),
('KS7007', '41127307', 'Rizki', 'Makassar', '2010-01-06', 'L', 'Paselloreng', 'Lodding', 'Wiraswasta', 'Ijuse', 'Wiraswasta', '-', '2019-07-28'),
('KS7008', '41127307', 'Zakira', 'Paselloreng', '2010-03-01', 'P', 'Paselloreng', 'Anto', 'Wiraswasta', 'Sumarni', 'URT', '-', '2019-07-27'),
('KS9005', '41127309', 'Nila Intasari', 'Doddi', '2009-10-10', 'P', 'Doddi', ' Masing', 'Petani', 'Suhema', 'URT', '-', '2019-01-11'),
('KS9006', '41127309', 'Ilham', 'Sakkoli', '2018-11-12', 'L', 'Doddi', 'Latahan', 'Petani', 'Harija', 'URT', '-', '2019-04-12'),
('KS1104', '41127311', 'Keyshia Nasila Ramadhani', 'Sakkoli', '2008-09-01', 'P', 'Doddi', 'Ibrahim', 'Wiraswasta', 'St. Fatimah', 'URT', '081340334669', '2018-10-11'),
('KS1105', '41127311', 'Sitti AIsyah', 'Doddi', '2008-08-28', 'P', 'Doddi', 'Samsu alam', 'Petani', 'Anita', 'URT', '082187295399', '2018-02-15'),
('KS1106', '41127311', 'Alfiansyah', 'Laputeng', '2008-11-17', 'L', 'Laputeng', 'Sirajuddin', 'Petani', 'Idah', 'URT', '085398888760', '2018-03-03'),
('KS1305', '41127313', 'Sandi', 'Lakadaong', '2006-11-11', 'L', 'Polewalie', 'Ambo Angka', 'Guru', 'Satriana', 'URT', '-', '2019-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_donasi`
--

CREATE TABLE `tb_donasi` (
  `id_donasi` int(11) NOT NULL,
  `id_donatur` varchar(8) NOT NULL,
  `kd_lembaga` varchar(8) NOT NULL,
  `tgl_donasi` date NOT NULL,
  `fisik` varchar(15) DEFAULT '-',
  `jml_donasifisik` int(11) DEFAULT '0',
  `non_fisik` varchar(15) DEFAULT '-',
  `jml_donasinonfisik` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_donasi`
--

INSERT INTO `tb_donasi` (`id_donasi`, `id_donatur`, `kd_lembaga`, `tgl_donasi`, `fisik`, `jml_donasifisik`, `non_fisik`, `jml_donasinonfisik`) VALUES
(1, 'KDO1', '41127313', '2019-05-19', NULL, NULL, 'uang', 250000),
(3, 'KD02', '41127301', '0002-02-21', NULL, NULL, 'uang', 100000),
(4, 'KD02', '41127302', '2019-04-03', NULL, NULL, 'uang', 600000),
(0, 'KDO1', '41127301', '2019-05-18', NULL, NULL, 'uang', 250000),
(0, 'KDO1', '41127302', '2019-05-18', NULL, NULL, 'uang', 250000),
(0, 'KDO1', '41127303', '2019-05-18', NULL, NULL, 'uang', 250000),
(0, 'KDO1', '41127304', '2019-05-18', NULL, NULL, 'uang', 250000),
(0, 'KDO2', '41127305', '2019-06-04', NULL, NULL, 'uang', 750000),
(0, 'KDO2', '41127306', '2019-06-04', NULL, NULL, 'uang', 750000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_donatur`
--

CREATE TABLE `tb_donatur` (
  `id_donatur` varchar(8) NOT NULL,
  `nm_donatur` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_donatur`
--

INSERT INTO `tb_donatur` (`id_donatur`, `nm_donatur`) VALUES
('KDO1', 'Yayasan Baitul Maal '),
('KDO2', 'Anggaran Desa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `nik` varchar(16) NOT NULL,
  `kd_lembaga` varchar(8) NOT NULL,
  `kd_rombel` varchar(12) NOT NULL,
  `nm_guru` varchar(32) NOT NULL,
  `tmpt_lahir` varchar(32) NOT NULL,
  `tgllahir_guru` date NOT NULL,
  `jns_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `pendidikan` varchar(5) NOT NULL,
  `profesi_lain` varchar(25) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tmt_mengajar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`nik`, `kd_lembaga`, `kd_rombel`, `nm_guru`, `tmpt_lahir`, `tgllahir_guru`, `jns_kelamin`, `alamat`, `pendidikan`, `profesi_lain`, `no_hp`, `tmt_mengajar`) VALUES
('KG001', '41127301', '', 'Wasiati, S.Ag', 'Wajo', '1968-02-14', 'P', 'Jl.Poros Paselloreng', 'S1', 'Guru', '085242465536', '2000-01-13'),
('KG002', '41127302', '', 'Corawettuing, S.Pd', 'Alelimpo', '1976-04-19', 'P', 'Gilireng', 'S1', 'Guru', '085237323971', '2006-01-12'),
('KG003', '41127303', '', 'Hasbullah, S.Pdi', 'Sajoanging', '1994-09-11', 'L', 'Gilireng', 'S1', 'Wiraswasta', '082361008811', '2017-07-10'),
('KG004', '41127304', '', 'PAkkecci', 'Wajo', '1957-09-12', 'P', 'Gilireng', 'SLTP', 'URT', '085294029224', '1997-08-10'),
('KG005', '41127305', '', 'Daremma', 'Lamata', '1960-12-12', 'P', 'Lamata', 'SLTA', 'URT', '082335010505', '2012-07-18'),
('KG006', '41127306', '', 'Mariati', 'Gilireng', '1958-12-10', 'P', 'Lamata', 'S1', 'URT', '082346799660', '1980-12-01'),
('KG007', '41127307', '', 'Nambo', 'Paselloreng', '1962-06-11', 'P', 'Paselloreng', 'SLTA', 'URT', '081241098818', '2001-08-10'),
('KG008', '41127308', '', 'Ija', 'Paselloreng', '1960-05-03', 'P', 'Paselloreng', 'SLTA', 'URT', '085397497466', '1983-12-05'),
('KG009', '41127309', '', 'Batu Ela', 'Laputeng', '1960-10-11', 'L', 'Mamminasae', 'SLTP', 'URT', '085342306100', '1996-05-04'),
('KG010', '41127310', '', 'Omming', 'Laresang', '1962-08-08', 'P', 'Mamminasae', 'S1', 'Guru', '082346749966', '2007-07-04'),
('KG011', '41127311', '', 'Hasanawia, S.PdI', 'Laputeng', '1970-09-06', 'P', 'Mamminasae', 'S1', 'Guru', '082394785561', '2013-04-05'),
('KG012', '41127312', '', 'Saenab, S.Ag', 'Polewalie', '1968-01-05', 'P', 'Polewalie', 'S1', 'Pegawai KUA', '082183988854', '2004-03-03'),
('KG013', '41127313', '', 'Kentong', 'Wajo', '1970-07-01', 'P', 'Polewalie', 'SLTP', 'URT', '085396969743', '1995-05-02'),
('KG014', '41127314', '', 'Samsiah', 'Alausalo', '1959-10-12', 'P', 'Alausalo', 'SLTP', 'URT', '085255453301', '1990-04-02'),
('KG015', '41127315', '', 'Hj.Deppung', 'Alausalo', '1957-02-16', 'P', 'Alausalo', 'SLTP', 'URT', '085394446192', '2000-05-13'),
('KG016', '41127316', '', 'Bunga Eja', 'Poleonro', '1968-02-22', 'P', 'Poleonro', 'SLTA', 'URT', '082329339509', '1985-02-03'),
('KG017', '41127317', '', 'Hj.Siti Nuralang', 'Poleonro', '1960-01-24', 'P', 'Poleonro', 'SLTA', 'URT', '085342661212', '1997-08-06'),
('KG018', '41127318', '', 'Indarsiah', 'Abbatireng', '1968-06-03', 'P', 'Abbatireng', 'SLTA', 'Wiraswasta', '085243718311', '1999-09-04'),
('KG019', '41127319', '', 'Rustam, S.Pd', 'Longka', '1968-07-13', 'L', 'Abbatireng', 'S1', 'Guru', '', '2007-08-05'),
('KG020', '41127320', '', 'Hasna', 'Makassar', '1972-06-11', 'P', 'Arajang', 'SLTA', 'URT', '081343944509', '1999-07-30'),
('KG021', '41127321', '', 'Indo Bare', 'Gilireng', '1960-01-15', 'P', 'Arajang', 'SLTA', 'URT', '081364217606', '2008-02-01'),
('KG022', '41127322', '', 'Erna, S.PdI', 'Gilireng', '1980-03-04', 'P', 'Arajang', 'S1', 'Guru', '085390518111', '2012-02-04'),
('1', '1', '', 'puput', 'Gilireng', '2020-04-17', 'P', 'Arajang', 'D1', 'Guru', '-', '2020-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keterangan`
--

CREATE TABLE `tb_keterangan` (
  `id_keterangan` int(11) NOT NULL,
  `ket_lembagaaktif` text NOT NULL,
  `ket_lembagatidakaktif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keterangan`
--

INSERT INTO `tb_keterangan` (`id_keterangan`, `ket_lembagaaktif`, `ket_lembagatidakaktif`) VALUES
(1, '16', '17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lembaga`
--

CREATE TABLE `tb_lembaga` (
  `kd_lembaga` varchar(8) NOT NULL,
  `username` varchar(32) NOT NULL,
  `nm_lembaga` varchar(32) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `desa` varchar(32) NOT NULL,
  `kecamatan` varchar(35) NOT NULL,
  `thn_berdiri` varchar(4) NOT NULL,
  `tmpt_belajar` varchar(20) NOT NULL,
  `pimpinan` varchar(20) NOT NULL,
  `metode` varchar(35) NOT NULL,
  `kat_wilayah` varchar(20) NOT NULL,
  `tmbh_pemb` varchar(20) NOT NULL,
  `sumberdana` varchar(15) NOT NULL,
  `jml_iuran` int(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lembaga`
--

INSERT INTO `tb_lembaga` (`kd_lembaga`, `username`, `nm_lembaga`, `alamat`, `desa`, `kecamatan`, `thn_berdiri`, `tmpt_belajar`, `pimpinan`, `metode`, `kat_wilayah`, `tmbh_pemb`, `sumberdana`, `jml_iuran`, `photo`, `status`) VALUES
('41127301', 'al_hikmah', 'AL_Hikmah', 'Jl.Poros Paselloreng', 'Gilireng', 'Gilireng', '2000', 'Rumahan', 'Wasiati, S.Ag', 'Iqro', 'Pedesaan', 'Menghafal surah pend', '-', 0, 'profile02062020-054416.jpg', ' '),
('41127302', 'al_hidayat', 'Al_Hidayat', 'Gilireng', 'Gilireng', 'Gilireng', '2006', 'Rumahan', 'Corawettoing,  S.Pd', 'Iqro', 'Pedesaan', 'pembacaan surah pend', '-', 0, 'profile02062020-054934.jpg', ''),
('41127303', 'al_ijtihad', 'Al_Ijtihad', 'Gilireng', 'Gilireng', 'Gilireng', '2017', 'Mesjid', 'Hasbullah', 'Iqro', 'Pedesaan', 'Menghafal surah pend', 'siswa', 20000, 'profile02062020-054314.jpg', ''),
('41127304', 'al_barqiya', 'Al_Barqiya', 'Gilireng', 'Gilireng', 'Gilireng', '1997', 'Rumahan', 'Pakkecci', 'Albagdadi', 'Pedesaan', '-', 'siswa', 25000, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('41127305', 'syuhada', 'Syuhada', 'Lamata', 'Lamata', 'Gilireng', '2012', 'Rumahan', 'Daremma', 'Albagdadi', 'Pedesaan', '-', '-', 0, '', ''),
('41127306', 'al_iqro', 'Al_Iqro', 'Lamata', 'Lamata', 'Gilireng', '1980', 'Rumahan', 'Mariati', 'Albagdadi', 'Pedesaan', '-', '-', 0, '', ''),
('41127307', 'al_muhajirin', 'Al_Muhajirin', 'Paselloreng', 'Paselloreng', 'Gilireng', '2001', 'Rumahan', 'Nambo', 'Albagdadi', 'Pedesaan', 'pembacaan surah pend', 'siswa', 25000, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('41127308', 'al_ikhsan', 'Al_Ikhsan', 'Paselloreng', 'Paselloreng', 'Gilireng', '1983', 'Rumahan', 'IJA', 'Albagdadi', 'Pedesaan', '-', '-', 0, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('41127309', 'jabal_nur', 'Jabal Nur', 'Mamminasae', 'Mamminasae', 'Gilireng', '1996', 'Rumahan', 'Batu Ela', 'Albagdadi', 'Pedesaan', '-', '-', 0, 'profile02062020-055352.jpg', ''),
('41127310', 'al_mujahidir', 'Al_Mujahidir', 'Mamminasae', 'Mamminasae', 'Gilireng', '2007', 'Rumahan', 'Omming', 'Albagdadi', 'Pedesaan', '-', 'siswa', 20, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('41127311', 'at_taqwa', 'At_Taqwa', 'Mamminasae', 'Mamminasae', 'Gilireng', '2013', 'Rumahan', 'Hasanawia, S.PdI', 'Iqro', 'Pedesaan', 'pembacaan surah pend', '-', 0, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('41127312', 'an_nur', 'An_Nur', 'Polewalie', 'polewalie', 'Gilireng', '2004', 'Rumahan', 'Saenab, S.Ag', 'Iqro', 'Pedesaan', 'Menghafal surah pend', '-', 0, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('41127313', 'al_araf', 'Al_Araf', 'Polewalie', 'polewalie', 'Gilireng', '1995', 'Rumahan', 'Kentong', 'Albagdadi', 'Pedesaan', '-', '-', 0, 'profile02062020-055844.jpg', ''),
('41127314', 'al_furqon', 'Al_Furqon', 'Alausalo', 'Alausalo', 'Gilireng', '1990', 'Rumahan', 'Samsiah', 'Albagdadi', 'Pedesaan', '-', '-', 0, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('41127315', 'al_amin', 'Al_Amin', 'Alausalo', 'Alausalo', 'Gilireng', '2000', 'Rumahan', 'Hj.Deppung', 'Albagdadi', 'Pedesaan', 'pembacaan surah pend', '-', 0, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('41127316', 'babul_khoiro', 'Babul_Khoiro', 'Poleonro', 'Poleonro', 'Gilireng', '1985', 'Rumahan', 'Bunga Eja', 'Iqro', 'Pedesaan', 'pembacaan surah pend', '-', 0, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('41127317', 'al_ikhlas', 'Al_Ikhlas', 'Poleonro', 'Poleonro', 'Gilireng', '1997', 'Rumahan', 'Hj.Siti Nuralang', 'Albagdadi', 'Pedesaan', '-', '-', 0, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('41127318', 'babussalam', 'Babussalam', 'Abbatireng', 'Abbatireng', 'Gilireng', '1999', 'Rumahan', 'Indarsiah', 'Albagdadi', 'Pedesaan', '-', 'siswa', 20000, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('41127319', 'cahaya', 'Cahaya Al_Barqi', 'Abbatireng', 'Abbatireng', 'Gilireng', '2007', 'Rumahan', 'Rustam, S.Pd', 'Iqro', 'Pedesaan', 'Menghafal surah pend', '-', 0, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('41127320', 'al_khusyu', 'Al_Khusyu', 'Lawareng', 'Arajang', 'Gilireng', '1999', 'Rumahan', 'Hasna', 'Iqro', 'Pedesaan', 'Menghafal surah pend', '-', 0, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('41127321', 'ar_rahman', 'Ar_Rahman', 'Arajang', 'Arajang', 'Gilireng', '2008', 'Rumahan', 'Indo Bare', 'Albagdadi', 'Pedesaan', '-', '-', 0, 'profile02062020-060502.jpg', ''),
('41127322', 'al_salam', 'Al_Salam', 'Maccongi', 'Arajang', 'Gilireng', '2012', 'Rumahan', 'Erna, S.pdI', 'Iqro', 'Pedesaan', 'pembacaan surah pend', 'siswa', 25000, 'http://tpa.ite2015.com/asset/image/profile/defaultphoto.png', ''),
('1', 'puput', 'puput', 'sidrap', 'Paselloreng', 'bala', '2019', 'Rumahan', 'puput', 'Iqro', 'Pedesaan', 'pembacaan surah pend', '', 0, 'default.png', ' '),
('41127323', 'al_amin', 'Al_Amin', 'Polewalie', 'Polewalie', 'Gilireng', '2003', 'Rumahan', 'Mattanang', 'Iqro', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127324', 'al_falaq', 'Al_Falaq', 'Gilireng', 'Gilireng', 'Gilireng', '1985', 'Rumahan', 'Cabbi', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127326', 'al_furqan', 'Al_Furqan', 'Gilireng', 'Gilireng', 'Gilireng', '1986', 'Rumahan', 'Bunga Pandan', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127325', 'an_nur', 'An_Nur', 'Gilireng', 'Gilireng', 'Gilireng', '2000', 'Rumahan', 'Isa', 'Albagdadi', 'Pedesaan', '-', '', 0, 'profile02062020-060032.jpg', 'tidakaktif'),
('41127327', 'miftahul', 'Miftahul_khaera', 'Gilireng', 'Gilireng', 'Gilireng', '2003', 'Rumahan', 'Nyompa', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127328', 'al_aamiin', 'Al_Amin', 'Gilireng', 'Gilireng', 'Gilireng', '2010', 'Rumahan', 'Indo Esa', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127329', 'al_hikmahh', 'Al_hikmah', 'Arajang', 'Arajang', 'Gilireng', '1986', 'Rumahan', 'Karamang', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127330', 'al_muhaimin', 'Al_Muhaimin', 'Arajang', 'Arajang', 'Gilireng', '1990', 'Rumahan', 'Rasida', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127331', 'annu', 'An_Nu', 'Arajang', 'Arajang', 'Gilireng', '2014', 'Rumahan', 'Wilo', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127332', 'al_ikhlass', 'Al_Ikhlas', 'Lawareng', 'Arajang', 'Gilireng', '1980', 'Rumahan', 'Banong', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127333', 'al_sidiq', 'Al_Sidiq', 'Macccongi', 'Arajang', 'Gilireng', '2012', 'Rumahan', 'Kartini', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127334', 'al_mubaraqah', 'Al_Mubaraqah', 'Arajang', 'Arajang', 'Gilireng', '2005', 'Rumahan', 'Tapa Mustafa', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127335', 'al_kuddus', 'Al_Kuddus', 'Lamaccongi', 'Arajang', 'Gilireng', '2015', 'Rumahan', 'Hj.Intang', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127336', 'al_waqiah', 'Al_Waqiah', 'Lamaccongi', 'Arajang', 'Gilireng', '2014', 'Rumahan', 'Bakri M', 'Iqro', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127337', 'al_muttaqin', 'Al_Muttaqin', 'Arajang', 'Arajang', 'Gilireng', '2015', 'Rumahan', 'Indo Lau', 'Iqro', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127338', 'al_gaffar', 'Al_Gaffarr', 'Arajang', 'Arajang', 'Gilireng', '2015', 'Rumahan', 'Sari Banong', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127339', 'al_mumin', 'Al_Mu\'min', 'Lawareng', 'Arajang', 'Gilireng', '2014', 'Rumahan', 'Rohani', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127340', 'al_mubaraq', 'Al_Mubaraq', 'Poleonro', 'Poleonro', 'Gilireng', '1980', 'Rumahan', 'Hj.Muna', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127341', 'al_falaq', 'Al_Falaq', 'Poleonro', 'Poleonro', 'Gilireng', '1997', 'Rumahan', 'Hj.Pulisa', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127342', 'babul_jannah', 'Babul Jannah', 'Poleonro', 'Poleonro', 'Gilireng', '1997', 'Rumahan', 'Yammi', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127343', 'al_ikhlaas', 'Al_Ikhlas', 'Mamminasae', 'Mamminasae', 'Gilireng', '2010', 'Rumahan', 'Darmawati', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127344', 'An_nurn', 'An_Nur', 'Mamminasae', 'Mamminasae', 'Gilireng', '1993', 'Rumahan', 'Nurma', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127345', 'indarsiah', 'Al_Ikhlas', 'Abbatireng', 'Abbatireng', 'Gilireng', '1999', 'Rumahan', 'Indarsiah', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127346', 'maddaju', 'Al_hikmah', 'Abbatireng', 'Abbatireng', 'Gilireng', '1992', 'Rumahan', 'Maddaju', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127347', 'indo_esa', 'Al_Mu\'min', 'Abbatireng', 'Abbatireng', 'Gilireng', '2007', 'Rumahan', 'Indo Esa', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127348', 'al_ansar', 'Al_Ansar', 'Lamata', 'Lamata', 'Gilireng', '1993', 'Rumahan', 'Mas\'Ud', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127349', 'Tenri_ampa', 'Al_Ikhlas', 'Lamata', 'Lamata', 'Gilireng', '1982', 'Rumahan', 'tenri Ampa', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127350', 'siratal_mustakin', 'Siratal Mustakin', 'Lamata', 'Lamata', 'Gilireng', '1982', 'Rumahan', 'Indo Abang', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127352', 'al_inayah', 'Al_Inayah', 'Paselloreng', 'Paselloreng', 'Gilireng', '2002', 'Rumahan', 'Kare', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127353', 'al_jihad', 'Al_Jihad', 'Paselloreng', 'Paselloreng', 'Gilireng', '1987', 'Rumahan', 'Mannawiah', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127354', 'marawali', 'Al_Furqan', 'Paselloreng', 'Paselloreng', 'Gilireng', '2001', 'Rumahan', 'Marawali', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127355', 'nurhayati', 'Al_Ikhlas', 'Paselloreng', 'Paselloreng', 'Gilireng', '2007', 'Rumahan', 'Nurhayati', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127356', 'nurul_haq', 'Nurul_Haq', 'Paselloreng', 'Paselloreng', 'Gilireng', '2007', 'Rumahan', 'Salebbi', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif'),
('41127357', 'al_khaerat', 'Al_Khaerat', 'Paselloreng', 'Paselloreng', 'Gilireng', '1984', 'Rumahan', 'Tahang', 'Albagdadi', 'Pedesaan', '-', '', 0, '', 'tidakaktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_persyaratan`
--

CREATE TABLE `tb_persyaratan` (
  `kd_persyaratan` varchar(10) NOT NULL,
  `persyaratan` varchar(32) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_persyaratan`
--

INSERT INTO `tb_persyaratan` (`kd_persyaratan`, `persyaratan`, `deskripsi`) VALUES
('KP001', 'KTP', 'Upload KTP'),
('KP002', 'Ijazah Trakhir', 'Upload Ijazah Terakhir'),
('KP003', 'Profil TPA', 'Upload Profil TPA'),
('KP004', 'Surat Permohonan', 'Surat Permohonan Pendirian TPA dari Yayasan pendiri / Pendiri '),
('KP005', 'Proposal', 'Proposal Pendirian TPA'),
('KP006', 'Surat Keputusan', 'Surat Keputusan Yayasan Tentang Pendirian Penyelenggaraan TPA dan Rekomendasi dari KUA Kecamatan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `username`, `subject`, `pesan`) VALUES
(0, 'dillah', 'password dan username', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesertadidik`
--

CREATE TABLE `tb_pesertadidik` (
  `no_induk` varchar(32) NOT NULL,
  `kd_rombel` varchar(32) NOT NULL,
  `nm_pd` varchar(32) NOT NULL,
  `tmpt_lahir` varchar(32) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `nm_ayah` varchar(32) NOT NULL,
  `pekerjaan_ayah` varchar(25) NOT NULL,
  `nm_ibu` varchar(32) NOT NULL,
  `pekerjaan_ibu` varchar(25) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesertadidik`
--

INSERT INTO `tb_pesertadidik` (`no_induk`, `kd_rombel`, `nm_pd`, `tmpt_lahir`, `tgl_lahir`, `jns_kelamin`, `alamat`, `nm_ayah`, `pekerjaan_ayah`, `nm_ibu`, `pekerjaan_ibu`, `no_hp`, `tgl_masuk`) VALUES
('41127301-1-KS1001', '41127301-1', 'Muhammad Iqrima', 'Gilireng', '2009-02-11', 'L', 'Gilireng', 'Jamaluddin', 'Supir Mobil', 'Sumarni', 'Wiraswasta', '085375791861', '2019-07-01'),
('41127301-1-KS1002', '41127301-1', 'Muh. Iman', 'Gilireng', '2011-01-13', 'L', 'Gilireng', 'Nori', 'Wiraswasta', 'Tahani, S.sos', 'Pegawai Kecamatan', '', '2019-05-11'),
('41127301-1-KS1003', '41127301-1', 'Ahmad Gazali', 'Gilireng', '2011-10-10', 'L', 'Gilireng', 'Abdl. Rasyid', 'Petani', 'Santi', 'URT', '085342661309', '2019-05-10'),
('41127301-1-KS1004', '41127301-1', 'Muh.Hanafi', 'Gilireng', '2011-01-19', 'L', 'Gilireng', 'Jamaluddin', 'Supir Mobil', 'Sumarni', 'Wiraswasta', '085375791861', '2019-04-09'),
('41127301-1-KS1005', '41127301-1', 'Anis Ardillah', 'Gilireng', '2008-02-10', 'P', 'Gilireng', 'Sapriadi', 'Karyawan PLN', 'Nur Maulia', 'URT', '085298327390', '2019-04-12'),
('41127302-1-KS2002', '41127302-1', 'Irma Safira Zahra', 'Polewalie', '2009-07-11', 'P', 'Polewalie', 'Ippang', 'Petani', 'Jumarni', 'URT', '-', '2019-07-12'),
('41127302-1-KS2003', '41127302-1', 'Adrian Setiawan', 'Abbatireng', '2008-02-29', 'L', 'Abbatireng', 'Ambo Unga', 'Petani', 'Darnawati', 'URT', '-', '2019-12-13'),
('41127302-1-KS2004', '41127302-1', 'Ahmad Raski Riskullah', 'Gilireng', '2007-07-07', 'P', 'Polewalie', 'Ippang', 'Petani', 'Jumarni', 'URT', '-', '2018-12-18'),
('41127302-1-KS2005', '41127302-1', 'Sahrul Ramadhan', 'Polewalie', '2009-03-27', 'L', 'Polewalie', 'Sabang', 'Petani', 'Jumati', 'URT', '-', '2019-01-02'),
('41127303-1-KS3001', '41127303-1', 'A.Muh. Aprisal', 'Gilireng', '2009-10-18', 'L', 'Gilireng', 'Muhlis', 'Wirswasta', 'A.Tenri Abang', 'URT', '-', '2019-02-01'),
('41127303-1-KS3002', '41127303-1', 'Muh.Syahrian Wansah', 'Gilireng', '2019-01-05', 'L', 'Gilireng', 'Mansur', 'Petani', 'Nanni', 'URT', '-', '2019-01-13'),
('41127303-1-KS3003', '41127303-1', 'Besse Nova', 'Gilireng', '2009-01-05', 'P', 'Gilireng', 'Mansur', 'Petani', 'Ninni', 'URT', '-', '2019-02-02'),
('41127303-1-KS3004', '41127303-1', 'Bs.Rahmadini', 'Gilireng', '2008-09-08', 'P', 'Gilireng', 'Hendro Sucipto', 'Tukang Batu', 'Bs. Haslinda', 'URT', '-', '2019-02-12'),
('41127303-1-KS3005', '41127303-1', 'Nur Aqila', 'Gilireng', '2010-12-20', 'P', 'Gilireng', 'Muh. Saleh', 'Petani', 'Hasnawati', 'URT', '081242558808', '2019-02-12'),
('41127303-1-KS3006', '41127303-1', 'Nurul Mibahul Jannah', 'Gilireng', '2010-12-20', 'P', 'Gilireng', 'Tajmuddin Nasis', 'Wirswasta', 'Rismawaati', 'URT', '081242558808', '2019-02-12'),
('41127303-1-KS3007', '41127303-1', 'Melsi Johar', 'Gilireng', '2010-02-21', 'P', 'Gilireng', 'Irwan Darwis', 'Mencukur', 'Siti HAdrah', 'URT', '-', '2019-02-11'),
('41127304-1-KS4001', '41127304-1', 'Bs. Amaliah Salsabilah', 'Gilireng', '2008-03-20', 'P', 'Gilireng', 'Abdul Rohab', 'Wirswasta', 'Bs. Tenri Sau', 'URT', '-', '2019-01-13'),
('41127304-1-KS4002', '41127304-1', 'A.Ainun Jufra', 'Sengkang', '2011-03-11', 'P', 'Gilireng', 'Muh.Jufri', 'Guru', 'A.Herawati', 'Menjual', '-', '2019-02-10'),
('41127304-1-KS4003', '41127304-1', 'Hidayah', 'Lamata', '2010-11-14', 'L', 'Gilireng', 'Baharuddin', 'Petani', 'Fatmawati', 'URT', '-', '2019-03-12'),
('41127305-1-KS5001', '41127305-1', 'Fitri Ramadani', 'Lamata', '2010-12-11', 'P', 'Lamata', 'Semma', 'Petani', 'Semma', 'URT', '-', '2019-09-11'),
('41127305-1-KS5002', '41127305-1', 'Nurfaikah', 'Sengkang', '2008-12-11', 'P', 'Lamata', 'Ridwan', 'Wirswasta', 'Nurtang', 'URT', '-', '2019-03-12'),
('41127305-1-KS5003', '41127305-1', 'Muh..Andika Harun', 'Lamata', '2008-12-11', 'L', 'Lamata', 'Alwis Idris', 'Petani', 'Ernawati', 'Wiraswasta', '085388881212', '2019-03-08'),
('41127305-1-KS5004', '41127305-1', 'Muh. Syahril', 'Sengkang', '2008-01-10', 'L', 'Lamata', 'Saharuddin', 'Wiraswasta', 'Dalauleng', 'Guru', '-', '2019-03-17'),
('41127306-1-KS6002', '41127306-1', 'Putri', 'Lamata', '2008-02-08', 'P', 'Lamata', 'Menson', 'Petani', 'Musdalifah', 'URT', '-', '2009-10-04'),
('41127307-1-KS7001', '41127307-1', 'Alif', 'Bekkae', '2008-11-10', 'L', 'Paselloreng', 'Asdar', 'Petani', 'Ika', 'URT', '-', '2019-10-08'),
('41127308-1-KS8001', '41127308-1', 'Fitriani', 'Paselloreng', '2009-09-12', 'P', 'Paselloreng', 'Palallo', 'Petani', 'Ani', 'URT', '-', '2019-10-05'),
('41127309-1-KS9001', '41127309-1', 'Nur Anisa', 'Doddi', '2010-06-15', 'P', 'Mamminasae', 'Saenal', 'Petani', 'Isa Sari', 'URT', '085240754909', '2018-09-13'),
('41127310-1-KS1001', '41127310-1', 'Ardiansyah', 'Sengkang', '2009-05-24', 'L', 'Mamminasae', 'Bakri', 'Petani', 'Marwah', 'URT', '082354042483', '2008-02-10'),
('41127312-1-KS1201', '41127312-1', 'Sumarni', 'Polewalie', '2011-07-11', 'P', 'Polewalie', 'Lodding', 'Petani', 'Ijuse', 'URT', '085242945055', '2019-11-03'),
('41127313-1-KS1301', '41127313-1', 'Khalik', 'Gilireng', '2010-04-12', 'L', 'Polewalie', 'Lagu', 'Petani', 'Norma', 'URT', '-', '2019-11-02'),
('41127314-1-KS1401', '41127314-1', 'Idar', 'Alausalo', '2007-12-12', 'P', 'Alausalo', 'Hantong', 'Petani', 'Jusnawati', 'URT', '-', '2019-09-13'),
('41127315-1-KS1501', '41127315-1', 'Suardi', 'Paleko', '2010-01-09', 'P', 'Alausalo', 'Ambo Lala', 'Petani', 'Suarti', 'URT', '-', '2019-04-23'),
('41127316-1-KS1601', '41127316-1', 'Irmalasari', 'Poleonro', '2011-10-16', 'P', 'Poleonro', 'Nasri', 'Petani', 'Nassi', 'URT', '-', '2019-03-12'),
('41127317-1-KS1701', '41127317-1', 'St.Hajrah', 'Anabanua', '2010-01-12', 'P', 'Poleonro', 'Baso', 'Wirswasta', 'Hadijah', 'URT', '082347268780', '2019-10-12'),
('41127318-1-KS1801', '41127318-1', 'Mifta', 'Samarinda', '2009-11-10', 'P', 'Abbatireng', 'Muh.Husni', 'Karyawan', 'Nurwahidah', 'URT', '-', '2019-09-20'),
('41127319-1-KS1901', '41127319-1', 'Suci Anugrah', 'Abbatireng', '2010-07-28', 'P', 'Abbatireng', 'Agussalim', 'Wirswasta', 'Putri', 'URT', '-', '2019-06-04'),
('41127320-1-KS2001', '41127320-1', 'Ilyas', 'Sengkang', '2011-02-01', 'L', 'Arajang', 'Landise', 'Petani', 'Murni', 'URT', '-', '2019-07-06'),
('41127321-1-KS2101', '41127321-1', 'Anggun  Setia Putri', 'Gilireng', '2010-01-18', 'P', 'Gilireng', 'Kandi', 'Petani', 'Banong', 'URT', '-', '2019-04-13'),
('41127321-1-KS2102', '41127321-1', 'Sri Devi Wardana', 'Sengkang', '2009-05-11', 'P', 'Arajang', 'Muhlis', 'Petani', 'Rohani', 'URT', '-', '2019-02-03'),
('41127322-1-KS2201', '41127322-1', 'Muhammad Khaikal', 'Gilireng', '2010-02-12', 'L', 'Arajang', 'Baharuddin', 'Petani', 'Gusnawati', 'URT', '-', '2019-05-01'),
('1-1-KS001', '1-1', 'Musdalifah', 'Gilireng', '2020-04-16', 'P', 'Arajang', 'Ambo Unga', 'Petani', 'A.Endang', 'URT', '082354042483', '2020-04-17'),
('41127301-1-KS1006', '41127301-1', 'Muh.Pian', 'Palopo', '2011-01-11', 'L', 'Gilireng', 'Sapriadi', 'Karyawan PLN', 'Nur Maulia', 'URT', '085298327390', '2019-07-13'),
('41127303-1-KS3008', '41127303-1', 'Nurfadillah', 'Gilireng', '2008-08-27', 'P', 'Gilireng', 'Hendro Sucipto', 'Petani', 'Nur Aini', 'URT', '-', '2019-03-01'),
('41127303-1-KS3009', '41127303-1', 'Bs. Sulfa Aprilia', 'Pangkajenne', '2009-08-09', 'P', 'Gilireng', 'Sayarifuddin', 'Petani', 'Bs. Ikawati', 'URT', '-', '2019-02-15'),
('41127305-1-KS5005', '41127305-1', 'Ariel Putra Pratama', 'Lamata', '2009-09-08', 'P', 'Lamata', 'Yogi Imus', 'Wiraswasta', 'Agustima', 'Wiraswasta', '-', '2019-03-02'),
('41127305-1-KS5006', '41127305-1', 'Nelli Syarianti', 'Lamata', '2009-09-08', 'P', 'Lamata', 'Mino', 'Petani', 'Tenri', 'URT', '-', '2019-04-12'),
('41127305-1-KS5007', '41127305-1', 'Yaya', 'Samarinda', '2008-06-10', 'L', 'Lamata', 'Bindong', 'Petani', 'Canning', 'URT', '-', '2019-09-02'),
('41127305-1-KS5008', '41127305-1', 'Herman', 'Lakadaong', '2010-02-19', 'L', 'Lamata', 'Tarwin', 'Wiraswasta', 'Bani', 'Wiraswasta', '-', '2019-03-08'),
('41127305-1-KS5009', '41127305-1', 'Wahyu', 'Parepare', '2008-03-11', 'L', 'Lamata', 'Cannong', 'Petani', 'Lina', 'URT', '-', '2019-02-12'),
('41127305-1-KS5010', '41127305-1', 'Aldi', 'Lamata', '2009-12-20', 'L', 'Lamata', 'Ahmad', 'Pegawai', 'Wana', 'Pegawai', '-', '2019-02-15'),
('41127306-1-KS6003', '41127306-1', 'Saldi', 'Sengkang', '2009-12-27', 'L', 'Lamata', 'Marda', 'Petani', 'Ima', 'URT', '-', '2019-02-18'),
('41127306-1-KS6004', '41127306-1', 'Nurul Armawiah', 'Anabanua', '2008-11-10', 'P', 'Lamata', 'Darwis', 'Petani', 'Ida', 'URT', '-', '2019-06-19'),
('41127307-1-KS7002', '41127307-1', 'A. Girhang Al_Fahru', 'Paselloreng', '2009-08-12', 'L', 'Paselloreng', 'A. Asman', 'Pegawai', 'Sunarti', 'Guru', '-', '2019-05-11'),
('41127307-1-KS7003', '41127307-1', 'Ahmad Fadil', 'Paselloreng', '2010-01-02', 'L', 'Paselloreng', 'Masri', 'Petani', 'Muspida', 'URT', '-', '2019-07-01'),
('41127307-1-KS7004', '41127307-1', 'Farel Saputra', 'Sidrap', '2010-10-02', 'L', 'Paselloreng', 'Muhammad Fikran ', 'Wiraswasta', 'Susi', 'Wiraswasta', '-', '2019-07-04'),
('41127308-1-KS8002', '41127308-1', 'Awal', 'Paselloreng', '2011-09-11', 'L', 'Paselloreng', 'Adi', 'Petani', 'Sengngeng', 'URT', '-', '2019-06-21'),
('41127308-1-KS8003', '41127308-1', 'Fauzan', 'Paselloreng', '2011-08-09', 'L', 'Paselloreng', 'Firdaus', 'Wiraswasta', 'Dode', 'Guru', '-', '2019-08-02'),
('41127308-1-KS8004', '41127308-1', 'Reo', 'Gilireng', '2011-08-07', 'L', 'Paselloreng', 'Jodi', 'Petani', 'Mega', 'URT', '-', '2019-06-24'),
('41127308-1-KS8005', '41127308-1', 'Muh. Diki Urbaningrum Mursalim', 'Paselloreng', '2010-01-06', 'L', 'Paselloreng', 'Mursalim', 'Wiraswasta', 'Ratnawati', 'URT', '-', '2019-07-16'),
('41127309-1-KS9002', '41127309-1', 'Anjas  Novebriansyah', 'Sakkoli', '2008-05-29', 'L', 'Doddi', 'Maselomo', 'Petani', 'Hajirwati', 'URT', '-', '2019-09-14'),
('41127309-1-KS9003', '41127309-1', 'Amita regina Putri', 'Sakkoli', '2010-01-05', 'P', 'Sakkoli', 'Mursiding', 'Petani', 'Indo Uleng', 'URT', '-', '2019-09-13'),
('41127310-1-KS10001', '41127310-1', 'Safirua Syahrezki', 'Laputeng', '2008-04-19', 'P', 'Laputeng', 'Ambo Upe', 'Petani', 'Jusnawati', 'URT', '-', '2019-02-02'),
('41127310-1-KS10003', '41127310-1', 'Ashila Naila Salsabilah', 'Laputeng', '2008-12-11', 'P', 'Laputeng', 'H.Ambo Intang', 'Petani', 'Hj.Mujahidah', 'URT', '-', '2019-05-06'),
('41127310-1-KS10005', '41127310-1', 'Firda Riani Ramdana', 'Doddi', '2008-11-20', 'P', 'Doddi', 'Abdul Kadir', 'Petani', 'Suhana', 'URT', '081242083011', '2019-01-09'),
('41127311-1-KS1102', '41127311-1', 'Sulkhaeril Husada', 'Sengkang', '2009-10-01', 'L', 'Laputeng', 'Sultan', 'Petani', 'Gusnawati', 'URT', '-', '2019-01-17'),
('41127311-1-KS1101', '41127311-1', 'Muhammad Rizal S.', 'Laputeng', '2010-01-04', 'L', 'Laputeng', 'syamsuddin', 'Petani', 'Nurdarlina', 'URT', '-', '2019-01-12'),
('41127311-1-KS1101', '41127311-1', 'Muhammad Rizal S.', 'Laputeng', '2010-01-04', 'L', 'Laputeng', 'syamsuddin', 'Petani', 'Nurdarlina', 'URT', '-', '2019-01-12'),
('41127312-1-KS1202', '41127312-1', 'Muh. Rezki', 'Polewalie', '2010-02-08', 'P', 'Polewalie', 'Rase', 'Petani', 'Mudda', 'Pegawai Kecamatan', '-', '2019-09-15'),
('41127312-1-KS1203', '41127312-1', 'Bs. Nidar', 'Polewalie', '2019-07-13', 'P', 'Polewalie', 'Gau', 'Supir Mobil', 'Gusnawati', 'URT', '-', '2019-08-24'),
('41127312-1-KS1204', '41127312-1', 'andi Faizal', 'Gilireng', '2019-10-10', 'L', 'Polewalie', 'A.anngoro', 'Almr.', 'A.Tenri Dio', 'Kepala UPTD  ', '-', '2019-11-21'),
('41127312-1-KS1205', '41127312-1', 'Ibnu Fajar', 'Sengkang', '2009-01-07', 'L', 'polewalie', 'Mamang', 'Petani', 'Mudara', 'Pegawai Pertanian', '-', '2019-08-30'),
('41127312-1-KS1206', '41127312-1', 'Eka  Purwanti', 'Gilireng', '2010-10-29', 'P', 'Polewalie', 'Jusman', 'Wiraswasta', 'Madriana', 'URT', '-', '2019-08-19'),
('41127312-1-KS1207', '41127312-1', 'Hikmah Sulyana', 'Polewalie', '2009-12-28', 'P', 'Polewalie', 'Sulihing', 'Wiraswasta', 'Muliana, S.Pd', 'Guru PAud', '-', '2019-07-29'),
('41127313-1-KS1303', '41127313-1', 'Indo MAsse', 'Gilireng', '2009-05-11', 'P', 'Polewalie', 'Tuo', 'Petani', 'Cambolong', 'URT', '-', '2018-12-28'),
('41127313-1-KS1304', '41127313-1', 'Suci', 'Gilireng', '2009-06-13', 'P', 'polewalie', 'Tullah', 'Petani', 'ila', 'URT', '-', '2019-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_regguru`
--

CREATE TABLE `tb_regguru` (
  `username` varchar(15) NOT NULL,
  `password` char(32) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jk` char(1) NOT NULL,
  `tmpt_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `no_hp` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_regguru`
--

INSERT INTO `tb_regguru` (`username`, `password`, `nik`, `nama`, `jk`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `pendidikan`, `no_hp`) VALUES
('dillah', 'f3458da60def875694f5921ebcea5f92', 'KD002', 'dillah', 'P', 'Gilireng', '1995-07-13', 'Jl.Poros Paselloreng', 'S1', '085256081601'),
('puput', 'f95c24c42b0f2ea683727cc47cde3ad2', 'KD002', 'puput', 'P', 'Soppeng', '1997-10-16', 'Soppeng', 'S1', '085237323971'),
('puput', 'f95c24c42b0f2ea683727cc47cde3ad2', 'KG001', 'puput', 'P', 'Wajo', '2020-03-20', 'Gilireng', 'S1', '085256081601'),
('nurfadillah', '64bddb24a1f9133a6962c4853a4b5699', 'KP0011', 'dilla', 'P', 'Gilireng', '1994-07-13', 'Gilireng', 'S1', '085256081601');

-- --------------------------------------------------------

--
-- Table structure for table `tb_registrasi`
--

CREATE TABLE `tb_registrasi` (
  `id_registrasi` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `kd_persyaratan` varchar(10) NOT NULL,
  `berkas` varchar(300) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`id_registrasi`, `username`, `kd_persyaratan`, `berkas`, `status`) VALUES
(0, 'dillah', 'KP001', 'dillah_KP001_14-01-2020-11-20-37.pdf', 'approved'),
(0, 'dillah', 'KP002', 'dillah_KP002_14-01-2020-11-20-49.pdf', 'approved'),
(0, 'dillah', 'KP004', 'dillah_KP004_14-01-2020-11-22-36.pdf', 'approved'),
(0, 'dillah', 'KP005', 'dillah_KP005_14-01-2020-11-22-52.pdf', 'approved'),
(0, 'dillah', 'KP006', 'dillah_KP006_14-01-2020-11-23-05.pdf', 'approved'),
(0, 'puput', 'KP001', 'puput_KP001_17-01-2020-10-10-17.pdf', 'approved'),
(0, 'nurfadillah', 'KP001', 'nurfadillah_KP001_25-03-2020-06-44-02.pdf', 'approved'),
(0, 'nurfadillah', 'KP002', 'nurfadillah_KP002_25-03-2020-06-44-46.pdf', 'approved'),
(0, 'nurfadillah', 'KP003', 'nurfadillah_KP003_25-03-2020-06-45-11.pdf', 'approved'),
(0, 'nurfadillah', 'KP004', 'nurfadillah_KP004_25-03-2020-06-46-00.pdf', 'approved'),
(0, 'nurfadillah', 'KP005', 'nurfadillah_KP005_25-03-2020-06-46-11.pdf', 'approved'),
(0, 'nurfadillah', 'KP006', 'nurfadillah_KP006_25-03-2020-06-46-25.pdf', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rombel`
--

CREATE TABLE `tb_rombel` (
  `kd_rombel` varchar(32) NOT NULL,
  `kd_lembaga` varchar(8) NOT NULL,
  `nm_rombel` varchar(32) NOT NULL,
  `nik` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rombel`
--

INSERT INTO `tb_rombel` (`kd_rombel`, `kd_lembaga`, `nm_rombel`, `nik`) VALUES
('41127303-1', '41127303', 'Al_Ijtihad', 'KG003'),
('41127301-1', '41127301', 'Al_Hikmah', 'KG001'),
('41127304-1', '41127304', 'Al_Barqiya', 'KG004'),
('41127302-1', '41127302', 'Al_Hidayat', 'KG002'),
('41127305-1', '41127305', 'Syuhada', 'KG005'),
('41127306-1', '41127306', 'Al_Iqro', 'KG006'),
('41127307-1', '41127307', 'Al_Muhajirin', 'KG007'),
('41127308-1', '41127308', 'Al_Ikhsan', 'KG008'),
('41127309-1', '41127309', 'Jabal Nur', 'KG009'),
('41127310-1', '41127310', 'al_mujahidir', 'KG010'),
('41127311-1', '41127311', 'At_Taqwa', 'KG011'),
('41127312-1', '41127312', 'An_Nur', 'KG012'),
('41127313-1', '41127313', 'Al_araf', 'KG013'),
('41127314-1', '41127314', 'Al_Furqon', 'KG014'),
('41127315-1', '41127315', 'Al_amin', 'KG015'),
('41127316-1', '41127316', 'Babul_Khoiro', 'KG016'),
('41127317-1', '41127317', 'Al_Iklas', 'KG017'),
('41127318-1', '41127318', 'Babussalam', 'KG018'),
('41127319-1', '41127319', 'cahaya', 'KG019'),
('41127320-1', '41127320', 'Al_khusyu', 'KG020'),
('41127321-1', '41127321', 'Ar_Rahman', 'KG021'),
('41127322-1', '41127322', 'Al_salam', 'KG022'),
('1-1', '1', 'iqro', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sumbanganmurid`
--

CREATE TABLE `tb_sumbanganmurid` (
  `no_sumbangan` int(11) NOT NULL,
  `kd_lembaga` varchar(8) NOT NULL,
  `no_induk` varchar(32) NOT NULL,
  `jml_sumbangan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `sumber` varchar(32) NOT NULL DEFAULT 'murid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sumbanganmurid`
--

INSERT INTO `tb_sumbanganmurid` (`no_sumbangan`, `kd_lembaga`, `no_induk`, `jml_sumbangan`, `tanggal`, `sumber`) VALUES
(1, '1', '1-1-KS001', 20000, '2020-04-08', 'murid'),
(2, '41127301', '41127301-1-KS1001', 2000, '2019-05-03', 'murid'),
(3, '41127301', '41127301-1-KS1003', 5000, '2019-06-04', 'murid'),
(4, '41127302', '41127302-1-KS2002', 50000, '2020-04-10', 'murid'),
(5, '41127302', '41127302-1-KS2005', 30000, '2020-04-11', 'murid'),
(6, '41127302', '41127302-1-KS2003', 50000, '2020-04-11', 'murid'),
(7, '41127301', '41127301-1-KS1002', 5000, '2019-06-04', 'murid'),
(8, '1', '1-1-KS001', 5000, '2020-04-03', 'murid'),
(9, '41127309', '41127309-1-KS9001', 20000, '2019-01-01', 'murid'),
(10, '41127309', '41127309-1-KS9002', 20000, '2019-09-02', 'murid'),
(11, '41127309', '41127309-1-KS9003', 20000, '2019-10-02', 'murid'),
(12, '41127309', '41127309-1-KS9002', 20000, '2019-10-02', 'murid'),
(13, '41127311', '41127311-1-KS1101', 20000, '2019-03-23', 'murid'),
(14, '41127311', '41127311-1-KS1101', 20000, '2019-04-02', 'murid'),
(15, '41127311', '41127311-1-KS1102', 20000, '2019-02-01', 'murid'),
(16, '41127311', '41127311-1-KS1102', 20000, '2019-03-01', 'murid'),
(17, '41127311', '41127311-1-KS1102', 20000, '2019-04-02', 'murid'),
(18, '41127302', 'KS2001', 200000, '2020-06-03', 'alumni'),
(19, '41127302', 'KS2006', 1000000, '2020-06-03', 'alumni'),
(20, '41127302', 'KS2007', 1000000, '2020-06-03', 'alumni'),
(21, '41127302', 'KS2006', 200000, '2020-06-03', 'alumni'),
(22, '41127302', 'KS2001', 200000, '2020-06-03', 'alumni'),
(23, '1', 'KS002', 20000, '2020-06-18', 'alumni');

-- --------------------------------------------------------

--
-- Table structure for table `tb_userguru`
--

CREATE TABLE `tb_userguru` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_userguru`
--

INSERT INTO `tb_userguru` (`username`, `password`) VALUES
('ANNUR', 'ANNUR'),
('al_hikmah', 'al_hikmah'),
('al_hidayat', 'al_hidayat'),
('al_ijtihad', 'al_ijtihad'),
('al_barqiya', 'al_barqiya'),
('syuhada', 'syuhada'),
('al_iqro', 'al_iqro'),
('al_muhajirin', 'al_muhajirin'),
('al_ikhsan', 'al_ikhsan'),
('jabal_nur', 'jabal_nur'),
('al_mujahidir', 'al_mujahidir'),
('at_taqwa', 'at_taqwa'),
('an_nur', 'an_nur'),
('al_araf', 'al_araf'),
('al_furqon', 'al_furqon'),
('al_amin', 'al_amin'),
('babul_khoiro', 'babul_khoiro'),
('al_ikhlas', 'al_ikhlas'),
('babussalam', 'babussalam'),
('cahaya', 'cahaya'),
('al_khusyu', 'al_khusyu'),
('ar_rahman', 'ar_rahman'),
('al_salam', 'al_salam'),
('nurfadillah', 'nurfadillah'),
('puput', 'puput'),
('al_amin', 'al_amin'),
('al_falaq', 'al_falaq'),
('an_nur', 'an_nur'),
('al_furqan', 'al_furqan'),
('miftahul', 'miftahul'),
('al_aamiin', 'al_aamiin'),
('al_hikmahh', 'al_hikmahh'),
('al_muhaimin', 'al_muhaimin'),
('ANNUR', 'annu'),
('annu', 'annu'),
('al_ikhlass', 'al_ikhlass'),
('al_sidiq', 'al_sidiq'),
('al_mubaraqah', 'al_mubaraqah'),
('al_kuddus', 'al_kuddus'),
('al_waqiah', 'al_waqiah'),
('al_muttaqin', 'al_muttaqin'),
('al_gaffar', 'al_gaffar'),
('al_mumin', 'al_mumin'),
('al_mumin', 'al_mumin'),
('al_mubaraq', 'al_mubaraq'),
('al_falaq', 'al_falaq'),
('babul_jannah', 'babul_jannah'),
('al_ikhlaas', 'al_ikhlaas'),
('An_nurn', 'An_nurn'),
('indarsiah', 'indarsiah'),
('maddaju', 'maddaju'),
('indo_esa', 'indo_esa'),
('al_ansar', 'al_ansar'),
('Tenri_ampa', 'Tenri_ampa'),
('siratal_mustakin', 'siratal_mustakin'),
('al_jannah', 'al_jannah'),
('al_inayah', 'al_inayah'),
('al_jihad', 'al_jihad'),
('marawali', 'marawali'),
('nurhayati', 'nurhayati'),
('nurul_haq', 'nurul_haq'),
('al_khaerat', 'al_khaerat');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_alumni`
-- (See below for the actual view)
--
CREATE TABLE `view_alumni` (
`kd_lembaga` varchar(8)
,`nm_lembaga` varchar(32)
,`nm_pd` varchar(35)
,`tmpt_lahir` varchar(15)
,`tgl_lahir` int(2)
,`bln_lahir` int(2)
,`thn_lahir` int(4)
,`nm_ayah` varchar(32)
,`nm_ibu` varchar(32)
,`alamat` varchar(35)
,`tgl_keluar` int(2)
,`bln_keluar` int(2)
,`thn_keluar` int(4)
,`tahun` int(4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_donatur`
-- (See below for the actual view)
--
CREATE TABLE `view_donatur` (
`id_donatur` varchar(8)
,`nm_donatur` varchar(32)
,`kd_lembaga` varchar(8)
,`nm_lembaga` varchar(32)
,`tgl_donasi` int(2)
,`bln_donasi` int(2)
,`thn_donasi` int(4)
,`fisik` varchar(15)
,`jml_donasifisik` int(11)
,`non_fisik` varchar(15)
,`jml_donasinonfisik` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_guru`
-- (See below for the actual view)
--
CREATE TABLE `view_guru` (
`nik` varchar(16)
,`kd_lembaga` varchar(8)
,`nm_lembaga` varchar(32)
,`nm_guru` varchar(32)
,`tmpt_lahir` varchar(32)
,`tgllahir_guru` date
,`jns_kelamin` varchar(10)
,`alamat` varchar(35)
,`pendidikan` varchar(5)
,`profesi_lain` varchar(25)
,`no_hp` varchar(12)
,`tmt_mengajar` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pd`
-- (See below for the actual view)
--
CREATE TABLE `view_pd` (
`kd_lembaga` varchar(8)
,`nm_lembaga` varchar(32)
,`kd_rombel` varchar(32)
,`nm_rombel` varchar(32)
,`no_induk` varchar(32)
,`nm_pd` varchar(32)
,`tmpt_lahir` varchar(32)
,`tgl_lahir` date
,`jns_kelamin` varchar(10)
,`alamat` varchar(35)
,`nm_ayah` varchar(32)
,`pekerjaan_ayah` varchar(25)
,`nm_ibu` varchar(32)
,`pekerjaan_ibu` varchar(25)
,`no_hp` varchar(12)
,`tgl_masuk` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_rombel`
-- (See below for the actual view)
--
CREATE TABLE `view_rombel` (
`kd_lembaga` varchar(8)
,`kd_rombel` varchar(32)
,`nm_rombel` varchar(32)
,`nik` varchar(16)
,`nm_guru` varchar(32)
,`nm_lembaga` varchar(32)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_sumbangan`
-- (See below for the actual view)
--
CREATE TABLE `view_sumbangan` (
`kd_lembaga` varchar(8)
,`username` varchar(32)
,`nm_lembaga` varchar(32)
,`no_sumbangan` int(11)
,`jml_sumbangan` int(11)
,`no_induk` varchar(32)
,`sumber` varchar(32)
,`nm_pd` varchar(35)
,`tanggal` bigint(20)
,`bulan` bigint(20)
,`tahun` bigint(20)
);

-- --------------------------------------------------------

--
-- Structure for view `view_alumni`
--
DROP TABLE IF EXISTS `view_alumni`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `view_alumni`  AS  select `tb_lembaga`.`kd_lembaga` AS `kd_lembaga`,`tb_lembaga`.`nm_lembaga` AS `nm_lembaga`,`tb_alumni`.`nm_pd` AS `nm_pd`,`tb_alumni`.`tmpt_lahir` AS `tmpt_lahir`,dayofmonth(`tb_alumni`.`tgl_lahir`) AS `tgl_lahir`,month(`tb_alumni`.`tgl_lahir`) AS `bln_lahir`,year(`tb_alumni`.`tgl_lahir`) AS `thn_lahir`,`tb_alumni`.`nm_ayah` AS `nm_ayah`,`tb_alumni`.`nm_ibu` AS `nm_ibu`,`tb_alumni`.`alamat` AS `alamat`,dayofmonth(`tb_alumni`.`tgl_keluar`) AS `tgl_keluar`,month(`tb_alumni`.`tgl_keluar`) AS `bln_keluar`,year(`tb_alumni`.`tgl_keluar`) AS `thn_keluar`,year(`tb_alumni`.`tgl_keluar`) AS `tahun` from (`tb_lembaga` join `tb_alumni` on((`tb_lembaga`.`kd_lembaga` = `tb_alumni`.`kd_lembaga`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_donatur`
--
DROP TABLE IF EXISTS `view_donatur`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `view_donatur`  AS  select `tb_donatur`.`id_donatur` AS `id_donatur`,`tb_donatur`.`nm_donatur` AS `nm_donatur`,`tb_lembaga`.`kd_lembaga` AS `kd_lembaga`,`tb_lembaga`.`nm_lembaga` AS `nm_lembaga`,dayofmonth(`tb_donasi`.`tgl_donasi`) AS `tgl_donasi`,month(`tb_donasi`.`tgl_donasi`) AS `bln_donasi`,year(`tb_donasi`.`tgl_donasi`) AS `thn_donasi`,`tb_donasi`.`fisik` AS `fisik`,`tb_donasi`.`jml_donasifisik` AS `jml_donasifisik`,`tb_donasi`.`non_fisik` AS `non_fisik`,`tb_donasi`.`jml_donasinonfisik` AS `jml_donasinonfisik` from ((`tb_donatur` join `tb_donasi` on((`tb_donatur`.`id_donatur` = `tb_donasi`.`id_donatur`))) join `tb_lembaga` on((`tb_lembaga`.`kd_lembaga` = `tb_donasi`.`kd_lembaga`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_guru`
--
DROP TABLE IF EXISTS `view_guru`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `view_guru`  AS  select `tb_guru`.`nik` AS `nik`,`tb_guru`.`kd_lembaga` AS `kd_lembaga`,`tb_lembaga`.`nm_lembaga` AS `nm_lembaga`,`tb_guru`.`nm_guru` AS `nm_guru`,`tb_guru`.`tmpt_lahir` AS `tmpt_lahir`,`tb_guru`.`tgllahir_guru` AS `tgllahir_guru`,`tb_guru`.`jns_kelamin` AS `jns_kelamin`,`tb_guru`.`alamat` AS `alamat`,`tb_guru`.`pendidikan` AS `pendidikan`,`tb_guru`.`profesi_lain` AS `profesi_lain`,`tb_guru`.`no_hp` AS `no_hp`,`tb_guru`.`tmt_mengajar` AS `tmt_mengajar` from (`tb_lembaga` join `tb_guru` on((`tb_guru`.`kd_lembaga` = `tb_lembaga`.`kd_lembaga`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_pd`
--
DROP TABLE IF EXISTS `view_pd`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `view_pd`  AS  select `tb_lembaga`.`kd_lembaga` AS `kd_lembaga`,`tb_lembaga`.`nm_lembaga` AS `nm_lembaga`,`tb_rombel`.`kd_rombel` AS `kd_rombel`,`tb_rombel`.`nm_rombel` AS `nm_rombel`,`tb_pesertadidik`.`no_induk` AS `no_induk`,`tb_pesertadidik`.`nm_pd` AS `nm_pd`,`tb_pesertadidik`.`tmpt_lahir` AS `tmpt_lahir`,`tb_pesertadidik`.`tgl_lahir` AS `tgl_lahir`,`tb_pesertadidik`.`jns_kelamin` AS `jns_kelamin`,`tb_pesertadidik`.`alamat` AS `alamat`,`tb_pesertadidik`.`nm_ayah` AS `nm_ayah`,`tb_pesertadidik`.`pekerjaan_ayah` AS `pekerjaan_ayah`,`tb_pesertadidik`.`nm_ibu` AS `nm_ibu`,`tb_pesertadidik`.`pekerjaan_ibu` AS `pekerjaan_ibu`,`tb_pesertadidik`.`no_hp` AS `no_hp`,`tb_pesertadidik`.`tgl_masuk` AS `tgl_masuk` from ((`tb_pesertadidik` join `tb_rombel` on((`tb_pesertadidik`.`kd_rombel` = `tb_rombel`.`kd_rombel`))) join `tb_lembaga` on((`tb_rombel`.`kd_lembaga` = `tb_lembaga`.`kd_lembaga`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_rombel`
--
DROP TABLE IF EXISTS `view_rombel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `view_rombel`  AS  select `tb_lembaga`.`kd_lembaga` AS `kd_lembaga`,`tb_rombel`.`kd_rombel` AS `kd_rombel`,`tb_rombel`.`nm_rombel` AS `nm_rombel`,`tb_guru`.`nik` AS `nik`,`tb_guru`.`nm_guru` AS `nm_guru`,`tb_lembaga`.`nm_lembaga` AS `nm_lembaga` from ((`tb_lembaga` join `tb_rombel` on((`tb_lembaga`.`kd_lembaga` = `tb_rombel`.`kd_lembaga`))) join `tb_guru` on((`tb_rombel`.`nik` = `tb_guru`.`nik`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_sumbangan`
--
DROP TABLE IF EXISTS `view_sumbangan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `view_sumbangan`  AS  select `tb_lembaga`.`kd_lembaga` AS `kd_lembaga`,`tb_lembaga`.`username` AS `username`,`tb_lembaga`.`nm_lembaga` AS `nm_lembaga`,`tb_sumbanganmurid`.`no_sumbangan` AS `no_sumbangan`,`tb_sumbanganmurid`.`jml_sumbangan` AS `jml_sumbangan`,`tb_sumbanganmurid`.`no_induk` AS `no_induk`,`tb_sumbanganmurid`.`sumber` AS `sumber`,`tb_pesertadidik`.`nm_pd` AS `nm_pd`,dayofmonth(`tb_sumbanganmurid`.`tanggal`) AS `tanggal`,month(`tb_sumbanganmurid`.`tanggal`) AS `bulan`,year(`tb_sumbanganmurid`.`tanggal`) AS `tahun` from ((`tb_lembaga` join `tb_sumbanganmurid` on((`tb_lembaga`.`kd_lembaga` = `tb_sumbanganmurid`.`kd_lembaga`))) join `tb_pesertadidik` on((`tb_pesertadidik`.`no_induk` = `tb_sumbanganmurid`.`no_induk`))) union select `tb_lembaga`.`kd_lembaga` AS `kd_lembaga`,`tb_lembaga`.`username` AS `username`,`tb_lembaga`.`nm_lembaga` AS `nm_lembaga`,`tb_sumbanganmurid`.`no_sumbangan` AS `no_sumbangan`,`tb_sumbanganmurid`.`jml_sumbangan` AS `jml_sumbangan`,`tb_sumbanganmurid`.`no_induk` AS `no_induk`,`tb_sumbanganmurid`.`sumber` AS `sumber`,`tb_alumni`.`nm_pd` AS `nm_pd`,dayofmonth(`tb_sumbanganmurid`.`tanggal`) AS `tanggal`,month(`tb_sumbanganmurid`.`tanggal`) AS `bulan`,year(`tb_sumbanganmurid`.`tanggal`) AS `tahun` from ((`tb_lembaga` join `tb_sumbanganmurid` on((`tb_lembaga`.`kd_lembaga` = `tb_sumbanganmurid`.`kd_lembaga`))) join `tb_alumni` on((`tb_alumni`.`no_induk` = `tb_sumbanganmurid`.`no_induk`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  ADD PRIMARY KEY (`id_keterangan`);

--
-- Indexes for table `tb_sumbanganmurid`
--
ALTER TABLE `tb_sumbanganmurid`
  ADD PRIMARY KEY (`no_sumbangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  MODIFY `id_keterangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_sumbanganmurid`
--
ALTER TABLE `tb_sumbanganmurid`
  MODIFY `no_sumbangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
