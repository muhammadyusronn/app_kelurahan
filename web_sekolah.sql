-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 31 Bulan Mei 2023 pada 14.44
-- Versi server: 5.7.39-cll-lve
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aprimatu_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `is_published` int(11) NOT NULL,
  `file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `created_at`, `created_by`, `is_published`, `file`) VALUES
(2, 'Ekstrakulikuler Basket', '', '2023-05-17 15:57:28', 1, 1, 'basket.jpeg'),
(3, 'Ekstrakulikuler Pramuka', '', '2023-05-17 15:57:46', 1, 1, 'pramuka.jpeg'),
(4, 'Ekstrakulikuler Memanah', '', '2023-05-17 15:58:03', 1, 0, 'memanah.jpeg'),
(5, 'Ekstrakulikuler Programming', '', '2023-05-17 15:58:18', 1, 1, 'programming.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `file` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `file`, `created_at`, `created_by`) VALUES
(11, 'WhatsApp_Image_2023-05-30_at_11_21_59.jpeg', '2023-05-30 04:23:35', 1),
(12, 'WhatsApp_Image_2023-05-30_at_11_22_00.jpeg', '2023-05-30 04:25:36', 1),
(13, 'WhatsApp_Image_2023-05-30_at_11_22_59.jpeg', '2023-05-30 04:25:57', 1),
(14, 'WhatsApp_Image_2023-05-30_at_11_22_01.jpeg', '2023-05-30 04:26:22', 1),
(15, 'WhatsApp_Image_2023-05-30_at_11_20_17.jpeg', '2023-05-30 04:26:36', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_konten`
--

CREATE TABLE `jenis_konten` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_konten`
--

INSERT INTO `jenis_konten` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Visi dan Misi', 'Ini adalah jenis konten utk kategori visi dan misi sekolah'),
(2, 'Struktur Organisasi', 'Ini adalah jenis konten utk kategori struktur organisasi sekolah'),
(3, 'Tentang', 'Ini adalah jenis konten utk kategori profile dan sejarah sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id` int(11) NOT NULL,
  `jenis_konten` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `is_published` int(11) NOT NULL,
  `file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id`, `jenis_konten`, `judul`, `isi`, `created_at`, `created_by`, `is_published`, `file`) VALUES
(10, 3, 'Profil Sekolah SMP Negeri 37 OKU', '<p>SMP Negeri 37 Ogan Komering Ulu berdiri sejak tahun 2007 yang merupakan Unit Gedung Baru atau UGB. Sekolah ini berdiri diDesa Mekar Jaya, Kecamatan Sosoh Buaya Rayap Kabupaten Ogan Komering Ulu. Sebagai Unit Gedung Baru, kondisi sekolah saat itu sangat terbatas baik pendidik, tenaga kependidikan, sarana prasarana, maupun lingkungannya.</p>\r\n<p>Dari tahun ke tahun SMP Negeri 37 Ogan Komering Ulu mulai mengalami kemajuan dan berupaya keras untuk mengejar ketinggalan agar dapat disetarakan dengan sekolah yang berstandar nasional. SMP Negeri 37 Ogan Komering Ulu merupakan salah satu SMP Negeri Ogan Komering Ulu, menempati tanah seluas 6005 m2, didukung dengan prestasi sekolah selama ini menyebabkan sekolah ini banyak diminati oleh calon peserta didik pada saat penerimaan peserta didik.</p>\r\n<p>Terbukti pada penerimaan peserta didik tahun 2016/2017 dengan jumlah pendaftar yang mencapai 260 calon peserta didik, sedangkan daya tampung hanya 180 peserta didik Fasilitas yang dimiliki SMP Negeri 37 Ogan Komering Ulu antara lain ruang kelas sejumlah 9 Ruangan. Laboratorium komputer (ruang) terdiri dari 15 unit komputer, laboratorium IPA, perpustakaan, musholla, dan lapangan olah raga yang memadai.</p>\r\n<p>Pada tahun pelajaran 2007/2008 sekolah ini telah menerapkan Kurikulum Tingkat Satuan Pendidikan dari kelas VII sampai dengan kelas IX. SMP Negeri 37 Ogan Komering Ulu memiliki tenaga pendidik dan kependidikan sebagai berikut, tenaga guru sejumlah 23 orang dan tenaga tata usaha 3 orang.Dari jumlah 23 guru terdiri dari 10 orang guru PNS, 13 orang guru tidak tetap. Sesuai dengan ketentuan yang ada bahwa guru SMP minimal bekualifikasi ijazah S1 / Akta IV, kondisi guru di SMP Negeri 37 Ogan Komering Ulu 98 % berkualifikasi ijazah S1 / Akta IV.</p>', '2023-05-11 11:37:22', 1, 1, 'smp.jpg'),
(11, 1, 'Visi dan Misi SMP N 37 OKU', '<p><strong>V I S I </strong></p>\r\n<p>Menciptakan Insan Berprestasi, Berbudaya dan Bertaqwa</p>\r\n<p><strong>M I S I</strong></p>\r\n<ol>\r\n<li>Menjalankan nilai nilai agama dan Berperilaku akhlakul Karimah Dalam Kehidupan Sehari Hari.</li>\r\n<li>Melaksanakan Pembelajaran Aktif, kreatif, efektif dan Menyenangkan untuk Mengembangkan potensi peserta Didik.</li>\r\n<li>Menumbuhkan semangat Berprestasi Kepada Keseluruh Warga Sekolah.</li>\r\n<li>Membimbing dan Mengembangkan Bakat Dan Minat Peserta Didik.</li>\r\n<li>Terlaksananya Program Ekstrakulikuler untuk menghasilkan siswa yang Berprestasi dan Bermanfaat bagi Kehidupan Sehari Hari.</li>\r\n<li>Menerapkan Manajemen Berbasis Sekolah Yang Partisifatif Dengan Melibatkan Seluruh Warga Sekolah.</li>\r\n<li>Mengembangkan Hasil Karya Yang dimiliki Peserta Dididk.</li>\r\n<li>Meningkatkan Kesadaran Untuk Memelihara Lingkungan.</li>\r\n</ol>', '2023-05-11 11:40:07', 1, 1, '692115417.jpg'),
(12, 2, 'Struktur Organisasi SMP Negeri 37 OKU', '', '2023-05-11 11:54:09', 1, 1, 'struktur.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Pimpinan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar`
--

CREATE TABLE `pengajar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mata_pelajaran` varchar(100) NOT NULL,
  `motto` text NOT NULL,
  `foto` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajar`
--

INSERT INTO `pengajar` (`id`, `nama`, `mata_pelajaran`, `motto`, `foto`, `created_at`, `created_by`) VALUES
(1, 'Fitri Yulianti S.Pd', 'Bahasa Inggris', 'Semangat', 'download2.jpg', '2023-05-11 12:20:23', 1),
(3, 'Era Prianti S.Pd', 'Bahasa Indonesia', 'Semangat', 'download1.jpg', '2023-05-14 08:58:33', 1),
(4, 'Ayu Swastika, S.Pd', 'Bahasa Indonesia', 'Semangat', 'download3.jpg', '2023-05-30 04:42:57', 1),
(5, 'Rohimah', 'Matematika', 'Semangat', 'F28FDF81-6DDA-41CE-804D-571105C06EAB.jpeg', '2023-05-30 04:49:20', 1),
(6, 'Masnely, S.Pd', 'Matematika', 'Semangat', '2204F9B2-9967-4B64-A004-99B2ECB76742.jpeg', '2023-05-30 04:51:04', 1),
(7, 'CandraYulius, S.Pd', 'IPA', 'Semangat', 'A3394845-47EA-4EF8-A566-3C47F3BFE9EB.jpeg', '2023-05-30 04:51:39', 1),
(8, 'Andri Saputra, S.Pd', 'IPS', 'Semangat', '77C8C702-9F9C-4D75-9C35-0889240925B9.jpeg', '2023-05-30 04:52:25', 1),
(9, 'Fitria Rachmawati, S.Pd', 'IPS', 'Semangat', '93E5A9D6-362C-43FF-85FC-29DFAE3A6C67.jpeg', '2023-05-30 04:53:09', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `level_user` int(11) NOT NULL,
  `original_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nip`, `nama`, `kontak`, `password`, `last_login`, `level_user`, `original_pass`) VALUES
(1, '2020110081', 'Admin', '082176956726', '$2y$10$GL52BXJP/OFDYVnUwiBTN.PSoE2dS04edlypjahhgsU6uk.wWXAu.', '2023-05-31 18:40:27', 1, '2020110081'),
(2, '196309141994031002', 'Kepala Sekolah', '082189299222', '$2y$10$1f0kT0iKP1HxCF.Yne4Qbeemis4WNAwo1OAjL2ISO69G02PPZIDqu', '2023-05-30 04:16:25', 1, 'kepsek');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indeks untuk tabel `jenis_konten`
--
ALTER TABLE `jenis_konten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `jenis_konten` (`jenis_konten`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `level_user` (`level_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `jenis_konten`
--
ALTER TABLE `jenis_konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD CONSTRAINT `konten_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konten_ibfk_2` FOREIGN KEY (`jenis_konten`) REFERENCES `jenis_konten` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengajar`
--
ALTER TABLE `pengajar`
  ADD CONSTRAINT `pengajar_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`level_user`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
