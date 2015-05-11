<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model {

	//protected $patchValidate = true;
	protected $_map =array(
			'username' => 'uname',
			'pwd' => 'upwd',
	);
	protected $_validate = array(
      	array('uname','/^[\d\w_-]{4,20}$/','用户名不合法！'), //数据字段为create的参数字段名称（多数情况下为数据表字段名,映射后的字段名）
      	array('uname','','用户名已被注册！',0,'unique'),
      	array('email','','用户名已被注册！',0,'unique'),
      	array('upwd','/^[\d\w]{4,10}$/','密码必须是4-10位，且只能为英文或数字！'), // 在新增的时候验证name字段是否唯一
      	array('repwd','upwd','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致,
      	//array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式
   );

	protected $_auto = array(
		array('upwd','md5',3,'function'),  //md5并不安全
		array('ip','get_client_ip',1,'function'),
		array('create_time','time',1,'function'),
		array('last_time','time',3,'function'),
	);

	public function register(){//数据验证、操作数据相关在Model中
		$info=array(
					'status'=>1,
					'msg'=>"注册成功",
					'url'=>U('mybooks'),
			);

		if (!$this->create()){
     	// 对data数据进行验证
     		//$info['msg']=$this->getError();
     		$info=array(
					'status'=>0,
					'msg'=>$this->getError(),
					'url'=>U(''),
			);
		}else{
     	// 验证通过 可以进行其他数据操作
			//$this->upwd=md5($this->upwd);
			//$this->ip = $_SERVER['REMOTE_ADDR'];
			//$this->last_time = NOW_TIME;
			$this->add();
		}
		return $info;
	}
	/**
	 *  简单描述
	 *  详细描述
	 *	@author
	 *	param array $data
	 *	return array $rs
	 */
	public function login($data){
		$info=array(
					'status'=>0,
					'msg'=>"登录失败",
					'url'=>U('/Home/Index/index'),
			);
		$data['upwd']=md5($data['upwd']);
		$rs=$this->where("uname='%s' AND upwd='%s'",array($data['uname'],$data['upwd']))->find();
		//echo $this->getLastSql();
		if(count($rs)>0){
			$info['status']=1;
			$info['msg']="登录成功";
			$info['url']=U('/Home/Index/index');
			session('user_id',$rs['id']);
			session('user_name',$rs['uname']);
		}

		//dump(session('user_id'));die;
		return $info;
	}
}
