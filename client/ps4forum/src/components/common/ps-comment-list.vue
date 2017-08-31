<template>
  <ul class="media-list" style="padding: 30px 10px;">

      <li v-for="(comment, idx) in commentList" class="media">
          <div class="media-left">
              <router-link to="#">
                <img class="media-object img-circle" :src="comment.uImgUrl">
              </router-link>
          </div>
          <div class="media-body">
              <h4 class="media-heading">
                <router-link to="#">{{ comment.uName }}</router-link>
              </h4>
              <p>{{ comment.commentContent }}</p>
              <div class="ds-comment-footer">
                  <span class="ds-time">{{ comment.Date }}</span>&nbsp;
                  <a>
                      <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 回复
                  </a>
              </div>
              <hr/>
              <ul v-if="comment.reply.length > 0" class="media-list">
                  <li v-for="(reply, idx) in comment.reply" class="media">
                      <div class="media-left">
                          <router-link to="#">
                              <img class="media-object img-circle" :src="reply.uImgUrl">
                          </router-link>
                      </div>
                      <div class="media-body">
                          <h4 class="media-heading">
                            <router-link to="#">{{ reply.uName }}</router-link>
                            <router-link v-if="!isEmptyObject(reply.replyTo)" to="#">
                              @{{ reply.replyTo.replyToUname }}
                            </router-link>
                          </h4>
                          <p>{{ reply.commentContent }}</p>
                          <div class="ds-comment-footer">
                              <span class="ds-time">{{ reply.Date }}</span>&nbsp;
                              <a>
                                  <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 回复
                              </a>
                          </div>
                      </div>
                  </li>
                  <hr/>
              </ul>
          </div>
      </li>
      <hr/>

  </ul>
</template>
<script>
  import { getCommentList } from '@/api/common.js'

  export default {
    name: 'ps-comment-list',

    data() {
      return {
        commentList: []
      }
    },

    created() {
      getCommentList(this.API_URL + '/commentList', []).then(( res => {
        console.log(res)
        this.commentList = res
      } ))
    }
  }
</script>