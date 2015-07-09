<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->c = '产品管理';
    	$this->a = '分类列表';
    	$this->display('Index/index');
    }
}
