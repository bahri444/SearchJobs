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

    <!-- modal-edit profile perusahaan -->
    <?php foreach ($join_prs as $row) : ?>
        <div id="modalEdit<?= $row->id_prshn ?>" class="modal fade custom-modal custom-modal-verify-account">
            <div class="modal-dialog" role="document">
                <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="ua-icon-modal-close"></span>
                </button>
                <form action="<?= base_url('/instansi/profilePrshn/edit/' . $row->id_prshn) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="modal-content">
                        <div class="mt-2">
                            <div class="container">
                                <div class="col-sm-50">
                                    <div>
                                        <h2 class="page-content__header-heading text-center">Edit profile</h2>
                                    </div>
                                    <div class="form-group mt-2">
                                        <input type="hidden" value="<?= $row->id_prshn ?>" name="id_pencaker" class="form-control form-control-md" required>
                                        <input type="hidden" value="<?= $row->user_id ?>" name="user_id" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nm_prshn">Nama Perusahaan</label>
                                        <input type="text" value="<?= $row->nm_prshn ?>" name="nm_prshn" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" value="<?= $row->alamat ?>" name="alamat" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tlp">Telepon</label>
                                        <input type="text" value="<?= $row->tlp ?>" name="tlp" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <input type="file" value="<?= $row->logo ?>" name="logo" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="srt_izin">Surat izin</label>
                                        <input type="file" value="<?= $row->srt_izin ?>" name="srt_izin" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="strk_organis">Struktur organisasi</label>
                                        <input type="file" value="<?= $row->strk_organis ?>" name="strk_organis" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-center">
                                            <div class="justify-content-end mr-5">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                            </div>
                                            <div class="justify-content-start ml-5">
                                                <button type="submit" class="btn btn-info">Simpan</button>
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
    <!-- end modal-edit profile perusahaan -->

    <!-- modal-hapus -->
    <?php foreach ($join_prs as $row => $val) : ?>
        <div id="modalHapus<?= $val->id_prshn ?>" class="modal fade custom-modal custom-modal-verify-account">
            <div class="modal-dialog" role="document">
                <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="ua-icon-modal-close"></span>
                </button>
                <div class="modal-content">
                    <div class="mt-2">
                        <div class="container">
                            <div class="col-sm-50">
                                <div class="form-group">
                                    <p class="text-center mt-2">Anda Yakin ingin Menghapus Data Ini?</p>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-center">
                                        <div class="justify-content-end mr-5">
                                            <a href="<?= base_url('instansi/profilePrshn') ?>" class="btn btn-warning">Tidak</a>
                                        </div>
                                        <div class="justify-content-start ml-5">
                                            <a href="<?= base_url('instansi/profilePrshn/hapus/' . $val->id_prshn) ?>" class="btn btn-info">Ya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- end-modal-hapus -->

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
                                    <h4 class="btn btn-warning text-center">Sedang dalam proses persetujuan</h4>
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
                                            <td class="text text-success ml-3"><b><?= ':', $row->stts_prshn ?></b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="col-sm mr-1 mt-3">
                                                    <button type="button" class="btn btn-info btn-sm-2" data-toggle="modal" data-target="#modalEdit<?= $row->id_prshn ?>">
                                                        <span>
                                                            <i class="ua-icon-activity-edit"></i>
                                                            Edit Profile
                                                        </span>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm ml-1 mt-3">
                                                    <button type="button" class="btn btn-danger btn-sm-2" data-toggle="modal" data-target="#modalHapus<?= $row->id_prshn ?>">
                                                        <span>
                                                            <i class="ua-icon-trash"></i>
                                                            Hapus
                                                        </span>
                                                    </button>
                                                </div>
                                            </td>
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