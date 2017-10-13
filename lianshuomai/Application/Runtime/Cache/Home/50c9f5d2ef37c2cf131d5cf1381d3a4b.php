<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/reset.css"/>
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/home.css"/>
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/login.css"/>
</head>
<body>
<button></button>
<div id="header">
    <div class="add">
      <div class="lf">
        <a href="/lianshuomai/index.php/Home/Index/index">
          <img src="/lianshuomai/Public/Home/images/ls_logonew.png" alt=""/>
        </a>
        <span style="color: #3094EC;">用户登陆</span>
      </div>
      <div class="ri_logo">
        <ul>
          <li><b></b>即买即卖</li>
          <li><b></b>优质供货</li>
          <li><b></b>最惠采购</li>
        </ul>
      </div>
  </div>
</div>
<form action="/lianshuomai/index.php/Home/Login/check" method="post" id="formd">
<div id="main">
  <div id="login">
    <div class="header">
      <h3>登录连锁卖</h3>
      <a href="/lianshuomai/index.php/Home/User/user">新用户注册</a>
    </div>
    <div class="main">
      <div class="add">
        <div class="lf"></div>
        <input  id="login_d" name="lname" class="lf" type="text" autofocus placeholder="用户名/手机号/邮箱" />
      </div>
      <div>
        <div class="secoend  lf"></div>
        <input id="login_p" name="lpwd" type="password" placeholder="请输入密码" required/>
      </div><a href="#">忘记密码？</a>
    </div>
    <div>
        <div class=""></div>
        <input id="login_p" name="verify" type="text" required/>
        <img onclick="this.src='/lianshuomai/index.php/Home/Verify/show/s/'+Math.random();" src="/lianshuomai/index.php/Home/Verify/show"/>
      </div>
    <div class="last">
      <input id="remen" type="checkbox"/>
      <label for="remen">记住用户名</label>
    </div>
    <input type="button" id="btn" value="登陆" />
  </div>
</div>
</form>
<div class="footer">
	<style type="text/css">
	.link{
		margin: 20px 0;
		text-align: center;
	}
	.link a{
		font-size: 12px;
		font-size:12px;
   		color:#888888;
   		
	}
	.copy{
		margin: 10px 0 20px 0;
		font-size:12px;
   		color:#888888;
   		text-align: center;
	}
	#webCchart{
		background-color:#DEDEDE;
		margin: 0 0 10px 0;
		text-align: center;
		padding: 20px 0;
		border-top: solid 1px #000;
		border-bottom: solid 1px #000;
	}
	#webCchart img{
		margin: 0 40px;
	}
	#bm{
		margin-bottom: 30px;
		text-align: center;
	}
</style>
<div id="bottom">
<div id="webCchart">
	<img src="/lianshuomai/Public/Home/images/webCchart1.png"/>
	<img src="/lianshuomai/Public/Home/images/webCchart2.png"/>
	<img src="/lianshuomai/Public/Home/images/webCchart3.png"/>
	<img src="/lianshuomai/Public/Home/images/webCchart4.png"/>
</div>
<div class="link">
    <a href="#">关于我们</a> &nbsp;|
    <a href="#">&nbsp;超客招募</a> &nbsp;|
    <a href="#">&nbsp;隐私声明</a> &nbsp;|
    <a href="#">&nbsp;友情链接</a> &nbsp;|
    <a href="#">&nbsp;网站地图</a>
</div>
<div class="copy">
    川B2-20140015 蜀ICP备13008743号-7 | Copyright© 连锁卖（liansuomai.com）2013-2016，All Rights Reserved
</div>
<div id="bm">
  	<img src="/lianshuomai/Public/Home/zhifu.jpg"/>
</div>
</div>
</div>
<script src="/lianshuomai/Public/Home/js/jquery-1.11.3.js"></script>
<script>
  $('#btn').click(function(){
  	var data = $("#formd").serialize();
  	$.ajax({
  		type:"post",
  		url:"/lianshuomai/index.php/Home/Login/check",
  		data:data,
  		success:function(re){
  			if(re=='ok'){
  				alert('登陆成功');
  				window.location.href="/lianshuomai/index.php/Home/Index/index";
  			}else{
  				alert('登录失败');
  			}
  		}
  	});
  });
</script>
</body>
</html>