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
                    <table class="table table-bordered table-striped">
                        <thead style="font-weight: bolder;">
                            <tr>
                                <td>Tanggal Pengajuan</td>
                                <td>Nama</td>
                                <td>Layanan</td>
                                <td>Status</td>
                                <td>Berkas</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach ($pengajuan as $i) { ?>
                                <tr>
                                    <td><?= date("d-m-Y", strtotime($i->tanggal)); ?></td>
                                    <td><?= $i->nama_pemohon ?></td>
                                    <td><?= $i->nama_layanan ?></td>
                                    <td>
                                        <?php
                                        if ($i->status == "2") {
                                            echo '<span class="badge badge-warning badge-lg badge-rounded">Menunggu Verifikasi Admin</span>';
                                        } else if ($i->status == "3") {
                                            echo '<span class="badge badge-info badge-lg badge-rounded">Menunggu Verifikasi Camat</span>';
                                        } else if ($i->status == "0") {
                                            echo '<span class="badge badge-danger badge-lg badge-rounded">Pengajuan Ditolak</span>';
                                        } else if ($i->status == "1") {
                                            echo '<span class="badge badge-success badge-lg badge-rounded">Pengajuan Selesai</span>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                    <?php if($i->status == "1"){ ?>
                                    <a target="_blank" href="<?= base_url('soft-file/') . $i->id; ?>" class="badge badge-primary badge-lg badge-rounded" title="DOWNLOAD DOKUMEN">Download</a>
                                    <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot style="font-weight: bolder;">
                            <tr>
                                <td>Tanggal Pengajuan</td>
                                <td>Nama</td>
                                <td>Layanan</td>
                                <td>Status</td>
                                <td>Berkas</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->