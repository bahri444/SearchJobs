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
                <h2 class="page-content__header-heading">Data pencari kerja</h2>
            </div>
        </div>
        <!-- modal info peencaker -->
        <?php foreach ($Joins as $row) : ?>
            <div id="modalInfo<?= $row->id_pencaker ?>" class="modal fade custom-modal custom-modal-verify-account">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ua-icon-modal-close"></span>
                    </button>
                    <div class="modal-content">
                        <div class="mt-2">
                            <div class="container-fluid">
                                <div class="col-sm">
                                    <div>
                                        <h2 class="page-content__header-heading text-center">Detail pencari kerja</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mt-2 d-flex justify-content-around">
                                                <div>
                                                    <img width="200px" height="200px" src="<?= base_url() ?>/img2/<?= $row->fas_foto; ?>" alt="not found">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <table>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <td><?= ': ', $row->nm_lkp ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Kelamin</th>
                                                <td><?= ': ', $row->jk ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Lahir</th>
                                                <td><?= ': ', $row->tgl_lhr ?></td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td><?= ': ', $row->alamat ?></td>
                                            </tr>
                                            <tr>
                                                <th>Pendidikan Terakhir</th>
                                                <td><?= ': ', $row->pend_ter ?></td>
                                            </tr>
                                            <tr>
                                                <th>Telepon</th>
                                                <td><?= ': ', $row->tlp ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td><?= ': ', $row->email ?></td>
                                            </tr>
                                            <tr>
                                                <th>Bidang Keahliah</th>
                                                <td><?= ': ', $row->bid_keahlian ?></td>
                                            </tr>
                                            <tr>
                                                <th>Sertifikat</th>
                                                <td><?= ': ', $row->sertifikat ?></td>
                                            </tr>
                                            <tr>
                                                <th>Pengalaman Kerja</th>
                                                <td><?= ': ', $row->peng_ker ?></td>
                                            </tr>
                                            <tr>
                                                <th>Usia</th>
                                                <td><?= ': ', $row->usia ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-center">
                                            <!-- <div class="justify-content-end mr-5">
                                                <button type="button" class="btn btn-warning" data-dismiss="model">Cancel</button>
                                            </div> -->
                                            <div class="justify-content-start">
                                                <button type="button" class="btn btn-info">Cetak kartu kuning</button>
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
        <!-- end-modal info peencaker -->

        <div class="table-responsive">
            <div class="m-datatable">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead class="text-center">
                            <tr>
                                <th scope="col"><b>No</b></th>
                                <th scope="col"><b>Username</b></th>
                                <th scope="col"><b>Nama Lengkap</b></th>
                                <th scope="col"><b>Kelamin</b></th>
                                <th scope="col"><b>Tgl Lahir</b></th>
                                <th scope="col"><b>Alamat</b></th>
                                <th scope="col"><b>Pendidikan Terakhir</b></th>
                                <th scope="col"><b>Telepon</b></th>
                                <th scope="col"><b>Email</b></th>
                                <th scope="col"><b>Keahlian</b></th>
                                <th scope="col"><b>Sertifikat Keahlian</b></th>
                                <th scope="col"><b>Pengalaman</b></th>
                                <th scope="col"><b>Usia</b></th>
                                <th scope="col"><b>Aksi</b></th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php $i = 1; ?>
                            <?php foreach ($Joins as $row) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $row->username ?></td>
                                    <td><?= $row->nm_lkp ?></td>
                                    <td><?= $row->jk ?></td>
                                    <td><?= $row->tgl_lhr ?></td>
                                    <td><?= $row->alamat ?></td>
                                    <td><?= $row->pend_ter ?></td>
                                    <td><?= $row->tlp ?></td>
                                    <td><?= $row->email ?></td>
                                    <td><?= $row->bid_keahlian ?></td>
                                    <td><?= $row->sertifikat ?></td>
                                    <td><?= $row->peng_ker ?></td>
                                    <td><?= $row->usia ?></td>
                                    <td class="d-flex justify-content-center">


                                        <!-- tombol-info data-->
                                        <div class="row">
                                            <div class="col-sm">
                                                <button type="button" class="btn btn-warning btn-sm-2" data-toggle="modal" data-target="#modalInfo<?= $row->id_pencaker ?>">
                                                    <i class="ua-icon-alert-info"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- end-tombol info data -->
                                        <!-- tombol-edit data-->
                                        <!-- <div class="row">
                                            <div class="col-sm mr-1 ml-1">
                                                <button type="button" class="btn btn-info btn-sm-2" data-toggle="modal" data-target="#modalEdit<?= $row->id_pencaker ?>">
                                                    <i class="ua-icon-activity-edit"></i>
                                                </button>
                                            </div>
                                        </div> -->
                                        <!-- end-tombol edit data -->

                                        <!-- tombol-hapus data-->
                                        <!-- <div class="row">
                                            <div class="col-sm ml-1">
                                                <button type="button" class="btn btn-danger btn-sm-2" data-toggle="modal" data-target="#modalHapus<?= $row->id_pencaker ?>">
                                                    <i class="ua-icon-trash"></i>
                                                </button>
                                            </div>
                                        </div> -->
                                        <!-- end-tombol hapus data -->
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