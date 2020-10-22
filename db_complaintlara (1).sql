-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2020 pada 16.02
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_complaintlara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_09_23_161158_create_siswas_table', 1),
(3, '2020_09_29_160115_create_petugass_table', 2),
(4, '2020_10_04_143103_create_pengaduans_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduans`
--

CREATE TABLE `pengaduans` (
  `id_pengaduan` int(10) UNSIGNED NOT NULL,
  `tanggal_pengaduan` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `nik` int(11) NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_laporan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','proses','selesai') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaduans`
--

INSERT INTO `pengaduans` (`id_pengaduan`, `tanggal_pengaduan`, `tanggal_selesai`, `nik`, `jenis`, `judul`, `isi_laporan`, `kota`, `kategori`, `file`, `status`) VALUES
(1, '2020-10-07', NULL, 4, 'pengaduan', 'test', 'test', 'depok', 'Kesehatan', '20201007184800.jpeg', 'proses'),
(2, '2020-10-07', NULL, 4, 'pengaduan', 'test kedua', 'halo senang sekali', 'bogor', 'Lingkungan Hidup', NULL, 'pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugass`
--

CREATE TABLE `petugass` (
  `id_petugas` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','petugas') COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `petugass`
--

INSERT INTO `petugass` (`id_petugas`, `nama`, `email`, `password`, `level`, `foto`, `created_at`, `updated_at`) VALUES
(6, 'dmare gaza', 'qwe@gmail.com', '$2y$10$YE/AOWNA/3VwwsxEeIX03ujp0kqXfKLJ.aBdfnN0mnaiKNjKzutTe', 'admin', '', '2020-10-01 14:04:57', '2020-10-07 22:56:48'),
(7, 'freaz', 'fgh@gmail.com', '$2y$10$YE/AOWNA/3VwwsxEeIX03ujp0kqXfKLJ.aBdfnN0mnaiKNjKzutTe', 'petugas', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `nisn` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('Laki laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswas`
--

INSERT INTO `siswas` (`nisn`, `nama`, `jurusan`, `jenis_kelamin`, `agama`, `alamat`, `nohp`, `image`) VALUES
(209, 'pizza 691', 'Rekayasa Perangkat Lunak', 'Laki laki', 'krislam', NULL, '42121', '20201007092545.jpeg'),
(211, 'qwer', 'Teknik Jaringan Dasar', 'Perempuan', 'Lhokseumawe', NULL, '546', '20201002085830.jpeg'),
(212, 'pizzap', 'Rekayasa Perangkat Lunak', 'Perempuan', 'buddha', NULL, '12111', NULL),
(213, 'pizza 691', 'Rekayasa Perangkat Lunak', 'Perempuan', 'ateisasaaa', NULL, '546', NULL),
(214, 'qwer', 'Multimedia', 'Perempuan', 'ateisasaaa', NULL, '08212', NULL),
(217, 'ggg', 'Teknik Jaringan Dasar', 'Laki laki', 'kriwslam', NULL, '546', '20201004092008.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(4, 'awn', 'zxc@gmail.com', '$2y$10$YE/AOWNA/3VwwsxEeIX03ujp0kqXfKLJ.aBdfnN0mnaiKNjKzutTe', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `petugass`
--
ALTER TABLE `petugass`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `petugass_email_unique` (`email`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  MODIFY `id_pengaduan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `petugass`
--
ALTER TABLE `petugass`
  MODIFY `id_petugas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `nisn` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
