<template>
	<div class="col-md-3" style="height: 1000px;">
	    <div class="detail-left-user">
	        <img style="border-radius: 50%;" height="120px" width="120px" :src="userLeftInfo.uImgUrl">
	        <h3>
	            <a href="#">{{ userLeftInfo.uName }}</a>
	        </h3>
	    </div>
	</div>
</template>
<script>
	import { getUserLeftInfo } from '@/api/news.js'

	export default {
		name: 'ps-user-left',

		data () {
			return {
				userLeftInfo: []
			}
		},

		created () {
			getUserLeftInfo(this.API_URL + '/userLeftInfo', []).then((res => {
				console.log(res)
				this.userLeftInfo = res
			}))
		}
	}
</script>