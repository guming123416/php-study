<?php

/**
 * Created by PhpStorm.
 * User: yeming
 * Date: 2016/12/13
 * Time: 下午4:55
 */
namespace app\admin\controller;
use think\Controller;
use think\captcha\Captcha;

class Login extends Controller
{

    public function login(){
        return $this->fetch();
    }

    public function verify()
    {
        if (session('aid')) {
            header('Location: ' . url('Index/index'));
            exit;
        }
        ob_end_clean();
        $verify = new Captcha (config('verify'));
        return $verify->entry('aid');
    }

}