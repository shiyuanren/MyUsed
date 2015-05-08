<?php
namespace Admin\Model;
use Think\Model;
class CategoryModel extends Model {


	protected $_validate=array(
			array('category_name','','分类名已存在',0,'unique',3),
			array('category_name','require','名称必须存在'),
	);

	protected $_auto=array(
		array('parent_id','0'),
		array('create_time','time',1,'function'),
		array('update_time','time',3,'function'),
	);

	public function addCate(){

		
		$info=array(
			'status'=>1,
			'msg'=>'添加成功',
			'url'=>'lists',
		);

		/*$category_name=I('category_name','');
		$description=I('description','');*/

		if(!$this->create()){
			return array('status'=>0,'msg'=>$this->getError(),'url'=>'lists',);
		}else{
			$this->add();	
		}
		return $info;

	}

	public function editCategory($data){


		if(!$this->create($data,2)){
			
			return array('status'=>0,'msg'=>$this->getError(),);
		}else{
			$this->where('id=%d',$data['id'])->save();
			return array('status'=>1,'msg'=>'插入成功',);
		}
	}

	public function getLists(){

		$page=I('p',1,'int');

		$limit=5;
		$count=$this->count();

		$lists=$this->order('create_time')->page($page.','.$limit)->select();

		$Page=new \Think\Page($count,$limit);
		$show=$Page->show();

		return array(
			'page'=>$show,
			'list'=>$lists,
		);
	}

}