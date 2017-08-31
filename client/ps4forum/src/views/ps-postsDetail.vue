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
                          <div class="posts-content">
                              血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售
                          </div>
                          <div class="posts-content-img">
                              <img src="../assets/images/mannrika.jpg" alt="">
                          </div>
                          <div class="pull-right posts-content-info">
                              <p>
                                  <a href="#">举报</a>
                                  <span>&nbsp;&nbsp;|&nbsp;&nbsp;2楼&nbsp;&nbsp;|&nbsp;&nbsp;2017-08-05 22:23&nbsp;&nbsp;</span>
                                  <a href="#">回复</a>
                              </p>
                          </div>
                          <div class="posts-content-reply">
                              <ul class="posts-content-reply-wrap">
                                  <li>
                                      <div>
                                          <a href="#">
                                              <img width="34px" height="34px" class="ava" src="../assets/images/avator.png" alt="">
                                          </a>
                                      </div>
                                      <div class="posts-content-reply-cont">
                                          <span class="posts-content-reply-cont-r">
                                              <a href="#">
                                              Good Hunter
                                              </a>：对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。
                                          </span>
                                          <p class="posts-content-reply-cont-p">
                                              <a style="cursor: pointer;" href="#">举报</a>
                                              <span>&nbsp;&nbsp;2017-08-05 22:23&nbsp;&nbsp;</span>
                                              <a href="#">回复</a>
                                          </p>
                                      </div>   
                                  </li>
                                  <li>
                                      <div>
                                          <a href="#">
                                              <img width="34px" height="34px" class="ava" src="../assets/images/biggerhacker.jpg" alt="">
                                          </a>
                                      </div>
                                      <div class="posts-content-reply-cont">
                                          <span class="posts-content-reply-cont-r">
                                              <a href="#">
                                                  Bigger Hacker
                                              </a>：天空与宇宙是一个整体，这就是圣诗。天空与宇宙是一个整体，这就是圣诗。天空与宇宙是一个整体，这就是圣诗。天空与宇宙是一个整体，这就是圣诗。天空与宇宙是一个整体，这就是圣诗。天空与宇宙是一个整体，这就是圣诗。天空与宇宙是一个整体，这就是圣诗。天空与宇宙是一个整体，这就是圣诗。天空与宇宙是一个整体，这就是圣诗。天空与宇宙是一个整体，这就是圣诗。天空与宇宙是一个整体，这就是圣诗。天空与宇宙是一个整体，这就是圣诗。
                                          </span>
                                          <p class="posts-content-reply-cont-p">
                                              <a href="#">举报</a>
                                              <span>&nbsp;&nbsp;2017-08-05 22:23&nbsp;&nbsp;</span>
                                              <a href="#">回复</a>
                                          </p>
                                      </div>
                                  </li>
                                  <li>
                                      <div>
                                          <a href="#">
                                              <img width="34px" height="34px" class="ava" src="../assets/images/avator.png" alt="">
                                          </a>
                                      </div>
                                      <div class="posts-content-reply-cont">
                                          <span class="posts-content-reply-cont-r">
                                              <a href="#">
                                              Good Hunter
                                              </a>：&nbsp;回复
                                              <a href="#">
                                                  Bigger Hacker
                                              </a>
                                              ：&nbsp;对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。突刺攻击很有效。突刺攻击很有效。突刺攻击很有效。突刺攻击很有效。突刺攻击很有效。
                                          </span>
                                          <p class="posts-content-reply-cont-p">
                                              <a href="#">举报</a>
                                              <span>&nbsp;&nbsp;2017-08-05 22:23&nbsp;&nbsp;</span>
                                              <a href="#">回复</a>
                                          </p>
                                      </div>   
                                  </li>
                                  <li>
                                      <div>
                                          <a href="#">
                                              <img width="34px" height="34px" class="ava" src="../assets/images/avator.png" alt="">
                                          </a>
                                      </div>
                                      <div class="posts-content-reply-cont">
                                          <span class="posts-content-reply-cont-r">
                                              <a href="#">
                                              Good Hunter
                                              </a>：对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。
                                          </span>
                                          <p class="posts-content-reply-cont-p">
                                              <a href="#">举报</a>
                                              <span>&nbsp;&nbsp;2017-08-05 22:23&nbsp;&nbsp;</span>
                                              <a href="#">回复</a>
                                          </p>
                                      </div>   
                                  </li>
                                  <li>
                                      <div>
                                          <a href="#">
                                              <img width="34px" height="34px" class="ava" src="../assets/images/avator.png" alt="">
                                          </a>
                                      </div>
                                      <div class="posts-content-reply-cont">
                                          <span class="posts-content-reply-cont-r">
                                              <a href="#">
                                              Good Hunter
                                              </a>：对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。
                                          </span>
                                          <p class="posts-content-reply-cont-p">
                                              <a href="#">举报</a>
                                              <span>&nbsp;&nbsp;2017-08-05 22:23&nbsp;&nbsp;</span>
                                              <a href="#">回复</a>
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