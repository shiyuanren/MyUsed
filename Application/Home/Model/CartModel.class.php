<?php
namespace Home\Model;
use Think\Model;
class CartModel extends Model {

	public function addToCart($uid,$id,$num){

		
        $goods[$id]=$num;
        //$cart=session('cart');
        $cart=unserialize($this->getCart($uid));
       
        if($cart==''){
            //session('cart',$goods);
            $cart=$goods;
        }else{
            $cart=$goods+$cart;
        }
        $data['info']= serialize($cart);
        $data['uid']=$uid;
        $data['update_time']=time();

        //session('cart',$cart);
        return $this->add($data,array(),true);
    }

    public function getCart($uid){
    	return $this->where('uid=%d',$uid)->getField("info");
    }

    public function cartToOrder($uid){

        $products_in_cart=$this->where("uid=%d",$uid)->getField("info");

        if(count($products_in_cart)<=0){
            $info = array('status'=>2,'msg'=>'购物车是空的',);
            return $info;
        }
        

        $cart = unserialize($products_in_cart);
        $id_arr=array();
        foreach($cart as $key=>$value){
            $id_arr[]=$key;
        }
        //$ids = implode(',',$id_arr);
        $map['id']=array('in',$id_arr);
        $goods = D('Goods')->where($map)->field('id,product_name,price')->select();

        $total_price=0;
        $order_data=array();

        foreach($goods as $key=>$val){
            $id = $val['id'];
            $total_price+=$val['price']*$cart[$id];  
        }

        $order_data['uid']=$uid;;
        $order_data['price']=$total_price;
        $order_data['pay']='';
        $order_data['status']=0;
        $order_data['create_time']=time();
        $order_data['pay_time']=time();
        //数据插入订单表
        $order_id=D('Order')->add($order_data);

        //数据插入订单商品表
        if($order_id){
            foreach ($goods as $key => $val) {
                $order_goods_data=array();
                $order_goods_data['product_id']=$val['id'];
                $order_goods_data['order_id']=$order_id;
                $order_goods_data['product_name']=$val['product_name'];

                $id = $val['id'];
                $order_goods_data['price']=$val['price']*$cart[$id];

                $op_id=D('Order_product')->add($order_goods_data);
            }

            if($op_id){
                $this->where("uid=%d",$uid)->delete();
            }
        }
        
       
        $info = array('status'=>1,'msg'=>'结算完成','url'=>U('/Home'));
        return $info;
    }
}