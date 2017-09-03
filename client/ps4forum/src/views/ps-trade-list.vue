<template>
    <div class="container" id="main-body" style="background-color: #fff;max-width: 970px;">
        <div class="row">
            <form class="bs-example bs-example-form" role="form" style="margin-top: 35px;">
                <div class="col-md-10 col-md-push-1">
                    <div class="input-group" style="float: left;">
                        <select class="form-control">
                            <option>全部</option>
                            <option>游戏</option>
                            <option>游戏机</option>
                            <option>数码产品</option>
                        </select>
                    </div>
                    <div class="input-group" style="float: left;">
                        <select class="form-control">
                            <option>全部</option>
                            <option>出售</option>
                            <option>求购</option>
                        </select>
                    </div>
                    <div class="input-group" style="float: left;">
                        <select class="form-control">
                            <option>全部</option>
                            <option>中文</option>
                            <option>繁中</option>
                            <option>英语</option>
                            <option>日文</option>
                        </select>
                    </div>
                    <div class="input-group" style="float: left;">
                        <select class="form-control">
                            <option>全部</option>
                            <option>上海</option>
                            <option>北京</option>
                            <option>深圳</option>
                            <option>广州</option>
                        </select>
                    </div>
                    <div class="input-group" style="float: left;">
                        <select class="form-control">
                            <option>全部</option>
                            <option>最新</option>
                            <option>价格最高</option>
                            <option>价格最低</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="支持模糊搜索...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">搜索</button>
                            <router-link to="/trade/pub" class="btn btn-success">发布</router-link>
                        </span>
                    </div>
                </div>
            </form>
            <div class="col-md-12 posts-lists" style="margin-top: 30px;">
                <div class="list-group-item">
                    <h4 class="list-group-item-heading">
                        <span class="label label-primary">置顶</span>
                        <span>
                            <a style="color: #b94a48;font-size: 16px;" href="#">禁止发布一切租赁/数字帐号交易帖，发交易的同学请上传「真实产品图片」，否则可能会被关闭</a>
                        </span>
                    </h4>
                </div>
                <div class="list-group-item">
                    <h4 class="list-group-item-heading">
                        <span class="label label-primary">置顶</span>
                        <span>
                            <a style="color: #b94a48;font-size: 16px;" href="#">温馨提示：二手交易有风险。本站不担保任何交易的真实性，请玩家务必谨慎。尽量走闲鱼，不要先款/先货</a>
                        </span>
                    </h4>
                </div>
                <div v-for="(trade, idx) in tradeList" class="list-group-item">
                    <div class="row" style="padding: 10px 15px;">
                        <div class="col-md-9" style="padding: 0;margin: 0;">
                            <h4 class="list-group-item-heading">
                                <router-link :to="{ name: 'trade-detail', params: { id: trade.id } }">{{ trade.title }}</router-link>
                            </h4>
                            <p class="list-group-item-text">
                                {{ trade.content }}
                            </p>
                            <div v-on:mouseover="imgListHover" v-if="!isEmptyObject(trade.imgs)" class="clearfix img-gather thumbs">
                                <a v-for="tradeImg in trade.imgs" :href="tradeImg" v-bind:style="{ backgroundImage: 'url(' + tradeImg + ')' }"></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <p class="posts-lists-right">
                                <router-link to="#">
                                    <img width="34px" height="34px" class="ava" :src="trade.uImgUrl" alt="">
                                </router-link>
                                <router-link to="#">{{ trade.uName }}</router-link>
                            </p>
                            <p class="posts-lists-right">
                                <a href="javascript:;"><b>￥{{ trade.price }}</b></a>
                            </p>
                            <p class="posts-lists-right">
                                <span>&nbsp;{{ trade.Date }}</span>
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
	import { getTradeList } from '@/api/trade.js'
	import '@/assets/js/touchTouch.jquery.js'

	export default {
		name: 'ps-trade-list',

		data () {
			return {
				tradeList: []
			}
		},

		methods: {
			imgListHover () {
				$('.thumbs a').touchTouch()
			}
		},

		created () {
			getTradeList(this.API_URL + '/tradeList', []).then((res => {
				console.log(res)
				this.tradeList = res
			}))
		}
	}
</script>
<style>
	@import '../assets/css/tradeList.css';
	@import '../assets/css/touchTouch.css';
	@import '../assets/css/game-thumb-img.css';
</style>