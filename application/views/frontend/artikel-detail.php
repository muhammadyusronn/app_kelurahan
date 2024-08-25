<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog Single</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li>Blog Single</li>
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

              <div class="entry-img">
                <img src="<?= base_url() ?>uploads/file-artikel/<?= isset($artikel) ? $artikel[0]->file : "Undefined" ?>" alt="File Not Found" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a><?= isset($artikel) ? $artikel[0]->judul : "Undefined" ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?= isset($artikel) ? $artikel[0]->nama : "Undefined" ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="<?= isset($artikel) ? $artikel[0]->created_at : "Undefined" ?>"><?= isset($artikel) ? $artikel[0]->created_at : "Undefined" ?></time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <?= isset($artikel) ? $artikel[0]->isi : "Undefined" ?>
              </div>

            </article><!-- End blog entry -->

            <!-- <div class="blog-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div> -->
            <!-- End blog author bio -->


          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->