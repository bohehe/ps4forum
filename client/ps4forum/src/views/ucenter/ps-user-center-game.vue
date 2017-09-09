<template>
	<div class="col-md-10 col-md-push-1 user-posts">
    <div class="list-group-item">
      <div class="row" style="padding: 10px 15px;">
        <div class="pull-left col-md-2">
          <router-link to="#">
            <img width="90" height="50" src="../../assets/images/b1.jpg">
          </router-link>
        </div>
        <div class="pull-left col-md-3 u-game-title">
          <router-link to="#">血源诅咒</router-link><br>
          <span>2周前</span>
        </div>
        <div class="col-md-2 pull-right u-game-info">
          <p class="posts-lists-right text-center">
            <a href="#"><span>麻烦</span></a>
          </p>
          <p class="posts-lists-right text-center">
            <span>21.62%完美</span>
          </p>
        </div>
        <div width="16%" class="pd10">
          <div class="progress">
            <div class="progress-len" style="width:42%">42%</div>
          </div>
          <small class="h-p">
            <span class="text-platinum">白0</span>
            <span class="text-gold">金1</span>
            <span class="text-silver">银6</span>
            <span class="text-bronze">铜17</span>
          </small>
        </div>
      </div>
    </div>
    <div class="list-group-item">
      <div class="row" style="padding: 10px 15px;">
        <div class="pull-left col-md-2">
          <router-link to="#">
            <img width="90" height="50" src="../../assets/images/b1.jpg">
          </router-link>
        </div>
        <div class="pull-left col-md-3 u-game-title">
          <router-link to="#">血源诅咒</router-link><br>
          <span>2周前</span>
        </div>
        <div class="col-md-2 pull-right u-game-info">
          <p class="posts-lists-right text-center">
            <a href="#"><span>麻烦</span></a>
          </p>
          <p class="posts-lists-right text-center">
            <span>21.62%完美</span>
          </p>
        </div>
        <div width="16%" class="pd10">
          <div class="progress">
            <div class="progress-len" style="width:42%">42%</div>
          </div>
          <small class="h-p">
            <span class="text-platinum">白0</span>
            <span class="text-gold">金1</span>
            <span class="text-silver">银6</span>
            <span class="text-bronze">铜17</span>
          </small>
        </div>
      </div>
    </div>
	</div>
</template>
<script>
	export default {
		name: 'ps-user-center-game'
	}
</script>
<style>
  .user-posts .list-group-item {
    border: none;
  }
  .u-game-title {
    padding: 5px 0;
  }
  .progress-len {
    background-color: #faa732;
    color: #fff;
  }
</style>