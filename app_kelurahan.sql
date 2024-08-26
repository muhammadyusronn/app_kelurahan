-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 26 Agu 2024 pada 17.00
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
(2, 'Ratu Dewa Lantik Puluhan RT RW di Jakabaring, Upayakan Anggaran Naik', 'Palembang - Sebanyak 68 Rukun Tetangga (RT) dan 19 Rukun Warga (RW) yang baru dilantik di Kecamatan Jakabaring, mendapatkan arahan dari Sekertaris Daerah (Sekda) kota Palembang Ratu Dewa. \n\n \n\nArahan tersebut, mengenai bagaimana cara mereka memberikan edukasi kepada masyarakat untuk tetap menjaga lingkungan sekitar untuk tetap bersih.\n\nHal ini dibernarkanya usai melakukan pelantikan RT RW di kulurahan 15 ulu, bahwa fungsi RT dilingkungan masyarakat sangat berperan penting seperti mendamaikan warga yang bermasalah serta mendukung kegiatan pemerintah.\n\n \n\n\"Maka dari itu dalam menjalankan tugasnya, Pemkot Palembang sangat mengapresiasi sekali mereka yang telah berperan menyukseskan program Pemerintah sehingga berjalan dengan lancar.\n\n \n\nSelain itu juga kami telah membahas dan mengusulkan masalah kenaikan anggaran RT, karena sudah lama tidak naik. Selain itu juga pembahasan ini sudah di bawa ke  DPR dan Badan Pengawasan Keuangan dan Pembangunan (BPKP) untuk dipertimbangkan,\"jelasnya selasa (23/7).\n\n \n\nIa berharap agar kinerja RT dan RW bisa lebih produktif dalam memberikan edukasi serta pembelajaran kepada masyarakat untuk hidup bersih.\n\n\"Saya mengajak mereka untuk bekerja dengan sepenuh hati, sehingga keluhan dan aspirasi masyarakat yang ada dilingkungan sekitar bisa dijalankan,\" tutupnya.', '2024-01-01 15:57:28', 1, 1, 'IMG_20240723_WA_0164_180b3314e2.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas_pengajuan`
--

CREATE TABLE `berkas_pengajuan` (
  `id` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `id_persyaratan` int(11) NOT NULL,
  `value` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berkas_pengajuan`
--

INSERT INTO `berkas_pengajuan` (`id`, `id_pengajuan`, `id_persyaratan`, `value`) VALUES
(75, 1, 1, 'Muhammad Yusron Hartoyo'),
(76, 1, 2, 'Palembang, 17 - Agustus - 2000'),
(77, 1, 5, '123'),
(78, 1, 6, '321'),
(79, 1, 3, 'jakpus'),
(80, 1, 4, '082186427595'),
(81, 1, 9, 'DATA_DUMMY.pdf'),
(82, 1, 8, 'DATA_DUMMY1.pdf'),
(83, 1, 11, 'DATA_DUMMY2.pdf'),
(84, 1, 26, 'DATA_DUMMY3.pdf'),
(85, 1, 22, 'DATA_DUMMY4.pdf'),
(86, 1, 23, 'DATA_DUMMY5.pdf'),
(87, 1, 24, 'DATA_DUMMY6.pdf'),
(88, 1, 25, 'DATA_DUMMY7.pdf'),
(89, 2, 1, 'Adit'),
(90, 2, 2, 'Jakarta, 20-Januari-1998'),
(91, 2, 5, '345'),
(92, 2, 6, '543'),
(93, 2, 3, 'Jakarta'),
(94, 2, 4, '6282186427595'),
(95, 2, 10, 'DATA_DUMMY.pdf'),
(96, 2, 28, 'DATA_DUMMY1.pdf'),
(97, 2, 8, 'DATA_DUMMY2.pdf'),
(98, 2, 22, 'DATA_DUMMY3.pdf'),
(99, 4, 1, 'Muhammad Yusron Hartoyo'),
(100, 4, 2, 'Palembang, 17 - Agustus - 2000'),
(101, 4, 3, 'jalan angkatan 45'),
(102, 4, 5, '123'),
(103, 4, 6, '321'),
(104, 4, 4, '6282186427595'),
(105, 4, 10, 'DATA_DUMMY.pdf'),
(106, 4, 28, 'DATA_DUMMY1.pdf'),
(107, 4, 27, 'DATA_DUMMY2.pdf'),
(108, 5, 1, 'Muhammad Yusron Hartoyo'),
(109, 5, 2, 'Jakarta, 17-08-1999'),
(110, 5, 30, 'Islam / Indonesia'),
(111, 5, 5, '123'),
(112, 5, 31, 'Swasta'),
(113, 5, 3, 'jalan angkatan 45'),
(114, 5, 32, 'Software House'),
(115, 5, 33, 'Jalan Angkatan 45'),
(116, 5, 10, 'DATA_DUMMY.pdf'),
(117, 5, 28, 'DATA_DUMMY1.pdf'),
(118, 5, 4, '6282186427595');

-- --------------------------------------------------------

--
-- Struktur dari tabel `field_persyaratan`
--

CREATE TABLE `field_persyaratan` (
  `id` int(11) NOT NULL,
  `nama_field` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `field_persyaratan`
--

INSERT INTO `field_persyaratan` (`id`, `nama_field`, `code`) VALUES
(1, 'Nama Pemohon', 'nama_pemohon'),
(2, 'Tempat Tanggal Lahir', 'ttl'),
(3, 'Alamat', 'alamat'),
(4, 'Nomor HP', 'nomor_hp'),
(5, 'Nomor Identitas Kependudukan', 'nik'),
(6, 'Nomor Kartu Keluarga', 'no_kk'),
(7, 'Tanggal Kematian', 'tanggal_kematian'),
(8, 'Pengantar RT', 'pengantar_rt'),
(9, 'Kartu Keluarga', 'kk'),
(10, 'Berkas Kartu Tanda Penduduk', 'ktp'),
(11, 'Berkas Surat Tanah / atas Hak Tanah Usaha', 'berkas_surat_tanah'),
(22, 'Berkas Surat Permohonan Bermaterai Rp. 10.000', 'berkas_permohonan'),
(23, 'Berkas Surat Pernyataan Tanah Tidak Sengketa Bermateri Rp. 10.000 diketahui RT setempat', 'pernyataan_spht'),
(24, 'Berkas Surat Pernyataan Waris', 'surat_waris'),
(25, 'Berkas Surat Keterangan Kehilangan (Bila surat tanah hilang)', 'surat_kehilangan'),
(26, 'Berkas Bukti Pembayaran PBB Tahun Terakhir', 'pembayaran_pbb'),
(27, 'Berkas Surat Pernyataan Ahli Waris dan Kuasa dari Lurah', 'surat_ahli_waris'),
(28, 'Berkas Kartu Keluarga', 'berkas_kk'),
(29, 'Berkas Surat Keterangan Kematian', 'surat_kematian'),
(30, 'Agama / Kewarganegaraan', 'agama'),
(31, 'Pekerjaan', 'pekerjaan'),
(32, 'Jenis Usaha', 'jenis_usaha'),
(33, 'Alamat Usaha', 'alamat_usaha');

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
(12, 'IMG_1635.jpg', '2024-08-23 16:58:10', 1, 'Memperingati HUT RI', 'filter-internal'),
(13, 'IMG_1632.jpg', '2024-08-23 16:59:03', 1, 'Memperingati HUT RI', 'filter-internal'),
(14, 'IMG_1633.jpg', '2024-08-23 16:59:12', 1, 'Memperingati HUT RI', 'filter-internal'),
(15, 'IMG_1625.jpg', '2024-08-23 16:59:23', 1, 'Kegiatan Gotong Royonh', 'filter-eksternal'),
(16, 'IMG_1626.jpg', '2024-08-23 16:59:32', 1, 'Kegiatan Gotong Royonh', 'filter-eksternal'),
(17, 'IMG_1624.jpg', '2024-08-23 16:59:57', 1, 'Kegiatan Gotong Royonh', 'filter-eksternal');

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
(3, 'Tentang', 'Ini adalah jenis konten utk kategori profile dan sejarah sekolah'),
(6, 'Sejarah', 'Ini adalah Jenis Konten Sejarah');

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
(10, 3, 'Profil Kecamatan Jakabaring', '<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.</p>', '2023-05-11 11:37:22', 1, 1, 'smp.jpg'),
(11, 1, 'Visi dan Misi Kecamatan Jakabaring', '<p><strong>V I S I </strong></p>\r\n<p>Terwujudnya Kecamatan terbaik dan membanggakan dalam pelayanan.</p>\r\n<p><strong>M I S I</strong></p>\r\n<ol>\r\n<li>Meningkatkan kualitas pelayanan (dengan cara menerapkan proses pelayanan yang aktif, cepat, efisien, ramah, ikhlas dan akuntable</li>\r\n<li>Meningkatkan profesionalisme aparatur (menciptakan kepercayaan masyarakat terhadap operator penyelenggara pelayanan publik)</li>\r\n<li>Menyediakan sarana dan prasarana yang memadai untuk menciptakan kenyamanan dalam pelayanan masyarakat</li>\r\n<li>Terpenuhnya pelayanan terhadap masyarakat</li>\r\n<li>Terwujudnya kinerja aparatur yang baik</li>\r\n</ol>', '2023-05-11 11:40:07', 1, 1, 'visi-dan-misi.jpeg'),
(12, 2, 'Struktur Organisasi Kecamatan Jakabaring', '<p>Lorem issum</p>', '2023-05-11 11:54:09', 1, 1, 'struktur_organisasi_kecamatan_jakabaring.jpeg'),
(13, 6, 'Sejarah Kecamatan Jakabaring', '<p>Jakabaring adalah sebuah kecamatan di Kota Palembang Provinsi  Sumatera Selatan, Indonesia. Pada tahun 2016 kecamatan ini resmi terbentuk dari Kecamatan Seberang Ulu I. Sejarah berdirinya Kecamatan Jakabaring dapat dihubungkan dengan perkembangan kota Palembang secara umum yang sebelumnya Jakabaring merupakan daerah yang dikenal sebagai Kawasan pemukiman dan pertanian. Seiring dengan perkembangan di Kecamatan tersebut diirngi dengan adanya tempat stadion olahraga kelas Internasional Jakabaring Sport City yang pernah digunakan pada ajang perhelatan olahraga internasional seperti SEA Games ke-26 tahun 2011, Islamic Solidarity Games ke-3 tahun 2013, dan Asian Games ke-18 tahun 2018.  Jakabaring terdiri dari 5 Kelurahan yaitu 8 Ulu, 9/10 Ulu, 15 Ulu, Sila Beranti dan Tuan Kentang, dengan jumlah masyarakat yang tercatat pada tahun 2021 berjumlah 90.942 Jiwa</p>', '2024-01-09 13:00:43', 1, 1, 'IMG_1635.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `nama_layanan` varchar(100) NOT NULL,
  `deskripsi_layanan` text NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id`, `nama_layanan`, `deskripsi_layanan`, `is_active`) VALUES
(1, 'Pelayanan Pembuatan Surat Pengakuan Hak Tanah', 'Pelayanan Pembuatan Surat Pengakuan Hak Tanah', 1),
(2, 'Pelayanan Pembuatan Surat Ahli Waris dan Kuasa Waris', 'Pelayanan Pembuatan Surat Ahli Waris dan Kuasa Waris', 1),
(3, 'Pelayanan Legalisir Berkas Waris', 'Pelayanan Legalisir Berkas Waris', 1),
(4, 'Pelayanan Penerbitan Surat Keterangan Domisili Usaha', 'Pelayanan Penerbitan Surat Keterangan Domisili Usaha', 1),
(5, 'Pelayanan Peminjaman Mobil Jenazah', 'Pelayanan Peminjaman Mobil Jenazah', 1);

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
(2, 'Camat'),
(3, 'Pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  `verified_by` int(11) DEFAULT NULL,
  `verified_date` datetime DEFAULT NULL,
  `id_layanan` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_pemohon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `tanggal`, `nama_pemohon`, `kontak`, `status`, `verified_by`, `verified_date`, `id_layanan`, `deskripsi`, `id_pemohon`) VALUES
(1, '2024-08-25', 'Muhammad Yusron Hartoyo', '6282186427595', 1, 22222, '2024-08-25 11:25:59', 1, 'ACC', 19),
(2, '2024-08-25', 'Adit', '6282186427595', 0, 11111, '2024-08-26 16:25:48', 5, 'Berkas Tidak Lengkap', 21),
(4, '2024-08-26', 'Muhammad Yusron Hartoyo', '6282186427595', 0, 22222, '2024-08-26 16:58:24', 3, 'Berkas tidak lengkap', 19),
(5, '2024-08-26', 'Muhammad Yusron Hartoyo', '6282186427595', 1, 22222, '2024-08-26 16:58:30', 4, 'Berkas Sudah Lengkap', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratan_layanan`
--

CREATE TABLE `persyaratan_layanan` (
  `id` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `id_persyaratan` int(11) NOT NULL,
  `is_mandatory` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `persyaratan_layanan`
--

INSERT INTO `persyaratan_layanan` (`id`, `id_layanan`, `id_persyaratan`, `is_mandatory`, `type`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 2, 1, 1),
(3, 1, 5, 1, 1),
(4, 1, 6, 1, 1),
(5, 1, 3, 1, 1),
(6, 1, 4, 1, 1),
(7, 1, 9, 1, 2),
(8, 1, 8, 1, 2),
(9, 1, 11, 1, 2),
(56, 1, 26, 1, 2),
(57, 1, 22, 1, 2),
(58, 1, 23, 1, 2),
(59, 1, 24, 0, 2),
(60, 1, 25, 0, 2),
(61, 2, 1, 1, 1),
(62, 2, 2, 1, 1),
(63, 2, 3, 1, 1),
(64, 2, 4, 1, 1),
(65, 2, 6, 1, 1),
(66, 2, 8, 1, 2),
(67, 2, 27, 1, 2),
(68, 2, 10, 1, 2),
(69, 2, 28, 1, 2),
(70, 2, 29, 1, 2),
(71, 2, 26, 1, 2),
(72, 5, 1, 1, 1),
(73, 5, 2, 1, 1),
(74, 5, 5, 1, 1),
(75, 5, 6, 1, 1),
(76, 5, 3, 1, 1),
(77, 5, 4, 1, 1),
(78, 5, 10, 1, 2),
(79, 5, 28, 1, 2),
(80, 5, 8, 1, 2),
(81, 5, 22, 1, 2),
(102, 3, 1, 1, 1),
(103, 3, 2, 1, 1),
(104, 3, 3, 1, 1),
(105, 3, 5, 1, 1),
(106, 3, 6, 1, 1),
(107, 3, 4, 1, 1),
(108, 3, 10, 1, 2),
(109, 3, 28, 1, 2),
(110, 3, 27, 1, 2),
(111, 4, 1, 1, 1),
(112, 4, 2, 1, 1),
(113, 4, 30, 1, 1),
(114, 4, 5, 1, 1),
(115, 4, 31, 1, 1),
(116, 4, 3, 1, 1),
(117, 4, 32, 1, 1),
(118, 4, 33, 1, 1),
(119, 4, 10, 1, 2),
(120, 4, 28, 1, 2),
(121, 4, 4, 1, 1);

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
(1, '11111', 'Admin', '081299929922', '$2y$10$i6LAb9xDh4G.pgVZ.cGknOUtRiPvK5SAW8SeMvAnICqKvnejunsQS', '2024-08-26 09:09:47', 1, ''),
(2, '22222', 'Drs. Rachmat Maulana', '082189299222', '$2y$10$bMYspn86xs5Syrp9uclhu.WnCGUm9ZOhq2QBKaS8fWZGsxQro3aoW', '2024-08-26 09:55:42', 2, ''),
(19, '123', 'Muhammad Yusron Hartoyo', '6282186427595', '$2y$10$k.BKGsde17BHQ3xP9GIASu0Z3S955a5.L0BQve6wpF1hUBlv1NXay', '2024-08-26 09:47:58', 3, '123'),
(21, '321', 'Adit', '6282186427595', '$2y$10$aAA2nqSwJuAEykHlBtdb4uN6nKNRgeeHO/D/mMCUV4AhsfuOD/b7e', '2024-08-26 14:14:11', 3, '321'),
(22, '33333', 'Staff', '08128222121', '$2y$10$C0cs4dl.yDy5Zib4KStJVOtah3cEi/oQ/ljU2kIlzEhpPEMKisPtO', '2024-08-26 13:49:49', 1, '33333');

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
-- Indeks untuk tabel `berkas_pengajuan`
--
ALTER TABLE `berkas_pengajuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengajuan` (`id_pengajuan`),
  ADD KEY `id_persyaratan` (`id_persyaratan`);

--
-- Indeks untuk tabel `field_persyaratan`
--
ALTER TABLE `field_persyaratan`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_layanan` (`id_layanan`),
  ADD KEY `id_pemohon` (`id_pemohon`);

--
-- Indeks untuk tabel `persyaratan_layanan`
--
ALTER TABLE `persyaratan_layanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_layanan` (`id_layanan`),
  ADD KEY `id_persyaratan` (`id_persyaratan`);

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
-- AUTO_INCREMENT untuk tabel `berkas_pengajuan`
--
ALTER TABLE `berkas_pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT untuk tabel `field_persyaratan`
--
ALTER TABLE `field_persyaratan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `jenis_artikel`
--
ALTER TABLE `jenis_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis_konten`
--
ALTER TABLE `jenis_konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `persyaratan_layanan`
--
ALTER TABLE `persyaratan_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
-- Ketidakleluasaan untuk tabel `berkas_pengajuan`
--
ALTER TABLE `berkas_pengajuan`
  ADD CONSTRAINT `berkas_pengajuan_ibfk_1` FOREIGN KEY (`id_pengajuan`) REFERENCES `pengajuan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `berkas_pengajuan_ibfk_2` FOREIGN KEY (`id_persyaratan`) REFERENCES `field_persyaratan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Ketidakleluasaan untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `pengajuan_ibfk_1` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuan_ibfk_2` FOREIGN KEY (`id_pemohon`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `persyaratan_layanan`
--
ALTER TABLE `persyaratan_layanan`
  ADD CONSTRAINT `persyaratan_layanan_ibfk_1` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persyaratan_layanan_ibfk_2` FOREIGN KEY (`id_persyaratan`) REFERENCES `field_persyaratan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`level_user`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
