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