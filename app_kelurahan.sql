-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 08 Jan 2024 pada 16.58
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
-- Database: `app_kelurahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `is_published` int(11) NOT NULL,
  `file` varchar(256) NOT NULL,
  `jenis_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `created_at`, `created_by`, `is_published`, `file`, `jenis_artikel`) VALUES
(2, 'Ekstrakulikuler Basket', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2024-01-01 15:57:28', 1, 1, 'basket.jpeg', 1),
(3, 'Ekstrakulikuler Pramuka', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-12-17 15:57:46', 1, 1, 'pramuka.jpeg', 1),
(4, 'Ekstrakulikuler Memanah', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-09-03 15:58:03', 1, 1, 'memanah.jpeg', 2),
(5, 'Ekstrakulikuler Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-05-17 15:58:18', 1, 1, 'programming.jpeg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `file` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `filter` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `file`, `created_at`, `created_by`, `name`, `filter`) VALUES
(4, 'DSC_0069.jpeg', '2023-05-14 16:50:30', 1, 'Gambar 1', 'filter-internal'),
(5, 'images_-_2020-09-08T164150_808.jpeg', '2023-05-14 16:50:41', 1, 'Gambar 2', 'filter-internal'),
(6, 'maxresdefault.jpeg', '2023-05-14 16:50:47', 1, 'Gambar 3', 'filter-internal'),
(7, 'maxresdefault1.jpeg', '2023-05-14 16:50:54', 1, 'Gambar 4', 'filter-internal'),
(8, 'murid-smp.jpeg', '2023-05-14 16:51:01', 1, 'Gambar 5', 'filter-eksternal'),
(9, '1.jpeg', '2023-05-14 16:52:20', 1, 'Gambar 6', 'filter-eksternal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_artikel`
--

CREATE TABLE `jenis_artikel` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis_artikel`
--

INSERT INTO `jenis_artikel` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Berita', 'Ini adalah jenis artikel berita'),
(2, 'Pengumuman', 'Ini adalah Jenis Artikel Pengumuman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_konten`
--

CREATE TABLE `jenis_konten` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `is_published` int(11) NOT NULL,
  `file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id`, `jenis_konten`, `judul`, `isi`, `created_at`, `created_by`, `is_published`, `file`) VALUES
(10, 3, 'Profil Sekolah SMP Negeri 37 OKU', 'Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.\r\n\r\n\r\nNullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed.\r\n\r\n\r\nNam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.', '2023-05-11 11:37:22', 1, 1, 'smp.jpg'),
(11, 1, 'Visi dan Misi SMP N 37 OKU', '<p><strong>V I S I </strong></p>\r\n<p>Menciptakan Insan Berprestasi, Berbudaya dan Bertaqwa</p>\r\n<p><strong>M I S I</strong></p>\r\n<ol>\r\n<li>Menjalankan nilai nilai agama dan Berperilaku akhlakul Karimah Dalam Kehidupan Sehari Hari.</li>\r\n<li>Melaksanakan Pembelajaran Aktif, kreatif, efektif dan Menyenangkan untuk Mengembangkan potensi peserta Didik.</li>\r\n<li>Menumbuhkan semangat Berprestasi Kepada Keseluruh Warga Sekolah.</li>\r\n<li>Membimbing dan Mengembangkan Bakat Dan Minat Peserta Didik.</li>\r\n<li>Terlaksananya Program Ekstrakulikuler untuk menghasilkan siswa yang Berprestasi dan Bermanfaat bagi Kehidupan Sehari Hari.</li>\r\n<li>Menerapkan Manajemen Berbasis Sekolah Yang Partisifatif Dengan Melibatkan Seluruh Warga Sekolah.</li>\r\n<li>Mengembangkan Hasil Karya Yang dimiliki Peserta Dididk.</li>\r\n<li>Meningkatkan Kesadaran Untuk Memelihara Lingkungan.</li>\r\n</ol>', '2023-05-11 11:40:07', 1, 1, '692115417.jpg'),
(12, 2, 'Struktur Organisasi SMP Negeri 37 OKU', 'Lorem issum', '2023-05-11 11:54:09', 1, 1, 'org8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Pimpinan');

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
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `level_user` int(11) NOT NULL,
  `original_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nip`, `nama`, `kontak`, `password`, `last_login`, `level_user`, `original_pass`) VALUES
(1, '11111', 'Admin', '081299929922', '$2y$10$i6LAb9xDh4G.pgVZ.cGknOUtRiPvK5SAW8SeMvAnICqKvnejunsQS', '2023-05-31 13:28:35', 1, ''),
(2, '22222', 'Pimpinan', '082189299222', '$2y$10$bMYspn86xs5Syrp9uclhu.WnCGUm9ZOhq2QBKaS8fWZGsxQro3aoW', '2023-05-08 15:11:46', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `jenis_artikel` (`jenis_artikel`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indeks untuk tabel `jenis_artikel`
--
ALTER TABLE `jenis_artikel`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jenis_artikel`
--
ALTER TABLE `jenis_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis_konten`
--
ALTER TABLE `jenis_konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_ibfk_2` FOREIGN KEY (`jenis_artikel`) REFERENCES `jenis_artikel` (`id`);

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
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`level_user`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
