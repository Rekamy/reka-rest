<template>
  <app-container></app-container>
</template>

<script>
  import Container from './components/layout/Container.vue'

  export default {
    components: {
      'app-container': Container
    },

  }
</script>

<style lang="scss">
    /* label underline focus color */
    .row .multsel input:focus {
    border-bottom: none !important;
    box-shadow: none !important
    }
  
    .row .multsel input {
      height: 1px !important;
    }
  
    .multiselect__tags{
      border: none !important;
      border-bottom: 1px solid #9f9f9f !important;
      border-radius: 0px !important;
    }
  </style>
