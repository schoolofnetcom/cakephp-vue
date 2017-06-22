// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import Vuex from 'vuex'
import VueResource from 'vue-resource'

import App from './App'
import router from './router'
import VuexStore from './store'

Vue.use(Vuex)
Vue.use(VueResource)
const store = new Vuex.Store(VuexStore)

Vue.http.options.root = process.env.SERVER

Vue.http.interceptors.push((request, next) => {
  request.headers.set('Accept', 'application/vnd.api+json')
  request.headers.set('Content-Type', 'application/vnd.api+json')
  next()
})

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  template: '<App/>',
  components: { App }
})
