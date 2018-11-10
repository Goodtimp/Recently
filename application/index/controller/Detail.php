<?php
namespace app\Detail\controller;
use think\Controller;
class Detail extends Controller{
    public function detail(){
        return $this->fetch();
    }
}