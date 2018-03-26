<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/25
 * Time: 15:11
 */

namespace app\admin\controller;

use app\admin\model\ArtCate;
use app\admin\model\Product as ProductModel;

class Product extends Common
{
    private $model;
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->model = new ProductModel();
    }

    public function index(){



        return $this->fetch();
    }

    // 添加页面
    public function add(){
        $cateData = ArtCate::all();
        $sortArr = sortData($cateData);
        $this->assign('cateArr',$sortArr);
        return $this->fetch();
    }

    // 添加获取数据
    public function getAddData(){
        if(request()->isPost()){
            $product = $this->model;
            $data = request()->post();

            $proData = [
                'name'         =>  $data['name'],
                'category_id'  =>  $data['category_id'],
                'price'        =>  $data['price'],
                'stock'        =>  $data['stock'],
                'summary'      =>  $data['summary'],
                'content'      =>  $data['content'],
                'attributes'   =>  $data['attributes'],
                'status'       =>  $data['status'],
                'reorder'      =>  empty($data['reorder']) ? '' : $data['reorder'],
                'publisher'    =>  empty(session('name')) ? 'admin' : session('name')
            ];

            $result = $product->save($proData);
            if($result){
                $this->success('添加成功！',url('/product'));
            }else{
                $this->error('添加失败！');
            }
        }
    }

    public function edit(){
        return $this->fetch();
    }
}