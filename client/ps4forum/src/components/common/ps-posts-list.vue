<template>
	<div>
		<div v-for="(news, idx) in newsList" :key="news.id" class="list-group-item" v-on:mouseover="listHover">
      <div class="row" style="padding: 10px 15px;">
          <div class="col-md-9" style="padding: 0;margin: 0;">
              <h4 class="list-group-item-heading">
                  <router-link :to="{ name: postDetailRouteName, params: { id: news.id } }">
                    {{ news.title }}
                  </router-link>
              </h4>
              <p class="list-group-item-text">
                  {{ news.intro }}
              </p>
              <div class="clearfix img-gather thumbs">
                  <a v-for="imgUrl in news.newsImgs" :href="imgUrl" v-bind:style="{ backgroundImage: 'url(' + imgUrl + ')' }"></a>
              </div>
          </div>
          <div class="col-md-3">
              <p class="posts-lists-right">
                  <a href="#">
                      <img width="34px" height="34px" class="ava" :src="news.uImgUrl" alt="">
                  </a>
                  <a href="#">{{ news.uName }}</a>
              </p>
              <p class="posts-lists-right">
                  <a href="#"><span>回复（{{ news.countReply }}）</span></a>
              </p>
              <p class="posts-lists-right">
                  <span>{{ news.postsDate }}</span>
              </p>
          </div>
      </div>
  	</div>
	</div>
</template>
<script>
  import { getNewsList } from '@/api/news'

	export default {
		name: 'ps-posts-list',
    
    data () {
      return {
        newsList: []
      }
    },

    props: ['postDetailRouteName'], //根据父组件给出的路由名称，href指向不同的详情页(news-detail, posts-detail)

    created () {
      //新闻列表
      getNewsList(this.API_URL + '/newsList', []).then((res => {
        console.log(res)
        this.newsList = res
      }))
    },

    methods: {
      listHover() {
        $('.posts-lists .list-group-item').hover(function() {
            $(this).addClass('posts-list-hover')
        }, function() {
            $(this).removeClass('posts-list-hover')
        })
        $('.thumbs a').touchTouch()
      }
    }
	}

</script>