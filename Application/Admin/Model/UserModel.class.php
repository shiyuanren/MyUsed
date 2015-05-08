<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
    public function index(){
    	header("Location:lists");
    }

     public function getUserList(){
        
     	$page=I('p',1,"int");
     	$limit=5;

     	$count=$this->count();
    	$Page=new \Think\Page($count,$limit);
    	$show=$Page->show();
     	$data=$this->order('create_time DESC')->page($page.','.$limit)->select();

    	return array("lists"=>$data,"page"=>$show);
    }

    public function getUserById($uid){
        $userInfo = $this->where('id=%d',$uid)->find();
        return $userInfo;
    }

    public function getUserByKey($keyword){
        $map['uname']=array('like','%'.$keyword.'%');
        $userInfo = $this->where($map)->find();
        // print_r($userInfo);
        return $userInfo;
    }
}