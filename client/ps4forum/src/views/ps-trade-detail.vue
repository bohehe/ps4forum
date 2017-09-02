<template>
  <div class="container">
			<ps-user-left></ps-user-left>
      <div class="col-md-9" style="background-color: #fff;">
          <div class="news-head page-header">
              <h2>{{ trade.title }}&nbsp;&nbsp;&nbsp;&nbsp;<b>￥{{ trade.price }}</b></h2>
          </div>
          <div class="text-content">
              <table class="table">
                  <caption>
                      温馨提示：二手交易有风险。本站不担保任何交易的真实性，请玩家务必谨慎。尽量走闲鱼，不要先款/先货
                  </caption>
                 <tbody>
                      <tr>
                          <td width="80">分类</td>
                          <td>{{ trade.type }}</td>
                          <td width="80">类型</td>
                          <td>{{ trade.tradeType }}</td>
                      </tr>
                      <tr>
                          <td>方式</td>
                          <td>{{ trade.sendWay }}</td>
                          <td>地区</td>
                          <td>{{ trade.locate }}</td>
                      </tr>
                      <tr>
                          <td>版本</td>
                          <td>{{ trade.version }}</td>
                          <td>语言</td>
                          <td>{{ trade.language }}</td>
                      </tr>
                      <tr>
                          <td>微信</td>
                          <td>{{ trade.wechat }}</td>
                          <td>QQ</td>
                          <td>{{ trade.qq }}</td>
                      </tr>
                      <tr>
                          <td colspan="4"></td>
                      </tr>
                 </tbody>
              </table>
              <article class="article">
                  {{ trade.content }}
              </article>
              <div class="trade-detail-imgs">
                  <img v-for="img in trade.imgs" :src="img">
              </div>
          </div>
          <p class="content-head-info">
              <span><a href="javascript:;">{{ trade.hasZan }}（{{ trade.countZan }}）</a></span>
              <span><a href="javascript:;">{{ trade.hasKept }}</a></span>
              <span><a href="javascript:;">回复（{{ trade.countReply }}）</a></span>
          </p>
          <div id="game-comment" class="col-md-12">
            <ps-comment-list></ps-comment-list>
            <ps-comment-emoji></ps-comment-emoji>
          </div>
      </div>
  </div>
</template>
<script>
	import { getTradeDetail } from '@/api/trade.js'
	import psCommentList from '@/components/common/ps-comment-list'
	import psCommentEmoji from '@/components/common/ps-comment-emoji'
	import psUserLeft from '@/components/common/ps-user-left'

	export default {
		name: 'ps-trade-detail',

		data () {
			return {
				trade: []
			}
		},

		components: {
			psCommentList,
			psCommentEmoji,
			psUserLeft
		},

		created () {
			getTradeDetail(this.API_URL + '/tradeDetail', []).then((res => {
				console.log(res)
				this.trade = res
			}))
		}
	}
</script>
<style>
	@import '../assets/css/tradeDetail.css';
</style>