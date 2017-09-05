<template>
  <div class="col-md-10 col-md-push-1 user-posts">
      <div v-if="!isEmptyObject(follows)" v-for="(follow, idx) in follows" class="list-group-item" style="border:none;">
          <div class="row" style="padding: 10px 15px;border-bottom: 1px dotted #ccc;">
              <div style="display: inline-block;float: left;margin-right: 30px;">
                  <router-link to="#">
                      <img width="48" height="48" :src="follow.uImgUrl">
                  </router-link>
              </div>
              <div class="col-md-8" style="padding: 0;margin: 0;display:inline-block;">
                  <h4 class="list-group-item-heading">
                      <router-link to="#">{{ follow.uName }}</router-link>
                  </h4>
                  <p class="list-group-item-text">
                      {{ follow.intro }}
                  </p>
              </div>
              <div class="col-md-2" style="text-align: center;margin-left:20px;">
                  <p class="posts-lists-right">
                      <a href="#"><span>取消关注</span></a>
                  </p>
                  <p class="posts-lists-right">
                      <a href="#"><span>给ta留言</span></a>
                  </p>
              </div>
          </div>
      </div>
  </div>
</template>
<script>
	import { getUserFollow } from '@/api/user.js'

	export default {
		name: 'ps-user-follow',

		data () {
			return {
				follows: []
			}
		},

		created () {
			getUserFollow(this.API_URL + '/userFollow', []).then((res => {
				console.log(res)
				this.follows = res
			}))
		}
	}
</script>
<style>
	@import '../assets/css/userFollow.css';
</style>