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
            <form action="" method="post" role="form" class="php-email-form">
                <?php foreach($persyaratan_layanan as $i): ?>
                <div class="form-group mt-3">
                    <label><?= $i->nama_field; ?></label>
                    <?php if($i->type == '1') { ?>
                        <input type="text" class="form-control" name="<?= $i->code?>" id="<?= $i->code ?>" placeholder="<?= $i->nama_field ?>" <?= ($i->is_mandatory == '1') ? 'required' : ''?>>
                    <?php }else if($i->type == "2"){ ?>
                        <input type="file" name="subject" id="subject" placeholder="Subject" required>
                    <?php } ?>
                </div>
              <?php endforeach; ?>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->