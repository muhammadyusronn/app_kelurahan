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
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">
                    <p>Mohon lakukan pengecekan dengan baik!</p>
                </div>
                <div class="ibox-tools">
                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="ibox-body">
                <h5 class="mb-4"><strong>Permohonan <?= $layanan[0]->nama_layanan ?></strong></h5>
                <form class="form-horizontal" id="form-layanan" method="post" action="<?= base_url('layanan/detail/' . $layanan[0]->id) ?>">
                    <?php for ($i = 0; $i < count($layanan); $i++) {
                        if ($layanan[$i]->type == "1") {
                    ?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><?= $layanan[$i]->nama_field ?></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?= $layanan[$i]->value ?>" name="<?= $layanan[$i]->code ?>" readonly>
                                </div>
                            </div>
                        <?php
                        }
                        if ($layanan[$i]->type == "2") { ?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><?= $layanan[$i]->nama_field ?></label>
                                <div class="col-sm-10">
                                    <a href="<?= base_url('uploads/berkas/' . $layanan[$i]->id . '-' . $layanan[$i]->nama_pemohon . '/' . $layanan[$i]->value) ?>" class="btn btn-sm btn-info" target="_blank">DOWNLOAD</a>
                                </div>
                            </div>
                    <?php    }
                    } ?>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status Approval</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status" <?= (($this->session->userdata('token')['level'] == "1" && $layanan[0]->status == "2") || ($this->session->userdata('token')['level'] == "2" && $layanan[0]->status == "3")) ? "" : "disabled" ?>>
                                <option value="<?= ($this->session->userdata('token')['level'] == "1") ? "3" :"1"  ?>" <?= ($layanan[0]->status == "3" || $layanan[0]->status == "1") ? "selected" : "" ?>>TERIMA</option>
                                <option value="0" <?= ($layanan[0]->status == "0") ? "selected" : "" ?>>TOLAK</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="deskripsi" type="text" value="<?= $layanan[0]->deskripsi ?>" name="deskripsi" required <?=  (($this->session->userdata('token')['level'] == "1" && $layanan[0]->status == "2") || ($this->session->userdata('token')['level'] == "2" && $layanan[0]->status == "3")) ? "" : "readonly" ?>>
                        </div>
                    </div>
                    <?php if ($this->session->userdata('token')['level'] == "1") {
                        if ($layanan[0]->status == "2") {  ?>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <button class="btn btn-info" name="submit" type="submit">Submit</button>
                                </div>
                            </div>
                    <?php }
                    } ?>
                    <?php if ($this->session->userdata('token')['level'] == "2") {
                        if ($layanan[0]->status == "3") {  ?>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <button class="btn btn-info" name="submit" type="submit">Submit</button>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </form>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->