<template>
	<div class="col-md-10 col-md-push-1 user-posts">
    <div v-if="!isEmptyObject(trades)" v-for="(trade, idx) in trades" class="list-group-item">
      <div class="row" style="padding: 10px 15px;">
        <div class="col-md-9" style="padding: 0;margin: 0;">
          <h4 class="list-group-item-heading">
            <a href="#">{{ trade.title }}</a>
          </h4>
          <p class="list-group-item-text">
            {{ trade.content }}
          </p>
        </div>
        <div class="col-md-3">
          <p class="posts-lists-right">
            <a href="#"><span>回复（{{ trade.countReply }}）</span></a>
            <button class="btn btn-danger">下架</button>
          </p>
          <p class="posts-lists-right">
            <span>{{ trade.Date }}</span>
          </p>
        </div>
      </div>
    </div>
	</div>
</template>
<script>
	import { getUserTrade } from '@/api/user.js'

	export default {
		name: 'ps-user-trade',

		data () {
			return {
				trades: []
			}
		},

		created () {
			getUserTrade(this.API_URL + '/userTrade', []).then((res => {
				console.log(res)
				this.trades = res
			}))
		}
 	}
</script>
<style>
	@import '../assets/css/userTrade.css';
</style>