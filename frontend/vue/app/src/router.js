import Vue from "vue";
import Router from "vue-router";
import Home from "./views/Home.vue";

Vue.use(Router);

export default new Router({
  mode: "history",
  base: process.env.BASE_URL,
  routes: [
    {
      path: "/",
      name: "home",
      component: Home
    },
    {
      path: "/about",
      name: "about",
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ './views/About.vue')
    },
    {
      path: '/test',
      name: 'test',
      meta: {
        js: './test.js',
        scss: './test.scss'
      },
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ './views/Test/Test.vue')
    },
    {
      path: '/company',
      name: 'company',
      meta: {
        js: './index.js',
        scss: './index.scss'
      },
      component: () => import('./views/company/Company.vue')
    },
    {
      path: '/migration',
      name: 'migration',
      meta: {
        js: './index.js',
        scss: './index.scss'
      },
      component: () => import('./views/migration/Migration.vue')
    },
    {
      path: '/profile',
      name: 'profile',
      meta: {
        js: './index.js',
        scss: './index.scss'
      },
      component: () => import('./views/profile/Profile.vue')
    },
    {
      path: '/setting',
      name: 'setting',
      meta: {
        js: './index.js',
        scss: './index.scss'
      },
      component: () => import('./views/setting/Setting.vue')
    },
    {
      path: '/user',
      name: 'user',
      meta: {
        js: './index.js',
        scss: './index.scss'
      },
      component: () => import('./views/user/User.vue')
    },

  ]
});
