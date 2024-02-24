-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2024 pada 06.55
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopikenangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `nohp`, `subject`, `message`) VALUES
(11, 'lola', 'lola@gmail.com', '0822888990', 'Makanan kurang enak', 'Tidak sedap'),
(12, 'sea', 'sea22@gmail.com', '082156776578', 'Kopi Kenangan', 'Tempatnya Aestetic'),
(17, 'Saskia ', 'saskia23@gmail.com', '09887654342', 'Makanan', 'Sumpah roti kopi kenangan  buat gw inget sama crush gw yang nembak waktu nongki<3'),
(18, 'Siskana dewi', 'siska23@gmail.com', '0821667853', 'Minuman', 'Enak sekali rasanya pas minumannya, jadi teringat mntan hehe'),
(19, 'Ciaaa', 'cia33@gmail.com', '08216787554', 'Kopi Kenangan', 'Tempatnya estetik bgtttt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `id_minuman` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_minuman` varchar(30) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `minuman`
--

INSERT INTO `minuman` (`id_minuman`, `nama`, `jenis_minuman`, `jumlah`, `harga`, `total`) VALUES
(55, 'Alifa syakira nazwa', 'Mango Yuzu Raspberry', 3, 15000, 45000),
(56, 'Riska Manaban', '1 Kopi Kenangan Mantan (R) 1 R', 3, 40000, 120000),
(57, 'Fadilla syifa hadzu', 'MANTANCINO', 6, 10000, 60000),
(58, 'Rena sofiana', 'Raspberry Hibiscus', 12, 15000, 180000),
(59, 'Teresa milaina', 'Lemon Black Tea', 3, 20000, 60000),
(60, 'Monita setya', '1 Kopi Kenangan Mantan (R) 1 R', 5, 40000, 200000),
(61, 'Lola hasibuan', 'Black aren', 3, 10000, 30000),
(62, 'Kalila siska yuni', 'Avocuddle', 3, 10000, 30000),
(63, 'Kalila yuinara', '1 Americano (R) 1 Roti Coklat ', 6, 45000, 270000),
(65, 'Putri utami', '1 Kopi Kenangan Mantan (R) 1 R', 1, 40000, 40000),
(66, 'Safira', 'Raspberry Hibiscus', 4, 15000, 60000),
(67, 'Mijuaruu', 'Black aren', 5, 10000, 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `token`, `status`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'roberto.kakaban@yahoo.com', 'c0e024d9200b5705bc4804722636378a', '1', '2024-02-23 12:52:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id_minuman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
