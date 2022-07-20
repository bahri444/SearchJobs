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
            <div class="page-preloader__loader-desc">Widgets update</div>
            <div class="progress progress-rounded page-preloader__loader-progress">
                <div id="page-loader-progress-bar" class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="page-preloader__copyright">ThemesAnytime, 2018</div>
    </div>

    <!-- navbar Atas -->
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

                <!-- menu Pencarian -->
                <div class="navbar__menu-side">
                    <div class="navbar-search navbar__menu-search">
                        <div class="input-group input-group-icon iconfont icon-right">
                            <input class="form-control navbar-search__input navbar__menu-search-input" type="text" placeholder="Search" /><span class="input-icon ua-icon-search"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- menu Notifikasi -->
            <div class="dropdown navbar-dropdown no-arrow navbar-notify-dropdown">
                <a class="dropdown-toggle navbar-dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="navbar-notify navbar-notify--notifications">
                        <span>
                            <span class="navbar-notify__icon mdi mdi-bell"></span>
                            <span class="navbar-notify__text">Notifications</span>
                        </span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-notifications">
                    <div class="navbar-dropdown-notifications__header">
                        <span>NOTIFICATIONS</span>
                        <a href="#" class="navbar-dropdown-notifications__mark-read">
                            Mark all as read <span class="navbar-dropdown-notifications__mark-read-icon ua-icon-arrow-circle-down"></span>
                        </a>
                    </div>
                    <div class="navbar-dropdown-notifications__body js-scrollable">
                        <div class="navbar-dropdown-notification is-new">
                            <div class="navbar-dropdown-notification__user">
                                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-4.png" alt="" width="40" height="40">
                                <div class="ua-icon-circle-check navbar-dropdown-notification__icon color-success"></div>
                            </div>
                            <div class="navbar-dropdown-notification__content">
                                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                            </div>
                            <span class="navbar-dropdown-notification__date">9:49 AM</span>
                        </div>
                        <div class="navbar-dropdown-notification">
                            <div class="navbar-dropdown-notification__user">
                                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-5.png" alt="" width="40" height="40">
                                <div class="ua-icon-letter-alt navbar-dropdown-notification__icon color-danger navbar-dropdown-notification__icon--letter"></div>
                            </div>
                            <div class="navbar-dropdown-notification__content">
                                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                            </div>
                            <span class="navbar-dropdown-notification__date">9:49 AM</span>
                        </div>
                        <div class="navbar-dropdown-notification">
                            <div class="navbar-dropdown-notification__user">
                                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-6.png" alt="" width="40" height="40">
                                <div class="ua-icon-warning navbar-dropdown-notification__icon color-warning navbar-dropdown-notification__icon--warning"></div>
                            </div>
                            <div class="navbar-dropdown-notification__content">
                                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                            </div>
                            <span class="navbar-dropdown-notification__date">9:49 AM</span>
                        </div>
                        <div class="navbar-dropdown-notification">
                            <div class="navbar-dropdown-notification__user">
                                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-7.png" alt="" width="40" height="40">
                                <div class="ua-icon-circle-check navbar-dropdown-notification__icon color-success"></div>
                            </div>
                            <div class="navbar-dropdown-notification__content">
                                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                            </div>
                            <span class="navbar-dropdown-notification__date">9:49 AM</span>
                        </div>
                        <div class="navbar-dropdown-notification__date-separator">Yesterday</div>
                        <div class="navbar-dropdown-notification">
                            <div class="navbar-dropdown-notification__user">
                                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-8.png" alt="" width="40" height="40">
                                <div class="ua-icon-letter-alt navbar-dropdown-notification__icon color-danger navbar-dropdown-notification__icon--letter"></div>
                            </div>
                            <div class="navbar-dropdown-notification__content">
                                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                            </div>
                            <span class="navbar-dropdown-notification__date">9:49 AM</span>
                        </div>
                        <div class="navbar-dropdown-notification">
                            <div class="navbar-dropdown-notification__user">
                                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-9.png" alt="" width="40" height="40">
                                <div class="ua-icon-warning navbar-dropdown-notification__icon color-warning navbar-dropdown-notification__icon--warning"></div>
                            </div>
                            <div class="navbar-dropdown-notification__content">
                                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                            </div>
                            <span class="navbar-dropdown-notification__date">9:49 AM</span>
                        </div>
                        <div class="navbar-dropdown-notification">
                            <div class="navbar-dropdown-notification__user">
                                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-10.png" alt="" width="40" height="40">
                                <div class="ua-icon-circle-check navbar-dropdown-notification__icon color-success"></div>
                            </div>
                            <div class="navbar-dropdown-notification__content">
                                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                            </div>
                            <span class="navbar-dropdown-notification__date">9:49 AM</span>
                        </div>
                    </div>
                    <a class="navbar-dropdown-notifications__view-all" href="#"><span class="icon ua-icon-view-all"></span><span>View all</span></a>
                </div>
            </div>

            <!-- menu pesan -->
            <div class="dropdown navbar-dropdown no-arrow navbar-notify-dropdown navbar-notify-dropdown--messages">
                <a class="dropdown-toggle navbar-dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="navbar-notify">
                        <span>
                            <span class="navbar-notify__icon mdi mdi-email"></span>
                            <span class="navbar-notify__text">Messages</span>
                        </span>
                        <span class="navbar-notify__indicator"></span>
                        <!--<span class="navbar-notify__amount">5</span>-->
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-notifications navbar-dropdown-messages">
                    <div class="navbar-dropdown-notifications__header"><span>MESSAGES</span>
                        <a href="#" class="navbar-dropdown-notifications__mark-read">
                            Mark all as read <span class="navbar-dropdown-notifications__mark-read-icon ua-icon-arrow-circle-down"></span>
                        </a>
                    </div>
                    <div class="navbar-dropdown-notifications__body navbar-dropdown-notifications__body-messages js-scrollable">

                        <!-- notifikasi pesan dari personal -->
                        <div class="navbar-dropdown-notifications__item">
                            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="img/users/user-5.png" alt="" width="40" height="40" />
                            <div class="navbar-dropdown-notifications__item-notify">
                                <div>
                                    <span class="icon ua-icon-comments"></span>
                                    <strong>Gabriel Saunders</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
                                </div>
                                <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
                            </div>
                            <div class="navbar-dropdown-notifications__item-actions">
                                <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
                                <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
                            </div>
                        </div>

                        <!-- tombol view all -->
                    </div><a class="navbar-dropdown-notifications__view-all" href="#"><span class="icon ua-icon-view-all"></span><span>View all</span></a>
                </div>
            </div>

        </div>
    </div>

    <!-- kontent menu kiri atau dashboard -->
    <div class="page-wrap">
        <div class="sidebar-section">
            <div class="sidebar-section__scroll">

                <!-- kop website -->
                <div class="sidebar-user-a">
                    <img src="img/users/user-19.png" alt="" class="sidebar-user-a__avatar rounded-circle">
                    <div class="sidebar-user-a__name">Dinas Tenaga Kerja</div>
                    <div class="sidebar-user-a__name">Dan Transmigrasi</div>
                </div>
                <ul class="sidebar-section-nav">

                    <!-- icon dashboard -->
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="index.html">
                            <span class="sidebar-section-nav__item-icon ua-icon-home"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="index.html">
                            <span class="sidebar-section-nav__item-icon ua-icon-widget-paper"></span>
                            <span>Lowongan Kerja</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="index.html">
                            <span class="sidebar-section-nav__item-icon ua-icon-widget-user-group"></span>
                            <span>Data Pencari Kerja</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="index.html">
                            <span class="sidebar-section-nav__item-icon ua-icon-widget-users"></span>
                            <span>Data Pelamar</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="index.html">
                            <span class="sidebar-section-nav__item-icon ua-icon-company"></span>
                            <span>Data Perusahaan</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="index.html">
                            <span class="sidebar-section-nav__item-icon ua-icon-avatar-placeholder"></span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="index.html">
                            <span class="sidebar-section-nav__item-icon ua-icon-user-solid"></span>
                            <span>User</span>
                        </a>
                    </li>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="index.html">
                            <span class="sidebar-section-nav__item-icon ua-icon-view-all"></span>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
                <div>
                </div>
            </div>
        </div>
        <?= $this->renderSection('content') ?>

        <script src="vendor/echarts/echarts.min.js"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/popper/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/select2/js/select2.full.min.js"></script>
        <script src="vendor/simplebar/simplebar.js"></script>
        <script src="vendor/text-avatar/jquery.textavatar.js"></script>
        <script src="vendor/tippyjs/tippy.all.min.js"></script>
        <script src="vendor/flatpickr/flatpickr.min.js"></script>
        <script src="vendor/wnumb/wNumb.js"></script>
        <script src="js/main.js"></script>


        <script src="vendor/jquery-circle-progress/circle-progress.min.js"></script>
        <script src="js/preview/default-dashboard.min.js"></script>

        <div class="sidebar-mobile-overlay"></div>

        <div class="settings-panel">
            <div class="settings-panel__header">
                <span class="settings-panel__close ua-icon-modal-close"></span>

                <h5 class="settings-panel__heading">Theme Customizer</h5>
                <div class="settings-panel__desc">Customize & Preview In Real Time</div>
            </div>
            <div class="settings-panel__body">
                <div class="settings-panel__layout-options">
                    <h6 class="settings-panel__block-heading">Layout Options</h6>
                    <div class="settings-panel__layout-option">
                        <label class="switch-inline">
                            <span class="switch">
                                <input type="checkbox" id="collapse-sidebar">
                                <span class="switch-slider"></span>
                            </span>
                            <span class="switch-inline__text">Collapse Sidebar</span>
                        </label>
                    </div>
                    <div class="settings-panel__layout-option">
                        <label class="switch-inline">
                            <span class="switch">
                                <input type="checkbox" id="hide-sidebar">
                                <span class="switch-slider"></span>
                            </span>
                            <span class="switch-inline__text">Hide Sidebar</span>
                        </label>
                    </div>
                    <div class="settings-panel__layout-option">
                        <label class="switch-inline">
                            <span class="switch">
                                <input type="checkbox" id="full-height-sidebar">
                                <span class="switch-slider"></span>
                            </span>
                            <span class="switch-inline__text">Full Height Sidebar</span>
                        </label>
                    </div>
                    <div class="settings-panel__layout-option">
                        <label class="switch-inline">
                            <span class="switch">
                                <input type="checkbox" id="rounded-form-controls">
                                <span class="switch-slider"></span>
                            </span>
                            <span class="switch-inline__text">Rounded Form Controls</span>
                        </label>
                    </div>
                </div>
                <div class="settings-panel__theme-colors">
                    <h6 class="settings-panel__block-heading">Theme Colors</h6>

                    <ul class="list-unstyled">
                        <li>
                            <label class="color-radio js-settings-color">
                                <input type="radio" name="settings_color" data-style="style-b">
                                <span class="color-radio__color color-radio__color--deep-cerulean"></span>
                                <span class="color-radio__text">#2</span>
                            </label>
                        </li>
                        <li>
                            <label class="color-radio js-settings-color is-checked">
                                <input type="radio" name="settings_color" data-style="style" checked>
                                <span class="color-radio__color color-radio__color--river-bad"></span>
                                <span class="color-radio__text">#3</span>
                            </label>
                        </li>
                        <li>
                            <label class="color-radio js-settings-color">
                                <input type="radio" name="settings_color" data-style="style-d">
                                <span class="color-radio__color color-radio__color--sun-juan"></span>
                                <span class="color-radio__text">#4</span>
                            </label>
                        </li>
                        <li>
                            <label class="color-radio js-settings-color">
                                <input type="radio" name="settings_color" data-style="style-e">
                                <span class="color-radio__color color-radio__color--bermuda-gray"></span>
                                <span class="color-radio__text">#5</span>
                            </label>
                        </li>
                        <li>
                            <label class="color-radio js-settings-color">
                                <input type="radio" name="settings_color" data-style="style-f">
                                <span class="color-radio__color color-radio__color--deep-sea"></span>
                                <span class="color-radio__text">#6</span>
                            </label>
                        </li>
                        <li>
                            <label class="color-radio js-settings-color">
                                <input type="radio" name="settings_color" data-style="style-i">
                                <span class="color-radio__color color-radio__color--wine-berry"></span>
                                <span class="color-radio__text">#7</span>
                            </label>
                        </li>
                        <li>
                            <label class="color-radio js-settings-color">
                                <input type="radio" name="settings_color" data-style="style-g">
                                <span class="color-radio__color  color-radio__color--big-stone"></span>
                                <span class="color-radio__text">#8</span>
                            </label>
                        </li>
                        <li>
                            <label class="color-radio js-settings-color">
                                <input type="radio" name="settings_color" data-style="style-j">
                                <span class="color-radio__color color-radio__color--killarney"></span>
                                <span class="color-radio__text">#9</span>
                            </label>
                        </li>
                        <li>
                            <label class="color-radio js-settings-color">
                                <input type="radio" name="settings_color" data-style="style-h">
                                <span class="color-radio__color color-radio__color--kabul"></span>
                                <span class="color-radio__text">#10</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <span class="settings-panel-control">
            <span class="settings-panel-control__icon ua-icon-settings"></span>
        </span>
        <script src="js/preview/settings-panel.min.js"></script>


        <div class="slide-nav">
            <div class="slide-nav__header">
                <a href="#" class="slide-nav__back ua-icon-step-arrow-left"></a>
                <img src="img/logo.png" alt="" class="slide-nav__logo">
            </div>
            <div class="slide-nav__body">
                <div class="slide-nav__scrollpane js-scrollable">
                    <div class="slide-nav__items">
                        <a href="#" class="slide-nav__item">
                            <img src="img/slidenav/30.png" alt="" class="slide-nav__item-image">
                            <span class="slide-nav__item-text">Storage</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= base_url() ?>/js/preview/slide-nav.min.js"></script>
</body>

</html>