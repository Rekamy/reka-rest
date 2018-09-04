<template>
  <v-app>
    <app-header />
<v-toolbar extended >
  <v-menu :nudge-width="100"  open-on-hover slot="extension">
  </v-menu>
<v-toolbar-title slot="extension">
  <v-menu :nudge-width="100"  open-on-hover >
    <v-toolbar-title slot="activator">
      <span>All</span>
    </v-toolbar-title>
    <v-list>
      <v-list-tile
      v-for="item in items"
      :key="item"
      @click=""
      >
      <v-list-tile-title v-text="item"></v-list-tile-title>
    </v-list-tile>
  </v-list>
</v-menu>
</v-toolbar-title>
<v-toolbar-title slot="extension">
  <v-menu :nudge-width="100"  open-on-hover >
    <v-toolbar-title slot="activator">
      <span>All</span>
    </v-toolbar-title>
    <v-list>
      <v-list-tile
      v-for="item in items"
      :key="item"
      @click=""
      >
      <v-list-tile-title v-text="item"></v-list-tile-title>
    </v-list-tile>
  </v-list>
</v-menu>
</v-toolbar-title>
</v-toolbar>
<v-content>
  <v-container fluid>
    <v-slide-y-transition mode="out-in">
      <router-view></router-view>
    </v-slide-y-transition>
  </v-container>
</v-content>
<v-navigation-drawer
temporary
:right="right"
v-model="rightDrawer"
fixed
>
<v-list>
  <v-list-tile @click.native="right = !right">
    <v-list-tile-action>
      <v-icon light>compare_arrows</v-icon>
    </v-list-tile-action>
    <v-list-tile-title>Switch drawer (click me)</v-list-tile-title>
  </v-list-tile>
</v-list>
</v-navigation-drawer>
<v-footer :fixed="fixed" app class="gradient-45deg-purple-deep-orange gradient-shadow">
  <span>&copy; 2017</span>
</v-footer>
</v-app>
</template>

<script>
  import Meta from 'mixins/meta'
  import AppHeader from '../components/layout/Header.vue'

  export default {
    mixins: [Meta],
    components: {
      AppHeader
    },

    data () {
      return {
        clipped: false,
        drawer: true,
        fixed: false,
        items: [
        { icon: 'apps', title: 'Welcome', to: '/' },
        { icon: 'bubble_chart', title: 'Inspire', to: '/inspire' }
        ],
        miniVariant: false,
        right: true,
        rightDrawer: false,
        title: 'Vuetify.js',
        items: [
        'All', 'Family', 'Friends', 'Coworkers'
        ]
      }
    }
  }
</script>

<style>
.gradient-45deg-purple-deep-orange {
  background: #8e24aa;
  background: -webkit-linear-gradient(45deg, #8e24aa 0%, #ff6e40 100%);
  background: linear-gradient(45deg, #8e24aa 0%, #ff6e40 100%);
}

.gradient-45deg-purple-deep-orange.gradient-shadow {
  box-shadow: 0 6px 20px 0 rgba(255, 110, 64, 0.5);
}

</style>