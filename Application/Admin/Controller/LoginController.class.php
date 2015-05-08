<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){

    	header("Location:lists");
    }

    public function login(){
        if(IS_POST){
            $name=I('name','');
            $pwd=I('pwd','');
            $rs=M('User')->where("uname='%s' and upwd='%s'",array($name,md5($pwd)))->find();

//dump($rs);die;
            if($rs){
                session('uid',$rs['id']);
                $this->redirect('User/lists');
            }else{
                $this->error('登录失败');
            }
        }else{
            session('uid',null); // 删除name
            $this->display();
        }      
    }
}