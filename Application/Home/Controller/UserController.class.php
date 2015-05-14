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
            $data['upwd']=$data['password'];

            $user=D('User');
            $msg=$user->login($data);
            $this->ajaxReturn($msg);
        }else{
            $this->display();
        }

   		//$this->show($msg);
    }

		public function logout(){
			session('user_id',null);
			session('user_name',null);
			$this->redirect('login');
		}
    public function register(){
    	if(IS_POST){   //是否提交数据
    		$data=I('post.');
    		$user=D('User');

    		$msg = $user->register();

            if($msg['status']==0){
                $this->error($msg['msg']);

            }else{
                $this->redirect('mybooks');
            }
    	}else{
    		$this->display();
    	}
    }


    public function mybooks(){
			if(!session('?user_id')){
				$this->redirect('login');
			}

			$user_id=session('user_id');

			if(I('post.search_books')){
				$key=I('search_books','');
				$mybooks=D('Goods')->searchByUser($user_id,$key);
			}else{
				$mybooks=D('Goods')->getGoodsByUser($user_id);
			}
			$this->assign('booksList',$mybooks);
			$this->display();
    }

		public function userSearch(){
			if(session('?user_id')){
				$user_id=session('user_id');
				$key=I('search_books','');
				$books=D('Goods')->searchByUser($user_id,$key);
				//dump($books);die;
				$this->redirect('mybooks',array('booksList'=>$books));
			}else{
				$this->error("请登录");
			}
		}

    public function accouts(){


      if(IS_POST){
        // dump("123");die;
        $uid=session('user_id');
        // $data['uname']=I('nickname');
        $data['sex']=I('sex',0,'int');
        $data['email']=I('email');
        $data['seller']=I('seller');
        $data['phonenum']=I('phonenum');
        $data['wechat']=I('wechat');

        // dump($data);die;
        $info=D('User')->editAccout($uid,$data);
        $this->success("账户设置完成");

        // if($info['status']=='0'){
        //   $this->error($info['msg']);
        // }else{
        //   $this->success("账户设置完成");
        // }
      }else{
        $this->display();
      }
    }


}
