<?php
namespace Admin\Controller;
use Think\Controller;


class CommonController extends Controller{
	public function _initialize(){
		 if(!session('?uid')){
			$this->redirect('Login/login');
		}
	}

}