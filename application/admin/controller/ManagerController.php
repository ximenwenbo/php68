<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30 0030
 * Time: 15:33
 */
namespace app\admin\controller;
use think\Controller;
class ManagerController extends  Controller{

    public function login(){
    return $this->fetch();
    }
}