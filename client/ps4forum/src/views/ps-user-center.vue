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
                  	<router-link active-class="active" tag="li" :to="{ name: 'u-game', params: { id: 123 } }">
                  		<a>游戏</a>
                  	</router-link>
                  	<router-link active-class="active" tag="li" :to="{ name: 'u-msg', params: { id: 123 } }">
                  		<a>留言</a>
                  	</router-link>
                  	<router-link active-class="active" tag="li" :to="{ name: 'u-collection', params: { id: 123 } }">
                  		<a>收藏</a>
                  	</router-link>
                  	<router-link active-class="active" tag="li" :to="{ name: 'u-posts', params: { id: 123 } }">
                  		<a>帖子</a>
                  	</router-link>
                  	<router-link active-class="active" tag="li" :to="{ name: 'u-trade', params: { id: 123 } }">
                  		<a>买卖</a>
                  	</router-link>
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
		name: 'ps-user-center',

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
<style>
	@import '../assets/css/userGlobal.css';

	#user-tab li {
		width: 20.0%;
	}
</style>