<template>
  <div id="banner-index" class="carousel slide">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li v-for="(banner, idx) in bannerList" :key="banner.id" data-target="#banner-index" :data-slide-to="idx" v-bind:class="{active: idx==0}"></li>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div v-for="(banner, idx) in bannerList" :key="banner.id" class="item" v-bind:class="{active: idx==0}">
            <img :src="banner.imgUrl" :alt="banner.title">
            <div class="carousel-caption">{{ banner.title }}</div>
        </div>
    </div>
  </div>
</template>
<script>
  import { getIndexBannerList } from '@/api/index'

  export default {
    name: 'ps-slider',

    data () {
      return {
        bannerList: []
      }
    },

    created () {
      //获取banner数据
      getIndexBannerList(this.API_URL + '/indexBannerList', []).then((res => {
       this.bannerList = res
      }))
    },

    mounted () {
      $('.carousel').carousel({
        interval: 4000
      })
    }
  }

</script>