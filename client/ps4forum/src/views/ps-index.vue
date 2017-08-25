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

	                      <router-link v-for="(posts, idx) in postsList" :key="posts.id" to="news/posts.id" class="list-group-item">
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
	                      <li>
	                          <a href="gameDetail.html">BloodBorne2</a>
	                      </li>
	                      <li>
	                          <a href="gameDetail.html">巫师4</a>
	                      </li>
	                      <li>
	                          <a href="gameDetail.html">生化危机8</a>
	                      </li>
	                      <li>
	                          <a href="gameDetail.html">尼尔：机械纪元</a>
	                      </li>
	                      <li>
	                          <a href="gameDetail.html">仁王</a>
	                      </li>
	                      <li>
	                          <a href="gameDetail.html">神秘海域</a>
	                      </li>
	                  </ul>
	              </aside>
	              <aside class="col-md-12 col-md-push-1">
	                  <h4>热点新闻</h4>
	                  <ul>
	                      <li>
	                          <a href="newsDetail.html">BloodBorne2</a>
	                      </li>
	                      <li>
	                          <a href="newsDetail.html">巫师4</a>
	                      </li>
	                      <li>
	                          <a href="newsDetail.html">生化危机8</a>
	                      </li>
	                      <li>
	                          <a href="newsDetail.html">尼尔：机械纪元</a>
	                      </li>
	                      <li>
	                          <a href="newsDetail.html">仁王</a>
	                      </li>
	                      <li>
	                          <a href="newsDetail.html">神秘海域</a>
	                      </li>
	                  </ul>
	              </aside>
	              <aside class="col-md-12 col-md-push-1">
	                  <h4>热门帖子</h4>
	                  <ul>
	                      <li>
	                          <a href="postsDetail.html">BloodBorne2</a>
	                      </li>
	                      <li>
	                          <a href="postsDetail.html">巫师4</a>
	                      </li>
	                      <li>
	                          <a href="postsDetail.html">生化危机8</a>
	                      </li>
	                      <li>
	                          <a href="postsDetail.html">尼尔：机械纪元</a>
	                      </li>
	                      <li>
	                          <a href="postsDetail.html">仁王</a>
	                      </li>
	                      <li>
	                          <a href="postsDetail.html">神秘海域</a>
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
	import { getIndexPostsList } from '@/api/index'

	export default {
		name: 'ps-index',
		components: {
			psSlider
		},

		data () {
			return {
				postsList: [],
				hotnewsList: [],
				hotPostsList: [],
				hotGameList: []
			}
		},

		created () {
			//
			getIndexPostsList(this.API_URL + '/indexPostsList', []).then((res => {
				console.log(res)
      	this.postsList = res
      }))
		}
	}
</script>
<style>
	@import '../assets/css/index.css';
</style>