<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?php $session = \Config\Services::session(); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="page-content__header">
            <div class="row mx-auto col-lg-12">
                <div class="col">
                    <h3 class="page-content__header-heading text-center">Profile <?= session()->get('username') ?></h3>
                </div>
                <div class="container mt-4">
                    <?php foreach ($pencaker_join as $val) : ?>
                        <div class="row ml-2 mr-2 d-flex justify-content-between">
                            <div class="col-lg-5 md-5 main-container">
                                <table>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mt-2 d-flex justify-content-center">
                                                <img width="150px" height="150px" src="<?= base_url() ?>/img2/<?= $val->fas_foto ?>" alt="not found" class="border rounded-circle shadow-none">
                                            </div>
                                        </div>
                                    </div>
                                    <tr>
                                        <th>Username</th>
                                        <td><?= ': ', $session->get('username') ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td><?= ': ', $val->nm_lkp ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?= ': ', $session->get('email') ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?= ': ', $val->alamat ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tgl Lahir</th>
                                        <td><?= ': ', $val->tgl_lhr ?></td>
                                    </tr>
                                    <tr>
                                        <th>Telepon</th>
                                        <td><?= ': ', $val->tlp ?></td>
                                    </tr>
                                    <tr>
                                        <th>Pendidikan Terakhir</th>
                                        <td><?= ': ', $val->pend_ter ?></td>
                                    </tr>
                                    <tr>
                                        <th>Bidang Keahlian</th>
                                        <td><?= ': ', $val->bid_keahlian ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-5 md-5 main-container">
                                <h3 class="text-center">
                                    <b>Pengalaman Kerja</b>
                                </h3>
                                <div class="container">
                                    <p><?= $val->peng_ker ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- kelas bootstrap untuk membuat garis "border border-info" -->
<?= $this->endSection(); ?>