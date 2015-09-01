<?php
namespace Admin\Model;
use Think\Model;
class DebugModel extends Model {
    public function saveData($name,$value){
        $data['name'] =  $name;
        ob_start();
        var_dump($value);
        $data['value'] = ob_get_contents();
        ob_clean();
        $this->add($data);
    }
}