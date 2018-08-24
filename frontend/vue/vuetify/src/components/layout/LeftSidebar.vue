<template>
  <v-navigation-drawer 
  persistent mini-variant clipped 
  v-model="drawer" enable-resize-watcher fixed
    app>
    <v-list>
      <v-list-tile value="true" v-for="(item, i) in items" :key="i">
        <v-list-tile-action>
          <v-icon v-html="item.icon"></v-icon>
        </v-list-tile-action>
        <v-list-tile-content>
          <v-list-tile-title v-text="item.title"></v-list-tile-title>
        </v-list-tile-content>
      </v-list-tile>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
  export default {
    name: 'left-sidebar',
    props: {
      clipped: Boolean,
      drawer: Boolean,
      fixed: Boolean,
      items: Array,
      miniVariant: String,
      right: String,
      rightDrawer: String,
      title: String,
    }
  }
</script>