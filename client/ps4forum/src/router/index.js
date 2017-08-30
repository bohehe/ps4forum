import Vue from 'vue'
import Router from 'vue-router'

import psIndex from '@/views/ps-index'
import psNewsList from '@/views/ps-newsList'
import psNewsDetail from '@/views/ps-newsDetail'
import psGameList from '@/views/ps-gameList'
import psGameDetail from '@/views/ps-gameDetail'
import psPostsList from '@/views/ps-postsList'
import psPostsDetail from '@/views/ps-postsDetail'

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
      component: psNewsList
    },
    {
      path: '/news/:id',
      name: 'news-detail',
      component: psNewsDetail
    },
    {
      path: '/game',
      name: 'game-list',
      component: psGameList
    },
    {
      path: '/game/:id',
      name: 'game-detail',
      component: psGameDetail
    },
    {
      path: '/posts',
      name: 'posts-list',
      component: psPostsList
    },
    {
      path: '/posts/:id',
      name: 'posts-detail',
      component: psPostsDetail
    }
  ]
})
