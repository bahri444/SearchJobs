<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Typography / Universe Admin</title>
  <link rel="shortcut icon" href="img/favicon.png">

  
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

  <span class="navbar-brand">
    <a href="/"><img src="img/logo.png" alt="" class="navbar-brand__logo"></a>
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

  <div class="collapse navbar-collapse" id="navbar-collapse">
    <div class="navbar__menu">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link">
            Home
          </a>
          
        </li>
        <li class="nav-item dropdown dropdown__columns navbar__menu-item">
          <a class="nav-link ">
            info Lowongan
          </a>
        
        </li>
        <li class="nav-item navbar__menu-item">
          <a class="nav-link" href="#">Perusahaan</a>
        </li>
      </ul>
      

    </div>
    <div class="dropdown navbar-dropdown no-arrow navbar-notify-dropdown">
      
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-notifications">
        
        <div class="navbar-dropdown-notifications__body js-scrollable">
          <!--<div class="navbar-dropdown-notifications__body-empty"><img class="navbar-dropdown-notifications__body-empty-image" src="img/empty-notifications.png" alt=""/>
            <div class="navbar-dropdown-notifications__body-empty-text">You`re up to date!</div>
          </div>-->

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
    <div class="dropdown navbar-dropdown no-arrow navbar-notify-dropdown navbar-notify-dropdown--messages">
      
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-notifications navbar-dropdown-messages">
        
        <div class="navbar-dropdown-notifications__body navbar-dropdown-notifications__body-messages js-scrollable">
          <div class="navbar-dropdown-notifications__item is-unread">
            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="img/users/user-4.png" alt="" width="40" height="40"/>
            <div class="navbar-dropdown-notifications__item-notify">
              
              <!-- <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div> -->
            </div>
            
          </div>
          <div class="navbar-dropdown-notifications__item">
            
            
          </div>
          <div class="navbar-dropdown-notifications__item is-unread">
            
            <div class="navbar-dropdown-notifications__item-actions">
              <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
              <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
            </div>
          </div>
          <div class="navbar-dropdown-notifications__item is-unread">
           
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
    
      <a class="dropdown-toggle navbar-dropdown-toggle navbar-dropdown-toggle__user"  href="#">
        <img src="img/users/user-3.png" alt="" class="navbar-dropdown">
        
      </a>
      
    
  </div>
</div>





  <div class="page-content">
    
<div class="container-fluid">
  <div class="page-content__header">
    
  </div>
  <div class="row">
    <div class="col-12"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <div class="main-container">
        <h3>Hierarchy of Type</h3>
        <h1>Charles Barkley trips over the lazy dog.
          <span>24</span>
        </h1>
        <h2>Charles Barkley trips over the lazy dog.
          <span>21</span>
        </h2>
        <h3>Charles Barkley trips over the lazy dog.
          <span>18</span>
        </h3>
        <h4>Charles Barkley trips over the lazy dog.
          <span>16</span>
        </h4>
        <h5>Charles Barkley trips over the lazy dog.
          <span>14</span>
        </h5>
        <h6>Charles Barkley trips over the lazy dog.
          <span>12</span>
        </h6>
      </div>
    </div>
 
<div class="col-6">
    <div class="main-container">
        <h3>Basic Paragraph
            <span>14px</span>
        </h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
        
        <h5>Charles Barkley trips over the lazy dog.
          <span>14</span>
        </h5>
        <h6>Charles Barkley trips over the lazy dog.
          
        </h6>
      </div>
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
        <!--<li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-a">
            <span class="color-radio__color"></span>
            <span class="color-radio__text">#1</span>
          </label>
        </li>-->
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
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/31.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Search</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/32.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Calendar</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/33.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Mail</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/34.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Images</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/35.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">News</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/36.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Maps</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/37.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Market</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/38.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Weather</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/39.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Music</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/40.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Tickets</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/41.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Stats</span>
        </a>
      </div>
    </div>
  </div>
</div>
<script src="js/preview/slide-nav.min.js"></script>



</body>
</html>
