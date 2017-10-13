<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			#main{
				width: 1000px;
				margin: 0 auto;
			}
			.one{
				width: 150px;
				height:200px;
				border: 1px solid #000000;
				text-align: center;
				float: left;
				margin:50px 50px;
			}
			#bot{
				display: block;
				width: 80px;
				height: 50px;
				background: yellow;
				text-align: center;
				line-height: 50px;
				margin: 0 auto;
			}
			#top{
				height: 100px;
				line-height: 160px;
				
			}
			#page{
				margin-top: 600px;
			}
			#goxx{
				background-color: #3094EC;
				width: 100px;
				height: 30px;
				margin: 0 auto;
				text-align: center;
				line-height: 30px;
			}
		</style>
		<link rel="stylesheet" href="/lianshuomai/Public/Home/css/login.css" />
		<link rel="stylesheet" href="/lianshuomai/Public/Home/css/home.css" />
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/buycar.css" />
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/reset.css"/>
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/nav.css"/>
	</head>
	<body>
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

<button></button>
<div id="header">
    <div class="add">
      <div class="lf">
        <a href="/lianshuomai/index.php/Home/Index/index">
          <img src="/lianshuomai/Public/Home/images/ls_logonew.png" alt=""/>
        </a>
        <span style="color: #3094EC;">商品列表</span>
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
  <!-- section -->
  <div id="section">
    <div>
      <div class='sec_top'>
        <ul>
          <li><a href="/lianshuomai/index.php/Home/Index/index">首页</a>&nbsp; </li>
          <li>&nbsp;>
          	<?php if($_SESSION['username']): ?><a href="/lianshuomai/index.php/Home/Personal/index">&nbsp;&nbsp;个人中心</a>
          	<?php else: ?>
				<a href="/lianshuomai/index.php/Home/Login/login">账号登陆</a><?php endif; ?>
          	&nbsp;</li>
        </ul>
      </div>
      <div class="sec_middle" id='plist'>
        <ul>
          <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
              <img src="/lianshuomai/Public/<?php echo ($v["pic"]); ?>"/>
              <h4><?php echo (mb_substr($v["spname"],0,15)); ?></h4>
              <h3>￥<?php echo ($v["price"]); ?></h3>
              <a href="#" class='addcart'><img src="/lianshuomai/Public/Home/images/rexiao.jpg"/></a>             
              <div id="goxx">
              	<a href="/lianshuomai/index.php/Home/Spxx/spxx/pid/<?php echo ($v["pid"]); ?>" style="color:#fff;">商品详情</a>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ol class="pager">
          <?php echo ($pageStr); ?>
        </ol>
      </div>
    </div>
  </div>
  <div class="zhe">
    <div></div>
    <div>
      <h2></h2>
      <span>&times;</span>
    </div>
  </div>
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
	</body>
	<script src="/lianshuomai/Public/Home/js/jquery-1.11.3.js"></script>
	<script src="/lianshuomai/Public/Home/js/all.js"></script>
 	<script src="/lianshuomai/Public/Home/js/buycar.js"></script>
</html>