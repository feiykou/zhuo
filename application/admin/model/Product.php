<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/25
 * Time: 16:55
 */

namespace app\admin\model;


use think\Model;

class Product extends Model
{
    /**
     * 获取全部的数据
     * @return false|\PDOStatement|string|\think\Collection
     */
    public function getAllData(){
        $data = [
            'deleted' => 1
        ];

        return $this->where($data)->select();
    }

    public function cate(){
        return $this->hasMany('ArtCate')->field('name');
    }
}