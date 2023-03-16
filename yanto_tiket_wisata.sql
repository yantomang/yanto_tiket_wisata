-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 01:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tambah_data_wisata`
--

INSERT INTO `tambah_data_wisata` (`id`, `Nama_wisata`, `deskripsi`, `harga`, `gambar`) VALUES
(35, 'Dusun Bambu', 'Dusun Bambu cocok sekali menjadi tujuan wisata keluarga di Bandung. Di Dusun Bambu terdapat area playground anak, ruang terbuka yang indah, dan taman.  Ada juga restoran, cafe, dan pujasera dengan berbagai pilihan kuliner. Mau menginap? ada villa dan glamping juga disini. Tempat liburan di Bandung yang satu ini bisa anda jadikan tempat bersantai keluarga.', '35000', 'g1.jpeg'),
(36, 'Floating Market Lembang', 'Floating Market Lembang cukup terkenal sebagai tempat rekreasi di Bandung. Areanya cukup luas, dengan banyak pilihan wahana permainan.  Selain itu, terdapat area kuliner yang cukup unik. Semua pedagang menjajakan makanan dari perahu. Dari sini juga nama Floating Market berasal. Sebagian besar area Floating market berada di luar ruangan. Jadi faktor cuaca cukup berpengaruh.', '30000', 'g2.jpg'),
(37, 'Kawah Tangkuban Perahu', 'Secara administrasi, Gunung Tangkuban Perahu masuk ke wilayah Subang sebenarnya. Tapi, dekat sekali dari Lembang, sehingga sering disebut berada di Lembang. Dari wilayah Bandung, bentuknya memang mirip perahu terbalik.  Tangkuban Perahu termasuk tempat wisata alam Bandung yang terkenal. Daya tarik utamanya berupa kawah yang bisa dijangkau langsung tanpa harus berjalan jauh.  Ada dua kawah utama yang terkenal. Kawah Ratu (kawah utama), dan kawah Domas (harus trekking rada jauh).', '20000', 'g3.jpg'),
(38, 'Orchid Forest', 'Salah satu tempat hits di Bandung nih. Orchid Forest Cikole merupakan tempat ngadem di Lembang, piknik, sekaligus budidaya anggrek yang keren banget.  Di sini terdapat banyak tempat berfoto yang epic. Pastinya bakal nge hits kalau di upload ke medsos. Selain itu juga, terdapat berbagai koleksi anggrek yang indah. Koleksi anggrek di Orchid Forest Cikole termasuk yang terbesar di Indonesia lho.  Tempat ini berada di Cikole. Arahkan kendaraan ke arah Tangkuban Perahu, nanti sebelumnya akan melewati tempat ini.', '40000', 'g4.jpg'),
(39, 'Sanghyang Heuleut', 'Satu tempat eksotis yang menyimpan peninggalan purba di Bandung; Sanghyang Heuleut. Konon, Sangyang Heuleut merupakan peninggalan alam dari danau purba. Danau purba ini melingkupi area Bandung di jaman dulu kala.  Sekarang, tempat ini jadi salah satu tujuan wisata alam alternatif. Asyik juga, kita bisa menikmati alam sambil melihat peninggalan geologis dataran Bandung disini.', '20000', 'g5.jpg'),
(40, 'Rabbit Town Bandung', 'Satu lagi tempat wisata keluarga di Bandung; Rabbit Town. Lokasinya berada di area Ciumbuleuit, dan tidak terlalu jauh dari pusat kota.  Disini, anda bisa menikmati berbagai spot unik dan bagus untuk berfoto. Selain itu, terdapat juga beberapa permainan yang cocok untuk anak-anak.', '35000', 'g6.jpg'),
(41, 'Amazing Art World', 'Amazing Art World terletak di kawasan Setia Budhi, tidak jauh dari kampus UPI. Di sini, anda bisa menikmati lukisan dan ruangan dengan konsep 3D.  Keren banget untuk berfoto. Seolah-olah anda masuk dan berada menyatu dengan lukisan yang ada.', '35000', 'g7.jpg'),
(42, 'Fairy Garden', 'Amazing Art World terletak di kawasan Setia Budhi, tidak jauh dari kampus UPI. Di sini, anda bisa menikmati lukisan dan ruangan dengan konsep 3D.  Keren banget untuk berfoto. Seolah-olah anda masuk dan berada menyatu dengan lukisan yang ada.', '20000', 'g15.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id`, `user_id`, `Tanggal_wisata`, `jumlah_tiket`, `wisata_id`, `harga`) VALUES
(26, 28, '2023-03-20', '1', 35, '35000'),
(27, 28, '2023-03-22', '2', 36, '60000'),
(28, 29, '2023-03-15', '3', 38, '120000'),
(29, 27, '2023-03-19', '2', 35, '70000');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `user_name`, `email`, `password`, `level`) VALUES
(24, 'admin', 'admin', '0cc175b9c0f1b6a831c399e269772661', 'admin'),
(25, 'ujang', 'ujang@gmail.com', 'c959810f01adc10791f46e1b3ecab45a', 'user'),
(27, 'sandi', 'sandi@gmail.com', 'ac9b4e0b6a21758534db2a6324d34a54', 'user'),
(29, 'user', 'user@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(30, 'tedi', 'tedi@gmail.com', 'cc1e1887fb2c20cccc72a729c73fb73b', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tambah_data_wisata`
--
ALTER TABLE `tambah_data_wisata`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
