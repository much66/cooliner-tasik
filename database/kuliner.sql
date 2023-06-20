-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2022 pada 04.32
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmaps`
--

CREATE TABLE `tb_gmaps` (
  `kd_gmaps` int(11) NOT NULL,
  `kd_menu` varchar(20) NOT NULL,
  `link_maps` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_gmaps`
--

INSERT INTO `tb_gmaps` (`kd_gmaps`, `kd_menu`, `link_maps`) VALUES
(1, 'MN001', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gofood`
--

CREATE TABLE `tb_gofood` (
  `kd_gojek` int(11) NOT NULL,
  `kd_menu` varchar(20) NOT NULL,
  `link_gojek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_grfood`
--

CREATE TABLE `tb_grfood` (
  `kd_grfood` int(11) NOT NULL,
  `kd_menu` varchar(20) NOT NULL,
  `link_grfod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kd_kategori` varchar(7) NOT NULL,
  `name_kategori` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`kd_kategori`, `name_kategori`, `description`, `photo`) VALUES
('KT001', 'Nasi TO', 'Sangu tutug oncom dikenal dengan sebutan nasi TO. Merupakan paduan nasi dengan sambal oncom khas Sunda.\n\n', '1554345153750.png'),
('KT002', 'Nasi Kuning', 'Nasi yang dimasak bersama dengan kunyit serta santan dan rempah-rempah. Nasi kuning lebih gurih dibanding nasi biasa.', '3532313231313.jpg'),
('KT003', 'Nasi Cikur', 'Nasi cikur merupakan olahan nasi yang diberi bumbu kencur serta dimakan dengan berbagai macam lauk.\r\n', '3411241241244.jpg'),
('KT004', 'Cimol', 'Cimol adalah makanan ringan khas Sunda yang dibuat dari tepung kanji. Cimol berasal dari kata aci digemol.', '1212133424.jpg'),
('KT005', 'Seblak', 'Seblak adalah makanan khas sunda yang terbuat dari kerupuk basah bumbu halus seperti bawang putih dengan kencur.', '6236283723.jpg'),
('KT006', 'Cilok Goang', 'Cilok goang adalah pentol aci dengan bumbu sambal goang khas Sunda. Lebih enak dimakan saat hangat.', '34234343434242.jpg'),
('KT007', 'Batagor', 'Makanan yang dibuat dari tahu yang dilembutkan dan diisi dengan adonan berbahan ikan tenggiri dan tepung tapioka.', '52176767262.png'),
('KT008', 'Es Goyobod', 'Es goyobod berbahan aci atau tepung tapioka, ditambahkan potongan roti tawar, pacar cina, tape singkong, kelapa serut.', '1123434141343.jpeg'),
('KT009', 'Es Doger', 'Es doger berbahan dasar susu dan parutan kelapa, ditambah dengan tape, ketan hitam, alpukat, dan lain-lain.', '31231232312.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE `tb_level` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_level`
--

INSERT INTO `tb_level` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Waiter'),
(3, 'Kasir'),
(4, 'Owner'),
(5, 'Pelanggan'),
(6, 'Koki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `kd_menu` varchar(7) NOT NULL,
  `name_menu` varchar(50) NOT NULL,
  `kategori_id` varchar(7) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modify` timestamp NOT NULL DEFAULT current_timestamp(),
  `kd_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`kd_menu`, `name_menu`, `kategori_id`, `harga`, `description`, `photo`, `created`, `modify`, `kd_user`) VALUES
('MN001', 'T.O Mughni', 'KT001', '12000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua', '1669823550551.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US001'),
('MN002', 'T.O Benhil 2.96', 'KT001', '10000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua', '1669823648139.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US001'),
('MN003', 'RM TO Rahmat', 'KT001', '11000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua', '1669823744574.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US001'),
('MN004', 'Nasi Kuning', 'KT002', '15000', 'Nasi Kuning terenak setasik', '1554350514500.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US001'),
('MN005', 'Nasi Pecel', 'KT002', '20000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua', '1554350547631.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US001'),
('MN006', 'Nasi Goreng Ayam', 'KT002', '15000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua', '1554350588507.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US001'),
('MN007', 'Jus Alpukat', 'KT005', '10000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua', '155435061848.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US001'),
('MN008', 'Jus Anggur', 'KT005', '10000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua', '1554350648687.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US001'),
('MN009', 'Jus Jeruk', 'KT005', '10000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua', '1554350665679.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US001'),
('MN010', 'Sop sapi', 'KT006', '20000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua', '1554369912639.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US001'),
('MN011', 'Es teh manis', 'KT004', '5000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua', '1554369938443.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US001'),
('MN012', 'Jahe', 'KT004', '5000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua', '1554369966769.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US001'),
('MN013', 'Nasi Goreng Telur', 'KT002', '15000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua', '1554370011485.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US001'),
('MN014', 'Jus Tomat', 'KT005', '10000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua', '1554370061484.jpg', '2022-11-23 01:58:48', '2022-11-23 01:58:48', 'US012');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rating`
--

CREATE TABLE `tb_rating` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `kd_menu` varchar(20) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dibuat` int(11) NOT NULL,
  `datetime` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = block, 0 = unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_rating`
--

INSERT INTO `tb_rating` (`review_id`, `user_name`, `kd_menu`, `user_rating`, `judul`, `user_review`, `dibuat`, `datetime`, `status`) VALUES
(1, 'US012', 'MN001', 4, 'gilaaaa', 'bisa enak banget', 1669523911, 1669523911, 1),
(2, 'US012', 'MN001', 3, 'wow', 'yabai', 1669524209, 1669524209, 1),
(3, 'US012', 'MN003', 4, 'dijamin enak', 'jangan ragu buat beli', 1669526140, 1669526140, 1),
(4, 'US012', 'MN001', 5, 'gGGGG', 'hcjscjscs', 1669601443, 1669601443, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sfood`
--

CREATE TABLE `tb_sfood` (
  `kd_sfood` int(11) NOT NULL,
  `kd_menu` varchar(20) NOT NULL,
  `link_sfood` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `kd_user` varchar(7) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('Admin','Waiter','Kasir','Owner','Pelanggan','Koki') NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`kd_user`, `name`, `email`, `username`, `password`, `level`, `avatar`) VALUES
('US001', 'Arif Muhamad', 'much66@gmail.com', 'much', 'YWRtaW4xMjM=', 'Admin', 'avatar1.jpg'),
('US012', 'Muhamad Asep', 'asepmail@gmail.com', 'rikiansyah', 'MQ==', 'Pelanggan', ''),
('US013', 'Hira Maulana', 'hiragana@gmail.com', 'hira maulana', 'MQ==', 'Pelanggan', ''),
('US014', 'ari muhamad', 'ariedan@gmail.com', 'ari muhamad', 'Mg==', 'Pelanggan', ''),
('US015', 'geri', 'arifrifai291@yahoo.co.id', 'gernug', 'MTIz', 'Pelanggan', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_gmaps`
--
ALTER TABLE `tb_gmaps`
  ADD PRIMARY KEY (`kd_gmaps`);

--
-- Indeks untuk tabel `tb_gofood`
--
ALTER TABLE `tb_gofood`
  ADD PRIMARY KEY (`kd_gojek`);

--
-- Indeks untuk tabel `tb_grfood`
--
ALTER TABLE `tb_grfood`
  ADD PRIMARY KEY (`kd_grfood`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indeks untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`kd_menu`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `tb_rating`
--
ALTER TABLE `tb_rating`
  ADD PRIMARY KEY (`review_id`);

--
-- Indeks untuk tabel `tb_sfood`
--
ALTER TABLE `tb_sfood`
  ADD PRIMARY KEY (`kd_sfood`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_gmaps`
--
ALTER TABLE `tb_gmaps`
  MODIFY `kd_gmaps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_gofood`
--
ALTER TABLE `tb_gofood`
  MODIFY `kd_gojek` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_grfood`
--
ALTER TABLE `tb_grfood`
  MODIFY `kd_grfood` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_rating`
--
ALTER TABLE `tb_rating`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_sfood`
--
ALTER TABLE `tb_sfood`
  MODIFY `kd_sfood` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD CONSTRAINT `tb_menu_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `tb_kategori` (`kd_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
