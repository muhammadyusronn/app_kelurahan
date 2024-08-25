<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title"><?= $title ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php"><i class="fa fa-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item"><?= $title ?></li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <?php echo $this->session->flashdata('msg'); ?>
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title"><?= $title ?></div>
            </div>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover table-responsive" id="example-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Layanan</th>
                            <th>Nama Pemohon</th>
                            <th>Kontak</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Layanan</th>
                            <th>Nama Pemohon</th>
                            <th>Kontak</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($layanan as $i) : ?>
                            <tr>
                                <td><?= $i->nama_layanan; ?></td>
                                <td><?= $i->nama_pemohon; ?></td>
                                <td><?= $i->kontak; ?></td>
                                <td>
                                    <?php
                                    if ($i->status == "2") {
                                        echo '<span class="badge badge-warning">Menunggu Verifikasi Berkas</span>';
                                    } else if ($i->status == "3") {
                                        echo '<span class="badge badge-info">Menunggu Approval Camat</span>';
                                    } else if ($i->status == "0") {
                                        echo '<span class="badge badge-warning">Pengajuan Ditolak</span>';
                                    } else if ($i->status == "1") {
                                        echo '<span class="badge badge-success">Pengajuan Selesai</span>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('layanan/detail/') . $i->id; ?>" class="btn btn-info" title="DETAIL"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>