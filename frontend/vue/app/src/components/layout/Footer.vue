<template>
  <div>
    <!-- START FOOTER -->
      <footer  id="footer" :class="`page-footer footer-fixed ${navColor}`">
        <div class="footer-copyright">
          <div class="container">
            <span>Copyright © {{ year }} <a class="grey-text text-lighten-4" :href="companyPage" target="_blank">{{ company }}</a> All rights reserved.</span>
            <span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-4" :href="developerPage">{{ developer }}</a></span>
          </div>
        </div>
      </footer>
    <!-- END FOOTER -->
  </div>
</template>

<script>
  import Style from './../design/Style.vue'
export default {
  name: 'Footer',
    components: {
      Style,
    },
  data:function() {
    return { 
      navColor: Style.color.purpleDeepOrangeShadow,
      year: '2018',
      company: 'Scarf Sweethoney',
      companyPage: 'https://scarfsweethoney.com.my',
      developer: 'Rekamy Resources',
      developerPage: 'https://rekamy.com',
    };
  },
  // data: {
  //   message: 'Hello'
  // },
}
</script>

<style lang="scss">
  #footer{
    z-index: 100;
  }
</style>
