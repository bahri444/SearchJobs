<?= $this->extend('auth/template/indexs'); ?>

<?= $this->section('content'); ?>

<!-- content side -->
<div class="page-content mt-2 ml-0">
  <h1 class="text-center">Semua Lowongan Pekerjaan</h1>
</div>
<div class="row ml-2 mr-2">
  <?php foreach ($loker as $row) : ?>
    <div class="col-4">
      <div class="main-container">
        <h3 class="text-center"><b><?= $row['judul_loker'] ?></b></h3>
        <p><b>Nama Kategori :</b><?= $row['nm_ktgr'] ?></p>
        <p><b>Nama Perusahaan :</b><?= $row['nm_prshn'] ?></p>
        <p><b>Posisi :</b><?= $row['posisi'] ?></p>
        <p><b>Tgl Buka :</b><?= $row['tgl_buka'] ?></p>
        <p><b>Tgl Tutup :</b><?= $row['tgl_tutup'] ?></p>
        <p><b>Di Posting :</b><?= $row['created_at'] ?></p>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>