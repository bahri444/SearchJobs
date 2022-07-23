<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Dinas tenaga kerja dan transmigrasi</h2>
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
                                                <h2 class="page-content__header-heading text-center">Tambah Data Disnakertrans</h2>
                                            </div>
                                            <div class="form-group">
                                                <label for="nip">Nip</label>
                                                <input type="text" placeholder="NIP" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="berkas">Nama Lengkap</label>
                                                <input type="text" placeholder="nama lengkap" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="jk">Jenis Kelamin</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L">
                                                    <label class="form-check-label" for="inlineRadio1">Pria</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="P">
                                                    <label class="form-check-label" for="inlineRadio2">Wanita</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" placeholder="alamat lengkap" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" placeholder="jabatan" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="tlp">Telepon</label>
                                                <input type="text" placeholder="telepon" class="form-control form-control-md">
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
                                        <h2 class="page-content__header-heading text-center">Edit Data Disnakertrans</h2>
                                    </div>
                                    <div class="form-group">
                                        <label for="nip">Nip</label>
                                        <input type="text" placeholder="NIP" class="form-control form-control-md">
                                    </div>
                                    <div class="form-group">
                                        <label for="berkas">Nama Lengkap</label>
                                        <input type="text" placeholder="nama lengkap" class="form-control form-control-md">
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L">
                                            <label class="form-check-label" for="inlineRadio1">Pria</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="P">
                                            <label class="form-check-label" for="inlineRadio2">Wanita</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" placeholder="alamat leengkap" class="form-control form-control-md">
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <input type="text" placeholder="jabatan" class="form-control form-control-md">
                                    </div>
                                    <div class="form-group">
                                        <label for="tlp">Telepon</label>
                                        <input type="text" placeholder="telepon" class="form-control form-control-md">
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

            <!-- modal-edit -->
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
            <!-- end-modal-edit -->

        </div>
        <div class="table-responsive">
            <div class="m-datatable">
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nip</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12345678</td>
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