<template>
	<div>
		  <div class="user-nav user-nav-bg" :style="{ backgroundImage: 'url(' + bgImgUrl.userBgImgUrl + ')'}">
	      <div class="user-nav-head">
	          <img width="150" height="150" src="../assets/images/avator.png" alt="">
	      </div>
	      <div class="user-nav-trophy">
	          <span class="text-platinum">白0</span>
	          <span class="text-gold">金0</span>
	          <span class="text-silver">银5</span>
	          <span class="text-bronze">铜17</span>
	          <span>总22</span>
	      </div>
	  </div>
		<div class="container" style="width: 1000px;height: 1000px;background-color: #fff;">
	      <div class="row">
	          <div id="user-tab" class="col-md-12">
	              <ul class="col-md-8 col-md-push-2">
	                  <li class="active"><a href="javascript:;">留言</a></li>
	                  <li><a href="userReply.html">回复</a></li>
	                  <li><a href="userCollection.html">收藏</a></li>
	                  <li><a href="userPosts.html">帖子</a></li>
	                  <li><a href="userFollow.html">关注</a></li>
	                  <li><a href="userTrade.html">买卖</a></li>
	                  <li><a href="userSetting.html">设置</a></li>
	              </ul>
	          </div>
	          <router-view></router-view>
	      </div>
	  </div>
	</div>
</template>
<script>
	import { getUserBgImg } from '@/api/user.js'

	export default {
		name: 'ps-user-common',

		data () {
			return {
				bgImgUrl: ''
			}
		},

		created () {
			getUserBgImg(this.API_URL + '/userBgImg').then((res => {
				console.log(res)
				this.bgImgUrl = res
			}))
		}
	}
</script>