<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Laravel 问答社区</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="keywords" content="Laravel 问答社区">
  <meta name="description" content="Laravel问答社区致力于Laravel生态">
  <link rel="stylesheet" href="{{asset('front/layui/css/layui.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/global.css')}}">
</head>
<body>

<div class="header">
  <div class="main">
    <a class="logo" href="/" title="Fly">Laravel问答社区</a>
    
    <div class="nav-user">
      <!-- 未登入状态 -->
      <a class="unlogin" href="user/login.html"><i class="iconfont icon-touxiang"></i></a>
      <span><a href="user/login.html">登入</a><a href="user/reg.html">注册</a></span>
      <!-- <p class="out-login">
        <a href="" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-qq" title="QQ登入"></a>
        <a href="" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-weibo" title="微博登入"></a>
      </p> -->   
      
      <!-- 登入后的状态 -->
      <!-- 
      <a class="avatar" href="user/index.html">
        <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0">
        <cite>贤心</cite>
        <i>VIP2</i>
      </a>
      <div class="nav">
        <a href="/user/set/"><i class="iconfont icon-shezhi"></i>设置</a>
        <a href="/user/logout/"><i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;"></i>退了</a>
      </div> -->
      
    </div>
  </div>
</div>

@yield('content')

<div class="footer">
  <p><a href="/">Laravel 问答社区</a> 2017 &copy; <a href="http://www.layui.com/">layui.com</a></p>
</div>
<script src="{{asset('front/layui/layui.js')}}"></script>
<script>
layui.cache.page = '';
layui.cache.user = {
  username: '游客'
  ,uid: -1
  ,avatar: '{{asset('front/images/avatar/00.jpg')}}'
  ,experience: 83
  ,sex: '男'
};
layui.config({
  version: "2.0.0"
  ,base: '{{asset('front/mods')}}/'
}).extend({
  fly: 'index'
}).use('fly');
</script>

</body>
</html>