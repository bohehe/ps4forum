<template>
    <div class="container">
        <ps-user-left></ps-user-left>
        <div class="col-md-9" style="background-color: #fff;">
            <div class="news-head page-header">
                <h2>{{ newsContent.title }}</h2>
            </div>
            <div class="text-content">
                {{ newsContent.content }}
            </div>
            <p class="content-head-info">
                <span>
                  <a href="javascript:;">赞（{{ newsContent.countZan }}）</a>
                </span>
                <span>
                  <a href="javascript:;">{{ newsContent.hasKept }}</a>
                </span>
                <span>
                  <a href="javascript:;">回复（{{ newsContent.countReply }}）</a>
                </span>
            </p>
            <div id="game-comment" class="col-md-12">
                <ps-comment-list></ps-comment-list>
                <ps-comment-emoji></ps-comment-emoji>
            </div>
        </div>
    </div>
</template>
<script>
  import { getNewsContent } from '@/api/news.js'
	import '@/assets/js/myemojiPl.js'
	import psCommentList from '@/components/common/ps-comment-list'
	import psCommentEmoji from '@/components/common/ps-comment-emoji'
	import psUserLeft from '@/components/common/ps-user-left'

	export default {
		name: 'ps-newsDetail',

		data () {
			return {
				userLeftInfo: []
			}
		},

		components: {
			psCommentList,
			psCommentEmoji,
			psUserLeft
		},

    data () {
      return {
        newsContent: []
      }
    },

    created () {
      getNewsContent(this.API_URL + '/newsContent', []).then((res => {
        console.log(res)
        this.newsContent = res
      }))
    }
	}

</script>
<style>
	@import '../assets/css/newsDetail.css';
	@import '../assets/css/comment.css';
	@import '../assets/css/myemojiPl.css';
</style>