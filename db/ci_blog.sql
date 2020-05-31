-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 04:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Teknologi'),
(6, 'Opini');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_postingan`
--

CREATE TABLE `tbl_postingan` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `isi_postingan` text NOT NULL,
  `slug` varchar(128) NOT NULL,
  `tanggal_dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_postingan`
--

INSERT INTO `tbl_postingan` (`id`, `id_kategori`, `nama`, `isi_postingan`, `slug`, `tanggal_dibuat`) VALUES
(1, 1, 'ini coba postingan satu', 'ini isi postingan satu', 'ini-coba-postingan-satu', 1588480658),
(2, 6, 'ini coba postingan dua', 'isi postingan dua', 'ini-coba-postingan-dua', 1588480791),
(3, 6, 'ini coba postingan tiga', 'ini isi postingan tiga', 'ini-coba-postingan-tiga', 1589712045),
(4, 1, 'post lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dui risus, iaculis id augue a, hendrerit elementum nibh. Aenean vel eros at quam rutrum pellentesque. Nullam nec tortor nec justo faucibus varius. Aliquam erat volutpat. Proin consequat nisi ac dui posuere dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris et bibendum lectus. Quisque lacinia nunc eget orci vehicula vehicula. Nunc dapibus ultrices ligula, non suscipit tellus ullamcorper sed. Phasellus lectus tellus, eleifend id nisi id, efficitur posuere nisl.\r\n\r\nCurabitur sit amet leo et quam vestibulum luctus. Fusce cursus sit amet diam a commodo. Quisque vitae ultricies dolor. Sed at ante ultricies, cursus nibh sed, hendrerit turpis. Nulla condimentum ante urna, a faucibus ante sollicitudin id. Phasellus auctor ullamcorper velit quis luctus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis at eros egestas, porttitor ligula eu, pharetra odio. Proin efficitur vel leo iaculis tincidunt. Praesent et fermentum nibh, quis lobortis massa. Fusce pellentesque, felis vel auctor scelerisque, ante arcu venenatis quam, nec fringilla nisi nibh in diam. Duis condimentum auctor gravida. Ut at urna sit amet lorem rhoncus ornare finibus at lorem.\r\n\r\nNunc sit amet dolor eu est varius lacinia. Donec ac nibh orci. Cras rhoncus facilisis dolor, eget consectetur arcu mollis et. Praesent sit amet orci enim. Mauris quis eros purus. Curabitur elementum lorem ex, nec ultricies dui dictum sed. Pellentesque sodales, massa gravida mattis pretium, nunc ante commodo augue, eget feugiat tellus turpis in orci.\r\n\r\nNunc sagittis purus vitae lacus pharetra, at lobortis enim lobortis. Cras mauris tellus, feugiat et mauris quis, sollicitudin accumsan ante. Vestibulum egestas vel tellus ac porta. Suspendisse potenti. Nam ultrices lorem euismod orci varius sodales. Mauris dictum fermentum ante at feugiat. Quisque dictum sed est eu pharetra. Sed facilisis accumsan ante at pellentesque. Aliquam vitae justo in felis venenatis eleifend. Nullam at quam mattis, egestas justo at, volutpat tortor. Donec ut vestibulum neque, a vulputate enim.\r\n\r\nSuspendisse tincidunt, justo et iaculis commodo, libero massa convallis tellus, quis hendrerit elit mi ac enim. Etiam ultrices justo eu consectetur commodo. Etiam nibh felis, viverra sed lacus vel, commodo viverra nisl. Mauris fermentum eu leo eget congue. Curabitur in eros non lectus posuere efficitur. Phasellus consequat ex sem, a dictum neque vulputate nec. Maecenas varius consectetur tincidunt. Vivamus condimentum eleifend sapien, at placerat urna facilisis et. Duis pretium dui ex, at condimentum ante cursus ac. Nulla facilisi. Integer quis sagittis arcu. Curabitur iaculis vulputate urna, ut volutpat magna imperdiet non. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum pretium consectetur augue, sit amet vehicula neque gravida eu. Maecenas ac ex nisl.', 'post-lorem', 1589908133);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_postingan`
--
ALTER TABLE `tbl_postingan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_postingan`
--
ALTER TABLE `tbl_postingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
