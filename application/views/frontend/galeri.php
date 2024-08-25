

<div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-internal">Kegiatan Internal</li>
              <li data-filter=".filter-eksternal">Kegiatan Eksternal</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
		<?php foreach ($galeri as $i) : ?>
			<div class="col-lg-4 col-md-6 portfolio-item <?= $i->filter ?>">
				<img src="<?= base_url() ?>uploads/galeri/<?= $i->file ?>" class="img-fluid" alt="">
				<div class="portfolio-info">
					<h4><?= $i->name ?></h4>
					<a href="<?= base_url() ?>uploads/galeri/<?= $i->file ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $i->name; ?>"><i class="bx bx-search"></i></a>
				</div>
			</div>
			<?php endforeach ?>
          

        </div>

      </div>
    </section><!-- End Portfolio Section -->
  </main><!-- End #main -->

