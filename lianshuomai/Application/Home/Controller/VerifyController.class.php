<?php
namespace Home\Controller;
use Think\Controller;
class VerifyController extends Controller{
	function show(){
		$verify = new \Think\Verify();
		$verify->length=4;
		$verify->imageW=180;
		$verify->entry();
	}
}
