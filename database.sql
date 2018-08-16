-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Agu 2018 pada 15.15
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesawat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `airlines`
--

CREATE TABLE `airlines` (
  `id_airline` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `airlines`
--

INSERT INTO `airlines` (`id_airline`, `name`) VALUES
(1, 'Garuda Indonesia'),
(2, 'Lion Air'),
(3, 'Batik Air'),
(4, 'Air Asia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `costs`
--

CREATE TABLE `costs` (
  `id_cost` int(11) NOT NULL,
  `id_airline` int(11) NOT NULL,
  `id_origin` int(11) NOT NULL,
  `id_destination` int(11) NOT NULL,
  `adult` int(15) NOT NULL,
  `child` int(15) NOT NULL,
  `infant` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `costs`
--

INSERT INTO `costs` (`id_cost`, `id_airline`, `id_origin`, `id_destination`, `adult`, `child`, `infant`) VALUES
(1, 1, 4, 4, 265000, 200000, 150000),
(2, 3, 1, 1, 175000, 150000, 125000),
(3, 2, 4, 3, 350000, 200000, 200000),
(4, 4, 5, 4, 345000, 325000, 250000),
(5, 2, 3, 5, 435000, 400000, 400000),
(6, 1, 5, 3, 375000, 350000, 325000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinations`
--

CREATE TABLE `destinations` (
  `id_destination` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `airport` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `destinations`
--

INSERT INTO `destinations` (`id_destination`, `city`, `airport`) VALUES
(1, 'Surabaya', 'SUB - Bandar Udara Internasional Juanda'),
(2, 'Bali', 'DPS - Bandar Udara Internasional Ngurah Rai'),
(3, 'Semarang', 'SRG - Bandar Udara Internasional Achmad Yani'),
(4, 'Jakarta', 'HLP - Bandar Udara Internasional Halim Perdanakusuma'),
(5, 'Manado', 'MDC - Bandar Udara Internasional Sam Ratulangi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `airline` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `infant` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `origins`
--

CREATE TABLE `origins` (
  `id_origin` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `airport` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `origins`
--

INSERT INTO `origins` (`id_origin`, `city`, `airport`) VALUES
(1, 'Semarang', 'SRG - Bandar Udara Internasional Achmad Yani'),
(2, 'Jakarta', 'HLP - Bandar Udara Internasional Halim Perdanakusuma'),
(3, 'Surabaya', 'SUB - Bandar Udara Internasional Juanda'),
(4, 'Bali', 'DPS - Bandar Udara Internasional Ngurah Rai'),
(5, 'Manado', 'MDC - Bandar Udara Internasional Sam Ratulangi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) NOT NULL,
  `promo` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id_promo`, `promo`, `status`) VALUES
(1, 'Diskon 5% untuk penerbangan pertama anda bersama Garuda Indonesia.', 1),
(2, 'Diskon 10% untuk pembelian tiket dengan tujuan Malaysia, Brunei Darussalam, Thailand.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id_transaction` int(11) NOT NULL,
  `id_airline` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_origin` int(11) NOT NULL,
  `id_destination` int(11) NOT NULL,
  `id_cost` int(11) NOT NULL,
  `departure` date NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `infant` int(11) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id_transaction`, `id_airline`, `id_user`, `id_origin`, `id_destination`, `id_cost`, `departure`, `adult`, `child`, `infant`, `payment`) VALUES
(3, 2, 1, 1, 2, 1, '2017-07-05', 1, 1, 1, 1),
(8, 1, 1, 1, 1, 1, '0000-00-00', 1, 1, 1, 0),
(10, 2, 1, 1, 1, 1, '0000-00-00', 1, 0, 0, 1),
(11, 2, 1, 2, 2, 1, '2017-07-12', 1, 2, 3, 1),
(12, 1, 1, 1, 1, 1, '2017-07-18', 1, 0, 0, 1),
(13, 3, 1, 2, 1, 1, '2017-07-12', 1, 3, 1, 1),
(14, 1, 3, 1, 2, 1, '2017-07-19', 2, 0, 0, 1),
(15, 2, 1, 1, 1, 1, '2017-07-06', 2, 0, 0, 1),
(16, 3, 3, 1, 5, 3, '2017-07-10', 1, 0, 0, 0),
(17, 4, 3, 3, 2, 4, '2017-07-27', 1, 0, 0, 1),
(18, 1, 1, 5, 4, 1, '2017-07-11', 2, 1, 1, 1),
(19, 1, 4, 1, 2, 1, '2017-07-10', 1, 0, 0, 1),
(20, 1, 1, 1, 2, 1, '2017-07-12', 1, 0, 0, 1),
(21, 1, 1, 1, 5, 1, '2017-10-10', 1, 0, 0, 0),
(22, 1, 1, 1, 2, 1, '2017-07-12', 1, 2, 2, 1),
(23, 3, 1, 1, 1, 3, '2017-07-13', 1, 1, 1, 1),
(24, 4, 5, 3, 4, 4, '2017-07-13', 1, 0, 0, 1),
(25, 2, 6, 1, 2, 2, '2017-07-13', 1, 0, 0, 1),
(26, 1, 1, 1, 4, 1, '2017-09-19', 1, 0, 0, 1),
(27, 1, 1, 1, 1, 1, '2018-08-17', 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(64) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `jenis_kelamin`, `username`, `password`) VALUES
(1, 'Thio Van Agusti', 'Laki-Laki', 'thio', 'thio'),
(2, 'Tatak', 'Laki-Laki', 'tatak', 'tatak'),
(3, 'admin', 'Laki-Laki', 'admin', 'admin'),
(4, 'Batman Begin', 'Laki-Laki', 'batmanbegin', 'batmanbegin'),
(5, 'Coba Lagi', 'Laki-Laki', 'coba', 'coba'),
(6, 'Thio Van Agusti', 'Laki-Laki', 'thiovan', 'thiovan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`id_airline`);

--
-- Indexes for table `costs`
--
ALTER TABLE `costs`
  ADD PRIMARY KEY (`id_cost`),
  ADD KEY `id_airline` (`id_airline`,`id_origin`,`id_destination`),
  ADD KEY `id_origin` (`id_origin`),
  ADD KEY `id_destination` (`id_destination`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id_destination`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `origins`
--
ALTER TABLE `origins`
  ADD PRIMARY KEY (`id_origin`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `id_airline` (`id_airline`),
  ADD KEY `id_user` (`id_user`,`id_origin`,`id_destination`),
  ADD KEY `id_cost` (`id_cost`),
  ADD KEY `id_origin` (`id_origin`),
  ADD KEY `id_destination` (`id_destination`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `id_airline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `costs`
--
ALTER TABLE `costs`
  MODIFY `id_cost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id_destination` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `origins`
--
ALTER TABLE `origins`
  MODIFY `id_origin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `costs`
--
ALTER TABLE `costs`
  ADD CONSTRAINT `costs_ibfk_1` FOREIGN KEY (`id_airline`) REFERENCES `airlines` (`id_airline`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `costs_ibfk_2` FOREIGN KEY (`id_origin`) REFERENCES `origins` (`id_origin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `costs_ibfk_3` FOREIGN KEY (`id_destination`) REFERENCES `destinations` (`id_destination`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`id_airline`) REFERENCES `airlines` (`id_airline`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`id_origin`) REFERENCES `origins` (`id_origin`),
  ADD CONSTRAINT `transactions_ibfk_4` FOREIGN KEY (`id_destination`) REFERENCES `destinations` (`id_destination`),
  ADD CONSTRAINT `transactions_ibfk_5` FOREIGN KEY (`id_cost`) REFERENCES `costs` (`id_cost`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
