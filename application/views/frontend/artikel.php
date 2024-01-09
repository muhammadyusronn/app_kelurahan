<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Berita</h2>
      <ol>
        <li>Berita</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-8 entries">
        <?php foreach($artikel as $i) : ?>
            <article class="entry">

            <div class="entry-img">
                <img src="<?= base_url('uploads/file-artikel/').$i->file ?>" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
                <a href="<?= base_url('artikel-detail/').$i->id; ?>"><?= $i->judul ?></a>
            </h2>

            <div class="entry-meta">
                <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?= base_url('artikel-detail/').$i->id; ?>"><?= $i->nama ?></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?= base_url('artikel-detail/').$i->id; ?>"><time datetime="<?= date("d/m/Y", strtotime($i->created_at)); ?>"><?= date("d/m/Y", strtotime($i->created_at)); ?></time></a></li>
                </ul>
            </div>

            <div class="entry-content">
                <p>
                <?= substr($i->isi, 0, 100) . '...'; ?>
                </p>
                <div class="read-more">
                <a href="<?= base_url('artikel-detail/').$i->id; ?>">Read More</a>
                </div>
            </div>

            </article><!-- End blog entry -->
        <?php endforeach; ?>

        <div class="blog-pagination">
          <ul class="justify-content-center">
            <li class="active"><a href="#">1</a></li>
            <!-- <li><a href="#">2</a></li> -->
          </ul>
        </div>

      </div><!-- End blog entries list -->

      <div class="col-lg-4">

        <div class="sidebar">

          <!-- <h3 class="sidebar-title">Search</h3>
          <div class="sidebar-item search-form">
            <form action="">
              <input type="text">
              <button type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div> -->
          <!-- End sidebar search formn-->

          <h3 class="sidebar-title">Categories</h3>
          <div class="sidebar-item categories">
            <ul>
              <li><a href="<?= base_url('artikel-page')?>">All</a></li>
              <li><a href="<?= base_url('artikel-page?cat=1')?>">Pengumuman</a></li>
              <li><a href="<?= base_url('artikel-page?cat=2')?>">Berita</a></li>
            </ul>
          </div><!-- End sidebar categories-->

          <h3 class="sidebar-title">Recent Posts</h3>
          <div class="sidebar-item recent-posts">
            <?php foreach($recent_artikel as $i) : ?>
                <div class="post-item clearfix">
                <img src="<?= base_url('uploads/file-artikel/').$i->file ?>" alt="">
                <h4><a href="<?= base_url('artikel-detail/').$i->id; ?>"><?= $i->judul ?></a></h4>
                <time datetime="<?= date("d/m/Y", strtotime($i->created_at)); ?>"><?= date("d/m/Y", strtotime($i->created_at)); ?></time>
                </div>
            <?php endforeach; ?>
          </div><!-- End sidebar recent posts-->
          </div><!-- End sidebar tags-->

        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

    </div>

  </div>
</section><!-- End Blog Section -->

</main><!-- End #main -->