<?php

namespace Admin\Controller;

use Think\Controller;

class AdministratorController extends Controller {
    private $model; 
    
    public function _initialize(){
        $this->model = D('Administrator');
    }
    
    public function AdminList() {
        $data = $this->model->adminList();
        $this->assign('data',$data);
        $this->display();
    }

}
