<template>
  <div id="app">
    <!-- <div class="gradient-45deg-purple-deep-orange gradient-shadow"> Hai</div> -->
    <!-- <router-view/> -->
    <AppHeader />
    <AppTable />
  </div>
</template>

<script>
  import AppHeader from '@/components/layout/Header'
  import AppTable from '@/components/Test'
  export default {
    name: 'App',
    components: {
      AppHeader,
      AppTable
    },
    created() {
      console.log(this.$http ? 'Axios works!' : 'Axios fail to load');
      console.log(this.$moment ? 'Moment works!' : 'Moment fail to load');
    }
  }
</script>

<style>
/*#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}*/
</style>
