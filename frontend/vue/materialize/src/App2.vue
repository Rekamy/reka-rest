<template>
  <div>
    <app-header is-horizontal></app-header>
<!--     <header id="header" class="page-topbar">
      <div class="navbar-fixed">
        <nav :class="`navbar-color ${navColor}`">
          <div class="nav-wrapper">
          </div>
        </nav>
      </div>
    </header>
    <v-toolbar>
      <v-toolbar-items>
        <v-overflow-btn :items="dropdown_font" ></v-overflow-btn>
        <v-btn flat>Link Two</v-btn>
        <v-btn flat>Link Three</v-btn>
      </v-toolbar-items>
    </v-toolbar> -->
<!--     <nav id="horizontal-nav" class="white hide-on-med-and-down">
      <div class="nav-wrapper">
        <ul id="ul-horizontal-nav" class="left hide-on-med-and-down">
        </ul>
      </div>
    </nav> -->
    <app-content-container></app-content-container>
    <app-footer></app-footer>
  </div>
</template>

<script>
  import Style from "@/components/design/Style.vue";
  import AppContentContainer from "@/components/layout/ContentContainer.vue";
  import AppHeader from "@/components/layout/Header.vue";
  import AppFooter from "@/components/layout/Footer.vue";

  export default {
    name: "app",
    components: {
      AppContentContainer,
      AppFooter,
      Style,
      AppHeader
    },
    mounted() {
      var x = document.getElementsByTagName("BODY")[0];
      setTimeout(function(){ x.classList.add("loaded"); }, 300);
    },
    data() {
      return {
        dropdown_font: ['Arial', 'Calibri', 'Courier', 'Verdana'],
        navColor: Style.color.purpleDeepOrangeShadow
      };
    }
  };
</script>

<style lang="scss">
</style>
