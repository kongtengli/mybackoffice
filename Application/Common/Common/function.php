<?php
function debug($name,$value){
    D('Debug')->saveData($name,$value);
}