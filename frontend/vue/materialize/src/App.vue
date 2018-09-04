<template>
  <app-container></app-container>
</template>

<script>

  import AppContainer from './components/layout/Container.vue'
  // import MdForm from './views/Test/Form'


  export default {
    components: {
      AppContainer,
      // MdForm,
    },
    mounted() {
      var x = document.getElementsByTagName("BODY")[0];
      setTimeout(function(){ x.classList.add("loaded"); }, 1000);
    },
    created() {
      // console.log(this.$http ? 'Axios works!' : 'Axios fail to load');
      // console.log(this.$moment ? 'Moment works!' : 'Moment fail to load');
      // console.log($ ? '$ Jquery works!' : '$ Jquery fail to load');
      // console.log(jQuery ? 'jQuery works!' : 'jQuery fail to load');
    }

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
