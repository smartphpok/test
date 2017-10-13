<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>首页</title>
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/home.css" />
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/login.css" />
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/reset.css"/>
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/nav.css"/>
  <script src="/lianshuomai/Public/jquery/jquery-1.11.3.js"></script>
  <style>
			#m{
				width:1000px;
				height: 500px;
				margin:0 auto;
			}
			#left{
				float:left;
				margin-right: 100px;
			}
			#right table{
				text-align: center;
			}
			#buy{
				float: left;
				margin-right: 50px;
				width: 80px;
				height: 30px;
				
				text-align: center;
				line-height: 30px;
			}
			#buybox{
				float: right;
				margin-right: 220px;
				width: 90px;
				height: 30px;
				/*background-color: yellow;*/
				text-align: center;
				line-height: 30px;
			}
			#top{
				height: 100px;
				line-height: 160px;
				
			}
		</style>
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

  <!--<div id="header">
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
</div>-->
  <div id="header" class="clear">
	   <div class="lf">
	       <img src="/lianshuomai/Public/Home/images/ls_logonew.png" alt=""/>
	       <span style="color: #3094EC;">商品详情</span>
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
  <div id="m">
			<div id="top">
				
				<a href="/lianshuomai/index.php/Home/Index/index">首页</a> |
				<a href="/lianshuomai/index.php/Home/Spxx/splb">商品列表页</a> |
				<?php if($_SESSION['username']): ?><a href="/lianshuomai/index.php/Home/Personal/index">个人中心</a>
				<?php else: ?>
				<a href="/lianshuomai/index.php/Home/Login/login">账号登陆</a><?php endif; ?>
			</div>
		<div id="left">
			<img src="/lianshuomai/Public/<?php echo ($arr["pic"]); ?>"/>
		</div>
		<div id="right">
			<h1 style="color:blue;"><?php echo ($arr["spname"]); ?></h1><br />
			<table border="0" cellspacing="" cellpadding="">
				<tr>
					<td>商品型号&nbsp;：&nbsp;&nbsp;</td>
					<td>套装裙</td>
				</tr>
				<tr>
					<td>商品单价&nbsp;：&nbsp;&nbsp;</td>
					<td>￥<?php echo ($arr["price"]); ?></td>
				</tr>
			</table>
			<br /><br />
			<div id="buy">
				<input type="button" name="" id="shou" value="立即购买" />
			</div>
			<div id="buybox">
				<input type="button" name="" id="buu" value="加入购物车" />
			</div>
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
	<input type="hidden" name="hid" id="hid" value="<?php echo ($arr["pid"]); ?>" />
	<script type="text/javascript">
		var ob = document.getElementById('hid');
		var idd = ob.value;
		$(function(){
		$('#buu').click(function(){
			$.ajax({
				"url":"/lianshuomai/index.php/Home/Cart/check",
				"type":"post",
				"data":"pid="+idd,
				"success":function(re){
					if(re=='ok'){
						alert('加入购物车成功');
					}else{
						alert('请先登陆您的账号');
					}
				}
			});
		});
		});
	</script>
 </body>
</html>