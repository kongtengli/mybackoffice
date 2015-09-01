<?php

namespace Admin\Controller;

class AdministratorController extends BaseController {

    private $model;

    public function _initialize() {
        $this->model = D('Administrator');
    }

    public function AdminList() {
        $data = $this->model->adminList();
        $this->assign('data', $data);
        $this->display();
    }

    public function addAdmin() {
        if (IS_POST) {
            $data = I('post.');
            if ($data['password'] === $data['password2'] && preg_match('/^[a-z]{3,16}/u', $data['name']) && preg_match('/^[a-z_#0-9]{6,16}/u', $data['password'])) {
                $newAdmin['name'] = $data['name'];
                $newAdmin['password'] = $data['password'];
                $newAdmin['createTime'] = time();
                $this->model->add($newAdmin);
                $this->redirect('AdminList');
            } else {
                $this->error('账号或密码不符合规范', 'addAdmin', 3);
            }
        }
        $this->display();
    }

    public function updateAdmin() {
        if (IS_POST) {
            $data = I('post.');
            if ($data['password'] === $data['password2'] && preg_match('/^[a-z_#0-9]{6,16}/u', $data['password'])) {
                $newAdmin['id'] = $data['id'];
                $newAdmin['password'] = md5($data['password']);
                $newAdmin['createTime'] = time();
                $this->model->save($newAdmin);
                $this->redirect('AdminList');
            } else {
                $this->error('密码', 'adminList', 3);
            }
        }
        $id = I('get.id');
        $data = $this->model->getOneById($id);
        $this->assign('data', $data);
        $this->assign('operation', 'update');
        $this->display(T('Administrator/addAdmin'));
    }
    
    public function delAdmin($id){
        if($id!=1&&$this->model->delete($id)){
            $this->redirect('Administrator/AdminList');
        }else{
            $this->error('不能删除管理员账号或其他错误');
        }
    }

}
