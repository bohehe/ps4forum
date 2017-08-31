<template>
  <div class="container" id="main-body" style="background-color: #fff;max-width: 970px;">
      <div class="row">
          <form class="bs-example bs-example-form" role="form" style="margin-top: 35px;">
              <div class="col-md-6 col-md-push-3">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="搜新闻...">
                      <span class="input-group-btn">
                          <button class="btn btn-primary" type="button">搜索</button>
                      </span>
                  </div>
              </div>
          </form>
          <div class="col-md-12 posts-lists" style="margin-top: 30px;">
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
		name: 'ps-newsList',

    data () {
      return {
        postDetailRouteName: 'news-detail' //传递此参数到子组件psPostsList, 用以区别不同list路由到对应的详情
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
	@import '../assets/css/newsList.css';
</style>