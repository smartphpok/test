<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends Controller{
	function check(){
		if(!$_SESSION['username']){
			echo 'notlogin';
		}else{
			$username = $_SESSION['username'];
			$ob = M('user');
			$uid = $ob->where("username='$username'")->find()['uid'];
			$obj = M('cartid');
			$cid = $obj->where("uid='$uid'")->find()['cid'];
			$pid = $_POST['pid'];
			$count = M('buycart')->field('count')->where(['pid'=>$pid])->find()['count'];
  			if($count){
  				M('buycart')->where(['pid'=>$pid])->save(['count'=>++$count]);
				echo 'ok';
  			}else{
  				M('buycart')->add(['bid'=>null,'cid'=>$cid,'pid'=>$pid,'count'=>1]);
				echo 'ok';
  			}
		}
	}
	function cart(){
		
		$username = $_SESSION['username'];
		$ob = M('user');
		$uid = $ob->where("username='$username'")->find()['uid'];
		$obj = M('cartid');
		$cid = $obj->where("uid='$uid'")->find()['cid'];
		
//		$arr = M('spxx')->join('buycart')->where("cid=".$cid)->select();
		//select n.id,n.title,t.tname from news as n join ntype as t on n.type=t.id where type=$tid.
		$where = "b.cid=$cid";
		
		$objj = M('buycart');

		$num = $objj->where("cid=$cid")->count();
		$pageSize = 5;
		$page = new \Think\Page($num,$pageSize);
		$start = $page->firstRow;
		//$arr = $objj->limit("$start,$pageSize")->select();
		$arr = M('buycart')->alias('b')
		->field("bid,count,spname,price")
		->join("spxx s on b.pid=s.pid")
		->where($where)
		->limit("$start,$pageSize")
		->select();
		$pageStr = $page->show();
		$this->assign('pageStr',$pageStr);
		$this->assign('arr',$arr);
		
		$this->display();
	}
	function delete(){
		$bid = isset($_POST['bid'])?$_POST['bid']:0;
		if($bid){
			$ob = M('buycart');
			$re = $ob->where("bid=$bid")->delete();
			if($re){
				echo 'ok';
			}else{
				echo 'false';
			}
		}else{
			echo 'not';
		}
	}
}











/*create table cart(
 * 		id int key auto_increment,
 * 		spname varchar(255) unique,
 * 		price varchar(255),
 * 		path varchar(255)
 * );
 * */