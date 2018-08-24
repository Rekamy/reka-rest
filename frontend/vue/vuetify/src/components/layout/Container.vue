<template>
  <v-toolbar>
    <v-toolbar-side-icon></v-toolbar-side-icon>
    <v-toolbar-title>Title</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items class="hidden-sm-and-down">
      <v-btn flat>Link One</v-btn>
      <v-btn flat>Link Two</v-btn>
      <v-btn flat>Link Three</v-btn>
    </v-toolbar-items>
  </v-toolbar>  
</template>

<script>
  import ContentContainer from '@/components/layout/ContentContainer.vue'
  import Header from '@/components/layout/Header.vue'
  import Footer from '@/components/layout/Footer.vue'

  export default {
    name: 'app',
    components: {
      'app-content-container': ContentContainer,
      'app-footer': Footer,
      'app-header': Header
    }
  }
</script>

