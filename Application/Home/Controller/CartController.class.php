<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends Controller {
	public function index(){
		//$this->show('购物车页面');

		$uid=session('user_id');
        if($uid){    
            //已登录处理
            $data = D('Cart')->where('uid=%d',$uid)->getField("info");
            $data = unserialize($data);
                     
        }else{
            //未登录处理
            $data = session('cart');
        }

       // dump($data);
        $this->assign('cart_data',$data);
        $this->display();
	}


    public function cartToOrder(){
        $uid=session('user_id');
        if(!$uid){    
            $info = array('status'=>0,'msg'=>'请登录','url'=>U('/Home/User/login'));
            $this->ajaxReturn($info);
       }

       $info = D('Cart')->cartToOrder($uid);
       $this->ajaxReturn($info);
    }
}