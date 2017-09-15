<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/15
 * Time: 下午11:23
 */

namespace app\api\controller\v1;

use think\Request;

class Hello
{

    public function hello()
    {

        $param = Request::instance('param');

        $name = $param['name'];

        return $name;
    }
}