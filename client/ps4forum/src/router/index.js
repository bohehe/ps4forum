import Vue from 'vue'
import Router from 'vue-router'

import psIndex from '@/views/ps-index'
import psNewsList from '@/views/ps-newsList'
import psNewsDetail from '@/views/ps-newsDetail'

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
    	component: psIndex
    },
    {
      path: '/news',
      name: 'news-list',
      component: psNewsList,
      children: [
        {
          path: ':nid',
          name: 'news-detail',
          component: psNewsDetail
        }
      ]
    }
  ]
})
