<?php
namespace Home\Controller;
class IndexController extends PublicController {
    public function index() {
    	if ($_SESSION['user']) {

    		exit;
    	}else{
    		if ($_COOKIE['user']) {

    			exit;
    		}
    	}
    	$data = M('web_cof')->select();
    	$this->assign('title',$data[0]['title']);
    	$this->assign('keywords',$data[0]['keywords']);
    	$this->assign('des',$data[0]['des']);
    	$this->assign('logo',$data[0]['logo']);
    	$this->assign('color','#f90');
        $this->display();
    }

    

}