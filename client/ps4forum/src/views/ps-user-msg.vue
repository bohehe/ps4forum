<template>
	<div class="col-md-10 col-md-push-1">
	    <aside class="col-md-3">
	        <ul id="user-msg-ulist" class="list-group">
	            <li v-if="userMsgList.length > 0" v-for="(user, idx) in userMsgList" class="list-group-item">
	                <span class="badge">{{ user.countNewMsg }}</span>
	                <router-link to="#">{{ user.uName }}</router-link>
	            </li>
	        </ul>
	    </aside>
	    <div v-if="!isEmptyObject(userMsg.msg)" id="user-msg-list" class="col-md-9 user-msg">
	    
	        <div class="user-msg-dialog-left">
	            <div class="user-msg-dialog-left-face">
	                <div>
	                    <a href="#">
	                        <img width="48px" height="48" src="../assets/images/avator.png" alt="">
	                    </a>
	                </div>
	            </div>
	            <div class="ang"></div>
	            <div class="ang2"></div>
	            <div class="user-msg-dialog-left-cont">
	                你好啊
	            </div>
	        </div>
	        <div class="user-msg-dialog-right">
	            <div class="user-msg-dialog-right-me">
	                我不好
	            </div>
	            <div class="ang3"></div>
	            <div class="ang4"></div>
	            <div class="user-msg-dialog-right-face">
	                <div>
	                    <a href="">
	                        <img width="48" height="48" src="../assets/images/biggerhacker.jpg" alt="">
	                    </a>
	                </div>
	            </div>
	        </div>
	     
	    </div>
	</div>
</template>
<script>
	import { getUserMsg, getUserMsgList } from '@/api/user.js'

	export default {
		name: 'ps-user-msg',

		data () {
			return {
				userMsgList: [],
				userMsg: []
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
	@import '../assets/css/userGlobal.css';
	@import '../assets/css/userMsg.css';
</style>