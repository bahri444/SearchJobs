<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<?php $session = \Config\Services::session(); ?>
<div class="page-content">
    <div class="mt-3 ml-3 mr-3 mb-0">
        <!-- session gagal simpan -->
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('pesan') ?>
            </div>
        <?php endif; ?>

        <!-- session berhasil simpan -->
        <?php if (session()->getFlashdata('pesan2')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan2') ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="container-fluid">
        <div class="page-content__header">
            <div class="mx-auto">
                <div class="main-container mt-5">
                    <div>
                        <h2 class="page-content__header-heading text-center">Lengkapi Data</h2>
                    </div>
                    <form action="<?php base_url('pencaker/lengkapiData/tambah') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="user_id">Username</label>
                                    <select name="user_id" class="form-select form-control form-control-md" aria-label="Default select example">
                                        <option selected value="<?= $session->get('user_id') ?>"><?= $session->get('username') ?></option>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('user_id'); ?>
                                        </div>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nm_lkp">Nama Lengkap</label>
                                    <input type="text" name="nm_lkp" class="form-control" value="<?= old('nm_lkp') ?>" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nm_lkp'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lhr">Tgl Lahir</label>
                                    <input type="date" name="tgl_lhr" class="form-control" value="<?= old('jk') ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('jk'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-Laki" value="Laki-Laki">
                                        <label class="form-check-label" for="inlineRadio1">Pria</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan" value="Perempuan">
                                        <label class="form-check-label" for="inlineRadio2">Wanita</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="usia">Usia</label>
                                    <input type="number" name="usia" class="form-control" value="<?= old('usia') ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('usia'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="<?= old('alamat') ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('alamat'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tlp">Telepon</label>
                                    <input type="text" name="tlp" class="form-control" value="<?= old('tlp') ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tlp'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="peng_ker">Pengalaman Kerja</label>
                                    <textarea type="text" name="peng_ker" class="form-control" id="textarea" placeholder="uraian singkat pengalaman kerja anda" value="<?= old('peng_ker') ?>"></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('peng_ker'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pend_ter">Pendidikan Terakhir</label>
                                    <select name="pend_ter" id="pend_ter" class="form-select form-control form-control-md" aria-label="Default select example">
                                        <option selected>--pilih pendidikan terakhir--</option>
                                        <option value="SMK">SMK/Sederajat</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="bid_keahlian">Bidang Keahlian</label>
                                    <input type="text" name="bid_keahlian" class="form-control" value="<?= old('bid_keahlian') ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('bid_keahlian'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sertifikat">Sertifikat</label>
                                    <input type="file" name="sertifikat" class="form-control" value="<?= ($validation->hasError('sertifikat')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('sertifikat'); ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group mt-4">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <button type="submit" class="btn btn-info">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>