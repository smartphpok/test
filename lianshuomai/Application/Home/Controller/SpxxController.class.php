<?php
namespace Home\Controller;
use Think\Controller;
class SpxxController extends Controller{
	function splb(){
		//呈现商品列表信息,及分页
		$ob = M('spxx');
		$num = $ob->count();
		$pageSize = 6;
		$page = new \Think\Page($num,$pageSize);
		$start = $page->firstRow;
		$arr = $ob->limit("$start,$pageSize")->select();
		$pageStr = $page->show();
		$this->assign('arr',$arr);
		$this->assign('pageStr',$pageStr);
		$this->display();
	}
	function spxx(){
		$pid = isset($_GET['pid'])?$_GET['pid']:0;
		if($pid==0){
			$this->error('请选择商品',U("Spxx/splb"),3);
			exit();
		}
		$ob = M('spxx');
		$arr = $ob->where("pid=$pid")->find();
		$this->assign('arr',$arr);
		$this->display();
	}
}






