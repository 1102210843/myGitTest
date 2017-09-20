<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/20
 * Time: 下午2:46
 */

namespace app\api\controller\v1;


use app\api\validate\Count;

class Product
{
      public function getRecent($count=15){

          (new Count())->goCheck();




      }

}