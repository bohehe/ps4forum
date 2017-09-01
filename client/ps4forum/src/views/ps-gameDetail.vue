<template>
  <div class="container" id="main-body">
      <div class="row">
          <div id="game-info-list-left" class="col-md-2 col-md-push-1">
              <h4>基本资料卡</h4>
              <ul class="list-group">
                  <li class="list-group-item">
                      <b>名字：</b><span>{{ gameInfo.name }}</span>
                  </li>
                  <li class="list-group-item">
                      <b>所属系列：</b><span>{{ gameInfo.serialName }}</span>
                  </li>
                  <li class="list-group-item">
                      <b>语言：</b><span>{{ gameInfo.language }}</span>
                  </li>
                  <li class="list-group-item">
                      <b>类型：</b><span>{{ gameInfo.type }}</span>
                  </li>
                  <li class="list-group-item">
                      <b>开发商：</b><span>{{ gameInfo.developer }}</span>
                  </li>
              </ul>
              <h4>发行信息</h4>
              <ul class="list-group">
                  <li class="list-group-item">
                      <b>平台：</b><span>{{ gameInfo.platform }}</span>
                  </li>
                  <li class="list-group-item">
                      <b>发行阶段：</b><span>{{ gameInfo.publicVersion }}</span>
                  </li>
                  <li class="list-group-item">
                      <b>售价：</b><span>{{ gameInfo.price }}</span>
                  </li>
                  <li class="list-group-item">
                      <b>发行日期：</b><span>{{ gameInfo.publicDate }}</span>
                  </li>
              </ul>
          </div>
          <div class="col-md-8 col-md-push-1">
              <div class="row">
                  <div id="game-info-list-right" class="col-md-10 col-md-push-1">
                      <div v-if="!isEmptyObject(gameData.gameImgsUrls)" class="game-info-block">
                          <h3 class="game-info-title">游戏图片</h3>
                          <div class="clearfix img-gather thumbs">
                            <a v-for="imgUrl in gameData.gameImgsUrls" :href="imgUrl" v-bind:style="{ backgroundImage: 'url(' + imgUrl + ')' }"></a>
                          </div>
                      </div>
                      <div class="game-info-block">
                          <h3 class="game-info-title">游戏点评</h3>
                          <div class="well well-md">{{ gameData.gameRemark }}</div>
                      </div>
                      <div class="game-info-block">
                          <h3 class="game-info-title">游戏评分</h3>
                          <div class="game-star-score col-md-7">
                              <div>
                                  <star-rating :increment="0.5" :rating="5" :item-size="30" :read-only="true"></star-rating>
                                  <h3 class="star-text"><small>必买神作</small>&nbsp;&nbsp;&nbsp;&nbsp;<small v-if="gameData.gameScore">{{ gameData.gameScore.fiveStar }}%</small></h3>
                              </div>
                              <div>
                                  <star-rating :increment="0.5" :rating="4" :item-size="30" :read-only="true"></star-rating>
                                  <h3 class="star-text"><small>佳作推荐</small>&nbsp;&nbsp;&nbsp;&nbsp;<small v-if="gameData.gameScore">{{ gameData.gameScore.fourStar }}%</small></h3>
                              </div>
                              <div>
                                  <star-rating :increment="0.5" :rating="3" :item-size="30" :read-only="true"></star-rating>
                                  <h3 class="star-text"><small>中规中矩</small>&nbsp;&nbsp;&nbsp;&nbsp;<small v-if="gameData.gameScore">{{ gameData.gameScore.threeStar }}%</small></h3>
                              </div>
                              <div>
                                 <star-rating :increment="0.5" :rating="2" :item-size="30" :read-only="true"></star-rating>
                                  <h3 class="star-text"><small>浪费时间</small>&nbsp;&nbsp;&nbsp;&nbsp;<small v-if="gameData.gameScore">{{ gameData.gameScore.twoStar }}%</small></h3>
                              </div>
                              <div>
                                  <star-rating :increment="0.5" :rating="1" :item-size="30" :read-only="true"></star-rating>
                                  <h3 class="star-text"><small>糟糕透顶</small>&nbsp;&nbsp;&nbsp;&nbsp;<small v-if="gameData.gameScore">{{ gameData.gameScore.oneStar }}%</small></h3>
                              </div>
                          </div>
                          <div class="game-star-score-my col-md-5 hidden">
                              <form role="form">
                                  <div class="form-group">
                                      <label for="name">我的评价</label>
                                      <textarea class="form-control" rows="6"></textarea>
                                  </div>
                              </form>
                              <input value="0" type="number" class="rating user-input-stars" min=0 max=5 step=1 data-size="xs">
                              <button type="submit" class="btn btn-default">提交</button>
                          </div>
                          <div class="col-md-5">
                              <b>我的评价</b>
                              <p v-if="gameData.myComment" class="well well-sm" style="margin: 5px 0 0 0;">
                                  {{ gameData.myComment.content }}
                              </p>
                              <star-rating :increment="0.5" v-if="gameData.myComment" :rating="gameData.myComment.star" :item-size="30" :read-only="true"></star-rating>
                              <button id="modify-comment-star" class="btn btn-default">修改</button>
                          </div>
                      </div>
                  </div>
                  <div id="game-comment" class="col-md-10 col-md-push-1">
                    <ps-comment-list></ps-comment-list>
                		<ps-comment-emoji></ps-comment-emoji>
                  </div>
                  <hr/>
              </div>
          </div>
      </div>
  </div>
</template>
<script>
	import psCommentList from '@/components/common/ps-comment-list'
	import psCommentEmoji from '@/components/common/ps-comment-emoji'
	import { StarRating } from 'vue-rate-it'
	import '@/assets/js/myemojiPl.js'
	import '@/assets/js/touchTouch.jquery.js'
	import { getGameData, getGameInfo } from '@/api/game.js'

	export default {
		name: 'ps-gameDetail',

		data () {
			return {
				gameInfo: [],
				gameData: []
			}
		},

		components: {
			StarRating,
			psCommentList,
			psCommentEmoji
		},

		created () {
			getGameInfo(this.API_URL + '/gameInfo', []).then((res => {
				console.log(res)
				this.gameInfo = res
			})),

			getGameData(this.API_URL + '/gameData', []).then((res => {
				console.log(res)
				this.gameData = res
			}))
		},

		methods: {
			ss() {
				$('.thumbs a').touchTouch()
			}
		},

		mounted () {
			this.ss()
		}
	}
</script>
<style>
	@import '../assets/css/comment.css';
	@import '../assets/css/myemojiPl.css';
	@import '../assets/css/game-thumb-img.css';
	@import '../assets/css/touchTouch.css';
	@import '../assets/css/gameDetail.css';
</style>