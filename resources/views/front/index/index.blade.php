@extends('front.layouts.main')

@section('content')
<div class="main layui-clear">
  <div class="wrap">
    <div class="content">
      <div class="fly-tab fly-tab-index">
        <span>
          <a href="jie/index.html">全部</a>
          <a href="jie/index.html">未结帖</a>
          <a href="jie/index.html">已采纳</a>
          <a href="jie/index.html">精帖</a>
          <a href="user/index.html">我的帖</a>
        </span>
        <form action="http://cn.bing.com/search" class="fly-search">
          <i class="iconfont icon-sousuo"></i>
          <input class="layui-input" autocomplete="off" placeholder="搜索内容，回车跳转" type="text" name="q">
        </form>
        <a href="{{url('question/create')}}" class="layui-btn jie-add">发布问题</a>
      </div>
      
      
      <ul class="fly-list fly-list-top">
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">基于 layui的轻量级问答社区页面模版 V2版本</a>
            <span class="fly-tip-stick">置顶</span>
            <span class="fly-tip-jing">精帖</span>
          </h2>
          <p>
            <span><a href="user/home.html">贤心</a></span>
            <span>刚刚</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 317
              <i class="iconfont" title="人气">&#xe60b;</i> 6830
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/00.jpg')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">基于 layui的轻量级问答社区页面模版 V2版本</a>
            <span class="fly-tip-stick">置顶</span>
          </h2>
          <p>
            <span><a href="user/home.html">纸飞机</a></span>
            <span>30分钟前</span>
            <span>技术闲谈</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 502
              <i class="iconfont" title="人气">&#xe60b;</i> 81689
            </span>
          </p>
        </li>
      </ul>
      
      <ul class="fly-list">
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="{{asset('front/images/avatar/default.png')}}" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="jie/detail.html">关于layui 引用其他插件，扩展模块 的用法</a>
          </h2>
          <p>
            <span><a href="user/home.html">用户昵称</a></span>
            <span>1小时前</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint"> 
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
      </ul>
      
      <div style="text-align: center">
        <div class="laypage-main">
          <a href="jie/index.html" class="laypage-next">更多求解</a>
        </div>
      </div>
      
    </div>
  </div>
  
  <div class="edge">
    <div class="fly-panel leifeng-rank"> 
      <h3 class="fly-panel-title">近一月回答榜 - TOP 12</h3>
      <dl>
        <dd>
          <a href="user/home.html">
            <img src="{{asset('front/images/avatar/default.png')}}">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="{{asset('front/images/avatar/default.png')}}">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="{{asset('front/images/avatar/default.png')}}">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="{{asset('front/images/avatar/default.png')}}">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="{{asset('front/images/avatar/default.png')}}">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="{{asset('front/images/avatar/default.png')}}">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="{{asset('front/images/avatar/default.png')}}">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="{{asset('front/images/avatar/default.png')}}">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="{{asset('front/images/avatar/default.png')}}">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="{{asset('front/images/avatar/default.png')}}">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="{{asset('front/images/avatar/default.png')}}">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="{{asset('front/images/avatar/default.png')}}">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
      </dl>
    </div>
    
    <dl class="fly-panel fly-list-one"> 
      <dt class="fly-panel-title">最近热帖</dt>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
        <span><i class="iconfont">&#xe60b;</i> 6087</span>
      </dd>
      <dd>
        <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
        <span><i class="iconfont">&#xe60b;</i> 767</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
        <span><i class="iconfont">&#xe60b;</i> 6087</span>
      </dd>
      <dd>
        <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
        <span><i class="iconfont">&#xe60b;</i> 767</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
        <span><i class="iconfont">&#xe60b;</i> 6087</span>
      </dd>
      <dd>
        <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
        <span><i class="iconfont">&#xe60b;</i> 767</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
        <span><i class="iconfont">&#xe60b;</i> 6087</span>
      </dd>
      <dd>
        <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
        <span><i class="iconfont">&#xe60b;</i> 767</span>
      </dd>
    </dl>
    
    <dl class="fly-panel fly-list-one"> 
      <dt class="fly-panel-title">近期热议</dt>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
    </dl>
    
    <div class="fly-panel fly-link"> 
      <h3 class="fly-panel-title">友情链接</h3>
      <dl>
        <dd>
          <a href="http://www.layui.com/" target="_blank">layui</a>
        </dd>
        <dd>
          <a href="http://layim.layui.com/" target="_blank">LayIM</a>
        </dd>
        <dd>
          <a href="http://layer.layui.com/" target="_blank">layer</a>
        </dd>
      </dl>
    </div>


  </div>
</div>
@endsection