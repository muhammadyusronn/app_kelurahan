<div id="fh5co-blog">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Artikel</h2>
                <p>Artikel SMP Negeri 37 Ogan Komering Ulu</p>
            </div>
        </div>
        <div class="row">
            <?php foreach($artikel as $i) : ?>
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-img-holder" style="background-image: url(<?= base_url('uploads/file-artikel/').$i->file ?>);"></a>
                    <div class="blog-text">
                        <h3><a href="<?= base_url('artikel-detail/').$i->id; ?>"><?= $i->judul ?></a></h3>
                        <span class="posted_on"><?= date("d/m/Y", strtotime($i->created_at)); ?></span>
                        <!-- <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span> -->
                        <p><?= substr($i->isi, 0, 100) . '...'; ?></p>
                        <a href="<?= base_url('artikel-detail/').$i->id; ?>" class="btn btn-sm btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>