<template>
  <div class="col-md-10 col-md-push-1 user-posts">
      <ul class="message-main-lists">
          <li v-if="!isEmptyObject(replys)" v-for="(reply, idx) in replys" class="reply-main-list">
              <div class="reply-main-left">
                  <router-link target="_blank" class="medium-pic round" to="#" :title="reply.uName">
                      <img style="border-radius: 50%;" width="48" height="48" :src="reply.uImgUrl">
                  </router-link>
              </div>
              <div class="message-main-right">
                  <router-link class="message-username" to="#" :title="reply.uName">
                    	{{ reply.uName }}
                  </router-link>
                  <span class="message-source-time">
                    	{{ reply.Date }}
                  </span>
                  <div class="message-content-title">
                      <a target="_blank" href="#">{{ reply.content }}</a>
                  </div>
                  <div class="message-content-wrapper">
                      <div class="message-content">
                          <a target="_blank" href="#">【{{ reply.title }}】</a>评论中回复了你
                      </div>
                  </div>
              </div>
          </li>
      </ul>
  </div>
</template>
<script>
	import { getUserReply } from '@/api/user.js'

	export default {
		name: 'ps-user-reply',

		data () {
			return {
				replys: []
			}
		},

		created () {
			getUserReply(this.API_URL + '/userReply', []).then((res => {
				console.log(res)
				this.replys = res
			}))
		}
	}
</script>
<style>
	@import '../assets/css/userReply.css';
</style>