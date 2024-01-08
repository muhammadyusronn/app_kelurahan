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
    <div class="page-content fade-in-up col-lg-8">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Mohon untuk memasukkan data yang valid!</div>
                <div class="ibox-tools">
                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="ibox-body">
                <?php
                if (isset($pengajar)) {
                    $url = base_url('pengajar/update/' . $pengajar[0]->id);
                } else {
                    $url = base_url('pengajar/create');
                }
                ?>
                <form class="form-horizontal" id="form-pengajar" method="post" action="<?= $url ?>" novalidate="novalidate" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Pengajar</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="<?= isset($pengajar) ? $pengajar[0]->nama : '' ?>" name="nama">
                            <input class="form-control" type="hidden" readonly value="<?= isset($pengajar) ? $pengajar[0]->id : '' ?>" name="id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mata Pelajaran</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="<?= isset($pengajar) ? $pengajar[0]->mata_pelajaran : '' ?>" name="mata_pelajaran">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Motto</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="<?= isset($pengajar) ? $pengajar[0]->motto : '' ?>" name="motto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"  name="file_foto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                            <button class="btn btn-info" name="submit" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->