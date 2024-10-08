  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Kecamatan Jakabaring</h3>
            <p>
              Kantor Camat Jakabaring  Jl. Pangeran Ratu, <br> 15 Ulu, Kecamatan Jakabaring, Kota Palembang, <br>Sumatera Selatan<br>
              <strong>Phone:</strong>088286358320<br>
              <strong>Email:</strong>kecamatanjkbrg@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Link Berguna</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://sumselprov.go.id/">Pemerintah Provinsi Sumsel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://palembang.go.id/">Pemerintah Kota Palembang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://layanan.kominfo.sumselprov.go.id/">Layanan Kominfo Palembang</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
            <?php foreach($layanan as $i): ?>
                <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('layanan-page?id=').$i->id.'&name='.$i->nama_layanan;?>"><?= $i->nama_layanan; ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Created by April</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>assets/frontend/vendor/aos/aos.js"></script>
  <script src="<?=base_url()?>assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets/frontend/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=base_url()?>assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url()?>assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=base_url()?>assets/frontend/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?=base_url()?>assets/frontend/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url()?>assets/frontend/js/main.js"></script>

</body>

</html>