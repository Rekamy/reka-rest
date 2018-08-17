<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Materialize - Material Design Admin Template</title>
  <!-- Favicons-->
  <link rel="icon" href="vue/materialize/images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="vue/materialize/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.html">
  <!-- For Windows Phone -->
  <!-- CORE CSS-->
  <link href="vue/materialize/css/themes/horizontal-menu/materialize.css" type="text/css" rel="stylesheet">
  <link href="vue/materialize/css/themes/horizontal-menu/style.css" type="text/css" rel="stylesheet">
  <!-- Custome CSS-->
  <link href="vue/materialize/css/custom/custom.css" type="text/css" rel="stylesheet">
  <!-- CSS style Horizontal Nav-->
  <link href="vue/materialize/css/layouts/style-horizontal.css" type="text/css" rel="stylesheet">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="vue/materialize/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
  <link href="vue/materialize/vendors/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet">
  <link href="vue/materialize/vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
  <link href="vue/materialize/vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body id="layouts-horizontal">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
  <?php include('header.php') ?>
  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav hide-on-large-only">
        <ul id="slide-out" class="side-nav leftside-navigation">
          <li class="no-padding">
            <ul class="collapsible" data-collapsible="accordion">
              <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan active">
                  <i class="material-icons">dashboard</i>
                  <span>Dashboard</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="dashboard-ecommerce.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>eCommerce</span>
                      </a>
                    </li>
                    <li clas="active">
                      <a href="index.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Analytics</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                  <i class="material-icons">dvr</i>
                  <span>Templates</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="collapsible-menu/index.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span> Collapsible Menu</span>
                      </a>
                    </li>
                    <li>
                      <a href="fixed-menu/index.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span> Fixed Menu</span>
                      </a>
                    </li>
                    <li>
                      <a href="overlay-menu/index.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span> Overlay Menu</span>
                      </a>
                    </li>
                    <li>
                      <a href="horizontal-menu/index.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Horizontal Menu</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                  <i class="material-icons">web</i>
                  <span>Layouts</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="layout-light.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Light Layout</span>
                      </a>
                    </li>
                    <li>
                      <a href="layout-dark.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Dark Layout</span>
                      </a>
                    </li>
                    <li>
                      <a href="layout-fixed-footer.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Fixed Footer</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                  <i class="material-icons">cast</i>
                  <span>Cards</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="cards-basic.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span> Basic</span>
                      </a>
                    </li>
                    <li>
                      <a href="cards-advance.html" class="waves-effect waves-cyan">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Advance</span>
                      </a>
                    </li>
                    <li>
                      <a href="cards-extended.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Extended</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a href="app-email.html" class="waves-effect waves-cyan">
                  <i class="material-icons">mail_outline</i>
                  <span>Mailbox</span>
                </a>
              </li>
              <li class="bold">
                <a href="app-calendar.html" class="waves-effect waves-cyan">
                  <i class="material-icons">today</i>
                  <span>Calender</span>
                </a>
              </li>
              <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                  <i class="material-icons">invert_colors</i>
                  <span>CSS</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="css-typography.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Typography</span>
                      </a>
                    </li>
                    <li>
                      <a href="css-color.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Color</span>
                      </a>
                    </li>
                    <li>
                      <a href="css-grid.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Grid</span>
                      </a>
                    </li>
                    <li>
                      <a href="css-helpers.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Helpers</span>
                      </a>
                    </li>
                    <li>
                      <a href="css-media.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Media</span>
                      </a>
                    </li>
                    <li>
                      <a href="css-pulse.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Pulse</span>
                      </a>
                    </li>
                    <li>
                      <a href="css-sass.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Sass</span>
                      </a>
                    </li>
                    <li>
                      <a href="css-shadow.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Shadow</span>
                      </a>
                    </li>
                    <li>
                      <a href="css-animations.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Animations</span>
                      </a>
                    </li>
                    <li>
                      <a href="css-transitions.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Transition</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header  waves-effect waves-cyan">
                  <i class="material-icons">photo_filter</i>
                  <span>Basic UI</span>
                </a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li class="bold">
                      <a class="collapsible-header  waves-effect waves-cyan">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Buttons</span>
                      </a>
                      <div class="collapsible-body">
                        <ul class="collapsible" data-collapsible="accordion">
                          <li>
                            <a href="ui-basic-buttons.html">
                              <i class="material-icons">keyboard_arrow_right</i>
                              <span>Basic</span>
                            </a>
                          </li>
                          <li>
                            <a href="ui-extended-buttons.html">
                              <i class="material-icons">keyboard_arrow_right</i>
                              <span>Extended</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="ui-icons.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Icons</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-alerts.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Alerts</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-badges.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Badges</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-breadcrumbs.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Breadcrumbs</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-chips.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Chips</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-collections.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Collections</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-navbar.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Navbar</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-pagination.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Pagination</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-preloader.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Preloader</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                  <i class="material-icons">library_add</i>
                  <span>Advanced UI</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="advance-ui-carousel.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Carousel</span>
                      </a>
                    </li>
                    <li>
                      <a href="advance-ui-collapsibles.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Collapsible</span>
                      </a>
                    </li>
                    <li>
                      <a href="advance-ui-toasts.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Toasts</span>
                      </a>
                    </li>
                    <li>
                      <a href="advance-ui-tooltip.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Tooltip</span>
                      </a>
                    </li>
                    <li>
                      <a href="advance-ui-dropdown.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Dropdown</span>
                      </a>
                    </li>
                    <li>
                      <a href="advance-ui-feature-discovery.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Feature Discovery</span>
                      </a>
                    </li>
                    <li>
                      <a href="advanced-ui-media.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Media</span>
                      </a>
                    </li>
                    <li>
                      <a href="advanced-ui-modals.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Modals</span>
                      </a>
                    </li>
                    <li>
                      <a href="advance-ui-scrollfire.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>ScrollFire</span>
                      </a>
                    </li>
                    <li>
                      <a href="advance-ui-scrollspy.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Scrollspy</span>
                      </a>
                    </li>
                    <li>
                      <a href="advance-ui-tabs.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Tabs</span>
                      </a>
                    </li>
                    <li>
                      <a href="advance-ui-transitions.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Transitions</span>
                      </a>
                    </li>
                    <li>
                      <a href="advance-ui-waves.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Waves</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                  <i class="material-icons">add_to_queue</i>
                  <span>Extra Components</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="extra-components-range-slider.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Range Slider</span>
                      </a>
                    </li>
                    <li>
                      <a href="extra-components-sweetalert.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>SweetAlert</span>
                      </a>
                    </li>
                    <li>
                      <a href="extra-components-nestable.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Shortable & Nestable</span>
                      </a>
                    </li>
                    <li>
                      <a href="extra-components-translation.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Language Translation</span>
                      </a>
                    </li>
                    <li>
                      <a href="extra-components-highlight.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Highlight</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header  waves-effect waves-cyan">
                  <i class="material-icons">border_all</i>
                  <span>Tables</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="table-basic.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Basic Tables</span>
                      </a>
                    </li>
                    <li>
                      <a href="table-data.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Data Tables</span>
                      </a>
                    </li>
                    <li>
                      <a href="table-jsgrid.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>jsGrid</span>
                      </a>
                    </li>
                    <li>
                      <a href="table-editable.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Editable Table</span>
                      </a>
                    </li>
                    <li>
                      <a href="table-floatThead.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>FloatThead</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header  waves-effect waves-cyan">
                  <i class="material-icons">chrome_reader_mode</i>
                  <span>Forms</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="form-elements.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Form Elements</span>
                      </a>
                    </li>
                    <li>
                      <a href="form-layouts.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Form Layouts</span>
                      </a>
                    </li>
                    <li>
                      <a href="form-validation.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Form Validations</span>
                      </a>
                    </li>
                    <li>
                      <a href="form-masks.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Form Masks</span>
                      </a>
                    </li>
                    <li>
                      <a href="form-file-uploads.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>File Uploads</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header  waves-effect waves-cyan">
                  <i class="material-icons">pages</i>
                  <span>Pages</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="page-contact.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Contact Page</span>
                      </a>
                    </li>
                    <li>
                      <a href="page-todo.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>ToDos</span>
                      </a>
                    </li>
                    <li>
                      <a href="page-blog-1.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Blog Type 1</span>
                      </a>
                    </li>
                    <li>
                      <a href="page-blog-2.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Blog Type 2</span>
                      </a>
                    </li>
                    <li>
                      <a href="page-404.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>404</span>
                      </a>
                    </li>
                    <li>
                      <a href="page-500.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>500</span>
                      </a>
                    </li>
                    <li>
                      <a href="page-blank.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Blank</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header  waves-effect waves-cyan">
                  <i class="material-icons">add_shopping_cart</i>
                  <span>eCommers</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="eCommerce-products-page.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Products Page</span>
                      </a>
                    </li>
                    <li>
                      <a href="eCommerce-pricing.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Pricing Table</span>
                      </a>
                    </li>
                    <li>
                      <a href="eCommerce-invoice.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Invoice</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header  waves-effect waves-cyan">
                  <i class="material-icons">perm_media</i>
                  <span>Medias</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="media-gallary-page.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Gallery Page</span>
                      </a>
                    </li>
                    <li>
                      <a href="media-hover-effects.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Image Hover Effects</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header  waves-effect waves-cyan">
                  <i class="material-icons">account_circle</i>
                  <span>User</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="user-profile-page.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>User Profile</span>
                      </a>
                    </li>
                    <li>
                      <a href="user-login.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Login</span>
                      </a>
                    </li>
                    <li>
                      <a href="user-register.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Register</span>
                      </a>
                    </li>
                    <li>
                      <a href="user-forgot-password.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Forgot Password</span>
                      </a>
                    </li>
                    <li>
                      <a href="user-lock-screen.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Lock Screen</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                  <i class="material-icons">pie_chart_outlined</i>
                  <span>Charts</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="charts-chartjs.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Chart JS</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts-chartist.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Chartist</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts-morris.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Morris Charts</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts-xcharts.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>xCharts</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts-flotcharts.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Flot Charts</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts-sparklines.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Sparkline Charts</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li class="li-hover">
            <p class="ultra-small margin more-text">MORE</p>
          </li>
          <li>
            <a href="angular-ui.html">
              <i class="material-icons">verified_user</i>
              <span>Angular UI</span>
            </a>
          </li>
          <li class="no-padding">
            <ul class="collapsible" data-collapsible="accordion">
              <li class="bold">
                <a class="collapsible-header  waves-effect waves-cyan">
                  <i class="material-icons">photo_filter</i>
                  <span>Menu Levels</span>
                </a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <a href="ui-basic-buttons.html">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Second level</span>
                      </a>
                    </li>
                    <li class="bold">
                      <a class="collapsible-header  waves-effect waves-cyan">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Second level child</span>
                      </a>
                      <div class="collapsible-body">
                        <ul class="collapsible" data-collapsible="accordion">
                          <li>
                            <a href="ui-basic-buttons.html">
                              <i class="material-icons">keyboard_arrow_right</i>
                              <span>Third level</span>
                            </a>
                          </li>
                          <li class="bold">
                            <a class="collapsible-header  waves-effect waves-cyan">
                              <i class="material-icons">keyboard_arrow_right</i>
                              <span>Third level child</span>
                            </a>
                            <div class="collapsible-body">
                              <ul class="collapsible" data-collapsible="accordion">
                                <li>
                                  <a href="ui-basic-buttons.html">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                    <span>Forth level</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="ui-extended-buttons.html">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                    <span>Forth level</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li>
            <a href="changelogs.html">
              <i class="material-icons">track_changes</i>
              <span>Changelogs</span>
            </a>
          </li>
          <li>
            <a href="changelogs.html">
              <i class="material-icons">help_outline</i>
              <span>Support</span>
            </a>
          </li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
          <i class="material-icons">menu</i>
        </a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START CONTENT -->
      <section id="content">
        <!--start container-->
        <div class="container">
          <!--card stats start-->
          <div id="card-stats">
            <div class="row">
              <div class="col s12 m6 l3">
                <div class="card">
                  <div class="card-content cyan white-text">
                    <p class="card-stats-title">
                      <i class="material-icons">person_outline</i> New Clients</p>
                      <h4 class="card-stats-number">566</h4>
                      <p class="card-stats-compare">
                        <i class="material-icons">keyboard_arrow_up</i> 15%
                        <span class="cyan text text-lighten-5">from yesterday</span>
                      </p>
                    </div>
                    <div class="card-action cyan darken-1">
                      <div id="clients-bar" class="center-align"></div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3">
                  <div class="card">
                    <div class="card-content red accent-2 white-text">
                      <p class="card-stats-title">
                        <i class="material-icons">attach_money</i>Total Sales</p>
                        <h4 class="card-stats-number">$8990.63</h4>
                        <p class="card-stats-compare">
                          <i class="material-icons">keyboard_arrow_up</i> 70%
                          <span class="red-text text-lighten-5">last month</span>
                        </p>
                      </div>
                      <div class="card-action red darken-1">
                        <div id="sales-compositebar" class="center-align"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m6 l3">
                    <div class="card">
                      <div class="card-content teal accent-4 white-text">
                        <p class="card-stats-title">
                          <i class="material-icons">trending_up</i> Today Profit</p>
                          <h4 class="card-stats-number">$806.52</h4>
                          <p class="card-stats-compare">
                            <i class="material-icons">keyboard_arrow_up</i> 80%
                            <span class="teal-text text-lighten-5">from yesterday</span>
                          </p>
                        </div>
                        <div class="card-action teal darken-1">
                          <div id="profit-tristate" class="center-align"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col s12 m6 l3">
                      <div class="card">
                        <div class="card-content deep-orange accent-2 white-text">
                          <p class="card-stats-title">
                            <i class="material-icons">content_copy</i> New Invoice</p>
                            <h4 class="card-stats-number">1806</h4>
                            <p class="card-stats-compare">
                              <i class="material-icons">keyboard_arrow_down</i> 3%
                              <span class="deep-orange-text text-lighten-5">from last month</span>
                            </p>
                          </div>
                          <div class="card-action  deep-orange darken-1">
                            <div id="invoice-line" class="center-align"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--card stats end-->
                  <!--chart dashboard start-->
                  <div id="chart-dashboard">
                    <div class="row">
                      <div class="col s12 m8 l8">
                        <div class="card">
                          <div class="card-move-up waves-effect waves-block waves-light">
                            <div class="move-up cyan darken-1">
                              <div>
                                <span class="chart-title white-text">Revenue</span>
                                <div class="chart-revenue cyan darken-2 white-text">
                                  <p class="chart-revenue-total">$4,500.85</p>
                                  <p class="chart-revenue-per">
                                    <i class="material-icons">arrow_drop_up</i> 21.80 %</p>
                                  </div>
                                  <div class="switch chart-revenue-switch right">
                                    <label class="cyan-text text-lighten-5">
                                      Month
                                      <input type="checkbox">
                                      <span class="lever"></span> Year
                                    </label>
                                  </div>
                                </div>
                                <div class="trending-line-chart-wrapper">
                                  <canvas id="trending-line-chart" height="70"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="card-content">
                              <a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                                <i class="material-icons activator">filter_list</i>
                              </a>
                              <div class="col s12 m3 l3">
                                <div id="doughnut-chart-wrapper">
                                  <canvas id="doughnut-chart" height="200"></canvas>
                                  <div class="doughnut-chart-status">4500
                                    <p class="ultra-small center-align">Sold</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col s12 m2 l2">
                                <ul class="doughnut-chart-legend">
                                  <li class="mobile ultra-small">
                                    <span class="legend-color"></span>Mobile</li>
                                    <li class="kitchen ultra-small">
                                      <span class="legend-color"></span> Kitchen</li>
                                      <li class="home ultra-small">
                                        <span class="legend-color"></span> Home</li>
                                      </ul>
                                    </div>
                                    <div class="col s12 m5 l6">
                                      <div class="trending-bar-chart-wrapper">
                                        <canvas id="trending-bar-chart" height="90"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Revenue by Month
                                      <i class="material-icons right">close</i>
                                    </span>
                                    <table class="responsive-table">
                                      <thead>
                                        <tr>
                                          <th data-field="id">ID</th>
                                          <th data-field="month">Month</th>
                                          <th data-field="item-sold">Item Sold</th>
                                          <th data-field="item-price">Item Price</th>
                                          <th data-field="total-profit">Total Profit</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td>January</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td>February</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                        </tr>
                                        <tr>
                                          <td>3</td>
                                          <td>March</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                        </tr>
                                        <tr>
                                          <td>4</td>
                                          <td>April</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                        </tr>
                                        <tr>
                                          <td>5</td>
                                          <td>May</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                        </tr>
                                        <tr>
                                          <td>6</td>
                                          <td>June</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                        </tr>
                                        <tr>
                                          <td>7</td>
                                          <td>July</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                        </tr>
                                        <tr>
                                          <td>8</td>
                                          <td>August</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                        </tr>
                                        <tr>
                                          <td>9</td>
                                          <td>Septmber</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                        </tr>
                                        <tr>
                                          <td>10</td>
                                          <td>Octomber</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                        </tr>
                                        <tr>
                                          <td>11</td>
                                          <td>November</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                        </tr>
                                        <tr>
                                          <td>12</td>
                                          <td>December</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="col s12 m4 l4">
                                <div class="card">
                                  <div class="card-move-up teal accent-4 waves-effect waves-block waves-light">
                                    <div class="move-up">
                                      <p class="margin white-text">Browser Stats</p>
                                      <canvas id="trending-radar-chart" height="114"></canvas>
                                    </div>
                                  </div>
                                  <div class="card-content  teal">
                                    <a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                                      <i class="material-icons activator">done</i>
                                    </a>
                                    <div class="line-chart-wrapper">
                                      <p class="margin white-text">Revenue by country</p>
                                      <canvas id="line-chart" height="114"></canvas>
                                    </div>
                                  </div>
                                  <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Revenue by country
                                      <i class="material-icons right">close</i>
                                    </span>
                                    <table class="responsive-table">
                                      <thead>
                                        <tr>
                                          <th data-field="country-name">Country Name</th>
                                          <th data-field="item-sold">Item Sold</th>
                                          <th data-field="total-profit">Total Profit</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>USA</td>
                                          <td>65</td>
                                          <td>$452.55</td>
                                        </tr>
                                        <tr>
                                          <td>UK</td>
                                          <td>76</td>
                                          <td>$452.55</td>
                                        </tr>
                                        <tr>
                                          <td>Canada</td>
                                          <td>65</td>
                                          <td>$452.55</td>
                                        </tr>
                                        <tr>
                                          <td>Brazil</td>
                                          <td>76</td>
                                          <td>$452.55</td>
                                        </tr>
                                        <tr>
                                          <td>India</td>
                                          <td>65</td>
                                          <td>$452.55</td>
                                        </tr>
                                        <tr>
                                          <td>France</td>
                                          <td>76</td>
                                          <td>$452.55</td>
                                        </tr>
                                        <tr>
                                          <td>Austrelia</td>
                                          <td>65</td>
                                          <td>$452.55</td>
                                        </tr>
                                        <tr>
                                          <td>Russia</td>
                                          <td>76</td>
                                          <td>$452.55</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--chart dashboard end-->
                          <!--work collections start-->
                          <div id="work-collections">
                            <div class="row">
                              <div class="col s12 m12 l6">
                                <ul id="projects-collection" class="collection z-depth-1">
                                  <li class="collection-item avatar">
                                    <i class="material-icons cyan circle">card_travel</i>
                                    <h6 class="collection-header m-0">Projects</h6>
                                    <p>Your Favorites</p>
                                  </li>
                                  <li class="collection-item">
                                    <div class="row">
                                      <div class="col s6">
                                        <p class="collections-title">Web App</p>
                                        <p class="collections-content">AEC Company</p>
                                      </div>
                                      <div class="col s3">
                                        <span class="task-cat cyan">Development</span>
                                      </div>
                                      <div class="col s3">
                                        <div id="project-line-1"></div>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="collection-item">
                                    <div class="row">
                                      <div class="col s6">
                                        <p class="collections-title">Mobile App for Social</p>
                                        <p class="collections-content">iSocial App</p>
                                      </div>
                                      <div class="col s3">
                                        <span class="task-cat red accent-2">UI/UX</span>
                                      </div>
                                      <div class="col s3">
                                        <div id="project-line-2"></div>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="collection-item">
                                    <div class="row">
                                      <div class="col s6">
                                        <p class="collections-title">Website</p>
                                        <p class="collections-content">MediTab</p>
                                      </div>
                                      <div class="col s3">
                                        <span class="task-cat teal accent-4">Marketing</span>
                                      </div>
                                      <div class="col s3">
                                        <div id="project-line-3"></div>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="collection-item">
                                    <div class="row">
                                      <div class="col s6">
                                        <p class="collections-title">AdWord campaign</p>
                                        <p class="collections-content">True Line</p>
                                      </div>
                                      <div class="col s3">
                                        <span class="task-cat deep-orange accent-2">SEO</span>
                                      </div>
                                      <div class="col s3">
                                        <div id="project-line-4"></div>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class="col s12 m12 l6">
                                <ul id="issues-collection" class="collection z-depth-1">
                                  <li class="collection-item avatar">
                                    <i class="material-icons red accent-2 circle">bug_report</i>
                                    <h6 class="collection-header m-0">Issues</h6>
                                    <p>Assigned to you</p>
                                  </li>
                                  <li class="collection-item">
                                    <div class="row">
                                      <div class="col s7">
                                        <p class="collections-title">
                                          <strong>#102</strong> Home Page</p>
                                          <p class="collections-content">Web Project</p>
                                        </div>
                                        <div class="col s2">
                                          <span class="task-cat deep-orange accent-2">P1</span>
                                        </div>
                                        <div class="col s3">
                                          <div class="progress">
                                            <div class="determinate" style="width: 70%"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="collection-item">
                                      <div class="row">
                                        <div class="col s7">
                                          <p class="collections-title">
                                            <strong>#108</strong> API Fix</p>
                                            <p class="collections-content">API Project </p>
                                          </div>
                                          <div class="col s2">
                                            <span class="task-cat cyan">P2</span>
                                          </div>
                                          <div class="col s3">
                                            <div class="progress">
                                              <div class="determinate" style="width: 40%"></div>
                                            </div>
                                          </div>
                                        </div>
                                      </li>
                                      <li class="collection-item">
                                        <div class="row">
                                          <div class="col s7">
                                            <p class="collections-title">
                                              <strong>#205</strong> Profile page css</p>
                                              <p class="collections-content">New Project </p>
                                            </div>
                                            <div class="col s2">
                                              <span class="task-cat red accent-2">P3</span>
                                            </div>
                                            <div class="col s3">
                                              <div class="progress">
                                                <div class="determinate" style="width: 95%"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="collection-item">
                                          <div class="row">
                                            <div class="col s7">
                                              <p class="collections-title">
                                                <strong>#188</strong> SAP Changes</p>
                                                <p class="collections-content">SAP Project</p>
                                              </div>
                                              <div class="col s2">
                                                <span class="task-cat teal accent-4">P1</span>
                                              </div>
                                              <div class="col s3">
                                                <div class="progress">
                                                  <div class="determinate" style="width: 10%"></div>
                                                </div>
                                              </div>
                                            </div>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <!--work collections end-->
                                  <!--card widgets start-->
                                  <div id="card-widgets">
                                    <div class="row">
                                      <div class="col s12 m4 l4">
                                        <ul id="task-card" class="collection with-header">
                                          <li class="collection-header teal accent-4">
                                            <h4 class="task-card-title">My Task</h4>
                                            <p class="task-card-date">Sept 16, 2017</p>
                                          </li>
                                          <li class="collection-item dismissable">
                                            <input type="checkbox" id="task1" />
                                            <label for="task1">Create Mobile App UI.
                                              <a href="#" class="secondary-content">
                                                <span class="ultra-small">Today</span>
                                              </a>
                                            </label>
                                            <span class="task-cat cyan">Mobile App</span>
                                          </li>
                                          <li class="collection-item dismissable">
                                            <input type="checkbox" id="task2" />
                                            <label for="task2">Check the new API standerds.
                                              <a href="#" class="secondary-content">
                                                <span class="ultra-small">Monday</span>
                                              </a>
                                            </label>
                                            <span class="task-cat red accent-2">Web API</span>
                                          </li>
                                          <li class="collection-item dismissable">
                                            <input type="checkbox" id="task3" checked="checked" />
                                            <label for="task3">Check the new Mockup of ABC.
                                              <a href="#" class="secondary-content">
                                                <span class="ultra-small">Wednesday</span>
                                              </a>
                                            </label>
                                            <span class="task-cat teal accent-4">Mockup</span>
                                          </li>
                                          <li class="collection-item dismissable">
                                            <input type="checkbox" id="task4" checked="checked" disabled="disabled" />
                                            <label for="task4">I did it !</label>
                                            <span class="task-cat deep-orange accent-2">Mobile App</span>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="col s12 m12 l4">
                                        <div id="flight-card" class="card">
                                          <div class="card-header deep-orange accent-2">
                                            <div class="card-title">
                                              <h4 class="flight-card-title">Flight</h4>
                                              <p class="flight-card-date">June 18, Thu 04:50</p>
                                            </div>
                                          </div>
                                          <div class="card-content-bg white-text">
                                            <div class="card-content">
                                              <div class="row flight-state-wrapper">
                                                <div class="col s5 m5 l5 center-align">
                                                  <div class="flight-state">
                                                    <h4 class="margin">LDN</h4>
                                                    <p class="ultra-small">London</p>
                                                  </div>
                                                </div>
                                                <div class="col s2 m2 l2 center-align">
                                                  <i class="material-icons flight-icon">local_airport</i>
                                                </div>
                                                <div class="col s5 m5 l5 center-align">
                                                  <div class="flight-state">
                                                    <h4 class="margin">SFO</h4>
                                                    <p class="ultra-small">San Francisco</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col s6 m6 l6 center-align">
                                                  <div class="flight-info">
                                                    <p class="small">
                                                      <span class="grey-text text-lighten-4">Depart:</span> 04.50</p>
                                                      <p class="small">
                                                        <span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                                                        <p class="small">
                                                          <span class="grey-text text-lighten-4">Terminal:</span> B</p>
                                                        </div>
                                                      </div>
                                                      <div class="col s6 m6 l6 center-align flight-state-two">
                                                        <div class="flight-info">
                                                          <p class="small">
                                                            <span class="grey-text text-lighten-4">Arrive:</span> 08.50</p>
                                                            <p class="small">
                                                              <span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                                                              <p class="small">
                                                                <span class="grey-text text-lighten-4">Terminal:</span> C</p>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col s12 m4 l4">
                                                    <div id="profile-card" class="card">
                                                      <div class="card-image waves-effect waves-block waves-light">
                                                        <img class="activator" src="vue/materialize/images/gallary/3.png" alt="user bg">
                                                      </div>
                                                      <div class="card-content">
                                                        <img src="vue/materialize/images/avatar/avatar-7.png" alt="" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                                                        <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                                                          <i class="material-icons">edit</i>
                                                        </a>
                                                        <span class="card-title activator grey-text text-darken-4">Roger Waters</span>
                                                        <p>
                                                          <i class="material-icons">perm_identity</i> Project Manager</p>
                                                          <p>
                                                            <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989</p>
                                                            <p>
                                                              <i class="material-icons">email</i> yourmail@domain.com</p>
                                                            </div>
                                                            <div class="card-reveal">
                                                              <span class="card-title grey-text text-darken-4">Roger Waters
                                                                <i class="material-icons right">close</i>
                                                              </span>
                                                              <p>Here is some more information about this card.</p>
                                                              <p>
                                                                <i class="material-icons">perm_identity</i> Project Manager</p>
                                                                <p>
                                                                  <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989</p>
                                                                  <p>
                                                                    <i class="material-icons">email</i> yourmail@domain.com</p>
                                                                    <p>
                                                                      <i class="material-icons">cake</i> 18th June 1990
                                                                    </p>
                                                                    <p>
                                                                    </p>
                                                                    <p>
                                                                      <i class="material-icons">airplanemode_active</i> BAR - AUS
                                                                    </p>
                                                                    <p>
                                                                    </p>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="row">
                                                              <!-- blog card -->
                                                              <div class="col s12 m12 l4 item">
                                                                <div class="card">
                                                                  <div class="card-image waves-effect waves-block waves-light">
                                                                    <a href="#">
                                                                      <img src="vue/materialize/images/gallary/3.png" alt="item-img">
                                                                    </a>
                                                                    <h4 class="card-title text-shadow m-0">Card Title</h4>
                                                                  </div>
                                                                  <ul class="card-action-buttons">
                                                                    <li>
                                                                      <a class="btn-floating waves-effect waves-light teal accent-4">
                                                                        <i class="material-icons">share</i>
                                                                      </a>
                                                                    </li>
                                                                    <li>
                                                                      <a class="btn-floating waves-effect waves-light red accent-2">
                                                                        <i class="material-icons activator">info_outline</i>
                                                                      </a>
                                                                    </li>
                                                                  </ul>
                                                                  <div class="card-content">
                                                                    <a href="#!"></a>
                                                                    <p class="row mb-1">
                                                                      <small class="right">
                                                                        <a href="#!">
                                                                          <span class="new badge red accent-2" data-badge-caption="UI/UX"></span>
                                                                          <span class="new badge cyan m-0" data-badge-caption="Web Design"></span>
                                                                        </a>
                                                                      </small>
                                                                      <small class="left">18th June, 2017</small>
                                                                    </p>
                                                                    <p class="item-post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                  </div>
                                                                  <div class="card-reveal">
                                                                    <span class="card-title grey-text text-darken-4">
                                                                      <i class="material-icons right">close</i> Apple MacBook Pro A1278 13"</span>
                                                                      <p>Here is some more information about this item that is only revealed once clicked on.</p>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <!-- product-card -->
                                                                <div class="col s12 m12 l4 item product">
                                                                  <div class="card">
                                                                    <div class="card-image waves-effect waves-block waves-light">
                                                                      <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light teal accent-4">$189</a>
                                                                      <a href="#">
                                                                        <img src="vue/materialize/images/gallary/11.png" alt="item-img">
                                                                      </a>
                                                                    </div>
                                                                    <ul class="card-action-buttons">
                                                                      <li>
                                                                        <a class="btn-floating waves-effect waves-light cyan">
                                                                          <i class="material-icons">add_shopping_cart</i>
                                                                        </a>
                                                                      </li>
                                                                      <li>
                                                                        <a class="btn-floating waves-effect waves-light red accent-2">
                                                                          <i class="material-icons">favorite</i>
                                                                        </a>
                                                                      </li>
                                                                      <li>
                                                                        <a class="btn-floating waves-effect waves-light deep-orange accent-2">
                                                                          <i class="material-icons activator">info_outline</i>
                                                                        </a>
                                                                      </li>
                                                                    </ul>
                                                                    <div class="card-content">
                                                                      <div class="row">
                                                                        <div class="col s12">
                                                                          <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a></p>
                                                                          <p>Some more information about this product features and specification.</p>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                    <div class="card-reveal">
                                                                      <span class="card-title grey-text text-darken-4">
                                                                        <i class="material-icons right">close</i> Apple MacBook Pro A1278 13"</span>
                                                                        <p>Here is some more information about this item that is only revealed once clicked on.</p>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <!-- map-card -->
                                                                  <div class="col s12 m12 l4">
                                                                    <div class="map-card">
                                                                      <div class="card">
                                                                        <div class="card-image waves-effect waves-block waves-light">
                                                                          <div id="map-canvas" data-lat="40.747688" data-lng="-74.004142"></div>
                                                                        </div>
                                                                        <div class="card-content">
                                                                          <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                                                            <i class="material-icons">pin_drop</i>
                                                                          </a>
                                                                          <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Company Name LLC</a>
                                                                          </h4>
                                                                          <p class="blog-post-content">Some more information about this company.</p>
                                                                        </div>
                                                                        <div class="card-reveal">
                                                                          <span class="card-title grey-text text-darken-4">Company Name LLC
                                                                            <i class="material-icons right">close</i>
                                                                          </span>
                                                                          <p>Here is some more information about this company. As a creative studio we believe no client is too big nor too small to work with us to obtain good advantage.By combining the creativity of artists with the precision of engineers we develop custom solutions that achieve results.Some more information about this company.</p>
                                                                          <p>
                                                                            <i class="material-icons cyan-text text-darken-2">perm_identity</i> Manager Name</p>
                                                                            <p>
                                                                              <i class="material-icons cyan-text text-darken-2">business</i> 125, ABC Street, New Yourk, USA</p>
                                                                              <p>
                                                                                <i class="material-icons cyan-text text-darken-2">perm_phone_msg</i> +1 (612) 222 8989</p>
                                                                                <p>
                                                                                  <i class="material-icons cyan-text text-darken-2">email</i> support@pixinvent.com</p>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                      <!--card widgets end-->
                                                                      <!-- //////////////////////////////////////////////////////////////////////////// -->
                                                                    </div>
                                                                    <!--end container-->
                                                                  </section>
                                                                  <!-- END CONTENT -->
                                                                  <!-- START RIGHT SIDEBAR NAV-->
                                                                  <aside id="right-sidebar-nav">
                                                                    <ul id="chat-out" class="side-nav rightside-navigation">
                                                                      <li class="li-hover">
                                                                        <div class="row">
                                                                          <div class="col s12 border-bottom-1 mt-5">
                                                                            <ul class="tabs">
                                                                              <li class="tab col s4">
                                                                                <a href="#activity" class="active">
                                                                                  <span class="material-icons">graphic_eq</span>
                                                                                </a>
                                                                              </li>
                                                                              <li class="tab col s4">
                                                                                <a href="#chatapp">
                                                                                  <span class="material-icons">face</span>
                                                                                </a>
                                                                              </li>
                                                                              <li class="tab col s4">
                                                                                <a href="#settings">
                                                                                  <span class="material-icons">settings</span>
                                                                                </a>
                                                                              </li>
                                                                            </ul>
                                                                          </div>
                                                                          <div id="settings" class="col s12">
                                                                            <h6 class="mt-5 mb-3 ml-3">GENERAL SETTINGS</h6>
                                                                            <ul class="collection border-none">
                                                                              <li class="collection-item border-none">
                                                                                <div class="m-0">
                                                                                  <span class="font-weight-600">Notifications</span>
                                                                                  <div class="switch right">
                                                                                    <label>
                                                                                      <input checked type="checkbox">
                                                                                      <span class="lever"></span>
                                                                                    </label>
                                                                                  </div>
                                                                                </div>
                                                                                <p>Use checkboxes when looking for yes or no answers.</p>
                                                                              </li>
                                                                              <li class="collection-item border-none">
                                                                                <div class="m-0">
                                                                                  <span class="font-weight-600">Show recent activity</span>
                                                                                  <div class="switch right">
                                                                                    <label>
                                                                                      <input checked type="checkbox">
                                                                                      <span class="lever"></span>
                                                                                    </label>
                                                                                  </div>
                                                                                </div>
                                                                                <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                                                              </li>
                                                                              <li class="collection-item border-none">
                                                                                <div class="m-0">
                                                                                  <span class="font-weight-600">Notifications</span>
                                                                                  <div class="switch right">
                                                                                    <label>
                                                                                      <input type="checkbox">
                                                                                      <span class="lever"></span>
                                                                                    </label>
                                                                                  </div>
                                                                                </div>
                                                                                <p>Use checkboxes when looking for yes or no answers.</p>
                                                                              </li>
                                                                              <li class="collection-item border-none">
                                                                                <div class="m-0">
                                                                                  <span class="font-weight-600">Show recent activity</span>
                                                                                  <div class="switch right">
                                                                                    <label>
                                                                                      <input type="checkbox">
                                                                                      <span class="lever"></span>
                                                                                    </label>
                                                                                  </div>
                                                                                </div>
                                                                                <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                                                              </li>
                                                                              <li class="collection-item border-none">
                                                                                <div class="m-0">
                                                                                  <span class="font-weight-600">Show your emails</span>
                                                                                  <div class="switch right">
                                                                                    <label>
                                                                                      <input type="checkbox">
                                                                                      <span class="lever"></span>
                                                                                    </label>
                                                                                  </div>
                                                                                </div>
                                                                                <p>Use checkboxes when looking for yes or no answers.</p>
                                                                              </li>
                                                                              <li class="collection-item border-none">
                                                                                <div class="m-0">
                                                                                  <span class="font-weight-600">Show Task statistics</span>
                                                                                  <div class="switch right">
                                                                                    <label>
                                                                                      <input type="checkbox">
                                                                                      <span class="lever"></span>
                                                                                    </label>
                                                                                  </div>
                                                                                </div>
                                                                                <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                                                              </li>
                                                                            </ul>
                                                                          </div>
                                                                          <div id="chatapp" class="col s12">
                                                                            <div class="collection border-none">
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-1.png" alt="" class="circle cyan">
                                                                                <span class="line-height-0">Elizabeth Elliott </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">5.00 AM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                                                                              </a>
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-2.png" alt="" class="circle deep-orange accent-2">
                                                                                <span class="line-height-0">Mary Adams </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Hello Boo </p>
                                                                              </a>
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                                                                                <span class="line-height-0">Caleb Richards </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">9.00 PM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Keny ! </p>
                                                                              </a>
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-4.png" alt="" class="circle cyan">
                                                                                <span class="line-height-0">June Lane </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Ohh God </p>
                                                                              </a>
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-5.png" alt="" class="circle red accent-2">
                                                                                <span class="line-height-0">Edward Fletcher </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">5.15 PM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Love you </p>
                                                                              </a>
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-6.png" alt="" class="circle deep-orange accent-2">
                                                                                <span class="line-height-0">Crystal Bates </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">8.00 AM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Can we </p>
                                                                              </a>
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-7.png" alt="" class="circle cyan">
                                                                                <span class="line-height-0">Nathan Watts </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">9.53 PM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Great! </p>
                                                                              </a>
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-8.png" alt="" class="circle red accent-2">
                                                                                <span class="line-height-0">Willard Wood </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">4.20 AM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Do it </p>
                                                                              </a>
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-9.png" alt="" class="circle teal accent-4">
                                                                                <span class="line-height-0">Ronnie Ellis </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">5.30 PM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Got that </p>
                                                                              </a>
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-1.png" alt="" class="circle cyan">
                                                                                <span class="line-height-0">Gwendolyn Wood </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">4.34 AM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Like you </p>
                                                                              </a>
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-2.png" alt="" class="circle red accent-2">
                                                                                <span class="line-height-0">Daniel Russell </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">12.00 AM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                                                                              </a>
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                                                                                <span class="line-height-0">Sarah Graves </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">11.14 PM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Okay you </p>
                                                                              </a>
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-4.png" alt="" class="circle red accent-2">
                                                                                <span class="line-height-0">Andrew Hoffman </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">7.30 PM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Can do </p>
                                                                              </a>
                                                                              <a href="#!" class="collection-item avatar border-none">
                                                                                <img src="vue/materialize/images/avatar/avatar-5.png" alt="" class="circle cyan">
                                                                                <span class="line-height-0">Camila Lynch </span>
                                                                                <span class="medium-small right blue-grey-text text-lighten-3">2.00 PM</span>
                                                                                <p class="medium-small blue-grey-text text-lighten-3">Leave it </p>
                                                                              </a>
                                                                            </div>
                                                                          </div>
                                                                          <div id="activity" class="col s12">
                                                                            <h6 class="mt-5 mb-3 ml-3">RECENT ACTIVITY</h6>
                                                                            <div class="activity">
                                                                              <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                                                                <i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
                                                                              </div>
                                                                              <div class="col s9 recent-activity-list-text">
                                                                                <a href="#" class="deep-purple-text medium-small">just now</a>
                                                                                <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                                                                              </div>
                                                                              <div class="recent-activity-list chat-out-list row mb-0">
                                                                                <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                                                                  <i class="material-icons white-text icon-bg-color cyan lighten-2">airplanemode_active</i>
                                                                                </div>
                                                                                <div class="col s9 recent-activity-list-text">
                                                                                  <a href="#" class="cyan-text medium-small">Yesterday</a>
                                                                                  <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                                                                                </div>
                                                                              </div>
                                                                              <div class="recent-activity-list chat-out-list row mb-0">
                                                                                <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                                                                                  <i class="material-icons white-text icon-bg-color green lighten-2">settings_voice</i>
                                                                                </div>
                                                                                <div class="col s9 recent-activity-list-text">
                                                                                  <a href="#" class="green-text medium-small">5 Days Ago</a>
                                                                                  <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                                                                </div>
                                                                              </div>
                                                                              <div class="recent-activity-list chat-out-list row mb-0">
                                                                                <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                                                                  <i class="material-icons white-text icon-bg-color amber lighten-2">store</i>
                                                                                </div>
                                                                                <div class="col s9 recent-activity-list-text">
                                                                                  <a href="#" class="amber-text medium-small">1 Week Ago</a>
                                                                                  <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                                                                </div>
                                                                              </div>
                                                                              <div class="recent-activity-list row">
                                                                                <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                                                                  <i class="material-icons white-text icon-bg-color deep-orange lighten-2">settings_voice</i>
                                                                                </div>
                                                                                <div class="col s9 recent-activity-list-text">
                                                                                  <a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                                                                                  <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                                                                </div>
                                                                              </div>
                                                                              <div class="recent-activity-list chat-out-list row mb-0">
                                                                                <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                                                                                  <i class="material-icons white-text icon-bg-color brown lighten-2">settings_voice</i>
                                                                                </div>
                                                                                <div class="col s9 recent-activity-list-text">
                                                                                  <a href="#" class="brown-text medium-small">1 Month Ago</a>
                                                                                  <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                                                                </div>
                                                                              </div>
                                                                              <div class="recent-activity-list chat-out-list row mb-0">
                                                                                <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                                                                  <i class="material-icons white-text icon-bg-color deep-purple lighten-2">store</i>
                                                                                </div>
                                                                                <div class="col s9 recent-activity-list-text">
                                                                                  <a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                                                                                  <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                                                                </div>
                                                                              </div>
                                                                              <div class="recent-activity-list row">
                                                                                <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                                                                  <i class="material-icons white-text icon-bg-color grey lighten-2">settings_voice</i>
                                                                                </div>
                                                                                <div class="col s9 recent-activity-list-text">
                                                                                  <a href="#" class="grey-text medium-small">1 Year Ago</a>
                                                                                  <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                  </aside>
                                                                  <!-- END RIGHT SIDEBAR NAV-->
                                                                </div>
                                                                <!-- END WRAPPER -->
                                                              </div>
                                                              <!-- END MAIN -->
                                                              <!-- //////////////////////////////////////////////////////////////////////////// -->
                                                              <?php include('footer.php'); ?>
                                                              <?php include('foot-resources.php'); ?>
                                                            </body>

                                                            <!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/horizontal-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Aug 2018 14:33:14 GMT -->
                                                            </html>
