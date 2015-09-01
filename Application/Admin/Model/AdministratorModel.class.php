<?php
namespace Admin\Model;
class AdministratorModel extends BaseModel {
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