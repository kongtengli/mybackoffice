<?php
namespace Admin\Model;
class MenuModel extends BaseModel {
    public function menuList(){
       return $this->select();
    }
}