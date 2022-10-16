<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
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

    <!-- modal-edit -->
    <?php foreach ($pencaker_join as $row) : ?>
        <div id="modalEdit<?= $row->id_pencaker ?>" class="modal fade custom-modal custom-modal-verify-account">
            <div class="modal-dialog" role="document">
                <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="ua-icon-modal-close"></span>
                </button>
                <form action="<?= base_url('/pencaker/profile/edit/' . $row->id_pencaker) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="modal-content">
                        <div class="mt-2">
                            <div class="container">
                                <div class="col-sm-50">
                                    <div>
                                        <h2 class="page-content__header-heading text-center">Edit profile</h2>
                                    </div>
                                    <div class="form-group mt-2">
                                        <input type="hidden" value="<?= $row->id_pencaker ?>" name="id_pencaker" class="form-control form-control-md" required>
                                        <input type="hidden" value="<?= $row->user_id ?>" name="user_id" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nm_lkp">Nama Lengkap</label>
                                        <input type="text" value="<?= $row->nm_lkp ?>" name="nm_lkp" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fas_foto">Fas Foto</label>
                                        <input type="file" value="<?= $row->fas_foto ?>" name="fas_foto" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lhr">Tgl Lahir</label>
                                        <input type="date" value="<?= $row->tgl_lhr ?>" name="tgl_lhr" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Kelamin</label>
                                        <input type="text" value="<?= $row->jk ?>" name="jk" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="usia">Usia</label>
                                        <input type="number" value="<?= $row->usia ?>" name="usia" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tlp">Telepon</label>
                                        <input type="text" value="<?= $row->tlp ?>" name="tlp" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" value="<?= $row->alamat ?>" name="alamat" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pend_ter">Pendidikan Terakhir</label>
                                        <select name="pend_ter" id="pend_ter" class="form-select form-control form-control-md" aria-label="Default select example">
                                            <option value="<?= $row->pend_ter ?>" selected><?= $row->pend_ter ?></option>
                                            <option value="SMK">SMK/Sederajat</option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="peng_ker">Pengalaman Kerja</label>
                                        <input type="text" value="<?= $row->peng_ker ?>" name="peng_ker" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bid_keahlian">Bidang keahlian</label>
                                        <select name="bid_keahlian" id="bid_keahlian" class="form-select form-control form-control-md" aria-label="Default select example">
                                            <option value="<?= $row->bid_keahlian ?>" selected><?= $row->bid_keahlian ?></option>
                                            <?php foreach ($ktgr as $k) : ?>
                                                <option value="<?= $k['nm_ktgr'] ?>"><?= $k['nm_ktgr'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
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
    <!-- end-modal-edit -->

    <!-- modal-hapus -->
    <?php foreach ($pencaker_join as $row => $val) : ?>
        <div id="modalHapus<?= $val->id_pencaker ?>" class="modal fade custom-modal custom-modal-verify-account">
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
                                            <a href="<?= base_url('pencaker/profile') ?>" class="btn btn-warning">Tidak</a>
                                        </div>
                                        <div class="justify-content-start ml-5">
                                            <a href="<?= base_url('pencaker/profile/hapus/' . $val->id_pencaker) ?>" class="btn btn-info">Ya</a>
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
                                                <td class="text text-success ml-3"><b><?= ': ', $val->stts_akun ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm mr-1 mt-3">
                                                        <button type="button" class="btn btn-info btn-sm-2" data-toggle="modal" data-target="#modalEdit<?= $val->id_pencaker ?>">
                                                            <span>
                                                                <i class="ua-icon-activity-edit"></i>
                                                                Edit Profile
                                                            </span>
                                                        </button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-sm ml-1 mt-3">
                                                        <button type="button" class="btn btn-danger btn-sm-2" data-toggle="modal" data-target="#modalHapus<?= $val->id_pencaker ?>">
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
                                    <?php if ($session->get('user_id') == $pnc->user_id) : ?>
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