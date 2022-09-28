<?= $this->extend('layout/template'); ?>
<?= $this->section('content') ?>
<?php $session = \Config\Services::session(); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="page-content__header">
            <div class="mx-auto">
                <!--  class="d-flex justify-content-center" -->
                <h3 class="page-content__header-heading text-center">Profile <?= session()->get('username') ?></h3>
                <!-- content side -->
                <div class="main-container mt-2">
                    <?php foreach ($join_prs as $row) : ?>
                        <?php if ($session->get('user_id') == $row->user_id) : ?>
                            <?php if ($row->stts_prshn == 'pending') : ?>
                                <div class="col">
                                    <h4 class="btn btn-info text-center">Sedang dalam proses persetujuan</h4>
                                </div>
                            <?php elseif ($row->stts_prshn == 'di setujui') : ?>
                                <div class="row ml-1 mr-1 d-inline-block">
                                    <!-- border border-info -->
                                    <div class="col mt-1 mb-1">
                                        <div class="mt-2 d-flex justify-content-center">
                                            <img width="150px" height="150px" src="<?= base_url() ?>/img2/<?= $row->logo ?>" alt="not found" class="border rounded-circle shadow-none">
                                        </div>
                                    </div>
                                    <table>
                                        <tr>
                                            <th>Username</th>
                                            <td><?= ': ', $session->get('username') ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?= ': ', $session->get('email') ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Perusahaan</th>
                                            <td><?= ': ', $row->nm_prshn ?></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td><?= ': ', $row->alamat ?></td>
                                        </tr>
                                        <tr>
                                            <th>Telepon</th>
                                            <td><?= ': ', $row->tlp ?></td>
                                        </tr>
                                        <tr>
                                            <th>Logo</th>
                                            <td><?= ': ', $row->logo ?></td>
                                        </tr>
                                        <tr>
                                            <th>Surat Izin</th>
                                            <td><?= ': ', $row->srt_izin ?></td>
                                        </tr>
                                        <tr>
                                            <th>Struktur Organisasi</th>
                                            <td><?= ': ', $row->strk_organis ?></td>
                                        </tr>
                                        <tr>
                                            <th>Status Perusahaan</th>
                                            <td class="btn btn-success ml-3"><?= $row->stts_prshn ?></td>
                                        </tr>
                                    </table>
                                </div>
                            <?php elseif ($row->stts_prshn == 'belum lengkap') : ?>
                                <div class="col">
                                    <h4 class="btn btn-warning">data kurang lengkap</h4>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>