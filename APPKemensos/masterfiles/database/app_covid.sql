-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Agu 2022 pada 06.35
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `app_covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`id_siswa` int(11) NOT NULL,
  `siswa_nama` varchar(70) NOT NULL,
  `nik` varchar(70) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `siswa_alamat` text NOT NULL,
  `siswa_foto` text NOT NULL,
  `nokk` varchar(255) NOT NULL,
  `umur` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kabkota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `keldesa` varchar(30) NOT NULL,
  `rt` varchar(30) NOT NULL,
  `rw` varchar(30) NOT NULL,
  `penghasilansebelum` varchar(100) NOT NULL,
  `penghasilansetelah` varchar(100) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `lainnya` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `siswa_nama`, `nik`, `jk`, `siswa_alamat`, `siswa_foto`, `nokk`, `umur`, `provinsi`, `kabkota`, `kecamatan`, `keldesa`, `rt`, `rw`, `penghasilansebelum`, `penghasilansetelah`, `alasan`, `lainnya`) VALUES
(3, 'feri', '1234', 'Laki - Laki', 'rere', '8af3758e47c01ce58f78b8c533656b9b-0001.jpg', '333', '34', 'sumsel', 'banyuasin', 'alang', 'jaya raya', '12', '14', '2222222', '2222222', ' Kehilangan pekerjaan', ''),
(4, 'budi', '123', 'Laki - Laki', 'rwew', '31d02c0447515c780733afe596163bdb-0001.jpg', '1234', '31', 'sumsel', 'banyuasin', 'alang lebar', 'bambu raya jaya', '12', '22', '2', '1', 'Kepala keluarga terdampak atau korban Covid-19', ''),
(5, 'jodi', '12345', 'Laki - Laki', 'wewe', '9d0b3f2d0809e0ac4bcb18359d886b71-0001.jpg', '134', '12', 'sumsel', 'banyuasin', 'sepang', 'bambu', '123', '2', '2222222', '2222222', ' Kehilangan pekerjaan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
