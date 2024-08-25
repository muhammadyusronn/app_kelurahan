<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><?= $sub_title ?></h2>
        <ol>
          <li><?= $sub_title ?></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section id="contact" class="contact">
    <div class="container">
      <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <div class="alert alert-info" role="alert">
            <strong>Untuk pengajuan permohonan <?= $sub_title ?>. Anda harus menyiapkan berkas berikut :</strong>
            <ul>
              <?php
              foreach ($persyaratan_layanan as $j) {
                if ($j->type == "2") {
                  echo "<li>" . $j->nama_field . "</li>";
                }
              }
              ?>
            </ul>
            <?php if ($token == null) { ?>
              <strong>Untuk melakukan permohonan atau menggunakan layanan ini, anda harus login terbelih dahulu di <a href="<?= base_url('login') ?>"> link berikut ini</a></strong>
            <?php } ?>
          </div>
          <?php if ($token !== null) { ?>
            <form action="<?= base_url('layanan/create') ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id_layanan" value="<?= $this->input->get('id') ?>">
              <?php foreach ($persyaratan_layanan as $i): ?>
                <div class="form-group mt-3">
                  <label><?= $i->nama_field; ?></label>
                  <?php if ($i->type == '1') { ?>
                    <input type="text" class="form-control" name="<?= $i->code ?>" id="<?= $i->code ?>" placeholder="<?= $i->nama_field ?>" <?= ($i->is_mandatory == '1') ? 'required' : '' ?>>
                  <?php } else if ($i->type == "2") { ?>
                    <input type="file" name="<?= $i->code ?>" id="<?= $i->code ?>" placeholder="Subject" <?= ($i->is_mandatory == '1') ? 'required' : '' ?>>
                  <?php } ?>
                </div>
              <?php endforeach; ?>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <input type="submit" name="submit" class="btn btn-success" value="SUBMIT">
            </form>
          <?php } ?>
        </div>
      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->