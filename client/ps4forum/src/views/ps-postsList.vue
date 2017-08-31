<template>
  <div class="container" id="main-body" style="background-color: #fff;max-width: 970px;">
      <div class="row">
          <form class="bs-example bs-example-form" role="form" style="margin-top: 35px;">
              <div class="col-md-6 col-md-push-3">
                  <div class="input-group" style="float: left;">
                      <select class="form-control">
                          <option>全部</option>
                          <option>攻略</option>
                          <option>吐槽</option>
                          <option>心得</option>
                      </select>
                  </div>
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="搜帖子...">
                      <span class="input-group-btn">
                          <button class="btn btn-primary" type="button">搜索</button>
                      </span>
                  </div>
              </div>
          </form>
          <div class="col-md-12 posts-lists" style="margin-top: 30px;">
              <div class="list-group-item">
                  <h4 class="list-group-item-heading">
                      <span class="label label-primary">置顶</span>
                      <span>
                          <router-link to="#">公告/封号查询/申诉</router-link>
                      </span>
                  </h4>
              </div>
              <div class="list-group-item">
                  <h4 class="list-group-item-heading">
                      <span class="label label-primary">置顶</span>
                      <span class="label label-danger">精</span>
                      <span>
                          <router-link to="#">发帖和回复须知</router-link>
                      </span>
                  </h4>
              </div>
              <ps-posts-list v-bind:postDetailRouteName="postDetailRouteName"></ps-posts-list>
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
  </div>
</template>
<script>
	import '@/assets/js/touchTouch.jquery.js'
	import psPostsList from '@/components/common/ps-posts-list'
	
	export default {
		name: 'ps-postsList',

		data () {
			return {
				postDetailRouteName: 'posts-detail' //传递此参数到子组件psPostsList, 用以区别不同list路由到对应的详情
			}
		},

		components: {
			psPostsList
		}
	}
</script>
<style>
	@import '../assets/css/touchTouch.css';
	@import '../assets/css/game-thumb-img.css';
	@import '../assets/css/postsList.css';
</style>