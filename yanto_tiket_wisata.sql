-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2023 pada 06.57
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
-- Database: `yanto_tiket_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah_data_wisata`
--

CREATE TABLE `tambah_data_wisata` (
  `id` int(11) NOT NULL,
  `Nama_wisata` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tambah_data_wisata`
--

INSERT INTO `tambah_data_wisata` (`id`, `Nama_wisata`, `deskripsi`, `harga`, `gambar`) VALUES
(31, 'Gunung putri lembang', 'Untuk melihat sunrise di sekitar Bandung, rasanya enggak ada destinasi wisata yang lebih baik daripada . Lokasinya enggak jauh dari kota, tepatnya di Lembang, Kabupaten Bandung Barat, Jawa Barat. Pendakian ke puncaknya pun enggak makan banyak waktu, cuma 30 menit. Meski begitu, semua pengunjung akan mendapatkan pemandangan matahari terbit yang indah dari sana.', '386000', 'g36.jpg'),
(32, 'Sanghyang Heuleut', 'Terletak di Rajamandala Kulon, Cipatat, Kabupaten Bandung Barat, Sanghyang Heuleut merupakan danau hijau memesona dikelilingi batu-batu kali yang eksotis. Saking cantiknya, tempat ini sampai disebut kolam bidadari.Sanghyang Heuleut merupakan tempat wisata Bandung yang cocok untuk mandi dan berfoto. Bagi yang hobi menguji nyali, silakan melompat dari salah satu batu yang tingginya lebih dari 5 meter. Hati-hati buat yang kurang jago berenang.', '100000', 'g37.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_biodata`
--

CREATE TABLE `tb_biodata` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `no_tlp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Tanggal_wisata` date NOT NULL,
  `jumlah_tiket` varchar(50) NOT NULL,
  `wisata_id` int(11) NOT NULL,
  `harga` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id`, `user_id`, `Tanggal_wisata`, `jumlah_tiket`, `wisata_id`, `harga`) VALUES
(23, 25, '2023-03-23', '2', 17, '34000'),
(24, 25, '2023-03-08', '2', 31, '772000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `user_name`, `email`, `password`, `level`) VALUES
(24, 'admin', 'admin', '0cc175b9c0f1b6a831c399e269772661', 'admin'),
(25, 'ujang', 'ujang@gmail.com', 'c959810f01adc10791f46e1b3ecab45a', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tambah_data_wisata`
--
ALTER TABLE `tambah_data_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
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
-- AUTO_INCREMENT untuk tabel `tambah_data_wisata`
--
ALTER TABLE `tambah_data_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_biodata`
--
ALTER TABLE `tb_biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
