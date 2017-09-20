<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/20
 * Time: 下午2:46
 */

namespace app\api\controller\v1;


use app\api\validate\Count;
use app\api\model\Product as ProductModel;
use app\lib\exception\ProductException;

class Product
{
      public function getRecent($count=15){

          (new Count())->goCheck();

          $product = ProductModel::getMostRecent($count);
          if (!$product){
              throw new ProductException();
          }
          $collection = collection($product);
          $product = $collection->hidden('summary');
          return $product;
      }

}