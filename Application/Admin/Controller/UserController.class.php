<?php
namespace Admin\Controller;
//use Think\Controller;
class UserController extends CommonController {
    public function index(){

    	header("Location:lists");
    }

     public function lists(){

        //dump("123");die;
     	$user_list = D('User')->getUserList();
     	$this->assign('user_list',$user_list);
        $this->display();
    }

   /* public function select(){
        $keyWord=I('search_user','');

        $this->assign('user_info',$userInfo);
        $this->display('detail');
        //Header('Location:'.U('Admin/User/detail/userInfo='.$userInfo));
    }*/

     public function detail(){

        $user=D('User');
        
        if(I('get.id',0,'int')){
            $uid=I('get.id',0,'int');
            $userInfo = $user->getUserById($uid);
        }else if(I('post.search_user','')){
            $keyWord=I('post.search_user','');
            $userInfo = $user->getUserByKey($keyWord);
        }

        $this->assign('userInfo',$userInfo);
        $this->display();
    }

    public function edit(){
    	if(IS_POST){
    		$data=array();
    		$data['uname']=I("post.uname","");
    		$data['upwd']=md5(I("post.upwd",""));
    		$uid=I("get.id",'','int');
    		M("user")->where('id=%d',$uid)->save($data);
    		header("Location:".U('User/lists'));
    	}else{
    		$uid=I("id",0,'int');
    		//dump($uid);
    		$user_info = M('User')->where('id=%d',$uid)->find();  //find得到一维索引数组，select得到多维数组
    		$this->assign('user',$user_info);
    		$this->display();
    	}

    }

    public function delete(){
    	$uid=I('id',0,'int');
    	M('User')->where('id=%d',$uid)->delete();
    	header("Location:".U('User/lists'));
    }


   /* public function login(){
        if(IS_POST){
            $name=I('name','');
            $pwd=I('pwd','');
            $rs=M('User')->where("uname='%s' and upwd='%s'",array($name,md5($pwd)))->select();

            //dump(count($rs));
            //die;
            if(count($rs)>0){
                header("Location:lists");
            }else{
                $this->error('登录失败');
            }
        }else{
            $this->display();
        }
    }*/
}
