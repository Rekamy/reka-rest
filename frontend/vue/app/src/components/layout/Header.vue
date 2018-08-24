<template>
  <div>
	 <header id="header" class="page-topbar">
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <router-link to="/" class="brand-logo darken-1">
                    <img src="dist/materialize/images/logo/materialize-logo.png" alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">Materialize</span>
                  </router-link>
                </h1>
              </li>
            </ul>
            <div class="header-search-wrapper hide-on-med-and-down">
              <i class="material-icons">search</i>
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize" />
            </div>
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                  <span class="flag-icon flag-icon-gb"></span>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                  <i class="material-icons">notifications_none
                    <small class="notification-badge orange accent-3">5</small>
                  </i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="dist/materialize/images/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                  <i class="material-icons">format_indent_increase</i>
                </a>
              </li>
            </ul>
            <!-- translation-button -->
            <ul id="translation-dropdown" class="dropdown-content">
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-gb"></i> English</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-fr"></i> French</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-cn"></i> Chinese</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-de"></i> German</a>
              </li>
            </ul>
            <!-- notifications-dropdown -->
            <ul id="notifications-dropdown" class="dropdown-content">
              <li>
                <h6>NOTIFICATIONS
                  <span class="new badge">5</span>
                </h6>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
              </li>
            </ul>
            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Profile</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Settings</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i> Help</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">lock_outline</i> Lock</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Logout</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- HORIZONTL NAV START-->
        <nav id="horizontal-nav" class="white hide-on-med-and-down">
          <div class="nav-wrapper">
            <ul id="ul-horizontal-nav" class="left hide-on-med-and-down">
              <li>
                <a class="dropdown-menu active" href="#" data-activates="Dashboarddropdown">
                  <i class="material-icons">dashboard</i>
                  <span>Dashboard
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Templatesdropdown">
                  <i class="material-icons">dvr</i>
                  <span>Templates
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Cardsdropdown">
                  <i class="material-icons">cast</i>
                  <span>Cards
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <router-link to="/app-email">
                  <i class="material-icons">mail_outline</i>
                  <span>Mailbox</span>
                </router-link>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="CSSdropdown">
                  <i class="material-icons">invert_colors</i>
                  <span>CSS
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="BasicUIdropdown">
                  <i class="material-icons">photo_filter</i>
                  <span>Basic UI
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="AdvancedUIdropdown">
                  <i class="material-icons">library_add</i>
                  <span>Advanced UI
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="ExtraComponentsdropdown">
                  <i class="material-icons">add_to_queue</i>
                  <span>Extra Components
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Tablesdropdown">
                  <i class="material-icons">border_all</i>
                  <span>Tables
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Formsdropdown">
                  <i class="material-icons">chrome_reader_mode</i>
                  <span>Forms
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Pagesdropdown">
                  <i class="material-icons">pages</i>
                  <span>Pages
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Dashboarddropdown -->
        <ul id="Dashboarddropdown" class="dropdown-content dropdown-horizontal-list">
          <li><router-link to="/dashboard-ecommerce">eCommerce</router-link></li>
          <li><router-link to="/dashboard-analytics">Analytics</router-link></li>
        </ul>
        <!-- Templatesdropdown -->
        <ul id="Templatesdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><router-link to="/collapsible-menu">Collapsible Menu</router-link></li>
          <li><router-link to="/semi-dark-menu">Semi Dark Menu</router-link></li>
          <li><router-link to="/fixed-menu">Fixed Menu</router-link></li>
          <li><router-link to="/overlay-menu">Overlay Menu</router-link></li>
          <li><router-link to="/horizontal-menu">Horizontal Menu</router-link></li>
        </ul>
        <!-- Cardsdropdown -->
        <ul id="Cardsdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><router-link to="/cards-basic">Basic</router-link></li>
          <li><router-link to="/cards-advance">Advance</router-link></li>
          <li><router-link to="/cards-extended">Extended</router-link></li>
        </ul>
        <!-- CSSdropdown -->
        <ul id="CSSdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><router-link to="/css-typography">Typography</router-link></li>
          <li><router-link to="/css-color">Color</router-link></li>
          <li><router-link to="/css-grid">Grid</router-link></li>
          <li><router-link to="/css-helpers">Helpers</router-link></li>
          <li><router-link to="/css-media">Media</router-link></li>
          <li><router-link to="/css-pulse">Pulse</router-link></li>
          <li><router-link to="/css-sass">Sass</router-link></li>
          <li><router-link to="/css-shadow">Shadow</router-link></li>
          <li><router-link to="/css-animations">Animations</router-link></li>
          <li><router-link to="/css-transitions">Transition</router-link></li>
        </ul>
        <!-- BasicUIdropdown-->
        <ul id="BasicUIdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><router-link to="/ui-basic-buttons">Basic</router-link></li>
          <li><router-link to="/ui-extended-buttons">Extended</router-link></li>
          <li><router-link to="/ui-icons">Icons</router-link></li>
          <li><router-link to="/ui-alerts">Alerts</router-link></li>
          <li><router-link to="/ui-badges">Badges</router-link></li>
          <li><router-link to="/ui-breadcrumbs">Breadcrumbs</router-link></li>
          <li><router-link to="/ui-chips">Chips</router-link></li>
          <li><router-link to="/ui-collections">Collections</router-link></li>
          <li><router-link to="/ui-navbar">Navbar</router-link></li>
          <li><router-link to="/ui-pagination">Pagination</router-link></li>
          <li><router-link to="/ui-preloader">Preloader</router-link></li>
        </ul>
        <!-- AdvancedUIdropdown-->
        <ul id="AdvancedUIdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><router-link to="/advance-ui-carousel">Carousel</router-link></li>
          <li><router-link to="/advance-ui-collapsibles">Collapsible</router-link></li>
          <li><router-link to="/advance-ui-toasts">Toasts</router-link></li>
          <li><router-link to="/advance-ui-tooltip">Tooltip</router-link></li>
          <li><router-link to="/advance-ui-dropdown">Dropdown</router-link></li>
          <li><router-link to="/advance-ui-feature-discovery">Feature Discovery</router-link></li>
          <li><router-link to="/advanced-ui-media">Media</router-link></li>
          <li><router-link to="/advanced-ui-modals">Modals</router-link></li>
          <li><router-link to="/advance-ui-scrollfire">ScrollFire</router-link></li>
          <li><router-link to="/advance-ui-scrollspy">Scrollspy</router-link></li>
          <li><router-link to="/advance-ui-tabs">Tabs</router-link></li>
          <li><router-link to="/advance-ui-transitions">Transitions</router-link></li>
          <li><router-link to="/advance-ui-waves">Waves</router-link></li>
        </ul>
        <!-- ExtraComponentsdropdown-->
        <ul id="ExtraComponentsdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><router-link to="/extra-components-range-slider">Range Slider</router-link></li>
          <li><router-link to="/extra-components-sweetalert">SweetAlert</router-link></li>
          <li><router-link to="/extra-components-nestable">Shortable & Nestable</router-link></li>
          <li><router-link to="/extra-components-translation">Language Translation</router-link></li>
          <li><router-link to="/extra-components-highlight">Highlight</router-link></li>
        </ul>
        <!-- Tablesdropdown -->
        <ul id="Tablesdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><router-link to="/table-basic">Basic Tables</router-link></li>
          <li><router-link to="/table-data">Data Tables</router-link></li>
          <li><router-link to="/table-jsgrid">jsGrid</router-link></li>
          <li><router-link to="/table-editable">Editable Table</router-link></li>
          <li><router-link to="/table-floatThead">FloatThead</router-link></li>
        </ul>
        <!-- Formsdropdown -->
        <ul id="Formsdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><router-link to="/form-elements">Form Elements</router-link></li>
          <li><router-link to="/form-layouts">Form Layouts</router-link></li>
          <li><router-link to="/form-validation">Form Validations</router-link></li>
          <li><router-link to="/form-masks">Form Masks</router-link></li>
          <li><router-link to="/form-file-uploads">File Uploads</router-link></li>
        </ul>
        <!-- Pagesdropdown -->
        <ul id="Pagesdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><router-link to="/page-contact">Contact Page</router-link></li>
          <li><router-link to="/page-todo">ToDos</router-link></li>
          <li><router-link to="/page-blog-1">Blog Type 1</router-link></li>
          <li><router-link to="/page-blog-2">Blog Type 2</router-link></li>
          <li><router-link to="/page-404">404</router-link></li>
          <li><router-link to="/page-500">500</router-link></li>
          <li><router-link to="/page-blank">Blank</router-link></li>
        </ul>
      </div>
    </header>
  </div>
</template>

<script>
export default {
  name: 'Header',
}
</script>

