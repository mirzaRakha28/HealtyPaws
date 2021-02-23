-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2021 pada 20.07
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dr_paws`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id_user` int(11) NOT NULL,
  `id_education` int(11) NOT NULL,
  `comment` varchar(225) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `username`, `password`, `name`, `image`) VALUES
(1, 'wahabbinwahab', '111111111', 'dr.Wahab', 'dr_wahab.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `konten` text NOT NULL,
  `konten_singkat` varchar(100) NOT NULL,
  `image` varchar(225) NOT NULL,
  `jenis` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id`, `title`, `konten`, `konten_singkat`, `image`, `jenis`) VALUES
(1, 'Cara Hewan Berkembang Biak', 'Cara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang Biak', 'Cara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang ', 'Cara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang BiakCara Hewan Berkembang Biak', 'general');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operasional`
--

CREATE TABLE `operasional` (
  `id` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `operasional`
--

INSERT INTO `operasional` (`id`, `id_dokter`, `hari`, `jam_buka`, `jam_tutup`, `active`) VALUES
(1, 1, 'Monday', '08:00:00', '00:00:00', 1),
(2, 1, 'Selasa', '08:00:00', '00:00:00', 1),
(3, 1, 'Rabu', '08:00:00', '00:00:00', 1),
(4, 1, 'Kamis', '08:00:00', '00:00:00', 1),
(5, 1, 'Jumat', '08:00:00', '00:00:00', 1),
(6, 1, 'Sabtu', '08:00:00', '00:00:00', 1),
(7, 1, 'Minggu', '08:00:00', '00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `operasional`
--
ALTER TABLE `operasional`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `operasional`
--
ALTER TABLE `operasional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
