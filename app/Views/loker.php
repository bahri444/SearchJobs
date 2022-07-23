<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Data Lowongan Kerja</h2>
            </div>
            <!-- modal-tambah data-->
            <div class="row">
                <div class="col-sm">
                    <button type="button" class="btn btn-success py-2 btn-block mt-3" data-toggle="modal" data-target="#exampleModal">
                        <i class="ua-icon-plus-alt mr-3"></i>
                        Tambah
                    </button>
                    <div id="exampleModal" class="modal fade custom-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="ua-icon-modal-close"></span>
                            </button>
                            <div class="modal-content">
                                <div class="mt-2">
                                    <div class="container-fluid">
                                        <div class="col-sm">
                                            <div>
                                                <h2 class="page-content__header-heading text-center">Tambah lowongan kerja</h2>
                                            </div>
                                            <div class="form-group">
                                                <label for="id_prshn">Id Perusahaan</label>
                                                <select class="form-select form-control form-control-md" aria-label="Default select example">
                                                    <option selected>---pilih perusahaan---</option>
                                                    <option value="1">One</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="id_ktgr">Kategori Loker</label>
                                                <select class="form-select form-control form-control-md" aria-label="Default select example">
                                                    <option selected>---pilih kategori loker---</option>
                                                    <option value="1">One</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="judul_loker">Judul Loker</label>
                                                <input type="text" placeholder="judul lowongan kerja" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="posisi">Posisi</label>
                                                <input type="text" placeholder="posisi atau kedudukan" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="tgl_upload">Tgl Upload</label>
                                                <input type="date" placeholder="tanggal upload" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="syrt_pend">Syarat Pendidikan</label>
                                                <input type="text" placeholder="syarat pendidikan" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="detail_loker">Detail Loker</label>
                                                <input type="text" placeholder="detail lowongan kerja" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="gaji">Gaji</label>
                                                <input type="text" placeholder="gaji" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="bts_wktu">Batas Waktu</label>
                                                <input type="date" placeholder="batas waktu" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <div class="d-flex justify-content-center">
                                                    <div class="justify-content-end mr-5">
                                                        <button type="button" class="btn btn-warning">Cancel</button>
                                                    </div>
                                                    <div class="justify-content-start ml-5">
                                                        <button type="button" class="btn btn-info">Tambah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end-modal tambah data -->

            <!-- modal-edit data -->
            <div id="modalEdit" class="modal fade custom-modal custom-modal-verify-account">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ua-icon-modal-close"></span>
                    </button>
                    <div class="modal-content">
                        <div class="mt-2">
                            <div class="container-fluid">
                                <div class="col-sm">
                                    <div>
                                        <h2 class="page-content__header-heading text-center">Edit lowongan kerja</h2>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_prshn">Id Perusahaan</label>
                                        <select class="form-select form-control form-control-md" aria-label="Default select example">
                                            <option selected>---pilih perusahaan---</option>
                                            <option value="1">One</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_ktgr">Kategori Loker</label>
                                        <select class="form-select form-control form-control-md" aria-label="Default select example">
                                            <option selected>---pilih kategori loker---</option>
                                            <option value="1">One</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="judul_loker">Judul Loker</label>
                                        <input type="text" placeholder="judul lowongan kerja" class="form-control form-control-md">
                                    </div>
                                    <div class="form-group">
                                        <label for="posisi">Posisi</label>
                                        <input type="text" placeholder="posisi atau kedudukan" class="form-control form-control-md">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_upload">Tgl Upload</label>
                                        <input type="date" placeholder="tanggal upload" class="form-control form-control-md">
                                    </div>
                                    <div class="form-group">
                                        <label for="syrt_pend">Syarat Pendidikan</label>
                                        <input type="text" placeholder="syarat pendidikan" class="form-control form-control-md">
                                    </div>
                                    <div class="form-group">
                                        <label for="detail_loker">Detail Loker</label>
                                        <input type="text" placeholder="detail lowongan kerja" class="form-control form-control-md">
                                    </div>
                                    <div class="form-group">
                                        <label for="gaji">Gaji</label>
                                        <input type="text" placeholder="gaji" class="form-control form-control-md">
                                    </div>
                                    <div class="form-group">
                                        <label for="bts_wktu">Batas Waktu</label>
                                        <input type="date" placeholder="batas waktu" class="form-control form-control-md">
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-center">
                                            <div class="justify-content-end mr-5">
                                                <button type="button" class="btn btn-warning">Cancel</button>
                                            </div>
                                            <div class="justify-content-start ml-5">
                                                <button type="button" class="btn btn-info">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end-modal edit -->

            <!-- modal-hapus data -->
            <div id="modalHapus" class="modal fade custom-modal custom-modal-verify-account">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ua-icon-modal-close"></span>
                    </button>
                    <div class="modal-content">
                        <div class="mt-2">
                            <div class="container">
                                <div class="col-sm-50">
                                    <div class="form-group">
                                        <p class="text-center mt-2">Apakah Anda Yakin ingin Menghapus Data Ini?</p>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-center">
                                            <div class="justify-content-end mr-5">
                                                <button type="button" class="btn btn-warning">Tidak</button>
                                            </div>
                                            <div class="justify-content-start ml-5">
                                                <button type="button" class="btn btn-info">Ya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end-modal hapus -->

        </div>
        <div class="table-responsive">
            <div class="m-datatable">
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Perusahaan</th>
                            <th scope="col">Judul LoKer</th>
                            <th scope="col">Kategori Loker</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Tanggal Upload</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Gaji</th>
                            <th scope="col">Detail</th>
                            <th scope="col">Batas Waktu</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>61</td>
                            <td><a href="#" class="link-info">Tiger Nixon</a></td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>61</td>
                            <td>61</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td class="d-flex justify-content-center ">
                                <!-- tombol-edit data-->
                                <div class="row">
                                    <div class="col-sm mr-1">
                                        <button type="button" class="btn btn-info btn-sm-2" data-toggle="modal" data-target="#modalEdit">
                                            <i class="ua-icon-activity-edit"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- tombol edit data -->

                                <!-- tombol-hapus data-->
                                <div class="row">
                                    <div class="col-sm ml-1">
                                        <button type="button" class="btn btn-warning btn-sm-2" data-toggle="modal" data-target="#modalHapus">
                                            <i class="ua-icon-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- end-tombol hapus data -->

                            </td>
                        </tr>
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