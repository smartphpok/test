<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
	function login(){
		$this->display();
	}
	function check(){
		$username = $_POST['lname'];
		$password = $_POST['lpwd'];
		$verifynum = $_POST['verify'];
		$verify = new \Think\Verify();
		if(!$verify->check($verifynum)){
			$this->error('验证码错误',U('Login/login'),3);
			exit();
		}
		$ob = M("user");
		$re = $ob->where("username='$username' and password='$password'")->find();
		if($re){
			//登陆成功
			//$this->success('登陆成功',U("Index/index"),3);
			session_start();
			$_SESSION['username'] = $username;
			echo 'ok';
		}else{
			echo 'notok';
			//$this->error('登陆失败',U("Login/login"),3);
		}
	}
	function loginout(){
		//session_start();
		session_destroy();
		$this->success('退出成功',U('Index/index'),3);
	}
}
