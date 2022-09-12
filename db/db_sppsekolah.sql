-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2020 pada 16.36
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sppsekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `namalengkap` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`) VALUES
(1, 'petugas', '123456', 'putri'),
(2, 'admin', '123456', 'defa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pembayaran`
--

CREATE TABLE `detail_pembayaran` (
  `no_bukti` varchar(20) NOT NULL,
  `nis` int(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `nama_pem` varchar(50) NOT NULL,
  `metode` varchar(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `ket` varchar(40) NOT NULL,
  `id_petugas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pembayaran`
--

INSERT INTO `detail_pembayaran` (`no_bukti`, `nis`, `tgl_bayar`, `nama_pem`, `metode`, `jumlah`, `ket`, `id_petugas`) VALUES
('111111', 1, '2020-08-16', 'wwwww', 'DDDDDDDDDD', 12, 'kkkkkk', '1'),
('1234', 1819101412, '2020-08-16', 'DDDDDDDD', 'DDDDDDDDDD', 4, 'F', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `idguru` int(5) NOT NULL,
  `namaguru` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`idguru`, `namaguru`) VALUES
(2, 'put'),
(12345, 'Aang Miftah Parid'),
(23456, 'CahyoHartono');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `nama` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `typeuser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`nama`, `username`, `password`, `typeuser`) VALUES
('putri', 'admin', '123456', 'Admin'),
('yanti', 'petugas', '123456', 'Petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(10) NOT NULL,
  `nama_petugas` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`) VALUES
('1', 'e', 'petugas', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(10) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `biaya` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `kelas`, `tahun_ajaran`, `biaya`) VALUES
(1, 'www', '1', '1', 1),
(1819101412, 'Putri Defa Yanti', 'XII-RPL', '2018-2019', 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `no_bukti` varchar(20) NOT NULL,
  `nis` int(10) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah` int(20) NOT NULL,
  `metode` varchar(10) NOT NULL,
  `ket` varchar(40) NOT NULL,
  `id_petugas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`no_bukti`, `nis`, `bulan`, `tgl_bayar`, `jumlah`, `metode`, `ket`, `id_petugas`) VALUES
('11111111', 1, 'Oktober', '2020-08-16', 4, 'ffffffff', 'FFFF', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `walikelas`
--

CREATE TABLE `walikelas` (
  `kelas` varchar(10) NOT NULL,
  `idguru` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `walikelas`
--

INSERT INTO `walikelas` (`kelas`, `idguru`) VALUES
('1', 2),
('XII-RPL', 12345),
('XI-RPL', 23456);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- Indeks untuk tabel `detail_pembayaran`
--
ALTER TABLE `detail_pembayaran`
  ADD PRIMARY KEY (`no_bukti`),
  ADD KEY `nis` (`nis`,`id_petugas`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idguru`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `kelas` (`kelas`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`no_bukti`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`kelas`),
  ADD KEY `idguru` (`idguru`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login` (`username`);

--
-- Ketidakleluasaan untuk tabel `detail_pembayaran`
--
ALTER TABLE `detail_pembayaran`
  ADD CONSTRAINT `detail_pembayaran_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `detail_pembayaran_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Ketidakleluasaan untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login` (`username`);

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kelas`) REFERENCES `walikelas` (`kelas`);

--
-- Ketidakleluasaan untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `spp_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `spp_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Ketidakleluasaan untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  ADD CONSTRAINT `walikelas_ibfk_1` FOREIGN KEY (`idguru`) REFERENCES `guru` (`idguru`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
