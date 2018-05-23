<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function __construct(){
		parent::__construct();
		$this->CheckLogin();
	}
	
	public function CheckLogin(){
		if(empty($_SESSION['name'])){
			$this->error('未登录',U('Admin/Login/login'),2);
		}
	}
    public function view($view){
		$getU = CONTROLLER_NAME.'/'.ACTION_NAME;
		$this->assign('getU',$getU);
		$this->display('public/_meta');
		$this->display('public/_header');
		$this->display('public/_menu');
		$this->display($view);
		$this->display('public/_footer');
    }
	
}