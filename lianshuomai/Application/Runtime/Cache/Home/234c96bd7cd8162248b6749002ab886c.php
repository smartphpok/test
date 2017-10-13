<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>首页</title>
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/home.css" />
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/login.css" />
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/reset.css"/>
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/nav.css"/>
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/nav.css"/>
  <script src="/lianshuomai/Public/jquery/jquery-1.11.3.js"></script>
 </head>
 <body>
  <!-- header -->
  <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="../css/nav.css"/>
	</head>
	<body>
		<div id="navv">
			<div class="leftnav" id="leftone">连锁卖官网</div>
			<?php if($_SESSION['username']): ?><div class="leftnav"><?php echo ($_SESSION['username']); ?>&nbsp;&nbsp;的连锁卖</div>
			<?php else: ?>
				<div class="leftnav">您好!&nbsp;&nbsp;欢迎来到连锁卖</div><?php endif; ?>
			<div class="rightnav" id="rightone">
				<?php if($_SESSION['username']): ?><a href="/lianshuomai/index.php/Home/Login/loginout" style="width: 150px;">退出账号</a>				
				<?php else: ?>
					<a href="/lianshuomai/index.php/Home/Login/login">登陆</a><div id="shu">&nbsp;|&nbsp;</div><a href="/lianshuomai/index.php/Home/User/user">注册</a><?php endif; ?>
			</div>
			<div class="rightnav">
				<a href="#">下载APP</a>
			</div>
			<div class="rightnav" id="lastone">
				<a href="#">收藏连锁卖</a>
			</div>
		</div>
	</body>
</html>

  <!---->
  <div id="header" class="clear">
	   <div class="lf">
	       <img src="/lianshuomai/Public/Home/images/ls_logonew.png" alt=""/>
	       <span style="color: #3094EC;">个人中心</span>
	   </div>
	   <div class="ri_logo">
		   <ul>
		     <li><b></b>即买即卖</li>
		     <li><b></b>优质供货</li>
		     <li><b></b>最惠采购</li>
		   </ul>
	   </div>
  </div>
  <!-- section -->
  <div id="section" class="clear">
  	<div class="left">
  		<div class="left-one">
  			<h3><i></i><a href="javascript:;" target="show" style="color: #3094EC;">个人中心</a></h3>
	  		<ul>
	  			<li><a href="#" target="show">管理发货地址</a></li>
	  			<li><a href="#" class='col' target="show">我的收藏夹</a></li>
	  			<li><a href="#" target="show">我的代金券</a></li>
	  		</ul>
  		</div>
  		<div class="left-two">
  			<h3><i></i><a href="###" target="show" style="color: #3094EC;">必备工具</a></h3>
	  		<ul>
	  			<li><a href="#" target="show">手机APP</a></li>
	  			<li><a href="#" target="show">主题换肤</a></li>
	  			<li><a href="#" target="show">我要定制</a></li>
	  		</ul>
  		</div>
  		<div class='left-three'>
  			<h3><i></i><a href="###" target="show" style="color: #3094EC;">账号管理</a></h3>
	  		<ul>
	  			<li><a href="#" target="show">个人资料</a></li>
	  			<li><a href="#" target="show">密码修改</a></li>
	  			<li><a href="#" target="show">支付设置</a></li>
	  			<li><a href="/lianshuomai/index.php/Home/Index/index" style="color: #F22E00;">返回首页</a></li>
	  		</ul>
  		</div>
  	</div>
  	<div class="right">
  		<div>
  		  <iframe name="show" src="/lianshuomai/index.php/Home/Cart/cart" id="show"></iframe>
  		</div>
  	</div>
  </div>
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
 </body>
</html>