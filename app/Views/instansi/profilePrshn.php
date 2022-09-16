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
                <div class="main-container mt-4">
                    <div class="row ml-2 mr-2">
                        <div class="col">
                            <!-- border border-info -->
                            <?php foreach ($join_prs as $row) : ?>
                                <table>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mt-2 d-flex justify-content-center">
                                                <img width="150px" height="150px" src="<?= base_url() ?>/img/users/<?= $session->get('user_image'); ?>" alt="not found" class="border rounded-circle shadow-none">
                                            </div>
                                        </div>
                                    </div>
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
                                </table>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>