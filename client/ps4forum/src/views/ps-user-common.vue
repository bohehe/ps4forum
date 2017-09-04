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
	                  <li class="active">
	                  	<router-link :to="{ name: 'user-msg', params: { id: 123 } }">留言</router-link>
	                  </li>
	                  <li>
	                  	<router-link :to="{ name: 'user-reply', params: { id: 123 } }">回复</router-link>
	                  </li>
	                  <li>
	                  	<router-link :to="{ name: 'user-collection', params: { id: 123 } }">收藏</router-link>
	                  </li>
	                  <li>
	                  	<router-link :to="{ name: 'user-posts', params: { id: 123 } }">帖子</router-link>
	                  </li>
	                  <li>
	                  	<router-link :to="{ name: 'user-follow', params: { id: 123 } }">关注</router-link>
	                  </li>
	                  <li>
	                  	<router-link :to="{ name: 'user-trade', params: { id: 123 } }">买卖</router-link>
	                  </li>
	                  <li>
	                  	<router-link :to="{ name: 'user-setting', params: { id: 123 } }">设置</router-link>
	                  </li>
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