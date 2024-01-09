<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Visi dan Misi</h2>
          <ol>
            <li>Visi dan Misi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <h2 class="entry-title">
                <a><?= isset($konten) ? $konten[0]->judul : "Undefined" ?></a>
              </h2>

              <div class="entry-content">
                <img src="<?= base_url() ?>uploads/file-konten/<?= isset($konten) ? $konten[0]->file : "Undefined" ?>" alt="File Not Found" class="img-fluid">
                <?= isset($konten) ? $konten[0]->isi : "Undefined" ?>
              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->