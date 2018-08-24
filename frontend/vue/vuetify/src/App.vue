<template>
  <v-app>
    <app-left-sidebar />
    <app-header :title="title" v-model="drawer" />
    <app-content-container />
    <app-right-sidebar />
    <app-footer :year="2018" is-fixed developer="Rekamy" developerPage="https://rekamy.com" company="Scarf Sweethoney" companyPage="https//scarftsweethoney.com.my"/>
  </v-app>
</template>

<script>
  import ContentContainer from '@/components/layout/ContentContainer.vue'
  import Header from '@/components/layout/Header.vue'
  import Footer from '@/components/layout/Footer.vue'
  import LeftSidebar from '@/components/layout/LeftSidebar.vue'
  import RightSidebar from '@/components/layout/RightSidebar.vue'

  export default {
    name: 'App',
    components: {
      'app-header': Header,
      'app-left-sidebar': LeftSidebar,
      'app-right-sidebar': RightSidebar,
      'app-content-container': ContentContainer,
      'app-footer': Footer,
    },
    
    data() {
      return {
        clipped: false,
        drawer: true,
        fixed: false,
        items: [{
          icon: 'bubble_chart',
          title: 'Inspire'
        }],
        miniVariant: false,
        right: true,
        rightDrawer: false,
        title: 'Scarf Sweethoney CRM'
      }
      // data() {
      //   return {
      //     year: '2018',
      //     company: 'Scarf Sweethoney',
      //     companyPage: 'https://scarfsweethoney.com.my',
      //     developer: 'Rekamy',
      //     developerPage: 'https://rekamy.com',
      //   }
      // }
        // clipped: Boolean,
        // drawer: Boolean,
        // fixed: Boolean,
        // items: Array,
        // miniVariant: Boolean,
        // right: Boolean,
        // rightDrawer: Boolean,
        // title: String
    }
  }
</script>