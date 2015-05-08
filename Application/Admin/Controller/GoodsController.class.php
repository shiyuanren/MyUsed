<?php
namespace Admin\Controller;
//use Think\Controller;
class GoodsController extends CommonController {
//class GoodsController extends Controller {

	 public function lists(){
         
	 	$goods_list=D('Goods')->getGoodsList();
	 	$this->assign('goods_list',$goods_list);
        $this->display();
    }

    public function upload(){

       $config = array(
            'maxSize'    =>    3145728,
            'rootPath'   =>    './Uploads/',
            'savePath'   =>    '',
            'saveName'   =>    array('uniqid',''),
            'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
            'autoSub'    =>    true,
            'subName'    =>    array('date','Ymd'),
        );

        $upload = new \Think\Upload($config);
        $info=$upload->upload();

       if(!$info){
            $this->error($upload->getError());
        }else{
            //$this->success('上传成功');
              foreach($info as $file){
                $photo_info=$file['savepath'].$file['savename'];
             }
        }
        return $photo_info;
    }


    public function add(){
    	if(IS_POST){

    		$data=array();

    		$data['product_name']=I('product_name',0,'');
        $data['description']=I('description');
    		$data['price']=I('price',0,'float');
        $data['quantity']=I('quantity',0,'int');
        $data['category_id']=I('select',0,'int');
        $data['uid']=session('uid');

        $data['photo']=$this->upload();

    		D('Goods')->addGoods($data);

    		header("Location:".U('Goods/lists'));
    	}else{
            $category_list=M('Category')->getField('id,category_name');
            //print_r($category_list);

            $this->assign('category_lists',$category_list);
    		$this->display();
    	}
    }

    public function edit(){
    	$id=I("get.id",0,'int');
    	if(IS_POST){
    		//$data['id']= $id;
    		// $data['product_name']=I('post.product_name');
    		// $data['price']=I('post.price');
        $data=I('post.');
        $data['photo']=$this->upload();
        // dump($data);die;
    		if(D('Goods')->eidtGoods($id,$data)){
    			Header("Location:".U('lists'));
    		}else{
    			//...
    		}
    	}else{

         $category_list=M('Category')->getField('id,category_name');
            //print_r($category_list);

          $this->assign('category_lists',$category_list);

    		$goods=M('Goods')->where('id=%d',$id)->find();
    		$this->assign('goods',$goods);
    		$this->display();
    	}
    }

     public function delete(){
     	$id=I("get.id",0,'int');
     	if(M('Goods')->where('id=%d',$id)->delete()){
     		Header("Location:".U('lists'));
     	}else{
     		//..
     	}
     }

     public function details(){
        $id=I("get.id",0,'int');
        $info=M('Goods')->where("id=%d",$id)->find();

       // dump($info);die;
        $this->assign('info',$info);
        $this->display();
     }
}