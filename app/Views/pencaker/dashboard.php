<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php $session = \Config\Services::session() ?>
// content ISI
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

            <!-- modal-tambah data-->
            <?php foreach ($lokersJoin as $row) : ?>
                <div id="modalLamar<?= $row['id_loker'] ?>" class="modal fade custom-modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="ua-icon-modal-close"></span>
                        </button>
                        <form action="<?= base_url('/pencaker/dashboard/tambah'); ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="modal-content">
                                <div class="mt-2">
                                    <div class="container-fluid">
                                        <div class="col-sm">
                                            <div>
                                                <h2 class="page-content__header-heading text-center">Lamar Pekerjaan</h2>
                                            </div>
                                            <div class="form-group">
                                                <label for="id_pencaker">Nama Pencaker</label>
                                                <select name="id_pencaker" class="form-select form-control form-control-md" aria-label="Default select example">
                                                    <?php foreach ($pnckr as $r) : ?>
                                                        <option selected value="<?= $r['id_pencaker'] ?>"><?= $r['id_pencaker'], ':', $r['nm_lkp'], ',', $r['user_id'], ':', session()->get('username') ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="id_loker">Nama Lowongan</label>
                                                <select name="id_loker" class="form-select form-control form-control-md" aria-label="Default select example">
                                                    <option selected value="<?= $row['id_loker'] ?>"><?= $row['judul_loker'] ?></option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="berkas">Berkas</label>
                                                <input type="file" name="berkas" placeholder="tanggal upload" class="form-control form-control-md" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tgl_lamar">Tanggal Melamar</label>
                                                <input type="date" name="tgl_lamar" placeholder="posisi atau kedudukan" class="form-control form-control-md" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="d-flex justify-content-center">
                                                    <div class="justify-content-end mr-5">
                                                        <a href="<?= base_url('/pencaker/dahboard') ?>" class="btn btn-warning">Cancel</a>
                                                    </div>
                                                    <div class="justify-content-start ml-5">
                                                        <button type="submit" class="btn btn-info">Tambah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- end-modal tambah data -->

            <!-- read data loker -->
            <div>
                <h2 class="page-content__header-heading text-center">Lowongan Pekerjaan Bidang</h2>
                <div class="page-content__header-description mt-2 text-center">Selamat datang kembali, <?= session()->get('username') ?></div>
                <div class="row ml-2 mr-2 mt-3">
                    <?php foreach ($lokersJoin as $row) : ?>
                        <div class="main-container">
                            <div class="col-lg-12 col-md-6">
                                <!-- read data loker -->
                                <h3 class="text-center"><b><?= $row['judul_loker'] ?></b></h3>
                                <table>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mt-2 d-flex justify-content-center">
                                                <img width="150px" height="150px" src="<?= base_url() ?>/img2/<?= $row['logo']; ?>" alt="not found">
                                            </div>
                                        </div>
                                    </div>
                                    <tr>
                                        <th>Nama Kategori</th>
                                        <td><?= ': ', $row['nm_ktgr'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Perusahaan</th>
                                        <td><?= ': ', $row['nm_prshn'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Posisi</th>
                                        <td><?= ': ', $row['posisi'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Syarat Pendidikan</th>
                                        <td><?= ': ', $row['syrt_pend'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td><?= ': ', $row['detail_loker'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tgl Buka</th>
                                        <td><?= ': ', $row['tgl_buka'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tgl Tutup</th>
                                        <td><?= ': ', $row['tgl_tutup'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Di Posting</th>
                                        <td><?= ': ', $row['created_at'] ?></td>
                                    </tr>
                                </table>
                                <!-- tombol Lamar Pekerjaan -->
                                <div class="form-group  d-flex justify-content-center mt-3">
                                    <div class=" d-flex justify-content-center">
                                        <!-- tombol tambah data-->
                                        <div class="row">
                                            <div class="col-sm mr-1 ml-1">
                                                <button type="button" class="btn btn-success btn-sm-2" data-toggle="modal" data-target="#modalLamar<?= $row['id_loker'] ?>">
                                                    Lamar Sekarang
                                                </button>
                                            </div>
                                        </div>
                                        <!-- end-tombol tambah data -->

                                        <!-- <a href=" base_url('pencaker/lamarKerja/' . ) ?>" class="btn btn-success btn-sm-2 ">
                                            <span>Lamar Sekarang</span>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>