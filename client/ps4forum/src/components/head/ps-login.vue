<template>
  <div class="modal fade" id="login-form" tabindex="-1" role="dialog" aria-labelledby="login-form-title" aria-hidden="true">
      <div class="modal-dialog" style="max-width: 400px;">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                  </button>
                  <h4 class="modal-title text-center" id="login-form-title">
                      登录
                  </h4>
              </div>
              <div class="modal-body">
                  <form class="form-horizontal" role="form">
                      <div class="form-group">
                          <label for="firstname" class="col-md-3 control-label">邮箱</label>
                          <div class="col-md-9">
                              <input type="text" class="form-control" id="firstname" placeholder="请输入邮箱">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="lastname" class="col-md-3 control-label">密码</label>
                          <div class="col-md-9">
                              <input type="password" class="form-control" id="lastname" placeholder="请输入密码">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="lastname" class="col-md-3 control-label">拖动验证</label>
                          <div class="col-md-9">
                              <div id="vcode-login" class="slider"></div>
                              <!-- <div class="result">验证结果：<span id="result1"></span></div> -->
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-offset-3 col-md-9">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox">请记住我
                                  </label>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn btn-default">登录</button>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-offset-3 col-md-9">
                              还没有账号？<a id="to-register" href="javascript:;">立即注册</a>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal -->
  </div>
</template>
<script>
  export default {
    name: 'ps-login'
  }
</script>