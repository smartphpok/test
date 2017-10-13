<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>后台主页面</title>
<link type="text/css" rel="stylesheet" href="/lianshuomai/Public/Admin/css/reset.css" media="all"/>
<link type="text/css" rel="stylesheet" href="/lianshuomai/Public/Admin/css/header.css" media="all"/>
<style>
     body,html{
	     height:100%;
     }
     body{
	       background:#0B4E9D url(/lianshuomai/Public/Admin/images/index.png) no-repeat left bottom;
     }
     #wrap{
     	 width:300px;
         padding-left:50px;
     }
     #wrap h3{
     	  position:relative;
	      line-height:28px;
     	  font:bold 14px/28px 微软雅黑;
     	  color:#fff;
     }
     #wrap h3 span{
     	  float:left;
	      width:29px;
     	  height:24px;
     	  background:url(/lianshuomai/Public/Admin/images/nav-tree-background.png);
          margin:4px 8px 0 0;
     }
     #wrap h3 span.new{
	       background-position:0 0;
     }
     #wrap h3 span.fen{
	        background-position:0 -25px;
     }
     #wrap h3 span.user{
	        background-position:0 -50px;
     }
    #wrap h3 span.client{
	      background-position:0 -75px;
     }
     #wrap h3 span.friend{
	      background-position:0 -100px;
     }
     #wrap h3 span.sys{
	     background-position:0 -125px;
     }
     #wrap ul{
	     padding-left:46px;
     }
     #wrap li{
	      line-height:26px;
     }
     #wrap li a{
	      color:#fff;
     }
     #wrap  h3 b{
     	  position:absolute;
     	  right:80px;
     	  top:12px;
	      width:9px;
     	  height:4px;
     	  background:url(/lianshuomai/Public/Admin/images/nav-tree-background.png)  0 -241px;
     }
     #wrap  h3 b.cur{
	      background-position:0 -264px;
     }
     .show{
     	
     	margin-left: 130px;
     	width: 1600px;
     	height: 870px;
     	background-color: lightblue;
     }
     .lfnav{
     	float: left;
     }
</style>
</head>
<body>
	<div class="header">
		<div id="header">
    <div class="logo">
    		<img src="/lianshuomai/Public/Home/images/ls_logonew.png" alt=""/>
        <div class="title">
        	<span style="color: #3094EC;">后台管理系统</span>
        </div>
    </div>
</div>
	</div>
    <div id="wrap">
    	<div class="lfnav">
          <h3><span class="new"></span>商品管理<b class="cur"></b></h3>
          <ul>
               <li><a href="/lianshuomai/index.php/Admin/Login/login" target="show">新品上架</a></li>
               <li><a href="listnews.php" target="mainFrame">商品列表</a></li>
               <li><a href="recyclelist.php" target="mainFrame">商品回收站</a></li>
          </ul>
          <h3><span class="fen"></span>店铺管理<b></b></h3>
          <ul>
               <li><a href="addType.html" target="mainFrame">发货管理</a></li>
               <li><a href="typelist.php" target="mainFrame">店铺状态管理</a></li>
          </ul>
          <h3><span class="user"></span>用户管理<b></b></h3>
          <ul>
               <li><a href="adminlist.php" target="mainFrame">用户资料</a></li>
               <li><a href="adminadd.html" target="mainFrame">用户权限</a></li>
               <li><a href="adminreset.php" target="mainFrame">重置密码</a></li>
          </ul>
          <h3><span class="sys"></span>系统管理<b></b></h3>
          <ul>
               <li><a href="#">网站设置</a></li>
               <li><a href="#">基本设置</a></li>
          </ul>
        </div>
        
    </div>
    <iframe class="show" name="show">
   		</iframe>
    
</body>
</html>