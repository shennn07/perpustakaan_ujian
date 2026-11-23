-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2026 pada 03.34
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan_ujian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `penerbit`, `tahun_terbit`, `stok`, `deskripsi`) VALUES
(1, 'doraemon', 'fujiko_fujio', 1998, 5, 'komik doraemon'),
(2, 'naruto', 'masashi kishimoto', 1998, 10, 'manga naruto'),
(3, 'one piece', 'Oda', 1998, 10, 'manga one piece');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `tanggal_pinjam` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_kembali` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`id`, `id_user`, `id_buku`, `tanggal_pinjam`, `tanggal_kembali`, `jumlah`) VALUES
(1, 1, 1, '2026-11-22 17:00:00', '2026-11-25', 2),
(2, 1, 2, '2026-11-22 17:00:00', '2026-11-25', 2),
(3, 3, 3, '2000-12-11 17:00:00', '2000-02-20', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `role` enum('admin','anggota') NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `email`, `pass`, `role`, `nama`, `kelas`) VALUES
(1, 'admin1@gmail.com', 'admin123', 'admin', 'admin', '-'),
(2, 'user1@gmail.com', 'user123', 'anggota', 'user 3', 'pplg1'),
(3, 'nathannaelwww@gmail.com', 'user123', 'anggota', 'PUTRA RAJA IBLIS KUL BET NO NE', 'x rpl 1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
