-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2021 pada 13.05
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `jawaban_a` text NOT NULL,
  `jawaban_b` text NOT NULL,
  `jawaban_c` text NOT NULL,
  `jawaban_d` text NOT NULL,
  `jawab_benar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawab_benar`) VALUES
(1, 'Private Home Page', 'Personal Hypertext Processor', 'PHP: Hypertext Processor', 'Program Hypertext Processor', 'C'),
(41, '<?php … </?php>', '<script> … </script>', '<?php … ?>', '<php … /?>', 'C'),
(42, 'cout<<“Hello World”;', 'System.out.print(“Hello World”);', 'document.write (“Hello World”)', 'echo “Hello World”;', 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_soal`
--

CREATE TABLE `jenis_soal` (
  `id_jenis` int(11) NOT NULL,
  `course` varchar(10) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_soal`
--

INSERT INTO `jenis_soal` (`id_jenis`, `course`, `level`) VALUES
(1, 'php', 'beginner'),
(2, 'php', 'intermediate');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `id_username` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `id_username`, `id_jenis`, `nilai`) VALUES
(2, 88, 1, '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `id_jawaban` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `soal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `id_jawaban`, `id_jenis`, `soal`) VALUES
(32, 1, 1, 'PHP Merupakan singkatan dari?\r\n'),
(33, 41, 1, 'Kode PHP diawali dan di akhiri dengan tanda?'),
(34, 42, 1, 'Sintak untuk mencetak output ‘Hello World’ di PHP?'),
(35, 41, 2, 'ppld');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_selesai`
--

CREATE TABLE `soal_selesai` (
  `id` int(50) NOT NULL,
  `username` varchar(12) NOT NULL,
  `soal_selesai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_username` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `id_role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_username`, `fullname`, `username`, `password`, `avatar`, `id_role`) VALUES
(1, 'admin', 'admin', 'admin', NULL, 1),
(88, 'habib', 'habib', 'habib', 'http://localhost:8092/assets/images/Lisasayang.png', 2),
(89, 's', 's', 's', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(2) NOT NULL,
  `role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `jenis_soal`
--
ALTER TABLE `jenis_soal`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_username`,`id_jenis`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_quiz` (`id_jenis`),
  ADD KEY `id_jawaban` (`id_jawaban`);

--
-- Indeks untuk tabel `soal_selesai`
--
ALTER TABLE `soal_selesai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_role` (`id_role`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `jenis_soal`
--
ALTER TABLE `jenis_soal`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `soal_selesai`
--
ALTER TABLE `soal_selesai`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_username` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_soal` (`id_jenis`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_username`) REFERENCES `user` (`id_username`);

--
-- Ketidakleluasaan untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_soal` (`id_jenis`),
  ADD CONSTRAINT `soal_ibfk_2` FOREIGN KEY (`id_jawaban`) REFERENCES `jawaban` (`id_jawaban`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `user_role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
