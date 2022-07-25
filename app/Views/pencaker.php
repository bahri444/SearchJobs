<<<<<<< HEAD
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Data pencari kerja</h2>
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
                                                <h2 class="page-content__header-heading text-center">Tambah pencari kerja</h2>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="nm_lkp">Nama</label>
                                                <input type="text" placeholder="nama lengkap" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="tgl_lhr">Tgl Lahir</label>
                                                <input type="date" placeholder="judul lowongan kerja" class="form-control form-control-md">
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
                                                <label for="usia">Usia</label>
                                                <input type="number" placeholder="usia" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" placeholder="alamat" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="tlp">Telepon</label>
                                                <input type="text" placeholder="telepon" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" placeholder="email@gmail.com" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="pengker">Pengalaman Kerja</label>
                                                <input type="text" placeholder="pengalaman kerja" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="pend_ter">Pendidikan Terakhir</label>
                                                <select class="form-select form-control form-control-md" aria-label="Default select example">
                                                    <option selected>---pilih pendidikan---</option>
                                                    <option value="SMK">SMK/Sederajat</option>
                                                    <option value="D1">D1</option>
                                                    <option value="D2">D2</option>
                                                    <option value="D3">D3</option>
                                                    <option value="D4">D4</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="bid_keahlian">Bidang Keahlian</label>
                                                <input type="text" placeholder="bidang keahlian" class="form-control form-control-md">
                                            </div>
                                            <div class="form-group">
                                                <label for="sertifikat">Sertifikat Keahlian</label>
                                                <input type="file" placeholder="posisi atau kedudukan" class="form-control form-control-md">
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
                                    <h2 class="page-content__header-heading text-center">Tambah lowongan kerja</h2>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="nm_lkp">Nama</label>
                                    <input type="text" placeholder="nama lengkap" class="form-control form-control-md">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lhr">Tgl Lahir</label>
                                    <input type="date" placeholder="judul lowongan kerja" class="form-control form-control-md">
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
                                    <label for="usia">Usia</label>
                                    <input type="number" placeholder="usia" class="form-control form-control-md">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" placeholder="alamat" class="form-control form-control-md">
                                </div>
                                <div class="form-group">
                                    <label for="tlp">Telepon</label>
                                    <input type="text" placeholder="telepon" class="form-control form-control-md">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" placeholder="email@gmail.com" class="form-control form-control-md">
                                </div>
                                <div class="form-group">
                                    <label for="pengker">Pengalaman Kerja</label>
                                    <input type="text" placeholder="pengalaman kerja" class="form-control form-control-md">
                                </div>
                                <div class="form-group">
                                    <label for="pend_ter">Pendidikan Terakhir</label>
                                    <select class="form-select form-control form-control-md" aria-label="Default select example">
                                        <option selected>---pilih pendidikan---</option>
                                        <option value="SMK">SMK/Sederajat</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="bid_keahlian">Bidang Keahlian</label>
                                    <input type="text" placeholder="bidang keahlian" class="form-control form-control-md">
                                </div>
                                <div class="form-group">
                                    <label for="sertifikat">Sertifikat Keahlian</label>
                                    <input type="file" placeholder="posisi atau kedudukan" class="form-control form-control-md">
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
        <!-- end-modal hapus -->

    </div>
    <div class="m-datatable">
        <div class="table-responsive">
            <table id="datatable" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Kelamin</th>
                        <th scope="col">Tgl Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Pendidikan Terakhir</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Keahlian</th>
                        <th scope="col">Sertifikat Keahlian</th>
                        <th scope="col">Pengalaman</th>
                        <th scope="col">Usia</th>
                        <th scope="col">Telepon</th>
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
                        <td>61</td>
                        <td>61</td>
                        <td>61</td>
                        <td>61</td>
                        <td>61</td>
                        <td>61</td>
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
=======
<?=$this->extend('layout/template');?>
<?=$this->Section('content');?>
<div class="container mr-20">
    <a href="<?= base_url('barang');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">nama pelamar</h4>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">nama pencari kerja</label>
                    <input type="number" name="qty" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="">pendidikan</label>
                  <input type="number" name="jual" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">aksi</label>
                    <input type="number" name="jual" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
  </div>
  
  <?=$this->endSection('content');?>
>>>>>>> ria
