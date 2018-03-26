<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;


Route::get('/','admin/index/index');
Route::get('/index','admin/index/main');
Route::get('artlist','admin/article/artlist');
Route::get('artcon','admin/article/artcon');
Route::get('cate','admin/article/artcate');
Route::get('user','admin/user/index');
Route::get('role','admin/role/index');
Route::get('rule','admin/auth_rule/index');
Route::get('product','admin/product/index');
Route::get('proAdd','admin/product/add');
Route::get('login','admin/login/index');