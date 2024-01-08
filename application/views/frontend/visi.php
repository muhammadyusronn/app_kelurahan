<div id="fh5co-about">
    <div class="container">
        <div class="col-md-6 animate-box">
            <h2><?= isset($konten) ? $konten[0]->judul : "Undefined" ?></h2>
            <p><?= isset($konten) ? $konten[0]->isi : "Undefined" ?></p>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="<?= base_url() ?>uploads/file-konten/<?= isset($konten) ? $konten[0]->file : "Undefined" ?>" alt="File Not Found">
        </div>
    </div>
</div>