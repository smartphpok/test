<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
	function user(){
		$this->display();
	}
	function save(){
		$ob = M("User");
		if($_POST){
			$insertRe = $ob->data($_POST)->add();
			if($insertRe){
				//保存数据库成功
				echo 'ok';
				$username = $_POST['username'];
				$obj = M('cartid');
				$uid = $ob->field('uid')->where("username='$username'")->find();
				$obj->add($uid);
			}else{
				//保存数据库失败
				echo 'ontok';
			}
		}
	}
	function check(){
		$ob = M('User');
		$re = $ob->where($_POST)->find();
		if(!$re){
			//用户名不重名
			echo 'ok';
		}else{
			//用户名重名
			echo 'notok';
		}
	}
}
