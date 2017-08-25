<template>
	<div>
		<ps-slider></ps-slider>
		<div id="container-body" class="container" style="margin-top: 30px;">
	      <div class="row">
	          <div id="container-left" class="col-md-9">
	              <div id="container-left-content" class="col-md-12">
	                  <div class="list-group">
	                      <a href="newsDetail.html" class="list-group-item">
	                          <h4 class="list-group-item-heading">
	                              【置顶】xxxxxxxxxx
	                          </h4>
	                      </a>
	                      <a href="newsDetail.html" class="list-group-item">
	                          <h4 class="list-group-item-heading">
	                              【置顶】xxxxxxxxxx
	                          </h4>
	                      </a>
	                      <router-link v-for="(posts, idx) in postsList" :key="posts.id" :to="{ name: 'news-detail', params: { id: posts.id } }" class="list-group-item">
	                          <h4 class="list-group-item-heading">
	                              {{ posts.title }}
	                          </h4>
	                          <p class="list-group-item-text">
	                              {{ posts.intro }}
	                          </p>
	                          <img v-for="(img, imgIdx) in posts.imgs" width="230px" height="135px" :src="img">
	                      </router-link>
	                  </div>
	                  <ul class="pagination">
	                      <li><a href="#">&laquo;</a></li>
	                      <li class="active"><a href="#">1</a></li>
	                      <li><a href="#">2</a></li>
	                      <li><a href="#">3</a></li>
	                      <li><a href="#">4</a></li>
	                      <li><a href="#">5</a></li>
	                      <li><a href="#">&raquo;</a></li>
	                  </ul>
	              </div>
	          </div>
	          <div id="container-right" class="col-md-3">
	              <aside class="col-md-12 col-md-push-1">
	                  <h4>最新游戏</h4>
	                  <ul>
	                      <li v-for="(game, idx) in hotGameList" :key="game.id">
	                          <router-link :to="{ name: 'game-detail', params: {id: game.id} }">{{ game.title }}</router-link>
	                      </li>
	                  </ul>
	              </aside>
	              <aside class="col-md-12 col-md-push-1">
	                  <h4>热点新闻</h4>
	                  <ul>
	                      <li v-for="(news, idx) in hotNewsList" :key="news.id">
	                          <router-link :to="{ name: 'news-detail', params: {id: news.id} }">{{ news.title }}</router-link>
	                      </li>
	                  </ul>
	              </aside>
	              <aside class="col-md-12 col-md-push-1">
	                  <h4>热门帖子</h4>
	                  <ul>
	                      <li v-for="(hposts, idx) in hotPostsList" :key="hposts.id">
	                          <router-link :to="{ name: 'posts-detail', params: {id: hposts.id} }">{{ hposts.title }}</router-link>
	                      </li>
	                  </ul>
	              </aside>
	          </div>
	      </div>
	  </div>
	</div>
</template>
<script>
	import psSlider from '@/components/common/ps-slider'
	import { getIndexPostsList, getIndexHotGameList, getIndexHotNewsList, getIndexHotPostsList } from '@/api/index'

	export default {
		name: 'ps-index',
		components: {
			psSlider
		},

		data () {
			return {
				postsList: [],
				hotGameList: [],
				hotNewsList: [],
				hotPostsList: []
			}
		},

		created () {
			//左侧文章列表数据
			getIndexPostsList(this.API_URL + '/indexPostsList', []).then((res => {
				console.log(res)
      	this.postsList = res
      }))
			//右侧Hot游戏
			getIndexHotGameList(this.API_URL + '/indexHotGameList', []).then((res => {
				console.log(res)
				this.hotGameList = res
			}))
			//右侧Hot新闻
			getIndexHotNewsList(this.API_URL + '/indexHotNewsList', []).then((res => {
				console.log(res)
				this.hotNewsList = res
			}))
			//右侧Hot帖子
			getIndexHotPostsList(this.API_URL + '/indexHotPostsList', []).then((res => {
				console.log(res)
				this.hotPostsList = res
			}))
		}
	}
</script>
<style>
	@import '../assets/css/index.css';
</style>