// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import axios from 'axios'
import moment from 'moment'
import Vuetify from 'vuetify'
// import 'vuetify/dist/vuetify.min.css';
import "material-design-icons-iconfont/dist/material-design-icons.css";
import "vue-multiselect/dist/vue-multiselect.min.css";
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'

Vue.use(VueMaterial)


Object.defineProperty(Vue.prototype, '$http', {value: axios})
Object.defineProperty(Vue.prototype, '$moment', {value: moment})

Vue.use(Vuetify)
Vue.config.productionTip = false

import "./assets/materialize/css/themes/horizontal-menu/materialize.css";
import "./assets/materialize/css/themes/horizontal-menu/style.css";
import "./assets/materialize/css/layouts/style-horizontal.css";
// import "./assets/materialize/vendors/perfect-scrollbar/perfect-scrollbar.css";
// import "./assets/materialize/vendors/jvectormap/jquery-jvectormap.css";
// import "./assets/materialize/vendors/flag-icon/css/flag-icon.min.css";

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})


// new Vue({
// 	render: h => h(App)
// }).$mount('#app')
