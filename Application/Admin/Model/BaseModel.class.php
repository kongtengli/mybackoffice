<?php
namespace Admin\Model;
use Think\Model;
class BaseModel extends Model {
    public function getOneById($id){
       $where = array('id'=>$id); 
       $return = $this->where($where)->find();
       return $return;
    }    
}