<template>
    <v-toolbar app :clipped-left="clipped">
      <v-toolbar-side-icon @click.stop="toggleDrawer()"></v-toolbar-side-icon>
      <v-btn icon @click.stop="toggle(miniVariant)">
        <v-icon v-html="miniVariant ? 'chevron_right' : 'chevron_left'"></v-icon>
      </v-btn>
      <v-btn icon @click.stop="toggle(clipped)">
        <v-icon>web</v-icon>
      </v-btn>
      <v-btn icon @click.stop="toggle(fixed)">
        <v-icon>remove</v-icon>
      </v-btn>
      <v-toolbar-title v-text="title"></v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn icon @click.stop="toggle(rightDrawer)">
        <v-icon>menu</v-icon>
      </v-btn>
    </v-toolbar>
</template>

<script>
  export default {
    name: 'Header',
    props: {
        clipped: Boolean,
        drawer: Boolean,
        fixed: Boolean,
        items: Array,
        miniVariant: Boolean,
        right: Boolean,
        rightDrawer: Boolean,
        title: String
    },
    data() {
      return {
        
      }
    }
    methods:{
      toggle: function(data) {
        console.log(data);
        this.data = !this.data;
      },
    }
  }
</script>