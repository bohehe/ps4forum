import Vue from 'vue'
import Router from 'vue-router'

import psIndex from '@/views/ps-index'
import psNewsList from '@/views/ps-newsList'
import psNewsDetail from '@/views/ps-newsDetail'
import psGameList from '@/views/ps-gameList'
import psGameDetail from '@/views/ps-gameDetail'
import psPostsList from '@/views/ps-postsList'
import psPostsDetail from '@/views/ps-postsDetail'
import psTradeList from '@/views/ps-trade-list'
import psTradeDetail from '@/views/ps-trade-detail'
import psTradePub from '@/views/ps-trade-pub'

import psUserCommon from '@/views/ps-user-common'
import psUserMsg from '@/views/ps-user-msg'

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
    },
    {
      path: '/trade',
      name: 'trade-list',
      component: psTradeList
    },
    {
      path: '/trade/pub',
      name: 'trade-pub',
      component: psTradePub
    },
    {
      path: '/trade/:id',
      name: 'trade-detail',
      component: psTradeDetail
    },
    {
      path: '/user/:id',
      component: psUserCommon,
      children: [
        {
          // 当 /user/:id/msg 匹配成功，
          // UserMsg 会被渲染在 User组件 的 <router-view> 中
          path: 'msg',
          name: 'user-msg',
          component: psUserMsg
        }
      ]
    }
  ]
})
