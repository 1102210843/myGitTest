<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/20
 * Time: 下午3:21
 */

namespace app\api\controller\v1;

use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;
use app\lib\exception\SuccessMessage;

class Category
{
    public function getAllCategories()
    {
        $categories = CategoryModel::all([], 'img');
        if ($categories->isEmpty()){
            throw new CategoryException();
        }
        return SuccessMessage::setData($categories);
    }
}