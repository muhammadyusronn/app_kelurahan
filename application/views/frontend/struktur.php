<div id="fh5co-about">
    <div class="container">
        <div class="col-md-12 animate-box">
            <h2><?= isset($konten) ? $konten[0]->judul : "Undefined" ?></h2>
            <p><?= isset($konten) ? $konten[0]->isi : "Undefined" ?></p>
        </div>
        <div class="col-md-12">
            <img class="img-responsive" src="<?= base_url() ?>uploads/file-konten/<?= isset($konten) ? $konten[0]->file : "Undefined" ?>" alt="Free HTML5 Bootstrap Template">
        </div>
    </div>
</div>