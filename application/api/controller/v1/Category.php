<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/20
 * Time: 下午3:21
 */

namespace app\api\controller\v1;

use app\api\model\Category as CategoryModel;

class Category
{
    public function getAllCategorys()
    {
        $category = CategoryModel::all([], 'img');
        return $category;
    }
}