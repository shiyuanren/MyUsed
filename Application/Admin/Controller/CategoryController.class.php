<?php
namespace Admin\Controller;
//use Think\Controller;
class CategoryController extends CommonController {


	public function addCategory(){
		if(IS_POST){

			$info = D('Category')->addCate();
			$this->ajaxReturn($info);
				

		}else{
			$this->display();
		}	
	}

	public function lists(){
		$category_lists = D('Category')->getLists();

		$this->assign('category_lists',$category_lists);
		$this->display();
	}

	public function deleteCategories(){

		$ids=I('ids');
		$info=array(
			'status'=>'1',
			'msg'=>'删除成功',
			'url'=>U('lists'),
		);


		foreach ($ids as $id) {
			if(!$this->deleteById($id)){
				$info=array(
					'status'=>'0',
					'msg'=>'删除失败',
					'url'=>U('lists'),
				);
				break;
			}
		}
		$this->ajaxReturn($info);
	}

	public function deleteCategory(){
		$id=I('get.id');

		if($this->deleteById($id)){
			//$this->success("删除成功",U('lists'));
			$this->redirect('lists');
		}else{
			$this->error('删除失败');
		}
 
	}

	protected function deleteById($id){
		return M('Category')->where('id=%d',$id)->delete();
	}


	public function editCategory(){

		$id=I('get.id');

		if(!IS_POST){
			$category_info=M('Category')->where('id=%d',$id)->find();
			//dump($category_info);die;
			$this->assign('cinfo',$category_info);
			$this->display();
		}else{
			$data['id']=$id;
			$data['category_name']=I('post.category_name','');
			$data['description']=I('post.desp','');

			$info=D('Category')->editCategory($data);
			if($info['status']==1){
				$this->redirect('lists');
			}else{
				$this->error($info['msg']);
			}
		}
		
	}

}