-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2020 pada 05.43
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_mahasiswa`
--

CREATE TABLE `auth_mahasiswa` (
  `npm` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `auth_mahasiswa`
--

INSERT INTO `auth_mahasiswa` (`npm`, `password`) VALUES
(17111113, 'test'),
(17111123, 'mahasiswa'),
(17111146, 'mahasiswa'),
(17111256, 'test'),
(17111333, 'mahasiswa'),
(18111009, 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Syahidan', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `npm` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tmpt_lahir` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`npm`, `nama`, `kelas`, `jurusan`, `alamat`, `status`, `tmpt_lahir`, `jk`) VALUES
(17111113, 'Siti Muayanah', 'TM17A', 'Teknik Mekanika', 'Bandung', 'aktif', 'Cianjur', 'Perempuan'),
(17111146, 'Syahidan Arrizaldy Sidik', 'TIFRP17CIDC', 'Teknik Informatika', 'Bandung', 'aktif', 'Karawang', 'Laki-laki'),
(17111212, 'Tessa Tiara', 'TIFRP17CIDC', 'Teknik Informatika', 'Bandung', 'aktif', 'Bandung', 'Perempuan'),
(17111256, 'Ihsan Nurhakim', 'TIFRP17CIDC', 'Teknik Informatika', 'Bandung', 'aktif', 'Bandung', 'Laki-laki'),
(17111333, 'Ira Nabilah', 'DKV17A', 'Desain Komunikasi Visual', 'Bandung', 'aktif', 'Karawang', 'Perempuan'),
(18111009, 'Intan Rembulan', 'DKV18A', 'Desain Komunikasi Visual', 'Bandung', 'aktif', 'aktif', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_mahasiswa`
--
ALTER TABLE `auth_mahasiswa`
  ADD PRIMARY KEY (`npm`),
  ADD KEY `npm` (`npm`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
