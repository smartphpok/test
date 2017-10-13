<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/reset.css"/>
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/index.css"/>
  <link rel="stylesheet" href="/lianshuomai/Public/Home/css/nav.css"/>
</head>
<body>

  <!--头部总导航-->
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

  <!--搜索部分-->
  <div id="search">
    <div><a href="index_01.html"><img src="/lianshuomai/Public/Home/images/ls_logonew.png" alt=""/></a></div>
    <div><a href="index_01.html"><img src="/lianshuomai/Public/Home/images/hitpic.png" alt=""/></a></div>
    <div class="sear">
      <input type="text" name="sou" id="sou" required  placeholder="请输入你要检索的内容"/>
      <button id="send"></button>
      <!--将数据提交到php-->
      <div id="menu_list">
        <ul id="parent">

        </ul>
      </div>
    </div>
    <div class="last">
      <span class="icon icon_tel"></span>
      <div>400-030-8383</div>
    </div>
  </div>
  <!--主导航-->
  <div id="main">
  <!--step1：导航头部-->
  <div class="main_top clear_he">
    <ul class="nav_kinds">
      <li>
        <i></i>分类导航
      </li>
      <ul class="left_menu">
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon1"></b>日用百货</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">保温杯</a></dd>
          <dd><a href="#">热水壶</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times;</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">厨房用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">碗具</a></li>
                  <li class="on"><a href="#">果盘</a></li>
                  <li><a href="#">菜板</a></li>
                  <li><a href="#">厨用刀</a></li>
                  <li><a href="#">冰格</a></li>
                  <li><a href="#">蒸笼</a></li>
                  <li><a href="#">厨房定时器</a></li>
                  <li><a href="#">封口夹</a></li>
                  <li><a href="#">打蛋器</a></li>
                  <li><a href="#">保鲜膜</a></li>
                  <li><a href="#">吸管</a></li>
                  <li><a href="#">调味架</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">居家日用</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">照明电筒</a></li>
                  <li><a href="#">熨烫板</a></li>
                  <li><a href="#">体重秤</a></li>
                  <li><a href="#">温度计</a></li>
                  <li><a href="#">针线盒</a></li>
                  <li><a href="#">家用剪刀</a></li>
                  <li><a href="#">家用梯</a></li>
                  <li class="on"><a href="#">暖手宝</a></li>
                  <li><a href="#">热水袋</a></li>
                  <li><a href="#">护眼罩</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">收纳用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">收纳箱</a></li>
                  <li><a href="#">收纳层架</a></li>
                  <li><a href="#">储物挂袋</a></li>
                  <li><a href="#">首饰箱</a></li>
                  <li class="on"><a href="#">收纳套装</a></li>
                  <li><a href="#">纸巾盒</a></li>
                  <li><a href="#">牙刷套</a></li>
                  <li><a href="#">收纳柜</a></li>
                  <li><a href="#">收纳瓶</a></li>
                  <li><a href="#">其他收纳用品</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">洗漱用品</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">牙刷</a></li>
                  <li><a href="#">浴室架</a></li>
                  <li><a href="#">浴帽</a></li>
                  <li><a href="#">香皂盒</a></li>
                  <li><a href="#">化妆镜</a></li>
                  <li><a href="#">牙签牙线</a></li>
                  <li><a href="#">洁耳器</a></li>
                  <li><a href="#">挤牙膏器</a></li>
                  <li class="on"><a href="#">沐浴球</a></li>
                  <li><a href="#">吸盘毛巾架</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">清洁用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">拖把</a></li>
                  <li><a href="#">垃圾桶</a></li>
                  <li><a href="#">搓衣板</a></li>
                  <li><a href="#">海绵擦</a></li>
                  <li><a href="#">洗衣球</a></li>
                  <li><a href="#">除尘掸</a></li>
                  <li><a href="#">垃圾夹</a></li>
                  <li><a href="#">垃圾袋</a></li>
                  <li><a href="#">拖把配件</a></li>
                  <li class="on"><a href="#">扫把、簸箕</a></li>
                  <li><a href="#">钢丝球</a></li>
                  <li><a href="#">马桶吸</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">锅、煲</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">压力锅</a></li>
                  <li><a href="#">奶锅</a></li>
                  <li><a href="#">汤锅</a></li>
                  <li><a href="#">炒锅</a></li>
                  <li><a href="#">平底锅</a></li>
                  <li><a href="#">砂锅</a></li>
                  <li><a href="#">蒸锅</a></li>
                  <li><a href="#">锅盖</a></li>
                  <li class="on"><a href="#">陶瓷煲</a></li>
                  <li><a href="#">锅具套装</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon2"></b>家纺家饰</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">四件套</a></dd>
          <dd><a href="#">沙发套</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">套件市场</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">
                    四件套</a></li>
                  <li class="on"><a href="#">多件套</a></li>
                  <li><a href="#">枕套</a></li>
                  <li><a href="#">被套</a></li>
                  <li class="on"><a href="#">床单、被单</a></li>
                  <li><a href="#">床罩</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">家居软饰</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">照片墙</a></li>
                  <li><a href="#">沙发套</a></li>
                  <li><a href="#">布艺绣品</a></li>
                  <li><a href="#">地毯地垫</a></li>
                  <li><a href="#">装饰画</a></li>
                  <li><a href="#">台布桌布</a></li>
                  <li><a href="#">开关套</a></li>
                  <li class="on"><a href="#">墙贴</a></li>
                  <li><a href="#">浴帘窗帘</a></li>
                  <li><a href="#">围裙空调罩</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">婴童家纺</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">婴童枕芯</a></li>
                  <li><a href="#">婴童蚊帐</a></li>
                  <li><a href="#">婴童毛毯</a></li>
                  <li><a href="#">床围</a></li>
                  <li class="on"><a href="#">防踢被</a></li>
                  <li><a href="#">婴童床垫</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">被芯类</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">毛巾被</a></li>
                  <li><a href="#">羊绒被</a></li>
                  <li><a href="#">羽绒被</a></li>
                  <li><a href="#">蚕丝被</a></li>
                  <li class="on"><a href="#">化纤被棉被</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon3"></b>运动户外</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">跑步鞋</a></dd>
          <dd><a href="#">军迷服</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">运动潮鞋</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">
                    跑步鞋</a></li>
                  <li class="on"><a href="#">篮球鞋</a></li>
                  <li><a href="#">足球鞋</a></li>
                  <li><a href="#">舞蹈鞋</a></li>
                  <li class="on"><a href="#">羽毛球鞋</a></li>
                  <li><a href="#">乒乓球鞋</a></li>
                  <li><a href="#">排球鞋</a></li>
                  <li><a href="#">棒球鞋</a></li>
                  <li><a href="#">网球鞋</a></li>
                  <li><a href="#">其他运动鞋</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">户外服装</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">冲锋衣</a></li>
                  <li><a href="#">登山服</a></li>
                  <li><a href="#">功能棉服</a></li>
                  <li><a href="#">滑雪服</a></li>
                  <li><a href="#">钓鱼服</a></li>
                  <li><a href="#">皮肤风衣</a></li>
                  <li><a href="#">潜水服</a></li>
                  <li class="on"><a href="#">赛车服</a></li>
                  <li><a href="#">软壳衣裤</a></li>
                  <li><a href="#">军迷服</a></li>
                  <li><a href="#">骑行服</a></li>
                  <li><a href="#">速干衣裤</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">婴童家纺</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">婴童枕芯</a></li>
                  <li><a href="#">婴童蚊帐</a></li>
                  <li><a href="#">婴童毛毯</a></li>
                  <li><a href="#">床围</a></li>
                  <li class="on"><a href="#">防踢被</a></li>
                  <li><a href="#">婴童床垫</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">被芯类</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">毛巾被</a></li>
                  <li><a href="#">羊绒被</a></li>
                  <li><a href="#">羽绒被</a></li>
                  <li><a href="#">蚕丝被</a></li>
                  <li class="on"><a href="#">化纤被棉被</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon4"></b>食品美食</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">果冻</a></dd>
          <dd><a href="#">巧克力</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">户外服装</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">冲锋衣</a></li>
                  <li><a href="#">登山服</a></li>
                  <li><a href="#">功能棉服</a></li>
                  <li><a href="#">滑雪服</a></li>
                  <li><a href="#">钓鱼服</a></li>
                  <li><a href="#">皮肤风衣</a></li>
                  <li><a href="#">潜水服</a></li>
                  <li class="on"><a href="#">赛车服</a></li>
                  <li><a href="#">软壳衣裤</a></li>
                  <li><a href="#">军迷服</a></li>
                  <li><a href="#">骑行服</a></li>
                  <li><a href="#">速干衣裤</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">运动潮鞋</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">
                    跑步鞋</a></li>
                  <li class="on"><a href="#">篮球鞋</a></li>
                  <li><a href="#">足球鞋</a></li>
                  <li><a href="#">舞蹈鞋</a></li>
                  <li class="on"><a href="#">羽毛球鞋</a></li>
                  <li><a href="#">乒乓球鞋</a></li>
                  <li><a href="#">排球鞋</a></li>
                  <li><a href="#">棒球鞋</a></li>
                  <li><a href="#">网球鞋</a></li>
                  <li><a href="#">其他运动鞋</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">婴童家纺</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">婴童枕芯</a></li>
                  <li><a href="#">婴童蚊帐</a></li>
                  <li><a href="#">婴童毛毯</a></li>
                  <li><a href="#">床围</a></li>
                  <li class="on"><a href="#">防踢被</a></li>
                  <li><a href="#">婴童床垫</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">被芯类</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">毛巾被</a></li>
                  <li><a href="#">羊绒被</a></li>
                  <li><a href="#">羽绒被</a></li>
                  <li><a href="#">蚕丝被</a></li>
                  <li class="on"><a href="#">化纤被棉被</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon5"></b>数码家电</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">数据线</a></dd>
          <dd><a href="#">吸尘器</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">厨房用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">碗具</a></li>
                  <li class="on"><a href="#">果盘</a></li>
                  <li><a href="#">菜板</a></li>
                  <li><a href="#">厨用刀</a></li>
                  <li><a href="#">冰格</a></li>
                  <li><a href="#">蒸笼</a></li>
                  <li><a href="#">厨房定时器</a></li>
                  <li><a href="#">封口夹</a></li>
                  <li><a href="#">打蛋器</a></li>
                  <li><a href="#">保鲜膜</a></li>
                  <li><a href="#">吸管</a></li>
                  <li><a href="#">调味架</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">居家日用</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">照明电筒</a></li>
                  <li><a href="#">熨烫板</a></li>
                  <li><a href="#">体重秤</a></li>
                  <li><a href="#">温度计</a></li>
                  <li><a href="#">针线盒</a></li>
                  <li><a href="#">家用剪刀</a></li>
                  <li><a href="#">家用梯</a></li>
                  <li class="on"><a href="#">暖手宝</a></li>
                  <li><a href="#">热水袋</a></li>
                  <li><a href="#">护眼罩</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">收纳用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">收纳箱</a></li>
                  <li><a href="#">收纳层架</a></li>
                  <li><a href="#">储物挂袋</a></li>
                  <li><a href="#">首饰箱</a></li>
                  <li class="on"><a href="#">收纳套装</a></li>
                  <li><a href="#">纸巾盒</a></li>
                  <li><a href="#">牙刷套</a></li>
                  <li><a href="#">收纳柜</a></li>
                  <li><a href="#">收纳瓶</a></li>
                  <li><a href="#">其他收纳用品</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">洗漱用品</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">牙刷</a></li>
                  <li><a href="#">浴室架</a></li>
                  <li><a href="#">浴帽</a></li>
                  <li><a href="#">香皂盒</a></li>
                  <li><a href="#">化妆镜</a></li>
                  <li><a href="#">牙签牙线</a></li>
                  <li><a href="#">洁耳器</a></li>
                  <li><a href="#">挤牙膏器</a></li>
                  <li class="on"><a href="#">沐浴球</a></li>
                  <li><a href="#">吸盘毛巾架</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">清洁用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">拖把</a></li>
                  <li><a href="#">垃圾桶</a></li>
                  <li><a href="#">搓衣板</a></li>
                  <li><a href="#">海绵擦</a></li>
                  <li><a href="#">洗衣球</a></li>
                  <li><a href="#">除尘掸</a></li>
                  <li><a href="#">垃圾夹</a></li>
                  <li><a href="#">垃圾袋</a></li>
                  <li><a href="#">拖把配件</a></li>
                  <li class="on"><a href="#">扫把、簸箕</a></li>
                  <li><a href="#">钢丝球</a></li>
                  <li><a href="#">马桶吸</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">锅、煲</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">压力锅</a></li>
                  <li><a href="#">奶锅</a></li>
                  <li><a href="#">汤锅</a></li>
                  <li><a href="#">炒锅</a></li>
                  <li><a href="#">平底锅</a></li>
                  <li><a href="#">砂锅</a></li>
                  <li><a href="#">蒸锅</a></li>
                  <li><a href="#">锅盖</a></li>
                  <li class="on"><a href="#">陶瓷煲</a></li>
                  <li><a href="#">锅具套装</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon6"></b>童装玩具</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">儿童袜</a></dd>
          <dd><a href="#">玩具学...</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">套件市场</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">
                    四件套</a></li>
                  <li class="on"><a href="#">多件套</a></li>
                  <li><a href="#">枕套</a></li>
                  <li><a href="#">被套</a></li>
                  <li class="on"><a href="#">床单、被单</a></li>
                  <li><a href="#">床罩</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">家居软饰</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">照片墙</a></li>
                  <li><a href="#">沙发套</a></li>
                  <li><a href="#">布艺绣品</a></li>
                  <li><a href="#">地毯地垫</a></li>
                  <li><a href="#">装饰画</a></li>
                  <li><a href="#">台布桌布</a></li>
                  <li><a href="#">开关套</a></li>
                  <li class="on"><a href="#">墙贴</a></li>
                  <li><a href="#">浴帘窗帘</a></li>
                  <li><a href="#">围裙空调罩</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">婴童家纺</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">婴童枕芯</a></li>
                  <li><a href="#">婴童蚊帐</a></li>
                  <li><a href="#">婴童毛毯</a></li>
                  <li><a href="#">床围</a></li>
                  <li class="on"><a href="#">防踢被</a></li>
                  <li><a href="#">婴童床垫</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">被芯类</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">毛巾被</a></li>
                  <li><a href="#">羊绒被</a></li>
                  <li><a href="#">羽绒被</a></li>
                  <li><a href="#">蚕丝被</a></li>
                  <li class="on"><a href="#">化纤被棉被</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon7"></b>鞋靴/箱包</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">旅行箱</a></dd>
          <dd><a href="#">休闲鞋</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">运动潮鞋</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">
                    跑步鞋</a></li>
                  <li class="on"><a href="#">篮球鞋</a></li>
                  <li><a href="#">足球鞋</a></li>
                  <li><a href="#">舞蹈鞋</a></li>
                  <li class="on"><a href="#">羽毛球鞋</a></li>
                  <li><a href="#">乒乓球鞋</a></li>
                  <li><a href="#">排球鞋</a></li>
                  <li><a href="#">棒球鞋</a></li>
                  <li><a href="#">网球鞋</a></li>
                  <li><a href="#">其他运动鞋</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">户外服装</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">冲锋衣</a></li>
                  <li><a href="#">登山服</a></li>
                  <li><a href="#">功能棉服</a></li>
                  <li><a href="#">滑雪服</a></li>
                  <li><a href="#">钓鱼服</a></li>
                  <li><a href="#">皮肤风衣</a></li>
                  <li><a href="#">潜水服</a></li>
                  <li class="on"><a href="#">赛车服</a></li>
                  <li><a href="#">软壳衣裤</a></li>
                  <li><a href="#">军迷服</a></li>
                  <li><a href="#">骑行服</a></li>
                  <li><a href="#">速干衣裤</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">婴童家纺</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">婴童枕芯</a></li>
                  <li><a href="#">婴童蚊帐</a></li>
                  <li><a href="#">婴童毛毯</a></li>
                  <li><a href="#">床围</a></li>
                  <li class="on"><a href="#">防踢被</a></li>
                  <li><a href="#">婴童床垫</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">被芯类</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">毛巾被</a></li>
                  <li><a href="#">羊绒被</a></li>
                  <li><a href="#">羽绒被</a></li>
                  <li><a href="#">蚕丝被</a></li>
                  <li class="on"><a href="#">化纤被棉被</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon8"></b>女装/男装</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">女式针...</a></dd>
          <dd><a href="#">女士羽...</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">厨房用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">碗具</a></li>
                  <li class="on"><a href="#">果盘</a></li>
                  <li><a href="#">菜板</a></li>
                  <li><a href="#">厨用刀</a></li>
                  <li><a href="#">冰格</a></li>
                  <li><a href="#">蒸笼</a></li>
                  <li><a href="#">厨房定时器</a></li>
                  <li><a href="#">封口夹</a></li>
                  <li><a href="#">打蛋器</a></li>
                  <li><a href="#">保鲜膜</a></li>
                  <li><a href="#">吸管</a></li>
                  <li><a href="#">调味架</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">居家日用</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">照明电筒</a></li>
                  <li><a href="#">熨烫板</a></li>
                  <li><a href="#">体重秤</a></li>
                  <li><a href="#">温度计</a></li>
                  <li><a href="#">针线盒</a></li>
                  <li><a href="#">家用剪刀</a></li>
                  <li><a href="#">家用梯</a></li>
                  <li class="on"><a href="#">暖手宝</a></li>
                  <li><a href="#">热水袋</a></li>
                  <li><a href="#">护眼罩</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">收纳用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">收纳箱</a></li>
                  <li><a href="#">收纳层架</a></li>
                  <li><a href="#">储物挂袋</a></li>
                  <li><a href="#">首饰箱</a></li>
                  <li class="on"><a href="#">收纳套装</a></li>
                  <li><a href="#">纸巾盒</a></li>
                  <li><a href="#">牙刷套</a></li>
                  <li><a href="#">收纳柜</a></li>
                  <li><a href="#">收纳瓶</a></li>
                  <li><a href="#">其他收纳用品</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">洗漱用品</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">牙刷</a></li>
                  <li><a href="#">浴室架</a></li>
                  <li><a href="#">浴帽</a></li>
                  <li><a href="#">香皂盒</a></li>
                  <li><a href="#">化妆镜</a></li>
                  <li><a href="#">牙签牙线</a></li>
                  <li><a href="#">洁耳器</a></li>
                  <li><a href="#">挤牙膏器</a></li>
                  <li class="on"><a href="#">沐浴球</a></li>
                  <li><a href="#">吸盘毛巾架</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">清洁用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">拖把</a></li>
                  <li><a href="#">垃圾桶</a></li>
                  <li><a href="#">搓衣板</a></li>
                  <li><a href="#">海绵擦</a></li>
                  <li><a href="#">洗衣球</a></li>
                  <li><a href="#">除尘掸</a></li>
                  <li><a href="#">垃圾夹</a></li>
                  <li><a href="#">垃圾袋</a></li>
                  <li><a href="#">拖把配件</a></li>
                  <li class="on"><a href="#">扫把、簸箕</a></li>
                  <li><a href="#">钢丝球</a></li>
                  <li><a href="#">马桶吸</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">锅、煲</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">压力锅</a></li>
                  <li><a href="#">奶锅</a></li>
                  <li><a href="#">汤锅</a></li>
                  <li><a href="#">炒锅</a></li>
                  <li><a href="#">平底锅</a></li>
                  <li><a href="#">砂锅</a></li>
                  <li><a href="#">蒸锅</a></li>
                  <li><a href="#">锅盖</a></li>
                  <li class="on"><a href="#">陶瓷煲</a></li>
                  <li><a href="#">锅具套装</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon9"></b>机械五金</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">换热器</a></dd>
          <dd><a href="#">喷水、...</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">运动潮鞋</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">
                    跑步鞋</a></li>
                  <li class="on"><a href="#">篮球鞋</a></li>
                  <li><a href="#">足球鞋</a></li>
                  <li><a href="#">舞蹈鞋</a></li>
                  <li class="on"><a href="#">羽毛球鞋</a></li>
                  <li><a href="#">乒乓球鞋</a></li>
                  <li><a href="#">排球鞋</a></li>
                  <li><a href="#">棒球鞋</a></li>
                  <li><a href="#">网球鞋</a></li>
                  <li><a href="#">其他运动鞋</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">户外服装</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">冲锋衣</a></li>
                  <li><a href="#">登山服</a></li>
                  <li><a href="#">功能棉服</a></li>
                  <li><a href="#">滑雪服</a></li>
                  <li><a href="#">钓鱼服</a></li>
                  <li><a href="#">皮肤风衣</a></li>
                  <li><a href="#">潜水服</a></li>
                  <li class="on"><a href="#">赛车服</a></li>
                  <li><a href="#">软壳衣裤</a></li>
                  <li><a href="#">军迷服</a></li>
                  <li><a href="#">骑行服</a></li>
                  <li><a href="#">速干衣裤</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">婴童家纺</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">婴童枕芯</a></li>
                  <li><a href="#">婴童蚊帐</a></li>
                  <li><a href="#">婴童毛毯</a></li>
                  <li><a href="#">床围</a></li>
                  <li class="on"><a href="#">防踢被</a></li>
                  <li><a href="#">婴童床垫</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">被芯类</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">毛巾被</a></li>
                  <li><a href="#">羊绒被</a></li>
                  <li><a href="#">羽绒被</a></li>
                  <li><a href="#">蚕丝被</a></li>
                  <li class="on"><a href="#">化纤被棉被</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon10"></b>照明电子</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">天花灯</a></dd>
          <dd><a href="#">电容器</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">厨房用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">碗具</a></li>
                  <li class="on"><a href="#">果盘</a></li>
                  <li><a href="#">菜板</a></li>
                  <li><a href="#">厨用刀</a></li>
                  <li><a href="#">冰格</a></li>
                  <li><a href="#">蒸笼</a></li>
                  <li><a href="#">厨房定时器</a></li>
                  <li><a href="#">封口夹</a></li>
                  <li><a href="#">打蛋器</a></li>
                  <li><a href="#">保鲜膜</a></li>
                  <li><a href="#">吸管</a></li>
                  <li><a href="#">调味架</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">居家日用</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">照明电筒</a></li>
                  <li><a href="#">熨烫板</a></li>
                  <li><a href="#">体重秤</a></li>
                  <li><a href="#">温度计</a></li>
                  <li><a href="#">针线盒</a></li>
                  <li><a href="#">家用剪刀</a></li>
                  <li><a href="#">家用梯</a></li>
                  <li class="on"><a href="#">暖手宝</a></li>
                  <li><a href="#">热水袋</a></li>
                  <li><a href="#">护眼罩</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">收纳用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">收纳箱</a></li>
                  <li><a href="#">收纳层架</a></li>
                  <li><a href="#">储物挂袋</a></li>
                  <li><a href="#">首饰箱</a></li>
                  <li class="on"><a href="#">收纳套装</a></li>
                  <li><a href="#">纸巾盒</a></li>
                  <li><a href="#">牙刷套</a></li>
                  <li><a href="#">收纳柜</a></li>
                  <li><a href="#">收纳瓶</a></li>
                  <li><a href="#">其他收纳用品</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">洗漱用品</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">牙刷</a></li>
                  <li><a href="#">浴室架</a></li>
                  <li><a href="#">浴帽</a></li>
                  <li><a href="#">香皂盒</a></li>
                  <li><a href="#">化妆镜</a></li>
                  <li><a href="#">牙签牙线</a></li>
                  <li><a href="#">洁耳器</a></li>
                  <li><a href="#">挤牙膏器</a></li>
                  <li class="on"><a href="#">沐浴球</a></li>
                  <li><a href="#">吸盘毛巾架</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">清洁用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">拖把</a></li>
                  <li><a href="#">垃圾桶</a></li>
                  <li><a href="#">搓衣板</a></li>
                  <li><a href="#">海绵擦</a></li>
                  <li><a href="#">洗衣球</a></li>
                  <li><a href="#">除尘掸</a></li>
                  <li><a href="#">垃圾夹</a></li>
                  <li><a href="#">垃圾袋</a></li>
                  <li><a href="#">拖把配件</a></li>
                  <li class="on"><a href="#">扫把、簸箕</a></li>
                  <li><a href="#">钢丝球</a></li>
                  <li><a href="#">马桶吸</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">锅、煲</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">压力锅</a></li>
                  <li><a href="#">奶锅</a></li>
                  <li><a href="#">汤锅</a></li>
                  <li><a href="#">炒锅</a></li>
                  <li><a href="#">平底锅</a></li>
                  <li><a href="#">砂锅</a></li>
                  <li><a href="#">蒸锅</a></li>
                  <li><a href="#">锅盖</a></li>
                  <li class="on"><a href="#">陶瓷煲</a></li>
                  <li><a href="#">锅具套装</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon11"></b>美妆日化</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">睫毛膏</a></dd>
          <dd><a href="#">面膜</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">运动潮鞋</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">
                    跑步鞋</a></li>
                  <li class="on"><a href="#">篮球鞋</a></li>
                  <li><a href="#">足球鞋</a></li>
                  <li><a href="#">舞蹈鞋</a></li>
                  <li class="on"><a href="#">羽毛球鞋</a></li>
                  <li><a href="#">乒乓球鞋</a></li>
                  <li><a href="#">排球鞋</a></li>
                  <li><a href="#">棒球鞋</a></li>
                  <li><a href="#">网球鞋</a></li>
                  <li><a href="#">其他运动鞋</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">户外服装</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">冲锋衣</a></li>
                  <li><a href="#">登山服</a></li>
                  <li><a href="#">功能棉服</a></li>
                  <li><a href="#">滑雪服</a></li>
                  <li><a href="#">钓鱼服</a></li>
                  <li><a href="#">皮肤风衣</a></li>
                  <li><a href="#">潜水服</a></li>
                  <li class="on"><a href="#">赛车服</a></li>
                  <li><a href="#">软壳衣裤</a></li>
                  <li><a href="#">军迷服</a></li>
                  <li><a href="#">骑行服</a></li>
                  <li><a href="#">速干衣裤</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">婴童家纺</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">婴童枕芯</a></li>
                  <li><a href="#">婴童蚊帐</a></li>
                  <li><a href="#">婴童毛毯</a></li>
                  <li><a href="#">床围</a></li>
                  <li class="on"><a href="#">防踢被</a></li>
                  <li><a href="#">婴童床垫</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">被芯类</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">毛巾被</a></li>
                  <li><a href="#">羊绒被</a></li>
                  <li><a href="#">羽绒被</a></li>
                  <li><a href="#">蚕丝被</a></li>
                  <li class="on"><a href="#">化纤被棉被</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon12"></b>行政办公</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">中性笔</a></dd>
          <dd><a href="#">文件袋</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">厨房用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">碗具</a></li>
                  <li class="on"><a href="#">果盘</a></li>
                  <li><a href="#">菜板</a></li>
                  <li><a href="#">厨用刀</a></li>
                  <li><a href="#">冰格</a></li>
                  <li><a href="#">蒸笼</a></li>
                  <li><a href="#">厨房定时器</a></li>
                  <li><a href="#">封口夹</a></li>
                  <li><a href="#">打蛋器</a></li>
                  <li><a href="#">保鲜膜</a></li>
                  <li><a href="#">吸管</a></li>
                  <li><a href="#">调味架</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">居家日用</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">照明电筒</a></li>
                  <li><a href="#">熨烫板</a></li>
                  <li><a href="#">体重秤</a></li>
                  <li><a href="#">温度计</a></li>
                  <li><a href="#">针线盒</a></li>
                  <li><a href="#">家用剪刀</a></li>
                  <li><a href="#">家用梯</a></li>
                  <li class="on"><a href="#">暖手宝</a></li>
                  <li><a href="#">热水袋</a></li>
                  <li><a href="#">护眼罩</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">收纳用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">收纳箱</a></li>
                  <li><a href="#">收纳层架</a></li>
                  <li><a href="#">储物挂袋</a></li>
                  <li><a href="#">首饰箱</a></li>
                  <li class="on"><a href="#">收纳套装</a></li>
                  <li><a href="#">纸巾盒</a></li>
                  <li><a href="#">牙刷套</a></li>
                  <li><a href="#">收纳柜</a></li>
                  <li><a href="#">收纳瓶</a></li>
                  <li><a href="#">其他收纳用品</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">洗漱用品</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">牙刷</a></li>
                  <li><a href="#">浴室架</a></li>
                  <li><a href="#">浴帽</a></li>
                  <li><a href="#">香皂盒</a></li>
                  <li><a href="#">化妆镜</a></li>
                  <li><a href="#">牙签牙线</a></li>
                  <li><a href="#">洁耳器</a></li>
                  <li><a href="#">挤牙膏器</a></li>
                  <li class="on"><a href="#">沐浴球</a></li>
                  <li><a href="#">吸盘毛巾架</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">清洁用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">拖把</a></li>
                  <li><a href="#">垃圾桶</a></li>
                  <li><a href="#">搓衣板</a></li>
                  <li><a href="#">海绵擦</a></li>
                  <li><a href="#">洗衣球</a></li>
                  <li><a href="#">除尘掸</a></li>
                  <li><a href="#">垃圾夹</a></li>
                  <li><a href="#">垃圾袋</a></li>
                  <li><a href="#">拖把配件</a></li>
                  <li class="on"><a href="#">扫把、簸箕</a></li>
                  <li><a href="#">钢丝球</a></li>
                  <li><a href="#">马桶吸</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">锅、煲</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">压力锅</a></li>
                  <li><a href="#">奶锅</a></li>
                  <li><a href="#">汤锅</a></li>
                  <li><a href="#">炒锅</a></li>
                  <li><a href="#">平底锅</a></li>
                  <li><a href="#">砂锅</a></li>
                  <li><a href="#">蒸锅</a></li>
                  <li><a href="#">锅盖</a></li>
                  <li class="on"><a href="#">陶瓷煲</a></li>
                  <li><a href="#">锅具套装</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon13"></b>汽车用品</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">汽车香水</a></dd>
          <dd><a href="#">清洗剂</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">运动潮鞋</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">
                    跑步鞋</a></li>
                  <li class="on"><a href="#">篮球鞋</a></li>
                  <li><a href="#">足球鞋</a></li>
                  <li><a href="#">舞蹈鞋</a></li>
                  <li class="on"><a href="#">羽毛球鞋</a></li>
                  <li><a href="#">乒乓球鞋</a></li>
                  <li><a href="#">排球鞋</a></li>
                  <li><a href="#">棒球鞋</a></li>
                  <li><a href="#">网球鞋</a></li>
                  <li><a href="#">其他运动鞋</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">户外服装</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">冲锋衣</a></li>
                  <li><a href="#">登山服</a></li>
                  <li><a href="#">功能棉服</a></li>
                  <li><a href="#">滑雪服</a></li>
                  <li><a href="#">钓鱼服</a></li>
                  <li><a href="#">皮肤风衣</a></li>
                  <li><a href="#">潜水服</a></li>
                  <li class="on"><a href="#">赛车服</a></li>
                  <li><a href="#">软壳衣裤</a></li>
                  <li><a href="#">军迷服</a></li>
                  <li><a href="#">骑行服</a></li>
                  <li><a href="#">速干衣裤</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">婴童家纺</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">婴童枕芯</a></li>
                  <li><a href="#">婴童蚊帐</a></li>
                  <li><a href="#">婴童毛毯</a></li>
                  <li><a href="#">床围</a></li>
                  <li class="on"><a href="#">防踢被</a></li>
                  <li><a href="#">婴童床垫</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">被芯类</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">毛巾被</a></li>
                  <li><a href="#">羊绒被</a></li>
                  <li><a href="#">羽绒被</a></li>
                  <li><a href="#">蚕丝被</a></li>
                  <li class="on"><a href="#">化纤被棉被</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon14"></b>电工电气</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">测电笔</a></dd>
          <dd><a href="#">万用表</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">厨房用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">碗具</a></li>
                  <li class="on"><a href="#">果盘</a></li>
                  <li><a href="#">菜板</a></li>
                  <li><a href="#">厨用刀</a></li>
                  <li><a href="#">冰格</a></li>
                  <li><a href="#">蒸笼</a></li>
                  <li><a href="#">厨房定时器</a></li>
                  <li><a href="#">封口夹</a></li>
                  <li><a href="#">打蛋器</a></li>
                  <li><a href="#">保鲜膜</a></li>
                  <li><a href="#">吸管</a></li>
                  <li><a href="#">调味架</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">居家日用</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">照明电筒</a></li>
                  <li><a href="#">熨烫板</a></li>
                  <li><a href="#">体重秤</a></li>
                  <li><a href="#">温度计</a></li>
                  <li><a href="#">针线盒</a></li>
                  <li><a href="#">家用剪刀</a></li>
                  <li><a href="#">家用梯</a></li>
                  <li class="on"><a href="#">暖手宝</a></li>
                  <li><a href="#">热水袋</a></li>
                  <li><a href="#">护眼罩</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">收纳用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">收纳箱</a></li>
                  <li><a href="#">收纳层架</a></li>
                  <li><a href="#">储物挂袋</a></li>
                  <li><a href="#">首饰箱</a></li>
                  <li class="on"><a href="#">收纳套装</a></li>
                  <li><a href="#">纸巾盒</a></li>
                  <li><a href="#">牙刷套</a></li>
                  <li><a href="#">收纳柜</a></li>
                  <li><a href="#">收纳瓶</a></li>
                  <li><a href="#">其他收纳用品</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">洗漱用品</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">牙刷</a></li>
                  <li><a href="#">浴室架</a></li>
                  <li><a href="#">浴帽</a></li>
                  <li><a href="#">香皂盒</a></li>
                  <li><a href="#">化妆镜</a></li>
                  <li><a href="#">牙签牙线</a></li>
                  <li><a href="#">洁耳器</a></li>
                  <li><a href="#">挤牙膏器</a></li>
                  <li class="on"><a href="#">沐浴球</a></li>
                  <li><a href="#">吸盘毛巾架</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">清洁用具</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">拖把</a></li>
                  <li><a href="#">垃圾桶</a></li>
                  <li><a href="#">搓衣板</a></li>
                  <li><a href="#">海绵擦</a></li>
                  <li><a href="#">洗衣球</a></li>
                  <li><a href="#">除尘掸</a></li>
                  <li><a href="#">垃圾夹</a></li>
                  <li><a href="#">垃圾袋</a></li>
                  <li><a href="#">拖把配件</a></li>
                  <li class="on"><a href="#">扫把、簸箕</a></li>
                  <li><a href="#">钢丝球</a></li>
                  <li><a href="#">马桶吸</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">锅、煲</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">压力锅</a></li>
                  <li><a href="#">奶锅</a></li>
                  <li><a href="#">汤锅</a></li>
                  <li><a href="#">炒锅</a></li>
                  <li><a href="#">平底锅</a></li>
                  <li><a href="#">砂锅</a></li>
                  <li><a href="#">蒸锅</a></li>
                  <li><a href="#">锅盖</a></li>
                  <li class="on"><a href="#">陶瓷煲</a></li>
                  <li><a href="#">锅具套装</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon15"></b>纺织皮革</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">纺类</a></dd>
          <dd><a href="#">呢绒</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">运动潮鞋</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">
                    跑步鞋</a></li>
                  <li class="on"><a href="#">篮球鞋</a></li>
                  <li><a href="#">足球鞋</a></li>
                  <li><a href="#">舞蹈鞋</a></li>
                  <li class="on"><a href="#">羽毛球鞋</a></li>
                  <li><a href="#">乒乓球鞋</a></li>
                  <li><a href="#">排球鞋</a></li>
                  <li><a href="#">棒球鞋</a></li>
                  <li><a href="#">网球鞋</a></li>
                  <li><a href="#">其他运动鞋</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">户外服装</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">冲锋衣</a></li>
                  <li><a href="#">登山服</a></li>
                  <li><a href="#">功能棉服</a></li>
                  <li><a href="#">滑雪服</a></li>
                  <li><a href="#">钓鱼服</a></li>
                  <li><a href="#">皮肤风衣</a></li>
                  <li><a href="#">潜水服</a></li>
                  <li class="on"><a href="#">赛车服</a></li>
                  <li><a href="#">软壳衣裤</a></li>
                  <li><a href="#">军迷服</a></li>
                  <li><a href="#">骑行服</a></li>
                  <li><a href="#">速干衣裤</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">婴童家纺</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">婴童枕芯</a></li>
                  <li><a href="#">婴童蚊帐</a></li>
                  <li><a href="#">婴童毛毯</a></li>
                  <li><a href="#">床围</a></li>
                  <li class="on"><a href="#">防踢被</a></li>
                  <li><a href="#">婴童床垫</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">被芯类</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">毛巾被</a></li>
                  <li><a href="#">羊绒被</a></li>
                  <li><a href="#">羽绒被</a></li>
                  <li><a href="#">蚕丝被</a></li>
                  <li class="on"><a href="#">化纤被棉被</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
        <ol class="same">
          <dl><a href="#"><b class="menu_icon icon16"></b>橡塑/化工</a></dl>
          <dt><b></b></dt>
          <dd><a href="#">乳胶</a></dd>
          <dd><a href="#">人造纤维</a></dd>
          <dt><i></i></dt>
          <div class="other_menu">
            <p>&times</p>
            <div class="f1">
              <div class="f1_le">
                <b class="lf">运动潮鞋</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">
                    跑步鞋</a></li>
                  <li class="on"><a href="#">篮球鞋</a></li>
                  <li><a href="#">足球鞋</a></li>
                  <li><a href="#">舞蹈鞋</a></li>
                  <li class="on"><a href="#">羽毛球鞋</a></li>
                  <li><a href="#">乒乓球鞋</a></li>
                  <li><a href="#">排球鞋</a></li>
                  <li><a href="#">棒球鞋</a></li>
                  <li><a href="#">网球鞋</a></li>
                  <li><a href="#">其他运动鞋</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">户外服装</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">冲锋衣</a></li>
                  <li><a href="#">登山服</a></li>
                  <li><a href="#">功能棉服</a></li>
                  <li><a href="#">滑雪服</a></li>
                  <li><a href="#">钓鱼服</a></li>
                  <li><a href="#">皮肤风衣</a></li>
                  <li><a href="#">潜水服</a></li>
                  <li class="on"><a href="#">赛车服</a></li>
                  <li><a href="#">软壳衣裤</a></li>
                  <li><a href="#">军迷服</a></li>
                  <li><a href="#">骑行服</a></li>
                  <li><a href="#">速干衣裤</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">婴童家纺</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">婴童枕芯</a></li>
                  <li><a href="#">婴童蚊帐</a></li>
                  <li><a href="#">婴童毛毯</a></li>
                  <li><a href="#">床围</a></li>
                  <li class="on"><a href="#">防踢被</a></li>
                  <li><a href="#">婴童床垫</a></li>
                </ul>
              </div>
              <div class="f1_le">
                <b class="lf">被芯类</b>
                <em class="lf"></em>
              </div>
              <div class="f1_ri clear_he">
                <ul class="lf">
                  <li><a href="#">毛巾被</a></li>
                  <li><a href="#">羊绒被</a></li>
                  <li><a href="#">羽绒被</a></li>
                  <li><a href="#">蚕丝被</a></li>
                  <li class="on"><a href="#">化纤被棉被</a></li>
                </ul>
              </div>
            </div>
          </div>
        </ol>
      </ul>
    </ul>
    <ul class="lf">
      <li><a href="#">首页</a></li>
      <li><a href="#">开供货站</a></li>
      <li><a href="#">开经销站</a></li>
      <li><a href="#">开超客站</a></li>
    </ul>
    <div id="banner_img" class="lf">
      <div id="big_ban">
        <ul id="banner"></ul>
        <ul id="counts"></ul>
      </div>
      <div class="banner lf">
        <div class="lf"><a href="/lianshuomai/index.php/Home/Spxx/splb"><img src="/lianshuomai/Public/Home/img/banner_01.jpg"/></a></div>
        <div class="lf"><a href="#"><img src="/lianshuomai/Public/Home/img/banner_02.jpg"/></a></div>
        <div class="lf"><a href="#"><img src="/lianshuomai/Public/Home/img/banner_03.jpg"/></a></div>
      </div>
    </div>
    <div id="banner_right">
      <div class="self">
        <div class="lf">
        	<?php if($_SESSION['username']): ?><img class="lf" src="/lianshuomai/Public/Home/img/user.png"/>
        	<?php else: ?>
          <img class="lf" src="/lianshuomai/Public/Home/img/avatar.png"/><?php endif; ?>
          <b id="logid" class="lf">请登录您的账号</b>
          <p class="lf">欢迎来到连锁卖</p>
        </div>
        <div class="link lf" id="loginout">
         <!-- <a href="/lianshuomai/index.php/Home/Login/login"><i></i>登录</a><a href="/lianshuomai/index.php/Home/User/user"><i></i>注册</a>-->
        </div>
      </div>
      <div class="news">
        <ul>
          <li class="active">
            <a href="#">公告</a>
            <div class="news_list">
              <ul>
                <li><a href="#">【重金求才】连锁卖超客招募开始...</a></li>
                <li><a href="#">【公告】新产品“我的连锁”正式...</a></li>
                <li><a href="#">【公告】连锁卖获授行业网站证书</a></li>
                <li><a href="#">【公告】0费用入驻连锁卖 让电商...</a></li>
                <li><a href="#">【公告】连锁卖通过360安全检测</a></li>
                <li><a href="#">【公告】小综帮帮上线 有问题点...</a></li>
              </ul>
            </div>
          </li>
          <li><a href="#">快讯</a>
            <div class="news_list">
              <ul>
                <li><a href="#">【多个才】连的深入体会客招募开始...</a></li>
                <li><a href="#">【让电商】新如果换热管我的”正式...</a></li>
                <li><a href="#">【公扔告】连锁而我因为业网站证书</a></li>
                <li><a href="#">【公】0费用问题问问锁卖 让电商...</a></li>
                <li><a href="#">【公告】连锁卖通过360安全检测</a></li>
                <li><a href="#">【公告】小综帮帮上线 有问题点...</a></li>
              </ul>
            </div>
          </li>
          <li><a href="#">供货入门</a> <div class="news_list">
            <ul>
              <li><a href="#">【重金求才】连锁卖超客招募开始...</a></li>
              <li><a href="#">【公告】新产品“我的连锁”正式...</a></li>
              <li><a href="#">【公告】集体业网站证书</a></li>
              <li><a href="#">【公告】0费僑连锁卖 让电商...</a></li>
              <li><a href="#">【公告】连锁卖通大概检测</a></li>
              <li><a href="#">【公告】小综帮帮娃娃头 有问题点...</a></li>
            </ul>
          </div></li>
          <li><a href="#">连锁入门</a> <div class="news_list">
            <ul>
              <li><a href="#">【重金求才】连锁就会改变招募开始...</a></li>
              <li><a href="#">【公告】新产品第三天”正式...</a></li>
              <li><a href="#">【公啊哈人】连锁卖获授网站证书</a></li>
              <li><a href="#">【公儿童】0费尽快退回 让电商...</a></li>
              <li><a href="#">【告】连锁卖通过360安全检测</a></li>
              <li><a href="#">【公告】小综帮帮上线 有问题点...</a></li>
            </ul>
          </div></li>
        </ul>
      </div>
      <div class="banner_bo clear_he">
        <div class="ri_logo">
          <ul class="clear_he">
            <li><b></b>即买即卖</li>
            <li><b class="ic1"></b>优质供货</li>
            <li><b class="ic2"></b>最惠采购</li>
          </ul>
        </div>
        <div class="open lf">
          <a href="#">开供货站</a>
          <a href="#">开经销站</a>
        </div>
      </div>
    </div>
    <!--中间广告部分-->
    <div class="banner_main">
      <div class="light" id="floor1">
        <div class="style1">
          <div class="style1_left lf">
            <b>日用百货</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/riyong.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much">
              <ul class="bold">
                <li><a href="#">厨房用具</a></li>
                <li><a href="#">碗具</a></li>
                <li><a href="#">果盘</a></li>
                <li><a href="#">菜板</a></li>
                <li><a href="#">厨用刀</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">居家日用</a></li>
                <li><a href="#">照明电筒</a></li>
                <li><a href="#">熨烫板</a></li>
                <li><a href="#">体重秤</a></li>
                <li><a href="#">温度计</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">收纳用具</a></li>
                <li><a href="#">收纳箱</a></li>
                <li><a href="#">收纳层架</a></li>
                <li><a href="#">储物挂袋</a></li>
                <li><a href="#">首饰箱</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">洗漱用具</a></li>
                <li><a href="#">牙刷</a></li>
                <li><a href="#">浴室架</a></li>
                <li><a href="#">浴帽</a></li>
                <li><a href="#">肥皂盒</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">清洁用具</a></li>
                <li><a href="#">拖把</a></li>
                <li><a href="#">垃圾桶</a></li>
                <li><a href="#">搓衣板</a></li>
                <li><a href="#">海绵擦</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">锅、煲</a></li>
                <li><a href="#">压力锅</a></li>
                <li class="on"><a href="#">奶锅</a></li>
                <li><a href="#">汤锅</a></li>
                <li><a href="#">炒锅</a></li>
              </ul>
            </div>
            <div class="last_much">
              <ul clear_he>
                <li><a href="#">杯具</a></li>
                <li><a href="#">USB新奇特</a></li>
                <li><a href="#">酒具</a></li>
                <li><a href="#">餐具</a></li>
                <li><a href="#">牙刷套</a></li>
                <li class="on"><a href="#">手摇咖啡机</a></li>
                <li><a href="#">家用温度计</a></li>
                <li><a href="#">纸巾盒</a></li>
                <li><a href="#">衣钩、挂钩</a></li>
              </ul>
            </div>
            <div class="logo">
              <img src="/lianshuomai/Public/Home/img/01.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/03 .jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/05.jpg" alt=""/>
            </div>
          </div>
        </div>
        <div class="style1">
          <div class="style1_left lf">
            <b>家纺家饰</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/beizi.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much1">
              <ul class="bold">
                <li><a href="#">套件市场</a></li>
                <li><a href="#">四件套</a></li>
                <li><a href="#">多件套</a></li>
                <li><a href="#">枕套</a></li>
                <li><a href="#">被套</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">家居软饰</a></li>
                <li><a href="#">照片墙</a></li>
                <li><a href="#">沙发套</a></li>
                <li><a href="#">布艺绣品</a></li>
                <li><a href="#">地毯地垫</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">婴童家纺</a></li>
                <li><a href="#">婴童枕芯</a></li>
                <li class="on"><a href="#">婴童蚊帐</a></li>
                <li><a href="#">婴童毛毯</a></li>
                <li><a href="#">床围</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">被芯类</a></li>
                <li><a href="#">毛巾被</a></li>
                <li><a href="#">羊绒被</a></li>
                <li><a href="#">羽绒被</a></li>
                <li><a href="#">蚕丝被</a></li>
              </ul>
            </div>
            <div class="last_much1">
              <ul clear_he>
                <li><a href="#">花草保健枕</a></li>
                <li><a href="#">微波炉手套</a></li>
                <li><a href="#">浴帘</a></li>
                <li><a href="#">窗帘</a></li>
                <li><a href="#">装饰画</a></li>
                <li class="on1"><a href="#">棉毯</a></li>
                <li><a href="#">干发帽</a></li>
                <li><a href="#">孕妇枕</a></li>
                <li><a href="#">擦手巾</a></li>
                <li><a href="#">竹炭枕</a></li>
              </ul>
            </div>
            <div class="logo1 lf">
              <img src="/lianshuomai/Public/Home/img/logo/fuanna.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/hengyuanxiag.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/shuxingjiafang.jpg" alt=""/>
            </div>
          </div>
        </div>
        <div class="clear_he"></div>
      </div>
      <div class="light" id="floor2">
        <div class="style1">
          <div class="style1_left lf">
            <b>运动户外</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/zhangpeng (1).jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much">
              <ul class="bold">
                <li><a href="#">厨房用具</a></li>
                <li><a href="#">碗具</a></li>
                <li><a href="#">果盘</a></li>
                <li><a href="#">菜板</a></li>
                <li><a href="#">厨用刀</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">居家日用</a></li>
                <li><a href="#">照明电筒</a></li>
                <li><a href="#">熨烫板</a></li>
                <li><a href="#">体重秤</a></li>
                <li><a href="#">温度计</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">收纳用具</a></li>
                <li><a href="#">收纳箱</a></li>
                <li><a href="#">收纳层架</a></li>
                <li><a href="#">储物挂袋</a></li>
                <li><a href="#">首饰箱</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">洗漱用具</a></li>
                <li><a href="#">牙刷</a></li>
                <li><a href="#">浴室架</a></li>
                <li><a href="#">浴帽</a></li>
                <li><a href="#">肥皂盒</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">清洁用具</a></li>
                <li><a href="#">拖把</a></li>
                <li><a href="#">垃圾桶</a></li>
                <li><a href="#">搓衣板</a></li>
                <li><a href="#">海绵擦</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">锅、煲</a></li>
                <li><a href="#">压力锅</a></li>
                <li class="on"><a href="#">奶锅</a></li>
                <li><a href="#">汤锅</a></li>
                <li><a href="#">炒锅</a></li>
              </ul>
            </div>
            <div class="last_much">
              <ul clear_he>
                <li><a href="#">杯具</a></li>
                <li><a href="#">USB新奇特</a></li>
                <li><a href="#">酒具</a></li>
                <li><a href="#">餐具</a></li>
                <li><a href="#">牙刷套</a></li>
                <li class="on"><a href="#">手摇咖啡机</a></li>
                <li><a href="#">家用温度计</a></li>
                <li><a href="#">纸巾盒</a></li>
                <li><a href="#">衣钩、挂钩</a></li>
              </ul>
            </div>
            <div class="logo">
              <img src="/lianshuomai/Public/Home/img/logo/nike.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/jifeante.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/adidas.jpg" alt=""/>
            </div>
          </div>
        </div>
        <div class="style1">
          <div class="style1_left lf">
            <b>食品美食</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/food.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much">
              <ul class="bold">
                <li><a href="#">厨房用具</a></li>
                <li><a href="#">碗具</a></li>
                <li><a href="#">果盘</a></li>
                <li><a href="#">菜板</a></li>
                <li><a href="#">厨用刀</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">居家日用</a></li>
                <li><a href="#">照明电筒</a></li>
                <li><a href="#">熨烫板</a></li>
                <li><a href="#">体重秤</a></li>
                <li><a href="#">温度计</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">收纳用具</a></li>
                <li><a href="#">收纳箱</a></li>
                <li><a href="#">收纳层架</a></li>
                <li><a href="#">储物挂袋</a></li>
                <li><a href="#">首饰箱</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">洗漱用具</a></li>
                <li><a href="#">牙刷</a></li>
                <li><a href="#">浴室架</a></li>
                <li><a href="#">浴帽</a></li>
                <li><a href="#">肥皂盒</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">清洁用具</a></li>
                <li><a href="#">拖把</a></li>
                <li><a href="#">垃圾桶</a></li>
                <li><a href="#">搓衣板</a></li>
                <li><a href="#">海绵擦</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">锅、煲</a></li>
                <li><a href="#">压力锅</a></li>
                <li class="on"><a href="#">奶锅</a></li>
                <li><a href="#">汤锅</a></li>
                <li><a href="#">炒锅</a></li>
              </ul>
            </div>
            <div class="last_much">
              <ul clear_he>
                <li><a href="#">杯具</a></li>
                <li><a href="#">USB新奇特</a></li>
                <li><a href="#">酒具</a></li>
                <li><a href="#">餐具</a></li>
                <li><a href="#">牙刷套</a></li>
                <li class="on"><a href="#">手摇咖啡机</a></li>
                <li><a href="#">家用温度计</a></li>
                <li><a href="#">纸巾盒</a></li>
                <li><a href="#">衣钩、挂钩</a></li>
              </ul>
            </div>
            <div class="logo">
              <img src="/lianshuomai/Public/Home/img/logo/lianpinuz.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/xiannongle.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/goldal.jpg" alt=""/>
            </div>
          </div>
        </div>
      </div>
      <div class="light" id="floor3">
        <div class="style1">
          <div class="style1_left lf">
            <b>数码家电</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/rBQKyVdjUXKAVN1WAABHkJ1LXCU479.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much">
              <ul class="bold">
                <li><a href="#">厨房用具</a></li>
                <li><a href="#">碗具</a></li>
                <li><a href="#">果盘</a></li>
                <li><a href="#">菜板</a></li>
                <li><a href="#">厨用刀</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">居家日用</a></li>
                <li><a href="#">照明电筒</a></li>
                <li><a href="#">熨烫板</a></li>
                <li><a href="#">体重秤</a></li>
                <li><a href="#">温度计</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">收纳用具</a></li>
                <li><a href="#">收纳箱</a></li>
                <li><a href="#">收纳层架</a></li>
                <li><a href="#">储物挂袋</a></li>
                <li><a href="#">首饰箱</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">洗漱用具</a></li>
                <li><a href="#">牙刷</a></li>
                <li><a href="#">浴室架</a></li>
                <li><a href="#">浴帽</a></li>
                <li><a href="#">肥皂盒</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">清洁用具</a></li>
                <li><a href="#">拖把</a></li>
                <li><a href="#">垃圾桶</a></li>
                <li><a href="#">搓衣板</a></li>
                <li><a href="#">海绵擦</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">锅、煲</a></li>
                <li><a href="#">压力锅</a></li>
                <li class="on"><a href="#">奶锅</a></li>
                <li><a href="#">汤锅</a></li>
                <li><a href="#">炒锅</a></li>
              </ul>
            </div>
            <div class="last_much">
              <ul clear_he>
                <li><a href="#">杯具</a></li>
                <li><a href="#">USB新奇特</a></li>
                <li><a href="#">酒具</a></li>
                <li><a href="#">餐具</a></li>
                <li><a href="#">牙刷套</a></li>
                <li class="on"><a href="#">手摇咖啡机</a></li>
                <li><a href="#">家用温度计</a></li>
                <li><a href="#">纸巾盒</a></li>
                <li><a href="#">衣钩、挂钩</a></li>
              </ul>
            </div>
            <div class="logo">
              <img src="/lianshuomai/Public/Home/img/logo/apple.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/samsung.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/meizu.jpg" alt=""/>
            </div>
          </div>
        </div>
        <div class="style1">
          <div class="style1_left lf">
            <b>童装玩具</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/dnvJvFaEzbuAQ0eyAABPA5HWnOw867.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much1">
              <ul class="bold">
                <li><a href="#">套件市场</a></li>
                <li><a href="#">四件套</a></li>
                <li><a href="#">多件套</a></li>
                <li><a href="#">枕套</a></li>
                <li><a href="#">被套</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">家居软饰</a></li>
                <li><a href="#">照片墙</a></li>
                <li><a href="#">沙发套</a></li>
                <li><a href="#">布艺绣品</a></li>
                <li><a href="#">地毯地垫</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">婴童家纺</a></li>
                <li><a href="#">婴童枕芯</a></li>
                <li class="on"><a href="#">婴童蚊帐</a></li>
                <li><a href="#">婴童毛毯</a></li>
                <li><a href="#">床围</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">被芯类</a></li>
                <li><a href="#">毛巾被</a></li>
                <li><a href="#">羊绒被</a></li>
                <li><a href="#">羽绒被</a></li>
                <li><a href="#">蚕丝被</a></li>
              </ul>
            </div>
            <div class="last_much1">
              <ul clear_he>
                <li><a href="#">花草保健枕</a></li>
                <li><a href="#">微波炉手套</a></li>
                <li><a href="#">浴帘</a></li>
                <li><a href="#">窗帘</a></li>
                <li><a href="#">装饰画</a></li>
                <li class="on1"><a href="#">棉毯</a></li>
                <li><a href="#">干发帽</a></li>
                <li><a href="#">孕妇枕</a></li>
                <li><a href="#">擦手巾</a></li>
                <li><a href="#">竹炭枕</a></li>
              </ul>
            </div>
            <div class="logo1 lf">
              <img src="/lianshuomai/Public/Home/img/logo/beiens.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/balabala.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/dishini.jpg" alt=""/>
            </div>
          </div>
        </div>
      </div>
      <div class="light" id="floor4">
        <div class="style1">
          <div class="style1_left lf">
            <b>鞋靴/箱包</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/dnvJvFaEzfWAWW_YAABCB_C0xRM953.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much">
              <ul class="bold">
                <li><a href="#">厨房用具</a></li>
                <li><a href="#">碗具</a></li>
                <li><a href="#">果盘</a></li>
                <li><a href="#">菜板</a></li>
                <li><a href="#">厨用刀</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">居家日用</a></li>
                <li><a href="#">照明电筒</a></li>
                <li><a href="#">熨烫板</a></li>
                <li><a href="#">体重秤</a></li>
                <li><a href="#">温度计</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">收纳用具</a></li>
                <li><a href="#">收纳箱</a></li>
                <li><a href="#">收纳层架</a></li>
                <li><a href="#">储物挂袋</a></li>
                <li><a href="#">首饰箱</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">洗漱用具</a></li>
                <li><a href="#">牙刷</a></li>
                <li><a href="#">浴室架</a></li>
                <li><a href="#">浴帽</a></li>
                <li><a href="#">肥皂盒</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">清洁用具</a></li>
                <li><a href="#">拖把</a></li>
                <li><a href="#">垃圾桶</a></li>
                <li><a href="#">搓衣板</a></li>
                <li><a href="#">海绵擦</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">锅、煲</a></li>
                <li><a href="#">压力锅</a></li>
                <li class="on"><a href="#">奶锅</a></li>
                <li><a href="#">汤锅</a></li>
                <li><a href="#">炒锅</a></li>
              </ul>
            </div>
            <div class="last_much">
              <ul clear_he>
                <li><a href="#">杯具</a></li>
                <li><a href="#">USB新奇特</a></li>
                <li><a href="#">酒具</a></li>
                <li><a href="#">餐具</a></li>
                <li><a href="#">牙刷套</a></li>
                <li class="on"><a href="#">手摇咖啡机</a></li>
                <li><a href="#">家用温度计</a></li>
                <li><a href="#">纸巾盒</a></li>
                <li><a href="#">衣钩、挂钩</a></li>
              </ul>
            </div>
            <div class="logo">
              <img src="/lianshuomai/Public/Home/img/logo/searovski.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/daphne.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/dao.jpg" alt=""/>
            </div>
          </div>
        </div>
        <div class="style1">
          <div class="style1_left lf">
            <b>女装/男装</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/rBQKyVdjUYmAbexyAABcjcvqDh4518.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much1">
              <ul class="bold">
                <li><a href="#">套件市场</a></li>
                <li><a href="#">四件套</a></li>
                <li><a href="#">多件套</a></li>
                <li><a href="#">枕套</a></li>
                <li><a href="#">被套</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">家居软饰</a></li>
                <li><a href="#">照片墙</a></li>
                <li><a href="#">沙发套</a></li>
                <li><a href="#">布艺绣品</a></li>
                <li><a href="#">地毯地垫</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">婴童家纺</a></li>
                <li><a href="#">婴童枕芯</a></li>
                <li class="on"><a href="#">婴童蚊帐</a></li>
                <li><a href="#">婴童毛毯</a></li>
                <li><a href="#">床围</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">被芯类</a></li>
                <li><a href="#">毛巾被</a></li>
                <li><a href="#">羊绒被</a></li>
                <li><a href="#">羽绒被</a></li>
                <li><a href="#">蚕丝被</a></li>
              </ul>
            </div>
            <div class="last_much1">
              <ul clear_he>
                <li><a href="#">花草保健枕</a></li>
                <li><a href="#">微波炉手套</a></li>
                <li><a href="#">浴帘</a></li>
                <li><a href="#">窗帘</a></li>
                <li><a href="#">装饰画</a></li>
                <li class="on1"><a href="#">棉毯</a></li>
                <li><a href="#">干发帽</a></li>
                <li><a href="#">孕妇枕</a></li>
                <li><a href="#">擦手巾</a></li>
                <li><a href="#">竹炭枕</a></li>
              </ul>
            </div>
            <div class="logo1 lf">
              <img src="/lianshuomai/Public/Home/img/logo/only.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/jackjones.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/lachapelle.jpg" alt=""/>
            </div>
          </div>
        </div>
      </div>
      <div class="light" id="floor5">
        <div class="style1">
          <div class="style1_left lf">
            <b>机械五金</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/dnvJvFaEzk2AGpw-AABHHJX1ngk735.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much">
              <ul class="bold">
                <li><a href="#">厨房用具</a></li>
                <li><a href="#">碗具</a></li>
                <li><a href="#">果盘</a></li>
                <li><a href="#">菜板</a></li>
                <li><a href="#">厨用刀</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">居家日用</a></li>
                <li><a href="#">照明电筒</a></li>
                <li><a href="#">熨烫板</a></li>
                <li><a href="#">体重秤</a></li>
                <li><a href="#">温度计</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">收纳用具</a></li>
                <li><a href="#">收纳箱</a></li>
                <li><a href="#">收纳层架</a></li>
                <li><a href="#">储物挂袋</a></li>
                <li><a href="#">首饰箱</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">洗漱用具</a></li>
                <li><a href="#">牙刷</a></li>
                <li><a href="#">浴室架</a></li>
                <li><a href="#">浴帽</a></li>
                <li><a href="#">肥皂盒</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">清洁用具</a></li>
                <li><a href="#">拖把</a></li>
                <li><a href="#">垃圾桶</a></li>
                <li><a href="#">搓衣板</a></li>
                <li><a href="#">海绵擦</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">锅、煲</a></li>
                <li><a href="#">压力锅</a></li>
                <li class="on"><a href="#">奶锅</a></li>
                <li><a href="#">汤锅</a></li>
                <li><a href="#">炒锅</a></li>
              </ul>
            </div>
            <div class="last_much">
              <ul clear_he>
                <li><a href="#">杯具</a></li>
                <li><a href="#">USB新奇特</a></li>
                <li><a href="#">酒具</a></li>
                <li><a href="#">餐具</a></li>
                <li><a href="#">牙刷套</a></li>
                <li class="on"><a href="#">手摇咖啡机</a></li>
                <li><a href="#">家用温度计</a></li>
                <li><a href="#">纸巾盒</a></li>
                <li><a href="#">衣钩、挂钩</a></li>
              </ul>
            </div>
            <div class="logo">
              <img src="/lianshuomai/Public/Home/img/logo/feibo.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/huaquan.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/maidi.jpg" alt=""/>
            </div>
          </div>
        </div>
        <div class="style1">
          <div class="style1_left lf">
            <b>照明电子</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/rBQKyVdjUZyAHZYeAABgSAxyGno147.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much1">
              <ul class="bold">
                <li><a href="#">套件市场</a></li>
                <li><a href="#">四件套</a></li>
                <li><a href="#">多件套</a></li>
                <li><a href="#">枕套</a></li>
                <li><a href="#">被套</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">家居软饰</a></li>
                <li><a href="#">照片墙</a></li>
                <li><a href="#">沙发套</a></li>
                <li><a href="#">布艺绣品</a></li>
                <li><a href="#">地毯地垫</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">婴童家纺</a></li>
                <li><a href="#">婴童枕芯</a></li>
                <li class="on"><a href="#">婴童蚊帐</a></li>
                <li><a href="#">婴童毛毯</a></li>
                <li><a href="#">床围</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">被芯类</a></li>
                <li><a href="#">毛巾被</a></li>
                <li><a href="#">羊绒被</a></li>
                <li><a href="#">羽绒被</a></li>
                <li><a href="#">蚕丝被</a></li>
              </ul>
            </div>
            <div class="last_much1">
              <ul clear_he>
                <li><a href="#">花草保健枕</a></li>
                <li><a href="#">微波炉手套</a></li>
                <li><a href="#">浴帘</a></li>
                <li><a href="#">窗帘</a></li>
                <li><a href="#">装饰画</a></li>
                <li class="on1"><a href="#">棉毯</a></li>
                <li><a href="#">干发帽</a></li>
                <li><a href="#">孕妇枕</a></li>
                <li><a href="#">擦手巾</a></li>
                <li><a href="#">竹炭枕</a></li>
              </ul>
            </div>
            <div class="logo1 lf">
              <img src="/lianshuomai/Public/Home/img/logo/opp.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/feilipu.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/ximenzi.jpg" alt=""/>
            </div>
          </div>
        </div>
      </div>
      <div class="light" id="floor6">
        <div class="style1">
          <div class="style1_left lf">
            <b>美妆日化</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/tool.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much">
              <ul class="bold">
                <li><a href="#">厨房用具</a></li>
                <li><a href="#">碗具</a></li>
                <li><a href="#">果盘</a></li>
                <li><a href="#">菜板</a></li>
                <li><a href="#">厨用刀</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">居家日用</a></li>
                <li><a href="#">照明电筒</a></li>
                <li><a href="#">熨烫板</a></li>
                <li><a href="#">体重秤</a></li>
                <li><a href="#">温度计</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">收纳用具</a></li>
                <li><a href="#">收纳箱</a></li>
                <li><a href="#">收纳层架</a></li>
                <li><a href="#">储物挂袋</a></li>
                <li><a href="#">首饰箱</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">洗漱用具</a></li>
                <li><a href="#">牙刷</a></li>
                <li><a href="#">浴室架</a></li>
                <li><a href="#">浴帽</a></li>
                <li><a href="#">肥皂盒</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">清洁用具</a></li>
                <li><a href="#">拖把</a></li>
                <li><a href="#">垃圾桶</a></li>
                <li><a href="#">搓衣板</a></li>
                <li><a href="#">海绵擦</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">锅、煲</a></li>
                <li><a href="#">压力锅</a></li>
                <li class="on"><a href="#">奶锅</a></li>
                <li><a href="#">汤锅</a></li>
                <li><a href="#">炒锅</a></li>
              </ul>
            </div>
            <div class="last_much">
              <ul clear_he>
                <li><a href="#">杯具</a></li>
                <li><a href="#">USB新奇特</a></li>
                <li><a href="#">酒具</a></li>
                <li><a href="#">餐具</a></li>
                <li><a href="#">牙刷套</a></li>
                <li class="on"><a href="#">手摇咖啡机</a></li>
                <li><a href="#">家用温度计</a></li>
                <li><a href="#">纸巾盒</a></li>
                <li><a href="#">衣钩、挂钩</a></li>
              </ul>
            </div>
            <div class="logo">
              <img src="/lianshuomai/Public/Home/img/logo/chanel.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/lancome.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/loreal.jpg" alt=""/>
            </div>
          </div>
        </div>
        <div class="style1">
          <div class="style1_left lf">
            <b>行政办公</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/dnvJvFaEzsGActX4AAAydUXpUMM663.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much">
              <ul class="bold">
                <li><a href="#">厨房用具</a></li>
                <li><a href="#">碗具</a></li>
                <li><a href="#">果盘</a></li>
                <li><a href="#">菜板</a></li>
                <li><a href="#">厨用刀</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">居家日用</a></li>
                <li><a href="#">照明电筒</a></li>
                <li><a href="#">熨烫板</a></li>
                <li><a href="#">体重秤</a></li>
                <li><a href="#">温度计</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">收纳用具</a></li>
                <li><a href="#">收纳箱</a></li>
                <li><a href="#">收纳层架</a></li>
                <li><a href="#">储物挂袋</a></li>
                <li><a href="#">首饰箱</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">洗漱用具</a></li>
                <li><a href="#">牙刷</a></li>
                <li><a href="#">浴室架</a></li>
                <li><a href="#">浴帽</a></li>
                <li><a href="#">肥皂盒</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">清洁用具</a></li>
                <li><a href="#">拖把</a></li>
                <li><a href="#">垃圾桶</a></li>
                <li><a href="#">搓衣板</a></li>
                <li><a href="#">海绵擦</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">锅、煲</a></li>
                <li><a href="#">压力锅</a></li>
                <li class="on"><a href="#">奶锅</a></li>
                <li><a href="#">汤锅</a></li>
                <li><a href="#">炒锅</a></li>
              </ul>
            </div>
            <div class="last_much">
              <ul clear_he>
                <li><a href="#">杯具</a></li>
                <li><a href="#">USB新奇特</a></li>
                <li><a href="#">酒具</a></li>
                <li><a href="#">餐具</a></li>
                <li><a href="#">牙刷套</a></li>
                <li class="on"><a href="#">手摇咖啡机</a></li>
                <li><a href="#">家用温度计</a></li>
                <li><a href="#">纸巾盒</a></li>
                <li><a href="#">衣钩、挂钩</a></li>
              </ul>
            </div>
            <div class="logo">
              <img src="/lianshuomai/Public/Home/img/logo/deliwn.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/chenguang.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/wuyinliangpin.jpg" alt=""/>
            </div>
          </div>
        </div>
      </div>
      <div class="light" id="floor7">
        <div class="style1">
          <div class="style1_left lf">
            <b>汽车用品</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/dnvJvFaEzxaAWAfyAABHjZggXu4362.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much">
              <ul class="bold">
                <li><a href="#">厨房用具</a></li>
                <li><a href="#">碗具</a></li>
                <li><a href="#">果盘</a></li>
                <li><a href="#">菜板</a></li>
                <li><a href="#">厨用刀</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">居家日用</a></li>
                <li><a href="#">照明电筒</a></li>
                <li><a href="#">熨烫板</a></li>
                <li><a href="#">体重秤</a></li>
                <li><a href="#">温度计</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">收纳用具</a></li>
                <li><a href="#">收纳箱</a></li>
                <li><a href="#">收纳层架</a></li>
                <li><a href="#">储物挂袋</a></li>
                <li><a href="#">首饰箱</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">洗漱用具</a></li>
                <li><a href="#">牙刷</a></li>
                <li><a href="#">浴室架</a></li>
                <li><a href="#">浴帽</a></li>
                <li><a href="#">肥皂盒</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">清洁用具</a></li>
                <li><a href="#">拖把</a></li>
                <li><a href="#">垃圾桶</a></li>
                <li><a href="#">搓衣板</a></li>
                <li><a href="#">海绵擦</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">锅、煲</a></li>
                <li><a href="#">压力锅</a></li>
                <li class="on"><a href="#">奶锅</a></li>
                <li><a href="#">汤锅</a></li>
                <li><a href="#">炒锅</a></li>
              </ul>
            </div>
            <div class="last_much">
              <ul clear_he>
                <li><a href="#">杯具</a></li>
                <li><a href="#">USB新奇特</a></li>
                <li><a href="#">酒具</a></li>
                <li><a href="#">餐具</a></li>
                <li><a href="#">牙刷套</a></li>
                <li class="on"><a href="#">手摇咖啡机</a></li>
                <li><a href="#">家用温度计</a></li>
                <li><a href="#">纸巾盒</a></li>
                <li><a href="#">衣钩、挂钩</a></li>
              </ul>
            </div>
            <div class="logo">
              <img src="/lianshuomai/Public/Home/img/logo/yuma.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/miqilin.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/kashida.jpg" alt=""/>
            </div>
          </div>
        </div>
        <div class="style1">
          <div class="style1_left lf">
            <b>电工电气</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/dnvJvFaEzzyAZWxyAABDXA8qNgw831.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much">
              <ul class="bold">
                <li><a href="#">厨房用具</a></li>
                <li><a href="#">碗具</a></li>
                <li><a href="#">果盘</a></li>
                <li><a href="#">菜板</a></li>
                <li><a href="#">厨用刀</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">居家日用</a></li>
                <li><a href="#">照明电筒</a></li>
                <li><a href="#">熨烫板</a></li>
                <li><a href="#">体重秤</a></li>
                <li><a href="#">温度计</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">收纳用具</a></li>
                <li><a href="#">收纳箱</a></li>
                <li><a href="#">收纳层架</a></li>
                <li><a href="#">储物挂袋</a></li>
                <li><a href="#">首饰箱</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">洗漱用具</a></li>
                <li><a href="#">牙刷</a></li>
                <li><a href="#">浴室架</a></li>
                <li><a href="#">浴帽</a></li>
                <li><a href="#">肥皂盒</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">清洁用具</a></li>
                <li><a href="#">拖把</a></li>
                <li><a href="#">垃圾桶</a></li>
                <li><a href="#">搓衣板</a></li>
                <li><a href="#">海绵擦</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">锅、煲</a></li>
                <li><a href="#">压力锅</a></li>
                <li class="on"><a href="#">奶锅</a></li>
                <li><a href="#">汤锅</a></li>
                <li><a href="#">炒锅</a></li>
              </ul>
            </div>
            <div class="last_much">
              <ul clear_he>
                <li><a href="#">杯具</a></li>
                <li><a href="#">USB新奇特</a></li>
                <li><a href="#">酒具</a></li>
                <li><a href="#">餐具</a></li>
                <li><a href="#">牙刷套</a></li>
                <li class="on"><a href="#">手摇咖啡机</a></li>
                <li><a href="#">家用温度计</a></li>
                <li><a href="#">纸巾盒</a></li>
                <li><a href="#">衣钩、挂钩</a></li>
              </ul>
            </div>
            <div class="logo">
              <img src="/lianshuomai/Public/Home/img/logo/boshi.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/deli.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/shengli.jpg" alt=""/>
            </div>
          </div>
        </div>
      </div>
      <div class="light" id="floor8">
        <div class="style1">
          <div class="style1_left lf">
            <b>纺织皮革</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/dnvJvFaEz1mABqRlAAA3YKa7GFQ161.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much">
              <ul class="bold">
                <li><a href="#">厨房用具</a></li>
                <li><a href="#">碗具</a></li>
                <li><a href="#">果盘</a></li>
                <li><a href="#">菜板</a></li>
                <li><a href="#">厨用刀</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">居家日用</a></li>
                <li><a href="#">照明电筒</a></li>
                <li><a href="#">熨烫板</a></li>
                <li><a href="#">体重秤</a></li>
                <li><a href="#">温度计</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">收纳用具</a></li>
                <li><a href="#">收纳箱</a></li>
                <li><a href="#">收纳层架</a></li>
                <li><a href="#">储物挂袋</a></li>
                <li><a href="#">首饰箱</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">洗漱用具</a></li>
                <li><a href="#">牙刷</a></li>
                <li><a href="#">浴室架</a></li>
                <li><a href="#">浴帽</a></li>
                <li><a href="#">肥皂盒</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">清洁用具</a></li>
                <li><a href="#">拖把</a></li>
                <li><a href="#">垃圾桶</a></li>
                <li><a href="#">搓衣板</a></li>
                <li><a href="#">海绵擦</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">锅、煲</a></li>
                <li><a href="#">压力锅</a></li>
                <li class="on"><a href="#">奶锅</a></li>
                <li><a href="#">汤锅</a></li>
                <li><a href="#">炒锅</a></li>
              </ul>
            </div>
            <div class="last_much">
              <ul clear_he>
                <li><a href="#">杯具</a></li>
                <li><a href="#">USB新奇特</a></li>
                <li><a href="#">酒具</a></li>
                <li><a href="#">餐具</a></li>
                <li><a href="#">牙刷套</a></li>
                <li class="on"><a href="#">手摇咖啡机</a></li>
                <li><a href="#">家用温度计</a></li>
                <li><a href="#">纸巾盒</a></li>
                <li><a href="#">衣钩、挂钩</a></li>
              </ul>
            </div>
            <div class="logo">
              <img src="/lianshuomai/Public/Home/img/logo/yuanl.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/cixifang.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/yunduo.jpg" alt=""/>
            </div>
          </div>
        </div>
        <div class="style1">
          <div class="style1_left lf">
            <b>橡塑/化工</b>
            <a href="#"><img src="/lianshuomai/Public/Home/img/logo/shipin.jpg"/></a>
          </div>
          <div class="style1_right">
            <div class="much1">
              <ul class="bold">
                <li><a href="#">套件市场</a></li>
                <li><a href="#">四件套</a></li>
                <li><a href="#">多件套</a></li>
                <li><a href="#">枕套</a></li>
                <li><a href="#">被套</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">家居软饰</a></li>
                <li><a href="#">照片墙</a></li>
                <li><a href="#">沙发套</a></li>
                <li><a href="#">布艺绣品</a></li>
                <li><a href="#">地毯地垫</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">婴童家纺</a></li>
                <li><a href="#">婴童枕芯</a></li>
                <li class="on"><a href="#">婴童蚊帐</a></li>
                <li><a href="#">婴童毛毯</a></li>
                <li><a href="#">床围</a></li>
              </ul>
              <ul class="bold">
                <li><a href="#">被芯类</a></li>
                <li><a href="#">毛巾被</a></li>
                <li><a href="#">羊绒被</a></li>
                <li><a href="#">羽绒被</a></li>
                <li><a href="#">蚕丝被</a></li>
              </ul>
            </div>
            <div class="last_much1">
              <ul clear_he>
                <li><a href="#">花草保健枕</a></li>
                <li><a href="#">微波炉手套</a></li>
                <li><a href="#">浴帘</a></li>
                <li><a href="#">窗帘</a></li>
                <li><a href="#">装饰画</a></li>
                <li class="on1"><a href="#">棉毯</a></li>
                <li><a href="#">干发帽</a></li>
                <li><a href="#">孕妇枕</a></li>
                <li><a href="#">擦手巾</a></li>
                <li><a href="#">竹炭枕</a></li>
              </ul>
            </div>
            <div class="logo1 lf">
              <img src="/lianshuomai/Public/Home/img/logo/mage.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/dong.jpg" alt=""/>
              <img src="/lianshuomai/Public/Home/img/logo/betters.jpg" alt=""/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--固定定位导航栏-->
  <div id="fix">
     <div class="fix_nav">快速导航</div>
     <ul id="left-nav">
       <li><a href="#floor1"><i>日用百货</i></a><a href="#floor1"><i>家纺家饰</i></a></li>
       <li><a href="#floor2"><i>运动户外</i></a><a href="#floor2"><i>食品美食</i></a></li>
       <li><a href="#floor3"><i>数码家电</i></a><a href="#floor3"><i>童装玩具</i></a></li>
       <li><a href="#floor4"><i>鞋靴箱包</i></a><a href="#floor4"><i>女装男装</i></a></li>
       <li><a href="#floor5"><i>机械五金</i></a><a href="#floor5"><i>照明电子</i></a></li>
       <li><a href="#floor6"><i>美妆日化</i></a><a href="#floor6"><i>行政办公</i></a></li>
       <li><a href="#floor7"><i>汽车用品</i></a><a href="#floor7"><i>电工电气</i></a></li>
       <li><a href="#floor8"><i>纺织皮革</i></a><a href="#floor8"><i>橡塑化工</i></a></li>
     </ul>
  </div>
  <!--页面结尾-->
  <input type="hidden" id="hid" value="<?php echo ($_SESSION['username']); ?>"/>
  <div id="nice">
    <div class="nice_box"></div>
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
  <script src="/lianshuomai/Public/Home/js/jquery-1.11.3.js"></script>
  <script src="/lianshuomai/Public/Home/js/index.js"></script>
  <script src="/lianshuomai/Public/Home/js/aj_add.js"></script>
  <script type="text/javascript">
  	var ob = document.getElementById('loginout');
  	var hob = document.getElementById('hid');
  	var lob = document.getElementById('logid');
  	var res = hob.value;
  	if(!res){
  		ob.innerHTML='<a href="/lianshuomai/index.php/Home/Login/login"><i></i>登录</a><a href="/lianshuomai/index.php/Home/User/user"><i></i>注册</a>';
  	}else{
  		lob.innerText= res + ",您好!";
  		ob.innerHTML='<a href="/lianshuomai/index.php/Home/Login/loginout"><i></i>退出</a><a href="/lianshuomai/index.php/Home/Personal/index"><i></i>中心</a>';
  	}
  </script>
</body>
</html>