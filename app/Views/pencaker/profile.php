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
                        <?php if ($session->get('user_id') == $val->user_id) : ?>
                            <?php if ($val->stts_akun == 'pending') : ?>
                                <div class="text-center">
                                    <h5 class="btn btn-warning">
                                        <strong>
                                            akun anda masih menunggu persetujuan
                                        </strong>
                                    </h5>
                                </div>
                            <?php elseif ($val->stts_akun == 'valid') : ?>
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
                                                <td><?= ': ', $val->username ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nomor Pencaker</th>
                                                <td><?= ': ', $val->id_pencaker ?></td>
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
                                            <tr>
                                                <th>Status Akun</th>
                                                <td class="btn btn-success ml-3"><?= $val->stts_akun ?></td>
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
                            <?php else : ?>
                                <div class="text-center">
                                    <h5 class="btn btn-danger">
                                        <b>anda belum melengkapi data</b>
                                    </h5>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- tabel status lamaran -->
        <div class="page-content__header">
            <div class="row mx-auto col-lg-12">
                <div class="col">
                    <h3 class="page-content__header-heading text-center">Status Lamaran Anda</h3>
                </div>
                <div class="table-responsive">
                    <div class="m-datatable">
                        <table id="datatable" class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th><b>No</b></th>
                                    <th><b>Nama Perusahaan</b></th>
                                    <th><b>Nama Pekerjaan</b></th>
                                    <th><b>Status Lamaran</b></th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php $i = 1; ?>
                                <?php foreach ($pencaker_join as $pnc) : ?>
                                    <?php if ($session->get('user_id') == $pnc->id_pencaker) : ?>
                                        <?php foreach ($lamaran as $lm) : ?>
                                            <?php if ($pnc->id_pencaker == $lm['id_pencaker']) : ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $lm['nm_prshn'] ?></td>
                                                    <td><?= $lm['judul_loker'] ?></td>
                                                    <?php if ($lm['respons'] == 'pending') : ?>
                                                        <td class="text-warning"><b><?= $lm['respons'] ?></b></td>
                                                    <?php elseif ($lm['respons'] == 'abaikan') : ?>
                                                        <td class="text-danger"><b><?= $lm['respons'] ?></b></td>
                                                    <?php elseif ($lm['respons'] == 'panggil') : ?>
                                                        <td class="text-info"><b><?= $lm['respons'] ?></b></td>
                                                    <?php endif; ?>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end-tabel status lamaran -->
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<!-- kelas bootstrap untuk membuat garis "border border-info" -->
<?= $this->endSection(); ?>