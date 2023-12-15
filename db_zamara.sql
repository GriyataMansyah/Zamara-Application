-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2023 pada 02.56
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
-- Database: `db_zamara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt_rw`
--

CREATE TABLE `rt_rw` (
  `tw_id` bigint(16) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` bigint(13) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rt_rw`
--

INSERT INTO `rt_rw` (`tw_id`, `nama`, `alamat`, `no_hp`, `tgl_lahir`) VALUES
(9876543345, 'kjhdsdfgh', 'kjhgfddfgh', 876543345, '2000-02-09'),
(876543456789, 'kytr', 'kjhgfdfgh', 987654, '2222-02-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` bigint(16) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `no_hp` bigint(13) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `nama`, `no_hp`, `alamat`, `tgl_lahir`) VALUES
(1, 'Muhammad Irfan Musthofa', 81354174808, 'Jauh Banget', '2004-01-28'),
(98765432, 'jhgtyui', 876545678, 'kjhgfdsdfghj', '2000-02-02'),
(1234567890, 'alpaca', 987654321, 'tokyo', '2005-03-15'),
(234567899876, 'xsdfvbghn', 345675, 'sdfghjgf', '2222-02-22'),
(98765432345678, 'iuytreghjk', 8765456789, 'jhgfghj', '2004-08-07'),
(9999999929292929, 'Admin', 8882828282822, 'Batam', '2004-01-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `akun_id` bigint(16) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('masyarakat','security','rt_rw','admin') NOT NULL,
  `warga_negara` enum('indonesia','asing') NOT NULL,
  `admin_id` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`akun_id`, `username`, `password`, `role`, `warga_negara`, `admin_id`) VALUES
(1, 'Irfan', 'irfan', 'admin', 'indonesia', 1),
(98765432, 'min', 'min', 'admin', 'indonesia', 1),
(854345678, 'mas', 'mas', 'masyarakat', 'indonesia', 1),
(1234567890, 'alpaca', 'alpaca', 'admin', 'asing', 1),
(234567899876, 'ad', '12345', 'admin', 'indonesia', 9999999929292929),
(876543456789, 'rt', 'rt', 'rt_rw', 'indonesia', 1),
(98765432345678, 'Mama', '12345', 'admin', 'indonesia', 1),
(352463463735346, 'sec', 'sec', 'security', 'indonesia', 9999999929292929),
(9999999929292929, 'Admin', 'admin', 'admin', 'indonesia', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `komentar_id` int(10) NOT NULL,
  `username` varchar(60) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_laporan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`komentar_id`, `username`, `deskripsi`, `id_laporan`) VALUES
(54, 'Irfan', 'hfyufkiyfifyik', 149),
(55, 'alpaca', 'Bcaot', 160);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int(10) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `jenis` enum('tidak darurat','darurat','','') NOT NULL,
  `tgl_waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `akun_id` bigint(16) NOT NULL,
  `status` enum('terima','tahan','proses') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_laporan`, `judul`, `username`, `deskripsi`, `latitude`, `longitude`, `jenis`, `tgl_waktu`, `akun_id`, `status`) VALUES
(143, 'Admin', 'rt', 'Admin', '1.1739308050934465', '104.01155161022066', 'tidak darurat', '2023-12-07 15:22:26', 876543456789, 'terima'),
(144, 'Admin2', 'Admin', 'Admin2', '1.1670674822320204', '104.00671005249025', 'tidak darurat', '2023-12-07 15:26:11', 9999999929292929, 'terima'),
(145, 'mas', 'mas', 'mas', '1.1085782758659908', '104.04165625523483', 'tidak darurat', '2023-12-07 15:27:47', 854345678, 'tahan'),
(146, 'RT2', 'rt', 'RT2', '1.1483658696396681', '104.02340157056771', 'tidak darurat', '2023-12-07 15:30:16', 876543456789, 'tahan'),
(149, 'hay sema', 'rt', 'shay', '1.6342426007426902', '103.59283447265626', 'tidak darurat', '2023-12-07 17:23:26', 876543456789, 'tahan'),
(150, 'aa', 'rt', 'adgd', '1.144418987348642', '104.04069900512697', 'tidak darurat', '2023-12-07 17:23:42', 876543456789, 'tahan'),
(151, 'Oi', 'Irfan', 'oi', '4.061594901204998', '99.88769531250001', 'tidak darurat', '2023-12-08 01:32:11', 1, 'tahan'),
(152, 'Baper', 'Irfan', 'Baper', '1.0876850062048828', '104.0398406982422', 'tidak darurat', '2023-12-08 01:32:29', 1, 'tahan'),
(153, 'dttyjuy', 'Irfan', 'uyruyuyf', '1.109046303972062', '104.04464721679689', 'tidak darurat', '2023-12-08 17:53:26', 1, 'tahan'),
(154, 'gcgyd', 'Irfan', 'jfyuf', '1.1188423575301671', '104.09700393637023', 'tidak darurat', '2023-12-08 17:57:35', 1, 'tahan'),
(155, 'sgh', 'rt', 'dfhdf', '1.003608134561552', '104.17002988538971', 'tidak darurat', '2023-12-08 18:14:19', 876543456789, 'tahan'),
(160, 'kedinginan', 'alpaca', 'fctkj', '65.66617385837709', '107.40234375000001', 'tidak darurat', '2023-12-11 04:55:09', 1234567890, 'terima'),
(161, 'Ornag', 'Irfan', 'aufuasboas', '1.0540376370065874', '103.9684295654297', 'tidak darurat', '2023-12-12 13:06:36', 1, 'proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_masyarakat`
--

CREATE TABLE `tb_masyarakat` (
  `nik` bigint(16) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no_hp` bigint(13) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_masyarakat`
--

INSERT INTO `tb_masyarakat` (`nik`, `nama`, `no_hp`, `alamat`, `tgl_lahir`) VALUES
(854345678, 'jhgfdfghj', 8765434567, 'kjhgfdsdfghj', '5432-07-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_security`
--

CREATE TABLE `tb_security` (
  `security_id` bigint(16) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `no_hp` bigint(13) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_security`
--

INSERT INTO `tb_security` (`security_id`, `nama`, `no_hp`, `alamat`, `tgl_lahir`) VALUES
(352463463735346, 'wetwgsdgsd', 254634634, '42twg', '0212-02-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siaran`
--

CREATE TABLE `tb_siaran` (
  `siaran_id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `tw_id` bigint(16) NOT NULL,
  `warga_negara` enum('indonesia','asing') NOT NULL,
  `status` enum('selesai','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siaran`
--

INSERT INTO `tb_siaran` (`siaran_id`, `judul`, `deskripsi`, `tanggal`, `tw_id`, `warga_negara`, `status`) VALUES
(23, 'ghhgd', 'ghdhg', '2222-02-22', 876543456789, 'indonesia', 'belum'),
(24, 'JADI', 'KITA BISA', '2023-12-14', 876543456789, 'indonesia', 'selesai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rt_rw`
--
ALTER TABLE `rt_rw`
  ADD PRIMARY KEY (`tw_id`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`akun_id`),
  ADD KEY `warga_negara` (`warga_negara`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `id_laporan` (`id_laporan`);

--
-- Indeks untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id` (`akun_id`) USING BTREE;

--
-- Indeks untuk tabel `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tb_security`
--
ALTER TABLE `tb_security`
  ADD PRIMARY KEY (`security_id`);

--
-- Indeks untuk tabel `tb_siaran`
--
ALTER TABLE `tb_siaran`
  ADD PRIMARY KEY (`siaran_id`),
  ADD KEY `tw_id` (`tw_id`),
  ADD KEY `warga_negara` (`warga_negara`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9999999929292930;

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `komentar_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT untuk tabel `tb_siaran`
--
ALTER TABLE `tb_siaran`
  MODIFY `siaran_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD CONSTRAINT `tb_akun_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `tb_admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`id_laporan`) REFERENCES `tb_laporan` (`id_laporan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD CONSTRAINT `tb_laporan_ibfk_1` FOREIGN KEY (`akun_id`) REFERENCES `tb_akun` (`akun_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_siaran`
--
ALTER TABLE `tb_siaran`
  ADD CONSTRAINT `tb_siaran_ibfk_2` FOREIGN KEY (`warga_negara`) REFERENCES `tb_akun` (`warga_negara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_siaran_ibfk_3` FOREIGN KEY (`tw_id`) REFERENCES `rt_rw` (`tw_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
