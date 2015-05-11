<?php
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model {
    public function index(){
    	header("Location:lists");
    }

     public function addGoods($data){

        $data['create_time']=time();
        $data['update_time']=time();
        $data['status']=0;
        return $this->add($data);
    }



     public function getGoodsList(){

        $page=I('p',1,"int");
     	$limit=12;

     	$count=$this->count();
    	$Page=new \Think\Page($count,$limit);
    	$show=$Page->show();
     	$data=$this->order('create_time DESC')->page($page.','.$limit)->select();

        $count=count($data);

        for($i=0;$i<$count;$i++){
            $pid=$data[$i]['id'];
            $images=M('Image')->where('product_id=%d',$pid)->getField('image_id,image');
            //dump($images);
            $data[$i]['images']=$images;
            $data[$i]['avater']=str_replace('/s_','/',$data[$i]['photo']);
            //dump($data[$i]['avater']);
            $data[$i]['images_count']=count($images);
        }

       // die;




    	return array("lists"=>$data,"page"=>$show);
    }

    public function getGoodsById($id){

    	$data = $this->where('id=%d',$id)->find();

    	if(count($data)<1){
    		return array(
    		'status'=> 0,
    		'info' => $this->getError(),
    		);
    	}
    	return array(
    		'status'=> 1,
    		'info' => $data,
    		);
    }

    public function getGoodsByUser($uid){
        $page=I('p',1,'int');
        $limit=10;

        $count=$this->where('uid=%d',$uid)->count();//两条where查询
        $data=$this->where('uid=%d',$uid)->order('create_time DESC')->page($page.','.$limit)->select();

        $Page=new \Think\Page($count,$limit);
        $show=$Page->show();


        return array(
            'books'=> $data,
            'page' => $show,
        );

    }

    public function searchByUser($user_id,$keyword){
      $where['product_name']=array('like','%'.$keyword.'%');
      $where['description']=array('like','%'.$keyword.'%');
      $where['seller']=$keyword;
      $where['_logic']='or';
      $map['_complex']=$where;
      $map['uid']=$user_id;

      $page=I('p',1,'int');
      $limit=10;

      $count=$this->where($map)->count();
      $data=$this->where($map)->order('create_time DESC')->page($page.','.$limit)->select();

      $Page=new \Think\Page($count,$limit);
      $show=$Page->show();



      dump($this->getLastSql());


      return array(
          'books'=> $data,
          'page' => $show,
      );
    }


}
