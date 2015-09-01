<?php
namespace Admin\Widget;
use Think\Controller;

class MenuWidget extends Controller{
    private $model;
    public function _initialize(){
        $this->model = D('Menu');
    }
    public function menu(){
        debug('menuhere','I\'m here');
        $data = $this->model->menuList();
        $this->assign('data',$data);
        $this->display('CommonMenu:menu');
    }
}