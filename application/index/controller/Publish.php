<?php
namespace app\Publish\controller;
use think\Controller;
class Publish extends Controller{
    public function publish(){
        return $this->fetch();
    }
}