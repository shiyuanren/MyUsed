<?php
namespace Admin\Controller;
use Think\Controller;


class CommonCtroller extends Controller{
	public function _initialize(){
		if(!isset(session("uid"))){
			$this->redirect('User/login');
		}
	}

}