<?php
$sess = $this->session->userdata('token');
$is_login = false;
if ($sess !== null) {
  if ($sess['level'] == "3") {
    $is_login = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/frontend/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/css/custom.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/frontend/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?= base_url('home-page') ?>"><span>KECAMATAN</span> JAKABARING</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?= base_url() ?>assets/frontend/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="<?= base_url('home-page') ?>" class="active">Beranda</a></li>

          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url('visi-page') ?>">Visi dan Misi</a></li>
              <li><a href="<?= base_url('struktur-page') ?>">Struktur Organisasi</a></li>
              <li><a href="<?= base_url('sejarah-page') ?>">Sejarah</a></li>
              <li><a href="<?= base_url('kontak-page') ?>">Kontak</a></li>
            </ul>
          </li>

          <li><a href="<?= base_url('artikel-page') ?>">Berita</a></li>
          <li><a href="<?= base_url('galeri-page') ?>">Galeri</a></li>
          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php foreach ($layanan as $i): ?>
                <li><a href="<?= base_url('layanan-page?id=') . $i->id . '&name=' . $i->nama_layanan; ?>"><?= $i->nama_layanan; ?></a></li>
              <?php endforeach; ?>
              <!-- <li><a href="about.html">Penerbitan Surat Pengantar Kartu Keluarga (KK)</a></li>
              <li><a href="about.html">Penerbitan Surat Pengantar e-KTP</a></li>
              <li><a href="team.html">Penerbitan Surat Keterangan Kematian</a></li>
              <li><a href="team.html">Penerbitan Surat Keterangan Kelahiran</a></li> -->
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
            </ul>
          </li>
          <?php if ($is_login) { ?>
            <li><a href="<?= base_url('history-page') ?>">History Permohonan</a></li>
            <li class="dropdown"><a href="#"><span>HALO, <?= $sess['nama'] ?></span> <i class="bi bi-chevron-down"></i></a>
              <ul>
              <li><a href="<?= base_url('logout') ?>">Logout</a></li>
              </ul>
            </li>
          <?php } else { ?>
            <li><a href="<?= base_url('login') ?>">Login</a></li>
          <?php } ?>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php if (!$is_login) { ?>
        <div class="header-social-links d-flex">
          <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
        </div>
      <?php } ?>
    </div>
  </header><!-- End Header -->