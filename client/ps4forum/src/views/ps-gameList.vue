<template>
  <div class="container" id="main-body">
      <div style="padding: 50px 100px 10px;">
          <form class="bs-example bs-example-form" role="form">
              <div class="row">
                  <div class="col-md-6 col-md-push-3">
                      <div class="input-group">
                          <input type="text" class="form-control">
                          <span class="input-group-btn">
                      <button class="btn btn-default" type="button">
                         搜游戏
                      </button>
                  </span>
                      </div>
                  </div>
              </div>
          </form>
          <form class="bs-example bs-example-form" role="form">
              <div class="row">
                  <div class="col-md-8 col-md-push-3 search-game-btn" style="margin: 20px 0;">
                      <span class="label label-default">发售时间</span>
                      <button type="button" class="btn btn-default btn-sm">全部</button>
                      <button type="button" class="btn btn-default btn-sm">本月</button>
                      <button type="button" class="btn btn-info btn-sm">本季度</button>
                      <button type="button" class="btn btn-default btn-sm">2017</button>
                      <button type="button" class="btn btn-default btn-sm">2016</button>
                      <button type="button" class="btn btn-info btn-sm">已发售</button>
                      <button type="button" class="btn btn-default btn-sm">未发售</button>
                  </div>
              </div>
          </form>
          <form class="bs-example bs-example-form" role="form">
              <div class="row">
                  <div class="col-md-8 col-md-push-3 search-game-btn">
                      <span class="label label-default">游戏语言</span>
                      <button type="button" class="btn btn-default btn-sm">全部</button>
                      <button type="button" class="btn btn-info btn-sm">简体中文</button>
                      <button type="button" class="btn btn-default btn-sm">繁体中文</button>
                      <button type="button" class="btn btn-default btn-sm">英文</button>
                      <button type="button" class="btn btn-default btn-sm">日文</button>
                  </div>
              </div>
          </form>
          <form class="bs-example bs-example-form" role="form">
              <div class="row">
                  <div class="col-md-8 col-md-push-3 search-game-btn">
                      <span class="label label-default">游戏类型</span>
                      <button type="button" class="btn btn-default btn-sm">全部</button>
                      <button type="button" class="btn btn-info btn-sm">RPG</button>
                      <button type="button" class="btn btn-info btn-sm">动作&冒险</button>
                      <button type="button" class="btn btn-default btn-sm">运动&模拟</button>
                      <button type="button" class="btn btn-default btn-sm">射击</button>
                      <button type="button" class="btn btn-default btn-sm">策略</button>
                      <button type="button" class="btn btn-default btn-sm">其他</button>
                  </div>
              </div>
          </form>
          <form role="form">
              <div class="row">
                  <div class="form-group col-md-2 col-md-push-3">
                      <label for="name">发布时间排序</label>
                      <select class="form-control">
                          <option>发布越早</option>
                          <option>发布越晚</option>
                      </select>
                  </div>
                  <div class="form-group col-md-2 col-md-push-3">
                      <label for="name">评分</label>
                      <select class="form-control">
                          <option>全部</option>
                          <option>5</option>
                          <option>4</option>
                          <option>3</option>
                          <option>2</option>
                          <option>1</option>
                      </select>
                  </div>
              </div>
          </form>
      </div>
      <div class="row">
          <div id="gamelist" class="col-md-8 col-md-push-2 gamelist">
              <div v-for="(game, idx) in gameList" :key="game.id" class="media every-game">
                  <router-link class="media-left pull-left" :to="{ name: 'game-detail', params: { id: game.id } }">
                    <img class="media-object" :src="game.gameImgUrl">
                  </router-link>
                  <div class="media-body">
                      <h4 class="media-heading">{{ game.title }}</h4>
                      <star-rating :show-rating="false" :increment="0.5" :rating="game.star" :item-size="30" :read-only="true"></star-rating>
                      <div class="text-muted">
                          {{ game.intro }}
                      </div>
                      <div class="game-list-attr">
                          <p>
                              <span><b>系列：</b>{{ game.serialName }}</span>
                              <span><b>开发商：</b>{{ game.developer }}</span>
                          </p>
                          <p>
                              <span><b>发售：</b>{{ game.publicDate }}</span>
                              <span><b>类型：</b>
                              	<template v-if="!isEmptyObject(game.type)" v-for="gameType in game.type">
                              		{{ gameType }}&nbsp;&nbsp;
                              	</template>
                              </span>
                          </p>
                      </div>
                  </div>
              </div>
              <ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
              </ul>
          </div>
      </div>
  </div>
</template>
<script>
	import { getGameList } from '@/api/game.js'
	import { StarRating } from 'vue-rate-it'

	export default {
		name: 'ps-gameList',

		data () {
			return {
				gameList: []
			}
		},

		components: {
			StarRating
		},

		created () {
			getGameList(this.API_URL + '/gameList', []).then((res => {
				console.log(res)
				this.gameList = res
			}))
		}
	}
</script>
<style>
	@import '../assets/css/gameList.css';
</style>