import Vue from 'vue'

import { router } from './plugins'
import store from './store'

import App from './App.vue'

Vue.config.productionTip = false
Vue.config.devtools = process.env.NODE_ENV !== 'production'
Vue.config.debug = process.env.NODE_ENV !== 'production'
Vue.config.silent = process.env.NODE_ENV === 'production'

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
