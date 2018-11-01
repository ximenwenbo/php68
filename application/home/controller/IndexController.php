<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30 0030
 * Time: 15:33
 */
namespace app\home\controller;
use think\Controller;
class IndexController extends  Controller{

    public function index(){
    return $this->fetch();
    }
}