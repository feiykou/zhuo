<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/24
 * Time: 20:09
 */

namespace app\admin\controller;


use org\Auth;
use think\Controller;
use think\Request;

class Common extends Controller
{
    public function _initialize()
    {

        if(!session('id') || !session('name')){
            $this->error('您尚未登录系统',url('/login'));
        }

        if(session('name') == 'admin'){
            return;
        }

        $auth = new Auth();
        $request = Request::instance();
        $controll = $request->controller();
        $action = $request->action();
        $name = $controll.'/'.$action;
        $notCheck = [
            'Index/main',
            'Index/index',
            'User/logout'
        ];
        if(session('id') != 1){
            if(!in_array($name,$notCheck)){
                if(!$auth->check($name,session('id'))){
                    $this->error('没有权限访问',url('/'));
                }
            }
        }
    }
}