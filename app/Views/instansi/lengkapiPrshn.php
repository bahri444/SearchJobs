<?= $this->extend('layout/template'); ?>
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
                    <form action="<?= base_url('instansi/lengkapiPrshn/tambah') ?>" method="post" enctype="multipart/form-data">
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
                                    <label for="nm_prshn">Nama Perusahaan</label>
                                    <input type="text" name="nm_prshn" value="<?= old('nm_prshn') ?>" class="form-control">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nm_prshn'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Perusahaan</label>
                                    <input type="text" name="alamat" value="<?= old('alamat') ?>" class="form-control">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('alamat'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tlp">Telepon</label>
                                    <input type="text" name="tlp" value="<?= old('tlp') ?>" class="form-control">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tlp'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" name="logo" value="<?= old('logo') ?>" class="form-control">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('logo'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="srt_izin">Surat Izin</label>
                                    <input type="file" name="srt_izin" value="<?= old('srt_izin') ?>" class="form-control">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('srt_izin'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="strk_organis">Struktur Organisasi</label>
                                    <input type="file" name="strk_organis" value="<?= old('strk_organis') ?>" class="form-control">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('strk_organis'); ?>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-info">Lengkapi</button>
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