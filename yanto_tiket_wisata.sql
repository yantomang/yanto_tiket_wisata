-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 03:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `tambah_data_wisata`
--

CREATE TABLE `tambah_data_wisata` (
  `id` int(11) NOT NULL,
  `Nama_wisata` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tambah_data_wisata`
--

INSERT INTO `tambah_data_wisata` (`id`, `Nama_wisata`, `deskripsi`, `harga`, `gambar`) VALUES
(16, 'Orchid forest cikole', 'Orchid Forest Cikole Bandung memfokuskan diri untuk memperkenalkan dan membudidayakan berbagai tanaman anggrek. Menggunakan metode lokal maupun internasional.', '40000', 'g2.jpg'),
(17, 'Taman Hutan Raya Ir. H. D', 'Tahura Juanda adalah salah satu hutan raya yang menjadi kawasan konservasi alam.', '17000', 'g3.jpg'),
(18, 'The Great Asia Africa Lem', 'The Great Asia Africa adalah objek wisata yang menyajikan pesona keindahan arsitektur, dan budaya yang ada di kawasan Asia dan Africa dalam satu kawasan.', '50000', 'g4.jpg'),
(19, 'Dusun Bambu Lembang', 'Dusun Bambu Lembang merupakan sarana rekreasi bagi keluarga di tengah pemandangan yang indah dan asri.', '30000', 'g5.jpg'),
(20, 'The Lodge Maribaya', 'The Lodge Maribaya adalah tempat wisata yang berkonsep Instagramable di daerah wisata Lembang Kabupaten Bandung Barat. The Lodge Lembang memiliki pemandangan Alam yang sangat eksotis dengan jejeran pohon pinusnya.', '50000', 'g6.jpg'),
(21, 'Fairy Garden', 'Fairy Garden wisata di Bandung termasuk destinasi baru yang cocok untuk dikunjungi bersama keluarga tercinta. Tempat ini banyak didatangi oleh pengunjung dari berbagai kalangan yang dapat menikmati wisata dengan spot foto yang dijamin instagramable.', '35000', 'g7.jpg'),
(22, 'Floating Market Lembang', 'Floating Market Lembang merupakan objek wisata yang memadukan alam dan buatan dengan konsep unik dan menarik.', '35000', 'g8.jpg'),
(31, 'Gunung putri lembang', 'Untuk melihat sunrise di sekitar Bandung, rasanya enggak ada destinasi wisata yang lebih baik daripada . Lokasinya enggak jauh dari kota, tepatnya di Lembang, Kabupaten Bandung Barat, Jawa Barat. Pendakian ke puncaknya pun enggak makan banyak waktu, cuma 30 menit. Meski begitu, semua pengunjung akan mendapatkan pemandangan matahari terbit yang indah dari sana.', '386000', 'g36.jpg'),
(32, 'Sanghyang Heuleut', 'Terletak di Rajamandala Kulon, Cipatat, Kabupaten Bandung Barat, Sanghyang Heuleut merupakan danau hijau memesona dikelilingi batu-batu kali yang eksotis. Saking cantiknya, tempat ini sampai disebut kolam bidadari.Sanghyang Heuleut merupakan tempat wisata Bandung yang cocok untuk mandi dan berfoto. Bagi yang hobi menguji nyali, silakan melompat dari salah satu batu yang tingginya lebih dari 5 meter. Hati-hati buat yang kurang jago berenang.', '1000000', 'g37.jpg'),
(33, 'Lereng Anteng Panoramic C', 'Ini tempat nongkrong dan ngopi yang lagi hits banget di Bandung. Letaknya di daerah Puncak Ciumbuleuit atau Punclut yang adem.  Daerah ini terkenal akan wisata kulinernya. Salah satu yang paling digemari anak muda adalah menikmati secangkir kopi di salah satu tenda atau saung yang menghadap pemandangan kota Bandung.', '5.000,00', 'bg5.jpg'),
(34, 'Fairy Garden', 'hi everyone, we privode varicus kind of tour packages with the best facilities and services, and also at affordable prices. we wiil amaze you with the beauty of indonesia with an unforgettable exprience', '50000', 'g4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata`
--

CREATE TABLE `tb_biodata` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `no_tlp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_biodata`
--

INSERT INTO `tb_biodata` (`id`, `photo`, `user_id`, `no_tlp`) VALUES
(13, 'sandi', 'sandi@gmail.com', '0838647284'),
(14, 'sandi', 'sandi@gmail.com', '0838647284'),
(15, 'sandi', 'sandi@gmail.com', '0838647284');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
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
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id`, `user_id`, `Tanggal_wisata`, `jumlah_tiket`, `wisata_id`, `harga`) VALUES
(16, 0, '2023-02-23', '1', 0, ''),
(17, 0, '2023-03-09', '3', 0, ''),
(18, 0, '2023-03-16', '5', 0, ''),
(19, 0, '2023-03-01', '-2', 0, ''),
(20, 25, '2023-03-22', '2', 2023, '34000'),
(21, 25, '2023-03-23', '3', 2023, '105000'),
(22, 25, '2023-04-01', '2', 22, '70000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `user_name`, `email`, `password`, `level`) VALUES
(23, 'sandi', 'sandi@gmail.com', 'ac9b4e0b6a21758534db2a6324d34a54', 'user'),
(24, 'admin', 'admin', '0cc175b9c0f1b6a831c399e269772661', 'admin'),
(25, 'ujang', 'ujang@gmail.com', 'c959810f01adc10791f46e1b3ecab45a', 'user'),
(26, 'rendi', 'rendi@gmail.com', 'd209fc47646bba5e5fdc3d3bbaad4b9c', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tambah_data_wisata`
--
ALTER TABLE `tambah_data_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tambah_data_wisata`
--
ALTER TABLE `tambah_data_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
