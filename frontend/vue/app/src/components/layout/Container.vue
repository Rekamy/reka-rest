<template>
  <div id="app-body">
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <app-header is-horizontal></app-header>
    <app-content-container></app-content-container>
    <app-footer></app-footer>
  </div>
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

