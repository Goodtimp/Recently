<?php
namespace app\Share\controller;
use think\Controller;
class Share extends Controller{
    public function share(){
        return $this->fetch();
    }
}