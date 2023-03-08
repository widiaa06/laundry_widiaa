-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2023 pada 05.23
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_widia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `qty` double NOT NULL,
  `keterangan` text NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_paket`, `qty`, `keterangan`, `total_bayar`) VALUES
(2, 2, 2, 1, '', 10000),
(8, 8, 2, 1, '', 10000),
(9, 9, 2, 1, '', 1),
(10, 10, 1, 1, '', 8),
(12, 12, 2, 1, '', 1),
(13, 13, 5, 1, '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `nama`, `alamat`, `jenis_kelamin`, `tlp`) VALUES
(4, 'sheva', 'surabaya', 'L', '088667990453'),
(5, 'jaemin', 'bandung', 'L', '088776543211'),
(6, 'jeno', 'bandung', 'L', '088231334567'),
(7, 'eunha', 'surabaya', 'P', '082334567890'),
(8, 'kyungsoo', 'surabaya', 'L', '085667890432');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_outlet`
--

INSERT INTO `tb_outlet` (`id_outlet`, `nama`, `alamat`, `tlp`) VALUES
(1, 'nana laundry 1', 'bandung', '088765432273'),
(2, 'nana laundry 2', 'bandung', '088765432178'),
(3, 'nana laundry 3', 'bandung', '085443217667');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `jenis` enum('kiloan','selimut','bed_cover','kaos','celana','lainnya') NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `id_outlet`, `jenis`, `nama_paket`, `harga`) VALUES
(1, 1, 'selimut', 'paket ringan', 8000),
(2, 2, 'kaos', 'paket basah', 10000),
(4, 3, 'kiloan', 'paket lengkap', 12000),
(5, 1, 'kiloan', 'paket cuci + setrika', 12000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `kode_invoice` varchar(100) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `batas_waktu` datetime NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `biaya_tambahan` int(11) NOT NULL,
  `diskon` double NOT NULL,
  `pajak` int(11) NOT NULL,
  `status` enum('baru','proses','selesai','diambil') NOT NULL,
  `dibayar` enum('dibayar','belum dibayar') NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `cash` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_outlet`, `kode_invoice`, `id_member`, `tgl`, `batas_waktu`, `tgl_bayar`, `biaya_tambahan`, `diskon`, `pajak`, `status`, `dibayar`, `id_user`, `total_bayar`, `cash`) VALUES
(2, 3, 'TR-010323002', 4, '2023-03-01 08:30:00', '2023-03-02 14:00:00', '2023-03-01 08:00:00', 0, 0, 0, 'proses', 'dibayar', 2, 10000, 20000),
(8, 2, 'TR-030323008', 5, '2023-03-03 07:00:00', '2023-03-04 10:00:00', '2023-03-03 07:00:00', 0, 0, 0, 'proses', 'dibayar', 1, 10000, 15000),
(9, 2, 'TR-060323009', 6, '2023-03-06 15:20:00', '2023-03-07 15:20:00', '2023-03-06 15:20:00', 0, 0, 0, 'proses', 'dibayar', 1, 10000, 10000),
(10, 3, 'TR-080323010', 6, '2023-03-08 08:30:00', '2023-03-08 10:00:00', '2023-03-08 08:30:00', 0, 0, 0, 'proses', 'belum dibayar', 2, 8000, 10000),
(12, 3, 'TR-080323012', 8, '2023-03-08 09:30:00', '2023-03-08 11:00:00', '2023-03-08 09:30:00', 0, 0, 0, 'proses', 'dibayar', 2, 10000, 10000),
(13, 2, 'TR-080323013', 7, '2023-03-08 09:30:00', '2023-03-09 10:00:00', '2023-03-08 09:30:00', 0, 0, 0, 'proses', 'belum dibayar', 1, 12000, 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `role` enum('admin','kasir','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `id_outlet`, `role`) VALUES
(1, 'sheva', 'sheva', '$2y$10$NPt/nAIHykdrE23mA8P2SuG3OW06mBK37teL26cxsvhdMKYJQ3upu', 2, 'kasir'),
(2, 'widia', 'widia', '$2y$10$NPt/nAIHykdrE23mA8P2SuG3OW06mBK37teL26cxsvhdMKYJQ3upu', 3, 'admin'),
(3, 'jaemin', 'jaemin', '$2y$10$NPt/nAIHykdrE23mA8P2SuG3OW06mBK37teL26cxsvhdMKYJQ3upu', 1, 'owner'),
(4, 'rendy', 'rendy', '', 3, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`),
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`);

--
-- Ketidakleluasaan untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD CONSTRAINT `tb_paket_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`);

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `tb_member` (`id_member`),
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`),
  ADD CONSTRAINT `tb_transaksi_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
