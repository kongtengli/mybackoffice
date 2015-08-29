<?php
namespace Admin\Model;
use Think\Model;
class DebugModel extends Model {
    public function saveData($name,$value){
        $data['name'] =  $name;
        $data['value'] = dump($value,false);
        $this->add($data);
    }
}