<template>
	<div class="col-md-10 col-md-push-1">
	    <aside class="col-md-3">
	        <ul id="user-msg-ulist" class="list-group">
	        		<li class="list-group-item">
	        			<a @click="showMsgInput" class="btn btn-info">给ta留言</a>
	        		</li>
	            <li v-if="userMsgList.length > 0" v-for="(user, idx) in userMsgList" class="list-group-item">
	                <span class="badge">{{ user.countNewMsg }}</span>
	                <router-link to="#">{{ user.uName }}</router-link>
	            </li>
	        </ul>
	    </aside>
	    <div v-if="!isEmptyObject(userMsg.msg)" id="user-msg-list" class="col-md-9 user-msg">
	    	<template v-if="userMsg.msg.msgs" v-for="(msg, idx) in userMsg.msg.msgs">
	        <div v-if="msg.isMine == 1" class="user-msg-dialog-left">
	            <div class="user-msg-dialog-left-face">
	                <div>
	                    <router-link to="#">
	                        <img width="48px" height="48" :src="userMsg.uImgUrl" alt="">
	                    </router-link>
	                </div>
	            </div>
	            <div class="ang"></div>
	            <div class="ang2"></div>
	            <div class="user-msg-dialog-left-cont">
	                {{ msg.content }}
	            </div>
	        </div>
	        <div v-else class="user-msg-dialog-right">
	            <div class="user-msg-dialog-right-me">
	                {{ msg.content }}
	            </div>
	            <div class="ang3"></div>
	            <div class="ang4"></div>
	            <div class="user-msg-dialog-right-face">
	                <div>
	                    <router-link to="#">
	                        <img width="48" height="48" :src="userMsg.msg.toUser.uImgUrl" alt="">
	                    </router-link>
	                </div>
	            </div>
	        </div>
	     	</template>
	    </div>
	    <div id="msg-input" class="form-group col-md-9 user-msg hidden">
			    <textarea class="form-control" rows="5"></textarea>
			    <input class="btn btn-default" type="button" value="留言">
			 </div>
	</div>
</template>
<script>
  import { getUserMsg, getUserMsgList } from '@/api/user.js'
	export default {
		name: 'ps-user-center-msg',

		data () {
			return {
				userMsgList: [],
				userMsg: []
			}
		},

		methods: {
			showMsgInput: function(){
				$('#user-msg-list').addClass('hidden')
				$('#msg-input').removeClass('hidden')
			}
		},

		created () {
			getUserMsgList(this.API_URL + '/userMsgList').then((res => {
				console.log(res)
				this.userMsgList = res
			}))

			getUserMsg(this.API_URL + '/userMsg').then((res => {
				console.log(res)
				this.userMsg = res
			}))
		}
	}
</script>
<style>
	@import '../../assets/css/userMsg.css';
</style>