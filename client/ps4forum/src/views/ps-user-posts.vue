<template>
  <div class="col-md-10 col-md-push-1 user-posts">
      <div v-if="!isEmptyObject(posts)" v-for="(post, idx) in posts" class="list-group-item">
          <div class="row" style="padding: 10px 15px;">
              <div class="col-md-9" style="padding: 0;margin: 0;">
                  <h4 class="list-group-item-heading">
                      <router-link to="#">{{ post.title }}</router-link>
                  </h4>
                  <p class="list-group-item-text">
                      {{ post.content }}
                  </p>
              </div>
              <div class="col-md-3">
                  <p class="posts-lists-right">
                      <a href="#"><span>回复（{{ post.countReply }}）</span></a>
                      <button class="btn btn-danger">删除</button>
                  </p>
                  <p class="posts-lists-right">
                      <span>{{ post.Date }}</span>
                  </p>
              </div>
          </div>
      </div>
  </div>
</template>
<script>
	import { getUserPosts } from '@/api/user.js'

	export default {
		name: 'ps-user-posts',

		data () {
			return {
				posts: []
			}
		},

		created () {
			getUserPosts(this.API_URL + '/userPosts', []).then((res => {
				console.log(res)
				this.posts = res
			}))
		}
	}
</script>
<style>
	@import '../assets/css/userPosts.css';
</style>