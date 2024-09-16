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
                <div class="ibox-title"><?= $title ?> - Bulanan</div>
            </div>
            <div class="ibox-body">
                <form class="form-horizontal" id="form-level" method="get" novalidate="novalidate">
                    <input type="hidden" name="report_type" value="monthly" />
                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label for="bulan">Bulan</label>
                            <select class="form-control valBulanM" id="bulan" name="bulan">
                                <?php
                                $months = [
                                    1 => 'January',
                                    2 => 'February',
                                    3 => 'March',
                                    4 => 'April',
                                    5 => 'May',
                                    6 => 'June',
                                    7 => 'July',
                                    8 => 'August',
                                    9 => 'September',
                                    10 => 'October',
                                    11 => 'November',
                                    12 => 'December'
                                ];
                                ?>
                                <?php foreach ($months as $number => $name): ?>
                                    <option value="<?php echo $number; ?>" <?= (isset($_GET["bulan"]) && $_GET["bulan"] == $number  && $_GET["report_type"] == "monthly") ? "selected" : ""; ?>><?php echo $name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="layanan">Layanan</label>
                            <select class="form-control valLayananM" name="layanan" id="layanan">
                                <option value="-99" <?= (isset($_GET["layanan"]) && $_GET["layanan"] == "-99"  && $_GET["report_type"] == "monthly") ? "selected" : ""; ?>>ALL</option>
                                <?php foreach ($kategori_layanan as $l) : ?>
                                    <option value="<?= $l->id ?>" <?= (isset($_GET["layanan"]) && $_GET["layanan"] == $l->id  && $_GET["report_type"] == "monthly") ? "selected" : ""; ?>><?= $l->nama_layanan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="status">Status</label>
                            <select class="form-control valStatusM" name="status" id="status">
                                <option value="-99" <?= (isset($_GET["status"]) && $_GET["status"] == "-99"  && $_GET["report_type"] == "monthly") ? "selected" : ""; ?>>ALL</option>
                                <option value="0" <?= (isset($_GET["status"]) && $_GET["status"] == "0"  && $_GET["report_type"] == "monthly") ? "selected" : ""; ?>>Ditolak</option>
                                <option value="1" <?= (isset($_GET["status"]) && $_GET["status"] == "1"  && $_GET["report_type"] == "monthly") ? "selected" : ""; ?>>Selesai</option>
                                <option value="2" <?= (isset($_GET["status"]) && $_GET["status"] == "2"  && $_GET["report_type"] == "monthly") ? "selected" : ""; ?>>Menunggu Verifikasi Berkas</option>
                                <option value="3" <?= (isset($_GET["status"]) && $_GET["status"] == "3"  && $_GET["report_type"] == "monthly") ? "selected" : ""; ?>>Menunggu Approval Camat</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="tahun">Tahun</label>
                            <select class="form-control valTahunM" name="tahun" id="tahun">
                                <?php $tahun_sekarang = date('Y');
                                // Looping dari tahun sekarang hingga lima tahun ke belakang
                                for ($i = $tahun_sekarang; $i >= ($tahun_sekarang - 5); $i--) { ?>
                                    <option value="<?= $i ?>" <?= (isset($_GET["tahun"]) && $_GET["tahun"] == $i && $_GET["report_type"] == "monthly") ? "selected" : ""; ?>><?= $i ?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                <table class="table table-striped table-bordered table-hover table-responsive report-table-monthly" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Layanan</th>
                            <th>Nama Pemohon</th>
                            <th>Kontak</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tanggal</th>
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
                                <td><?= date("d-m-Y", strtotime($i->tanggal)); ?></td>
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
                                        echo '<span class="badge badge-danger">Pengajuan Ditolak</span>';
                                    } else if ($i->status == "1") {
                                        echo '<span class="badge badge-success">Pengajuan Selesai</span>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('laporan/detail-laporan/') . $i->id; ?>" class="btn btn-xs btn-info" title="DETAIL"><i class="fa fa-eye"></i></a>
                                    <?php if ($i->status == "1") { ?>
                                        <a href="<?= base_url('dokumen/') . $i->id; ?>" class="btn btn-xs btn-success" title="DOWNLOAD DOKUMEN"><i class="fa fa-download"></i></a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                </table>
            </div>
        </div>

        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title"><?= $title ?> - Tahunan</div>
            </div>
            <div class="ibox-body">
                <form class="form-horizontal" id="form-level" method="get" novalidate="novalidate">
                    <input type="hidden" name="report_type" value="yearly" />
                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label for="tahun">Tahun</label>
                            <select class="form-control valTahunY" name="tahun" id="tahun">
                                <?php $tahun_sekarang = date('Y');
                                // Looping dari tahun sekarang hingga lima tahun ke belakang
                                for ($i = $tahun_sekarang; $i >= ($tahun_sekarang - 5); $i--) { ?>
                                    <option value="<?= $i ?>" <?= (isset($_GET["tahun"]) && $_GET["tahun"] == $i && $_GET["report_type"] == "yearly") ? "selected" : ""; ?>><?= $i ?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="layanan">Layanan</label>
                            <select class="form-control valLayananY" name="layanan" id="layanan">
                                <option value="-99" <?= (isset($_GET["layanan"]) && $_GET["layanan"] == "-99"  && $_GET["report_type"] == "yearly") ? "selected" : ""; ?>>ALL</option>
                                <?php foreach ($kategori_layanan as $l) : ?>
                                    <option value="<?= $l->id ?>" <?= (isset($_GET["layanan"]) && $_GET["layanan"] == $l->id && $_GET["report_type"] == "yearly") ? "selected" : ""; ?>><?= $l->nama_layanan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="status">Status</label>
                            <select class="form-control valStatusY" name="status" id="status">
                                <option value="-99" <?= (isset($_GET["status"]) && $_GET["status"] == "-99" && $_GET["report_type"] == "yearly") ? "selected" : ""; ?>>ALL</option>
                                <option value="0" <?= (isset($_GET["status"]) && $_GET["status"] == "0" && $_GET["report_type"] == "yearly") ? "selected" : ""; ?>>Ditolak</option>
                                <option value="1" <?= (isset($_GET["status"]) && $_GET["status"] == "1" && $_GET["report_type"] == "yearly") ? "selected" : ""; ?>>Selesai</option>
                                <option value="2" <?= (isset($_GET["status"]) && $_GET["status"] == "2" && $_GET["report_type"] == "yearly") ? "selected" : ""; ?>>Menunggu Verifikasi Berkas</option>
                                <option value="3" <?= (isset($_GET["status"]) && $_GET["status"] == "3") && $_GET["report_type"] == "yearly" ? "selected" : ""; ?>>Menunggu Approval Camat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                <table class="table table-striped table-bordered table-hover table-responsive report-table-yearly" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Layanan</th>
                            <th>Nama Pemohon</th>
                            <th>Kontak</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tanggal</th>
                            <th>Layanan</th>
                            <th>Nama Pemohon</th>
                            <th>Kontak</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($layanan_tahunan as $i) : ?>
                            <tr>
                                <td><?= date("d-m-Y", strtotime($i->tanggal)); ?></td>
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
                                        echo '<span class="badge badge-danger">Pengajuan Ditolak</span>';
                                    } else if ($i->status == "1") {
                                        echo '<span class="badge badge-success">Pengajuan Selesai</span>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('laporan/detail-laporan/') . $i->id; ?>" class="btn btn-xs btn-info" title="DETAIL"><i class="fa fa-eye"></i></a>
                                    <?php if ($i->status == "1") { ?>
                                        <a href="<?= base_url('dokumen/') . $i->id; ?>" class="btn btn-xs btn-success" title="DOWNLOAD DOKUMEN"><i class="fa fa-download"></i></a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {});
    </script>