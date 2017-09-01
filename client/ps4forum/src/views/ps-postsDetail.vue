<template>
  <div class="container">
      <div class="col-md-10 col-md-push-1" style="background-color: #fff;padding: 0px;">
          <div class="post-detail-title">
              <h4>{{ posts.title }}
                  <span class="pull-right">
                      <button type="button" class="btn btn-default">只看楼主</button>
                      <button type="button" class="btn btn-default">{{ posts.hasKept }}</button>
                      <button type="button" class="btn btn-default">回复</button>
                      <button type="button" class="btn btn-default">{{ posts.hasZan }}</button>
                  </span>
              </h4>
          </div>
          <div class="row" style="margin: 0;">
              <ul class="list-group" id="posts-detail-list">
                  <li v-for="(post, idx) in posts.dataList" class="pull-left">
                      <div class="col-md-2 posts-detail-left">
                          <a href="#">
                              <img style="border-radius: 50%;" height="120px" width="120px" :src="post.uImgUrl">
                          </a>
                          <h4>
                              <router-link to="#">{{ post.uName }}</router-link>
                          </h4>
                      </div>
                      <div class="col-md-10 posts-detail-right">
                          <div v-html="post.content" class="posts-content">
                              
                          </div>
                          <div class="pull-right posts-content-info">
                              <p>
                                  <router-link to="#">举报</router-link>
                                  <span>&nbsp;&nbsp;|&nbsp;&nbsp;{{ idx+1 }}楼&nbsp;&nbsp;|&nbsp;&nbsp;{{ post.Date }}&nbsp;&nbsp;</span>
                                  <router-link to="#">回复</router-link>
                              </p>
                          </div>
                          <div class="posts-content-reply">
                              <ul class="posts-content-reply-wrap">
                                  <li v-if="post.reply.length > 0" v-for="(reply, ridx) in post.reply">
                                      <div>
                                          <router-link to="#">
                                              <img width="34px" height="34px" class="ava" :src="reply.uImgUrl">
                                          </router-link>
                                      </div>
                                      <div class="posts-content-reply-cont">
                                        <span class="posts-content-reply-cont-r">
                                              <router-link to="#">
                                              {{ reply.uName }}
                                              </router-link>
                                               <template v-if="isEmptyObject(reply.replyTo.length)">
                                                &nbsp;回复
                                                <router-link to="#">
                                                    {{ reply.replyTo.uName }}
                                                </router-link>
                                              </template>
                                              ：&nbsp;{{ reply.replyContent }}
                                          </span>
                                          <p class="posts-content-reply-cont-p">
                                              <router-link style="cursor: pointer;" to="#">举报</router-link>
                                              <span>&nbsp;&nbsp;{{ reply.Date }}&nbsp;&nbsp;</span>
                                              <router-link to="#">回复</router-link>
                                          </p>
                                      </div>   
                                  </li>
                                  <ul class="pagination">
                                      <li><a href="#">&laquo;</a></li>
                                      <li class="active"><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#">&raquo;</a></li>
                                  </ul> 
                              </ul>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
          <div id="game-comment" style="margin: 30px;">
						<ps-comment-emoji></ps-comment-emoji>
          </div>
      </div>
  </div>
</template>
<script>
	import '@/assets/js/myemojiPl.js'
	import { getPostsDetail } from '@/api/posts.js'
	import psCommentEmoji from '@/components/common/ps-comment-emoji'

	export default {
		name: 'ps-postsDetail',

		data () {
			return {
				posts: []
			}
		},

		components: {
			psCommentEmoji
		},

		created () {
			getPostsDetail(this.API_URL + '/postsDetail', []).then((res => {
				console.log(res)
				this.posts = res
			}))
		}
	}
</script>
<style>
	@import '../assets/css/myemojiPl.css';
	@import '../assets/css/comment.css';
	@import '../assets/css/postsDetail.css';
</style>