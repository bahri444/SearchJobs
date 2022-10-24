<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="page-content">
    <div class="container-fluid">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Data Lamaran</h2>
            </div>
        </div>

        <?php foreach ($lamaran as $row) : ?>
            <!-- Modal info-->
            <div class="modal fade" id="modalInfo<?= $row['id_lamaran'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Detail Pelamar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <table>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mt-2 d-flex justify-content-center">
                                                <div class="col-sm">
                                                    <img src="<?= base_url() ?>/img2/<?= $row['fas_foto'] ?>" alt="404" width="200px" height="200px">
                                                </div>
                                            </div>
                                        </div>
                                        <tr>
                                            <th>Judul Loker</th>
                                            <td><?= ': ', $row['judul_loker'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Perusahaan</th>
                                            <td><?= ': ', $row['nm_prshn'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <td><?= ': ', $row['nm_lkp'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td><?= ': ', $row['alamat'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Usia</th>
                                            <td><?= ': ', $row['usia'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tgl Lamar</th>
                                            <td><?= ': ', $row['tgl_lamar'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <td><?= ': ', $row['nm_lkp'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Telepon</th>
                                            <td><?= ': ', $row['tlp'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Pendidikan Terakhir</th>
                                            <td><?= ': ', $row['pend_ter'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Bidang Keahlian</th>
                                            <td><?= ': ', $row['bid_keahlian'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Berkas :</th>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalpdf<?= $row['id_lamaran'] ?>">
                                                    <?= $row['berkas']; ?>
                                                </button>
                                            </td>
                                        </tr>
                                </table>
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-center">
                                    <form action="<?= base_url('/admin/lamaran/validasi/' . $row['id_lamaran']) ?>" method="POST">
                                        <?= csrf_field() ?>
                                        <div class="justify-content-end mr-5">
                                            <input type="text" value="belum_lengkap" name="blm_lngkp" hidden>
                                            <?php if ($row['s_lamaran'] == 'pending') : ?>
                                                <button type="submit" class="btn btn-warning" data-dismiss="model">Belum Lengkap</button>
                                            <?php elseif ($row['s_lamaran'] == 'belum_lengkap') : ?>
                                                <button type="submit" class="btn btn-warning" data-dismiss="model">Belum Lengkap</button>
                                            <?php endif ?>
                                        </div>
                                    </form>
                                    <form action="<?= base_url('/admin/lamaran/rekomendasi/' . $row['id_lamaran']) ?>" method="POST">
                                        <?= csrf_field() ?>
                                        <div class="justify-content-end ml-5">
                                            <input type="text" value="rekomendasi" name="rekomendasi" hidden>
                                            <?php if ($row['s_lamaran'] == 'pending') : ?>
                                                <button type="submit" class="btn btn-info" data-dismiss="model">Rekomendasi</button>
                                            <?php elseif ($row['s_lamaran'] == 'belum_lengkap') : ?>
                                                <button type="submit" class="btn btn-info" data-dismiss="model">Rekomendasi</button>
                                            <?php endif ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal PDF -->
            <div class="modal fade bd-example-modal-xl" id="modalpdf<?= $row['id_lamaran'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="max-width: 80%;" role=" document">
                    <div class="modal-content w-100 bg-dark">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <embed src="<?= base_url('/berkas/' . $row['berkas']) ?>" type="" width="100%" style="height: 500px;">
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
                            <th scope="col"><b>Nama Pencaker</b></th>
                            <th scope="col"><b>Lowongan</b></th>
                            <th scope="col"><b>Berkas Persyaratan</b></th>
                            <th scope="col"><b>Tgl Melamar</b></th>
                            <th scope="col"><b>Status</b></th>
                            <th scope="col"><b>Respon Perusahaan</b></th>
                            <th scope="col"><b>Aksi</b></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($lamaran as $row) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row['nm_lkp'] ?></td>
                                <td><?= $row['judul_loker'] ?></td>
                                <td><?= $row['berkas'] ?></td>
                                <td><?= $row['tgl_lamar'] ?></td>
                                <td><?= $row['s_lamaran'] ?></td>
                                <td><?= $row['respons'] ?></td>
                                <td class="d-flex justify-content-center">

                                    <!-- tombol-info data-->
                                    <div class="row">
                                        <div class="col-sm">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalInfo<?= $row['id_lamaran'] ?>">
                                                <i class=" ua-icon-alert-info"></i>
                                            </button>

                                        </div>
                                    </div>
                                    <!-- end-tombol info data -->
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