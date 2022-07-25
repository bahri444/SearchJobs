<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Draggable Panels / Universe Admin</title>
  <link rel="shortcut icon" href="img/favicon.png">
<link rel="stylesheet" href="vendor/layout-grid/css/layout-grid.min.css">
<link rel="stylesheet" href="fonts/open-sans/style.min.css"> <!-- common font  styles  -->
<link rel="stylesheet" href="fonts/universe-admin/style.css"> <!-- universeadmin icon font styles -->
<link rel="stylesheet" href="fonts/mdi/css/materialdesignicons.min.css"> <!-- meterialdesignicons -->
<link rel="stylesheet" href="fonts/iconfont/style.css"> <!-- DEPRECATED iconmonstr -->
<link rel="stylesheet" href="vendor/flatpickr/flatpickr.min.css"> <!-- original flatpickr plugin (datepicker) styles -->
<link rel="stylesheet" href="vendor/simplebar/simplebar.css"> <!-- original simplebar plugin (scrollbar) styles  -->
<link rel="stylesheet" href="vendor/tagify/tagify.css"> <!-- styles for tags -->
<link rel="stylesheet" href="vendor/tippyjs/tippy.css"> <!-- original tippy plugin (tooltip) styles -->
<link rel="stylesheet" href="vendor/select2/css/select2.min.css"> <!-- original select2 plugin styles -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"> <!-- original bootstrap styles -->
<link rel="stylesheet" href="css/style.min.css" id="stylesheet"> <!-- universeadmin styles -->
<script src="js/ie.assign.fix.min.js"></script>
</head>
<body class="js-loading "> <!-- add for rounded corners: form-controls-rounded -->
<div class="page-preloader js-page-preloader">
  <div class="page-preloader__logo">
    <img src="img/logo-black-lg.png" alt="" class="page-preloader__logo-image">
  </div>
  <div class="page-preloader__desc">Pro Edition</div>
  <div class="page-preloader__loader">
    <div class="page-preloader__loader-heading">System Loading</div>
    <div class="page-preloader__loader-desc">Widgets update</div>
    <div class="progress progress-rounded page-preloader__loader-progress">
      <div id="page-loader-progress-bar" class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>
  <div class="page-preloader__copyright">ThemesAnytime, 2018</div>
</div>
  <div class="navbar navbar-light navbar-expand-lg">
  <button class="sidebar-toggler" type="button">
    <span class="ua-icon-sidebar-open sidebar-toggler__open"></span>
    <span class="ua-icon-alert-close sidebar-toggler__close"></span>
  </button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
    <span class="ua-icon-navbar-open navbar-toggler__open"></span>
    <span class="ua-icon-alert-close navbar-toggler__close"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-collapse">
    <div class="navbar__menu">
      <ul class="navbar-nav">
        <li class="nav-item dropdown navbar__menu-item">
          <a class="nav-link">
            Home
          </a>
        </li>
        <li class="nav-item dropdown dropdown__columns navbar__menu-item">
          <a class="nav-link">
            Info Lowongan
          </a>
        </li>
        <li class="nav-item navbar__menu-item">
          <a class="nav-link" href="#">Tentang Kami</a>
        </li>
      </ul>
      <div class="navbar__menu-side">
        <div class="navbar__actions">
          <a href="https://themeforest.net/item/universeadmin-powerful-responsive-bootstrap-4-admin-template/20926048?ref=themesanytime" class="btn btn-info icon-left subnav__header-side-item">
            Register 
          </a>
        </div>
        <div class="navbar__actions">
          <a href="https://themeforest.net/item/universeadmin-powerful-responsive-bootstrap-4-admin-template/20926048?ref=themesanytime" class="btn btn-info icon-left subnav__header-side-item">
            Login 
          </a>
        </div>
      </div>
    </div>
    </div>
    <div class="dropdown navbar-dropdown no-arrow navbar-notify-dropdown navbar-notify-dropdown--messages">
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-notifications navbar-dropdown-messages">
        <div class="navbar-dropdown-notifications__header"><span>MESSAGES</span>
          <a href="#" class="navbar-dropdown-notifications__mark-read">
            Mark all as read <span class="navbar-dropdown-notifications__mark-read-icon ua-icon-arrow-circle-down"></span>
          </a>
        </div>
        <div class="navbar-dropdown-notifications__body navbar-dropdown-notifications__body-messages js-scrollable">
          <div class="navbar-dropdown-notifications__item is-unread">
            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="img/users/user-4.png" alt="" width="40" height="40"/>
            <div class="navbar-dropdown-notifications__item-notify">
              <div>
                <span class="icon ua-icon-reply-to"></span>
                <strong>Gabriel Saunders</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
              </div>
              <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
            </div>
            <div class="navbar-dropdown-notifications__item-actions">
              <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
              <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
            </div>
          </div>
          <div class="navbar-dropdown-notifications__item">
            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="img/users/user-5.png" alt="" width="40" height="40"/>
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
          <div class="navbar-dropdown-notifications__item is-unread">
            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="img/users/user-6.png" alt="" width="40" height="40"/>
            <div class="navbar-dropdown-notifications__item-notify">
              <div>
                <span class="icon ua-icon-star"></span>
                <strong>Shawna Cohen</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
              </div>
              <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
            </div>
            <div class="navbar-dropdown-notifications__item-actions">
              <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
              <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
            </div>
          </div>
          <div class="navbar-dropdown-notifications__item is-unread">
            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="img/users/user-7.png" alt="" width="40" height="40"/>
            <div class="navbar-dropdown-notifications__item-notify">
              <div>
                <span class="icon ua-icon-download"></span>
                <strong>Jason Kendall</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
              </div>
              <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
            </div>
            <div class="navbar-dropdown-notifications__item-actions">
              <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
              <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
            </div>
          </div>
        </div><a class="navbar-dropdown-notifications__view-all" href="#"><span class="icon ua-icon-view-all"></span><span>View all</span></a>
      </div>
    </div>
    <div class="dropdown navbar-dropdown no-arrow navbar-help-dropdown navbar-notify-dropdown--help">
  </div>
</div>
  <div class="page-content">
<div class="container-fluid">
  <div class="page-content__header">
    <div>
      <h2 class="page-content__header-heading">Info Lowongan Kerja</h2>
    </div>
  </div>
  <div id="draggable-grid" class="lt-container lt-xs-h-20 lt-sm-h-10 lt-md-h-20 lt-lg-h-10 draggable-grid" data-arrange="lt-grid">
    <div draggable="true" class="lt lt-xs-x-0 lt-xs-y-0 lt-xs-w-12 lt-xs-h-12 lt-sm-x-0 lt-sm-y-0 lt-sm-w-12 lt-sm-h-8 lt-md-x-0 lt-md-y-0 lt-md-w-6 lt-md-h-6 lt-lg-x-0 lt-lg-y-0 lt-lg-w-4 lt-lg-h-5">
      <div class="lt-body">
        <div class="panel-widget">
          <div class="panel-widget__header">
            <div>
              <h3>Loker1</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div draggable="true" class="lt lt-xs-x-0 lt-xs-y-12 lt-xs-w-12 lt-xs-h-12 lt-sm-x-0 lt-sm-y-8 lt-sm-w-12 lt-sm-h-8 lt-md-x-6 lt-md-y-0 lt-md-w-6 lt-md-h-6 lt-lg-x-4 lt-lg-y-0 lt-lg-w-4 lt-lg-h-5">
      <div class="lt-body">
        <div class="panel-widget">
          <div class="panel-widget__header">
            <div>
              <h3>Loker2</h3>
            </div>
            <div class="panel-widget__header-controls">
            </div>
          </div>
          <div class="panel-widget__body">
          </div>
        </div>
      </div>
    </div>
    <div draggable="true" class="lt lt-xs-x-0 lt-xs-y-24 lt-xs-w-12 lt-xs-h-12 lt-sm-x-0 lt-sm-y-16 lt-sm-w-12 lt-sm-h-8 lt-md-x-0 lt-md-y-6 lt-md-w-6 lt-md-h-6 lt-lg-x-8 lt-lg-y-0 lt-lg-w-4 lt-lg-h-5">
      <div class="lt-body">
        <div class="panel-widget">
          <div class="panel-widget__header">
            <div>
              <h3>Loker3</h3>
            </div> 
          </div>
          <div class="panel-widget__body">  
          </div>
        </div>
      </div>
    </div>
</div>
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
<script src="vendor/layout-grid/js/layout-grid.min.js"></script>
<script src="js/preview/draggable-panels.min.js"></script>
<script src="js/preview/settings-panel.min.js"></script>
<script src="js/preview/slide-nav.min.js"></script>
</body>
</html>