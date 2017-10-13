<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head lang="en">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>用户注册页面</title>
		<link rel="stylesheet" href="/lianshuomai/Public/Home/css/reset.css" />
		<link rel="stylesheet" href="/lianshuomai/Public/Home/css/home.css" />
		<link rel="stylesheet" href="/lianshuomai/Public/Home/css/login.css" />
		<style>
			#main {
				height: 660px;
				background: url('/lianshuomai/Public/Home/images/loginbanner.jpg') repeat-y;
				position: relative;
			}
			
			#login {
				width: 700px;
				height: 520px;
				left: 30%;
				background-color: #f5f5f5;
			}
			
			body,
			dl,
			dt,
			dd,
			div,
			form {
				padding: 0;
				margin: 0;
			}
			
			#main {
				width: 100%;
				margin: 0 auto;
				padding-top: 50px;
			}
			
			.bg {
				/*background-image:url(../images/register_bg.gif);*/
				background-repeat: no-repeat;
				width: 6px;
				height: 6px;
			}
			
			.bg_top_left {
				background-position: 0px 0px;
			}
			
			.bg_top_right {
				background-position: 0px -6px;
			}
			
			.bg_end_left {
				background-position: 0px -12px;
			}
			
			.bg_end_right {
				background-position: 0px -18px;
			}
			
			.bg_top {
				border-top: solid 1px #666666;
			}
			
			.bg_end {
				border-bottom: solid 1px #666666;
			}
			
			.bg_left {
				border-left: solid 1px #666666;
			}
			
			.bg_right {
				border-right: solid 1px #666666;
			}
			
			.content {
				padding: 10px;
			}
			
			.inputs {
				border: solid 1px #a4c8e0;
				width: 150px;
				height: 12px;
				padding-top: 6px;
				margin-bottom: 10px;
			}
			
			.content div {
				float: left;
				font-size: 12px;
				color: #000;
			}
			
			dl {
				clear: both;
			}
			
			dt,
			dd {
				float: left;
			}
			
			dt {
				width: 130px;
				text-align: right;
				font-size: 12px;
				height: 30px;
				line-height: 30px;
			}
			
			dd {
				font-size: 12px;
				color: #666666;
				width: 180px;
			}
			/*当鼠标放到文本框时，提示文本的样式*/
			
			.import_prompt {
				border: solid 1px #ffcd00;
				background-color: #ffffda;
				padding-left: 5px;
				padding-right: 5px;
				line-height: 20px;
			}
			/*当文本框内容不符合要求时，提示文本的样式*/
			
			.error_prompt {
				border: solid 1px #ff3300;
				height: 22px;
				background-color: #fff2e5;
				background-image: url(/lianshuomai/Public/Home/images/no.png);
				background-repeat: no-repeat;
				/*background-position:0px 2px;*/
				padding: 2px 5px 0px 25px;
				line-height: 20px;
			}
			/*当文本框内容输入正确时，提示文本的样式*/
			
			.ok_prompt {
				border: solid 1px #01be00;
				background-color: #e6fee4;
				background-image: url(/lianshuomai/Public/Home/images/yes.png);
				background-repeat: no-repeat;
				background-position: 1px 2px;
				padding: 2px 5px 0px 25px;
				line-height: 20px;
			}
			
			.begin {
				background-repeat: no-repeat;
				background-position: 1px 2px;
				padding: 2px 5px 0px 25px;
				line-height: 20px;
			}
			
			dd {
				margin-top: 6px;
			}
			
			table {
				line-height: 10px;
			}
		</style>
	</head>

	<body>
		<div id="header">
			<div class="add">
				<div class="lf">
					<a href="/lianshuomai/index.php/Home/User/index">
						<img src="/lianshuomai/Public/Home/images/ls_logonew.png" alt="" />
					</a>
					<span style="color: #3094EC;">新用户注册</span>
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
		<div id="regist">
			<form action="/lianshuomai/index.php/Home/User/save" method="post" id="formd">
				<div id='main'>
					<div id='login'>
						<div class="header">
							<!--<h3>新用户注册</h3>-->
							<img src="/lianshuomai/Public/Home/images/registlogo.jpg" />
							<a href="/lianshuomai/index.php/Home/Index/index">返回首页</a>
						</div>
						<div class="main">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" height="400">
								<tr>
									<td class="bg bg_top_left"></td>
									<td class="bg_top"></td>
									<td class="bg bg_top_right"></td>
								</tr>
								<tr>
									<td class="bg_left"></td>
									<td class="content">
										<form action="test.php" method="post" name="myform" onsubmit="return checkForm()">
											<dl>
												<dt>通行证用户名：</dt>
												<dd><input type="text" id="userName" name="username" class="inputs userWidth" onfocus="userNameFocus()" onblur="userNameBlur()" /></dd>
												<div id="userNameId" class="begin"><span style="color: red;">*</span>必填</div>
											</dl>
											<dl>
												<dt>登录密码：</dt>
												<dd><input type="password" id="pwd" name="password" class="inputs" onfocus="pwdFocus()" onblur="pwdBlur()" /></dd>
												<div id="pwdId" class="begin"><span style="color: red;">*</span>必填</div>
											</dl>
											<dl>
												<dt>重复登录密码：</dt>
												<dd><input type="password" id="repwd" class="inputs" onblur="repwdBlur()" /></dd>
												<div id="repwdId" class="begin"><span style="color: red;">*</span>必填</div>
											</dl>
											<dl>
												<dt>性别：</dt>
												<dd><input name="sex" type="radio" value="1" checked="checked" />男 <input name="sex" type="radio" value="2" />女 </dd>
											</dl>
											<dl>
												<dt>真实姓名：</dt>
												<dd><input type="text" id="realName" name="realname" class="inputs" onblur="realNameBlur()" /></dd>
												<div id="realNameId" class="begin"><span style="color: red;">*</span>必填</div>
											</dl>
											<dl>
												<dt>昵称：</dt>
												<dd><input type="text" id="nickName" name="nick" class="inputs" onfocus="nickNameFocus()" onblur="nickNameBlur()" /></dd>
												<div id="nickNameId" class="begin"><span style="color: red;">*</span>必填</div>
											</dl>
											<dl>
												<dt>关联手机号：</dt>
												<dd><input type="text" id="tel" name="phone" class="inputs" onfocus="telFocus()" onblur="telBlur()" /></dd>
												<div id="telId" class="begin"><span style="color: red;">*</span>必填</div>
											</dl>
											<dl>
												<dt>保密邮箱：</dt>
												<dd><input type="text" id="email" name="email" class="inputs" onfocus="emailFocus()" onblur="emailBlur()" /></dd>
												<div id="emailId" class="begin"><span style="color: red;">*</span>必填</div>
											</dl>
											<dl>
												<dt></dt>
												<dd><input id='btn' type="image" src="/lianshuomai/Public/Home/images/tijiao.jpg" /></dd>
											</dl>
										</form>
									</td>
									<td class="bg_right"></td>
								</tr>
								<tr>
									<td class="bg bg_end_left"></td>
									<td class="bg_end"></td>
									<td class="bg bg_end_right"></td>
								</tr>

							</table>
							<a href="/lianshuomai/index.php/Home/Login/login">已有账号登陆</a>
						</div>
			</form>
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
	<script src="/lianshuomai/Public/jquery/jquery-1.8.3.js">
	</script>
	<script type="text/javascript">
		
		/*通过ID获取HTML对象的通用方法，使用$代替函数名称*/
		function get(elementId) {
			return document.getElementById(elementId);
		}

		/*当鼠标放在通行证用户名文本框时，提示文本及样式*/
		function userNameFocus() {
			var userNameId = get("userNameId");
			userNameId.className = "import_prompt";
			userNameId.innerHTML = "1、由字母、数字、下划线、点、减号组成<br/>2、只能以数字、字母开头或结尾，且长度为4-18";
		}

		/*当鼠标离开通行证用户名文本框时，提示文本及样式*/
		function userNameBlur() {
			var userName = get("userName");
			var userNameId = get("userNameId");
			var reg = /^[0-9a-zA-Z][0-9a-zA-Z_.-]{2,16}[0-9a-zA-Z]$/;
			if(userName.value == "") {
				userNameId.className = "error_prompt";
				userNameId.innerHTML = "通行证用户名不能为空，请输入通行证用户名";
				return false;
			}
			if(reg.test(userName.value) == false) {
				userNameId.className = "error_prompt";
				userNameId.innerHTML = "1、由字母、数字、下划线、点、减号组成<br/>2、只能以数字、字母开头或结尾，且长度为4-18";
				return false;
			}else if(reg.test(userName.value) == true){
				var dada = userName.value;
				//异步检测用户名是否重名
				$.ajax({
					type:"post",
					url:"/lianshuomai/index.php/Home/User/check",
					data:{'username':dada},
					success:function(ree){
						if(ree=='ok'){
							userNameId.className = "ok_prompt";
							userNameId.innerHTML = "通行证用户名输入正确";
							return true;
						}else{
							userNameId.className = "error_prompt";
							userNameId.innerHTML = "用户名已被注册";
							return false;
						}
					}
				});
				return true;
			}
		}
		
		/*当鼠标放在密码文本框时，提示文本及样式*/
		function pwdFocus() {
			var pwdId = get("pwdId");
			pwdId.className = "import_prompt";
			pwdId.innerHTML = "密码长度为6-16";
		}
		
		/*当鼠标离开密码文本框时，提示文本及样式*/
		function pwdBlur() {
			var pwd = get("pwd");
			var pwdId = get("pwdId");
			if(pwd.value == "") {
				pwdId.className = "error_prompt";
				pwdId.innerHTML = "密码不能为空，请输入密码";
				return false;
			}
			if(pwd.value.length < 6 || pwd.value.length > 16) {
				pwdId.className = "error_prompt";
				pwdId.innerHTML = "密码长度为6-16";
				return false;
			}
			pwdId.className = "ok_prompt";
			pwdId.innerHTML = "密码输入正确";
			return true;
		}

		/*当鼠标离开重复密码文本框时，提示文本及样式*/
		function repwdBlur() {
			var repwd = get("repwd");
			var pwd = get("pwd");
			var repwdId = get("repwdId");
			if(repwd.value == "") {
				repwdId.className = "error_prompt";
				repwdId.innerHTML = "重复密码不能为空，请重复输入密码";
				return false;
			}
			if(repwd.value != pwd.value) {
				repwdId.className = "error_prompt";
				repwdId.innerHTML = "两次输入的密码不一致，请重新输入";
				return false;
			}
			repwdId.className = "ok_prompt";
			repwdId.innerHTML = "两次密码输入正确";
			return true;
		}

		function realNameBlur() {
			var realName = get("realName");
			var reg = /^[\u4e00-\u9fa5]+$/;
			if(realName.value == '') {
				realNameId.className = "error_prompt";
				realNameId.innerHTML = "请输入中文真实姓名";
				return false;
			}
			if(reg.test(realName.value) == false) {
				realNameId.className = "error_prompt";
				realNameId.innerHTML = "姓名必须是中文";
				return false;
			} else {
				realNameId.className = "ok_prompt";
				realNameId.innerHTML = "真实姓名可用";
				return true;
			}
			//      var name = document.getElementById("realName").value;  
		}
		/*当鼠标放在昵称文本框时，提示文本及样式*/
		function nickNameFocus() {
			var nickNameId = get("nickNameId");
			nickNameId.className = "import_prompt";
			nickNameId.innerHTML = "1、包含汉字、字母、数字、下划线以及@!#$%&*特殊字符<br/>2、长度为4－20个字符<br/>3、一个汉字占两个字符";
		}

		/*当鼠标离开昵称文本框时，提示文本及样式*/
		function nickNameBlur() {
			var nickName = get("nickName");
			var nickNameId = get("nickNameId");
			var k = 0;
			var reg = /^([\u4e00-\u9fa5]|\w|[@!#$%&*])+$/; // 匹配昵称
			var chinaReg = /[\u4e00-\u9fa5]/g; //匹配中文字符
			if(nickName.value == "") {
				nickNameId.className = "error_prompt";
				nickNameId.innerHTML = "昵称不能为空，请输入昵称";
				return false;
			}
			if(reg.test(nickName.value) == false) {
				nickNameId.className = "error_prompt";
				nickNameId.innerHTML = "只能由汉字、字母、数字、下划线以及@!#$%&*特殊字符组成";
				return false;
			}

			var len = nickName.value.replace(chinaReg, "ab").length; //把中文字符转换为两个字母，以计算字符长度
			if(len < 4 || len > 20) {
				nickNameId.className = "error_prompt";
				nickNameId.innerHTML = "1、长度为4－20个字符<br/>2、一个汉字占两个字符";
				return false;
			}

			nickNameId.className = "ok_prompt";
			nickNameId.innerHTML = "昵称输入正确";
			return true;
		}

		/*当鼠标放在关联手机号文本框时，提示文本及样式*/
		function telFocus() {
			var telId = get("telId");
			telId.className = "import_prompt";
			telId.innerHTML = "1、手机号码以13，15，18开头<br/>2、手机号码由11位数字组成";
		}

		/*当鼠标离开关联手机号文本框时，提示文本及样式*/
		function telBlur() {
			var tel = get("tel");
			var telId = get("telId");
			var reg = /^(13|15|18)\d{9}$/;
			if(tel.value == "") {
				telId.className = "error_prompt";
				telId.innerHTML = "关联手机号码不能为空，请输入关联手机号码";
				return false;
			}
			if(reg.test(tel.value) == false) {
				telId.className = "error_prompt";
				telId.innerHTML = "关联手机号码输入不正确，请重新输入";
				return false;
			}
			telId.className = "ok_prompt";
			telId.innerHTML = "关联手机号码输入正确";
			return true;
		}

		/*当鼠标放在保密邮箱文本框时，提示文本及样式*/
		function emailFocus() {
			var emailId = get("emailId");
			emailId.className = "import_prompt";
			emailId.innerHTML = "请输入您常用的电子邮箱";
		}

		/*当鼠标离开保密邮箱文本框时，提示文本及样式*/
		function emailBlur() {
			var email = get("email");
			var emailId = get("emailId");
			var reg = /^\w+@\w+(\.[a-zA-Z]{2,3}){1,2}$/;
			if(email.value == "") {
				emailId.className = "error_prompt";
				emailId.innerHTML = "保密邮箱不能为空，请输入保密邮箱";
				return false;
			}
			if(reg.test(email.value) == false) {
				emailId.className = "error_prompt";
				emailId.innerHTML = "保密邮箱格式不正确，请重新输入";
				return false;
			}
			emailId.className = "ok_prompt";
			emailId.innerHTML = "保密邮箱输入正确";
			return true;
		}
		/*表单提交时验证表单内容输入的有效性*/
		btn.onclick = function(e){
			e.preventDefault();
			var flagUserName = userNameBlur();
			var flagPwd = pwdBlur();
			var flagRepwd = repwdBlur();
			var realName = realNameBlur();
			var flagNickName = nickNameBlur();
			var flagTel = telBlur();
			var flagEmail = emailBlur();
			if(flagUserName == true && flagPwd == true && flagRepwd == true && flagNickName == true && flagTel == true & flagEmail == true & realName == true) {
				var data = $("#formd").serialize();
				console.log(123);
				$.ajax({					
					type:"post",
					url:"/lianshuomai/index.php/Home/User/save",
					data:data,
					success:function(re){
						if(re=='ok'){
							alert('注册成功,请登陆您的账号');
							window.location.href="/lianshuomai/index.php/Home/Login/login";
						}else{
							alert('登陆失败');
						}
					}
				});
			} else {
				return false;
			}
		}
		
	</script>

</html>