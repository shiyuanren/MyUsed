<?php
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model {

    
    public function index(){
    	header("Location:lists");
    }

    public function addGoods($data){

        $data['create_time']=time();
        $data['update_time']=time();
        $data['status']=0;
        $this->add($data);
    }

     public function getGoodsList(){
     	
        $page=I('p',1,"int");
     	$limit=20;

     	$count=$this->count();
    	$Page=new \Think\Page($count,$limit);
    	$show=$Page->show();
     	$data=$this->order('create_time DESC')->page($page.','.$limit)->select();

    	return array("lists"=>$data,"page"=>$show);
    }

    public function eidtGoods($id,$data){
        $data['update_time']=time();
        if($this->where('id=%d',$id)->save($data)){
            return true;
        }else{
            return false;
        }
    }
}