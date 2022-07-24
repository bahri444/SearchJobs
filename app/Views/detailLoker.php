<?=$this->extend('layout/template');?>
<?=$this->section('content');?>
  <div class="page-content">
    
<div class="container-fluid">
  <div class="page-content__header">
    <div>
      <h2 class="page-content__header-heading">Badges, Labels</h2>
    </div>
  </div>
  <div class="main-container">
    <img src="img/logo.png" width="100%" height="200%">
  </div>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi tenetur dolore quis aut accusamus consequuntur vel optio harum doloribus laborum aliquam quisquam expedita enim non nam repellat assumenda officia culpa voluptatibus dolores fugit nulla, quo ullam eveniet. Vero dolor nam possimus similique dolores cupiditate vel et rerum dolorum illo aliquam delectus sint ipsa, ducimus non maxime eaque mollitia ullam harum molestias! Nulla soluta expedita maxime et odio, tenetur ex voluptas voluptates ullam odit ducimus exercitationem aliquid sunt. Dolore quisquam incidunt itaque rerum perferendis temporibus pariatur assumenda debitis officiis. Officia alias deserunt quas expedita facilis totam ratione sapiente aut laboriosam asperiores!</p>
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
<?=$this->endsection('content');?>

