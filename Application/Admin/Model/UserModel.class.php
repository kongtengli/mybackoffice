<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
    public function validData($data){
        $map['name'] = $data['user'];
        $map['password'] = md5($data['password']);
        debug('map',$map);
        if($this->where($map)->find()){
            debug('sql',$this->_sql());
            return true;
        }else{
            debug('sql',$this->_sql());
            return false;
        }
    }
}