<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="page-content">
    <div class="container-fluid">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Data Lamaran</h2>
            </div>

            <!-- modal-tambah data-->
            <div class="row">
                <div class="col-sm">
                    <button type="button" class="btn btn-success py-2 btn-block mt-3" data-toggle="modal" data-target="#exampleModal">
                        <i class="ua-icon-plus-alt mr-3"></i>
                        Tambah
                    </button>
                    <div id="exampleModal" class="modal fade custom-modal custom-modal-verify-account">
                        <div class="modal-dialog" role="document">
                            <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="ua-icon-modal-close"></span>
                            </button>
                            <div class="modal-content">
                                <div class="mt-2">
                                    <div class="container">
                                        <div class="col-sm-50">
                                            <div>
                                                <h2 class="page-content__header-heading text-center">Tambah lamaran</h2>
                                            </div>
                                            <div class="form-group mt-3">
                                                <select class="form-select form-control form-control-md" aria-label="Default select example">
                                                    <label for="id_pencaker">Nama Pelamar Kerja</label>
                                                    <option selected>---pilih pencari kerja---</option>
                                                    <option value="1">One</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-select form-control form-control-md" aria-label="Default select example">
                                                    <label for="id_loker">Judul Loker</label>
                                                    <option selected>---pilih lowongan kerja---</option>
                                                    <option value="1">One</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-select form-control form-control-md" aria-label="Default select example">
                                                    <label for="id_perusahaan">Nama Perusahaan</label>
                                                    <option selected>---pilih perusahaan---</option>
                                                    <option value="1">One</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="berkas">Berkas Persyaratan</label>
                                                <input type="file" placeholder="" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="tgl_lmr">Tgl Melamar</label>
                                                <input type="date" placeholder="passwords" class="form-control form-control-md">
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
                </div>
            </div>
            <!-- end-modal tambah data -->

            <!-- modal-edit -->
            <div id="modalEdit" class="modal fade custom-modal custom-modal-verify-account">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ua-icon-modal-close"></span>
                    </button>
                    <div class="modal-content">
                        <div class="mt-2">
                            <div class="container">
                                <div class="col-sm-50">
                                    <div>
                                        <h2 class="page-content__header-heading text-center">Edit lamaran</h2>
                                    </div>
                                    <div class="form-group mt-3">
                                        <select class="form-select form-control form-control-md" aria-label="Default select example">
                                            <label for="id_pencaker">Nama Pelamar Kerja</label>
                                            <option selected>---pilih pencari kerja---</option>
                                            <option value="1">One</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-select form-control form-control-md" aria-label="Default select example">
                                            <label for="id_loker">Judul Loker</label>
                                            <option selected>---pilih lowongan kerja---</option>
                                            <option value="1">One</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-select form-control form-control-md" aria-label="Default select example">
                                            <label for="id_perusahaan">Nama Perusahaan</label>
                                            <option selected>---pilih perusahaan---</option>
                                            <option value="1">One</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="berkas">Berkas Persyaratan</label>
                                        <input type="file" placeholder="" class="form-control form-control-md">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lmr">Tgl Melamar</label>
                                        <input type="date" placeholder="passwords" class="form-control form-control-md">
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
            <!-- end-modal-edit -->

            <!-- modal-hapus -->
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
                                        <p class="text-center mt-2">Anda Yakin ingin Menghapus Data Ini?</p>
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
            <!-- end-modal-hapus -->

        </div>
        <div class="table-responsive">
            <div class="m-datatable">
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pencaker</th>
                            <th scope="col">Nama Perusahaan</th>
                            <th scope="col">Nama Loker</th>
                            <th scope="col">Berkas Persyaratan</th>
                            <th scope="col">Tgl Melamar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="#" class="link-info">Tiger Nixon</a></td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
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