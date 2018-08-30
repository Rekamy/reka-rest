import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import "./registerServiceWorker";


// additional CSS
import "../public/dist-asset/materialize/css/themes/horizontal-menu/materialize.css";
import "../public/dist-asset/materialize/css/themes/horizontal-menu/style.css";
// import "../public/dist-asset/style.css";
import "../public/dist-asset/materialize/css/layouts/style-horizontal.css";
import "../public/dist-asset/materialize/vendors/perfect-scrollbar/perfect-scrollbar.css";
import "../public/dist-asset/materialize/vendors/jvectormap/jquery-jvectormap.css";
import "../public/dist-asset/materialize/vendors/flag-icon/css/flag-icon.min.css";
import "../node_modules/vue-multiselect/dist/vue-multiselect.min.css";
// import "../public/dist-asset/materialize/css/custom/custom.css";

Vue.config.productionTip = false;

new Vue({
  router,
  render: h => h(App)
}).$mount("#app");
