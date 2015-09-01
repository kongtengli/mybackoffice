<?php

namespace Admin\Controller;

class MenuController extends BaseController {

    private $model;
    public $config_page = array(
        'controller_title' => '页面page',
        'add_title'=>'添加菜单',
        'update_title'=>'删除菜单',
        'del_title'=>'删除菜单'        
    );
    
    public function _initialize() {
        $this->model = D('Menu');
    }

    public function menuList() {
        $data = $this->model->menuList();
        $this->assign('data', $data);
        $this->assign('lang_data',$this->config_page);
        $this->display();
    }

    public function addMenu() {
        if (IS_POST) {
            $data = I('post.');
            debug('menu',$data);
            if (!empty($data)){
                $newMenu['name'] = $data['name'];
                $newMenu['url'] = $data['url'];
                $newMenu['active'] = $data['active'];
                $newMenu['createTime'] = time();
                $this->model->add($newMenu);
                $this->redirect('MenuList');
            } else {
                $this->error('账号或密码不符合规范', 'addMenu', 3);
            }
        }
        $this->display();
    }

    public function updateMenu() {
        if (IS_POST) {
            $data = I('post.');
            if ($data['password'] === $data['password2'] && preg_match('/^[a-z_#0-9]{6,16}/u', $data['password'])) {
                $newMenu['id'] = $data['id'];
                $newMenu['password'] = md5($data['password']);
                $newMenu['createTime'] = time();
                $this->model->save($newMenu);
                $this->redirect('MenuList');
            } else {
                $this->error('密码', 'menuList', 3);
            }
        }
        $id = I('get.id');
        $data = $this->model->getOneById($id);
        $this->assign('data', $data);
        $this->assign('operation', 'update');
        $this->display(T('Menuistrator/addMenu'));
    }
    
    public function delMenu($id){
        if($id!=1&&$this->model->delete($id)){
            $this->redirect('Menuistrator/MenuList');
        }else{
            $this->error('不能删除管理员账号或其他错误');
        }
    }
}
