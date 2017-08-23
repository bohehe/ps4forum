import Vue from 'vue'
import Router from 'vue-router'

import psIndex from '@/views/ps-index'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      redirect: '/index'
    },
    {
    	path: '/index',
    	name: 'index',
    	component: {
      	psIndex
      }
    }
  ]
})
