<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<!-- content ISI -->
<div class="page-content">
  <div class="container-fluid">
    <div class="page-content__header">
      <div>
        <h2 class="page-content__header-heading">Dashboard</h2>
        <div class="page-content__header-description">Wellcome to sistem informasi lowongan kerja</div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-6">
        <div class="widget widget-alpha widget-alpha--color-amaranth">
          <div>
            <div class="widget-alpha__amount">278</div>
            <div class="widget-alpha__description">Data Lowongan Kerja</div>
          </div>
          <span class="widget-alpha__icon ua-icon-document-solid"></span>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6">
        <div class="widget widget-alpha widget-alpha--color-green-jungle">
          <div>
            <div class="widget-alpha__amount">156</div>
            <div class="widget-alpha__description">Data Pencari Kerja</div>
          </div>
          <span class="widget-alpha__icon ua-icon-widget-user-group"></span>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6">
        <div class="widget widget-alpha widget-alpha--color-orange widget-alpha--donut">
          <div>
            <div class="widget-alpha__amount">64,87%</div>
            <div class="widget-alpha__description">Data Perusahaan</div>
          </div>
          <span class="widget-alpha__icon ua-icon-company"></span>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6">
        <div class="widget widget-alpha widget-alpha--color-java widget-alpha--help">
          <div>
            <div class="widget-alpha__amount">425</div>
            <div class="widget-alpha__description">Data Pelamar</div>
          </div>
          <span class="widget-alpha__icon ua-icon-widget-user-group"></span>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>