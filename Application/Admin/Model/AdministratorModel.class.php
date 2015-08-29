<?php
namespace Admin\Model;
use Think\Model;
class AdministratorModel extends Model {
    public function adminList(){
       return $this->select();
    }
    public function validData($data){
        $map['name'] = $data['user'];
        $map['password'] = md5($data['password']);
        if($this->where($map)->find()){
            return true;
        }else{
            return false;
        }
    }    
}