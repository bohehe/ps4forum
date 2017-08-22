<template>
  <nav id="navigator" class="navbar navbar-default" role="navigation">
    <div class="container" style="padding: 0 60px;">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">logo图</a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="newsList.html">新闻</a></li>
                <li class="dropdown">
                    <a href="postsList.html" class="dropdown-toggle" data-toggle="dropdown">论坛<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="postsList.html?type=-1">全部</a></li>
                        <li><a href="postsList.html?type=1">攻略</a></li>
                        <li><a href="postsList.html?type=2">吐槽</a></li>
                        <li><a href="postsList.html?type=3">心得</a></li>
                    </ul>
                </li>
                <li><a href="gameList.html">游戏</a></li>
                <li><a href="tradeList.html">买卖</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search" style="margin-left: 30px;">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="站内搜索...">
                </div>
                <button type="submit" class="btn btn-info">搜索</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <div class="hidden">
                    <img width="34px" height="34px" class="ava" src="../../assets/images/avator.png" alt="">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            我的 <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="userFollow.html">关注<span class="badge pull-right">2</span></a></li>
                            <li><a href="userReply.html">回复<span class="badge pull-right">4</span></a></li>
                            <li><a href="userMsg.html">留言<span class="badge pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="userCollection.html">收藏</a></li>
                            <li><a href="userSetting.html">设置</a></li>
                        </ul>
                    </li>
                </div>
                <li class="head-login-btn">
                    <button class="btn btn-info btn-md" data-toggle="modal" data-target="#login-form">登录&nbsp;|&nbsp;注册</button>
                </li>
            </ul>
        </div>
    </div>
  </nav>
</template>
<script>
  export default {
    name: 'ps-nav'
  }
</script>