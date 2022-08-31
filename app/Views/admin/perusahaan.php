<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
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
            <div>
                <h2 class="page-content__header-heading">Data Perusahaan</h2>
            </div>
        </div>

        <!-- modal-info -->
        <?php foreach ($prshn_join as $k => $vals) : ?>
            <div id="modalInfo<?= $vals->id_prshn ?>" class="modal fade custom-modal custom-modal-verify-account">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ua-icon-modal-close"></span>
                    </button>
                    <div class="modal-content">
                        <div class="mt-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <h2 class="page-content__header-heading text-center">Detail Perusahaan</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mt-2 d-flex justify-content-around">
                                            <div>
                                                <img width="200px" height="200px" src="<?= base_url() ?>/img2/<?= $vals->logo; ?>" alt="not found">
                                            </div>
                                            <div>
                                                <img width="200px" height="200px" src="<?= base_url() ?>/img/users/<?= $vals->user_image; ?>" alt="not found">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5 mb-2">
                                    <div class="col mb-4">
                                        <table>
                                            <tr>
                                                <th>Username</th>
                                                <td><?= ': ', $vals->username ?></td>
                                            </tr>
                                            <tr>
                                                <th>Hak akses</th>
                                                <td><?= ': ', $vals->role ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Perusahaan</th>
                                                <td><?= ': ', $vals->nm_prshn ?></td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td><?= ': ', $vals->alamat ?></td>
                                            </tr>
                                            <tr>
                                                <th>Telepon</th>
                                                <td><?= ': ', $vals->tlp ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td><?= ': ', $vals->email ?></td>
                                            </tr>
                                            <tr>
                                                <th>Surat Izin</th>
                                                <td><?= ': ', $vals->srt_izin ?></td>
                                            </tr>
                                            <tr>
                                                <th>Struktur</th>
                                                <td><?= ': ', $vals->strk_organis ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- end-modal-info -->

        <div class="table-responsive">
            <div class="m-datatable">
                <table id="datatable" class="table table-striped">
                    <thead class="text-center">
                        <tr>
                            <th scope="col"><b>No</b></th>
                            <th scope="col"><b>Nama Perusahaan</b></th>
                            <th scope="col"><b>Alamat</b></th>
                            <th scope="col"><b>Email</b></th>
                            <th scope="col"><b>Telepon</b></th>
                            <th scope="col"><b>Logo Perusahaan</b></th>
                            <th scope="col"><b>Surat Izin</b></th>
                            <th scope="col"><b>Struktur</b></th>
                            <th scope="col"><b>Aksi</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($prshn_join as $row) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row->nm_prshn ?></td>
                                <td><?= $row->alamat ?></td>
                                <td><?= $row->email ?></td>
                                <td><?= $row->tlp ?></td>
                                <td><img src="<?= base_url() ?>/img2/<?= $row->logo; ?>" width="100"></td>
                                <td><?= $row->srt_izin ?></td>
                                <td><?= $row->strk_organis ?></td>
                                <td class="d-flex justify-content-center">

                                    <!-- tombol-info data-->
                                    <div class="row">
                                        <div class="col-sm">
                                            <!-- mr-1 -->
                                            <button type="button" class="btn btn-warning btn-sm-2" data-toggle="modal" data-target="#modalInfo<?= $row->id_prshn ?>">
                                                <i class="ua-icon-alert-info"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<?= $this->endSection(); ?>