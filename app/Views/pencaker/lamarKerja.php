<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="page-content__header">
            <div class="mx-auto">
                <div class="main-container mt-5">
                    <div>
                        <h2 class="page-content__header-heading text-center">Berkas lamaran</h2>
                    </div>
                    <form action="<?= base_url('pencaker/lamarKerja/tambah'); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <?php foreach ($lamarans as $row) : ?>
                                    <div class="form-group">
                                        <select name="id_loker" class="form-select form-control form-control-md" aria-label="Default select example">
                                            <option selected value="<?= $row->id_loker ?>"><?= $row->judul_loker ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="id_loker" class="form-select form-control form-control-md" aria-label="Default select example">
                                            <option selected value="<?= $row->id_prshn ?>"><?= $row->nm_prshn ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="id_loker" class="form-select form-control form-control-md" aria-label="Default select example">
                                            <option selected value="<?= $row->id_pencaker ?>"><?= $row->nm_lkp ?></option>
                                        </select>
                                    </div>
                                <?php endforeach; ?>
                                <div class="form-group">
                                    <label for="nm_lkp">Nama</label>
                                    <input type="text" name="nm_lkp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="tlp">Telepon</label>
                                    <input type="text" name="tlp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="usia">Tgl Lahir</label>
                                    <input type="date" name="usia" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="usia">Usia</label>
                                    <input type="number" name="usia" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="bid_keahlian">Bidang Keahlian</label>
                                    <select name="bid_keahlian" id="pend_ter" class="form-select form-control form-control-md" aria-label="Default select example">
                                        <option selected>-- pilih keahlian --</option>
                                        <option value="satu">Satu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lhr">Tgl Lamaran</label>
                                    <input type="date" name="tgl_lmr" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="sertifikat">Sertifikat Keahlian</label>
                                    <input type="file" name="sertifikat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="sertifikat">Fas Foto</label>
                                    <input type="file" name="sertifikat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="sertifikat">Upload CV</label>
                                    <input type="file" name="sertifikat" class="form-control">
                                </div>
                                <hr>
                                <div class="form-group mt-2">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <button type="submit" class="btn btn-info">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>