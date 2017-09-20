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
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\ProductException;

class Product
{
      public function getRecent($count=15){

          (new Count())->goCheck();

          $products = ProductModel::getMostRecent($count);
          if ($products->isEmpty()){
              throw new ProductException();
          }
          $products = $products->hidden(['summary']);
          return $products;
      }

      public function getAllInCategory($id){
          (new IDMustBePostiveInt())->goCheck();

          $product = ProductModel::getProductsByCategoryID($id);
          if ($product->isEmpty()){
              throw new ProductException();
          }
          return $product;
      }

}