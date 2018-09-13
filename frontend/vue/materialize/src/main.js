import Vue from "vue";
import Axios from "axios";
import Moment from "moment";
// import jQuery from "jquery";
import App from "./App.vue";
import router from "./router";
import "./registerServiceWorker";
import "material-design-icons-iconfont/dist/material-design-icons.css";
import "../public/dist-asset/materialize/vendors/flag-icon/css/flag-icon.min.css";
// import VueMaterial from 'vue-material'


// 3rd Party Script
// import Jquery from "../public/dist-asset/materialize/vendors/jquery-3.2.1.min.js";
// import Materialize from "../public/dist-asset/materialize/js/materialize.min.js";
// import Materialize from "../public/dist-asset/materialize/js/materialize2.js";
// import PerfectScrollbar from "../public/dist-asset/materialize/vendors/perfect-scrollbar/perfect-scrollbar.min.js";
// import ChartJs from "../public/dist-asset/materialize/vendors/chartjs/chart.min.js";
// import Sparkline from "../public/dist-asset/materialize/vendors/sparkline/jquery.sparkline.min.js";
// import Jvectormap from "../public/dist-asset/materialize/vendors/jvectormap/jquery-jvectormap-1.2.2.min.js";
// import JvectormapWorldMill from "../public/dist-asset/materialize/vendors/jvectormap/jquery-jvectormap-world-mill-en.js";
// import Vectormap from "../public/dist-asset/materialize/vendors/jvectormap/vectormap-script.js";
// import MaterializePlugins from "../public/dist-asset/materialize/js/plugins.js";
// import AnalyticsJs from "../public/dist-asset/materialize/js/scripts/dashboard-analytics.js";
// import "../public/dist-asset/materialize/js/custom-script.js";

// 3rd Party Script
// import "../public/dist-asset/materialize/vendors/jquery-3.2.1.min.js";
// import "../public/dist-asset/materialize/js/materialize.min.js";
// import "../public/dist-asset/materialize/vendors/perfect-scrollbar/perfect-scrollbar.min.js";
// import "../public/dist-asset/materialize/vendors/chartjs/chart.min.js";
// import "../public/dist-asset/materialize/vendors/sparkline/jquery.sparkline.min.js";
// import "../public/dist-asset/materialize/vendors/jvectormap/jquery-jvectormap-1.2.2.min.js";
// import "../public/dist-asset/materialize/vendors/jvectormap/jquery-jvectormap-world-mill-en.js";
// import "../public/dist-asset/materialize/vendors/jvectormap/vectormap-script.js";
// import "../public/dist-asset/materialize/js/plugins.js";
// import "../public/dist-asset/materialize/js/scripts/dashboard-analytics.js";
// import "../public/dist-asset/materialize/js/custom-script.js";

const api = Axios.create({
  baseURL: 'https://gitlab.com/api/v4/',
  headers: {'Private-Token': '4N2bR65QKhAnTDnBAg9e'}
});

Object.defineProperty(Vue.prototype, "$http", { value: api });
Object.defineProperty(Vue.prototype, "$moment", { value: Moment });
// Object.defineProperty(Vue.prototype, "$", { value: Jquery });
// Object.defineProperty(Vue.prototype, "$mat", { value: Materialize });
// console.log(this.$http ? 'Axios works!' : 'Axios fail to load');
// console.log(this.$moment ? 'Moment works!' : 'Moment fail to load');
// console.log(this.$moment ? 'Moment works!' : 'Moment fail to load');

// console.log($ ? '$ Jquery works!' : '$ Jquery fail to load');
// console.log(jQuery ? 'jQuery works!' : 'jQuery fail to load');
// console.log(Jquery ? 'Jquery works!' : 'Jquery fail to load');

// additional CSS
import "../public/dist-asset/materialize/css/themes/horizontal-menu/materialize.css";
import "../public/dist-asset/materialize/css/themes/horizontal-menu/style.css";
// import "../public/dist-asset/style.css";
import "../public/dist-asset/materialize/css/layouts/style-horizontal.css";
import "../public/dist-asset/materialize/vendors/perfect-scrollbar/perfect-scrollbar.css";
// import "../public/dist-asset/materialize/vendors/jvectormap/jquery-jvectormap.css";
import "../node_modules/vue-multiselect/dist/vue-multiselect.min.css";
// import "../public/dist-asset/materialize/css/custom/custom.css";
// import 'vue-material/dist/vue-material.min.css'


// Vue.use(Vuetify);
// Vue.use(VueMaterial)
Vue.config.productionTip = false;

new Vue({
  router,
  render: h => h(App)
}).$mount("#app");

