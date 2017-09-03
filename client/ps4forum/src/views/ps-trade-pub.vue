<template>
  <div class="container" id="main-body" style="background-color: #fff;max-width: 970px;">
      <div class="row trade-public-form">
          <div class="trade-public-warning">
              产品属性选项必须认真填写<br>
              产品图必须是自行拍摄产品的真实图片
          </div>
          <form role="form" class="form-horizontal">
              <div class="form-group">
                  <label for="name" class="col-md-2 control-label">游戏名字</label>
                  <div class="col-md-4">
                      <input name="name" type="text" class="form-control" placeholder="请输入完整游戏名字 OR 数码产品名">
                  </div>
              </div>
              <div class="form-group">
                  <label for="qq" class="col-md-2 control-label">QQ</label>
                  <div class="col-md-4">
                      <input name="qq" type="text" class="form-control" placeholder="请输入QQ号">
                  </div>
              </div>
              <div class="form-group">
                  <label for="wechat" class="col-md-2 control-label">微信</label>
                  <div class="col-md-4">
                      <input name="wechat" type="text" class="form-control" placeholder="请输入微信号">
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-md-2 control-label">交易分类</label>
                  <div class="col-md-4">
                      <select class="form-control">
                          <option>请选择交易分类</option>
                          <option>游戏</option>
                          <option>游戏机</option>
                          <option>数码产品</option>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-md-2 control-label">交易类型</label>
                  <div class="col-md-4">
                      <select class="form-control">
                          <option>请选择交易类型</option>
                          <option>出售</option>
                          <option>求购</option>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-md-2 control-label">交易方式</label>
                  <div class="col-md-4">
                      <select class="form-control">
                          <option>请选择交易方式</option>
                          <option>包邮</option>
                          <option>不包邮</option>
                          <option>当面付</option> 
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-md-2 control-label">版本</label>
                  <div class="col-md-4">
                      <select class="form-control">
                          <option>请选择版本</option>
                          <option>港版</option>
                          <option>日版</option>
                          <option>美版</option>
                          <option>国行</option>
                          <option>欧版</option>
                          <option>韩版</option>
                          <option>台版</option>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-md-2 control-label">语言</label>
                  <div class="col-md-4">
                      <select class="form-control">
                          <option>请选择语言</option>
                          <option>简体中文</option>
                          <option>繁体中文</option>
                          <option>英语</option>
                          <option>日语</option>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-md-2 control-label">地区</label>
                  <div class="col-md-4">
                      <select class="form-control">
                          <option>请选择地区</option>
                          <option>上海</option>
                          <option>北京</option>
                          <option>河南</option>
                          <option>安徽</option>
                          <option>...</option>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-md-2 control-label">上传图片</label>
                  <div class="col-md-10">
                      <button type="button" class="btn btn-default btn-sm">
                          <input type="hidden" name="imgs[]">
                          <span class="glyphicon glyphicon-picture"></span> Picture
                      </button>
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-md-2 control-label">简介</label>
                  <div class="col-md-10">
                      <textarea placeholder="介绍下要交易的物品吧..." class="form-control" rows="6"></textarea>
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-md-2 control-label"></label>
                  <div class="col-md-10">
                      <button type="submit" class="btn btn-default">提交</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</template>
<script>
export default{
	name: 'trade-pub'
}
</script>
<style>
	@import '../assets/css/tradePublic.css';
</style>