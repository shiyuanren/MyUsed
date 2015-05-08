<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	
    public function index(){  	
    	$this->display();
    }
    
    public function verify_c(){
        $verify = new \Think\Verify();
        $verify->length=4;
        $verify->entry(1);
    }

    function check_verify($code, $id = ''){
    	$verify = new \Think\Verify();
    	return $verify->check($code, $id);
    }
    
    public function login(){
        if(IS_POST){
            //$data = $_POST; // 不建议，安全问题，任何用户输入的数据都是不可靠的
            $data = I('post.');//I('get.')
            //dump($data);  //格式化的var_dump  


            $data['uname']=$data['username'];
            $data['upwd']=$data['upwd'];

            $user=D('User'); 
            $msg=$user->login($data);
            $this->ajaxReturn($msg);
        }else{
            $this->display();
        }
    	
   		//$this->show($msg);
    }
    public function register(){
    	if(IS_POST){   //是否提交数据
    		$data=I('post.');
            /*$verify = I('param.verify','');
            if(!$this->check_verify($verify)){
                $info=array(
                    'status'=>0,
                    'msg'=>"验证码错误",
                );
                $this->ajaxReturn($info);
            }*/
    		//$this->show(D('User')->register($data));
    		$user=D('User');
    		$this->ajaxReturn($user->register());
    	}else{
    		$this->display();
    	}
    }


    public function mybooks(){

        if(session('?user_id')){
            $uid=session('user_id');
            $mybooks=D('Goods')->getGoodsByUser($uid);
            $this->assign('booksList',$mybooks);
            $this->display();
        }else{
            $this->redirect('login');
        }

        
    }
    
   
}