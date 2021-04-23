import Vue from 'vue'
import Router from 'vue-router'
import Home from '../views/Home'
import About from '../views/About'

Vue.use(Router)

const router = new Router({
  history: false,
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/about',
      name: 'About',
      component: About
    }
  ]
})

export default router
