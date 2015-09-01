<?php

namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function index() {
        if (IS_AJAX) {
            if ($this->validData()) {
                $userName = I('post.user');
                session('user.name',$userName);
                $result = array('errno' => '0');                
                $this->ajaxReturn($result);
            } else {
                $result = array('errno' => '1');
                $this->ajaxReturn($result);
            }
        }
        $this->display();
    }

    public function validData() {
        $data = I('post.');
        if (empty($data)) {
            return false;
        } else {
            debug('data',$data );
            return D('Administrator')->validData($data);
        }
    }

}
