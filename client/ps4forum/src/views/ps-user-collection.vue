<template>
  <div class="col-md-10 col-md-push-1 user-posts">
      <form class="bs-example bs-example-form" role="form" style="margin-bottom: 60px;">
          <div class="col-md-6 col-md-push-3">
              <div class="input-group" style="float: left;">
                  <select class="form-control">
                      <option>全部</option>
                      <option>新闻</option>
                      <option>帖子</option>
                      <option>买卖</option>
                      <option>游戏</option>
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
      <div v-if="!isEmptyObject(collections)" v-for="(collection, idx) in collections" class="list-group-item">
          <div class="row" style="padding: 10px 15px;">
              <div class="col-md-9" style="padding: 0;margin: 0;">
                  <h4 class="list-group-item-heading">
                      <router-link to="#">{{ collection.title }}</router-link>
                  </h4>
                  <p class="list-group-item-text">
                    	{{ collection.content }}
                  </p>
              </div>
              <div class="col-md-3">
                  <p class="posts-lists-right">
                      <a href="#"><span>回复（{{ collection.countReply }}）</span></a>
                      <button class="btn btn-danger">取消收藏</button>
                  </p>
                  <p class="posts-lists-right">
                      <span>{{ collection.Date }}</span>
                  </p>
              </div>
          </div>
      </div>
  </div>
</template>
<script>
	import { getUserCollection } from '@/api/user.js'

	export default {
		name: 'ps-user-collection',

		data () {
			return {
				collections: []
			}
		},

		created () {
			getUserCollection(this.API_URL + '/userCollection', []).then((res => {
				console.log(res)
				this.collections = res
			}))
		}
	}
</script>
<style>
  @import '../assets/css/userCollection.css';
</style>