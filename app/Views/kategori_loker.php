<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Kategori Lowongan Kerja</h2>
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
                                                <h2 class="page-content__header-heading text-center">Tambah Kategori</h2>
                                            </div>
                                            <div class="form-group">
                                                <label for="nm_ktgr">Nama Kategori</label>
                                                <input type="text" placeholder="maskkan kategori" class="form-control form-control-md">
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

            <!-- modal edit data -->
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
                                        <h2 class="page-content__header-heading text-center">Edit Kategori</h2>
                                    </div>
                                    <div class="form-group">
                                        <label for="nm_ktgr">Nama Kategori</label>
                                        <input type="text" placeholder="maskkan kategori" class="form-control form-control-md">
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
            <!-- end-modal edit data -->

            <!-- modal hapus data -->
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
                                    <div class="form-group d-flex justify-content-between">
                                        <button type="button" class="btn btn-warning">Tidak</button>
                                        <button type="button" class="btn btn-info">Ya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end-modal hapus data -->
        </div>
        <div class="table-responsive">
            <div class="m-datatable">
                <table id="datatable" class="table table-striped">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="#" class="link-info">Tiger Nixon</a></td>
                            <td class="d-flex justify-content-center ">

                                <!-- tombol-edit data-->
                                <div class="row">
                                    <div class="col-sm mr-1">
                                        <button type="button" class="btn btn-info btn-sm-2" data-toggle="modal" data-target="#modalEdit">
                                            <i class="ua-icon-activity-edit"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- end-tombol edit data -->

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