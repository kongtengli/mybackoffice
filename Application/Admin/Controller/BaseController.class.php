<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function _initialize(){
        $user = session('user');
        if(empty($user)||empty($user['name'])){
            redirect('Login/index');
        }
    }
}