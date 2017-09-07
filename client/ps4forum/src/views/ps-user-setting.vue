<template>
  <div>
	  <div class="col-md-10 col-md-push-2">
	      <div class="user-setting-bg">
	          <button type="button" class="btn btn-success">浅色背景</button>
	          <button type="button" class="btn btn-primary">深色背景</button>
	      </div>
	  </div>
	  <div class="col-md-8 col-md-push-2" id="grid-wrap">
	      <div class="filtr-item" data-category="2">
	          <img class="filtr-item-active img-rounded" src="../assets/images/bg/bg1.jpg">
	      </div>
	      <div class="filtr-item" data-category="1">
	          <img src="../assets/images/bg/bg2.jpg" class="img-rounded">
	      </div>
	      <div class="filtr-item" data-category="2">
	          <img src="../assets/images/bg/bg3.jpg" class="img-rounded">
	      </div>
	      <div class="filtr-item" data-category="1">
	          <img src="../assets/images/bg/bg4.jpg" class="img-rounded">
	      </div>
	      <div class="filtr-item" data-category="2">
	          <img src="../assets/images/bg/bg5.jpg" class="img-rounded">
	      </div>
	      <div class="filtr-item" data-category="3">
	          <img src="../assets/images/bg/bg6.jpg" class="img-rounded">
	      </div>
	      <div class="filtr-item" data-category="3">
	          <img src="../assets/images/bg/bg7.jpg" class="img-rounded">
	      </div>
	      <div class="filtr-item" data-category="1">
	          <img src="../assets/images/bg/bg8.jpg" class="img-rounded">
	      </div>
	      <div class="filtr-item" data-category="3">
	          <img src="../assets/images/bg/bg9.jpg" class="img-rounded">
	      </div>
	  </div>
	  <div class="col-md-8 col-md-push-2">
	      <div class="form-group">
	          <div class="col-md-12">
	              <textarea placeholder="介绍下自己吧..." class="form-control" rows="4"></textarea>
	          </div>
	      </div>
	      <div class="form-group">
	          <label for="" class="col-md-2 control-label"></label>
	          <div class="col-md-12" style="margin-top: 5px;">
	              <button type="submit" class="btn btn-default">保存</button>
	          </div>
	      </div>
	  </div>
  </div>
</template>
<script>
	import '../assets/js/jquery.filterizr.js'

	export default {
		name: 'ps-user-setting',

		mounted () {
			$('#grid-wrap').filterizr()
		}
	}
</script>
<style>
	@import '../assets/css/userSetting.css';
</style>