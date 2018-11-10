<?php
namespace app\Login\controller;
use think\Controller;
class Login extends Controller{
    public function login(){
        return $this->fetch();
    }
}