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
                <form class="form-horizontal" id="form-level" method="get" novalidate="novalidate">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Mulai</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="date" value="" id="tanggal_mulai" name="tanggal_mulai">
                        </div>
                        <label class="col-sm-2 col-form-label">Tanggal Selesai</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="date" value="" name="tanggal_selesai" id="tanggal_selesai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="status">
                                <option value="-99" >ALL</option>
                                <option value="0" >Ditolak</option>
                                <option value="1">Selesai</option>
                                <option value="2">Menunggu Verifikasi Berkas</option>
                                <option value="3">Menunggu Approval Camat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                <table class="table table-striped table-bordered table-hover table-responsive" id="report-table" cellspacing="0" width="100%">
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
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            var today = new Date();
            var year = today.getFullYear();
            var month = ("0" + (today.getMonth() + 1)).slice(-2);
            var day = ("0" + today.getDate()).slice(-2);
            var formattedDate = year + '-' + month + '-' + day;

            $('#tanggal_mulai').val(formattedDate);
            $('#tanggal_selesai').val(formattedDate);
        });
    </script>