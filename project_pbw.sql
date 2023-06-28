-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2022 pada 12.10
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_pbw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `layanan_pendaftaran` varchar(100) NOT NULL,
  `waktu_pendaftaran` varchar(100) NOT NULL,
  `validasi_pendaftaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id`, `nama`, `email`, `layanan_pendaftaran`, `waktu_pendaftaran`, `validasi_pendaftaran`) VALUES
(1, 'ikhsan', 'ikhsan@gmail.com', 'Online', '10/12/2022', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `nomor_pendaftaran` int(100) NOT NULL,
  `biaya_regis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `email`, `asal_sekolah`, `program_studi`, `nomor_pendaftaran`, `biaya_regis`) VALUES
(1, 'ikhsan', 'ikhsan@gmail.com', 'SMKN 100 Jakarta', 'Teknik Informatika', 2, 'Rp 1.500.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nomor_pendaftaran` int(100) NOT NULL,
  `nomor_hp` int(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kota_kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` varchar(100) NOT NULL,
  `jurusan_peminatan_sekolah` varchar(100) NOT NULL,
  `tahun_ajaran` varchar(100) NOT NULL,
  `program_studi_1` varchar(100) NOT NULL,
  `program_studi_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `nomor_pendaftaran`, `nomor_hp`, `email`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kelurahan`, `kecamatan`, `kota_kabupaten`, `provinsi`, `agama`, `jenis_kelamin`, `asal_sekolah`, `nilai_ujian`, `jurusan_peminatan_sekolah`, `tahun_ajaran`, `program_studi_1`, `program_studi_2`) VALUES
(1, 'Ikhsan Fitriansyah', 2, 2147483647, 'sad@gmail.com', 'Depok', '11/Desember/2005', 'Sawangan Depok', 'Duren Seribu', 'Bojongsari', 'Depok', 'Jawa Barat', 'islam', 'pria', 'UEMJEH', '100', 'IPA', '2020', 'TI', 'hukum'),
(2, 'dena', 2, 2147483647, 'exampla@gmail.com', 'Cirebon', '1/Januari/2005', 'apakek', 'jong', 'boong', 'bogor', 'Jawa Barat', 'islam', 'pria', 'UEMJEH', '100', 'IPS', '2020', 'hukum', 'ilkom'),
(5, 'coba', 0, 821342342, 'coba@gmail.com', 'Bogor', '4/Mei/2005', 'Bogor Raya', 'Bogor', 'Bogor ', 'Bogor', 'Jawa Barat', 'islam', 'wanita', 'UEMJEH', '100', 'IPA', '2021', 'Farmasi', 'mj');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
