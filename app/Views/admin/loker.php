<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Data Lowongan Kerja</h2>
            </div>
        </div>
        <!-- modal-info data -->
        <?php foreach ($joinAll as $lok => $value) : ?>
            <div id="modalInfo<?= $value['id_loker'] ?>" class="modal fade custom-modal custom-modal-verify-account">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ua-icon-modal-close"></span>
                    </button>
                    <div class="modal-content">
                        <div class="mt-2">
                            <div class="container-fluid">
                                <div class="col-sm">
                                    <div>
                                        <h2 class="page-content__header-heading text-center">Detail lowongan kerja</h2>
                                    </div>
                                    <div class="form-group">
                                        <table>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mt-2 d-flex justify-content-center">
                                                        <img src="<?= base_url() ?>/img2/<?= $value['logo'] ?>" alt="404" width="200px" height="200px">
                                                    </div>
                                                </div>
                                            </div>
                                            <tr>
                                                <th>Nama Kategori</th>
                                                <td><?= ': ', $value['nm_ktgr'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Perusahaan</th>
                                                <td><?= ': ', $value['nm_prshn'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Posisi</th>
                                                <td><?= ': ', $value['posisi'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Syarat Pendidikan</th>
                                                <td><?= ': ', $value['syrt_pend'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Deskripsi</th>
                                                <td><?= ': ', $value['detail_loker'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tgl Buka</th>
                                                <td><?= ': ', $value['tgl_buka'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tgl Tutup</th>
                                                <td><?= ': ', $value['tgl_tutup'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Di Posting</th>
                                                <td><?= ': ', $value['created_at'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <form action="<?= base_url('/admin/loker/validasi/' . $value['id_loker']) ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="form-group">
                                            <div class="d-flex justify-content-center">
                                                <div class="justify-content-start">
                                                    <input type="text" value="valid" name="validasi" hidden>
                                                    <?php if ($value['status'] != 'valid') : ?>
                                                        <button type="submit" class="btn btn-info">Validasi</button>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- end-modal info -->
        <div class="table-responsive">
            <div class="m-datatable">
                <table id="datatable" class="table table-striped">
                    <thead class="text-center">
                        <tr>
                            <th scope="col"><b>No</b></th>
                            <th scope="col"><b>Nama Kategori</b></th>
                            <th scope="col"><b>Nama Perusahaan</b></th>
                            <th scope="col"><b>Logo</b></th>
                            <th scope="col"><b>Nama Loker</b></th>
                            <th scope="col"><b>Posisi</b></th>
                            <th scope="col"><b>Tgl Buka</b></th>
                            <th scope="col"><b>Tgl Tutup</b></th>
                            <th scope="col"><b>Syarat Pendidikan</b></th>
                            <th scope="col"><b>Gaji</b></th>
                            <th scope="col"><b>Detail</b></th>
                            <th scope="col"><b>Status</b></th>
                            <th scope="col"><b>Aksi</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($joinAll as $lok => $value) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $value['nm_ktgr']; ?></td>
                                <td><?= $value['nm_prshn'] ?></td>
                                <td><img src="<?= base_url() ?>/img2/<?= $value['logo']; ?>" alt="404" width="80 px" height="80 px"></td>
                                <td><?= $value['judul_loker'] ?></td>
                                <td><?= $value['posisi'] ?></td>
                                <td><?= $value['tgl_buka'] ?></td>
                                <td><?= $value['tgl_tutup'] ?></td>
                                <td><?= $value['syrt_pend'] ?></td>
                                <td><?= $value['gaji'] ?></td>
                                <td><?= $value['detail_loker'] ?></td>
                                <td><?= $value['status'] ?></td>
                                <td class="d-flex justyify-content-center ">
                                    <!-- tombol Info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button type="button" class="btn btn-warning btn-sm-2" data-toggle="modal" data-target="#modalInfo<?= $value['id_loker'] ?>">
                                                <i class="ua-icon-alert-info"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- end-tombol Info -->
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