<template>
  <div>
    <!-- START FOOTER -->
      <footer  id="footer" class="page-footer footer-fixed">
        <div class="footer-copyright">
          <div class="container">
            <span>Copyright © {{ year }} <a class="grey-text text-lighten-4" :href="companyPage" target="_blank">{{ company }}</a> All rights reserved.</span>
            <span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-4" :href="developer-page">{{ developer }}</a></span>
          </div>
        </div>
      </footer>
    <!-- END FOOTER -->
  </div>
</template>

<script>
export default {
  name: 'Footer',
  data:function() {
    return { 
      year: '2018',
      company: 'Scarf Sweethoney',
      companyPage: 'https://scarfsweethoney.com.my',
      developer: 'Rekamy',
      developerPage: 'https://rekamy.com',
    };
  },
  // data: {
  //   message: 'Hello'
  // },
}
</script>
