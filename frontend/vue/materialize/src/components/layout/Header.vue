<template>
  <div>
    <header id="header" class="page-topbar">
      <div class="navbar-fixed">
        <nav :class="`navbar-color ${navColor}`">
          <div class="nav-wrapper">
            <ul v-if="apps.brand.show" class="left">
              <li>
                <h1 class="logo-wrapper">
                  <router-link to="/" class="brand-logo darken-1">
                    <img :src="apps.brand.logo" :alt="apps.brand.logoDesc">
                    <span class="logo-text hide-on-med-and-down">{{ apps.brand.name }}</span>
                  </router-link>
                </h1>
              </li>
            </ul>
            <div v-if="apps.searchable.show" class="header-search-wrapper hide-on-med-and-down">
              <i class="material-icons">search</i>
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore DiAudit" />
            </div>
            <ul class="right hide-on-med-and-down">
              <li v-if="apps.translateable.show">
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown">
                  <span class="flag-icon flag-icon-gb"></span>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>
              <li v-if="apps.notifiable.show">
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                  <i class="material-icons">notifications_none
                    <small class="notification-badge orange accent-3">{{ apps.notifiable.items.length }}</small>
                  </i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="dist-asset/materialize/images/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                </a>
              </li>
              <li v-if="apps.rightSidebar.show">
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
                  <span class="new badge">{{ apps.notifiable.items.length }}</span>
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
                  <i class="material-icons">lock_outline</i> Permission</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Logout</a>
              </li>
            </ul>
          </div>
        </nav>
        <app-horizontal-menu v-if="isHorizontal" v-bind:items="items"></app-horizontal-menu>
        <app-horizontal-menu-item v-if="isHorizontal" v-for="item in items" :key="item.id" v-bind:items="item.items" v-bind:id="item.activateEvent"></app-horizontal-menu-item>
      </div>
    </header>
  </div>
</template>

<script>
import AppHorizontalMenu from "@/components/layout/HorizontalMenu.vue";
import AppHorizontalMenuItem from "@/components/layout/HorizontalMenuItem.vue";
import Style from "@/components/design/Style.vue";

export default {
  name: "Header",
  components: {
    AppHorizontalMenu,
    AppHorizontalMenuItem,
    Style
  },
  props: {
    isHorizontal: Boolean
  },
  data() {
    return {
      navColor: Style.color.purpleDeepOrangeShadow,
      hover: Boolean,
      apps: {
        brand: {
          show: true,
          name: 'DiAudit',
          logo: 'dist-asset/materialize/images/logo/materialize-logo.png',
          logoDesc: 'materialize logo',
        },
        searchable: {
          show: true,
        },
        rightSidebar: {
          show: true,
        },
        notifiable: {
          show: true,
          items: [
            {
              icon: '',
              title: '',
              description: '',
              timestamp: '',
            }
          ]
        },
        translateable: {
          show: false,
          items: [
            {
              name: 'English',
              local: 'en',
            },
            {
              name: 'Malay',
              local: 'my',
            },
            {
              name: 'Chinese',
              local: 'zh',
            },
          ],
        },
      },
      items: [
        {
          name: "Dashboard",
          icon: "dashboard",
          active: "",
          options: "dropdown-menu",
          activateEvent: "Dashboarddropdown",
          url: "/",
          items: []
        },
        {
          name: "Test",
          icon: "border_all",
          active: "",
          options: "dropdown-menu",
          activateEvent: "Testdropdown",
          url: "",
          items: [
            {
              name: "Form",
              url: "/form"
            },
            {
              name: "Table",
              url: "/table"
            },
            {
              name: "Detail",
              url: "/detail"
            },
          ]
        },
        {
          name: "Company",
          icon: "dvr",
          active: "",
          options: "dropdown-menu",
          activateEvent: "Companydropdown",
          url: "",
          items: [
            {
              name: "Profile",
              url: "/form"
            },
            {
              name: "Branch",
              url: "/table"
            },
            {
              name: "Location",
              url: "/detail"
            },
            {
              name: "Person In Charge",
              url: "/detail"
            },
            {
              name: "Efies",
              url: "/detail"
            },
            {
              name: "Setting",
              url: "/detail"
            },
          ]
        },
        {
          name: "Contractor",
          icon: "dvr",
          active: "",
          options: "dropdown-menu",
          activateEvent: "Contractordropdown",
          url: "",
          items: [
            {
              name: "Listing",
              url: "/form"
            },
            {
              name: "Category",
              url: "/form"
            },
          ]
        },
        {
          name: "Order",
          icon: "cast",
          active: "",
          options: "dropdown-menu",
          activateEvent: "Reportdropdown",
          url: "",
          items: [
            {
              name: "Efies Registration",
              url: "/about"
            },
            {
              name: "Service",
              url: "/about"
            },
            {
              name: "Audit",
              url: "/about"
            },
            {
              name: "Marketplace",
              url: "/about"
            },
            {
              name: "Others",
              url: "/about"
            },
          ]
        },
        {
          name: "Report",
          icon: "cast",
          active: "",
          options: "dropdown-menu",
          activateEvent: "Orderdropdown",
          url: "",
          items: [
            {
              name: "Efies Profile",
              url: "/about"
            },
            {
              name: "Company",
              url: "/about"
            },
            {
              name: "Anual",
              url: "/about"
            },
          ]
        }
      ]
    };
  }
};
</script>