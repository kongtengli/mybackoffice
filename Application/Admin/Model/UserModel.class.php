<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
    public function validData($data){
        $map['userName'] = $data['user'];
        $map['password'] = md5($data['password']);
        if($this->where($map)->find()){
            return true;
        }else{
            return false;
        }
    }
}