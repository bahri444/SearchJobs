<?php
$session = \Config\Services::session();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- datatable -->
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/datatables/datatables.min.css">

    <!-- modal css -->
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/nouislider/nouislider.min.css">

    <!-- link data dashboard dan header -->
    <link rel="stylesheet" href="<?= base_url() ?>/fonts/open-sans/style.min.css"> <!-- common font  styles  -->
    <link rel="stylesheet" href="<?= base_url() ?>/fonts/universe-admin/style.css"> <!-- universeadmin icon font styles -->
    <link rel="stylesheet" href="<?= base_url() ?>/fonts/mdi/css/materialdesignicons.min.css"> <!-- meterialdesignicons -->
    <link rel="stylesheet" href="<?= base_url() ?>/fonts/iconfont/style.css"> <!-- DEPRECATED iconmonstr -->
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/flatpickr/flatpickr.min.css"> <!-- original flatpickr plugin (datepicker) styles -->
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/simplebar/simplebar.css"> <!-- original simplebar plugin (scrollbar) styles  -->
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/tagify/tagify.css"> <!-- styles for tags -->
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/tippyjs/tippy.css"> <!-- original tippy plugin (tooltip) styles -->
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/select2/css/select2.min.css"> <!-- original select2 plugin styles -->
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/bootstrap/css/bootstrap.min.css"> <!-- original bootstrap styles -->
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.min.css" id="stylesheet"> <!-- universeadmin styles -->

    <script src="<?php echo base_url('js/ie.assign.fix.min.js'); ?>"></script>
</head>

<body class="js-loading">
    <!-- Loading System -->
    <div class="page-preloader js-page-preloader">
        <div>
            <h1 class="page-preloader__logo">SISFO LOKER</h1>
        </div>
        <div class="page-preloader__desc">Disnakertrans</div>
        <div class="page-preloader__loader">
            <div class="page-preloader__loader-heading">System Loading</div>
            <div class="progress progress-rounded page-preloader__loader-progress">
                <div id="page-loader-progress-bar" class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <!-- navbar atau menu Atas -->
    <!-- tombol hidden sidebar -->
    <div class="navbar navbar-light navbar-expand-lg">
        <button class="sidebar-toggler" type="button">
            <span class="ua-icon-sidebar-open sidebar-toggler__open"></span>
            <span class="ua-icon-alert-close sidebar-toggler__close"></span>
        </button>

        <span class="navbar-brand">
            <a href="/">SISFO LOKER</a>
            <span class="ua-icon-menu slide-nav-toggle"></span>
        </span>

        <span class="navbar-brand-sm">
            <a href="/"><img src="img/logo-sm.png" alt="" class="navbar-brand__logo"></a>
            <span class="ua-icon-menu slide-nav-toggle"></span>
        </span>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="ua-icon-navbar-open navbar-toggler__open"></span>
            <span class="ua-icon-alert-close navbar-toggler__close"></span>
        </button>

        <!-- header icon atas -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <div class="navbar__menu">
                <ul class="navbar-nav">

                    <!-- menu setting -->
                    <li class="nav-item navbar__menu-item">
                    </li>
                </ul>
            </div>
            <!-- menu navbar profile -->
            <div class="dropdown navbar-dropdown">
                <a class="dropdown-toggle navbar-dropdown-toggle navbar-dropdown-toggle__user" data-toggle="dropdown" href="#">
                    <img src="<?= base_url() ?>/img2/<?= session()->get('user_image') ?>" alt="" class="navbar-dropdown-toggle__user-avatar">
                    <span class="navbar-dropdown__user-name"><?= $session->get('username') ?></span>
                </a>
                <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu__user">
                    <div class="navbar-dropdown-user-content">
                        <div class="dropdown-user__avatar"><img src="<?= base_url() ?>/img2/<?= $session->get('user_image') ?>" alt="" /></div>
                        <div class="dropdown-info">
                            <div class="dropdown-info__name"><?= $session->get('username') ?></div>
                        </div>
                    </div>
                    <a class="dropdown-item navbar-dropdown__item" href="<?= route_to('logout') ?>">
                        <span class="ua-icon-view-all"></span>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- sidebar atau dashboard -->
    <div class="sidebar-section">
        <div class="sidebar-section__scroll">
            <?php if ($session->get('role') == 'admin') : ?>
                <div class="sidebar-user-a">
                    <img src="<?= base_url() ?>/img2/<?= session()->get('user_image') ?>" alt="" class="sidebar-user-a__avatar rounded-circle">
                    <div class="sidebar-user-a__name">Dinas Tenaga Kerja</div>
                    <div class="sidebar-user-a__name">Dan Transmigrasi</div>
                </div>
                <ul class="sidebar-section-nav">
                    <!-- icon dashboard -->
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?= route_to('admin/dashboard'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-home"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?= route_to('admin/ktgrLoker'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-blank-document"></span>
                            <span>Kategori Loker</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?= route_to('admin/loker'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-widget-paper"></span>
                            <span>Lowongan Kerja</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?= route_to('admin/pencaker'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-widget-user-group"></span>
                            <span>Pencari Kerja</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?= route_to('admin/lamaran'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-widget-users"></span>
                            <span>Lamaran</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?= route_to('admin/perusahaan') ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-company"></span>
                            <span>Perusahaan</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?= route_to('admin/user'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-user-solid"></span>
                            <span>User</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?= route_to('logout'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-view-all"></span>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            <?php elseif ($session->get('role') == 'instansi') : ?>
                <div class="sidebar-user-a">
                    <img src="<?= base_url() ?>/img2/<?= $session->get('user_image') ?>" alt="" class="sidebar-user-a__avatar rounded-circle">
                    <div class="sidebar-user-a__name"><?= $session->get('username') ?></div>
                </div>
                <ul class="sidebar-section-nav">
                    <li class="sidebar-section-nav__item mb-2">
                        <a class="sidebar-section-nav__link" href="<?= route_to('instansi/dashboard'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-home"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item mb-2">
                        <a class="sidebar-section-nav__link" href="<?= route_to('instansi/lengkapiPrshn'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-edit-outline"></span>
                            <span>Lengkapi Data</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item mb-2">
                        <a class="sidebar-section-nav__link" href="<?= route_to('instansi/loker'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-widget-paper"></span>
                            <span>Lowongan Kerja</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item mb-2">
                        <a class="sidebar-section-nav__link" href="<?= route_to('instansi/lamaran'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-widget-users"></span>
                            <span>Data Pelamar</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item mb-2">
                        <a class="sidebar-section-nav__link" href="<?= route_to('instansi/profilePrshn'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-user-solid"></span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item mb-5">
                        <a class="sidebar-section-nav__link" href="<?= route_to('logout'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-view-all"></span>
                            <span>Logout</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="#">
                            <span class="sidebar-section-nav__item-icon"></span>
                            <span></span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="#">
                            <span class="sidebar-section-nav__item-icon"></span>
                            <span></span>
                        </a>
                    </li>
                </ul>
            <?php elseif ($session->get('role') == 'pencaker') : ?>
                <div class="sidebar-user-a">
                    <img src="<?= base_url() ?>/img2/<?= $session->get('user_image') ?>" alt="" class="sidebar-user-a__avatar rounded-circle">
                    <div class="sidebar-user-a__name"><?= $session->get('username') ?></div>
                </div>
                <ul class="sidebar-section-nav mt-auto">
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?= route_to('pencaker/dashboard'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-document"></span>
                            <span>Cari Loker</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?= route_to('pencaker/lengkapiData'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-edit-outline"></span>
                            <span>Lengkapi Data</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?= route_to('pencaker/kartu'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-file-pdf"></span>
                            <span>Cetak kartu</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?= route_to('pencaker/profile'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-user-solid"></span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?= route_to('logout'); ?>">
                            <span class="sidebar-section-nav__item-icon ua-icon-view-all"></span>
                            <span>Logout</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="#">
                            <span class="sidebar-section-nav__item-icon"></span>
                            <span></span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="#">
                            <span class="sidebar-section-nav__item-icon"></span>
                            <span></span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="#">
                            <span class="sidebar-section-nav__item-icon"></span>
                            <span></span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="#">
                            <span class="sidebar-section-nav__item-icon"></span>
                            <span></span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="#">
                            <span class="sidebar-section-nav__item-icon"></span>
                            <span></span>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <?= $this->renderSection('content') ?>

    <script src="<?= base_url() ?>/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url() ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/vendor/popper/popper.min.js"></script>
    <script src="<?= base_url() ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/vendor/select2/js/select2.full.min.js"></script>
    <script src="<?= base_url() ?>/vendor/simplebar/simplebar.js"></script>
    <script src="<?= base_url() ?>/vendor/text-avatar/jquery.textavatar.js"></script>
    <script src="<?= base_url() ?>/vendor/tippyjs/tippy.all.min.js"></script>
    <script src="<?= base_url() ?>/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="<?= base_url() ?>/vendor/wnumb/wNumb.js"></script>
    <script src="<?= base_url() ?>/js/main.js"></script>

    <!-- datatable javascript -->
    <script src="<?= base_url() ?>/vendor/datatables/datatables.min.js"></script>
    <script src="<?= base_url() ?>/js/preview/datatables.min.js"></script>

    <!-- modal javascript -->
    <script src="<?= base_url() ?>/js/preview/settings-panel.min.js"></script>

    <script src="<?= base_url() ?>/vendor/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url() ?>/js/preview/default-dashboard.min.js"></script>

    <div class="sidebar-mobile-overlay"></div>

    <script src="<?= base_url() ?>/js/preview/slide-nav.min.js"></script>

    <!-- datatable javasript -->
    <script src="<?= base_url('/js/jquery-3.5.1.js') ?>"></script>
    <script src="<?= base_url('/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('/js/jquery.dataTables.min.js') ?>"></script>

    <!-- modals -->
    <script src="<?= base_url() ?>/js/preview/modal.min.js"></script>
</body>

</html>