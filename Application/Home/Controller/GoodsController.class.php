<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {

    public function detail(){
    	$id=I('id',0,'int');
    	$info = D('Goods')->getGoodsById($id);

    	$this->assign('goods_info',$info);
    	$this->display();
    }

    public function addToCart(){
    	

        $id=I('id',0,'int');
        $num=I('num','0','int');
        $uid=session('user_id');

        if($uid){    
            //已登录处理 
            D('Cart')->addToCart($uid,$id,$num);           
        }else{
            //未登录处理,放入session
            $goods[$id]=$num;
            $cart=session('cart');
           
            if($cart==''){
                //session('cart',$goods);
                $cart=$goods;
            }else{
                $cart=$goods+$cart;    
            }    
            session('cart',$cart);
        }
        
        $this->ajaxReturn(array(
                'status'=>1,
                'info' => "加入购物车成功",
            ));   
    }

    public function uploadOne(){

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
        $info= $upload->upload();

       if(!$info){
            $this->error($upload->getError());
        }else{
            //$this->success('上传成功');

            $image = new \Think\Image(); 
            

            foreach($info as $file){
                $photo_info=$file['savepath'].$file['savename'];
                $thumb_info=$file['savepath'].'s_'.$file['savename'];

                //$path='thumb/'.$file['savename'];
                $image->open('./Uploads/'.$photo_info);
                // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
                $image->thumb(262.5,175,\Think\Image::IMAGE_THUMB_FILLED)->save('./Uploads/'.$thumb_info);

                $image->thumb(539,300,\Think\Image::IMAGE_THUMB_FILLED)->save('./Uploads/'.$photo_info);
            }
        }
        return array('thumb'=>$thumb_info,
                    'avater'=>$photo_info,

            );
    }

    public function release(){


        if(IS_POST){
            $data=array();

           // $image_Info=$this->uploadOne();
           // $data['photo']=$image_Info['thumb'];
            $product=I('product');
            dump($product);

            $product=I('seller');
            dump($product);

            die;

            $data['product_name']=I('product_name',0,'');
            $data['description']=I('description');
            $data['price']=I('price',0,'float');
            $data['quantity']=I('quantity',0,'int');
            $data['category_id']=I('select',0,'int');
            $data['uid']=session('user_id');

           

            $product_id=D('Goods')->addGoods($data);

            //header("Location:".U('release',array('pid'=>$product_id)));

            return $product_id;
        }else{
            $category_list=M('Category')->getField('id,category_name');
            //print_r($category_list);

            $this->assign('category_lists',$category_list);
            $this->display();
        }

    }


    public function uploadImgs(){   
        if(IS_POST)  {
                $this->uploadImages();
        }else{
             $this->display();
        }
           
    }

    public function uploadImages(){

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
        $info= $upload->upload();

        $data['product_id']=I("get.pid");
        dump($data['product_id']);
       if(!$info){
            $this->error($upload->getError());
        }else{
            //$this->success('上传成功');
            $image = new \Think\Image(); 
            foreach($info as $file){
                $data['image']=$file['savepath'].$file['savename'];

                $image->open('./Uploads/'.$data['image']);
                // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
                $image->thumb(539,300,\Think\Image::IMAGE_THUMB_FILLED)->save('./Uploads/'.$data['image']);

                M('Image')->add($data);
         }
        }
    }
}